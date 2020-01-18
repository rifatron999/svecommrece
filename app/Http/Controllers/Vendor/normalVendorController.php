<?php

namespace App\Http\Controllers\Vendor;

use App\Brand;
use App\Category;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class normalVendorController extends Controller
{
    public function index()
    {
        return view('vendor.dashboard.index');
    }
//************************ page = category_management

    public function categoryManagementView()
    {
        $categories = Category::whereNull('parent_id')->paginate(6);
        $parent_id = NULL;
        return view('vendor.category_management.index',compact('categories','parent_id'));
    }

    public function categoryAdd(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'description' => 'required',
            'image' => 'image|mimes:jpeg,jpg,png,gif|max:2048'
        ]);
        $image = $request->file('image');
        if(!empty($image))
        {
        $image_name = time().'.'.$image->getClientOriginalExtension();
            $image->move('assets/vendor/images/categories/',$image_name);
            if($request->parent_id == "undefined")
        {
            Category::create([
                'name' => $request->name,
                'description' => $request->description,
                'status' => $request->status,
                'image' => $image_name,
            ]);
        }
        else
        {
            Category::create([
                'name' => $request->name,
                'description' => $request->description,
                'status' => $request->status,
                'image' => $image_name,
                'parent_id' => $request->parent_id,
            ]);
        }
        }
        else
            {
                if($request->parent_id == "undefined")
                {
                    Category::create([
                        'name' => $request->name,
                        'description' => $request->description,
                        'status' => $request->status,
                    ]);
                }
                else
                {
                    Category::create([
                        'name' => $request->name,
                        'description' => $request->description,
                        'status' => $request->status,
                        'parent_id' => $request->parent_id,
                    ]);
                }
            }

        return back()->with('msg','✔ Category Added');
    }
    public function categoryRemove($id)
    {
        $delete = Category::find($id);
        $delete->delete();
        if(!empty($delete->image)){unlink('assets/vendor/images/categories/'.$delete->image);}
        return redirect()->back()->with('msg',"✔ REMOVED");
    }

    public function subCategoryView($pid)
    {
        $categories = Category::where('parent_id',$pid)->paginate(10);
        $parent_id = $pid;
        return view('vendor.category_management.index',compact('categories','parent_id'));
    }
    public function categoryUpdate(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'description' => 'required',
            'image' => 'image|mimes:jpeg,jpg,png,gif|max:2048'
        ]);
        $image = $request->file('image');
        $update = Category::find($request->id);
        if(!empty($image))
        {

            unlink('assets/vendor/images/categories/'.$update->image);

            $image_name = time().'.'.$image->getClientOriginalExtension();
            $image->move('assets/vendor/images/categories/',$image_name);
            $update->update([
                    'name' => $request->name,
                    'description' => $request->description,
                    'status' => $request->status,
                    'image' => $image_name,
            ]);


        }
        else
        {
            $update->update([
                    'name' => $request->name,
                    'description' => $request->description,
                    'status' => $request->status,
            ]);


        }

        return back()->with('msg','✔ Category Updated');
    }


    //************************ page = category_management #
    //************************ page = brand_management
    public function brandManagementView()
    {
        $brands = Brand::where('vendor_id',Auth::user()->id)->paginate(6);
        return view('vendor.brand_management.index',compact('brands'));
    }
    public function brandAdd(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'description' => 'required|max:50',
            'image' => 'image|mimes:jpeg,jpg,png,gif|max:2048'
        ]);
        $image = $request->file('image');
        if(!empty($image))
        {
            $image_name = time().'.'.$image->getClientOriginalExtension();
            $image->move('assets/vendor/images/brands/',$image_name);

                Brand::create([
                    'vendor_id' => Auth::user()->id,
                    'name' => $request->name,
                    'description' => $request->description,
                    'status' => $request->status,
                    'image' => $image_name,
                ]);
        }
        else
        {
            Brand::create([
            'vendor_id' => Auth::user()->id,
            'name' => $request->name,
            'description' => $request->description,
            'status' => $request->status,
            ]);
        }

        return back()->with('msg','✔ Brand Added');
    }
    //************************ page = brand_management #
    //************************ page = product_management
    public function productManagementView()
    {
        return view('vendor.product_management.index');
    }
    //************************ page = product_management #
}
