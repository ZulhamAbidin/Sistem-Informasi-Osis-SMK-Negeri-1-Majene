<?php

namespace App\Http\Controllers;
use App\Models\User;
use Illuminate\Http\Request;

class RoleController extends Controller
{
    public function index() /* menampilkan data */
    {
        return view('dashboard.user.index', [
            "judul" => "List User",
            'user' => User::all()
        ]);
    }

     public function destroy(User $user) // delete
    {
        User::destroy($user->id);

        return redirect('/dashboard/user/')->with('success', 'user Berhasil Dihapus');
    }
}
