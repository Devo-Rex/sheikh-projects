<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Invite;

class InviteController extends Controller
{
    public function index(){
        return 'Hi this is invite page';
    }

    public function createInvite(Request $request){
        $makeInvitions = Invite::create([
            'link' => $request->link,
            'email' => $request->email,
            'password' => $request->password,
            'name' => $request->name,
            'message' => $request->message
        ]);
        return response()->json([
            'message' => 'Invition create succesfully'
        ], 200);
    }
}
