<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CcCallcenters extends Model
{
    use HasFactory;

    protected $table = 'cc_callcenters';

    public function desk()
    {
        return $this->hasOne(CcDesks::class, 'id_callcenter', 'id');
    }
}
