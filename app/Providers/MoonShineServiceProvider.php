<?php

declare(strict_types=1);

namespace App\Providers;

use App\Models\Address;
use App\Models\Category;
use App\Models\Client;
use App\Models\Comment;
use App\Models\Department;
use App\Models\File;
use App\Models\News;
use App\Models\Product;
use App\Models\Reel;
use App\Models\Type;
use App\MoonShine\Resources\AddressResource;
use App\MoonShine\Resources\CategoryResource;
use App\MoonShine\Resources\ClientResource;
use App\MoonShine\Resources\CommentResource;
use App\MoonShine\Resources\DepartmentResource;
use App\MoonShine\Resources\FileResource;
use App\MoonShine\Resources\NewsResource;
use App\MoonShine\Resources\ProductModuleResource;
use App\MoonShine\Resources\ProductResource;
use App\MoonShine\Resources\ReelResource;
use App\MoonShine\Resources\TypeResource;
use MoonShine\ActionButtons\ActionButton;
use MoonShine\Providers\MoonShineApplicationServiceProvider;
use MoonShine\MoonShine;
use MoonShine\Menu\MenuGroup;
use MoonShine\Menu\MenuItem;
use MoonShine\Resources\ModelResource;
use MoonShine\Resources\MoonShineUserResource;
use MoonShine\Resources\MoonShineUserRoleResource;

class MoonShineServiceProvider extends MoonShineApplicationServiceProvider
{
    protected function resources(): array
    {
        return [
            new ProductModuleResource(),
        ];
    }

    protected function pages(): array
    {
        return [];
    }

    protected function menu(): array
    {
        return [
            MenuGroup::make(static fn() => __('moonshine::ui.resource.system'), [
                MenuItem::make(
                    static fn() => __('moonshine::ui.resource.admins_title'),
                    new MoonShineUserResource()
                ),
                MenuItem::make(
                    static fn() => __('moonshine::ui.resource.role_title'),
                    new MoonShineUserRoleResource()
                ),
            ], 'heroicons.wrench'),
            MenuGroup::make(
                'Contenido', [
                MenuItem::make('Noticias', new NewsResource(), 'heroicons.newspaper')->badge(fn() => (string)News::count()),
                MenuItem::make('Reels', new ReelResource(), 'heroicons.outline.device-phone-mobile')->badge(fn() => (string)Reel::count()),
                MenuItem::make('Categorias', new CategoryResource(), 'heroicons.outline.cube')->badge(fn() => (string)Category::count()),
                MenuItem::make('Clientes', new ClientResource(), 'heroicons.outline.user-group')->badge(fn() => (string)Client::count()),
                MenuItem::make('Direcciones', new AddressResource(), 'heroicons.map-pin')->badge(fn() => (string)Address::count()),
                MenuItem::make('Productos', new ProductResource(), 'heroicons.outline.rocket-launch')->badge(fn() => (string)Product::count()),
                MenuItem::make('Tipos', new TypeResource(), 'heroicons.finger-print')->badge(fn() => (string)Type::count()),
                MenuItem::make('Departamentos', new DepartmentResource(), 'heroicons.map')->badge(fn() => (string)Department::count()),
                MenuItem::make('Comentarios', new CommentResource(), 'heroicons.outline.chat-bubble-bottom-center-text')->badge(fn() => (string)Comment::count()),
                MenuItem::make('Subir Archivos', new FileResource(), 'heroicons.cloud-arrow-up')->badge(fn() => (string)File::count()),
            ], 'heroicons.outline.folder'),
//            MenuItem::make('Documentation', 'https://moonshine-laravel.com')
//               ->badge(fn() => 'Check'),
        ];
    }

    protected function theme(): array
    {
        return [
            'colors' => [
                'primary'   => '14, 116, 144',   // cyan-700
                'secondary' => '234, 88, 12',    // orange-600
                'body'      => '248, 250, 252',  // slate-50
                'dark' => [
                    'DEFAULT' => '15, 23, 42',   // slate-900
                    50  => '248, 250, 252',       // slate-50
                    100 => '241, 245, 249',       // slate-100
                    200 => '226, 232, 240',       // slate-200
                    300 => '203, 213, 225',       // slate-300
                    400 => '148, 163, 184',       // slate-400
                    500 => '100, 116, 139',       // slate-500
                    600 => '71, 85, 105',         // slate-600
                    700 => '51, 65, 85',          // slate-700
                    800 => '30, 41, 59',          // slate-800
                    900 => '2, 6, 23',            // slate-950
                ],
            ],
            'darkColors' => [
                'primary'   => '8, 145, 178',   // cyan-600
                'secondary' => '234, 88, 12',   // orange-600
                'body'      => '2, 6, 23',      // slate-950
                'dark' => [
                    50  => '30, 41, 59',         // slate-800
                    100 => '30, 41, 59',         // slate-800
                    200 => '51, 65, 85',         // slate-700 – borders visibles pero no blancos
                    300 => '71, 85, 105',        // slate-600
                    400 => '100, 116, 139',      // slate-500
                    500 => '148, 163, 184',      // slate-400
                ],
            ],
        ];
    }


}
