<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Contacts extends Model
{
    use HasFactory;
    protected $table = 'contact_form';
    protected $fillable = [
      'name',
      'message',
      'is_deleted'
    ];
}
