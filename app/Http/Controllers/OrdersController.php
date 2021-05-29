<?php

namespace App\Http\Controllers;

use App\Order;
use Illuminate\Http\Request;

class OrdersController extends Controller
{
    public function index()
    {
        $orders = auth()->user()->orders()->with('products')->get(); // fix n + 1 issues
        return view('my-orders')->with('orders', $orders);
    }

    public function create()
    {
        //
    }

    public function store(Request $request)
    {
        //
    }

    // Exibe detalhes pedidos especifico
    public function show(Order $order)
    {
        if (auth()->id() !== $order->user_id) {
            return back()->withErrors('Você não tem acesso a isso!');
        }
        $products = $order->products;
        return view('my-order')->with([
            'order' => $order,
            'products' => $products,
        ]);
    }

    public function edit($id)
    {
        //
    }

    public function update(Request $request, $id)
    {
        //
    }

    public function destroy($id)
    {
        //
    }
}
