<?php

declare(strict_types=1);

namespace App\MoonShine\Pages;

use App\Models\Category;
use App\Models\Client;
use App\Models\News;
use App\Models\Product;
use MoonShine\Decorations\Column;
use MoonShine\Decorations\Grid;
use MoonShine\Metrics\ValueMetric;
use MoonShine\Pages\Page;
use MoonShine\Decorations\Block;

class Dashboard extends Page
{
    public function breadcrumbs(): array
    {
        return [
            '#' => $this->title()
        ];
    }

    public function title(): string
    {
        return $this->title ?: 'Dashboard';
    }

    public function components(): array
    {
        return [
            Grid::make([
                Column::make([
                    ValueMetric::make('Productos')->value(Product::count()),
                    ValueMetric::make('Categorías')->value(Category::count()),
                ])->columnSpan(6),
                Column::make([
                    ValueMetric::make('Noticias')->value(News::count()),
                    ValueMetric::make('Clientes')->value(Client::count()),
                ])->columnSpan(6),
            ]),

        ];
    }

}
