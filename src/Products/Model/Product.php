<?php

namespace Src\Products\Model;

use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Src\Products\Enums\ProductStatus;

class Product extends Model
{
    use HasFactory;
    use SoftDeletes;

    protected $fillable = [
        'article',
        'name',
        'status',
        'data'
    ];

    protected $casts = [
        'data' => 'array',
        'status' => ProductStatus::class
    ];

    public function scopeAvailable(Builder $query): void
    {
        $query->where('status', '=', ProductStatus::Available);
    }
}
