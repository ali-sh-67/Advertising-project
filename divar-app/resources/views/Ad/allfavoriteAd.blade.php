<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <!DOCTYPE html>
    <html lang="en">
    <head>

        <meta charset="UTF-8">
        <title>all_favorites</title>
        <script src="js/jquery-3.4.1.min.js"></script>
        <link rel="stylesheet" type="text/css" href="{{ asset('/css/style.css') }}">
        <link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.0.0-alpha/css/bootstrap.css" rel="stylesheet">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    </head>

    <body class="body">


    <header class="header">
        <div id="myheader">
            <div id="header_right">
                <div id="header_right_top">
                    <span id="lock"></span>
                    <a class="yekan login" href="">ورود</a>
                    <span id="register"></span>
                    <a class="yekan reg" href=""> ثبت نام کنید </a>
                </div>


                <div id="header_right_bottom">
                    <div id="search_top">
                        <input class="yekan input" type="text" placeholder="محصول ، دسته یا برند مورد نظر خود را جستجو کنید ... "/>
                        <span id="search_pic"></span>
                    </div>


                </div>

            </div>

        </div>

    </header>
    <nav id="nav"></nav>
    <div id="main">
@json($allfavs)<br>
        @json($count)
        @foreach ($allfavs as $allfav)
            @foreach ($allads as $allad)
                @if ($allfav->ad_id==$allad->id)
{{--                    {{$allad->id}}--}}
{{--                    {{$allad->title}}--}}

            <div id="create">
                <div id="advert">
                    <span id="nameAdvert">کد آگهی: {{$allad->id}} تعداد افراد: {{$allfav->total}}</span>
                </div>

                <div id="img">
{{--                    <img id="showImg" src="{{asset('images/' .$alladd->image_url)}}">--}}
                </div>

                <div id="title">
                    <span>عنوان: {{$allad->title}}</span>
                </div>
                <div id="description">
                    <span>توضیحات: {{$allad->description}}</span>
                </div>
                <div id="price">
                    <span>قیمت:{{$allad->price }} </span>
                </div>
                <div id="Address">
                    <span>آدرس: {{$allad->address }}</span>
                </div>


                <div id="comment">
        <span id="com_span">کامنت:
          <span style="margin-right:53px;margin-top:-30px;display:block;">

          </span>



        </span>

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
        <div id="number">
            {{--        {{ $ads->links() }}--}}
        </div>

    </div>
    <div id="nav_footer"></div>
    <div id="footer"></div>
    </div>
    </body>
    </html>

</body>
</html>
