<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class InternshipLetter extends Model
{
    use HasFactory;

    protected $table = 'internship_letters';

    protected $casts =[
        'created_at' => 'datetime:Y-m-d H:m:s',
        'updated_at' => 'datetime:Y-m-d H:m:s',
    ];

    protected $fillable = [
        'user_id', 'verificator_id', 'reference_number', 'name', 'date_created', 'identification_number', 'gender', 'address', 'location_from', 'intern_position', 'paid', 'meal_allowance', 'transport_allowance', 'payment_time', 'start_date', 'end_date', 'need_verification'
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function verificator()
    {
        return $this->belongsTo(Verificator::class);
    } 
}
