<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Recipe extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'user_id',
        'description',
        'ingredients',
        'cooking_type',
        'duration',
        'origin',
        'steps'
    ];

     public function scopeSearch($query, array $filter){

        if ($filter["search"] ?? false){
            $query
                ->where("name", "like", "%" . request("search") . "%")
                ->orWhere("ingredients", "like", "%" . request("search") . "%")
                ->orWhere("origin", "like", "%" . request("search") . "%");
        }
    }

    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class, "user_id");
    }
}
