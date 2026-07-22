<?php

declare(strict_types=1);

namespace App\MoonShine\Resources;

use Illuminate\Database\Eloquent\Model;
use App\Models\ProductPrice;

use MoonShine\Decorations\Block;
use MoonShine\Fields\ID;
use MoonShine\Fields\Number;
use MoonShine\Fields\Select;
use MoonShine\Fields\Switcher;
use MoonShine\Fields\Text;
use MoonShine\Handlers\ExportHandler;
use MoonShine\Handlers\ImportHandler;
use MoonShine\Resources\ModelResource;

class ProductPriceResource extends ModelResource
{
    protected string $model = ProductPrice::class;

    protected string $title = 'Precios';

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
                Text::make('Módulo', 'name')->required(),
                Select::make('Período', 'period')
                    ->options([
                        'monthly' => 'Mensual',
                        'annual'  => 'Anual',
                        'quote'   => 'A cotizar',
                    ])
                    ->required(),
                Number::make('Precio', 'price')
                    ->min(0)
                    ->step(0.01)
                    ->nullable(),
                Switcher::make('A cotizar', 'is_quote')->default(false),
                Text::make('Mensaje de cotización', 'quote_message')->nullable(),
            ]),
        ];
    }

    protected function beforeCreating(Model $item): Model
    {
        if (! $item->product_id && request()->has('product_id')) {
            $item->product_id = (int) request('product_id');
        }

        return $item;
    }

    public function rules(Model $item): array
    {
        return [
            'name'          => 'required|string|max:255',
            'period'        => 'required|in:monthly,annual,quote',
            'price'         => 'nullable|numeric|min:0',
            'is_quote'      => 'boolean',
            'quote_message' => 'nullable|string|max:255',
        ];
    }
}
