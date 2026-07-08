<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Order;
use App\Models\Register;
use App\Models\Order_detail;
use App\Models\Subscribe;
use App\Models\Product;

use App\Models\Cart;
use Illuminate\Support\Facades\Storage;

class OrderController extends Controller
{

 public function index()
    {
        $pages = Order::with('user')->get();   
        return view('admin.order.index', compact('pages'));  
    }

 public function edit($id)
    {
        $page = Order::findOrFail($id);
        return view('admin.order.edit', compact('page'));
    }
	public function orderplace(Request $request){

		$data = $request->all();

		$page = Order::orderBy('id', 'desc')
                 ->first();  
    if (!$page || empty($page->order_id)) {  
    $order_id = 1000;  
} else {
    $order_id = $page->order_id + 1;  
}


		$userid = session()->get('userid');

		$data['user_id'] = $userid;

		$data['order_id'] = $order_id;

		$data['transation_id']= rand('1111111', '9999999');

		$data['otp'] = rand(9999, 1111);;

		$data['date'] = date('Y-m-d');

		$data['payment_status'] = 'f';

		$data['order_status'] = 'f';

		Order::create($data);

		$cartlist = Cart::where('user_id', $userid)->get();

		foreach($cartlist as $row)
		{
			 $product = Product::where('id', $row['product_id'])->first();

			 
			$orderItem = new Order_detail();
			$orderItem->order_id = $order_id;
			$orderItem->user_id = $userid;
			$orderItem->product_id = $row['product_id'];
			$orderItem->qty = $row['qty'];
			$orderItem->price = $product->sale_price;
			$orderItem->save();


		}

		Cart::where('user_id', $userid)->delete();

		return response()->json(['message' => 'Order Place successfully.', 'success' => true]);

	}
    public function update(Request $request, $id)
{
     $page = Order::findOrFail($id);

     $data = $request->all();

     $page->update($data);

    return redirect()->route('admin.order.index')->with('success', 'Order updated successfully.');

 }
	public function userordersuccess(){

		if (!session()->has('userid')) {
        return redirect()->route('login')->with('success', 'Please Login First.');
        
    }
		$metatitle = '';
        $metakey = '';
        $metadesc = '';

        return view('user.ordersuccess', compact('metatitle','metakey','metadesc'));
	}

	public function userorderlist(){
		if (!session()->has('userid')) {
        return redirect()->route('login')->with('success', 'Please Login First.');
        
    }
		$metatitle = '';
        $metakey = '';
        $metadesc = '';
         $totalorder = Order::where('user_id', session()->get('userid'))->count();
          $orderlist = Order::where('user_id', session()->get('userid'))->get();
        return view('user.orderlist', compact('metatitle','metakey','metadesc','totalorder','orderlist'));
	}
 public function vieworder($id)
    {
    	if (!session()->has('userid')) {
        return redirect()->route('login')->with('success', 'Please Login First.');
        
    }
    $metatitle = '';
        $metakey = '';
        $metadesc = '';
        $order = Order::findOrFail($id);
        return view('user.singleorder', compact('metatitle','metakey','metadesc','order'));
    }
	public function updateCart(Request $request)
{
    // Validate the incoming request
    $request->validate([
        'id' => 'required|exists:carts,id',  // Ensure the cart item exists in the database
        'qty' => 'required|integer|min:1',  // Ensure the quantity is at least 1
    ]);

    // Find the cart item by ID
    $cartItem = Cart::find($request->id);

    if ($cartItem) {
        // Update the quantity
        $cartItem->qty = $request->qty;
        $cartItem->save();

        return response()->json([
            'success' => true,
            'message' => 'Quantity updated successfully.',
        ]);
    } else {
        return response()->json([
            'success' => false,
            'message' => 'Cart item not found.',
        ]);
    }
}

public function destroy($id)
{
    // Find the order by its ID
    $order = Order::find($id);
  
         
        Order_detail::where('order_id', $id->order_id)->delete();

     
        $order->delete();

        return redirect()->back()->with('success', 'Order Delete successfully.');
}
     
}
