<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Bill;
use App\BillDetail;
use App\User;
use Mail;
class OderController extends Controller
{
    public function oder(){
    	$oders = Bill::with('user')->paginate(10);
    	return view('admin.oders.list',compact('oders'));
    }

    public function getdetail($id){
    	$oders = Bill::find($id);
    	$data = BillDetail::with('product','bill')->where('id_bill',$id)->get();
        /*dd($data);*/
    	return view('admin.oders.detail',compact('oders','data'));
    	/*if($req->ajax()){
    		$oders =BillDetail::where('id_bill',$id)->get();
    		$html= view ('admin.components.oder',compact('oders'))->render();
    		return response()->json($html);
    	}*/
    }

    public function postdetail($id){
    	$oder = Bill::with('user')->find($id);
    	$oder->status = 1;
    	$oder->save();
        $email = $oder->user["email"];
        $checkUser= User::where('email',$email)->first();

        Mail::send('admin.email.sendMailOder', array('name'=>$oder->user["name"],'email'=>$oder->user["email"]),function($message) use($checkUser){
            $message->to($checkUser->email, 'Visitor')->subject('Comment successful!');
        });

    	return redirect(route('oder'))
      	->with(['flash_level'=>'result_msg','flash_massage'=>' Order has been confirmed successfully !']);
    }

    public function delete($id){
    	$oder = Bill::where('id',$id)->first();
    	if ($oder->status ==1) {
    		return redirect()->back()
    		->with(['flash_level'=>'result_msg','flash_massage'=>'Cannot cancel order number: '.$id.' vì đã được xác nhận!']);
    	} else {
    		$oder = Bill::find($id);
        	$oder->delete();
        	return redirect('admin/dondathang')
         	->with(['flash_level'=>'result_msg','flash_massage'=>'Canceled order number:  '.$id.' !']);
     	}
    }
}
