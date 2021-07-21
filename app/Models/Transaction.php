<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Transaction extends Model
{
    use HasFactory;

    // Mass Assignment Properties
    protected $guarded = [];

    // Relationship binding
    public function user() {
        return $this->belongsTo(User::class);
    }
}
