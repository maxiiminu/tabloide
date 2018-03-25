<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\View;

use App\Product as Product;
use Illuminate\Support\Facades\DB;

class QuitandaController extends Controller
{
	public function index()
	{
		return View::make('index');
	}

    public function list($category)
    {
    	return DB::table('product')->where('category', $category)->paginate(4);
    }

    public function populate()
    {
    	$_fp = fopen('/var/www/html/bd.csv', 'r+');

    	while (!feof($_fp)) {
    		$line = fgetcsv($_fp);

    		$product = new Product();
    		$product->name = $line[0];
    		$product->category = $line[1];
    		$product->price = $line[2];
    		$product->url = $line[3];
    		$product->save();
    	}
    }
}
