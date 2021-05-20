<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Vote;
use Illuminate\Support\Facades\DB;

class VoteController extends Controller
{
    public function store(Request $request)
    {
        $vote = new Vote();
        $vote->election = $request->election;
        $vote->save();

        return redirect('/voted');
    }

    public function index()
    {
        //$votes = Vote::orderBy('election')->get();
        //$votes = Usermeta::table('votes')->select('election', DB::raw('count(*) as total'))->groupBy('election')->get();
        //$query = DB::table('votes')->get()->pluck('election');
        $votes = DB::table('votes')
                 ->select('election', DB::raw('count(*) as total'))
                 ->groupBy('election')
                 ->get();
        //$votes = array_count_values($query);
        return view('votes.index', ['votes' => $votes]);
    }
}
