<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;
use App\Models\UserInfo;

class UserInfoController extends Controller
{
    public function __construct()
    {
        $this->middleware("auth:web");
    }

    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        try {
            $userInfo = new UserInfo();
            $userInfo->Users_id = 1;
            $userInfo->profileImg = $request->profileImg;
            $userInfo->status = 'A';
            $userInfo->dataNasc = $request->dataNasc;
            $userInfo->genero = $request->genero;
            $userInfo->save();
            return redirect()->route("userinfo.show", 1)->with("message", ["UserInfo salvo", "success"]);
        } catch (\Throwable $th) {
            return redirect()->route("userinfo.create")->with("message", [$th->getMessage(), "danger"]);
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        try {
            // use Illuminate\Support\Facades\Session;
            // use App\Models\UserInfo;
            $message = Session::get('message');
            $userInfo = UserInfo::find(1);
            if (isset($userInfo)) {
                // Se encontrou manda para o show
                return view("UserInfo/show")->with("userInfo", $userInfo)->with("message", $message);
            }
            return view("UserInfo/create")->with("message", $message);
        } catch (\Throwable $th) {
            return view("UserInfo/create")->with("message", $message);
        }
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
