<?php

namespace App\Http\Controllers;
use App\Models\Product;
use Illuminate\Http\Request;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\OrderController;
use App\Http\Requests\StoreOrderRequest;
use App\Models\Order;


class ProductController extends Controller
{

    public function show()
    {
        $products=Product::all();
        return view ('products',["products"=>$products]);
    }
    public function showInDetail(Product $product)
    {
        return view("detail",["product"=>$product]);
    }


    public function store(Request $request, Product $product)
    {
        $request->validate([
            'frontFirstName'=> 'max:250',
            'frontLastName' => 'max:250',
            'frontDateOfBirth' => 'max:250',
            'frontInitials'=> 'max:250',
            'backFirstName' => 'max:250',
            'backMiddleName' => 'max:250',
            'backLastName' => 'max:250',
            'backDateOfBirth' => 'max:250',
            'backWeight' => 'max:250',
            'backHeight' => 'max:250',
            'backTimeOfBirth' => 'max:250',
            'backParents' => 'max:250',
            'backOther' => 'max:250',
            'backParentsName' => 'max:250',
            'backAddress' => 'max:250',
            'backAdditionalWishes' => 'max:250',
        ]);
        $order = new Order;
        $order->frontFirstName = $request->frontFirstName;
        $order->frontLastName = $request->frontLastName;
        $order->frontDateOfBirth= $request->frontDateOfBirth;
        $order->frontInitials = $request->frontInitials;
        $order->backFirstName  = $request->backFirstName ;
        $order->backMiddleName= $request->backMiddleName;
        $order->backLastName= $request->backLastName;
        $order->backDateOfBirth = $request->backDateOfBirth;
        $order->backWeight= $request->backWeight;
        $order->backHeight = $request->backHeight;
        $order->backTimeOfBirth= $request->backTimeOfBirth ;
        $order->backParents= $request->backParents ;
        $order->backOther = $request->backOther ;
        $order->backParentsName = $request->backParentsName ;
        $order->backAddress= $request->backAddress ;
        $order->backAdditionalWishes = $request->backAdditionalWishes;
        $order->product_id = $product->id; // set the product id
        // $order->fill($request);
        $order->save(); // fill the order with validated data
        return view('orderOverview', ['order' => $order]);
    }
    }

