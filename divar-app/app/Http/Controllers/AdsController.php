<?php

namespace App\Http\Controllers;
use App\Models\ad;
use App\Models\User;
use App\Models\category;
use App\Models\comment;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class AdsController extends Controller
{
    public function indexAd(Request $request)
    {  
        $users = DB::table('users')->get();              
        $id = Auth::user()->id;        
        $ads=DB::table('Ads')->orderBy('id','Desc')->paginate(5);
        $comms=comment::all();
        $unames=User::all(); 
        return view('Ad.pageAd',compact('ads','comms','users'));
    }

    public function myListAd(Request $request){                      
        $id = Auth::user()->id;        
        $ads=DB::table('Ads')->orderBy('id','Desc')->paginate(10);
        $count=DB::table('Ads')->orderBy('id','Desc')->count();
        return view('Ad.myListAd',compact('ads','count'));

    }

   public function createAd()
   {  
       return view('Ad.createAd'); 
   }

   public function storeAd(Request $request)
    {
        $newImageName =time() . '-' . $request->name . '.' . $request->image_url->extension();        
        $request->image_url->move(public_path('images'),$newImageName);

        $user = Auth::user()->id;
        $category = Auth::user()->id;
        
        $ad=new Ad([
            'user_id'=>$user,
            'category_id'=>$category,
            'title'=> $request->get('title'),
            'description'=>$request->get('description'),
            'image_url'=>$newImageName,
            'price'=>$request->get('price'),
            'address'=>$request->get('address'),
            'phone_number_ads'=> $request->get('phone_number_ads'),
        ]);
        
        
         if ($ad->save()) {            
            return redirect(route('indexAd'));          
        }
        // return; //422
    }

    public function deleteAd(Ad $id)   
    {    
        $id->delete();
        return redirect(route('indexAd'));
    }    
    public function showAd(Ad $id)
    {         
        $users = Auth::user()->name;             
        return view('Ad.showAd')->with(['id'=>$id]);   
    }

    public function editAd(Ad $id)
    {   
        $users = Auth::user()->name;  
        return view('Ad.editAd')->with(['id'=>$id])->with(['users'=>$users]);            
    }
    public function updateAd(Request $request, $id)
    {
        $todo = Ad::where('id', $id)->first();           
        $todo->title= $request->get('title');
        $todo->description= $request->get('description');
        $todo->price= $request->get('price');         

         $todo->save();                
         return redirect(route('indexAd'));   
    }   
    
    public function favoriteAd (Request $request, $id){
        $user=User::find(Auth::user()->id);
    //    $user->ads()->attach($ad,['favorite'=>'favorite']);
            $user->ads()->toggle([$id=>['favorite'=> 'favorite']]);
    //    $user->ads()->updateExistingPivot($id,['favorite'=> 'favorite']);
    
        $fav=User::find($user->id)->ads()->wherePivot('favorite','favorite')->get();
        $ads=ad::all();
    return view('Ad.pageAd',compact('fav','ads'));
    }
    
        public function showfavoriteAd (Request $request){
            $user=User::find(Auth::user()->id);
    //        $ad=ad::find($id)->id;
    //        $user->ads()->detach($ad,['favorite'=>'favorite']);
    //        $user->ads()->updateExistingPivot($id,['favorite'=> 'not']);
    
            $ads=User::find($user->id)->ads()->wherePivot('favorite','favorite')->get();
            return view('Ad.showfavorite',['ads' => $ads]);
        }

}
