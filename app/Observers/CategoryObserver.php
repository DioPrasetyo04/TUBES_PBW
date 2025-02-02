<?php

namespace App\Observers;

use App\Models\Category;

class CategoryObserver
{
    public function creating(Category $category):void{
        $category->slug_categories = Str()->slug($category->name);
    }
}
