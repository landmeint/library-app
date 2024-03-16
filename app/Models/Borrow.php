<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Borrow extends Model
{
    use HasFactory;
    protected $table = 'borrows';
    protected $fillable = [
        'officer_name',
        'total',
        'start_date',
        'back_date',
        'user_id',
        'book_id'
    ];
}
