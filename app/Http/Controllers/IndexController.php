<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;
use App\Models\Product;
use Illuminate\Support\Str;
use DB;
use DateTime;
use Auth;
class IndexController extends Controller
{
    public function AuctionDetails($id)
    {
        //$categorys=Category::where('active',1)->get(); 
        $products=DB::table('products')->where('id',$id)->where('active',1)->first();            
        return view('frontend.details',compact('products'));
    }

    public function BidingUpdate(Request $request, $id){
        $check_price=DB::table('products')->where('id',$id)->where('active',1)->first();
        $product = Product::find($id);
        if($product){
            $product->bidding_amount = $request->bidding_amount;
            $product->user_id = auth()->user()->id;
            $product->status = 1;
            if($check_price->starting_bidding_amount < $request->bidding_amount && $check_price->bidding_amount < $request->bidding_amount){
                $done = $product->save();
                if ($done) {
                    $notification = array(
                        'message' => 'Bid Successfully Submited.',
                        'alert-type' => 'success'
                    );
                    return redirect()->back()->with($notification);
                }else{
                    $notification = array(
                        'message' => 'Bid Unuccessfully',
                        'alert-type' => 'danger'
                    );
                    return redirect()->back()->with($notification);
                }
            }else{
                $notification = array(
                    'message' => 'Bid Unuccessfully !! Please Try again !! Thank You.',
                    'alert-type' => 'error'
                );
                return redirect()->back()->with($notification);
            }
          
            
        }     

    }

    public function Profile(){
        $allbiding=DB::table('products')
        ->join('users','products.user_id','users.id')
        ->where('products.active',1)
        ->where('products.status',1)
        ->orWhere('products.status',2)
        ->select('products.*','users.name','users.email')
        ->get(); 
        return view('frontend.profile',compact('allbiding')); 
    }
}
