<?php



namespace App\Http\Controllers\Admin;



use App\Category;

use App\Http\Controllers\Controller;

use App\Order;

use DemeterChain\C;
use Illuminate\Http\Request;



class CategoriesController extends Controller

{

    public function index()

    {

        $categories = Category::orderBy('main_category', 'asc')->paginate(20);

        return view('admin.categories.index', compact('categories'));

    }



    public function show(Category $category, Request $request)

    {

        $category->delete();

        return redirect()->back();

    }

    public function edit(Category $category, Request $request)
    {

        return view('admin.categories.edit', compact('category'));

    }

    public function update(Category $category, Request $request){
        $category->update($request->all());
        return redirect()->route('admin.categories.index');
    }



    public function create(){

        $category = new Category();
        $categories = Category::pluck('name', 'slug');
        return view('admin.categories.create', compact('category', 'categories'));

    }

    public function subCategory(Category $category){
        return view('admin.categories.create_sub', compact('category'));
    }



    public function store(Request $request){

        $data = $request->all();
        $data['slug'] = $request->name;
        if(!empty($request->main_category)){
            $data['main_category'] = $request->main_category;
        }
        Category::create($data);
        return redirect()->route('admin.categories.index');

    }

}

