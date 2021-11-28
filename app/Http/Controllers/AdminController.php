<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\User;
use App\Models\Food;
use App\Models\Reservation;

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

    public function fooditems()
    {
        $fooditems = Food::all();
        return view('admin.fooditems', compact('fooditems'));   
    }
    

    public function deletefood($id)
    {
        
        $food = Food::find($id);
        $food->delete();
        return redirect()->back();
    }

    public function updatefood($id)
    {
        $fooditems = Food::find($id);
        return view('admin.updatefooditems', compact('fooditems'));   
    }

    public function updatefooditem(Request $request ,$id)
    {
        $food = Food::find($id);
        $image = $request->image;
        $data = $request->all();
        if($image){
            $imagename = time().'.'.$image->getClientOriginalExtension();
            $request->image->move('foodimages', $imagename);
            $data['image'] = $imagename;
        }   

        $food->update($data);
        return redirect()->back();
       
    }

    
}
