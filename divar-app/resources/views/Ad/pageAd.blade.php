
@include('layouts.header')

<div class="content">
    <div class="sidebar">
        @include('category.index')
    </div>
    <div class="main">

        @foreach($ads as $ad)

            <div class="creat">
                <div class="advert">
                    <span class="nameAdvert">کد آگهی: {{$ad->id}} </span>
                </div>

                <div class="img">
                    <img class="showImg" src="{{asset('images/' .$ad->image_url)}}">
                </div>

                <div class="title">
                    <span>عنوان: {{$ad->title}}</span>
                </div>
                <div class="description">
                    <span>توضیحات: {{$ad->description}}</span>
                </div>
                <div id="PriceTell">
                    <div class="price">
                        <span class="showPrice">قیمت: <span style="color:red;">{{$ad->price }} </span>تومان</span>
                    </div>
                    <div class="tell">
                        <span class="showTell">تلفن: {{$ad->phone_number_ads}} </span>
                    </div>
                </div>
                <div class="Address">
                    <span>آدرس: {{$ad->address }}</span>
                </div>


                <div class="comment">
                    <span class="comm_span">کامنت:</span>
                    <div class="comm_space">

                        @foreach($comms as $comm)
                            @if($comm->Ads_id == $ad->id)

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
                        <a class="comm_button_a" href="{{route('createComment',$ad->id)}}">کامنت بگذار!</a>
                    </button>
                    <div id="favorite">
                        @if (in_array($ad->id,$favs))
                            <form method="post" action="{{route('favoriteAd',['id'=>$ad->id])}}">
                                @csrf
                                <input type="hidden" name="favorite" value="favorite"/>
                                <a onclick="this.parentNode.submit();"><i class="fa fa-bookmark"></i></a>
                            </form>
                        @endif
                        @if(!in_array($ad->id,$favs))
                            <form method="post" action="{{route('favoriteAd',['id'=>$ad->id])}}">
                                @csrf
                                <input type="hidden" name="favorite" value="favorite"/>
                                <a onclick="this.parentNode.submit();"><i class="fa fa-bookmark-o"></i></a>
                            </form>
                        @endif
                    </div>
                </div>
            </div>

        @endforeach
    </div>
    <div class="number">
        {{ $ads->links() }}
    </div>
</div>


@include('layouts.footer')
