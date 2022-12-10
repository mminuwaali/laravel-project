<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Product;
use App\Models\Subscribe;
use Illuminate\Http\Request;
use Mockery\Matcher\Any;
use Nette\Utils\Strings;

class Dumy
{
    public $name = 'product name';
    public $description = 'product name';
    public $image = 'images/authentication.jpg';
};

class MainController extends Controller
{
    public function index()
    {
        $per_page = 12;
        $products = Product::latest()->paginate($per_page);
        return view('page.index', compact('products'))->with('i', (request()->input('page', 1) - 1) * 12);
    }


    public function category($category)
    {
        $categories = Category::all();
        $products = $category == 'all' ? Product::latest()->paginate(12) : Category::find($category)->latest()->paginate(12);
        // $products =   Product::latest()->paginate(12);
        return view('page.category', compact('categories', 'products'))->with('i', (request()->input('page', 1) - 1) * 12);
    }


    public function about()
    {
        return view('page.about');
    }


    public function product($product)
    {
        // $product = Product::find($product);
        $product = new Dumy();
        return view('page.product', compact('product'));
    }


    public function contact()
    {
        return view('page.contact');
    }

    public function subscribe(Request $request)
    {
        $request->validate(['email' => 'required|email']);

        Subscribe::firstOrCreate(['email' => $request->email]);
        return redirect()->back()->with('status', ['type' => 'green', 'message' => 'subscribed successfully']);
    }
}
