<?php

namespace App\Http\Controllers;

//use App\User;
use App\Models\User;  // <-- your model
use App\Traits\ApiResponser;  // <-- use to standardized our code for api response
use Illuminate\Http\Request;  // <-- handling http request in lumen
use DB; // <-- if your not using lumen eloquent you can use DB component in lumen


Class UserController extends Controller {
    use ApiResponser;

    private $request;

    public function __construct(Request $request){
        $this->request = $request;
    }

    public function getUsers(){

        // eloquent style
        // $users = User::all();

        // sql string as parameter
        $users = DB::connection('mysql')
        ->select("Select * from tbluser");

        return response()->json($users, 200);
    }
    /**
     * Return the list of users
     * @return Illuminate\Http\Response
     */
    public function index()
    {
        $users = User::all();

        // return $users; // <-- not standardized return of data
        // return $this->successResponse($users);
        //return response()->json($users, 200);
        return $this->successResponse($users);
    }

    
}



