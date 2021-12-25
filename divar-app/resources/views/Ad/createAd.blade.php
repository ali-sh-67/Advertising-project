
<!DOCTYPE html>
<html lang="en">
<head>

<meta charset="UTF-8">
<title>صفحه ایجاد آگهی</title>
<script src="js/jquery-3.4.1.min.js"></script>
<link rel="stylesheet" type="text/css" href="{{ asset('/css/style.css') }}">
</head>
<body style="background-color: #e4dcdc;">



<!-- @extends('layouts.main')

@section('content') -->

    <div id="create_main">
        @foreach($errors->all() as $error)
            {{$error}}
        @endforeach

        
        <div id="create_form">
            <form  method="post"  action="{{route('storeAd')}}" enctype="multipart/form-data">
                @csrf

               
                    <label class="label_ad" >نام آگهی:</label>
                    <input class="input_Ad"  type="text" name="title" placeholder="نام آگهی را وارد کنید">

                    <label class="label_ad" >انتخاب دسته بندی:</label>
                    <select class="input_Ad"  name="category">
                        <option value="">انتخاب کن</option>
                        @foreach($cats as $cat)
                            <option value="{{$cat->id}}">{{$cat->name}}</option>                        
                        @endforeach            
                    </select>
              
                
                    <label id="label_description" >توضیحات:</label>
                    <textarea id="textarea_description"  name="description" placeholder="توضیحات را وارد کنید" ></textarea>
                    
               
                    <label id="label_img">تصویر:</label>
                    <input id="input_img" type="file" name="image_url">
                
               
                    <div><label class="label_ad " >قیمت:</label></div>
                    <div><input class="input_Ad" type="text" name="price" placeholder="قیمت را وارد کنید"></div>
              
                    <div><label class="label_ad" >آدرس:</label></div>
                    <div><input class="input_Ad" type="text" name="address" placeholder="آدرس را وارد کنید"></div>
            
                    <div><label class="label_ad">تلفن:</label></div>
                    <div><input class="input_Ad" type="text" name="phone_number_ads" placeholder="شماره تلفن را وارد کنید"></div>
               
                    <div><label class="label_ad">انتشار در گروه:</label></div>
                    <div>
                        <select class="input_Ad" name="category_id">
                            @foreach($categories as $category)
                                @foreach($category->children as $child)
                                    <option value="{{$child->id}}">{{$child->name}}</option>
                                @endforeach
                            @endforeach
                        </select>
                    </div>
                                       
                    <input id="input_submit"  type="submit" value="ارسال">
               
                </div>
            </form>
        </div>


    </div>
<!-- @endsection -->

</body>
</html>