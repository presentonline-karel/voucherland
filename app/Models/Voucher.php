<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Voucher extends Model
{
    use HasFactory;



    public function users()
    {
        return $this->belongsToMany(User::class);
    }



    public function shops()
    {
        return $this->belongsTo(Shop::class);
    }
    
    
    
    public function isExpired(): bool
    {
        return $this->expires_at > now();
    }
}
