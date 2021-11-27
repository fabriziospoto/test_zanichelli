<?php

namespace App\Http\Controllers\Api;

use App\DatabaseJson\Models\User;
use App\Http\Controllers\Controller;
use App\Http\Requests\StoreFormRequest;
use Illuminate\Http\Request;

class FormController extends Controller
{
    public function store(StoreFormRequest $request)
    {
        
        $user = new User;
        $user->name = $request->name;
        $user->surname = $request->surname;
        $user->mail = $request->mail;
        $user->save();
        
        return (['message' => 'Aggiunto']);
    }
}
