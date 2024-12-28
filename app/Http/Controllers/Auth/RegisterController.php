<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use App\Models\User;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Http\Request;


class RegisterController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Register Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles the registration of new users as well as their
    | validation and creation. By default this controller uses a trait to
    | provide this functionality without requiring any additional code.
    |
    */

    use RegistersUsers;

    

    public function __construct()
    {
        $this->middleware('guest');
    }

    protected function validator(array $data)
    {
        return Validator::make($data, [
            'first_name' => ['required', 'string', 'max:255'],
            'last_name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => ['required', 'string', 'min:8', 'confirmed'],
        ]);
    }

    protected function create(array $data)
    {
        return User::create([
            'first_name' => $data['first_name'],
            'last_name' => $data['last_name'],
            'email' => $data['email'],
            'password' => Hash::make($data['password']),
        ]);
    }

    public function showRegistrationForm()
    {
        return view('frontend.auth.register'); // Pastikan ini sesuai dengan view Anda
    }

    public function register(Request $request)
    {
        $validator = $this->validator($request->all());

    if ($validator->fails()) {
        \Log::info('Error Validasi:', $validator->errors()->toArray());
        // Kembalikan ke halaman register dengan pesan error dan input sebelumnya
        return redirect()->back()
            ->withErrors($validator)
            ->withInput();
    }

    // Jika validasi berhasil, buat pengguna baru
    $user = $this->create($request->all());
    auth()->login($user);

    // Arahkan ke halaman home setelah berhasil
    return redirect('/')->with('success', 'Registration successful!');
    }
}
