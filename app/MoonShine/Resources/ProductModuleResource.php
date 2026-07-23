<?php

declare(strict_types=1);

namespace App\MoonShine\Resources;

use Illuminate\Database\Eloquent\Model;
use App\Models\ProductModule;

use MoonShine\Decorations\Block;
use MoonShine\Decorations\Column;
use MoonShine\Decorations\Grid;
use MoonShine\Fields\ID;
use MoonShine\Fields\Json;
use MoonShine\Fields\Number;
use MoonShine\Fields\Select;
use MoonShine\Fields\Text;
use MoonShine\Fields\Textarea;
use MoonShine\Handlers\ExportHandler;
use MoonShine\Handlers\ImportHandler;
use MoonShine\Resources\ModelResource;

class ProductModuleResource extends ModelResource
{
    protected string $model = ProductModule::class;

    protected string $title = 'Módulos';

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

                Grid::make([
                    Column::make([
                        Text::make('Nombre', 'name')->required(),
                    ])->columnSpan(3),
                    Column::make([
                        Select::make('Destacado', 'is_featured')
                            ->options(['1' => 'Sí', '0' => 'No'])
                            ->default('0')->hideOnIndex(),
                    ])->columnSpan(2),
                    Column::make([
                        Select::make('A cotizar', 'is_quote')
                            ->options(['1' => 'Sí', '0' => 'No'])
                            ->default('0')->hideOnIndex(),
                    ])->columnSpan(2),
                    Column::make([
                        Number::make('Precio mensual', 'monthly')->min(0)->step(0.01)->nullable(),
                    ])->columnSpan(2),
                    Column::make([
                        Number::make('Precio anual', 'annual')->min(0)->step(0.01)->nullable(),
                    ])->columnSpan(3),
                ]),

                Grid::make([
                    Column::make([
                        Text::make('Descripción corta', 'short_description')->nullable(),
                    ])->columnSpan(12),
                ]),

                Grid::make([
                    Column::make([
                        Text::make('Mensaje de cotización', 'quote_message')
                            ->nullable()
                            ->showWhen('is_quote', '1')->hideOnIndex(),
                    ])->columnSpan(12),
                ]),

                Grid::make([
                    Column::make([
                        Textarea::make('Descripción', 'description')->nullable(),
                    ])->columnSpan(12),
                ]),

                Grid::make([
                    Column::make([
                        Json::make('Características', 'features')
                            ->fields([
                                Text::make('Nombre', 'name')->required(),
                                Text::make('Descripción', 'description')->nullable(),
                            ])
                            ->creatable()
                            ->removable()
                            ->hideOnIndex(),
                    ])->columnSpan(12),
                ]),
            ]),
        ];
    }

    protected function beforeCreating(Model $item): Model
    {
        if (!$item->product_id && request()->has('product_id')) {
            $item->product_id = (int)request('product_id');
        }

        return $item;
    }

    public function rules(Model $item): array
    {
        return [
            'name' => 'required|string|max:255',
            'short_description' => 'nullable|string|max:255',
            'description' => 'nullable|string',
            'is_featured' => 'nullable|in:0,1',
            'monthly' => 'nullable|numeric|min:0',
            'annual' => 'nullable|numeric|min:0',
            'is_quote' => 'nullable|in:0,1',
            'quote_message' => 'nullable|string|max:255',
        ];
    }
}
