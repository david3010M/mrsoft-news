<?php

declare(strict_types=1);

namespace App\MoonShine\Resources;

use Illuminate\Database\Eloquent\Model;
use App\Models\Reel;

use Illuminate\Validation\Rule;
use MoonShine\Fields\File;
use MoonShine\Fields\Relationships\BelongsTo;
use MoonShine\Fields\Switcher;
use MoonShine\Fields\Text;
use MoonShine\Fields\Textarea;
use MoonShine\Fields\Number;
use MoonShine\Handlers\ExportHandler;
use MoonShine\Handlers\ImportHandler;
use MoonShine\Resources\ModelResource;
use MoonShine\Decorations\Block;
use MoonShine\Fields\ID;

class ReelResource extends ModelResource
{
    protected string $model = Reel::class;

    protected string $title = 'Reels';

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
                BelongsTo::make('Producto', 'product', fn($item) => "$item->name")->required()->searchable(),
                Text::make('Título', 'title')->required(),
                Number::make('Orden', 'order')->required()->default(Reel::max('order') + 1),
                Textarea::make('Descripción', 'description')->required()->hideOnIndex(),
                File::make('Video', 'video')
                    ->removable()
                    ->dir('reels')
                    ->allowedExtensions(['mp4'])
                    ->keepOriginalFileName(),
            ]),
        ];
    }

    public function rules(Model $item): array
    {
        return [
            'order' => ['required', 'integer', 'min:1', Rule::unique('reels', 'order')->where('active', true)->ignore($item->id)],
            'video' => [
                $item->exists ? 'nullable' : 'required', // Requerido al crear, nullable al editar
                'mimes:mp4,mov,avi',
                'max:2048',
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
