<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    public function showProfile(){
        return 'user name';
    }
    public function show($id){
        return $id;
    }

    public function edit($id){
        return 'Edit';
    }

}
