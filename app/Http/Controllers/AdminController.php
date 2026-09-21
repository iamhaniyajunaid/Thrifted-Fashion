<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\User;
use App\Models\Review;
use App\Models\Order;
use App\Models\Feedback;

class AdminController extends Controller
{
    public function dashboard()
    {
        $revenue = Order::where('order_status', 'completed')->sum('total');
        $orders = Order::count();
        $customers = User::where('role', 'user')->count();
        $tickets = Feedback::count();
        $urgentTickets = Feedback::where('rating', '<=', 2)->count();
        // Last 6 months reprt
        $monthlyRevenue = Order::where('order_status', 'completed')->where('created_at', '>=', now()->subMonths(5)->startOfMonth())->selectRaw('MONTH(created_at) as month, YEAR(created_at) as year, SUM(total) as revenue')->groupBy('year', 'month')->orderBy('year')->orderBy('month')->get();
        $recentOrders = Order::latest()->take(5)->get();
        return view('admin.dashboard', compact('revenue', 'orders', 'customers', 'tickets', 'urgentTickets', 'monthlyRevenue', 'recentOrders'));
    }
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
        $productPageTotal = Product::count();
        $products = product::all();
        $productPageTotal = Product::count();
        $productPageInStock = Product::where('stock', '>', 0)->count();
        $productPageLowStock = Product::where('stock', '>', 0)->where('stock', '<=', 10)->count();
        $productPageOutOfStock = Product::where('stock', '<=', 0)->count();
        return view('admin.products.index', compact('products', 'productPageTotal', 'productPageInStock', 'productPageLowStock', 'productPageOutOfStock'));
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
        $userPageTotal = User::count();
        $userPageCustomers = User::where('role', 'user')->count();
        $userPageAdmins = User::where('role', 'admin')->count();
        $userPageNewThisMonth = User::whereMonth('created_at', now()->month)->whereYear('created_at', now()->year)->count();
        return view('admin.users.index', compact('users', 'userPageTotal', 'userPageCustomers', 'userPageAdmins', 'userPageNewThisMonth'));
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
    public function reviews()
    {
        $reviews = Review::latest()->paginate(10);
        return view('admin.reviews.reviews', compact('reviews'));
    }
    public function approveReviews($id)
    {
        $review = Review::find($id);
        $review->is_approved = true;
        $review->save();
        return back();
    }
    public function deleteReviews($id)
    {
        $review = Review::find($id);
        $review->delete();
        return back();
    }
}
