<?php

declare(strict_types=1);

namespace App\Providers;

use App\Models\Manufacturer;
use App\MoonShine\Resources\CategoryResource;
use App\MoonShine\Resources\ManufacturerResource;
use App\MoonShine\Resources\ProductImageResource;
use App\MoonShine\Resources\ProductResource;
use App\MoonShine\Resources\UserResource;
use MoonShine\Providers\MoonShineApplicationServiceProvider;
use MoonShine\MoonShine;
use MoonShine\Menu\MenuGroup;
use MoonShine\Menu\MenuItem;
use MoonShine\Resources\MoonShineUserResource;
use MoonShine\Resources\MoonShineUserRoleResource;
use MoonShine\Contracts\Resources\ResourceContract;
use MoonShine\Menu\MenuElement;
use MoonShine\Pages\Page;
use Closure;

class MoonShineServiceProvider extends MoonShineApplicationServiceProvider
{
    /**
     * @return list<ResourceContract>
     */
    protected function resources(): array
    {
        return [];
    }

    /**
     * @return list<Page>
     */
    protected function pages(): array
    {
        return [];
    }

    /**
     * @return Closure|list<MenuElement>
     */
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
            ]),

            MenuGroup::make('Ассортимент', [
                MenuItem::make(
                    'Продукты',
                    new ProductResource()
                ),

                MenuItem::make(
                    'Категории',
                    new CategoryResource()
                ),

                MenuItem::make(
                    'Производитель',
                    new ManufacturerResource()
                ),

                MenuItem::make(
                    'Изображения',
                    new ProductImageResource()
                ),
            ]),

            MenuItem::make(
                'Пользователи',
                new UserResource()
            ),
        ];
    }

    /**
     * @return Closure|array{css: string, colors: array, darkColors: array}
     */
    protected function theme(): array
    {
        return [];
    }
}
