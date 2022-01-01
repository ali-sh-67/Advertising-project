@include('layouts.header')

<div style="margin-left:auto;margin-right:auto;height:auto;">
@foreach($favs as $fav)
<div class="createShowFavorid"  >
  <div class="advert" >
    <span class="nameAdvert">کد آگهی: {{$fav->id}} </span>
  </div>
  <div class="img" >
    <img class="showImgFavorid"  src="{{asset('images/' .$fav->image_url)}}">
  </div>

  <div class="title" >
    <span >عنوان: {{$fav->title}}</span>
  </div>
  <div class="description">
    <span >توضیحات: {{$fav->description}}</span>
  </div>
  <div id="PriceTell">
    <div class="price" >
      <span class="showPrice" >قیمت: <span style="color:red;">{{$fav->price }} </span>تومان</span>
      <div class="tell">
        <span class="showTell">تلفن: {{$fav->phone_number_ads}} </span>
      </div>                

    </div>           
    
    
  
  </div>
  <div class="Address" >
    <span >آدرس: {{$fav->address }}</span>
  </div>


  <div class="comment"  >
    <span class="comm_span">کامنت:</span>
    <div class="comm_space">
   
    </div>
    
                    <div id="com_div">
                        @if (empty($fav->pivot))
                            <form method="post" action="{{route('favoriteAd',['id'=>$fav->id])}}">
                                @csrf
                                <input type="hidden" name="favorite" value="favorite" />
                                <a onclick="this.parentNode.submit();"><i class="fa fa-bookmark-o" style="font-size:48px;color:red;margin-right:51px;margin-top:17px"></i></a>
                            </form>
                        @endif
                        @if (!empty($fav->pivot))
                        <form method="post" action="{{route('favoriteAd',['id'=>$fav->id])}}">
                            @csrf
                            <input type="hidden" name="favorite" value="favorite" />
                            <a onclick="this.parentNode.submit();"><i class="fa fa-bookmark" style="font-size:48px;color:red;margin-right:51px;margin-top:17px"></i></a>
                        </form>
                        @endif
                    </div>


                <button class="comm_buttonFavorid">
                    <a class="comm_button_a" href="{{route('createComment',$fav->id)}}">کامنت بگذار!</a>
                </button>


                    


              



</div>
</div> 
@endforeach


                  


</div>
@include('layouts.footer')  
    
    
  
  
 


</body>

</html>                  
               
           


       

    




      













