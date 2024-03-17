<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Borrow;
use Illuminate\Database\Eloquent\Relations\HasMany;
class Book extends Model
{
    use HasFactory;
    protected $table = 'books';
    protected $fillable = [
        'title',
        'writer',
        'publisher',
        'publication',
        'stock',
        'category_id'
    ];
    public function borrows(): HasMany
    {
        return $this->hasMany(Borrow::class);
    }
}
