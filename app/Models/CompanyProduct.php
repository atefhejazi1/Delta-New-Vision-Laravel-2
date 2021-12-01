<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CompanyProduct extends Model
{
    use HasFactory;

    protected $table = 'company_products';

    protected $fillable = [
        'companyProductName',
        'company_id',
        'companyProductDescription',
        'companyProductImage',
    ];

    public function company()
    {
        return $this->belongsTo('App\Models\Company');
    }
}
