<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ClickEvent extends Model
{
    use HasFactory;

    protected $fillable = [
        'session_id',
        'element_name',
        'page_url',
    ];
}
