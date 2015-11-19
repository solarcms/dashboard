<?php

namespace Solarcms\Dashboard\Controllers;

use App\Http\Controllers\Controller;
use Solarcms\Dashboard\Dashboard;

class DashboardController extends Controller {

    public function index() {
        return view('Dashboard::index');
    }

}