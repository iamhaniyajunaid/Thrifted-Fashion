<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\User;
use App\Models\Order;
use App\Models\Feedback;

class AdminController extends Controller
{
    public function createProduct(Request $req)
    {
        $product = new product();
        $product->name = $req->name;
        $product->category = $req->category;
        $product->brand = $req->brand;
        $product->description = $req->description;
        $product->price = $req->price;
        $product->discount = $req->discount;
        $product->stock = $req->stock;
        $product->launch_date = $req->launch_date;
        if ($req->hasFile('image')) {
            $image = $req->file('image');
            $imageName = time() . '.' . $image->getClientOriginalExtension();
            $image->move(public_path('uploads/products'), $imageName);

            $product->image = $imageName;
        }
        $product->save();
        return redirect()->route('admin-product');
    }
    public function fetchProduct()
    {
        $products = product::all();
        return view('admin.products.index', compact('products'));
    }
    public function editProduct(Request $req)
    {
        $product = Product::find($req->id);
        if ($req->action == 'edit') {
            return view('admin.products.edit', compact('product'));
        }
        if ($req->action == 'update') {
            $product = Product::find($req->id);
            $product->name = $req->name;
            $product->category = $req->category;
            $product->brand = $req->brand;
            $product->description = $req->description;
            $product->price = $req->price;
            $product->discount = $req->discount;
            $product->stock = $req->stock;
            $product->launch_date = $req->launch_date;
            if ($req->hasFile('image')) {
                $image = $req->file('image');
                $imageName = time() . '.' . $image->getClientOriginalExtension();
                $image->move(public_path('uploads/products'), $imageName);

                $product->image = $imageName;
            }
            $product->save();
            return redirect()->route('admin-product');
        }
    }
    public function deleteProduct(Request $req)
    {
        $product = Product::find($req->id);
        $product->delete();
        return redirect()->route('admin-product');
    }
    public function fetchUser()
    {
        $users = User::all();
        return view('admin.users.index', compact('users'));
    }
    public function editUser(Request $req)
    {
        $user = User::find($req->id);
        if ($req->action == 'edit') {
            return view('admin.users.edit', compact('user'));
        }
        if ($req->action == 'update') {
            $user->name = $req->name;
            $user->email = $req->email;
            $user->phone = $req->phone;
            $user->role = $req->role;
            $user->save();
            return redirect()->route('admin-users');
        }
    }
    public function deleteUser(Request $req)
    {
        $user = User::find($req->id);
        $user->delete();
        return redirect()->route('admin-users');
    }
    public function fetchOrder()
    {
        $orders = Order::all();
        return view('admin.orders.index', compact('orders'));
    }
    public function editOrder(Request $req)
    {
        $order = Order::find($req->id);
        if ($req->action == 'edit') {
            return view('admin.orders.edit', compact('order'));
        }
        if ($req->action == 'update') {
            $order->name = $req->name;
            $order->email = $req->email;
            $order->phone = $req->phone;
            $order->address = $req->address;
            $order->payment_method = $req->payment_method;
            $order->total = $req->total;
            $order->order_status = $req->order_status;
            $order->save();
            return redirect()->route('admin-orders');
        }
    }
    public function deleteOrder(Request $req)
    {
        $order = Order::find($req->id);
        $order->delete();
        return redirect()->route('admin-orders');
    }
    public function feedback()
    {
        $feedback = Feedback::all();
        return view('admin.feedback.index', compact('feedback'));
    }
    public function editFeedback(Request $req)
    {
        $feedback = Feedback::find($req->id);
        if ($req->action == 'edit') {
            return view('admin.feedback.edit', compact('feedback'));
        }
        if ($req->action == 'update') {
            $feedback->rating = $req->rating;
            $feedback->message = $req->message;
            $feedback->save();
            return redirect()->route('admin-feedback');
        }
    }
    public function deleteFeedback(Request $req)
    {
        $feedback = Feedback::find($req->id);
        $feedback->delete();
        return redirect()->route('admin-feedback');
    }
}
