<?php

namespace App\Http\Controllers\Admin;

use App\Http\Requests\ProductRequest;
use App\Http\Controllers\Controller;
use App\Repositories\ProductsRepositoryInterface;
use App\Repositories\CategoriesRepositoryInterface;

class ProductController extends Controller
{
    protected $productRepository;
    protected $categoryRepository;

    public function __construct(
        ProductsRepositoryInterface $productsRepository,
        CategoriesRepositoryInterface $categoriesRepository
    )
    {
        $this->productRepository = $productsRepository;
        $this->categoryRepository = $categoriesRepository;
    }

    public function index()
    {
        $products = $this->productRepository->gets();
        return view('admin.product.index',compact('products',$products));
    }

    public function create()
    {
        $product = $this->productRepository->getBlankModel();
        $categories = $this->categoryRepository->gets();
        return view('admin.product.create',[
            'product' => $product,
            'categories' => $categories
        ]);
    }

    public function store(ProductRequest $request)
    {
        $data = $request->all();
        $store = $this->productRepository->store($data);
        if(empty($store))
        {
            return redirect()->back();
        }
        return redirect()->action('Admin\ProductController@index')->with('mess','Thêm thành công');
    }

    public function show($id)
    {
        $categories = $this->categoryRepository->gets();
        $product = $this->productRepository->show($id);
        if(empty($product))
        {
            abort(404);
        }
        return view('admin.product.edit',[
            'product' => $product,
            'categories' => $categories
        ]);
    }

    public function edit($id)
    {
        $categories = $this->categoryRepository->gets();
        $product = $this->productRepository->show($id);
        if(empty($product))
        {
            abort(404);
        }
        return view('admin.product.edit',[
            'product' => $product,
            'categories' => $categories
        ]);
    }

    public function update(ProductRequest $request, $id)
    {
        $data = $request->all();
        $product = $this->productRepository->update($data,$id);
        if(empty($product))
        {
            abort(404);
        }
        return redirect('admin/product')->with('mess','Sửa thành công ');
    }

    public function destroy($id)
    {
        $product = $this->productRepository->destroy($id);
//        dd($product);
        if (empty($product)) {
            abort(404);
        }
        return redirect('admin/product')->with('mess','Xóa thành công');
    }
}
