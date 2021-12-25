@extends('layouts.main')

@section('content')

<link rel="stylesheet" type="text/css" href="{{ asset('/css/style.css') }}">

    <div id="create_main">
        @foreach($errors->all() as $error)
            {{$error}}
        @endforeach

        
        <div id="create_form">
            <form  method="post" action="{{route('updateAd',$id->id)}}" enctype="multipart/form-data">
                @csrf
               
                    <label class="label_ad" >نام آگهی:</label>
                    <input class="input_Ad"  type="text" name="title" value="{{$id->title}}">

                    <label class="label_ad" >انتخاب دسته بندی:</label>
                    <select class="input_Ad"  name="category">
                        <option value="{{$id->category_id}}">{{$idCats}}</option>
                        @foreach($cats as $cat)
                            <option value="{{$cat->id}}">{{$cat->name}}</option>                        
                        @endforeach            
                    </select>
              
                
                    <label id="label_description" >توضیحات:</label>
                    <textarea id="textarea_description"  name="description">{{$id->description}}</textarea>                    
               
                
                    <label id="label_img">تصویر:</label>
                    <input id="input_img" type="file" name="image_url">
                
               
                    <div><label class="label_ad " >قیمت:</label></div>
                    <div><input class="input_Ad" type="text" name="price" value="{{$id->price}}"></div>
              
                    <div><label class="label_ad" >آدرس:</label></div>
                    <div><input class="input_Ad" type="text" name="address" value="{{$id->address}}"></div>
            
                    <div><label class="label_ad">تلفن:</label></div>
                    <div><input class="input_Ad" type="text" name="phone_number_ads" value="{{$id->phone_number_ads}}"></div>      
             
                              
                    <input id="input_submit"  type="submit" value="ثبت تغییرات">
               
                </div>
            </form>
        </div>


    </div>










@endsection