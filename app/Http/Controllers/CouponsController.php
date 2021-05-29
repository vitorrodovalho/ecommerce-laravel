<?php

namespace App\Http\Controllers;

use App\Coupon;
use App\Jobs\UpdateCoupon;
use Illuminate\Http\Request;

class CouponsController extends Controller
{
    // Cria um novo cupom de desconto
    public function store(Request $request)
    {
        $coupon = Coupon::where('code', $request->coupon_code)->first();
        if (!$coupon) {
            return back()->withErrors('Código de cupom inválido. Por favor, tente novamente.');
        }
        dispatch_now(new UpdateCoupon($coupon));
        return back()->with('success_message', 'O cupom foi aplicado!');
    }

    // Remove um cupom especifico
    public function destroy()
    {
        session()->forget('coupon');
        return back()->with('success_message', 'O cupom foi removido.');
    }
}
