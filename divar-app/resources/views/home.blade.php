@extends('layouts.app')

@section('content')
    <div style="width:1200px;height:777px;border:1px solid black;margin:5px auto;background-color:seashell;">
        <div style="width:200px;height:754px;border:1px solid black;float:right;margin-top:15px;margin-right:15px;background-color:#fff;line-height:40px ;font-size:18px; ">
            <div style="text-align:center;"><a style="text-decoration: none;color:blue;" href="{{route('indexAd')}}">کل آگهی ها</a></div>
            <div style="text-align:center;"><a style="text-decoration: none;color:blue;" href="{{route('createAd')}}">ایجادآگهی</a></div>
            <div style="text-align:center;"><a style="text-decoration: none;color:blue;"  href="{{route('myListAd')}}">مدیریت آگهی</a></div>
            <div style="margin-right:54px;float:right;"><a style="text-decoration: none;color:blue;" href="{{route('allfavoriteAd')}}">محبوب ترینها</a></div>

            <form method="post" action="{{route('showfavoriteAd')}}">
                 @csrf
                 <input type="hidden" name="favorite" value="not"/>
                 <a style="margin-right:53px;float:right;cursor: pointer;text-decoration: none;color:blue;" onclick="this.parentNode.submit();">نشان شده</a>
            </form>
            @if($online=='Admin')
             <div style="margin-right:54px;float:right;"><a style="text-decoration: none;color:blue;" href="{{route('category.index')}}">مدیریت دسته بندی</a></div>
            @endif






        </div>
        <div style="width:954px;height:754px;border:1px solid black;float:left;margin-top:15px;margin-left:15px;background-color:#fff;">

        <div style="width:auto;text-align:center;margin-top:105px;background-color:seashell;margin-right:150px;margin-left:150px;">
    @if($online=='Admin')
    <div class="container">
        <div class="d-flex justify-content-center">
            <table class="table">

                <thead>
                    <tr style="color:red;">
                        <td>id</td>
                        <td>name</td>
                        <td>email</td>
                        <td>status</td>
                        <td>edit</td>
                    </tr>
                </thead>
                <tbody>
                    @php($i = '1')
                    @foreach($users as $user)
                        <tr>
                            <td>{{$user->id}}</td>
                            <td>{{$user->name}}</td>
                            <td>{{$user->email}}</td>
                            <td>{{$user->status}}</td>
                            <td><a href="{{route('UserEdit',$user->id)}}">ویرایش</a></td>

                        </tr>

                    @php($i++)
                    @endforeach
                </tbody>
            </table>

        </div>

    </div>

    @endif
</div>
         @if($online=='Admin')
         <div style="margin-left:414px;">
            {{ $users->links() }}
            </div>
        </div>
        @endif

    </div>
@endsection
