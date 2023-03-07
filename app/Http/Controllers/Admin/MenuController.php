<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Menu\CreateFormRequest;
use Illuminate\Http\Request;
use App\Http\Services\Menu\MenuService;
use App\Models\Menu;
use Illuminate\Http\JsonResponse;


class MenuController extends Controller
{
    protected $menuService;

    public function __construct(MenuService $menuService){
        $this->menuService = $menuService;
    }

    public function create() {
            return view('admin.menus.create',[
                'title' => 'Thêm danh muc',
                'menus' => $this->menuService->getParent()
            ]);
    }

    public function store(CreateFormRequest $request) {
        
         $this->menuService->create($request);
        return redirect()->back();
    }

    public function index(){
        return view('admin.menus.list',[
            'title' => 'Danh sach danh mục',
            'menus' => $this->menuService->getAll()
        ]);    
    }

    public function show(Menu $menu){
      
        return view('admin.menus.edit',[
            'title' => 'Chinh sua danh mục'.$menu->name,
            'menu' => $menu,
            'menus' => $this->menuService->getAll()
        ]); 
    }

    public function update(Menu $menu,CreateFormRequest $request){
        $this->menuService->update($request,$menu);

        return redirect('/admin/listmenus');
    }


    public function destroy(Request $request): JsonResponse
    {

        $result = $this->menuService->destroy($request);

        if($result){
            return response()->json([
                'error' =>false,
                'message' => 'Xóa thành công danh mục'
            ]);
        }

        return response()->json([
            'error'=>true
        ]);
    }
}
