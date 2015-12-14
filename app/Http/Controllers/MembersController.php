<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\Members;

class MembersController extends Controller
{
  
    /**
     * Get the memeber name and Id.
     */
    public function listMemberNames()
    {
        $memebers = Members::ListMemberNames();

        return response()->JSON($memebers);
    }


    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $memeber = Members::find($id);

        return response()->JSON($memeber);
    }

}
