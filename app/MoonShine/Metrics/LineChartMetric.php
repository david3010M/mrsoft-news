<?php

declare(strict_types=1);

namespace App\MoonShine\Metrics;

use Illuminate\Support\Collection;
use MoonShine\Metrics\LineChartMetric as BaseLineChartMetric;

class LineChartMetric extends BaseLineChartMetric
{
    /**
     * Fixes a bug in MoonShine\Metrics\LineChartMetric::labels() where the
     * mapWithKeys() callback returns the bare value instead of [$key => $item],
     * which throws "foreach() argument must be of type array|object, int given"
     * as soon as there is at least one data point.
     */
    public function labels(): array
    {
        return collect($this->lines())
            ->collapse()
            ->mapWithKeys(fn ($item, $key): array => [$key => $item])
            ->when(! $this->isWithoutSortKeys(), fn ($items): Collection => $items->sortKeys())
            ->keys()
            ->toArray();
    }
}