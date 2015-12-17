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
        header('Access-Control-Allow-Origin: *');
        //$memebers = Members::ListMemberNames();
        $memebers = Members::all();
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
        header('Access-Control-Allow-Origin: *');
        $memeber = Members::find($id);

        return response()->JSON($memeber);
    }

}
