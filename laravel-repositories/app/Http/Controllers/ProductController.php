<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductController extends Controller
{
    protected $request;

    /**
     * ProductController constructor.
     * @param $request
     */
    public function __construct(Request $request)
    {
        $this->request = $request;
        //$this->middleware('auth');
        //$this->middleware('auth')->only(['create', 'storage']);
        //$this->middleware('auth')->except(['index', 'show']);
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $param1 = 123;
        $html = "<h1>TESTE de HTML</h1>";
        $controle = 123;

        $arrayteste = ['tv','geladeira','cama','banho'];

        //return view('teste', ['teste'=>$param1]);
        return view('admin.pages.products.index', compact('param1', 'html', 'controle', "arrayteste"));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.pages.products.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //dd($request->all());
        /*
         array:3 [▼
          "_token" => "6hGmXf9TxjVHERYriGLo4cLZnCXrujoI84IpaA5s"
          "name" => "teste"
          "description" => "123"]
        */

        //dd($request->only(['name', "description"]));
 /*       array:2 [▼
          "name" => "teste"
          "description" => "123"
        ]*/

        // dd($request->has('name'));
        // dd($request->name);
        //dd($request->input('name', 'valor default aqui'));
        dd($request->except('_token'));

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        return "Detalhes do produtos {$id}";
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        return view('admin.pages.products.edit', compact('id'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        dd('editando produto {$id}');
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
    }
}
