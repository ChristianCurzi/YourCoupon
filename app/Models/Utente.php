<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;


class Utente extends Model
{
    use HasFactory;
    protected $table = 'utente';
    protected $primaryKey = 'Username';
    public $timestamps = false;
    public $incrementing = false;

    /*
     * By default, Laravel expects your model primary key to be auto incrementing.
     * From what you've posted, it looks like that's not the case with your example.
     *
     * Add this to your model definition:
     * public $incrementing = false;
     *
    */

    protected $fillable = [
        'Username',
        'Password',
        'Livello',
        'Nome',
        'Cognome',
        'Email',
        'Nascita',
        'Genere',
        'Telefono',
        'ProPic',
    ];

    /*
    public static function isUsernameUnique(string $username): bool
    {
        return static::where('Username', $username)->count() === 0;
    }

    public function hasRole($livello) {
        $livello = (array)$livello;
        return in_array($this->livello, $livello);
    }

    public function isUser($livello){
        if ($livello == 1) {
            return true;
        } else
            return false;
    }

    public function isStaff($livello){
        if ($livello == 2) {
            return true;
        } else
            return false;
    }

    public function isAdmin($livello){
        if ($livello == 3) {
            return true;
        } else
            return false;
    }
    */

}
