<?php

namespace App\Entities\Partners;

use Illuminate\Database\Eloquent\Model;

class Partner extends Model
{
    protected $fillable = ['name', 'email', 'phone', 'pic', 'address', 'notes', 'is_active'];
}