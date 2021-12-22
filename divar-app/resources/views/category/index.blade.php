@extends('layouts.main')
@section('content')
    <link rel="stylesheet" href="{{asset('css/category/index.css')}}">
    <div class="categories_list">

        @if(isset($message_delete))
            {{$message_delete}}
        @endif
        @foreach ($categories as $category)
            <div class="category">
                <div class="name"><a href=""><i class="{{$category->icon}}" aria-hidden="true"></i> {{$category->name}}</a></div>
                @if(Auth::user()->name=='admin' & Auth::user()->email=='admin@gmail.com')
                    <div class="create"><a href="{{route('category.create',['id'=>$category->id])}}"><i class="fa fa-plus" aria-hidden="true"></i></a></div>
                    <div class="edit"><a href="{{route('category.edit',['id'=>$category->id])}}"><i class="fa fa-pencil-square-o" aria-hidden="true"></i></a></div>
                    <div class="delete"><a href="{{route('category.delete',['id'=>$category->id])}}"><i class="fa fa-trash-o" aria-hidden="true"></i></a></div>
                @endif
            </div>
            <div>
                @foreach ($category->children as $child)
                    <div class="child">
                        <div class="name"><a href="{{route('categoryAds',['id'=>$child->id])}}"><i class="{{$child->icon}}" aria-hidden="true"></i> {{$child->name}}</a></div>
                        @if(Auth::user()->name=='admin' && Auth::user()->email=='admin@gmail.com')
                            <div class="create"><a href="{{route('category.create',['id'=>$category->id])}}"><i class="fa fa-plus" aria-hidden="true"></i></a></div>
                            <div class="edit"><a href="{{route('category.edit',['id'=>$child->id])}}"><i class="fa fa-pencil-square-o"
                                        aria-hidden="true"></i></a></div>
                            <div class="delete"><a href="{{route('category.delete',['id'=>$child->id])}}"><i class="fa fa-trash-o"
                                        aria-hidden="true"></i></a>
                            </div>
                        @endif
                    </div>
                    <div>
                        @foreach ($child->children as $subchild)
                            <div class="subchild">
                                <div class="name"><a href=""><i class="{{$subchild->icon}}" aria-hidden="true"></i> {{$subchild->name}}</a></div>
                                @if(Auth::user()->name=='admin' && Auth::user()->email=='admin@gmail.com')
                                    <div class="create"><a href="{{route('category.create',['id'=>$category->id])}}"><i class="fa fa-plus" aria-hidden="true"></i></a></div>
                                    <div class="edit"><a href="{{route('category.edit',['id'=>$subchild->id])}}"><i
                                                class="fa fa-pencil-square-o"
                                                aria-hidden="true"></i></a></div>
                                    <div class="delete"><a href="{{route('category.delete',['id'=>$subchild->id])}}"><i
                                                class="fa fa-trash-o"
                                                aria-hidden="true"></i></a></div>
                                @endif
                            </div>
                            <div>
                                @foreach ($subchild->children as $sub1child)
                                    <div class="sub1child">
                                        <div class="name"><a href=""><i class="{{$sub1child->icon}}" aria-hidden="true"></i> {{$sub1child->name}}</a></div>
                                        @if(Auth::user()->name=='admin' && Auth::user()->email=='admin@gmail.com')

                                            <div class="create"><a href="{{route('category.create',['id'=>$category->id])}}"><i class="fa fa-plus" aria-hidden="true"></i></a></div>
                                            <div class="edit"><a href="{{route('category.edit',['id'=>$sub1child->id])}}"><i
                                                        class="fa fa-pencil-square-o" aria-hidden="true"></i></a></div>
                                            <div class="delete"><a href="{{route('category.delete',['id'=>$sub1child->id])}}"><i class="fa fa-trash-o" aria-hidden="true"></i></a></div>
                                        @endif
                                    </div>

                                    <div>
                                        @foreach ($sub1child->children as $sub2child)
                                            <div class="sub2child">
                                                <div class="name"><a href=""><i class="{{$sub2child->icon}}"
                                                            aria-hidden="true"></i> {{$sub2child->name}}</a></div>
                                                @if(Auth::user()->name=='admin' && Auth::user()->email=='admin@gmail.com')
                                                    <div class="create"><a href="{{route('category.create',['id'=>$category->id])}}"><i class="fa fa-plus" aria-hidden="true"></i></a></div>
                                                    <div class="edit"><a href="{{route('category.edit',['id'=>$sub2child->id])}}"><i
                                                                class="fa fa-pencil-square-o" aria-hidden="true"></i></a></div>
                                                    <div class="delete"><a href="{{route('category.delete',['id'=>$sub2child->id])}}"><i
                                                                class="fa fa-trash-o" aria-hidden="true"></i></a></div>
                                                @endif
                                            </div>
                                        @endforeach
                                    </div>
                                @endforeach
                            </div>
                        @endforeach
                    </div>
                @endforeach
            </div>
        @endforeach
    </div>
@endsection
