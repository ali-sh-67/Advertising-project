@extends('layouts.main')
@section('content')

<div class="container">

<div class="d-flex justify-content-center">
<table class="table">
    
    <thead>    
    <tr>           
        <td>عنوان آگهی</td>                 
        <td>ویرایش</td>
        <td>حذف</td>
        <td>مشاهده</td>
    </tr>
    </thead>
    <tbody>
   @foreach($ads as $ad)
  
    <tr>           
        <td>{{$ad->title}}</td>                  
        <td><a href="{{route('editAd',$ad->id)}}">ویرایش</a></td>
        <td><a href="{{route('deleteAd',$ad->id)}}"" onclick="return confirm('آیتم مورد نظر حذف شود؟');">حذف</a></td>
        <td><a href="{{route('showAd',$ad->id)}}">مشاهده</a></td> 
    </tr>    
    
    @endforeach
        
    </tbody>
</table>
</div>
</div>



@endsection