<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class VisaCheck extends Model
{
    use HasFactory;

    protected $fillable = [
        'name', 'image', 'status', 'father_name', 'mother_name', 'd_o_b',
        'passport_no', 'gmail', 'national_id_no', 'present_address',
        'permanent_address', 'contact_no', 'job', 'job_category', 'date_of_issue'
    ];

    public function visaCheckDocuments()
    {
        return $this->hasMany(VisaCheckDocument::class);
    }


}
