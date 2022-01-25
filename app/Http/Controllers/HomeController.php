<?php

namespace App\Http\Controllers;

use App\Models\BackroomStatus;
use App\Models\CustomerRequest;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        // $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $customers = CustomerRequest::latest()->with('service.backrooms.status')->paginate(10);
        // $customerRequests = CustomerRequest::all();
        // dd($customers);
        return view('dashboard', compact('customers'));
    }
}
