<?php

namespace App\Models;

use App\Models\Comment;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Post extends Model
{
    // Ajouter HasFactory et importer la class
    use HasFactory;
    protected $fillable = [
      'title',
      'message',
      'state',
      'user_id',
      
   
];
 public function user(): BelongsTo {
        return $this->belongsTo(User::class);

    }
    protected $casts = [
        'state'=>'boolean'
    ];

    public function comments(): HasMany {
        return $this->hasMany(Comment::class);
    }
}
