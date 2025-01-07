<?php

declare(strict_types=1);

namespace App\MoonShine\Resources;

use Illuminate\Database\Eloquent\Model;
use App\Models\News;

use MoonShine\Fields\Relationships\BelongsTo;
use MoonShine\Fields\Text;
use MoonShine\Fields\Textarea;
use MoonShine\Resources\ModelResource;
use MoonShine\Decorations\Block;
use MoonShine\Fields\ID;

class NewsResource extends ModelResource
{
    protected string $model = News::class;

    protected string $title = 'News';

    public function fields(): array
    {
        return [
            Block::make([
                ID::make(),
                BelongsTo::make('Category', 'category', fn($item) => "$item->name")->required(),
                Text::make('Título', 'title')->required(),
                Textarea::make('Descripción', 'description')->required(),
            ]),
        ];
    }

    public function rules(Model $item): array
    {
        return [];
    }
}
