<?php 

namespace App\Services\Auth;
use App\Models\User;
use App\Models\Citizen;
class AuthRepository{

    public function registerAdminUser($request) :array
    {
        try{
            $user = User::create([
                'name'     => $request['name'],
                'email'    => $request['email'],
                'password' => $request['password']
            ]);
            $token = $user->createToken('auth_token')->plainTextToken;
            return [
                'response' => true,
                'status'   => 201,
                'message'  => 'Admin user created successfully!',
                'data'     => $user,
                'token'    => $token
            ];
        }catch(\Throwable $th){
            return  [
                'error'    =>  $th->getMessage(),
            ];
        }
    }

    public function loginAdminUser($request) :array
    {
        try{
            $user  = User::where('email', $request['email']);
            if ($user == null) {
                return [
                    'response' => false,
                    'status' => 404,
                    'message' => 'User not found!',
                ];
            }
        }catch(\Throwable $th){
            return  [
                'error'    =>  $th->getMessage(),
            ];
        }
    }

    public function fetchRecords() :array
    {
        try{
            $data = Citizen::all();
            return [
                'response' => true,
                'status'   => 200,
                'message'  => ' Request Successful',
                'data'     => $data
            ];
        }catch(\Throwable $th){
            return  [
                'error'    =>  $th->getMessage(),
            ];
        }
    }
}