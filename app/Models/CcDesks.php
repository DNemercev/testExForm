<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CcDesks extends Model
{
    use HasFactory;

    protected $table = 'cc_desks';

    public function callCenters()
    {
        return $this->belongsTo(CcCallcenters::class, 'id_callcenter');
    }

    public function teams()
    {
        return $this->hasOne(CcTeams::class);
    }
}
