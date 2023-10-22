<?php

namespace App\Http\Controllers;

use App\Models\Coach;
use Illuminate\Http\Request;

class CoachController extends Controller
{

    public function index()
    {
        $coach = Coach::with('team')->get();

        return $coach->toJSON();
    }

    public function show(Coach $coach)
    {
        return $coach->toJSON();
    }


    public function showWithSchedule($id)
    {
        // $id = $coach->coachID;
        $results = Coach::with('answers')
                ->find($id);

        return $results->toJSON();
    }
}
