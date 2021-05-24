<?php

namespace App\Http\Controllers\Web;
use App\Models\Citizen;
use App\Models\Ward;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        return view('pages.index');
    }

    public function get()
    {
        $data = Citizen::all();
        return view('pages.records', ['citizens' => $data]);
    }

    public function register()
    {
        $wards = Ward::all();
        return view('pages.register', ['wards' => $wards]);
    }

    public function view($id)
    {
        $data = Citizen::with('ward')->findOrFail($id);
        return view('pages.view', ['result' => $data]);
    }

    public function store(Request $request)
    {
        $request->validate([
            'full_name' => 'required',
            'gender'    => 'required',
            'address'   => 'required',
            'ward'      =>  'required',
            'phone'     =>  'required',
        ]);

       

        Citizen::create([
            'full_name'  => $request->full_name,
            'gender'     => $request->gender,
            'address'    => $request->address,
            'phone'      => $request->phone,
            'ward_id'    => $request->ward,
        ]);
        return redirect()->back()->with('message', 'form submitted successfully');
    }

}
