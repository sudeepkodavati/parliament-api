<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use DB;

class Members extends Model
{
    
    public function scopeListMemberNames($query)
    {
        return DB::table('members')->lists('name','id');
    }
}
