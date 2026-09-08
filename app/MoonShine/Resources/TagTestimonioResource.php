<?php

declare(strict_types=1);

namespace App\MoonShine\Resources;

use Illuminate\Database\Eloquent\Model;
use App\Models\TagTestimonio;

use MoonShine\Fields\Text;
use MoonShine\Handlers\ExportHandler;
use MoonShine\Handlers\ImportHandler;
use MoonShine\Resources\ModelResource;
use MoonShine\Decorations\Block;
use MoonShine\Decorations\Column;
use MoonShine\Decorations\Grid;
use MoonShine\Fields\ID;
use App\MoonShine\Traits\HasPerPageFilter;

class TagTestimonioResource extends ModelResource
{
    use HasPerPageFilter;

    protected string $model = TagTestimonio::class;

    protected string $title = 'Tags de testimonio';

    protected string $column = 'nombre';

    protected int $itemsPerPage = 10;

    // Formulario corto -> modal.
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
        return ['nombre'];
    }

    public function filters(): array
    {
        return [
            $this->perPageSelect(),
        ];
    }

    public function fields(): array
    {
        return [
            Block::make([
                ID::make()->hideOnIndex(),

                Grid::make([
                    Column::make([
                        Text::make('Nombre', 'nombre')->required(),
                    ])->columnSpan(12),
                ]),
            ]),
        ];
    }

    public function rules(Model $item): array
    {
        return [
            'nombre' => ['required', 'string', 'max:255'],
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
