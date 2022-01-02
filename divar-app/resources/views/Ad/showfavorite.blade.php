@include('layouts.header')

<div style="margin-left:auto;margin-right:auto;height:auto;">
    @foreach($favs as $fav)
        <div class="createShow">
            <div class="advert">
                <span class="nameAdvert">کد آگهی: {{$fav->id}} </span>
            </div>
            <div class="img">
                <img class="showImg" src="{{asset('images/' .$fav->image_url)}}">
            </div>

            <div class="title">
                <span>عنوان: {{$fav->title}}</span>
            </div>
            <div class="description">
                <span>توضیحات: {{$fav->description}}</span>
            </div>
            <div id="PriceTell">
                <div class="price">
                    <span class="showPrice">قیمت: <span style="color:red;">{{$fav->price }} </span>تومان</span>
                </div>
                <div class="tell">
                    <span class="showTell">تلفن: {{$fav->phone_number_ads}} </span>
                </div>
            </div>
            <div class="Address">
                <span>آدرس: {{$fav->address }}</span>
            </div>


            <div class="comment">
                <span class="comm_span">کامنت:</span>
                <div class="comm_space">

                    @foreach($comms as $comm)
                        @if($comm->Ads_id == $fav->id)

                            @foreach($users as $user)
                                @if(($user->id)%2==0)
                                    @if($comm->user_id == $user->id )
                                        <span class="comm_user" style="color:green;">{{$user->name}}:</span>
                                    @endif
                                @endif

                                @if(($user->id)%2==1)
                                    @if($comm->user_id == $user->id )
                                        <span class="comm_user" style="color:red;">{{$user->name}}:</span>
                                    @endif
                                @endif


                            @endforeach

                            {{$comm->description }}
                            <br>
                        @endif
                    @endforeach
                </div>
                <button class="comm_button">
                    <a class="comm_button_a" href="{{route('createComment',$fav->id)}}">کامنت بگذار!</a>
                </button>
                <div id="favorite">
                    @if (empty($fav->pivot))
                        <form method="post" action="{{route('favoriteAd',['id'=>$fav->id])}}">
                            @csrf
                            <input type="hidden" name="favorite" value="favorite"/>
                            <a onclick="this.parentNode.submit();"><i class="fa fa-bookmark-o"></i></a>
                        </form>
                    @endif
                    @if (!empty($fav->pivot))
                        <form method="post" action="{{route('favoriteAd',['id'=>$fav->id])}}">
                            @csrf
                            <input type="hidden" name="favorite" value="favorite"/>
                            <a onclick="this.parentNode.submit();"><i class="fa fa-bookmark"></i></a>
                        </form>
                    @endif
                </div>
            </div>
        </div>
    @endforeach


</div>
@include('layouts.footer')


</body>

</html>

























