<!DOCTYPE html>
<html lang="en" xmlns="http://www.w3.org/1999/html">
<head>
    <meta charset="UTF-8">
    <title>صفحه اصلی</title>
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



                @if (Route::has('login'))
                <a class="yekan login" href=""> خوش آمدید {{ Auth::user()->name }} </a>
                @else
                <a class="yekan login" href="{{ route('login') }}">ورود </a>
                @endif


                <span id="register"></span>

                @if (Route::has('login'))
                <div >
                    <a class="yekan reg"  href="{{ route('logout') }}" onclick="event.preventDefault();document.getElementById('logout-form').submit();"> خروج</a>

                                <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                    @csrf
                                </form>
                </div>



                @else
                <a class="yekan reg" href="{{ route('register') }}"> ثبت نام کنید </a>
                @endif



                <form method="post" action="{{route('showfavoriteAd')}}">
                    @csrf
                    <input type="hidden" name="favorite" value="not"/>
                    <a style="margin-right:50px;float:right;" onclick="this.parentNode.submit();">نشان شده من</a>
                </form>
                <div style="margin-right:54px;float:right;"><a href="{{route('allfavoriteAd')}}">محبوبترینها</a></div>
                <div style="margin-right:54px;float:right;"><a href="{{route('indexAd')}}">آگهی ها</a></div>
                <div style="margin-right:54px;float:right;"><a href="{{route('home')}}">داشبورد</a></div>

            </div>


            <div id="header_right_bottom">
                    <form action="{{route('search')}}" method="post">
                        @csrf
                        <input class="yekan input" type="text" name="search" placeholder="عنوان یا توضیحات آگهی مورد نظر خود را جستجو کنید ... "/>
                        <div id="search_top">
                            <span style="display:inherit; content-visibility: inherit; " ><input id="search_pic" type="submit" value=""></span>
                        </div>
                    </form>
            </div>
        </div>
    </div>
</header>
<nav id="nav"></nav>
