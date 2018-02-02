<?php

namespace App\Http\Controllers\Admin;

//use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Repositories\CategoriesRepositoryInterface;
use App\Http\Requests\CategoryRequest;

class CategoryController extends Controller
{
    protected $categoryRepository;

    public function __construct(CategoriesRepositoryInterface $categoryRepository)
    {
        $this->categoryRepository = $categoryRepository;
    }
    public function index()
    {
        $data = $this->categoryRepository->selectToArray();
        return view('admin.category.index',compact('data',$data));
    }
    public function create()
    {
        // đưa biến data lên view create để có thể tải được các thẻ category, phục vụ mục đích
        // chọn thẻ cha cho các thẻ con
        $data = $this->categoryRepository->selectToArray();
        return view('admin.category.create',[
            'data' => $data
        ]);
    }
    public function store(CategoryRequest $request)
    {
        $data = $request->all();
        if(empty($data))
        {
            return redirect()->back();
        }
        $category = $this->categoryRepository->store($data);
        if(empty($category))
        {
            abort(404);
        }
        return redirect('admin/category')->with('mess','Thêm thành công');
    }
    public function edit($id)
    {
        $category = $this->categoryRepository->show($id);
        $data = $category->toArray();
        $parent = $this->categoryRepository->selectToArray();
        if(isset($category))
        {
            return view('admin.category.edit',[
                'parent' => $parent,
                'category' => $category,
                'data'=> $data

            ]);
        }
        else return redirect()->back();
    }
    public function update(CategoryRequest $request, $id)
    {
        $category = $this->categoryRepository->update($request->all(),$id);
        if(empty($category))
        {
            abort(404);
        }
        return redirect('admin/category')->with('mess','Sửa thành công');
    }
    public function destroy($id)
    {
        $category = $this->categoryRepository->destroy($id);
        if(empty($category))
        {
            abort(404);
        }
        return redirect('category')->with('mess','Xóa thành công');
    }
}
