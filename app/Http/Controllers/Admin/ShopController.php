<?php
//
//namespace App\Http\Controllers\Admin;
//
//use Illuminate\Http\Request;
//use App\Http\Controllers\Controller;
//use App\Repositories\ShopsRepositoryInterface;
//
//class ShopController extends Controller
//{
//    protected $shopRepository;
//
//    public function __construct(ShopsRepositoryInterface $shopsRepository)
//    {
//        $this->shopRepository = $shopsRepository;
//    }
//
//    public function index()
//    {
//        $shops = $this->shopRepository->gets();
//        return view('admin.shop.index',compact('shops',$shops));
//    }
//
//    public function create()
//    {
//        return view('admin.shop.create');
//    }
//
//    public function store(Request $request)
//    {
//        $data = $request->all();
//        $shop = $this->shopRepository->store($data);
//        if(empty($shop))
//        {
//            return redirect()->back();
//        }
//        return redirect()->action('Admin\ShopController@index')->with('mess','Thêm thành công');
//    }
//
//    public function show($id)
//    {
//        $shop = $this->shopRepository->show($id);
//        if(isset($shop))
//        {
//            return view('admin.shop.edit',[
//                'shop' => $shop
//            ]);
//        }
//        else return $this->index();
//    }
//
//    public function edit($id)
//    {
//        $shop = $this->shopRepository->show($id);
//        if(empty($shop))
//        {
//            abort(404);
//        }
//
//        return view('admin.shop.edit',compact('shop'));
//    }
//
//    public function update(Request $request, $id)
//    {
//        $shop = $this->shopRepository->update($request->all(),$id);
//        if(empty($shop))
//        {
//            abort(404);
//        }
//        return redirect('admin/shop')->with('mess','Sửa thành công');
//    }
//
//    public function destroy($id)
//    {
//        $shop = $this->shopRepository->destroy($id);
//        if(empty($shop))
//        {
//            abort(404);
//        }
//        return redirect('admin/shop')->with('mess','Xóa thành công');
//    }
//}
