<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\UserFormRequest; // para validacion
use App\User;
class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */


    public function __construct()
    {
        $this->middleware('auth');  /*  validar sesion */
    }

    public function index()
    {
        //

        $user = User::all();

        return view('usuarios.index',['users' => $user]);

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
     return view('usuarios.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
      $usuario = new User();
      $usuario->name = request('nombre');
      $usuario->email = request('email');
      $usuario->password = request('password');

      $usuario->save();

      return redirect('/usuarios');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //

        return view('usuarios.show',['user' => User::findOrFail($id)]);

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
        return view('usuarios.edit',['user' => User::findOrFail($id)]); // retornara el user con el id

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id) // agregar UserFormRequest solo para validacion
    {
        //
      $usuario = User::findOrFail($id);

      $usuario->name = $request->get('nombre');
      $usuario->email = $request->get('email');
      $usuario->update();
      return redirect('/usuarios');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
        $usuario = User::findOrFail($id);
        $usuario->delete();

        return redirect('/usuarios');
    }
}
