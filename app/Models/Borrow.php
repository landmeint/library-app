<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Borrow;
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
    public function users(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }
    public function books(): BelongsTo
    {
        return $this->belongsTo(Book::class);
    }
}
