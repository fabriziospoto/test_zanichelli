<?php

namespace App\Http\Controllers\Api;

use App\DatabaseJson\Models\User;
use App\Http\Controllers\Controller;
use App\Http\Requests\StoreFormRequest;
use Illuminate\Http\Request;
use Session;

class FormController extends Controller
{   
    public function find()   //Function in get verso database per ottenere mail 
    {
        global $x;
        $x = [];
        $usersAll = User::all();
        foreach($usersAll as $k => $v) {
            $x[] = $usersAll[$k]->mail;
        }

        return $x;
    }

    public function store(StoreFormRequest $request)
    {   
        global $x;
        $this->find();    //Richiamo find() per poi verificare se mail è già nel db
        if (!(in_array($request->mail, $x))) {

            $user = new User;
            $user->name = $request->name;
            $user->surname = $request->surname;
            $user->mail = $request->mail;
            $user->save();
            
            // $mex = 'Ok';
        } else {
            // $mex = 'Not ok';
        }
        
        return back(); // ->with('success_message', 'Contact added!')

    }
}
