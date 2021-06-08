<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CcUsers extends Model
{
    use HasFactory;

    protected $table = 'cc_users';
    protected $primaryKey = 'user_id';

    public function teams()
    {
        return $this->belongsTo(CcTeams::class);
    }
}
