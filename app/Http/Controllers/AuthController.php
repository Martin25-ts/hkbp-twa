<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Cookie;
use Illuminate\Support\Facades\Session;
use App\Models\MsAccount;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class AuthController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function login(Request $request)
    {

        $credentials = [
            'useremail' => $request->email,
            'password' => $request->password,
        ];

        if(Auth::attempt($credentials,true)){
            $user = Auth::user();

            $status = DB::table('users')
            ->join('jemaats', 'users.jemaatid', '=', 'jemaats.jemaatid')
            ->where('jemaats.jemaatid', $user->jemaatid)
            ->select('jemaats.statusid')
            ->first();



            if ($status) {
                // Melakukan sesuatu dengan status pengguna
                // Misalnya, melakukan pengecekan atau tindakan berdasarkan status
                if ($status->statusid === 'ST001') {

                    if ($request->remember) {
                        Cookie::queue('mycookie',$request->email,9999999999999999);

                        Cookie::queue('mypassword',$request->password,720);
                    }

                    Session::put('mysession',$credentials);
                    return redirect()->route('dashboard');

                } elseif ($status->statusid === 'ST002') {
                    Auth::logout();
                    return [$credentials,$status,'RPP'];
                } else {
                    // Lakukan tindakan jika status lainnya
                    return [$credentials,$status,'lainnya'];
                }
            }
        }

        return [$credentials, Auth::user()];
    }


    public function logout(){


        Auth::logout();
        return redirect('/');

    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
