<?php

declare(strict_types=1);

namespace App\MoonShine\Pages;

use App\Models\Category;
use App\Models\Client;
use App\Models\Comment;
use App\Models\Department;
use App\Models\News;
use App\Models\Product;
use App\Models\Reel;
use App\Models\Type;
use MoonShine\Decorations\Column;
use MoonShine\Decorations\Grid;
use MoonShine\Metrics\DonutChartMetric;
use MoonShine\Metrics\LineChartMetric;
use MoonShine\Metrics\ValueMetric;
use MoonShine\Pages\Page;

class Dashboard extends Page
{
    public function breadcrumbs(): array
    {
        return ['#' => $this->title()];
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
                    ValueMetric::make('Noticias')->value(News::count()),
                ])->columnSpan(3),
                Column::make([
                    ValueMetric::make('Reels')->value(Reel::count()),
                ])->columnSpan(3),
                Column::make([
                    ValueMetric::make('Clientes')->value(Client::count()),
                ])->columnSpan(3),
                Column::make([
                    ValueMetric::make('Productos')->value(Product::count()),
                ])->columnSpan(3),
            ])->customAttributes(['class' => 'gap-4 mb-5']),

            Grid::make([
                Column::make([
                    ValueMetric::make('Categorías')->value(Category::count()),
                ])->columnSpan(3),
                Column::make([
                    ValueMetric::make('Comentarios')->value(Comment::count()),
                ])->columnSpan(3),
                Column::make([
                    ValueMetric::make('Departamentos')->value(Department::count()),
                ])->columnSpan(3),
                Column::make([
                    ValueMetric::make('Tipos')->value(Type::count()),
                ])->columnSpan(3),
            ])->customAttributes(['class' => 'gap-4 mb-5']),

            Grid::make([
                Column::make([
                    LineChartMetric::make('Noticias por mes')
                        ->line(
                            fn() => News::selectRaw("DATE_FORMAT(created_at, '%Y-%m') as period, count(*) as total")
                                ->where('created_at', '>=', now()->subMonths(11)->startOfMonth())
                                ->groupBy('period')
                                ->orderBy('period')
                                ->pluck('total', 'period')
                                ->toArray(),
                            '#0e7490'
                        )
                        ->withoutSortKeys(),
                ])->columnSpan(8),

                Column::make([
                    DonutChartMetric::make('Distribución')
                        ->values([
                            'Noticias'   => News::count(),
                            'Reels'      => Reel::count(),
                            'Productos'  => Product::count(),
                            'Clientes'   => Client::count(),
                        ]),
                ])->columnSpan(4),
            ])->customAttributes(['class' => 'gap-4']),
        ];
    }
}
