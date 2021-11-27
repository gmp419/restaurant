<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\User;
use App\Models\Food;

class AdminController extends Controller
{
    public function user()
    {
        $users = User::all();
        return view('admin.users', compact('users'));
    }

    public function deleteuser($id)
    {
        $users = User::find($id);
        $users->delete();
        return redirect()->back();
    }

    public function foodmenu()
    {
        return view('admin.foodmenu');
    }

    public function uploadfood(Request $request)
    {
        // $request->validate([
        //     'name' => 'required',
        //     'price' => 'required',
        //     'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        // ]);

        $data = new food;   
        $image = $request->image;
        $imagename = time().'.'.$image->getClientOriginalExtension();
        $request->image->move('foodimages', $imagename);
        $data->image = $imagename;
        $data->title = $request->title;
        $data->price = $request->price;
        $data->description = $request->description;
        $data->save();

        return redirect()->back();
    }

    
}
