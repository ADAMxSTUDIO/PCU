<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class State extends Model
{
    use HasFactory;

    protected $table = 'Cases';

    protected $fillable = [
        'details',
        'attachment',
        'created_by',
        'patient_id',
        'responsible_id',
        'status'
    ];

    public $timestamps = true;
}