<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;



class ProductController extends Controller
{
    public function index()
    {
        $result['data']=Product::all();
        return view('Admin.product',$result);
    }
    
    public function m()
    {
        
        return view('Admin.product');
    }
    
    public function product_details($id) {
        $data ['product_details'] = product::find($id);
        return view('Ekart.product_details', $data);

    }
    

    
    public function manage_product(Request $request,$id='')
    {
        if($id>0){
            $arr=Product::where(['id'=>$id])->get(); 

            $result['name']=$arr['0']->name;
            $result['image']=$arr['0']->image;
            $result['category']=$arr['0']->category;
            $result['short_desc']=$arr['0']->short_desc;
            $result['desc']=$arr['0']->desc;
            $result['keywords']=$arr['0']->keywords;
            $result['price']=$arr['0']->price;
            $result['id']=$arr['0']->id;
        }else{
            $result['name']='';
            $result['image']='';
            $result['category']='';
            $result['short_desc']='';
            $result['desc']='';
            $result['keywords']='';
            $result['price']='';
            $result['id']=0;
        }

        return view('Admin.manage_product',$result);
    }

    public function manage_product_process(Request $request)
    {
        //return $request->post();
        if($request->post('id')>0){
            $image_validation="mimes:jpeg,jpg,png";
        }else{
            $image_validation="required|mimes:jpeg,jpg,png";
        }
        $request->validate([
            'name'=>'required',
            'image'=>$image_validation,
        ]);

        if($request->post('id')>0){
            $model=Product::find($request->post('id'));
            $msg="Product updated";
        }else{
            $model=new Product();
            $msg="Product inserted";
        }

        if($request->hasfile('image')){
            $image=$request->file('image');
            $ext=$image->extension();
            $image_name=time().'.'.$ext;
            $image->storeAs('/public/media',$image_name);
            $model->image=$image_name;
        }

        $model->name=$request->post('name');
        $model->category=$request->post('category');
        $model->short_desc=$request->post('short_desc');
        $model->desc=$request->post('desc');
        $model->keywords=$request->post('keywords');
        $model->price=$request->post('price');
        $model->save();
        $request->session()->put('message',$msg);
        return redirect('admin/product');
        
    }

    public function delete(Request $request,$id){
        $model=Product::find($id);
        $model->delete();
        $request->session()->put('message','Product deleted');
        return redirect('admin/product');
    }

    public function status(Request $request,$status,$id){
        $model=Product::find($id);
        $model->status=$status;
        $model->save();
        $request->session()->put('message','Product status updated');
        return redirect('admin/product');
    }

    // for search bar function
    // getting search bar suggestions 
    public function product_list(){
        $products = Product::select('name')->get();
        $data = []; 
        foreach ($products as $item){
            $data[] = $item['name'];
        }
        return $data;
    }
    

    public function search(Request $request, $str){
        

    $result['product']=
    $query=DB::table('products');
    $query=$query->where('name','like',"%$str%");
    $query=$query->orwhere('short_desc','like',"%$str%");
    $query=$query->orwhere('keywords','like',"%$str%");
    $query=$query->distinct()->select('products.*');
    $query=$query->get();
    $result['product']=$query;

    return view('Ekart.search',$result);

    }
}