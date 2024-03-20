<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasOne;

class Customer extends Model
{
    use HasFactory;

    protected $table = 'customers';
    protected $primaryKey = 'id';
    public $timestamps = true;

    protected $fillable = ['name', 'email', 'phone', 'created_at', 'updated_at'];

    public function customerIdentityNumber():HasOne
    {
        return $this->hasOne(CustomerIdentityNumber::class);
    }
}
