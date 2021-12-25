<!DOCTYPE html>
<html lang="en">
<head>

<meta charset="UTF-8">
<title>صفحه اصلی دیوار</title>
<script src="js/jquery-3.4.1.min.js"></script>
<link rel="stylesheet" type="text/css" href="{{ asset('/css/style.css') }}">
<link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.0.0-alpha/css/bootstrap.css" rel="stylesheet">
</head>

<body class="body" >


<header class="header" >
    <div id="myheader" >
        <div id="header_right">
            <div id="header_right_top" >
                <span id="lock" ></span>
                  <a class="yekan login" href="">ورود</a>
                <span id="register"></span>
                  <a  class="yekan reg" href=""> ثبت نام کنید   </a>
            </div>


            <div id="header_right_bottom" >                
                <div id="search_top">                    
                  <input class="yekan input" type="text" placeholder="محصول ، دسته یا برند مورد نظر خود را جستجو کنید ... "/>
                  <span id="search_pic"></span>
                </div>


            </div>

        </div>
       
    </div>
  
</header>
<nav id="nav" ></nav>
<div class="main">

  
@foreach($ads as $ad)

    <div class="create" >
      <div class="advert" >
        <span class="nameAdvert">کد آگهی: {{$ad->id}} </span>
      </div>

      <div class="img" >
        <img class="showImg"  src="{{asset('images/' .$ad->image_url)}}">
      </div>

      <div class="title" >
        <span >عنوان: {{$ad->title}}</span>
      </div>
      <div class="description">
        <span >توضیحات: {{$ad->description}}</span>
      </div>
      <div id="PriceTell">
        <div class="price" >
          <span class="showPrice" >قیمت: <span style="color:red;">{{$ad->price }} </span>تومان</span>
        </div>
        <span  class="showTell">تلفن: {{$ad->phone_number_ads}} </span>
        
       
      </div>
      <div class="Address" >
        <span >آدرس: {{$ad->address }}</span>
      </div>
     

      <div class="comment"  >
        <span class="comm_span">کامنت:</span>
        <div class="comm_space">
        
            @foreach($comms as $comm)
              @if($comm->Ads_id == $ad->id)

                @foreach($users as $user)  
                @if(($user->id)%2==0)
                  @if($comm->user_id == $user->id )          
                    <span class="comm_user" style="color:green;" >{{$user->name}}:</span>
                  @endif
                @endif

                @if(($user->id)%2==1)
                  @if($comm->user_id == $user->id )          
                    <span class="comm_user" style="color:red;" >{{$user->name}}:</span>
                  @endif
                @endif

                 
                @endforeach
                
                {{$comm->description }}
                <br>
              @endif
            @endforeach
        </div> 
       
        <button class="comm_button" > 
          <a class="comm_button_a" href="{{route('createComment',$ad->id)}}" >کامنت بگذار!</a>
        </button>         
              
      </div> 
    </div>    

@endforeach
  <div class="number" >
  {{ $ads->links() }}  
  </div>
  
  </div>
  <div class="nav_footer" > </div>
  <div class="footer" ></div>

</body>
</html>
