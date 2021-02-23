<?php

namespace App\Http\Controllers;

use App\Models\Staff;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;


class StaffController extends Controller
{
    public function index()
    {
        $staffs = Staff::all();
        return view('staffs.index', [
            'staffs' => $staffs
        ]);
    }

    public function create()
    {
       return view('staffs.create');
    }

    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'staff_name' => 'required|max:255',
            'email' => 'required|unique:staff',
            'password' => 'required',
        ]);
        if ($validator->fails()) {
            return redirect('staffs/create')
                        ->withErrors($validator)
                        ->withInput();
        }

        $staff = new Staff();

        $staff::create([
            'staff_name' => $request->staff_name,
            'email' => $request->email,
            'password' => $request->password
        ]);
        return redirect('/staffs');

    }

    public function edit($id)
    {
        $staff = Staff::find($id);
        return view('staffs.edit',['staff' => $staff]);
    }

    public function update(Type $var = null)
    {
        # code...
    }


}

