<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Notification_for extends Model
{
    use HasFactory;


protected $table="notification_for";


protected $fillable =[
    'for',
    'subject',
    'message',
];


}
