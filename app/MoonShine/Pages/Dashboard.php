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
                    ValueMetric::make('Noticias')
                        ->icon('heroicons.newspaper')
                        ->value(News::count()),
                ])->columnSpan(3),
                Column::make([
                    ValueMetric::make('Reels')
                        ->icon('heroicons.outline.device-phone-mobile')
                        ->value(Reel::count()),
                ])->columnSpan(3),
                Column::make([
                    ValueMetric::make('Clientes')
                        ->icon('heroicons.outline.user-group')
                        ->value(Client::count()),
                ])->columnSpan(3),
                Column::make([
                    ValueMetric::make('Productos')
                        ->icon('heroicons.outline.rocket-launch')
                        ->value(Product::count()),
                ])->columnSpan(3),
                Column::make([
                    ValueMetric::make('Categorías')
                        ->icon('heroicons.outline.cube')
                        ->value(Category::count()),
                ])->columnSpan(3),
                Column::make([
                    ValueMetric::make('Comentarios')
                        ->icon('heroicons.outline.chat-bubble-bottom-center-text')
                        ->value(Comment::count()),
                ])->columnSpan(3),
                Column::make([
                    ValueMetric::make('Departamentos')
                        ->icon('heroicons.map')
                        ->value(Department::count()),
                ])->columnSpan(3),
                Column::make([
                    ValueMetric::make('Tipos')
                        ->icon('heroicons.finger-print')
                        ->value(Type::count()),
                ])->columnSpan(3),
            ])->customAttributes(['class' => 'gap-3 mb-4']),

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
