@extends('pageLayout')
@section('content')
<div class="small-container">
            <h2 class="title">Sản phẩm mới</h2>
            <div class="row content">
            @foreach($allnewproduct as $newproduct)
                <div class="col-4">                   
                      
                        <div class="imgContainer">
                            <a href="/productdetails/{{$newproduct->id}}" ><img src="{{asset($newproduct->photo1)}}" /></a>
                            <div class="toggleContainer">
                                <a href="/productdetails/{{$newproduct->id}}">Xem</a>
                                <a href="/addtocart/{{$newproduct->id}}">Mua</a>
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
            <div class="totalItem">
                <span class="smalltext">Tổng số <?php echo count($allnewproduct) ?> sản phẩm</span>
                <a href="/newproduct">Xem tiếp &#62;&#62;</a>   
             </div>
            </div>

        <div class="small-container">
            <h2 class="title">TOP</h2>
            <div class="row content">
            @foreach($alltopproduct as $topproduct)
                <div class="col-4">                   
                      
                        <div class="imgContainer">
                            <a href="{{asset('/topproduct/{$topproduct->id}')}}" ><img src="{{asset($topproduct->photo1)}}" /></a>
                            <div class="toggleContainer">
                                <a href="/topproduct/{{$topproduct->id}}">Xem</a>
                                <a href="/addtocart/{{$topproduct->id}}">Mua</a>
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
            <div class="totalItem">
                <span class="smalltext">Tổng số <?php echo count($alltopproduct) ?> sản phẩm</span>
                <a href="/topproduct">Xem tiếp &#62;&#62;</a>   
             </div>
        </div>

        <div class="small-container">
            <h2 class="title">GIÁ TỐT</h2>
            <div class="row content">
            @foreach($allsalesproduct as $salesproduct)
                <div class="col-4">                   
                      
                        <div class="imgContainer">
                            <a href="{{asset('/salesproduct/{$salesproduct->id}')}}" ><img src="{{asset($salesproduct->photo1)}}" /></a>
                            <div class="toggleContainer">
                                <a href="/salesproduct/{{$salesproduct->id}}">Xem</a>
                                <a href="/addtocart/{{$salesproduct->id}}">Mua</a>
                            </div>
                        </div>
                        <div class="priceTag">
                            <span class="nameProduct">ten san pham</span>
                            <h3> <?php echo ( $salesproduct->salesprice === null ? $salesproduct->price :$salesproduct->salesprice ) ?>  &#8363; &nbsp; <span class="salesprice" > 
                            <?php echo ( $salesproduct->salesprice !== null  ? $salesproduct->price :'' ) ?> &#8363;</span></h3>                           
                        </div>                   
                </div>
            @endforeach
            </div>
            <div class="totalItem">
                <span class="smalltext">Tổng số <?php echo count($allsalesproduct) ?> sản phẩm</span>
                <a href="/salesproduct">Xem tiếp &#62;&#62;</a>   
             </div>
        </div>
@endsection

@section('slide')
<div class="row">                    
    <div class="slideshow-container"> 
        <div class="imgDiv">
            <img src="images/14.jpg" class=" hideImg"/>
            <img src="images/6.jpg" class=" hideImg" />
            <img src="images/8.jpg" class=" hideImg" />   
        </div>                                          
    </div>
</div>
@endsection