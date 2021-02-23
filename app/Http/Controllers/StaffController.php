<?php

namespace App\Http\Controllers;

use App\Models\Staff;
use Illuminate\Http\Request;

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
        $staff = new Staff();

        $staff::create([
            'staff_name' => $request->staff_name,
            'email' => $request->email,
            'password' => $request->password
        ]);
        return redirect('/staffs');

    }


}

