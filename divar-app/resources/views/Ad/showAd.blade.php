@extends('layouts.main')
@section('content')


<div class="d-flex justify-content-center">
    
    عنوان آگهی   :{{$id->title}}<br>
      توضیحات :{{$id->description}}<br>
      آدرس :{{$id->address}}<br>
      قیمت :{{$id->price}}<br>
     تاریخ ایجاد:{{$id->created_at}}<br>
     تصویر:<img src="{{asset('images/' .$id->image_url)}}">
     
     

</div>
</div>



@endsection