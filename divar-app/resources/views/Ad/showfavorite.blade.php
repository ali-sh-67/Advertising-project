<!DOCTYPE html>
<html lang="en">
<head>

    <meta charset="UTF-8">
    <title>صفحه اصلی دیوار</title>
    <script src="js/jquery-3.4.1.min.js"></script>
    <link rel="stylesheet" type="text/css" href="{{ asset('/css/style.css') }}">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.0.0-alpha/css/bootstrap.css" rel="stylesheet">
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



    @foreach($ads as $ad)
        @json($ad->pivot)
        <div id="create">
            <div id="advert">
                <span id="nameAdvert">کد آگهی: {{$ad->id}} </span>
            </div>

            <div id="img">
                <img id="showImg" src="{{asset('images/' .$ad->image_url)}}">
            </div>

            <div id="title">
                <span>عنوان: {{$ad->title}}</span>
            </div>
            <div id="description">
                <span>توضیحات: {{$ad->description}}</span>
            </div>
            <div id="price">
                <span>قیمت:{{$ad->price }} </span>
            </div>
            <div id="Address">
                <span>آدرس: {{$ad->address }}</span>
            </div>


            <div id="comment">
        <span id="com_span">کامنت:
          <span style="margin-right:53px;margin-top:-30px;display:block;">

          </span>



        </span>

                <div>
                    @if (empty($ad->pivot))
                    <form method="post" action="{{route('favoriteAd',['id'=>$ad->id])}}">
                        @csrf
                        <input type="hidden" name="favorite" value="favorite" />
                        <a onclick="this.parentNode.submit();">favorite</a>
                    </form>
                    @endif
                        @if (!empty($ad->pivot))
                    <form method="post" action="{{route('favoriteAd',['id'=>$ad->id])}}">
                        @csrf
                        <input type="hidden" name="favorite" value="favorite" />
                        <a onclick="this.parentNode.submit();">unfavorite</a>
                    </form>
                    @endif
                </div>
                <div id="com_div">
                    <a href="{{route('createComment',$ad->id)}}" class="button"><span>کامنت بگذار!</span></a>
                </div>
            </div>


        </div>

    @endforeach
    <div id="number">
{{--        {{ $ads->links() }}--}}
    </div>

</div>
<div id="nav_footer"></div>
<div id="footer"></div>

</body>
</html>
