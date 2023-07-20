<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Company;
class Employ extends Model
{
    use HasFactory;
    protected $fillable=['firstname','lastname','companies_id','email','phone'];

    //relations one to many
    public function company()
    {
        return $this->belongsTo(Company::class, 'companies_id');
    }
}
