<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use Hash;

class UserController extends Controller
{
    public function create(Request $req){
        $user = new User();
        $user->email    = $req->email;
        $user->username = $req->username;
        $user->password = Hash::make($req->password);
        $user->save();
        if($user){
            $data = [
                'error' => false,
                'statusCode' => 200,
                'data' => $user
            ];
        }else{
            $data = [
                'error' => true,
                'statusCode' => 500,
                'message' => "cannot_insert_data"
            ];
        }
        return response()->json($data);
    }

    public function delete($id){
        $user = User::find($id);
        $user->delete();
        if($user){
            $data = [
                'error' => false,
                'statusCode' => 200,
                'data' => $user
            ];
        }else{
            $data = [
                'error' => true,
                'statusCode' => 500,
                'message' => "cannot_delete_data"
            ];
        }

        return response()->json($data);
    }

    public function update(Request $req, $id){
        $email = $req->email;
        $username = $req->username;
        $password = $req->password;

        $user = User::find($id);
        $user->email =  $email;
        $user->username = $username;
        $user->password = $password;

        $user->save();
        if($user){
            $data = [
                'error' => false,
                'statusCode' => 200,
                'data' => $user
            ];
        }else{
            $data = [
                'error' => true,
                'statusCode' => 500,
                'message' => "cannot_update_data"
            ];
        }
        return response()->json($data);
    }

    public function getList(){
        $users = User::all();
        if($users && count($users)){
            $data = [
                'error' => false,
                'statusCode' => 200,
                'data' => $users
            ];
        }else{
            $data = [
                'error' => true,
                'statusCode' => 500,
                'message' => "cannot_get_list_data"
            ];
        }
        return response()->json($data);
    }

    public function getUserById($id){
        $user = User::find($id);
        if($user){
            $data = [
                'error' => false,
                'statusCode' => 200,
                'data' => $user
            ];
        }else{
            $data = [
                'error' => true,
                'statusCode' => 500,
                'message' => "cannot_get_info_data"
            ];
        }
        return response()->json($data);
    }
}
