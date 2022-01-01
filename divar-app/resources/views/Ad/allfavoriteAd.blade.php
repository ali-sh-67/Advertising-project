
@include('layouts.header')



        @foreach ($allfavs as $allfav)
            @foreach ($allads as $allad)
                @if ($allfav->ad_id==$allad->id)
{{--                    {{$allad->id}}--}}
{{--                    {{$allad->title}}--}}


            <div class="createShowFavorid"  >
                <div class="advert" >
                    <span class="nameAdvert">کد آگهی: {{$allad->id}} تعداد افراد: {{$allfav->total}}</span>
                </div>
                <div class="img" >
                    <img class="showImgFavorid"  src="{{asset('images/' .$allad->image_url)}}">
                </div>

                <div class="title" >
                    <span >عنوان: {{$allad->title}}</span>
                </div>
                <div class="description">
                    <span >توضیحات: {{$allad->description}}</span>
                </div>
                <div id="PriceTell">
                    <div class="price" >
                        <span class="showPrice" >قیمت: <span style="color:red;">{{$allad->price }} </span>تومان</span>
                        <div class="tell">
                            <span class="showTell">تلفن: {{$allad->phone_number_ads}} </span>
                        </div>
                    </div>    
                </div>
                <div class="Address" >
                    <span >آدرس: {{$allad->address }}</span>
                </div>

                <div class="comment"  >
                    <span class="comm_span">کامنت:</span>
                    <div class="comm_space">
    
                    </div>
                </div>
               

            </div>
            

       

{{--                    <div id="com_div">--}}
{{--                        @if (empty($fav->pivot))--}}
{{--                            <form method="post" action="{{route('favoriteAd',['id'=>$ad->id])}}">--}}
{{--                                @csrf--}}
{{--                                <input type="hidden" name="favorite" value="favorite" />--}}
{{--                                <a onclick="this.parentNode.submit();"><i class="fa fa-bookmark-o" style="font-size:48px;color:red"></i></a>--}}
{{--                            </form>--}}
{{--                        @endif--}}
{{--                        @if (!empty($fav->pivot))--}}
{{--                            <form method="post" action="{{route('favoriteAd',['id'=>$fav->id])}}">--}}
{{--                                @csrf--}}
{{--                                <input type="hidden" name="favorite" value="favorite" />--}}
{{--                                <a onclick="this.parentNode.submit();"><i class="fa fa-bookmark" style="font-size:48px;color:red"></i></a>--}}
{{--                            </form>--}}
{{--                        @endif--}}
{{--                    </div>--}}
{{--                    <div id="com_div">--}}
{{--                        <a href="{{route('createComment',$fav->id)}}" class="button"><span>کامنت بگذار!</span></a>--}}
{{--                    </div>--}}
{{--                </div>--}}


            </div>

                @endif
                @endforeach
                @endforeach
                @include('layouts.footer')
        <div id="number">
            {{--        {{ $ads->links() }}--}}
     
        </div>
    

    </div>
    

