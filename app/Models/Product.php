<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    public function user(){
        return $this->hasOne(User::class);
    }

    protected $fillable = ["name", "file_path", "created_at", "updated_at"];

}
