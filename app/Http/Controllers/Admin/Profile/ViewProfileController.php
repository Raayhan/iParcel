<?php

namespace App\Http\Controllers\Admin\Profile;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ViewProfileController extends Controller
{
    public function ViewProfile(){
        return view('admin.profile.view');
    }
}
