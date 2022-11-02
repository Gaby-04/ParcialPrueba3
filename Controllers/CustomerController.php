<?php

namespace App\Http\Controllers;

use App\Models\Customer;
use Illuminate\Http\Request;

class CustomerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $respuesta = json_decode(Customer::Usuarioscustomer(), true);
        return response()->json($respuesta);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $UserCustomer = json_decode(Customer::Usuarioscustomer() ,true);
        $newCustomer =array(
            "nombre"=>$request->nombre,
            "apellido"=>$request->apellido,
            "edad"=>$request->edad,
            "telefono"=>$request->telefono,
            "email"=>$request->email,
            "password"=>$request->password,
            "cargo"=>$request->cargo,
            "nacionalidad"=>$request->nacionalidad,
            
        );
        array_push($UserCustomer['usuarios'], $newCustomer);
        $data = json_encode($UserCustomer);
        file_put_contents('../users.json',$data);
        return redirect()->route("index.customer");
    }

    public function nuevo (){
        return view('customernuevo');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Customer  $persona
     * @return \Illuminate\Http\Response
     */
    public function showUser($id)
    {
        //
        $respuesta = json_decode(Customer::Usuarioscustomer(), true);
        return response()->json($respuesta['usuarios'][$id]);

    }

    public function showUserSaludo($id)
    {
        //
        $respuesta =json_decode(Customer::Usuarioscustomer(),true);
        $User = $respuesta['usuarios'][$id];
        $arrUser = array(
            $User,
            'Saludo'=>'Hola como estas ' .$User ['nombre'],
        );
        return response()->json($arrUser);

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Customer  $persona
     * @return \Illuminate\Http\Response
     */
    public function edit(Customer $customer)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Costumer  $persona
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Customer $customer)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Customer  $persona
     * @return \Illuminate\Http\Response
     */
    public function destroy(Customer $customer)
    {
        //
    }
}
