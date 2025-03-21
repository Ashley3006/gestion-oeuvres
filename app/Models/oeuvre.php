<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class categorie extends Model
{
    protected $fillable = [
        'titre','image','artiste','categorie_id','description','tags','slug'
    ];

    public function categorie(){
        return $this->belongsTo(Categorie::class, 'categorie_id');
    }
}
