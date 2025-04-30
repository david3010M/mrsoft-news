<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Address extends Model
{
    use HasFactory;

    protected $fillable = [
        'address',
        'reference',
        'department_id',
        'client_id',
    ];

    public function department()
    {
        return $this->belongsTo(Department::class);
    }

    public function client()
    {
        return $this->belongsTo(Client::class);
    }
}
