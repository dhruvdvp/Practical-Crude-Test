<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Store;
use Image;
class CrudController extends Controller
{
    public function adddetails(Request $request){
        if($request->isMethod('post')){
            $data=$request->all();
            $store=new Store;
            // echo '<pre>'; print_r($data); die;
            $store->name=$data['name'];
            $store->number=$data['num'];
            $store->about=$data['about'];
            $store->pan=$data['pnum'];
            $store->gst=$data['gnum'];
            $store->password=$data['pass'];
            if($request->hasFile('image')){
                $image_tmp=$request->file('image');
                if($image_tmp->isValid()){
                    $extention=$image_tmp->getClientOriginalExtension();
                    $filename=rand(111,9999).'.'.$extention;
                    $filepath='images/'.$filename;
                    //Upload the image
                    Image::make($image_tmp)->resize(600, 600)->save($filepath);
                    $store->image=$filename;
                }
            }
            $store->save();
            return redirect('display');
        }

        return view('adddetails');
    }

public function display(Request $request){
    $stores=Store::all();
    return view('display')->with(compact('stores'));
}

public function edit(Request $request, $id=null){
    $storeDetails=Store::where(['id'=>$id])->first();
    if($request->isMethod('post')){
        $data=$request->all();


        if($request->hasFile('image')){
            $image_tmp=$request->file('image');
            if($image_tmp->isValid()){
                $extention=$image_tmp->getClientOriginalExtension();
                $filename=rand(111,9999).'.'.$extention;
                $filepath='images/'.$filename;
                //Upload the image
                Image::make($image_tmp)->resize(600, 600)->save($filepath);
              
            }
        }else{
            $filename=$data['current_image'];
        }
        Store::where(['id'=>$id])->update(['name'=>$data['name'],
            'number'=>$data['num'],'about'=>$data['about'],
            'pan'=>$data['pnum'],'gst'=>$data['gnum'],'image'=>$filename]);
            return redirect('display');
    }
    return view('edit')->with(compact('storeDetails'));

}
public function delete($id=null){
    if(!empty($id)){
        Store::where(['id'=>$id])->delete();
        return redirect('display');
    }
}
}
