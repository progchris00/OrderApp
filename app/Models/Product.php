<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Spatie\MediaLibrary\HasMedia;
use Spatie\MediaLibrary\InteractsWithMedia;

class Product extends Model implements HasMedia
{
    use HasFactory;
    use InteractsWithMedia;

    protected $table = 'products';
    protected $fillable = [
        'product_code',
        'name',
        'price',
        'product_photo',
    ];

    public function categories(): BelongsToMany
    {
        return $this->belongsToMany(Category::class,'product_categories','product_id','category_id');
    }

    public function order_item(): BelongsTo
    {
        return $this->belongsTo(OrderItem::class);
    }
}
