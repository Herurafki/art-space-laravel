<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class ProfileController extends Controller
{
    private $apiKey = '533de3996f0068fae0732420fb27cfdf'; // Ganti dengan API Key Anda

    public function index()
    {
        $user = auth()->user();

        // Ambil data provinsi dari API Raja Ongkir
        $provinces = $this->getProvinces();

        // Ambil data kota berdasarkan province_id pengguna
        $cities = isset($user->province_id) ? $this->getCities($user->province_id) : [];

        // Kirim data ke view
        return view('frontend.auth.profile', compact('user', 'provinces', 'cities'));
    }

    public function update(Request $request)
    {
        // Validasi input
        $request->validate([
            'province_id' => 'required',
            'city_id' => 'required',
        ]);

        // Ambil user
        $user = auth()->user();

        // Update data user
        $user->update($request->all());

        // Redirect kembali ke halaman profile dengan pesan sukses
        return redirect()->route('profile.index')->with('success', 'Profile updated successfully.');
    }

    protected function getProvinces()
    {
        $response = Http::withHeaders([
            'key' => $this->apiKey,
        ])->get('https://api.rajaongkir.com/starter/province');

        if ($response->successful()) {
            $data = $response->json();
            return collect($data['rajaongkir']['results'])->pluck('province', 'province_id')->toArray();
        }

        return [];
    }

    protected function getCities($province_id)
    {
        $response = Http::withHeaders([
            'key' => $this->apiKey,
        ])->get('https://api.rajaongkir.com/starter/city', [
            'province' => $province_id,
        ]);

        if ($response->successful()) {
            $data = $response->json();
            return collect($data['rajaongkir']['results'])->pluck('city_name', 'city_id')->toArray();
        }

        return [];
    }

    public function getCitiesAjax(Request $request)
{
    // Validasi input provinsi
    $province_id = $request->input('province_id');
    if (!$province_id) {
        return response()->json(['error' => 'Province ID is required'], 400);
    }

    // Ambil data kota berdasarkan provinsi
    $cities = $this->getCities($province_id);

    // Kembalikan response JSON
    return response()->json($cities);
}

}
