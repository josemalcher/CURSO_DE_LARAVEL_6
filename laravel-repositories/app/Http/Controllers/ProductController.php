<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreUpdateProductRequest;
use App\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    protected $request;
    private $repository;

    /**
     * ProductController constructor.
     * @param $request
     */
    public function __construct(Request $request, Product $product)
    {
        $this->request = $request;
        //$this->middleware('auth');
        //$this->middleware('auth')->only(['create', 'storage']);
        //$this->middleware('auth')->except(['index', 'show']);

        $this->repository = $product;
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
        $data = $request->only('name','description', 'price');

        //Product::create($data);
        $this->repository->create($data);

        return redirect()->route('products.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //$product = Product::where('id', $id)->first();
        if(!$product = $this->repository->find($id)){
            return redirect()->back();
        }

        return view('admin.pages.products.show',[
            'product' => $product
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        if(!$product = $this->repository->find($id)){
            return redirect()->back();
        }

        return view('admin.pages.products.edit', compact('product'));
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
        if(!$product = $this->repository->find($id)){
            return redirect()->back();
        }

        $product->update($request->all());
        return redirect()->route('products.index');
        //dd('editando produto {$id}');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $product = $this->repository->where('id', $id)->first();
        if (!$product) {
            return redirect()->back();
        }

        $product->delete();

        //dd("deletando o produto $id");
        return redirect()->route('products.index');
    }
}
