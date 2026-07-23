<?php

declare(strict_types=1);

namespace App\MoonShine\Resources;

use Illuminate\Database\Eloquent\Model;
use App\Models\Product;
use App\MoonShine\Pages\Product\ProductIndexPage;
use App\MoonShine\Pages\Product\ProductFormPage;
use App\MoonShine\Pages\Product\ProductDetailPage;

use MoonShine\Decorations\Block;
use MoonShine\Fields\ID;
use MoonShine\Fields\Color;
use MoonShine\Fields\Number;
use MoonShine\Fields\Relationships\HasMany;
use MoonShine\Fields\Text;
use MoonShine\Enums\PageType;
use MoonShine\Handlers\ExportHandler;
use MoonShine\Handlers\ImportHandler;
use MoonShine\Resources\ModelResource;
use App\MoonShine\Traits\HasPerPageFilter;

class ProductResource extends ModelResource
{
    use HasPerPageFilter;

    protected string $model = Product::class;

    protected string $title = 'Productos';
    protected int $itemsPerPage = 10;

    protected ?PageType $redirectAfterSave = PageType::DETAIL;

    public function import(): ?ImportHandler
    {
        return null;
    }

    public function export(): ?ExportHandler
    {
        return null;
    }

    public function pages(): array
    {
        return [
            ProductIndexPage::make($this->title()),
            ProductFormPage::make(
                $this->getItemID()
                    ? __('moonshine::ui.edit')
                    : __('moonshine::ui.add')
            ),
            ProductDetailPage::make(__('moonshine::ui.show')),
        ];
    }

    public function fields(): array
    {
        return [
            Block::make([
                ID::make(),
                Text::make('Nombre', 'name')->required(),
                Color::make('Color primario', 'primary_color')->default('#040931')->hideOnIndex(),
                Color::make('Color secundario', 'secondary_color')->default('#5EBEB5')->hideOnIndex(),
                Number::make('Precio de instalación', 'installation_price')
                    ->min(0)
                    ->step(0.01)
                    ->nullable()
                    ->hideOnIndex(),
            ]),
            Block::make([
                HasMany::make('Módulos', 'modules', resource: new ProductModuleResource())
                    ->creatable()
                    ->async()
                    ->hideOnIndex(),
            ]),
        ];
    }

    public function filters(): array
    {
        return [
            $this->perPageSelect(),
        ];
    }

    public function rules(Model $item): array
    {
        return [];
    }
}
