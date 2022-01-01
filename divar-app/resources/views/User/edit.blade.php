
@include('layouts.header')




<div id="create_main">
    @foreach($errors->all() as $error)
        {{$error}}
    @endforeach

    
    <div id="create_form">
        <form  method="post" action="{{route('UserUpdate',$user->id)}}" >
            @csrf
           
                <label class="label_ad" >نام :</label>
                <input class="input_Ad"  type="text" name="name" value="{{$user->name}}">

                <label class="label_ad" > ایمیل:</label>
                <input class="input_Ad"  type="text" name="email" value="{{$user->email}}">               
          
            
                <label id="label_description" >وضعیت:</label>
                <select class="input_Ad"  name="status">                
                     <option value="{{$user->status}}" selected>{{$user->status}}</option> 
                     @if($user->status=='Admin')
                     <option value="User">User</option> 
                     @else
                     <option value="Admin">Admin</option> 
                     @endif                 
                           
                </select>
                                            
                 
         
                          
                <input id="input_submit"  type="submit" value="ثبت تغییرات">
           
            </div>
        </form>
    </div>


</div>