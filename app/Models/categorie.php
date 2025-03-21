<?php

namespace App\Models;

use App\Models\categorie as ModelsCategorie;
use Illuminate\Database\Eloquent\Model;

class Categorie extends Model
{
    protected $fillable = [
        'nom',
        'description'
    ];

    public function oeuvre()
    {
        return $this->hasMany(ModelsCategorie::class, 'categorie_id');
    }
}
