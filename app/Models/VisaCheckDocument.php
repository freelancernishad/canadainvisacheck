<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class VisaCheckDocument extends Model
{
    use HasFactory;


    protected $fillable = ['visa_check_id', 'document_name', 'file_path'];

    public function visaCheck()
    {
        return $this->belongsTo(VisaCheck::class);
    }
}
