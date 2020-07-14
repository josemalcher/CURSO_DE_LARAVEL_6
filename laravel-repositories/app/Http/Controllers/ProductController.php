<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreUpdateProductRequest;
use App\Product;
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
        //$products = Product::all();
        //$products = Product::get();

        //$products = Product::paginate();
        $products = Product::latest()->paginate();

        return view('admin.pages.products.index',
            [
                'products' => $products,
            ]
        );
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
    public function store(StoreUpdateProductRequest $request)
    {
/*
        $request->validate([
            'name'          => 'required | min:3 | max: 255',
            'description'   => 'nullable | min:3 | max:10000',
            'photo'         => 'required | image'
        ]);
*/


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
        //dd($request->except('_token'));

        //dd($request->file('photo')->isValid()); // true
        if($request->file('photo')->isValid()){
            //dd($request->photo->extension()); // "jpeg"
            //dd($request->file('photo')->store('products'));

            $nameFile = $request->name . '.' . $request->photo->extension();
            dd($request->file('photo')->storeAs('products', $nameFile));

        }



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
