<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Book;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
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
    public function user()
    {
        return $this->belongsTo(User::class);
    }
    public function book()
    {
        return $this->belongsTo(Book::class);
    }
}
