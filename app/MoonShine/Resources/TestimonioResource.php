<?php

declare(strict_types=1);

namespace App\MoonShine\Resources;

use Illuminate\Database\Eloquent\Model;
use App\Models\Testimonio;

use MoonShine\Fields\Relationships\BelongsTo;
use MoonShine\Fields\Relationships\BelongsToMany;
use MoonShine\Fields\Switcher;
use MoonShine\Fields\Text;
use MoonShine\Fields\Textarea;
use MoonShine\Fields\Url;
use MoonShine\Handlers\ExportHandler;
use MoonShine\Handlers\ImportHandler;
use MoonShine\Resources\ModelResource;
use MoonShine\Decorations\Block;
use MoonShine\Decorations\Column;
use MoonShine\Decorations\Grid;
use MoonShine\Fields\ID;
use App\MoonShine\Traits\HasPerPageFilter;

class TestimonioResource extends ModelResource
{
    use HasPerPageFilter;

    protected string $model = Testimonio::class;

    protected string $title = 'Testimonios';

    protected string $column = 'titulo';

    protected int $itemsPerPage = 10;

    // Formulario corto -> se abre en modal, sin salir del listado.
    protected bool $isAsync = true;

    protected bool $createInModal = true;

    protected bool $editInModal = true;

    public function export(): ?ExportHandler
    {
        return null;
    }

    public function import(): ?ImportHandler
    {
        return null;
    }

    public function search(): array
    {
        return ['titulo', 'descripcion'];
    }

    public function filters(): array
    {
        return [
            Switcher::make('Destacado', 'destacado'),
            Switcher::make('Activo', 'active'),
            $this->perPageSelect(),
        ];
    }

    public function fields(): array
    {
        return [
            Block::make([
                ID::make()->hideOnIndex(),

                Grid::make([
                    // El producto va primero; al cambiarlo, un script recarga
                    // las opciones del select Cliente (clientes de ese producto).
                    Column::make([
                        BelongsTo::make('Producto', 'product', fn($item) => "$item->name")
                            ->required()
                            ->nullable()
                            ->placeholder('Seleccione un producto')
                            ->searchable(),
                    ])->columnSpan(6),
                    Column::make([
                        BelongsTo::make('Cliente', 'client', fn($item) => "$item->nombre")
                            ->nullable()
                            ->searchable(),
                    ])->columnSpan(6),

                    // Tags del testimonio. Lista completa (no dependen del
                    // producto). El botón "Agregar" crea un tag y lo deja
                    // seleccionado sin recargar (ver assets.blade.php).
                    Column::make([
                        BelongsToMany::make('Tags', 'tags', fn($item) => $item->nombre, new TagTestimonioResource())
                            ->selectMode()
                            ->searchable()
                            ->creatable()
                            ->inLine(separator: ' ', badge: true)
                            ->nullable(),
                    ])->columnSpan(12),

                    Column::make([
                        Text::make('Título', 'titulo')->required(),
                    ])->columnSpan(12),
                    Column::make([
                        Url::make('URL', 'url')->required(),
                    ])->columnSpan(12),

                    Column::make([
                        Switcher::make('Activo', 'active')->default(true),
                    ])->columnSpan(6),
                    Column::make([
                        Switcher::make('Destacado', 'destacado'),
                    ])->columnSpan(6),

                    Column::make([
                        Textarea::make('Descripción', 'descripcion')->hideOnIndex(),
                    ])->columnSpan(12),
                ]),
            ]),
        ];
    }

    public function rules(Model $item): array
    {
        return [
            'titulo' => ['required', 'string', 'max:255'],
            'url' => ['required', 'string', 'max:255'],
            'descripcion' => ['nullable', 'string'],
            'destacado' => ['boolean'],
            'active' => ['boolean'],
            'product_id' => ['required', 'exists:products,id'],
            'tags' => ['nullable', 'array'],
            'tags.*' => ['integer', 'exists:tag_testimonios,id'],
            'client_id' => [
                'nullable',
                'exists:clients,id',
                // El cliente debe pertenecer al producto elegido (Client -> type -> product).
                function ($attribute, $value, $fail) {
                    $productId = request()->input('product_id');

                    if ($value && $productId && ! \App\Models\Client::whereKey($value)
                        ->whereHas('type', fn($q) => $q->where('product_id', $productId))
                        ->exists()) {
                        $fail('El cliente seleccionado no pertenece al producto elegido.');
                    }
                },
            ],
        ];
    }

    public function redirectAfterSave(): string
    {
        return $this->url();
    }

    public function redirectAfterDelete(): string
    {
        return $this->url();
    }
}
