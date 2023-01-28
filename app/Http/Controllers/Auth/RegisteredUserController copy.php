<?php

namespace App\Http\Controllers\Auth;

use App\Enums\EnumFonction;
use App\Enums\EnumSexe;
use App\Http\Controllers\Controller;
use App\Http\Requests\UserAddValidationFormRequest;
use App\Models\User;
use App\Providers\RouteServiceProvider;
use Illuminate\Auth\Events\Registered;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;
use Illuminate\Validation\Rules;
use Illuminate\Validation\Rules\Enum;
use Illuminate\View\View;
use Intervention\Image\Facades\Image;

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
    public function store(UserAddValidationFormRequest $request)
    {
        // dd($request->all());
        // $validate = $request->validate([
        //     'matricule'=>['required','string','min:2','max:30'],
        //     'nom'=>['required','string','min:2','max:30'],
        //     'prenom' =>['required', 'string','min:2','max:50'],
        //     'email'=> ['required', 'string', 'email', 'max:255'],
        //     'telephone'=> 'nullable|numeric|digits:9',
        //     'fonction'=>['required', 'string', 'min:3', 'max:15', new Enum(EnumFonction::class)],
        //     'role'=>['required','string','min:2','max:50'],
        //     'diplome'=>['required','string','min:2','max:50'],
        //     'date_naissance'=>'nullable|date',
        //     'lieu_naissance'=>'nullable|string|min:2|max:50',
        //     'biographie'=>'nullable|string|min:3|max:255',
        //     'adresse'=>'nullable|string|min:3|max:100',
        //     'sexe'=>['required', 'string', 'min:3', 'max:15', new Enum(EnumSexe::class)],
        //     'photo'=>['nullable', 'image', 'mimes:jpeg,jpg,png',],
        //     'salaire'=>['nullable', 'string', 'min:0',],
        //     // 'active '=>['nullable', 'string', 'min:0',],
        //     'password'=>['required', 'confirmed', Rules\Password::defaults()],

        // ]);

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
            'biographie'=> $request->biographie,
            'adresse'=> $request->adresse,
            'sexe'=> $request->sexe,
            'photo'=> $request->path,
            'salaire'=> $request->salaire,
            // 'active'=> $request->active,
            'password'=> Hash::make($request->password),
        ]);
        event(new Registered($user));

        Auth::login($user);

        return redirect(RouteServiceProvider::HOME);
    }

    public function destroy(Request $request , User $user)
    {
        $user->delete();
        return redirect()->route('user.index');
    }
}
