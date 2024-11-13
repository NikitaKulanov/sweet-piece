<?php

declare(strict_types=1);

namespace App\MoonShine\Resources;

use Illuminate\Database\Eloquent\Model;
use App\Models\Product;

use MoonShine\Fields\Checkbox;
use MoonShine\Fields\Image;
use MoonShine\Fields\Number;
use MoonShine\Fields\Relationships\HasMany;
use MoonShine\Fields\Text;
use MoonShine\Fields\Textarea;
use MoonShine\Resources\ModelResource;
use MoonShine\Decorations\Block;
use MoonShine\Fields\ID;
use MoonShine\Fields\Field;
use MoonShine\Components\MoonShineComponent;
use MoonShine\Fields\Relationships\BelongsTo;

/**
 * @extends ModelResource<Product>
 */
class ProductResource extends ModelResource
{
    protected string $model = Product::class;

    protected string $title = 'Products';

//    protected string $column = 'Title';

    /**
     * @return list<MoonShineComponent|Field>
     */
    public function fields(): array
    {
        return [
            Block::make([
                ID::make()->sortable(),
                Text::make('Наименование', 'title')->required(),
                Number::make('Цена', 'price')->required()->sortable(),
                Number::make('Вес', 'weight')->sortable(),
                Textarea::make('Краткое описание', 'short_description')->hideOnIndex(),
                Textarea::make('Описание', 'description')->hideOnIndex(),
                Number::make('Рейтинг', 'rating')
                    ->sortable()
                    ->min(1)
                    ->max(5)
                    ->step(0.5)
                    ->stars()
                    ->hint('From 1 to 5'),
                BelongsTo::make(
                    'Категория',
                    'category',
                    fn($item) => "$item->name" ,
                    new CategoryResource()
                )->sortable()->required(),
                BelongsTo::make(
                    'Производитель',
                    'manufacturer',
                    fn($item) => "$item->name" ,
                    new CategoryResource()
                )->sortable()->required(),
                HasMany::make(
                    'Изображения',
                    'images',
                    null,
                    new ProductImageResource()
                )->fields([
                    Image::make('Фотография', 'image_name')
                        ->disk('public')->dir('product'),
                    Checkbox::make('Главная', 'main'),
                ]),
            ]),
        ];
    }

    /**
     * @param Product $item
     *
     * @return array<string, string[]|string>
     * @see https://laravel.com/docs/validation#available-validation-rules
     */
    public function rules(Model $item): array
    {
        return [
            'title' => ['required', 'string', 'unique:products']
        ];
    }
}
