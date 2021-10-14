<?php

namespace App\Http\Controllers;

use App\Jobs\SendEmailOrder;
use App\Models\Order;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {

    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('home');
    }

    public function order(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'name' => 'required|max:22',
            'email' => 'required|email:rfc,dns|max:50',
            'mobile' => 'required|numeric|digits:10',
            'address' => 'required|max:255'
        ],[
            'name.required' => 'Xin vui lòng điền tên của bạn',
            'name.max' => 'Tên tối đa 22 ký tự',
            'email.required' => 'Xin vui lòng điền email của bạn',
            'email.email' => 'Email không hợp lệ',
            'email.max' => 'Email tối đa 50 ký tự',
            'mobile.required' => 'Vui lòng điền số điện thoại của bạn',
            'mobile.numeric' => 'Số điện thoại không hợp lệ',
            'mobile.digits' => 'Số điện thoại không hợp lệ',
            'address.required' => 'Vui lòng điền địa chỉ của bạn',
            'address.max' => 'Địa chỉ không hợp lệ',
        ]);

        if ($validator->fails()) {
            return redirect()->back()
                ->withErrors($validator)
                ->withInput();
        }

        $order = new Order();
        $order->fill($request->all());
        $order->code_tag = $this->generateRandomString();
        $order->save();
        SendEmailOrder::dispatch($order);
        return redirect('/thanh-toan-thanh-cong')->with('order', $order);
    }

    public function generateRandomString($length = 6) {
        $characters = '0123456789abcdefghijklmnopqrstuvwxyz';
        $charactersLength = strlen($characters);
        $randomString = '';
        for ($i = 0; $i < $length; $i++) {
            $randomString .= $characters[rand(0, $charactersLength - 1)];
        }
        return $randomString;
    }
}
