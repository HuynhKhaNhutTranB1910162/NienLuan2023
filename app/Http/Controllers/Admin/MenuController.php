<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Menu\CreateFormRequest;
use Illuminate\Http\Request;
use App\Http\Services\Menu\MenuService;

class MenuController extends Controller
{
    protected $menuService;

    public function __construct(MenuService $menuService){
        $this->menuService = $menuService;
    }

    public function create() {
            return view('admin.menus.create',[
                'title' => 'Them danh muc',
                'menus' => $this->menuService->getParent()
            ]);
    }

    public function store(CreateFormRequest $request) {
        
         $this->menuService->create($request);
        return redirect()->back();
    }

    public function index(){
        return view('admin.menus.list',[
            'title' => 'Danh sach danh muc',
            'menus' => $this->menuService->getAll()
        ]);    
    }
}
