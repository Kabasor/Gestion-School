<?php

namespace App\Http\Controllers\Auth;

use App\Models\User;
use App\Enums\EnumSexe;
use Illuminate\View\View;
use App\Enums\EnumFonction;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use Illuminate\Validation\Rules;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Http\RedirectResponse;
use Illuminate\Validation\Rules\Enum;
use Intervention\Image\Facades\Image;
use Illuminate\Auth\Events\Registered;
use App\Providers\RouteServiceProvider;
use Illuminate\Support\Facades\Session;

class RegisteredUserController extends Controller
{
    public function index()
    {
        $users = User::all();
        return view('admin.utilisateur.utilisateur',compact('users'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.utilisateur.add-utilisateur');
    }


    /**
     * Handle an incoming registration request.
     *
     * @throws \Illuminate\Validation\ValidationException
     */
    public function store(Request $request)
    {
        $validate = $request->validate([
            'matricule'=>['required','string','min:2','max:30'],
            'nom'=>['required','string','min:2','max:30'],
            'prenom' =>['required', 'string','min:2','max:50'],
            'email'=> ['required', 'string', 'email', 'max:255'],
            'telephone'=> 'nullable|numeric|digits:9',
            'fonction'=>['required', 'string', 'min:3', 'max:30',],
            'role'=>['required','string','min:2','max:50'],
            'diplome'=>['required','string','min:2','max:50'],
            'date_naissance'=>'nullable|date',
            'lieu_naissance'=>'nullable|string|min:2|max:50',
            // 'biographie'=>'nullable|string|min:3|max:255',
            'adresse'=>'nullable|string|min:3|max:100',
            'sexe'=>['required', 'string', 'min:3', 'max:15'],
            'photo'=>['nullable', 'image', 'mimes:jpeg,jpg,png',],
            'salaire'=>['nullable', 'string', 'min:0',],
            // 'active '=>['nullable', 'string', 'min:0',],
            // 'password' => ['required', 'string', 'min:8', 'confirmed'],

        ]);

        // dd($request->all());
        if ($request->hasFile('photo')) {
            $username = Str::slug($request->nom . ' ' . $request->prenom);
            $filename = $username . '.' . time() . '.' . $request->photo->extension();

            $path = $request->file('photo')->storeAs(
                'users',
                $filename,
                'public',
            );

            $image = Image::make(public_path("/storage/{$path}"))->fit(150, 150);
            $image->save();
        } else {
            $path = '';
        }

        // dd($request->all());

        $user = User::create([
            'matricule'=> $request->matricule,
            'nom'=> $request->nom,
            'prenom'=> $request->prenom,
            'email'=> $request->email,
            'telephone'=> $request->telephone,
            'fonction'=> $request->fonction,
            'role'=> $request->role,
            'diplome'=> $request->diplome,
            'date_naissance'=> $request->date_naissance,
            'lieu_naissance'=> $request->lieu_naissance,
            // 'biographie'=> $request->biographie,
            'adresse'=> $request->adresse,
            'sexe'=> $request->sexe,
            'photo'=> $request->path,
            'salaire'=> $request->salaire,
            // 'active'=> $request->active,
            // 'password'=> Hash::make($request->password),
        ]);
        // event(new Registered($user));

        // Auth::login($user);

        // return redirect(RouteServiceProvider::HOME);
        return redirect()->route('user.index');
    }
    public function show(User $user)
    {
        return view('admin.utilisateur.show-utilisateur',compact('user'));
    }

    public function edit(User $user)
    {
        return view('admin.utilisateur.edit-utilisateur',compact('user'));
    }

    public function update(Request $request, User $user)
    {
        $validate = $request->validate([
            'matricule'=>['required','string','min:2','max:30'],
            'nom'=>['required','string','min:2','max:30'],
            'prenom' =>['required', 'string','min:2','max:50'],
            'email'=> ['required', 'string', 'email', 'max:255'],
            'telephone'=> 'nullable|numeric|digits:9',
            'fonction'=>['required', 'string', 'min:3', 'max:30',],
            'role'=>['required','string','min:2','max:50'],
            'diplome'=>['required','string','min:2','max:50'],
            'date_naissance'=>'nullable|date',
            'lieu_naissance'=>'nullable|string|min:2|max:50',
            // 'biographie'=>'nullable|string|min:3|max:255',
            'adresse'=>'nullable|string|min:3|max:100',
            'sexe'=>['required', 'string', 'min:3', 'max:15'],
            'photo'=>['nullable', 'image', 'mimes:jpeg,jpg,png',],
            'salaire'=>['nullable', 'string', 'min:0',],
            // 'active '=>['nullable', 'string', 'min:0',],
            // 'password' => ['required', 'string', 'min:8', 'confirmed'],
        ]);
        $user->update([
            'matricule'=> $request->matricule,
            'nom'=> $request->nom,
            'prenom'=> $request->prenom,
            'email'=> $request->email,
            'telephone'=> $request->telephone,
            'fonction'=> $request->fonction,
            'role'=> $request->role,
            'diplome'=> $request->diplome,
            'date_naissance'=> $request->date_naissance,
            'lieu_naissance'=> $request->lieu_naissance,
            // 'biographie'=> $request->biographie,
            'adresse'=> $request->adresse,
            'sexe'=> $request->sexe,
            'photo'=> $request->path,
            'salaire'=> $request->salaire,
            // 'active'=> $request->active,
            // 'password'=> Hash::make($request->password),
        ]);


        return redirect()->route('user.index');
    }
    public function destroy(Request $request , User $user)
    {
        $user->delete();
        return redirect()->route('user.index');
    }

    public function perform()
    {
        Session::flush();
        Auth::logout();
        return redirect('login');
    }
}
