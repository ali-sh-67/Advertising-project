@extends('layouts.app')

@section('content')
    <div style="width:1200px;height:511px;border:1px solid black;float:right;margin-right:73px;margin-bottom:25px;background-color:seashell;">
        <div style="width:200px;height:480px;border:1px solid black;float:right;margin-top:15px;margin-right:15px;background-color:#fff;">
            <div style="text-align:center;text-decoration: none ;"><a  href="{{route('createAd')}}">ایجادآگهی</a></div>
            <div style="text-align:center;"><a  href="{{route('myListAd')}}">مدیریت آگهی</a></div>
            <div style="text-align:center;"><a  href="{{route('showfavoriteAd')}}"> مدیریت علاقه مندی</a></div>
        </div>
        <div style="width:954px;height:480px;border:1px solid black;float:left;margin-top:15px;margin-left:15px;background-color:#fff;">
        
        </div>
        
    </div>
@endsection
