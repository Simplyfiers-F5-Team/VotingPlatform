<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Vote;

class VoteController extends Controller
{
    public function store()
    {
        $vote = new Vote();
        $vote->election = request('election');
        $vote->save();

        return redirect('/voted');
    }

    public function index()
    {
        $votes = Vote::orderBy('election')->get();
        //$votes = Usermeta::table('votes')->select('election', DB::raw('count(*) as total'))->groupBy('election')->get();
        return view('votes.index', ['votes' => $votes]);
    }
}
