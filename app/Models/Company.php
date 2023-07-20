<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Employ;
class Company extends Model
{
    use HasFactory;
    protected $fillable=['name','email','logo','website'];

   //relations one to many
    public function employ()
    {
        return $this->hasMany(Employ::class, 'companies_id');
    }
}
