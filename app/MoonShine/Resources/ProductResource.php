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
use MoonShine\Fields\Text;
use MoonShine\Handlers\ExportHandler;
use MoonShine\Handlers\ImportHandler;
use MoonShine\Metrics\ValueMetric;
use MoonShine\Resources\ModelResource;

class ProductResource extends ModelResource
{
    protected string $model = Product::class;

    protected string $title = 'Productos';

    protected bool $createInModal = true;
    protected bool $editInModal = true;
    protected bool $detailInModal = true;

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
            ]),
        ];
    }

    public function rules(Model $item): array
    {
        return [];
    }

    public function redirectAfterSave(): string
    {
        return $this->url();
    }
}
