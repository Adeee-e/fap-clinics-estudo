<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreUserRequest;
use App\Models\User;
use Inertia\Inertia;
use Inertia\Response;

class UserController extends Controller
{
    public function index(): Response
    {
        $users = User::select(
            'id',
            'name',
            'email',
            'is_superuser',
            'created_at'
        )->get();

        return Inertia::render('Users/Index', [
            'users' => $users,
        ]);
    }

    public function create(): Response
    {
        return Inertia::render('Users/Create');
    }

    public function store(StoreUserRequest $request)
    {
        $user = new User();

        $user->name = $request->name;
        $user->email = $request->email;
        $user->password = $request->password;
        $user->is_superuser = false; //dessa forma fica explicito que o usuario criado pelo admin não é superuser, mesmo que o campo is_superuser seja enviado

        $user->save();

        return redirect()
            ->route('users.index')
            ->with('success', 'Usuário cadastrado com sucesso.');
    }
}
