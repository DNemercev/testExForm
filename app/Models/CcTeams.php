<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CcTeams extends Model
{
    use HasFactory;

    protected $table = 'cc_teams';

    public function teams()
    {
        return $this->hasOne(CcTeams::class);
    }
    public function user()
    {
        return $this->hasMany(CcUsers::class);
    }
}
