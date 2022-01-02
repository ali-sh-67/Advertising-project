@include('layouts.header')
<div style="margin-left:auto;margin-right:auto;height:auto;">
@foreach ($allfavs as $allfav)
    @foreach ($allads as $allad)
        @if ($allfav->ad_id==$allad->id)
            <div class="createShow">
                <div class="advert">
                    <span class="nameAdvert">کد آگهی: {{$allad->id}} تعداد افراد: {{$allfav->total}}</span>
                </div>
                <div class="img">
                    <img class="showImg" src="{{asset('images/' .$allad->image_url)}}">
                </div>

                <div class="title">
                    <span>عنوان: {{$allad->title}}</span>
                </div>
                <div class="description">
                    <span>توضیحات: {{$allad->description}}</span>
                </div>
                <div id="PriceTell">
                    <div class="price">
                        <span class="showPrice">قیمت: <span style="color:red;">{{$allad->price }} </span>تومان</span>
                    </div>
                    <div class="tell">
                        <span class="showTell">تلفن: {{$allad->phone_number_ads}} </span>
                    </div>
                </div>
                <div class="Address">
                    <span>آدرس: {{$allad->address }}</span>
                </div>
                <div class="comment">
                    <span class="comm_span">کامنت:</span>
                    <div class="comm_space">
                        @foreach($comms as $comm)
                            @if($comm->Ads_id == $allad->id)

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
                        <a class="comm_button_a" href="{{route('createComment',$allad->id)}}">کامنت بگذار!</a>
                    </button>
                    <div id="favorite">
                        @if (in_array($allad->id,$favs))
                            <form method="post" action="{{route('favoriteAd',['id'=>$allad->id])}}">
                                @csrf
                                <input type="hidden" name="favorite" value="favorite"/>
                                <a onclick="this.parentNode.submit();"><i class="fa fa-bookmark"></i></a>
                            </form>
                        @endif
                        @if(!in_array($allad->id,$favs))
                            <form method="post" action="{{route('favoriteAd',['id'=>$allad->id])}}">
                                @csrf
                                <input type="hidden" name="favorite" value="favorite"/>
                                <a onclick="this.parentNode.submit();"><i class="fa fa-bookmark-o"></i></a>
                            </form>
                        @endif
                    </div>
                </div>
            </div>
            </div>

        @endif
    @endforeach
@endforeach
@include('layouts.footer')
<div id="number">
    {{--        {{ $ads->links() }}--}}

</div>


</div>


