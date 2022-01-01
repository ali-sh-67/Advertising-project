@include('layouts.header')
<div style="width:auto;text-align:center;margin-top:105px;background-color:seashell;margin-right:150px;margin-left:150px;"> 

    <div class="container">

        <div class="d-flex justify-content-center">
            <table class="table">
                
                <thead>    
                    <tr style="color:red;"> 
                        <td>ردیف</td>           
                        <td>کد آگهی</td>           
                        <td>عنوان آگهی</td>                 
                        <td>ویرایش</td>
                        <td>حذف</td>
                        <td>مشاهده</td>
                    </tr>
                </thead>
                <tbody>
                    @php($i = '1')
                    
                    @foreach($ads as $ad)                   
                        <tr>           
                            <td>{{$i}}</td>                  
                            <td>{{$ad->id}}</td>                  
                            <td>{{$ad->title}}</td>                  
                            <td><a href="{{route('editAd',$ad->id)}}">ویرایش</a></td>
                            <td><a href="{{route('deleteAd',$ad->id)}}"" onclick="return confirm('آیتم مورد نظر حذف شود؟');">حذف</a></td>
                            <td><a href="{{route('showAd',$ad->id)}}">مشاهده</a></td> 
                        </tr>

                    @php($i++)
                    @endforeach                 
                </tbody>
            </table>
        </div>
    </div>
    
</div> 
@include('layouts.footer') 
</body>
</html>



