<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Ad extends Model
{
    protected $fillable = ['title', 'body', 'price'];
    use HasFactory;
    public function category(){
        return $this->belongsTo(Category::class);
    }
}
