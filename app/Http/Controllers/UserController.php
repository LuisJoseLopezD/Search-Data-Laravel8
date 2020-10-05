<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\DB;

use Illuminate\Database\Eloquent\Model;
use Cviebrock\EloquentSluggable\Sluggable;
use Cviebrock\EloquentSluggable\SluggableScopeHelpers;
use Carbon\Carbon;

class UserController extends Controller
{
    public function index(Request $request)
    {

    	$name 	= $request->get('name');
    	$email 	= $request->get('email');
    	$bio 	= $request->get('bio');

        $users = User::orderBy('id', 'DESC')
        	->name($name)
        	->email($email)
        	->bio($bio)
        	->simplePaginate(3); // PAGINACION

        // lo de arriba se lee: a la tabla users de la db
        // vamos a aplicarle los siguientes métodos
        // incluyendo la paginación	

        return view('user', ['users' => $users]);
    }
}
