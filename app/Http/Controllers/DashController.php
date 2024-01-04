<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\M_310122023716;

class DashController extends Controller
{
    //
    public function index(M_310122023716 $myDB)
    {
        return view('barang.dash', [
            'total_barang' => $myDB->count(),
        ]);
    }
}
