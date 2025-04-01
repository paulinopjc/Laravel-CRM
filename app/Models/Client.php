<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Client extends Model
{
    protected $fillable = [
        'contact_name',
        'contact_email',
        'contact_phone_number',
        'company_name',
        'company_address',
        'company_city',
        'company_zip',
    ];
}
