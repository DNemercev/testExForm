<?php

namespace App\Models;

use App\Models\CcCallcenters;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\CcDesks;
use App\Models\CcTeams;
use App\Models\CcUsers;
use Illuminate\Support\Facades\DB;


class AllInfo extends Model
{
    use HasFactory;

    static public function fillAllSelects():array
    {
        $allSellects['callCenters'] = CcCallcenters::get();
        $allSellects['desks'] = CcDesks::get();
        $allSellects['teams'] = CcTeams::get();
        $allSellects['users'] = CcUsers::get();

        return $allSellects;
    }

    static public function showAllInfo($columnName, $value)
    {
        $resArray = DB::table('cc_callcenters')
            ->join('cc_desks', 'cc_callcenters.id', '=', 'cc_desks.id_callcenter')
            ->join('cc_teams', 'cc_desks.id', '=', 'cc_teams.id_desk')
            ->join('cc_users','cc_teams.id', '=', 'cc_users.team_id' )
            ->select('cc_callcenters.name', 'cc_desks.desk_name', 'cc_teams.team_name', 'cc_users.stage_name')
            ->where($columnName, '=', $value)
            ->get();

        return $resArray;
    }

    static public function secondForm($callCernterId, $deskId, $teamId, $userId)
    {
        $whereSelect = ['cc_callcenters.id' => $callCernterId,
            'cc_desks.id' => $deskId,
            'cc_teams.id' => $teamId,
            'cc_users.user_id' => $userId
            ];
        $res = DB::table('cc_callcenters')
            ->join('cc_desks', 'cc_callcenters.id', '=', 'cc_desks.id_callcenter')
            ->join('cc_teams', 'cc_desks.id', '=', 'cc_teams.id_desk')
            ->join('cc_users','cc_teams.id', '=', 'cc_users.team_id' )
            ->select('cc_callcenters.name', 'cc_desks.desk_name', 'cc_teams.team_name', 'cc_users.stage_name')
            ->where($whereSelect)
            ->get();

        return $res;
    }

}
