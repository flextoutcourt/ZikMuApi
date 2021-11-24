<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class AuthController extends Controller
{

    protected $password;
    protected $user;

    public function token(string $username, string $passwd)
    {
        $user = User::where('username', $username)->firstOrFail();
        if($user){
            $this->user = $user;
            $this->password = $passwd;
            if($this->verify_user()){
                return $this->generate_token(255);
            }
        }
    }

    private function verify_user()
    {
        return Hash::check($this->passord, $this->user->password);
    }

    private function generate_token($length)
    {
        $token = Str::random($length);
        $this->user->token = $token;
        $this->user->save();
        return $token;
    }

    private function verify_refresh_token()
    {
        //incoming
    }
}
