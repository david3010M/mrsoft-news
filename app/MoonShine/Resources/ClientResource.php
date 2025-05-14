<?php

declare(strict_types=1);

namespace App\MoonShine\Resources;

use App\Models\Department;
use Illuminate\Database\Eloquent\Model;
use App\Models\Client;

use MoonShine\Enums\PageType;
use MoonShine\Fields\File;
use MoonShine\Fields\Image;
use MoonShine\Fields\Relationships\BelongsTo;
use MoonShine\Fields\Relationships\HasMany;
use MoonShine\Fields\Select;
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
            BelongsTo::make('Tipos', 'type', fn($item) => "$item->name - {$item->product['name']}")->required()->searchable(),

        ];
    }

    public function fields(): array
    {
        return [
            Block::make([
                ID::make()->hideOnIndex(),
                Switcher::make('Activo', 'active')->default(true),
                BelongsTo::make('Tipo', 'type', fn($item) => $item && $item->product ? "$item->name - {$item->product['name']}" : "$item->name")->required()->searchable(),
                Text::make('Nombre', 'nombre')->required(),
//                File::make('Logo', 'logo')
//                    ->removable()
//                    ->dir('clientes')
//                    ->allowedExtensions(['png', 'jpg', 'jpeg', 'svg'])
//                    ->keepOriginalFileName(),
                HasMany::make('Direcciones', 'addresses', resource: new AddressResource())->hideOnIndex()->creatable(),
                Image::make('Logo', 'logo')
                    ->removable()
                    ->dir('clientes')
                    ->allowedExtensions(['png', 'jpg', 'jpeg', 'svg'])
                    ->keepOriginalFileName(),
                Image::make('Imagen de referencia', 'imagen_referencia')
                    ->removable()
                    ->dir('clientes')
                    ->allowedExtensions(['png', 'jpg', 'jpeg', 'svg'])
                    ->keepOriginalFileName(),

                Image::make('Flyer de bienvenida', 'flyer_bienvenida')
                    ->removable()
                    ->dir('clientes')
                    ->allowedExtensions(['png', 'jpg', 'jpeg', 'svg'])
                    ->keepOriginalFileName(),

                Image::make('Flyer informativo', 'flyer_informativo')
                    ->removable()
                    ->dir('clientes')
                    ->allowedExtensions(['png', 'jpg', 'jpeg', 'svg'])
                    ->keepOriginalFileName(),

            ]),
        ];
    }

    public function rules(Model $item): array
    {
        return [
            'logo' => ['nullable', 'image', 'max:10240'],
            'imagen_referencia' => ['nullable', 'image', 'max:10240'],
            'flyer_bienvenida' => ['nullable', 'image', 'max:10240'],
            'flyer_informativo' => ['nullable', 'image', 'max:10240'],
        ];
    }

    protected ?PageType $redirectAfterSave = PageType::DETAIL;

//    public function redirectAfterSave(): string
//    {
//        return $this->route('show', $this->getItem()->id);
//    }

    public function redirectAfterDelete(): string
    {
        return $this->url();
    }
}
