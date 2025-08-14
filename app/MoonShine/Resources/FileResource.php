<?php

declare(strict_types=1);

namespace App\MoonShine\Resources;

use Illuminate\Database\Eloquent\Model;
use App\Models\File;

use MoonShine\Fields\Text;
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
                Text::make('Nombre', 'name')
                    ->required(),
                // Solo mostrar el tipo como lectura
                Text::make('Tipo', 'type')
                    ->hideOnForm(),
                \MoonShine\Fields\File::make('Archivo', 'path')
                    ->required()
                    ->allowedExtensions(['png', 'jpg', 'jpeg', 'mp4', 'avi', 'gif', 'pdf', 'docx', 'mp3'])
                    ->disk('public')
                    ->keepOriginalFileName(),
            ]),
        ];
    }

    public function rules(Model $item): array
    {
        return [];
    }
}
