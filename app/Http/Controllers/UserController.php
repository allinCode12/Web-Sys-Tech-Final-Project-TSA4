<?php
namespace App\Http\Controllers;
use App\Models\User;
use Illuminate\View\View;
class UserController extends Controller{
    public function profile(): View{
        $user = User::firstOrFail();
        return view('profile', ['user' => $user]);
    }
}