<?php

namespace App\Http\Controllers\Vendor;

use App\Brand;
use App\Category;
use App\Product;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Crypt;

class normalVendorController extends Controller
{
    public function index()
    {
        return view('vendor.dashboard.index');
    }
//************************ page = category_management

    public function categoryManagementView()
    {
        $categories = Category::whereNull('parent_id')->paginate(8);
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
            'description' => 'required|max:200',
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
    public function brandManagementEdit($id)
    {
        $bid = Crypt::decrypt($id);
        $brand = Brand::where('id',$bid)->first();
        return view('vendor.brand_management.edit',compact('brand'));
    }
    public function brandUpdate(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'description' => 'required',
            'image' => 'image|mimes:jpeg,jpg,png,gif|max:2048'
        ]);
        $image = $request->file('image');
        $update = Brand::find($request->id);
        if(!empty($image))
        {

            unlink('assets/vendor/images/brands/'.$update->image);

            $image_name = time().'.'.$image->getClientOriginalExtension();
            $image->move('assets/vendor/images/brands/',$image_name);
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

        return back()->with('msg','✔ Brand Updated');
    }
    public function brandRemove($id)
    {
        $bid = Crypt::decrypt($id);
        $delete = Brand::find($bid);
        $delete->delete();
        if(!empty($delete->image)){unlink('assets/vendor/images/brands/'.$delete->image);}
        return redirect()->back()->with('msg',"✔ REMOVED");
    }
    //************************ page = brand_management #
    //************************ page = product_management
    public function productManagementView()
    {
        $brands = Brand::where('vendor_id',Auth::user()->id)->get();
        $categories = Category::all();
        return view('vendor.product_management.index',compact('brands','categories'));
    }
    public function productAdd(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'category_id' => 'required',
            'brand_id' => 'required',
            'price' => 'required',
            'status' => 'required',
            'description' => 'required|max:200',
            'image' => 'image|mimes:jpeg,jpg,png,gif|max:2048'
        ]);
        /*$image = $request->file('image');
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
        }*/
       /* else
        {*/
            Product::create([
                'category_id' => $request->category_id,
                'brand_id' => $request->brand_id,
                'vendor_id' => Auth::user()->id,
                'name' => $request->name,
                'specification' => $request->specification,
                'description' => $request->description,
                'stock' => $request->stock,
               /* 'image' => $request->image,*/
                'price' => $request->price,
                'offer_price' => $request->offer_price,
                'offer_percentage' => $request->offer_percentage,
                'size_capacity' => $request->size_capacity,
                'model' => $request->model,
                'color' => $request->color,
                'status' => $request->status,
               /* 'slug' => $request->slug,*/
            ]);
       /* }*/

        return back()->with('msg','✔ Product Added');
    }
    //************************ page = product_management #
}
