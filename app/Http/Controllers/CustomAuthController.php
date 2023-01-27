<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Hash;
use Session;
use App\Models\User;
use Illuminate\Support\Facades\Auth;

class CustomAuthController extends Controller
{

    public function index()
    {

        return view('auth.login');
    }

    public function liste()
    {
        $users = User::all();
        return view('admin.utilisateur.utilisateur', compact('users'));
    }
    public function customLogin(Request $request)
    {


        $request->validate([
            // 'email' => 'required|email',
            // 'phone' => 'required|numeric|size:11|unique:users',
            'email'=>'required',
            'password' => 'required',
        ],
        [
            'email.required' => 'Email or phone number is required',
            'password.required' => 'Password is required',
        ]
    );

         $credentials = $request->only($this->username(),'password');
        if (Auth::attempt($credentials)) {
            return redirect()->intended('index')
                        ->withSuccess('Signed in');
        }
        return redirect("login")->withErrors('These credentials do not match our records.');
     }

     public function username()
     {
        $login = request('login');
        $field = filter_var($login, FILTER_VALIDATE_EMAIL) ? 'email': 'telephone';
        request()->merge([$field => $login]);
        return $field;
     }

    public function registration()
    {
        return view('register');
    }


    public function customRegistration(Request $request)
    {
        $request->validate([
            'nom' => 'required|min:3|max:30',
            'prenom' => 'required|min:3|max:30',
            'telephone' => 'required|numeric|min:9|unique:users',
            'adresse' => 'required|max:30',
            'email' => 'required|email|unique:users',
            'password' => 'min:8|required_with:password_confirme|same:password_confirme',
            'password_confirme'=> 'min:8'
        ],
        [
            'nom.required' => 'nom is required',
            'email.required' => 'Email is required',
            'password.required' => 'Password is required',

        ]
    );

        $data = $request->all();
        $check = $this->create($data);

        return redirect("login")->withSuccess('You have signed-in');
    }


    public function create(array $data)
    {
      return User::create([
        'nom' => $data['nom'],
        'prenom' => $data['prenom'],
        'telephone' => $data['telephone'],
        'adresse' => $data['adresse'],
        'email' => $data['email'],
        'password' => Hash::make($data['password'])

      ]);
    }


    public function dashboard()
    {
        if(Auth::check()){
            return view('index');
        }

        return redirect("login")->withSuccess('You are not allowed to access');
    }


    public function signOut() {
        Session::flush();
        Auth::logout();

        return Redirect('login');
    }
}
