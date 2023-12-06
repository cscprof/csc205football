<?php

namespace App\Http\Controllers;

use App\Models\Coach;
use Illuminate\Http\Request;
use Illuminate\Http\Response;


class CoachController extends Controller
{

    public function index()
    {
        $coach = Coach::get();

        return $coach->toJSON();
    }

    public function show(Coach $coach)
    {
        $id = $coach->coachID;

        $result = Coach::find($id);

        if ($result != null) {
            return $result->toJSON();
        } else {
            $resp = new Response();
            return $resp->setStatusCode(204, 'Invalid Coach ID');
        }

    }

    public function showWithTeam($id) {

        $result = Coach::with('team')->find($id);

        if ($result != null) {
            return $result->toJSON();
        } else {
            $resp = new Response();
            return $resp->setStatusCode(204, 'Invalid Coach ID');
        }
    }

    public function showWithAnswers($id)
    {
        $r = Coach::with('answers')->find($id);

        if ($r != null) {
            return $r->toJSON();
        } else {
            $resp = new Response();
            return $resp->setStatusCode(204, 'Invalid Coach ID');
        }
    }

    public function teamCoachesWithAnswers($id)
    {
        $result = Coach::where('teamID', $id)
                ->with('team')
                ->with('answers')
                ->get();

        if ($result != null) {
            return $result->toJSON();
        } else {
            $resp = new Response();
            return $resp->setStatusCode(204, 'Invalid Request');
        }

    }

}
