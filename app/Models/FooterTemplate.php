<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class FooterTemplate extends Model
{
    use HasFactory;

    protected $table = 'footer_templates';

    protected $casts =[
        'created_at' => 'datetime:Y-m-d H:m:s',
        'updated_at' => 'datetime:Y-m-d H:m:s',
    ];

    protected $fillable = [
        'user_id', 'name', 'type', 'image', 'default'
    ];
}
