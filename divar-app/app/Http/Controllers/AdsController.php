<?php

namespace App\Http\Controllers;

use App\Models\ad;
use App\Models\category;
use App\Models\comment;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class AdsController extends Controller
{
    public function indexAd(Request $request)
    {
        $users = DB::table('users')->get();
//        $id = Auth::user()->id;
        $ads = DB::table('Ads')->orderBy('id', 'Desc')->paginate(5);

        $comms = comment::all();
//        $unames = User::all();
        $favs = User::find(Auth::user()->id)->ads()->get()->pluck('pivot.ad_id')->toArray(); /*********ostad agar id ro nazaram kar nemikone va error mide********/
        return view('Ad.pageAd', compact('ads', 'comms', 'users', 'favs'));

    }

    public function myListAd(Request $request)
    {
        $online = Auth::user()->status;
        $ads = DB::table('Ads')->orderBy('id', 'Desc')->paginate(10);
        $Uads =DB::table('Ads')->orderBy('id', 'Desc')->where('user_id','=','3')->cursorpaginate(10);
        $count = DB::table('Ads')->orderBy('id', 'Desc')->count();
        return view('Ad.myListAd', compact('ads', 'count','Uads','online'));
    }

    public function createAd()
    {
        $cats = DB::table('categorys')->get();

        $categories = category::all();
        return view('Ad.createAd', compact('categories', 'cats'));

    }

    public function storeAd(Request $request)
    {
        $newImageName = time() . '-' . $request->name . '.' . $request->image_url->extension();
        $request->image_url->move(public_path('images'), $newImageName);


        $user = Auth::user()->id;
        $ad = new Ad([
            'user_id' => $user,
            'category_id' => $request->get('category_id'),

            'title' => $request->get('title'),
            'description' => $request->get('description'),
            'image_url' => $newImageName,
            'price' => $request->get('price'),
            'address' => $request->get('address'),
            'phone_number_ads' => $request->get('phone_number_ads'),

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
        $comms = comment::all();
        return view('Ad.showAd', compact('id', 'comms', 'users'));
    }

    public function editAd(Ad $id)
    {
        $cats = DB::table('categorys')->get();
        $idCats = category::where('id', $id->category_id)->first()->name;
        $users = Auth::user()->name;

        $categories = category::all();
        return view('Ad.editAd',compact('id','cats','users','idCats','categories'));


    }

    public function updateAd(Request $request, $id)
    {
        $todo = Ad::where('id', $id)->first();
        $todo->title = $request->get('title');
        $todo->category_id = $request->get('category');
        $todo->description = $request->get('description');

        $todo->address = $request->get('address');
        $todo->price = $request->get('price');
        $todo->phone_number_ads = $request->get('phone_number_ads');

        if ($request->has('image_url')) {
            $newImageName = time() . '-' . $request->name . '.' . $request->image_url->extension();
            $request->image_url->move(public_path('images'), $newImageName);
            $todo->image_url = $newImageName;
        }

        $todo->save();
        return redirect(route('indexAd'));
    }


    //////////////////////////////////////////////////////////////////////////////////////////

    public function favoriteAd(Request $request, $id)
    {
        $users = DB::table('users')->get();
        $user = User::find(Auth::user()->id);
        $user->ads()->toggle([$id => ['favorite' => 'favorite']]);
        $ads = DB::table('Ads')->orderBy('id', 'Desc')->paginate(5);
        $comms = comment::all();
        $favs = User::find(Auth::user()->id)->ads()->get()->pluck('pivot.ad_id')->toArray();
        return view('Ad.pageAd', compact('favs', 'ads', 'comms', 'users'));
    }

    //////////////////////////////////////////////////////////////////////////////////////////////

    public function showfavoriteAd(Request $request)
    {
        $users = DB::table('users')->get();
        $comms = comment::all();
        $favs = User::find(Auth::user()->id)->ads()->wherePivot('favorite', 'favorite')->get();
        return view('Ad.showfavorite',compact('favs','comms','users'));
    }

    ////////////////////////////////////////////////////////////////////////////////////////////

    public function categoryAds(Request $request, $id)
    {

        $users = DB::table('users')->get();
        $ads = DB::table('Ads')->where('category_id', $id)->orderBy('id', 'Desc')->paginate(5);
        $comms = comment::all();
//        $favs=User::find(Auth::user()->id)->ads()->get();
        $favs = User::find(Auth::user()->id)->ads()->get()->pluck('pivot.ad_id')->toArray();
        return view('Ad.pageAd', compact('ads', 'comms', 'users', 'favs'));
    }

    ////////////////////////////////////////////////////////////////////////////////////////////

    public function parentCategoryAds(Request $request, $id)
    {

        $users = DB::table('users')->get();
        $childs = category::find($id)->children->pluck('id')->toArray();
        $ads = DB::table('Ads')->whereIn('category_id', $childs)->orderBy('id', 'Desc')->paginate(5);
        $comms = comment::all();
        $favs = User::find(Auth::user()->id)->ads()->get()->pluck('pivot.ad_id')->toArray();
        return view('Ad.pageAd', compact('ads', 'comms', 'users', 'favs'));
    }

    //////////////////////////////////////////////////////////////////////////////////////////////
    public function allfavoriteAd(Request $request)
    {
        $favs = User::find(Auth::user()->id)->ads()->get()->pluck('pivot.ad_id')->toArray();
        $users = DB::table('users')->get();
        $comms = comment::all();
        $count = DB::table('ads')->groupBy('user_id')->selectRaw('*')->count();
        $allfavs = DB::table('user_ad')->groupBy('ad_id')->selectRaw('count(*) as total,ad_id')
            ->orderBy('total', 'desc')->get()->toArray();
        $allads = ad::all();
        return view('Ad/allfavoriteAd', compact('allfavs', 'allads','count','users','comms','favs'));
    }
   ///////////////////////////////////////////////////////////////////////////////////////////////
    public function search()
    {
        $users = DB::table('users')->get();
        $search=request('search');
        $ads=DB::table('ads')->orderBy('id', 'Desc')->where('title','like','%' .$search.'%')->orwhere('description','like','%' .$search.'%')->paginate(5);
        $comms = comment::all();
        $favs = User::find(Auth::user()->id)->ads()->get()->pluck('pivot.ad_id')->toArray();
        return view('Ad.pageAd', compact('ads', 'comms', 'favs','users'));
    }
}
