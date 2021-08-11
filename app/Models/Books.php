<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Books extends Model
{
    use HasFactory;

    protected $fillable = [
        'isbn',
        'title',
        'description',
        'author',
        'available_quantity'
    ];

    public function borrows(){
        return $this->hasMany(Borrowed::class);
    }
}
