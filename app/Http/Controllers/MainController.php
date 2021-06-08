<?php

namespace App\Http\Controllers;

use App\Models\AllInfo;
use App\Models\CcCallcenters;
use App\Models\CcDesks;
use App\Models\CcTeams;
use App\Models\CcUsers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


class MainController extends Controller
{


    public function fillAllSelects()
    {
        $allSellects = AllInfo::fillAllSelects();
        return view('mainForm')->with('allSellects', $allSellects);
    }

    public function showAllInfoCallCenter(Request $request)
    {
        $callCenterId = $request->input('call_center_id');
        $users = AllInfo::showAllInfo('cc_callcenters.id', $callCenterId);

        return view('test')->with('users', $users);
    }

    public function showAllInfoDesk(Request $request)
    {
        $deskId = $request->input('desk_id');
        $users = AllInfo::showAllInfo('cc_desks.id', $deskId);

        return view('test')->with('users', $users);
    }

    public function showAllInfoTeam(Request $request)
    {
        $teamId = $request->input('team_id');
        $users = AllInfo::showAllInfo('cc_teams.id', $teamId);

        return view('test')->with('users', $users);

    }

    public function showAllInfoUser(Request $request)
    {
        $userId = $request->input('user_id');
        $users = AllInfo::showAllInfo('cc_users.user_id', $userId);

        return view('test')->with('users', $users);
    }

    public function home()
    {
        return redirect('/');
    }

    public function secondForm(Request $request)
    {
        $callCernterId = $request->input('call_center_id');
        $deskId = $request->input('desk_id');
        $teamId = $request->input('team_id');
        $userId = $request->input('user_id');
        $res = AllInfo::secondForm($callCernterId, $deskId, $teamId, $userId);

        if (count($res) == 0)
        {
            return redirect('/')->with('dismiss', 'Такого пользователя не существует');
        } else {
            return view('test')->with('users', $res);
        }
    }

}
