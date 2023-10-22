<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Team extends Model
{
    use HasFactory;

    protected $table='teams';

    protected $primaryKey = 'teamID';

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'Name',
        'Description',
    ];

    public function coaches(){

        return $this->hasMany(Coach::class,'TeamId');

    }

}
