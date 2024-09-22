<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Client extends Model
{
    protected $fillable = [
        'full_name',
        'phone_number',
        // أضف أي أعمدة أخرى تريد السماح بالتعيين الجماعي لها
    ];

    public function legalCases()
    {
        return $this->hasMany(LegalCase::class, 'plaintiff_name', 'full_name');
    }
}
