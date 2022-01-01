@include('layouts.header')
@extends('layouts.main')
@section('content')
    @foreach($errors->all() as $error)
        {{$error}}
    @endforeach

    <div class="">
        {{$category->name}} ({{$category->parent_id}}) {{'id:' . $category->id}}
        <form method="post" action="{{route('category.update', ['id'=>$category->id])}}">
            @csrf
            <div>
                <lable>name</lable>
                <input name="name" placeholder="Enter title" value="{{$category->name}}"></input>
            </div>
            <div>
                font_icon
                <input name="icon" value="{{ $category->icon }}"></input>
            </div>
            <div>
                <select name="parent_id">
                    <option value="{{$name_parent_id->id}}">{{$name_parent_id->name}}</option>
                    <option value="0">دسته اصلی</option>
                    @foreach($categories as $item)
                        <option value="{{$item->id}}">{{$item->name}}</option>
                    @endforeach
                </select>
            </div>
            <div><input type="submit" value="update">
            <div><a href="{{route('category.index')}}">back</a></div>
            </div>
    </div>
    @include('layouts.footer')
@endsection
