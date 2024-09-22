<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


class LegalCase extends Model
{
    public function client()
    {
        return $this->belongsTo(Client::class, 'plaintiff_name', 'full_name');
    }
}

