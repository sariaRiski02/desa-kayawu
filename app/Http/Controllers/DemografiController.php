<?php

namespace App\Http\Controllers;

use App\Models\Family;
use App\Models\MemberFamily;
use Illuminate\Http\Request;
use Illuminate\Support\Carbon;

class DemografiController extends Controller
{
    public function index()
    {

        // lingkungan
        $countResident = MemberFamily::count();
        $lingkungan = [];
        for ($i = 1; $i <= 8; $i++) {
            $lingkungan["lingkungan$i"] = round(MemberFamily::where("address", "lingkungan $i")->count() / $countResident  * 100);
        }



        // gender
        $genderM = round(MemberFamily::where('gender', 'L')->count() / $countResident * 100);
        $genderW = round(MemberFamily::where('gender', 'P')->count() / $countResident * 100);


        // group by age
        $date = MemberFamily::select('birth_date')->get();
        $age = $date->map(function ($item) {
            return Carbon::parse($item->birth_date)->age;
        });
        $age0_14 = round($age->filter(function ($item) {
            return $item <= 14;
        })->count() / $countResident * 100);
        $age14_65 = round($age->filter(function ($item) {
            return $item >= 15 && $item < 65;
        })->count()  / $countResident * 100);
        $age65_up = round($age->filter(function ($item) {
            return $item >= 65;
        })->count()  / $countResident * 100);


        // group by religion
        $religion = MemberFamily::select('religion')->get();
        $islam = round($religion->filter(function ($item) {
            return $item->religion == 'islam';
        })->count() / $countResident * 100);
        $kristen = round($religion->filter(function ($item) {
            return $item->religion == 'kristen';
        })->count() / $countResident * 100);
        $katolik = round($religion->filter(function ($item) {
            return $item->religion == 'katolik';
        })->count() / $countResident * 100);
        $hindu = round($religion->filter(function ($item) {
            return $item->religion == 'hindu';
        })->count() / $countResident * 100);
        $budha = round($religion->filter(function ($item) {
            return $item->religion == 'budha';
        })->count() / $countResident * 100);
        $konghuchu = round($religion->filter(function ($item) {
            return $item->religion == 'konghuchu';
        })->count() / $countResident * 100);


        // pekerjaan
        $pekerjaan = MemberFamily::select('occupation')->get();
        $pekerjaanCounts = $pekerjaan->groupBy('occupation')->map(function ($item) use ($countResident) {
            return round($item->count() / $countResident * 100);
        });

        $top10Pekerjaan = $pekerjaanCounts->sortDesc()->take(10);

        $remainingPekerjaan = 100 - $top10Pekerjaan->sum();

        $top10Pekerjaan = $top10Pekerjaan->map(function ($value, $key) {
            return [
                'name' => $key,
                'value' => $value,
                'backgroundColor' => '#' . substr(md5($key), 0, 6)
            ];
        });

        // pendidikan
        $pendidikan = MemberFamily::select('education_level')->get();
        $pendidikanCounts = $pendidikan->groupBy('education_level')->map(function ($item) use ($countResident) {
            return round($item->count() / $countResident * 100);
        });

        $pendidikanCounts = $pendidikanCounts->map(function ($value, $key) {
            return [
                'name' => $key,
                'value' => $value,
                'backgroundColor' => '#' . substr(md5($key), 0, 6)
            ];
        });

        return view('demografi', compact(
            'lingkungan',
            'genderM',
            'genderW',
            'age0_14',
            'age14_65',
            'age65_up',
            'islam',
            'kristen',
            'katolik',
            'hindu',
            'budha',
            'konghuchu',
            'top10Pekerjaan',
            'remainingPekerjaan',
            'pendidikanCounts'
        ));
    }
}
