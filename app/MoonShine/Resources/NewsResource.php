<?php

declare(strict_types=1);

namespace App\MoonShine\Resources;

use Illuminate\Database\Eloquent\Model;
use App\Models\News;

use MoonShine\Fields\Relationships\BelongsTo;
use MoonShine\Fields\Text;
use MoonShine\Fields\Textarea;
use MoonShine\Fields\TinyMce;
use MoonShine\Handlers\ExportHandler;
use MoonShine\Handlers\ImportHandler;
use MoonShine\Resources\ModelResource;
use MoonShine\Decorations\Block;
use MoonShine\Fields\ID;

class NewsResource extends ModelResource
{
    protected string $model = News::class;

    protected string $title = 'News';
    protected int $itemsPerPage = 4;

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
                ID::make(),
                BelongsTo::make('Producto', 'product', fn($item) => "$item->name")->required(),
                BelongsTo::make('Categoría', 'category', fn($item) => "$item->name")->required(),
                Text::make('Título', 'title')->required(),
                Textarea::make('Descripción', 'description')->required(),
                TinyMce::make('Contenido', 'content')
                    ->hideOnIndex()
                    ->required(),
            ]),
        ];
    }

    public function rules(Model $item): array
    {
        return [];
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
