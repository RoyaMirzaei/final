<?php

namespace App\Http\Controllers;

use App\Http\Requests\createLoginRequest;
use App\User;
use Illuminate\Validation\Validator;
use Illuminate\Http\Request;


class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
       $user=User::all();
       return view('user.showLog',['user'=>$user]);

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
     return view('user.login');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(createLoginRequest $request)
    {
     $user=new User();
     $user->fullName=$request->fullName;
     $user->email=$request->email;
     $user->userName=$request->userName;
     $user->password=$request->password;
     $user->save();
     $comment=' کاربر گرامی  '.$request->fullName.' اطلاعات شما بدرستی ذخیره شد. ';
     session()->flash('create',$comment);
    return back();

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
        $user=User::findorfail($id);
        return view('user.UpdateLog', compact('user'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(createLoginRequest $request,$id)
    {
        $user=User::findorfail($id);
        $user->fullName=$request->fullName;
        $user->email=$request->email;
        $user->userName=$request->userName;
        $user->password=$request->password;
        $user->save();
        $comment=' کاربر گرامی  '.$request->fullName.' اطلاعات شما بدرستی ذخیره شد. ';
        session()->flash('create',$comment);
        return back();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $user=User::findorfail($id);
        $user->delete();
        return back();

    }
}
