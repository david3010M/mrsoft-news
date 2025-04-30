<?php

declare(strict_types=1);

namespace App\MoonShine\Resources;

use Illuminate\Database\Eloquent\Model;
use App\Models\Address;

use MoonShine\Fields\Relationships\BelongsTo;
use MoonShine\Fields\Text;
use MoonShine\Handlers\ExportHandler;
use MoonShine\Handlers\ImportHandler;
use MoonShine\Resources\ModelResource;
use MoonShine\Decorations\Block;
use MoonShine\Fields\ID;

class AddressResource extends ModelResource
{
    protected string $model = Address::class;

    protected string $title = 'Direcciones';
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
        return [];
    }

    public function fields(): array
    {
        return [
            Block::make([
                ID::make()->sortable(),
                Text::make('Direccion', 'address')->required(),
                Text::make('Referencia', 'reference'),
                BelongsTo::make('Cliente', 'client', fn($item) => "$item->nombre")->required()->searchable(),
                BelongsTo::make('Departamento', 'department', fn($item) => "$item->name")->required()->searchable(),
            ]),
        ];
    }

    public function rules(Model $item): array
    {
        return [
            'address' => 'required|string|max:255',
        ];
    }
}
