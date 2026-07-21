<?php

declare(strict_types=1);

namespace App\MoonShine\Resources;

use Illuminate\Contracts\Pagination\Paginator;
use Illuminate\Database\Eloquent\Model;
use App\Models\Category;

use MoonShine\ActionButtons\ActionButton;
use MoonShine\Buttons\CreateButton;
use MoonShine\Fields\Text;
use MoonShine\Handlers\ExportHandler;
use MoonShine\Handlers\ImportHandler;
use MoonShine\Resources\ModelResource;
use MoonShine\Decorations\Block;
use MoonShine\Fields\ID;
use App\MoonShine\Traits\HasPerPageFilter;

class CategoryResource extends ModelResource
{
    use HasPerPageFilter;

    protected string $model = Category::class;
    protected string $title = 'Categories';
    protected bool $createInModal = true;
    protected bool $editInModal = true;
    protected bool $detailInModal = true;
    protected int $itemsPerPage = 10;

    public function export(): ?ExportHandler
    {
        return null;
    }

    public function import(): ?ImportHandler
    {
        return null;
    }

    public function fields(): array
    {
        return [
            Block::make([
                ID::make()->sortable(),
                Text::make('Nombre', 'name')->sortable()->required(),
                Text::make('Descripción', 'description')->sortable()->required(),
            ]),
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

    public function filters(): array
    {
        return [
            $this->perPageSelect(),
        ];
    }

    public function search(): array
    {
        return ['name', 'description'];
    }


    public function rules(Model $item): array
    {
        return [];
    }
}
