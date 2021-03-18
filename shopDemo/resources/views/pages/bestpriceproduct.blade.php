@extends('pageLayout')
@section('content')
<div class="small-container">
            <div class="fullHeightContainer">
                <h2 class="title">Giá tốt</h2>
                <div class="row content">
                
                @foreach($allsalesproduct as $salesproduct) 
                    <div class="col-4">                   
                        
                            <div class="imgContainer">
                                <a href="{{asset('/salesproduct/{$salesproduct->id}')}}" ><img src="{{asset($salesproduct->photo1)}}" /></a>
                                <div class="toggleContainer">
                                    <a href="{{asset('/salesproduct/{$salesproduct->id}')}}">Xem</a>
                                    <a href="">Mua</a>
                                </div>
                            </div>
                            <div class="priceTag">
                                <span class="nameProduct">ten san pham</span>
                                <h3> <?php echo ( $topproduct->salesprice === null ? $topproduct->price :$topproduct->salesprice ) ?>  &#8363; &nbsp; <span class="salesprice" > 
                                <?php echo ( $topproduct->salesprice !== null  ? $topproduct->price :'' ) ?> &#8363;</span></h3>                           
                            </div>                   
                    </div>
                @endforeach
            </div>
            </div>
           {{$allsalesproduct->links()}}
</div>
@endsection