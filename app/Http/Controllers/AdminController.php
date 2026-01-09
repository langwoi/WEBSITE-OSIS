<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Stat;    
use App\Models\Mission; 

class AdminController extends Controller
{
    public function dashboard()
    {
        // Mengambil data agar tidak "Undefined Variable"
        $stats = Stat::all();
        $missions = Mission::all(); 

        // Mengirim data ke folder admin file dashboard
        return view('admin.dashboard', compact('stats', 'missions'));
    }

    public function updateStat(Request $request, $id)
    {
        $stat = Stat::findOrFail($id);
        $stat->update($request->all());
        return back()->with('success', 'Statistik berhasil diperbarui!');
    }
}