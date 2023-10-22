<?php

namespace App\Http\Controllers;

use App\Models\Team;
use Illuminate\Http\Request;

class TeamController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $teams = Team::with('coaches')->get();;

        return $teams->toJSON();
    }

    public function show(Team $team)
    {
        return $team->toJSON();
    }
}
