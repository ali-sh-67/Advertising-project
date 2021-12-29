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



<div class="main">
   <div style="margin-left:116px;margin-right:-116px;">

          <div class="create"  >
            <div class="advert" >
              <span class="nameAdvert">کد آگهی: {{$id->id}} </span>
            </div>

            <div class="img" >
              <img class="showImg"  src="{{asset('images/' .$id->image_url)}}">
            </div>

            <div class="title" >
              <span >عنوان: {{$id->title}}</span>
            </div>
            <div class="description">
              <span >توضیحات: {{$id->description}}</span>
            </div>
            <div id="PriceTell">
              <div class="price" >
                <span class="showPrice" >قیمت: <span style="color:red;">{{$id->price }} </span>تومان</span>
                <div class="tell">
                  <span class="showTell">تلفن: {{$id->phone_number_ads}} </span>
                </div>                

              </div>           
              
              
            
            </div>
            <div class="Address" >
              <span >آدرس: {{$id->address }}</span>
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
        
        </div> 
        </div>
       
                
              
      </div> 
    </div>    


 
  
  </div>
  

</body>
</html>