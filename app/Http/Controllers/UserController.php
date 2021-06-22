<?php

namespace App\Http\Controllers;

use App\Models\Benchmark;
use App\Models\Hardware;
use App\Models\User;
use Hamcrest\Arrays\IsArrayWithSize;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;

class UserController extends Controller
{
    public function createUser(Request $request) //Регистрация пользователя
    {
        $validateFields = $request->validate([
            'username' => 'required',
            'email' => 'required|email',
            'password' => 'required',
            'avatar' => 'required|file',
            'confirm_password' => 'required',
            'like_nomination_id' => 'required'
        ]);

        if (User::where('username', $validateFields['username'])->exists()) {
            return redirect(route('user.registration'))->withErrors([
                'username' => 'Such username already exists'
            ]);
        }

        if (User::where('email', $validateFields['email'])->exists()) {
            return redirect(route('user.registration'))->withErrors([
                'email' => 'Such email already exists'
            ]);
        }

        if ($request->password != $request->confirm_password) {
            return redirect(route('user.registration'))->withErrors([
                'password' => 'Password does not match'
            ]);
        }

        $filename = Storage::disk('public')->put('user', $request->avatar);
        $user = User::create($request->only('username', 'email', 'password', 'like_nomination_id') + ['avatar' => $filename]);

        if ($user) {
            Auth::login($user);
            return redirect(route('user.profile'));
        }

        return redirect(route('user.profile'))->withErrors([
            'formError' => 'Error'
        ]);
    }

    public function login(Request $request) //Авторизация
    {
        $formfields = $request->only(['username', 'email', 'password']);

        if (Auth::attempt($formfields)) {
            return redirect()->intended(route('user.profile'));
        }

        return redirect(route('user.login'))->withErrors([
            'email' => 'Error email or password'
        ]);
    }

    public function logout() //Выход
    {
        Auth::logout();
        return redirect(route('home.head'));
    }

    public function profileView(Request $request)  //Отображение своего профиля
    {
        $data = array(
            'title' => 'Profile'
        );

        $hardware = Hardware::where('user_id', Auth::id())->first();

        $user = User::find(Auth::id());

        $bestCPU = Benchmark::where('user_id', Auth::id())->where('nomination_id', '10')->where('approved', true)->where('reject', false)->orderBy('score', 'desc')->limit(1)->first();
        $bestGPU = Benchmark::where('user_id', Auth::id())->where('nomination_id', '20')->where('approved', true)->where('reject', false)->orderBy('score', 'desc')->limit(1)->first();
        $bestRAM = Benchmark::where('user_id', Auth::id())->where('nomination_id', '30')->where('approved', true)->where('reject', false)->orderBy('score', 'desc')->limit(1)->first();

        return view('user.profile', compact('hardware', 'user', 'bestCPU', 'bestGPU', 'bestRAM'))->with($data);
    }


    public function profileUser(Request $request, $indexUser) //Отображение чужого профиля
    {
        $indexUserGet = User::where('username', $indexUser)->first();

        if ($indexUserGet) {
            $resultsCPU = Benchmark::query()->where('user_id', $indexUserGet->id)->where('nomination_id', 10)->where('approved', true)->where('reject', false)->limit(5)->orderBy('score', 'DESC')->get();
            $resultsGPU = Benchmark::query()->where('user_id', $indexUserGet->id)->where('nomination_id', 20)->where('approved', true)->where('reject', false)->limit(5)->orderBy('score', 'DESC')->get();
            $resultsRAM = Benchmark::query()->where('user_id', $indexUserGet->id)->where('nomination_id', 30)->where('approved', true)->where('reject', false)->limit(5)->orderBy('score', 'DESC')->get();

            $hardware = Hardware::where('user_id', $indexUserGet->id)->first();

            $data = array(
                'title' => $indexUserGet->username
            );
            return view('user.profileView', compact('indexUserGet', 'hardware', 'resultsCPU', 'resultsGPU', 'resultsRAM'))->with($data);
        }

        return view('errors.404');
    }

    public function registrationAvailability() //Отображение формы регистрации
    {
        $data = array(
            'title' => 'Registration'
        );

        if (Auth::check()) {
            return redirect(route('user.profile'));
        }
        return view('user.registration')->with($data);
    }

    public function loginAvailability()//Отображение формы Авторизации
    {
        $data = array(
            'title' => 'Login'
        );

        if (Auth::check()) {
            return redirect(route('user.profile'));
        }
        return view('user.login')->with($data);
    }
}
