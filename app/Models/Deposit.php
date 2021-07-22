<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Deposit extends Model
{
    use HasFactory;

    // Mass Assignable properties
    protected $guarded = [];

    // Relationship binding
    public function user() {
        return $this->belongsTo(User::class);
    }
}
