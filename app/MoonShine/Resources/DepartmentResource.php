<?php

declare(strict_types=1);

namespace App\MoonShine\Resources;

use Illuminate\Database\Eloquent\Model;
use App\Models\Department;

use MoonShine\Fields\Text;
use MoonShine\Handlers\ExportHandler;
use MoonShine\Handlers\ImportHandler;
use MoonShine\Resources\ModelResource;
use MoonShine\Decorations\Block;
use MoonShine\Fields\ID;

class DepartmentResource extends ModelResource
{
    protected string $model = Department::class;

    protected string $title = 'Departamentos';
    protected int $itemsPerPage = 6;

    public function export(): ?ExportHandler
    {
        return null;
    }

    public function import(): ?ImportHandler
    {
        return null;
    }

    public function filters(): array
    {
        return [

        ];
    }


    public function can(string $ability): bool
    {
        return match ($ability) {
            'create' => false,
            'update' => false,
            'delete' => false,
            default => true,
        };
    }

    public function fields(): array
    {
        return [
            Block::make([
                ID::make()->sortable(),
                Text::make('Name', 'name')->required(),
            ]),
        ];
    }

    public function rules(Model $item): array
    {
        return [];
    }
}
