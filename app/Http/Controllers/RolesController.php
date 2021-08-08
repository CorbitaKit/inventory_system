<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Role;
use App\Http\Resources\RoleCollection;
class RolesController extends Controller
{

    public function __invoke(){


    	return response(new RoleCollection(Role::get()),200);
    }

}
