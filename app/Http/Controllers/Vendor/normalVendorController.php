<?php

namespace App\Http\Controllers\Vendor;

use App\Brand;
use App\Category;
use App\Offer;
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
        $products = Product::where('vendor_id',Auth::user()->id)->paginate(8);
        $categories = Category::where('status','Active')->get();

        return view('vendor.product_management.index',compact('brands','categories','products'));
    }
    public function productAdd(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'category_id' => 'required',
            'brand_id' => 'required',
            'price' => 'required',
            'status' => 'required',
            'description' => 'required|max:10000',
            'specification' => 'max:100000',
            'image' => 'required',
            'image.*' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048'
        ]);


        $image = $request->file('image');
        if(!empty($image))
        {
            foreach ($image as $files)
            {
            $image_name = uniqid().'.'.$files->getClientOriginalExtension();
            $files->move('assets/vendor/images/products/',$image_name);
            $insert[]['image'] = "$image_name";
            }
            $imageEncode = json_encode($insert);


            Product::create([
                'category_id' => $request->category_id,
                'brand_id' => $request->brand_id,
                'vendor_id' => Auth::user()->id,
                'name' => $request->name,
                'specification' => $request->specification,
                'description' => $request->description,
                'stock' => $request->stock,
                 'image' => $imageEncode,
                'price' => $request->price,
                'offer_price' => $request->offer_price,
                'offer_percentage' => $request->offer_percentage,
                'size_capacity' => $request->size_capacity,
                'model' => $request->model,
                'color' => $request->color,
                'status' => $request->status,

            ]);
        }
        else
        {
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
        }

        return back()->with('msg','✔ Product Added');
    }
    public function productManagementEdit($id)
    {
        $pid = Crypt::decrypt($id);
        $product = Product::where('id',$pid)->first();
        $imgarray = json_decode($product->image);
        $brands = Brand::where('vendor_id',Auth::user()->id)->get();
        $categories = Category::where('status','Active')->get();
        return view('vendor.product_management.edit',compact('product','imgarray','brands','categories'));
    }
    public function productUpdate(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'category_id' => 'required',
            'brand_id' => 'required',
            'price' => 'required',
            'status' => 'required',
            'description' => 'required|max:10000',
            'specification' => 'max:100000',
            'image.*' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048'
        ]);
        $image = $request->file('image');
        $update = Product::find($request->id);

        if(!empty($image))
        {
            $imgarray = json_decode($update->image);
            foreach ($imgarray as $s)
            {
                unlink('assets/vendor/images/products/'.$s->image);
            }
            foreach ($image as $files)
            {

                $image_name = uniqid().'.'.$files->getClientOriginalExtension();
                $files->move('assets/vendor/images/products/',$image_name);
                $insert[]['image'] = "$image_name";
            }
            $imageEncode = json_encode($insert);

            $update->update([
                'category_id' => $request->category_id,
                'brand_id' => $request->brand_id,
                'name' => $request->name,
                'specification' => $request->specification,
                'description' => $request->description,
                'stock' => $request->stock,
                'image' => $imageEncode,
                'price' => $request->price,
                'offer_price' => $request->offer_price,
                'offer_percentage' => $request->offer_percentage,
                'size_capacity' => $request->size_capacity,
                'model' => $request->model,
                'color' => $request->color,
                'status' => $request->status,
            ]);
        }
        else
        {
            $update->update([
                'category_id' => $request->category_id,
                'brand_id' => $request->brand_id,
                'name' => $request->name,
                'specification' => $request->specification,
                'description' => $request->description,
                'stock' => $request->stock,
                'price' => $request->price,
                'offer_price' => $request->offer_price,
                'offer_percentage' => $request->offer_percentage,
                'size_capacity' => $request->size_capacity,
                'model' => $request->model,
                'color' => $request->color,
                'status' => $request->status,
            ]);
        }
        return back()->with('msg','✔ Product Updated');
    }
    //************************ page = product_management #
    //************************ page = offer_management
    public function offerManagementView()
    {
        $products = Product::where('vendor_id',Auth::user()->id)->whereNull('offer_id')->where('status','!=','Disable')->orderBy('category_id','ASC')->get();
        $allProducts = Product::where('vendor_id',Auth::user()->id)->where('status','!=','Disable')->orderBy('category_id','ASC')->get();
        $categories = Category::where('status','Active')->get();
        $offers = Offer::paginate(8);
        return view('vendor.offer_management.index',compact('categories','products','allProducts','offers'));
    }
    public function offerAdd(Request $request)
    {
        $request->validate([
            'title' => 'required',
            'product_ids' => 'required',
            'image' => 'image|mimes:jpeg,jpg,png,gif|max:2048'
        ]);
        foreach ($request->product_ids as $s)
        {
            $insert[]['id'] = $s;
        }
        $product_ids = json_encode($insert);
        if($request->type == 'Buy one get one')
        {
            foreach ($request->free_product_ids as $s)
            {
                $insert2[]['id'] = $s;
            }
            $free_product_ids = json_encode($insert2);
        }
        else
            {
                $free_product_ids = '';
            }

        $image = $request->file('image');
        if(!empty($image))
        {
            $image_name = time().'.'.$image->getClientOriginalExtension();
            $image->move('assets/vendor/images/offers/',$image_name);


          $offer =  Offer::create([
                'title' => $request->title,
                'image' => $image_name,
                'type' => $request->type,
                'status' => $request->status,
                'enddate' => $request->enddate,
                'offer_percentage' => $request->offer_percentage,
                'product_ids' => $product_ids,
                'free_product_ids' => $free_product_ids,
            ]);
        }
        else
        {
            $offer =  Offer::create([
                'title' => $request->title,
                'type' => $request->type,
                'status' => $request->status,
                'enddate' => $request->enddate,
                'offer_percentage' => $request->offer_percentage,
                'product_ids' => $product_ids,
                'free_product_ids' => $free_product_ids,
            ]);
        }
//for product table update
        foreach ($request->product_ids as $s)
        {
            $update = Product::find($s);
            if($request->type == 'Discount')
            {
                $offer_price = $update->price - ($update->price*$request->offer_percentage)/100;
                $update->update([
                    'offer_id' => $offer->id,
                    'offer_price' => $offer_price,
                ]);
            }
            elseif ($request->type == 'Buy one get one')
            {
                $update->update([
                    'offer_id' => $offer->id,
                ]);
            }
        }
        return back()->with('msg','✔ Offer Added');
    }
    public function offerManagementEdit($id)
    {
        $oid = Crypt::decrypt($id);
        $offer = Offer::where('id',$oid)->first();
        $categories = Category::where('status','Active')->get();
        $products = Product::where('vendor_id',Auth::user()->id)->where('status','!=','Disable')->orderBy('category_id','ASC')->get();
        return view('vendor.offer_management.edit',compact('offer','categories','products'));
    }
    //************************ page = offer_management #
}
