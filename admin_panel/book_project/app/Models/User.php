<?php

namespace App\Models;

use App\Events\UserCreatedEvent;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class User extends Authenticatable implements MustVerifyEmail
{
    public function roles() {
        return $this->belongsToMany(Role::class);
    }
    use HasApiTokens, HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'name',
        'email',
        'password',
        'email_verified_at',
        'address',
        'phone',
        'post_code'
    ];

    protected $dispatchesEvents = [
        'created' => UserCreatedEvent::class
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
    ];

    protected $table = "users";

    public function shopcard() {
        return $this->hasMany(ShopCart::class);
    }

    public function order() {
        return $this->hasMany(Order::class);
    }

    public function orderitem() {
        return $this->hasMany(Orderitem::class);
    }

    public function wishist() {
        return $this->hasMany(Wishlist::class);
    }

}
