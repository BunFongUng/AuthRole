<?php

namespace App\Http\Controllers;

use App\Role;
use Illuminate\Http\Request;

use App\Http\Requests;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Validator;

class RolesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $roles = Role::all();
        return view("roles.index")->with("roles", $roles);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view("roles.form_create");
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $rules = array(
            "name" => "required|min:3",
            "display_name" => "required|min:3",
            "description" => "required"
        );

        $validation = Validator::make($request->all(), $rules);
        if($validation->fails()) {
            return redirect()->route("roles.create")->withInput()->withErrors($validation);
        }

        Role::create($request->all());
        return redirect()->route("roles.index");

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
//        $role = Role::findOrfail($id);
//        return view("roles.show", ["role" => $role]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $role = Role::findOrfail($id);
        return view("roles.edit", ["role" => $role]);
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
        $rules = [
            "name" => "required|min:3",
            "display_name" => "required|min:3",
            "description" => "required"
        ];

        $validation = Validator::make($request->all(), $rules);

        if($validation->fails()) {
            return redirect()->route("roles.edit", ["id" => $id])->withInput()->withErrors($validation);
        }

        $role = Role::findOrfail($id);
        $role->update($request->all());
        return redirect()->route("roles.index");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $role = Role::findOrfail($id);
        $role->delete();
        return redirect()->route("roles.index");
    }
}
