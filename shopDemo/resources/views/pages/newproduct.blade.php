@extends('pageLayout')
@section('content')
<div class="small-container">
    <div class="fullHeightContainer">
        <h2 class="title">Sản phẩm mới</h2>
            <div class="row content">
                @foreach($allnewproduct as $newproduct)
                    <div class="col-4">                   
                        
                            <div class="imgContainer">
                                <a href="/newproduct/{{$newproduct->id}}" ><img src="{{asset($newproduct->photo1)}}" /></a>
                                <div class="toggleContainer">
                                    <a href="/newproduct/{{$newproduct->id}}">Xem</a>
                                    <a href="">Mua</a>
                                </div>
                            </div>
                            <div class="priceTag">
                                <span class="nameProduct">ten san pham</span>
                                <h3> <?php echo ( $newproduct->salesprice === null ? $newproduct->price :$newproduct->salesprice ) ?>  &#8363; &nbsp; <span class="salesprice" > 
                                <?php echo ( $newproduct->salesprice !== null  ? $newproduct->price :'' ) ?> &#8363;</span></h3>                           
                            </div>                   
                    </div>
                @endforeach

            </div>
        
                
    </div>
    {{$allnewproduct->links()}}
</div>
@endsection