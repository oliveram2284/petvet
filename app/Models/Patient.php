<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Patient extends Model
{
    protected $fillable = [
        'name',
        'date_of_birth',
        'owner_id',
        'type',
        'breed',
    ];

    protected $casts = [
        'date_of_birth' => 'date',
    ];

    protected $guarded = ['id'];
    

    public function owner()
    {
        return $this->belongsTo(Owner::class);
    }

    public function treatments()
    {
        return $this->hasMany(Treatment::class);
    }

    public function test()
    {
      return "hola Mundo";
    }
}
