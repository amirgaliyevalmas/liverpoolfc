<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Category extends Model
{
    use HasFactory;
    use softDeletes;

    protected $guarded = [];

    protected $fillable = ['category_name', 'parent_id'];


    public function categories()
    {
        return $this->hasMany(self::class, 'parent_id', 'id');
    }

    public function category()
    {
        return $this->belongsTo(self::class, 'parent_id', 'id');
    }


    public static function tree()
    {
        $allCategories = Category::get();

        $rootCategories = $allCategories->whereNull('parent_id');

        self::formatTree($rootCategories, $allCategories);

        return $rootCategories;
    }

    public static function formatTree($categories, $allCategories)
    {

        foreach ($categories as $category) {

            $category->children = $allCategories->where('parent_id', $category->id)->values();

            if ($category->children->isNotEmpty()) {
                self::formatTree($category->children, $allCategories);
            }

        }
    }
}
