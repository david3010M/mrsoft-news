<?php

declare(strict_types=1);

namespace App\MoonShine\Resources;

use Illuminate\Database\Eloquent\Model;
use App\Models\Client;

use MoonShine\Fields\File;
use MoonShine\Fields\Image;
use MoonShine\Fields\Relationships\BelongsTo;
use MoonShine\Fields\Select;
use MoonShine\Fields\Switcher;
use MoonShine\Fields\Text;
use MoonShine\Fields\Textarea;
use MoonShine\Handlers\ExportHandler;
use MoonShine\Handlers\ImportHandler;
use MoonShine\Resources\ModelResource;
use MoonShine\Decorations\Block;
use MoonShine\Fields\ID;

const DEPARTAMENTOS = [
    'Amazonas' => 'Amazonas',
    'Áncash' => 'Áncash',
    'Apurímac' => 'Apurímac',
    'Arequipa' => 'Arequipa',
    'Ayacucho' => 'Ayacucho',
    'Cajamarca' => 'Cajamarca',
    'Callao' => 'Callao',
    'Cusco' => 'Cusco',
    'Huancavelica' => 'Huancavelica',
    'Huánuco' => 'Huánuco',
    'Ica' => 'Ica',
    'Junín' => 'Junín',
    'La Libertad' => 'La Libertad',
    'Lambayeque' => 'Lambayeque',
    'Lima' => 'Lima',
    'Loreto' => 'Loreto',
    'Madre de Dios' => 'Madre de Dios',
    'Moquegua' => 'Moquegua',
    'Pasco' => 'Pasco',
    'Piura' => 'Piura',
    'Puno' => 'Puno',
    'San Martín' => 'San Martín',
    'Tacna' => 'Tacna',
    'Tumbes' => 'Tumbes',
    'Ucayali' => 'Ucayali',
];

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
//            departamento
            Select::make('Departamento', 'departamento')
                ->options(DEPARTAMENTOS)
                ->searchable()
                ->multiple()
                ->placeholder('Seleccionar departamento'),

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
                Text::make('Dirección', 'direccion')->required()->hideOnIndex(),
//                File::make('Logo', 'logo')
//                    ->removable()
//                    ->dir('clientes')
//                    ->allowedExtensions(['png', 'jpg', 'jpeg', 'svg'])
//                    ->keepOriginalFileName(),
                Image::make('Logo', 'logo')
                    ->removable()
                    ->dir('clientes')
                    ->allowedExtensions(['png', 'jpg', 'jpeg', 'svg'])
                    ->keepOriginalFileName(),
                Select::make('Departamento', 'departamento')
                    ->options(DEPARTAMENTOS)->required(),
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
            'logo' => ['nullable', 'image', 'max:130'],
            'departamento' => ['required'],
            'imagen_referencia' => ['nullable', 'image', 'max:130'],
            'flyer_bienvenida' => ['nullable', 'image', 'max:130'],
            'flyer_informativo' => ['nullable', 'image', 'max:130'],
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
