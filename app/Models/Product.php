<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;
    protected $fillable = ['name', 'slug', 'description', 'details', 'additional_information', 'en_name', 'en_slug', 'en_description', 'en_details', 'en_additional_information', 'image', 'document', 'pub', 'status', 'category_id', 'mark_id'];
    public function category()
    {
        return $this->belongsTo(Category::class);
    }

    public function mark()
    {
        return $this->belongsTo(Mark::class);
    }
}
