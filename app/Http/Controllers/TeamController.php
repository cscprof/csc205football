<?php

namespace App\Http\Controllers;

use App\Models\Team;
// use App\Models\Coach;
// use Illuminate\Http\Request;
use Illuminate\Http\Response;

class TeamController extends Controller
{

    public function index()
    {
        $result = Team::with('coaches')->get();;

        if ($result != null) {
            return $result->toJSON();
        } else {
            $resp = new Response();
            return $resp->setStatusCode(204, 'Invalid Request');
        }

    }

    public function show(Team $team)
    {
        $id = $team->teamID;

        $result = Team::find($id);

        if ($result != null) {
            return $result->toJSON();
        } else {
            $resp = new Response();
            return $resp->setStatusCode(204, 'Invalid Team ID');
        }

    }


}
