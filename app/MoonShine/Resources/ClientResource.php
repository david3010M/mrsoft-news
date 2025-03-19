<?php

declare(strict_types=1);

namespace App\MoonShine\Resources;

use Illuminate\Database\Eloquent\Model;
use App\Models\Client;

use MoonShine\Fields\File;
use MoonShine\Fields\Relationships\BelongsTo;
use MoonShine\Fields\Switcher;
use MoonShine\Fields\Text;
use MoonShine\Fields\Textarea;
use MoonShine\Handlers\ExportHandler;
use MoonShine\Handlers\ImportHandler;
use MoonShine\Resources\ModelResource;
use MoonShine\Decorations\Block;
use MoonShine\Fields\ID;

class ClientResource extends ModelResource
{
    protected string $model = Client::class;

    protected string $title = 'Clientes';
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
                Switcher::make('Activo', 'active'),
                BelongsTo::make('Producto', 'product', fn($item) => "$item->name")->required()->searchable(),
                Text::make('Nombre', 'nombre')->required(),
                Text::make('Dirección', 'direccion')->required()->hideOnIndex(),
                File::make('Logo', 'logo')
                    ->removable()
                    ->dir('clientes')
                    ->allowedExtensions(['png', 'jpg', 'jpeg', 'svg'])
                    ->keepOriginalFileName(),
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
