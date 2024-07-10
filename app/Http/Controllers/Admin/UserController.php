<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Validation\Rules;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    public function index()
    {
        return view('admin.user.index');
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'lowercase', 'email', 'max:255', 'unique:'.User::class],
            'password' => ['required', 'confirmed', Rules\Password::defaults()],
        ]);

        $user = User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
        ]);

        if ($user) {
            return redirect()->route('admin.usuario.index')->with('success', 'Usuario registrado exitosamente.');
        } else {
            return redirect()->back()->withErrors('No se pudo  registrar el Usuario:'. $user->getMessage());
        }
    }

    public function update(Request $request, User $user)
    {
        $user->roles()->sync($request->roles);
        return redirect()->route('admin.usuario.index', $user)->withSuccess('Se asignó los roles correctamente');
    }

    public function destroy(string $id)
    {
        User::find($id)->delete();
        return redirect()->route('admin.usuario.index')->with('success', 'El usuario fue eliminada correctamente.');
    }
}
