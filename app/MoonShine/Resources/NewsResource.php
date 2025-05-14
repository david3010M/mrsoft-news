<?php

declare(strict_types=1);

namespace App\MoonShine\Resources;

use Illuminate\Database\Eloquent\Model;
use App\Models\News;
use Illuminate\Database\Eloquent\Builder;
use MoonShine\Decorations\LineBreak;
use MoonShine\Fields\Date;
use MoonShine\Fields\File;
use MoonShine\Fields\Image;
use MoonShine\Fields\Number;
use MoonShine\Fields\Relationships\BelongsTo;
use MoonShine\Fields\Relationships\BelongsToMany;
use MoonShine\Fields\Select;
use MoonShine\Fields\Switcher;
use MoonShine\Fields\Text;
use MoonShine\Fields\Textarea;
use MoonShine\Fields\TinyMce;
use MoonShine\Handlers\ExportHandler;
use MoonShine\Handlers\ImportHandler;
use MoonShine\QueryTags\QueryTag;
use MoonShine\Resources\ModelResource;
use MoonShine\Decorations\Block;
use MoonShine\Fields\ID;

class NewsResource extends ModelResource
{
    protected string $model = News::class;

    protected string $title = 'Noticias';
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
                ID::make()->hideOnIndex(),
                Switcher::make('Activo', 'active')->default(true),
                Date::make('Fecha', 'date')->required()->format('d-m-Y'),
                BelongsTo::make('Producto', 'product', fn($item) => "$item->name")->required()->searchable(),
                BelongsTo::make('Categoría', 'category', fn($item) => "$item->name")->required()->searchable(),
                Text::make('Título', 'title')->required(),
                Textarea::make('Descripción', 'description')->required()->hideOnIndex(),
                Image::make('Imagen Cabecera', 'image')
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
        return [
            'date' => ['required', 'date'],
            'product_id' => ['required'],
            'category_id' => ['required'],
            'title' => ['required'],
            'description' => ['required'],
            'typeMedia' => ['required'],
            'content' => ['required'],

            // Imagen individual (máx. 130 KB)
            'image' => ['nullable', 'image', 'max:10240'],

            // Lista de imágenes y videos
            'images' => ['nullable', 'array'],
            'images.*' => [
                'nullable',
                function ($attribute, $value, $fail) {
                    if ($value instanceof \Illuminate\Http\UploadedFile) {
                        $extension = $value->getClientOriginalExtension();
                        $size = $value->getSize() / 1024; // Convertimos bytes a KB

                        if (in_array($extension, ['png', 'jpg', 'jpeg', 'gif']) && $size > 10240) {
                            return $fail("Las imágenes y GIFs deben pesar máximo 10 MB.");
                        }

                        if (in_array($extension, ['mp4', 'avi']) && $size > 10240) {
                            return $fail("Los videos deben pesar máximo 10 MB.");
                        }
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
