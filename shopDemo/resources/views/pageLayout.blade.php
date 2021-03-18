<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <link rel="stylesheet" href="{{asset('assets/bootrap/css/bootstrap.css')}}"/>
            
        <link rel="stylesheet" href="{{asset('assets/css/style.css')}}"/>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <link rel="preconnect" href="https://fonts.gstatic.com">
        <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,200;0,300;0,400;1,200&display=swap" 
        rel="stylesheet">
  
        <script src="{{asset('assets/js/script.js')}}"></script>
        <script src="https://code.jquery.com/jquery-3.5.0.js"></script>

        <title>Ecommerce Website</title>
    </head>
    <body>
        <div class="header">
            <div class="container">
                <div class="outersmallnavbar">
                    <div class="smallnavbar">                  
                        <ul>
                            <li>
                                <div class="shopDiv">
                                    <a href="cart">
                                        <i class="fa fa-shopping-cart" aria-hidden="true"><span class="dot2"><span style="font-size: 12px;">+12</span></span> </i>                                        
                                    <a>                         
                                         
                                </div>                   
                            </li>
                            <li><a href="/info">Tài khoản</a></li>
                            <li><a href="/register">Đăng Kí</a></li>
                            <li><a href="/login">Đăng Nhập</a></li>
                        </ul>                    
                    </div>
                </div>
                <div class="navbar">
                    <div class="logo">
                        <img src="images/logo.jpg" />
                    </div>
                    <nav>
                       
                            <input type="checkbox" id="check" />
                                <label for="check" class="checkbtn">
                                    <i class="fa fa-bars"></i>
                                </label>
                            
                            <div class="test">
                                
                                <ul>
                                    <li class="searchli" >
                                        <div class="search-containerss">
                                            <form action="">
                                            <input type="text" placeholder="Search.." name="search">
                                            <button type="submit"><i class="fa fa-search"></i></button>
                                            </form>
                                         </div>
                                    </li>
                                    <li><a href="/">Trang chủ</a></li>
                                    <li ><a href="">Sản phẩm</a>
                                        <div class="sub-menu-1" >
                                            <ul >
                                                <li><a href="">Sp 1</a></li>
                                                <li><a href="">Sp 2</a></li>
                                                <li><a href="">Sp 3</a></li>
                                            </ul>
                                        </div>
                                    </li>
                                    <li><a href="">Thương hiệu</a>
                                        <div class="sub-menu-1" >
                                            <ul >
                                            @foreach($shareallbrand as $brand)
                                                <li><a href="">{{$brand->brandname}}</a></li>
                                            @endforeach
                                                
                                            </ul>
                                        </div></li>
                                    <li><a href="">cửa hàng</a></li>
                                
                                
                                </ul>
                            </div>
                      
                    </nav>
                   
                </div>
                @yield('slide')
                
            </div>
        </div>
@yield('content')
        
        
    <footer>
        <div class="row ">
            <div class="col-4 ">
               <table>
                   <tr>
                       <td>Hướng dẫn thanh toán</td>
                   </tr>
                   <tr>
                    <td>Hướng dẫn đặt hàng</td>
                </tr>
                <tr>
                    <td>Hướng dẫn mua trả góp</td>
                </tr>
               </table>
             
            </div>
            <div class="col-4">
                <table>
                    <tr>
                        <td>Qui định đổi mới sản phẩm</td>
                    </tr>
                    <tr>
                     <td>Tuyển dụng</td>
                 </tr>
                 <tr>
                     <td>Điều khoản sử dụng</td>
                 </tr>
                </table>
            </div>
            <div class="col-4">
                <table>
                    <tr>
                        <td>Quy định bảo hành - đổi trả</td>
                    </tr>
                    <tr>
                     <td>Chính sách chất lượng</td>
                 </tr>
                 <tr>
                     <td>Bảo mật thông tin</td>
                 </tr>
                </table>
            </div>
            <div class="col-4">
                <table>
                    <tr>
                        <td>Quy định giao hàng tận nơi</td>
                    </tr>
                    <tr>
                     <td>Giới thiệu </td>
                 </tr>
                 <tr>
                    <td></td>
                 </tr>
                </table>
            </div>
        </div>
    </footer>

    </body>
</html>