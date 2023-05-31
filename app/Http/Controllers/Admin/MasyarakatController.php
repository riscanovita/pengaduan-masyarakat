<?php

namespace App\Http\Controllers\Admin;

use App\Models\Masyarakat;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class MasyarakatController extends Controller
{
    public function index()
    {
        $masyarakat = Masyarakat::all();

        return view('admin.masyarakat.index', ['masyarakat' => $masyarakat]);
    }

    public function show($nik)
    {
        $masyarakat = Masyarakat::where('nik', $nik)->first();

        return view('admin.masyarakat.show', ['masyarakat' => $masyarakat]);
    }

}
