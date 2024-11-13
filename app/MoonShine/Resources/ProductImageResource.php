<?php

declare(strict_types=1);

namespace App\MoonShine\Resources;

use Illuminate\Database\Eloquent\Model;
use App\Models\ProductImage;

use MoonShine\Fields\Checkbox;
use MoonShine\Fields\Image;
use MoonShine\Fields\Relationships\BelongsTo;
use MoonShine\Fields\Text;
use MoonShine\Resources\ModelResource;
use MoonShine\Decorations\Block;
use MoonShine\Fields\ID;
use MoonShine\Fields\Field;
use MoonShine\Components\MoonShineComponent;

/**
 * @extends ModelResource<ProductImage>
 */
class ProductImageResource extends ModelResource
{
    protected string $model = ProductImage::class;

    protected string $title = 'ProductImages';

    /**
     * @return list<MoonShineComponent|Field>
     */
    public function fields(): array
    {
        return [
            Block::make([
                ID::make()->sortable(),
                BelongsTo::make(
                    'Продукт',
                    'product',
                    fn($item) => "$item->title" ,
                    new ProductResource()
                )->sortable()->required(),
//                Text::make('Наименование', 'image_name')->required(),
                Image::make('Фотография', 'image_name')
                    ->disk('public')->dir('product'),
                Checkbox::make('Главная', 'main'),
            ]),
        ];
    }

    /**
     * @param ProductImage $item
     *
     * @return array<string, string[]|string>
     * @see https://laravel.com/docs/validation#available-validation-rules
     */
    public function rules(Model $item): array
    {
        return [];
    }
}
