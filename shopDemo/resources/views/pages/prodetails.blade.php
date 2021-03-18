@extends('pageLayout')
@section('content')
<div class="row">
        <div class="container-content">
            <div class="col-4 " style="margin: 10px 0;" >
                <div class="titleContainer">
                    <h3 class="relatedTitle">Sản phẩm liên quan</h3>
                </div>
                <div class="col-4-resize"     >
                    <div class="imgContainer">
                        <a href="" ><img src="images/banhkem.jpg" /></a>
                        <div class="toggleContainer">
                            <a href="">Xem</a>
                            <a href="">Mua</a>
                        </div>
                    </div>
                    <div class="priceTag">
                        <span class="nameProduct">ten san pham</span>
                        <h3>2.000.000 &#8363; &nbsp; <span class="salesprice" >3.000.000 &#8363;</span></h3>                           
                    </div>              
                </div>

                <div class="col-4-resize"     >
                    <div class="imgContainer">
                        <a href="" ><img src="images/banhkem.jpg" /></a>
                        <div class="toggleContainer">
                            <a href="">Xem</a>
                            <a href="">Mua</a>
                        </div>
                    </div>
                    <div class="priceTag">
                        <span class="nameProduct">ten san pham</span>
                        <h3>2.000.000 &#8363; &nbsp; <span class="salesprice" >3.000.000 &#8363;</span></h3>                           
                    </div>              
                </div>

                <div class="col-4-resize"     >
                    <div class="imgContainer">
                        <a href="" ><img src="images/banhkem.jpg" /></a>
                        <div class="toggleContainer">
                            <a href="">Xem</a>
                            <a href="">Mua</a>
                        </div>
                    </div>
                    <div class="priceTag">
                        <span class="nameProduct">ten san pham</span>
                        <h3>2.000.000 &#8363; &nbsp; <span class="salesprice" >3.000.000 &#8363;</span></h3>                           
                    </div>              
                </div>
            </div>
            <div class="col-1" style="background: #f1f1f1;"> 
                <div class="titleContainer">
                    <h3 class="relatedTitle">Smart phone thang 1</h3>
                </div>  
                <div class="row"  >
                    <div class="col-2">
                        <div class="imgBody">
                            <img src="{{$product->photo1}}"/>                  
                        </div>
                    </div>
                    <div class="col-2">
                        <div class="features">
                            <h2 class="nameShow">{{$product->productname}}</h2>
                            <h6 class="priceShow">
                            <?php echo ( $product->salesprice !== null ? $product->salesprice : $product->price ) ?>
                            </h6>
                            <h3 class="quanShow">So luong:</h3> <input type="text" class="inputPrice" value="1" />
                            <h2 class="buyAndChoice"><a href="/addtocart/{{$product->id}}" class="choice">Chon</a>
                             <a href="" class="buy">Thanh toan</a></h2>

                        </div>
                    </div>
                    
                    <div class="content">
                    <div class="line"></div>
                        <?php echo ($productdetails->content1) ?>

                    </div>
                </div>  

            </div>
            
        </div>
    </div>
    @endsection