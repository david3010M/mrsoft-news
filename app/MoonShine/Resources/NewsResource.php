<?php

declare(strict_types=1);

namespace App\MoonShine\Resources;

use Illuminate\Database\Eloquent\Model;
use App\Models\News;

use MoonShine\Decorations\LineBreak;
use MoonShine\Fields\Date;
use MoonShine\Fields\File;
use MoonShine\Fields\Image;
use MoonShine\Fields\Number;
use MoonShine\Fields\Relationships\BelongsTo;
use MoonShine\Fields\Relationships\BelongsToMany;
use MoonShine\Fields\Select;
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
                ID::make()->hideOnIndex(),
                Date::make('Fecha', 'date')->required()->format('d-m-Y'),
                BelongsTo::make('Producto', 'product', fn($item) => "$item->name")->required()->searchable(),
                BelongsTo::make('Categoría', 'category', fn($item) => "$item->name")->required()->searchable(),
                Text::make('Título', 'title')->required(),
                Textarea::make('Descripción', 'description')->required()->hideOnIndex(),
                Image::make('Imagen Cabecera', 'image')
                    ->required()
                    ->removable()
                    ->dir('newsIntroImages')
                    ->allowedExtensions(['png', 'jpg', 'jpeg'])
                    ->keepOriginalFileName(),
                Select::make('Multimedia', 'typeMedia')
                    ->options([
                        'slider' => 'Slider',
                        'video' => 'Video',
                        'image' => 'Imagen',
                    ])
                    ->hideOnIndex()
                    ->required(),
                File::make('Archivos', 'images')
                    ->required()
                    ->removable()
                    ->hideOnIndex()
                    ->multiple()
                    ->dir('newsImages')
                    ->allowedExtensions(['png', 'jpg', 'jpeg', 'mp4', 'avi', 'gif'])
                    ->keepOriginalFileName(),
                TinyMce::make('Contenido', 'content')
                    ->hideOnIndex()
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
