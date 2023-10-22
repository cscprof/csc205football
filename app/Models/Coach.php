<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Coach extends Model
{
    use HasFactory;

    protected $table='coaches';

    protected $primaryKey = 'coachID';

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'userID',
        'Name',
        'AccessLevel',
        'Password',
        'TeamID',
        'EmailAddress'
    ];

    public function team(){

        return $this->hasOne(Team::class,'teamID', 'TeamId');
    }

    public function answers(){

        return $this->hasMany(Answer::class,'coachID', 'coachID');
    }
}
