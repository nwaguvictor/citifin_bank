<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    use HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $guarded = [];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    /**
     * Relationship binding
     */
    public function withdrawals() {
        return $this->hasMany(Withdrawal::class);
    }
    /**
     * Relationship binding
     */
    public function transactions() {
        return $this->hasMany(Transaction::class);
    }
    /**
     * Relationship binding
     */
    public function deposits() {
        return $this->hasMany(Deposit::class);
    }

    /**
     * Method to tranform a column when retrieving resource
     * @return string
     */
    public function getFullNameAttribute() {
        return "$this->firstname $this->lastname";
    }
}
