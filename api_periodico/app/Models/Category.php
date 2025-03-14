<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;

    protected $table = 'categories';
    protected $primaryKey = 'categoryID';
    protected $fillable = ['name'];

    public function news()
    {
        return $this->hasMany(News::class, 'categoryID');
    }
}
