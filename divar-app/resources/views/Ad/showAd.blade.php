@include('layouts.header')
   <div style="">

          <div class="createShow"  >
            <div class="advert" >
              <span class="nameAdvert">کد آگهی: {{$id->id}} </span>
            </div>

            <div class="img" >
              <img class="showImgShow"  src="{{asset('images/' .$id->image_url)}}">
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
                    @if($comm->Ads_id == $id->id)

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
  @include('layouts.footer')
  

</body>
</html>