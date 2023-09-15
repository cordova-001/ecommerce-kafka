<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Membership extends Model
{
    use HasFactory;

    protected $fillable = [
        'first_name',
        'surname',
        'other_name',
        'educational_qualification',
        'professional_qualification',
        'profession',
        'professional_status',
        'college_professional_group',
        'artisan_trade',
        'artisan_certificate',
        'employment_status',
    ];
}
