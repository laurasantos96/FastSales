<?php

namespace App\Models;
use App\Models\Ad;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Image extends Model
{
    use HasFactory;
    protected $fillable = ['path'];
    public function ads()
    {
        return $this->belongsTo(Ad::class);
    }
}
