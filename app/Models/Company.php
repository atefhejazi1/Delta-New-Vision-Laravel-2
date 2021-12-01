<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Company extends Model
{
    use HasFactory;

    protected $table = 'companies';

    protected $fillable = [
        'companyName',
        'companyDescription',
    ];

    public function products()
    {
        return $this->hasMany(CompanyProduct::class);
    }
}
