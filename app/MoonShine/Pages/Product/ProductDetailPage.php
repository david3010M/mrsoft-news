<?php

declare(strict_types=1);

namespace App\MoonShine\Pages\Product;

use MoonShine\Components\TableBuilder;
use MoonShine\Decorations\Block;
use MoonShine\Decorations\Divider;
use MoonShine\Decorations\Heading;
use MoonShine\Fields\Number;
use MoonShine\Fields\Select;
use MoonShine\Fields\Text;
use MoonShine\Pages\Crud\DetailPage;

class ProductDetailPage extends DetailPage
{
    public function fields(): array
    {
        return [];
    }

    protected function bottomLayer(): array
    {
        $components = parent::bottomLayer();
        $item = $this->getResource()->getItem();

        if (! $item?->exists) {
            return $components;
        }

        $modules = collect($item->modules);

        if ($modules->isEmpty()) {
            return $components;
        }

        $table = TableBuilder::make(
            fields: [
                Text::make('Módulo', 'name'),
                Number::make('Mensual', 'monthly'),
                Number::make('Anual', 'annual'),
                Select::make('A cotizar', 'is_quote')->options(['1' => 'Sí', '0' => 'No']),
                Text::make('Mensaje', 'quote_message'),
            ],
            items: $modules,
        )->simple()->preview();

        $components[] = Divider::make();
        $components[] = Heading::make('Módulos / Precios');
        $components[] = Block::make([$table]);

        return $components;
    }
}
