<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\user;
use App\Models\foods;
use App\Models\reservations;
use App\Models\chefs;
use App\Models\carts;

class AdminController extends Controller
{
   public function user(){
       $data=user::all();
       return view('admin.user',compact("data"));
   }
   

  public function adminreservation(){
       $data=reservations::all();
       return view('admin.adminreservation',compact("data"));
   }

   public function adminchef(){
    $data=chefs::all();
    return view('admin.adminchef',compact("data"));
}

   public function deletereservation($id){
    $data=reservations::find($id);
    $data->delete();
    return redirect()->back();
}
   public function deleteuser($id){
       $data=user::find($id);
       $data->delete();
       return redirect()->back();
   }


   public function foods(){
    $data=foods::all();
       return view ('admin.foods',compact("data"));
   }

   public function deletefood($id){
    $data=foods::find($id);
    $data->delete();
    return redirect()->back();
    }


    /* delete chef */
    public function deletechef($id){
        $data=chefs::find($id);
        $data->delete();
        return redirect()->back();
        }
/* upload chefs */




/* end upload chefs */
public function uploadchef(Request $request){
       
    $data = new chefs;
     
    $image=$request->image;
    $imagename=time().'.'.$image->getClientOriginalExtension();
    $request->image->move('chefimage',$imagename);
    
    /* fill the data blank record */
    $data->name=$request->name;
    $data->speciallist=$request->speciallist;
    $data->image=$imagename;

    /* save data mean insert */
    $data->save();
    return redirect()->back();


   }



/* update food  */
public function updatefood($id){
    $data=foods::find($id);
    return view('admin.updatefood',compact("data"));
}
/* end update */

   /* upload function */

   public function uploadfood(Request $request){
       
    $data = new foods;
     
    $image=$request->image;
    $imagename=time().'.'.$image->getClientOriginalExtension();
    $request->image->move('foodimage',$imagename);
    
    /* fill the data blank record */
    $data->title=$request->title;
    $data->desc=$request->desc;
    $data->price=$request->price;
    $data->image=$imagename;

    /* save data mean insert */
    $data->save();
    return redirect()->back();


   }


  /* start updae food */
  public function update(Request $request,$id){
    $data=foods::find($id);
   
     
    $image=$request->image;
    if($request->hasFile('image')){
    $imagename=time().'.'.$image->getClientOriginalExtension();
    $request->image->move('foodimage',$imagename);
    $data->image=$imagename;
    $data->title=$request->title;
    $data->desc=$request->desc;
    $data->price=$request->price;
    }
    else
    {
    /* fill the data blank record */
    $data->title=$request->title;
    $data->desc=$request->desc;
    $data->price=$request->price;
    $data->image=$request->image;
    }
       
  
  
   
 
    
    /* save data mean insert */
    $data->save();
    return redirect()->back();


   }
  
  

  /* end update food */


  /* reservation */
  public function reservation(Request $request){
       
    $data = new reservations;
     
   
    
    /* fill the data blank record */
    $data->name=$request->name;
    $data->email=$request->email;
    $data->phone=$request->phone;
    $data->guest=$request->guest;
    $data->date=$request->date;
    $data->time=$request->time;
    $data->message=$request->message;
    /* save data mean insert */
    $data->save();
    return redirect()->back();


   }


  /* end reservation */

}
