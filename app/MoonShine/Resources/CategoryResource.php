<?php

declare(strict_types=1);

namespace App\MoonShine\Resources;

use Illuminate\Database\Eloquent\Model;
use App\Models\Category;

use MoonShine\ActionButtons\ActionButton;
use MoonShine\Buttons\CreateButton;
use MoonShine\Fields\Text;
use MoonShine\Resources\ModelResource;
use MoonShine\Decorations\Block;
use MoonShine\Fields\ID;

class CategoryResource extends ModelResource
{
    protected string $model = Category::class;

    protected string $title = 'Categories';

    protected function modifyCreateButton(ActionButton $button): ActionButton
    {
        return $button->error();
    }

    public function getCreateButton(?string $componentName = null, bool $isAsync = false): ActionButton
    {
        return CreateButton::for(
            $this,
            $componentName,
            $isAsync
        );
    }

    public function fields(): array
    {
        return [
            Block::make([
                ID::make()->sortable(),
                Text::make('Nombre', 'name')->sortable(),
                Text::make('Descripción', 'description')->sortable(),
            ]),
        ];
    }

    public function rules(Model $item): array
    {
        return [];
    }
}
