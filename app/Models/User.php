<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmai;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;
use Spatie\Permission\Traits\HasRoles;

class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable, HasRoles;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'name',
        'email',
        'password',
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
        'password' => 'hashed',
    ];

    // Définir les relations ici (par exemple, la relation avec le panier
    
    public function paniers()
    {
        return $this->hasMany(Panier::class, 'id_user', 'id');
    }

    public function coeurs()
    {
        return $this->hasMany(Coeur::class, 'id_user', 'id');
    }

    public function commandes()
    {
        return $this->hasMany(Commande::class, 'id_user', 'id');
    }
}
