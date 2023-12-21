<?php

namespace App\Http\Controllers\Relawan;

use App\Models\Organisasi;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class DashboardVolunteerController extends Controller
{
    public function index(){
        $organisasi = Organisasi::all();
        return view('relawan.dashboardvolunteer',[
            'organisasi' => $organisasi
        ]);
    }
}
