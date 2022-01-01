
@include('layouts.header')
@extends('layouts.main')

@section('content')
    
    <div id="cat_main">
        @foreach($errors->all() as $error)
            {{$error}}
        @endforeach

        <div id="cat_form">

            <form method="post" action="{{route('category.store')}}">
                @csrf

                <div>
                    <div>
                        <label class="cat_label">نام دسته بندی:</label>
                    </div>
                    <div>
                        <input class="cat_input" type="text" name="name" placeholder="نام را وارد کنید">
                    </div>
                </div>
                <div>
                    <div>
                        <label class="cat_label">نام دسته بندی به انگلیسی:</label>
                    </div>
                    <div>
                        <input class="cat_input" type="text" name="name_en" placeholder="نام انگلیسی را وارد کنید">
                    </div>
                </div>
                <div>
                    <div>


                        <label class="cat_label">آیکن:</label>
                        <input class="cat_input" type="text" name="icon" value="fa fa-circle-o-notch" placeholder="فونت آیکون را وارد کنید">


                    </div>

                    <div>
                        <select id="cat_select" name="parent_id">
                            <option value="0">دسته اصلی</option>
                            @foreach($categories as $category)
                                <option value="{{$category->id}}">{{$category->name}}</option>
                            @endforeach
                        </select>
                    </div>
                    <div>
                        <div>
                            <input type="submit" value="ایجاد">
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
    @include('layouts.footer')  
@endsection
