<?php

namespace App\Http\Controllers;

use App\Models\Family;
use App\Models\MemberFamily;
use Illuminate\Http\Request;


class ResidentController extends Controller
{


    public function index()
    {
        $resident = MemberFamily::with('Family')->latest()->paginate(20);

        return view('dashboardResident', compact('resident'));
    }

    public function indexAdd()
    {
        $kk = Family::all();
        $lingkungan = [
            'lingkungan 1',
            'lingkungan 2',
            'lingkungan 3',
            'lingkungan 4',
            'lingkungan 5',
            'lingkungan 6',
            'lingkungan 7',
            'lingkungan 8'
        ];
        $pendidikan = [
            'Tidak/Belum Sekolah',
            'Tidak Tamat SD',
            'TK',
            'SD',
            'SMP/Sederajat',
            'SMA/Sederajat',
            'D1/D2',
            'D3',
            'S1/D4',
            'S2',
        ];

        $status = [
            'Belum Menikah',
            'Sudah Menikah',
            'Bercerai',
        ];

        $family_position = [
            'Kepala Keluarga',
            'Ibu Rumah Tangga',
            'Anak'
        ];
        return view('addResident', compact('kk', 'lingkungan', 'pendidikan', 'status', 'family_position'));
    }

    public function indexUpdate($nik)
    {


        $resident = MemberFamily::where('nik', $nik)->first();


        $kk = Family::all();
        $lingkungan = [
            'lingkungan 1',
            'lingkungan 2',
            'lingkungan 3',
            'lingkungan 4',
            'lingkungan 5',
            'lingkungan 6',
            'lingkungan 7',
            'lingkungan 8'
        ];

        return view('updateResident', compact('kk', 'lingkungan', 'resident'));
    }


    public function addKK(Request $request)
    {
        $data = $request->validate([
            'kk' => 'required|numeric',
            'name_family_head' => 'required|string|max:225'
        ]);

        $result = Family::create($data);

        if (!$result) {
            return redirect()->back()->with('error', 'KK gagal ditambahkan');
        }
        return redirect()->back()->with('success', 'KK berhasil ditambahkan');
    }

    public function addResident(Request $request)
    {

        $data = $request->validate([
            'nik' => 'required|numeric|digits:16|unique:member_families,nik',
            'name' => 'required|string|max:225',
            'address' => 'required|string',
            'gender' => 'required|string|in:L,P',
            'birth_place' => 'required|string|max:225',
            'birth_date' => 'required|date',
            'religion' => 'required|string|max:50',
            'family_position' => 'required|string',
            'education_level' => 'required|string|max:100',
            'occupation' => 'required|string|max:100',
            'id_family' => 'required|exists:families,kk'
        ], [
            'nik.required' => 'NIK wajib diisi',
            'nik.numeric' => 'NIK harus berupa angka',
            'nik.digits' => 'NIK harus terdiri dari 16 digit',
            'nik.unique' => 'NIK sudah terdaftar',
            'name.required' => 'Nama wajib diisi',
            'name.string' => 'Nama harus berupa teks',
            'name.max' => 'Nama maksimal 225 karakter',
            'address.required' => 'Alamat wajib diisi',
            'address.string' => 'Alamat harus berupa teks',
            'gender.required' => 'Jenis kelamin wajib diisi',
            'gender.string' => 'Jenis kelamin harus berupa teks',
            'gender.in' => 'Jenis kelamin harus L atau P',
            'birth_place.required' => 'Tempat lahir wajib diisi',
            'birth_place.string' => 'Tempat lahir harus berupa teks',
            'birth_place.max' => 'Tempat lahir maksimal 225 karakter',
            'birth_date.required' => 'Tanggal lahir wajib diisi',
            'birth_date.date' => 'Tanggal lahir harus berupa tanggal yang valid',
            'religion.required' => 'Agama wajib diisi',
            'religion.string' => 'Agama harus berupa teks',
            'religion.max' => 'Agama maksimal 50 karakter',
            'family_position.required' => 'Posisi dalam keluarga wajib diisi',
            'family_position.string' => 'Posisi dalam keluarga harus berupa teks',
            'education_level.required' => 'Tingkat pendidikan wajib diisi',
            'education_level.string' => 'Tingkat pendidikan harus berupa teks',
            'education_level.max' => 'Tingkat pendidikan maksimal 100 karakter',
            'occupation.required' => 'Pekerjaan wajib diisi',
            'occupation.string' => 'Pekerjaan harus berupa teks',
            'occupation.max' => 'Pekerjaan maksimal 100 karakter',
            'id_family.required' => 'ID Keluarga wajib diisi',
            'id_family.exists' => 'ID Keluarga tidak ditemukan'
        ]);


        $kk = Family::where('kk', $data['id_family'])->first();
        $resident = $kk->memberFamily();
        $result = $resident->create($data);


        if (!$result) {
            return redirect()->back()->with('error', 'Resident gagal ditambahkan');
        }
        return redirect()->route('dashboard.resident')->with('success', 'Resident berhasil ditambahkan');
    }

    public function updateResident() {}
}
