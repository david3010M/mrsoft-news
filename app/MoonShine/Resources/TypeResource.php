<?php

declare(strict_types=1);

namespace App\MoonShine\Resources;

use Illuminate\Database\Eloquent\Model;
use App\Models\Type;

use MoonShine\Fields\Relationships\BelongsTo;
use MoonShine\Fields\Switcher;
use MoonShine\Fields\Text;
use MoonShine\Handlers\ExportHandler;
use MoonShine\Handlers\ImportHandler;
use MoonShine\Resources\ModelResource;
use MoonShine\Decorations\Block;
use MoonShine\Fields\ID;

class TypeResource extends ModelResource
{
    protected string $model = Type::class;

    protected string $title = 'Tipos';
    protected int $itemsPerPage = 4;

    public function export(): ?ExportHandler
    {
        return null;
    }

    public function import(): ?ImportHandler
    {
        return null;
    }

    public function filters(): array
    {
        return [
            BelongsTo::make('Producto', 'product', fn($item) => "$item->name")->required()->searchable(),
        ];
    }

    public function fields(): array
    {
        return [
            Block::make([
                ID::make()->sortable(),
                Switcher::make('Activo', 'active')->default(true),
                Text::make('Nombre', 'name')->required(),
                BelongsTo::make('Producto', 'product', fn($item) => "$item->name")->required()->searchable(),
            ]),
        ];
    }

    public function rules(Model $item): array
    {
        return [
            'name' => 'required|string|max:255',
            'active' => 'boolean',
            'product_id' => 'required|exists:products,id',
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
