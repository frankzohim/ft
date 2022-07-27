<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use App\Providers\RouteServiceProvider;
use Illuminate\Auth\Events\Registered;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rules;
use Validator;

class RegisteredUserController extends Controller
{
    /**
     * Display the registration view.
     *
     * @return \Illuminate\View\View
     */
    public function create()
    {
        return view('auth.register');
    }

    /**
     * Handle an incoming registration request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\RedirectResponse
     *
     * @throws \Illuminate\Validation\ValidationException
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => ['required', 'confirmed', Rules\Password::defaults()],
        ]);

        $user = User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
        ]);

        event(new Registered($user));

        Auth::login($user);

        return redirect(RouteServiceProvider::HOME);
    }

    /**
     * Handle an incoming registration request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\RedirectResponse
     *
     * @throws \Illuminate\Validation\ValidationException
     */
    public function storeAPI(Request $request)
    {
        $validator = Validator::make($request->all(),[
            'name' => ['required', 'string', 'max:255'],
            'lastname' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 
            'max:255', 'unique:users'],
            'password' => ['required', 'confirmed', 
            Rules\Password::defaults()],
            'phone' => ['required', 'string', 'max:255'],
            'role_id' => ['required', 'string', 'in:Chauffeur,Passager'],
        ]);

        if($validator->fails()){
            
            
             $response = [
                    'success' => false,
                    'message' => 'Un ou plusieurs champs sont incorrectes.',
                ];
 
                if(!empty($validator->errors())){
                    $response['data'] = $validator->errors();
                }
                return response()->json($response, '412');
        }
        if($request->role_id == "Chauffeur")
            $role_id = 2;
        else
            $role_id = 3;

         $user = User::create([
            'role_id' => $role_id,
            'name' => $request->name,
			'lastname' => $request->lastname,
            'email' => $request->email,
            'phone' => $request->phone,
            'password' => Hash::make($request->password),
        ]);

        //return $user
        return response()->json($user, '200');
    }
    
    /**
     * Handle an incoming profile edition request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\RedirectResponse
     *
     * @throws \Illuminate\Validation\ValidationException
     */
    public function editProfile(Request $request)
    {
        $validator = Validator::make($request->all(),[
            'id' => ['required', 'exists:App\Models\User,id'],
            'name' => ['required', 'string', 'max:255'],
            'lastname' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 
            'max:255', 'unique:users,email,'.$request->id],
            'phone' => ['required', 'string', 'max:255'],
            'role_id' => ['required', 'string', 'in:Chauffeur,Passager'],
        ]);

        if($validator->fails()){
            
            
             $response = [
                    'success' => false,
                    'message' => 'Un ou plusieurs champs sont incorrectes.',
                ];
 
                if(!empty($validator->errors())){
                    $response['data'] = $validator->errors();
                }
                return response()->json($response, '412');
        }
        if($request->role_id == "Chauffeur")
            $role_id = 2;
        else
            $role_id = 3;
        $user = User::findOrFail($request->id);
        $user->role_id = $role_id;
        $user->name = $request->name;
        $user->lastname = $request->lastname;
        $user->email = $request->email;
        $user->phone = $request->phone;
        $user->save();

        //return $user
        return response()->json($user, '200');
    }
}
