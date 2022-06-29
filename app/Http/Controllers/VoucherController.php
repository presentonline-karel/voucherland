<?php

namespace App\Http\Controllers;

use App\Models\Voucher;
use App\Models\Shop;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Repositories\VoucherRepository;

use Carbon\Carbon;



class VoucherController extends Controller
{
    /**
     * The task repository instance.
     *
     * @var VoucherRepository
     */
    protected $vouchers;

    /**
     * Create a new controller instance.
     *
     * @param  VoucherRepository  $vouchers
     * @return void
     */

    public function __construct(VoucherRepository $vouchers)
    {
        $this->middleware('auth');
        $this->vouchers = $vouchers;
    }



    public function index(Request $request)
    {
        $vouchers = Voucher::all();
        $shops = Shop::all();

        return view('website.vouchers', [
            'vouchers' => $vouchers,
            'shops' => $shops,
        ]);
    }



    public function detail(VoucherRepository $vouchers, Voucher $voucher)
    {
        $shop = Shop::where('id', $voucher->shop_id)->first();

        return view('website.voucher', [
            'voucher' => $voucher,
            'shop' => $shop,
        ]);
    }



    public function store(Request $request)
    {
        //instead of name put here all inputs of addVoucher
        $this->validate($request, [
            'name' => 'required|max:255',
        ]);

        $request->user()->vouchers()->create([
            'name' => $request->name,
        ]);

        return redirect('/vouchers');
    }
}
