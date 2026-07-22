<?php

declare(strict_types=1);

namespace App\MoonShine\Pages\Product;

use App\MoonShine\Resources\ProductPriceResource;
use MoonShine\Decorations\Divider;
use MoonShine\Decorations\Fragment;
use MoonShine\Fields\Relationships\HasMany;
use MoonShine\Pages\Crud\DetailPage;

class ProductDetailPage extends DetailPage
{
    public function fields(): array
    {
        return [];
    }

    protected function topLayer(): array
    {
        return [
            ...parent::topLayer()
        ];
    }

    protected function mainLayer(): array
    {
        return [
            ...parent::mainLayer()
        ];
    }

    protected function bottomLayer(): array
    {
        $components = parent::bottomLayer();
        $item = $this->getResource()->getItem();

        if (! $item?->exists) {
            return $components;
        }

        $field = HasMany::make('Módulos / Precios', 'prices', null, new ProductPriceResource());

        $components[] = Divider::make();
        $components[] = Fragment::make([
            $field->resolveFill($item->attributesToArray(), $item),
        ])->name('prices');

        return $components;
    }
}
