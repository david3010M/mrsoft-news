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
use MoonShine\Fields\Json;
use MoonShine\Fields\Number;
use MoonShine\Fields\Select;
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
                Color::make('Color primario', 'primary_color')->default('#040931'),
                Color::make('Color secundario', 'secondary_color')->default('#5EBEB5'),
                Number::make('Precio de instalación', 'installation_price')
                    ->min(0)
                    ->step(0.01)
                    ->nullable(),
                Json::make('Módulos', 'modules')
                    ->fields([
                        Text::make('Nombre del módulo', 'name')->required(),
                        Number::make('Precio mensual', 'monthly')->min(0)->step(0.01)->nullable(),
                        Number::make('Precio anual', 'annual')->min(0)->step(0.01)->nullable(),
                        Select::make('A cotizar', 'is_quote')
                            ->options(['1' => 'Sí', '0' => 'No'])
                            ->default('0'),
                        Text::make('Mensaje de cotización', 'quote_message')->nullable(),
                    ])
                    ->creatable()
                    ->removable()
                    ->hideOnIndex()
                    ->hideOnDetail(),
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

    protected function afterCreated(Model $item): Model
    {
        $this->syncModules($item);
        return $item;
    }

    protected function afterUpdated(Model $item): Model
    {
        $this->syncModules($item);
        return $item;
    }

    private function syncModules(Model $item): void
    {
        $modules = request()->input('modules', []);

        if (! is_array($modules)) {
            return;
        }

        $names = collect($modules)->pluck('name')->filter()->values()->toArray();
        $item->prices()->whereNotIn('name', $names)->delete();

        foreach ($modules as $module) {
            $name = trim($module['name'] ?? '');
            if ($name === '') continue;

            $item->prices()->where('name', $name)->delete();

            $monthly  = $module['monthly'] ?? null;
            $annual   = $module['annual'] ?? null;
            $isQuote  = ($module['is_quote'] ?? '0') === '1';
            $message  = $module['quote_message'] ?? null;

            if ($monthly !== null && $monthly !== '') {
                $item->prices()->create([
                    'name'     => $name,
                    'period'   => 'monthly',
                    'price'    => (float) $monthly,
                    'is_quote' => false,
                ]);
            }

            if ($annual !== null && $annual !== '') {
                $item->prices()->create([
                    'name'     => $name,
                    'period'   => 'annual',
                    'price'    => (float) $annual,
                    'is_quote' => false,
                ]);
            }

            if ($isQuote) {
                $item->prices()->create([
                    'name'          => $name,
                    'period'        => 'quote',
                    'price'         => null,
                    'is_quote'      => true,
                    'quote_message' => $message,
                ]);
            }
        }
    }
}
