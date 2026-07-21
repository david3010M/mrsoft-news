<?php

declare(strict_types=1);

namespace App\MoonShine\Traits;

use Illuminate\Contracts\Pagination\LengthAwarePaginator;
use Illuminate\Contracts\Pagination\Paginator;
use Illuminate\Database\Eloquent\Builder;
use MoonShine\Fields\Select;

trait HasPerPageFilter
{
    public function paginate(): Paginator
    {
        $perPage = (int) request()->input('filters.per_page', $this->itemsPerPage);
        if (! in_array($perPage, [10, 25, 50, 100])) {
            $perPage = $this->itemsPerPage;
        }

        return $this->resolveQuery()
            ->when(
                $this->isSimplePaginate(),
                fn (Builder $query): Paginator => $query->simplePaginate($perPage),
                fn (Builder $query): LengthAwarePaginator => $query->paginate($perPage),
            )
            ->appends(request()->except('page'));
    }

    protected function perPageSelect(): Select
    {
        return Select::make('Por página', 'per_page')
            ->options([
                10  => '10 / pág.',
                25  => '25 / pág.',
                50  => '50 / pág.',
                100 => '100 / pág.',
            ])
            ->nullable()
            ->onApply(fn ($q) => $q);
    }
}
