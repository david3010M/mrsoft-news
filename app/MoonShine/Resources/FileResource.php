<?php

declare(strict_types=1);

namespace App\MoonShine\Resources;

use Illuminate\Database\Eloquent\Model;
use App\Models\File;

use MoonShine\Resources\ModelResource;
use MoonShine\Decorations\Block;
use MoonShine\Fields\ID;

class FileResource extends ModelResource
{
    protected string $model = File::class;

    protected string $title = 'Files';

    public function fields(): array
    {
        return [
            Block::make([
                ID::make()->sortable(),
                \MoonShine\Fields\File::make('Archivo', 'path')
                    ->required()
                    ->allowedExtensions(['png', 'jpg', 'jpeg', 'mp4', 'avi', 'gif'])
                    ->keepOriginalFileName(),
            ]),
        ];
    }

    public function rules(Model $item): array
    {
        return [];
    }
}
