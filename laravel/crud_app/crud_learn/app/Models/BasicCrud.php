<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BasicCrud extends Model
{
    use HasFactory; // The HasFactory trait is used to enable factory-based model creation. Like the factory method, it allows for easy instantiation of models with predefined attributes, which is useful for testing and seeding the database.

    protected $table = 'basic_cruds';

    public $timestamps = false;

    protected $fillable =
        [
        'name',
        'email',
        'phone',
        'address',
        'dob',
        'age',
    ];
}
