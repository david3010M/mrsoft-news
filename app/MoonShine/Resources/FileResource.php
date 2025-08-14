<?php

declare(strict_types=1);

namespace App\MoonShine\Resources;

use Illuminate\Database\Eloquent\Model;
use App\Models\File;

use MoonShine\ActionButtons\ActionButton;
use MoonShine\Fields\Text;
use MoonShine\MoonShineUI;
use MoonShine\Resources\ModelResource;
use MoonShine\Decorations\Block;
use MoonShine\Fields\ID;

class FileResource extends ModelResource
{
    protected string $model = File::class;

    protected string $title = 'Files';

    public function indexButtons(): array
    {
        return [
            ActionButton::make(
                fn($item) => 'Copiar enlace',
                fn($item) => sprintf(
                    "javascript:(function(){navigator.clipboard.writeText('%s').then(function(){window.dispatchEvent(new CustomEvent('toast',{detail:{type:'success',text:'Enlace copiado'}}));});})();",
                    addslashes(url('storage/' . $item->path))
                )
            )->icon('heroicons.clipboard'),
        ];
    }


    public function fields(): array
    {
        return [
            Block::make([
                ID::make()->sortable(),
                Text::make('Nombre', 'name')->required(),
                Text::make('Tipo', 'type')->hideOnForm(),
                \MoonShine\Fields\File::make('Archivo', 'path')
                    ->required()
                    ->allowedExtensions(['png', 'jpg', 'jpeg', 'mp4', 'avi', 'gif', 'pdf', 'docx', 'mp3'])
                    ->keepOriginalFileName(),
            ]),
        ];
    }


    public function rules(Model $item): array
    {
        return [];
    }
}
