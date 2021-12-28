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
//        $favs=User::find(Auth::user()->id)->ads()->get();
        $favs=User::find(Auth::user()->id)->ads()->get()->pluck('pivot.ad_id')->toArray();
        return view('Ad.pageAd',compact('ads','comms','users','favs'));

    }

    public function myListAd(Request $request){
        $id = Auth::user()->id;
        $ads=DB::table('Ads')->orderBy('id','Desc')->paginate(10);
        $count=DB::table('Ads')->orderBy('id','Desc')->count();
        return view('Ad.myListAd',compact('ads','count'));
    }

   public function createAd()
   {
    $cats=DB::table('categorys')->get();

    $categories = category::all();
       return view('Ad.createAd',compact('categories', 'cats'));

   }

   public function storeAd(Request $request)
    {
        $newImageName =time() . '-' . $request->name . '.' . $request->image_url->extension();
        $request->image_url->move(public_path('images'),$newImageName);


        $user = Auth::user()->id;
        $ad=new Ad([
            'user_id'=>$user,
            'category_id'=>$request->get('category_id'),

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
        $users = DB::table('users')->get();
        $comms=comment::all();
        return view('Ad.showAd',compact('id','comms','users'));
    }

    public function editAd(Ad $id)
    {
        $cats=DB::table('categorys')->get();
        $idCats=category::where('id',$id->category_id)->first()->name;
        $users = Auth::user()->name;
        return view('Ad.editAd',compact('id','cats','users','idCats'));

    }

    public function updateAd(Request $request, $id)
    {
        $todo = Ad::where('id', $id)->first();
        $todo->title= $request->get('title');
        $todo->category_id= $request->get('category');
        $todo->description= $request->get('description');

        $todo->address= $request->get('address');
        $todo->price= $request->get('price');
        $todo->phone_number_ads= $request->get('phone_number_ads');

         if($request->has('image_url')) {
            $newImageName =time() . '-' . $request->name . '.' . $request->image_url->extension();
            $request->image_url->move(public_path('images'),$newImageName);
            $todo->image_url=$newImageName;
        }

        $todo->save();
        return redirect(route('indexAd'));
    }



    //////////////////////////////////////////////////////////////////////////////////////////

    public function favoriteAd (Request $request, $id){
        $user=User::find(Auth::user()->id);
    //    $user->ads()->attach($ad,['favorite'=>'favorite']);
            $user->ads()->toggle([$id=>['favorite'=> 'favorite']]);
    //    $user->ads()->updateExistingPivot($id,['favorite'=> 'favorite']);
        $ads=DB::table('Ads')->orderBy('id','Desc')->paginate(5);
        $comms=comment::all();
        // $fav=User::find($user->id)->ads()->wherePivot('favorite','favorite')->get();
//        $favs=User::find(Auth::user()->id)->ads()->wherePivot('favorite','favorite')->get();
        $favs=User::find(Auth::user()->id)->ads()->get()->pluck('pivot.ad_id')->toArray();
    return view('Ad.pageAd',compact('favs','ads','comms'));
    }
    //////////////////////////////////////////////////////////////////////////////////////////////

        public function showfavoriteAd (Request $request){
            // $user=User::find(Auth::user()->id);
    //        $ad=ad::find($id)->id;
    //        $user->ads()->detach($ad,['favorite'=>'favorite']);
    //        $user->ads()->updateExistingPivot($id,['favorite'=> 'not']);

            $favs=User::find(Auth::user()->id)->ads()->wherePivot('favorite','favorite')->get();
            return view('Ad.showfavorite',['favs' => $favs]);
        }
    ////////////////////////////////////////////////////////////////////////////////////////////

        public function categoryAds(Request $request, $id){

        $users = DB::table('users')->get();
        // $id = Auth::user()->id;
        $ads=DB::table('Ads')->where('category_id',$id)->orderBy('id','Desc')->paginate(5);
        // return $ads;
        $comms=comment::all();
        // $unames=User::all();
        $favs=User::find(Auth::user()->id)->ads()->get();
        return view('Ad.pageAd',compact('ads','comms','users','favs'));
        }
    //////////////////////////////////////////////////////////////////////////////////////////////
        public function allfavoriteAd(Request $request){
            $count=DB::table('ads')->selectRaw('*')->count();
            // return $count;
            // for ( $i=1; $i <=$count ; $i++ ){
            //    $allfavs=ad::find(1)->users()->count();
               $allfavs=DB::table('user_ad')->groupBy('ad_id')->selectRaw('count(*) as total,ad_id')
               ->orderBy('total','desc')->get();
               $allads=ad::all();
            //    foreach($allfavs as $allfav){
                //    echo $allfav->pivot->user_id;
                 return view('Ad/allfavoriteAd',compact('allfavs','allads'));
            // }
            // }

        }

}
