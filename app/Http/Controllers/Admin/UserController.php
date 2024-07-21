<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Validation\Rules;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Validation\ValidationException;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    public function index()
    {
        return view('admin.user.index');
    }

    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'lowercase', 'email', 'max:255', 'unique:users'],
            'password' => ['required', 'confirmed', Rules\Password::defaults()],
        ]);

        try {
            $validator->validate();

            $user = User::create([
                'name' => $request->name,
                'email' => $request->email,
                'password' => Hash::make($request->password),
            ]);

            if ($user) {
                return redirect()->route('admin.usuario.index')->with('success', 'Usuario registrado exitosamente.');
            } else {
                return back()->withErrors(['general' => 'Ocurrió un error al crear el usuario.']);
            }
        } catch (ValidationException $e) {
            return back()->withErrors($e->validator->errors());
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
