<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;

    protected $guarded = [];

    public function parent()
    {
        //return $this->belongsTo(Category::class);
        return $this->belongsTo(Category::class, 'category_id', 'id');

    }

    public function childern()
    {
        return $this->hasMany(Category::class, 'category_id', 'id');
    }

    public function submit($FormData, $categoryId)
    {
        //dd($FormData['parentId']);
        if ($FormData['parentId'] == "") {
            $FormData['parentId'] = null;
        }
        Category::query()->updateOrCreate(
            [
                'id' => $categoryId,
            ],
            [
                'name' => $FormData['name'],
                'category_id' => $FormData['parentId'],
            ]
        );
    }
}
