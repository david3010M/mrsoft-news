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
     *
     * Reads the raw $this->lines property (flat "period => value" maps) rather
     * than $this->lines(), since lines() is overridden below to return a
     * differently shaped array for the view.
     */
    public function labels(): array
    {
        return collect($this->lines)
            ->collapse()
            ->mapWithKeys(fn ($item, $key): array => [$key => $item])
            ->when(! $this->isWithoutSortKeys(), fn ($items): Collection => $items->sortKeys())
            ->keys()
            ->toArray();
    }

    /**
     * Fixes a second, related bug: the bundled line-chart.blade.php view calls
     * array_values($values) on each entry of a line, which assumes lines are
     * shaped as ["series name" => [values...]]. ->line() is used here with a
     * flat "period => value" map instead (needed for labels() above), so each
     * value is a bare scalar and array_values() throws "Argument #1 ($array)
     * must be of type array, int given". Wrap every flat line under its series
     * name so the view gets the nested shape it expects.
     */
    public function lines(): array
    {
        return array_map(
            fn (array $line): array => [$this->label() => $line],
            $this->lines,
        );
    }
}