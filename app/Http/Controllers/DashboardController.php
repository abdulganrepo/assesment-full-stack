<?php

namespace App\Http\Controllers;

use App\Models\Club;
use App\Models\Score;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class DashboardController extends Controller
{
    //
    public function index()
    {

        $results = DB::select('SELECT club_id, menang, kalah, seri FROM scores;');
        $data = DB::table('scores')
            ->join('clubs', 'clubs.id', '=', 'scores.club_id')
            ->select(DB::raw('MAX(club_id), club_id, menang, kalah, seri, clubs.logo, clubs.club_name, count(club_id) as total_main, 
                SUM(menang) as total_menang, SUM(kalah) as total_kalah, 
                SUM(seri) as total_seri, SUM(gm) as total_gm, SUM(gk) as total_gk, 
                SUM((menang*3)+(seri*1)) as total_poin,
                SUM((gm)-(gk)) as total_goal
                '))
            ->groupBy('club_id')
            ->orderBy('total_poin', 'DESC')->orderBy('total_goal', 'DESC')
            ->get();

        return view('dashboard/index', [
            'scores' => $data,
            'results' => $results
        ]);
    }
}
