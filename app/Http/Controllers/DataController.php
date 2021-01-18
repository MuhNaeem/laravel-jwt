<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DataController extends Controller
{
    public function open() 
        {
            //open route so no need for token to view this route
            $data = "This route is open and can be accessed without the client being authenticated";
            return response()->json(compact('data'),200);

        }

    public function closed() 
        {
            //protected route that user cannot access without token
            $data = "Only authorized users can see this";
            return response()->json(compact('data'),200);
        }
}
