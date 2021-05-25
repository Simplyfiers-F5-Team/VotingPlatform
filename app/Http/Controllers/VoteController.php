<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Vote;
use Illuminate\Support\Facades\DB;
use App\Http\Requests\VoteCreateRequest;

class VoteController extends Controller
{
    public function store(VoteCreateRequest $request)
    {
        $vote = new Vote();
        $vote->election = $request->election;
        $vote->save();
        return redirect('/voted');
    }

    public function index()
    {
        $votes = DB::table('votes')
                 ->select('election', DB::raw('count(*) as total'))
                 ->groupBy('election')
                 ->get();
        return view('votes.index', ['votes' => $votes]);
    }

    public function destroy()
    {
        $votes = DB::table('votes')->delete();
        return redirect('/voted');
    }
}
