<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;
use Auth;
use Validator;
class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function getUser()
    {
        $datauser = User::all();
        return view('user.userlogin',compact('datauser'));
    }
    public function postUser(Request $request)
    {
        $this->validate($request, [
            'email' => 'email|required',
            'password' => 'required'
        ]);
        $user_data = array(
            'email' => $request->email,
            'password' => $request->password
        );
        if(Auth::attempt($user_data)){
            return redirect()->route('member.cart');
        }
        else
        {
            return back()->with('error', 'email atau password anda salah');
        }
        return redirect()->back();  
    }
    public function logout()
    {
        Auth::logout();
        return redirect()->back();
    }
    public function store(Request $request)
    {
        $user = User::where('email', $request->email)->get();
        $this->validate($request, [
            'email' => 'email|required',
            'password' => 'required|min:4',
            'name' => 'required',
            'no_hp' => 'numeric|required',
            'alamat' => 'required'
        ]);
        if(count($user) > 0){
            return back()->with('error', 'Email sudah terdaftar');
        }
        else
        {
            $datauser = new User();
            $datauser->email = $request->email;
            $datauser->password = bcrypt($request->password);
            $datauser->name = $request->name;
            $datauser->no_hp = $request->no_hp;
            $datauser->alamat = $request->alamat;
            $datauser->role = 4;
            $datauser->save();
            Auth::login($datauser);
            return redirect('/')->with('alert-success','Daftar berhasil, silahkan login');
        }
        return redirect()->back();
    }
    public function edit($id)
    {
        
    }
    public function update(Request $request, $id)
    {
        
    }
    public function destroy($id)
    {
        
    }
}
