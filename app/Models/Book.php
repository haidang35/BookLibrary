<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Book extends Model
{
    use HasFactory;
    protected $table = "books";
    protected $primaryKey = "book_id";
    protected $fillable = ["author_id", "title", "ISBN", "pub_year", "available"];

    public function Author() {
        return $this->belongsTo(Author::class,"author_id", "author_id");
    }

    public function scopeSearch($query, $search) {
        if($search == "" || $search == null) {
            return $query;
        }
        return $query->where("title", "LIKE", "%".$search."%");
    }

    public function scopeAuthor($query, $author) {
        if($author == "0" || $author == null) {
            return $query;
        }
        return $query->where("author_id", $author);
    }

    public function scopeAvailable($query, $available) {
        if($available == "" || $available == null) {
            return $query;
        }
        return $query->where("available", $available);
    }



}
