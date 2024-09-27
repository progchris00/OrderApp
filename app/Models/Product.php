<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Product extends Model
{
    use HasFactory;

    protected $table = 'products';
    protected $fillable = [
        'product_code',
        'name',
        'price',
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
