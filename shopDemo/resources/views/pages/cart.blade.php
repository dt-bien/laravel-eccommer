@extends('pageLayout')
@section('content')
<div class="row">
        <div class="col-4 col-4modify" >
            <h3>Danh Sách đơn hàng</h3>
            <table class="infocart">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Ngày</th>
                        <th>Trạng Thái</th>
                        <th>Xem</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>1</td>
                        <td>22/1</td> 
                        <td>Dang cho</td>
                        <td><a href="">Xem tiep </a></td>
                    </tr>
                </tbody>
            </table>
        </div>
        <div class="col-2l" style="background:green">
           
          
            <div class="cart">
                <h3>THONG TIN GIO HANG</h3>
                <div class="info">

                    <table>
                      
                            <tr>
                                <td  style="font-weight: 600;">Họ Tên </td>
                                <td><?php echo (session('user')[1]) ?></td>
                             
                            </tr>
                            <tr>
                                <td style="font-weight: 600;">Dia chi</td>
                                <td><?php echo (session('user')[3]) ?></td>
                             
                            </tr>
                            <tr>
                                <td  style="font-weight: 600;">Dien thoai</td>
                                <td><?php echo (session('user')[4]) ?></td>
                             
                            </tr>
                     
                    </table>
                    
                </div>
                <div class="line">

                </div>
                
                <table>
                    <thead>
                       <th>STT</th>
                       <th>San pham</th>
                       <th>So luong</th>
                       <th>Thanh tien</th>

                    </thead>
                    <tbody>
                        @foreach ($bills as $bill)
                        <tr>
                            <td></td>
                      
                            <td>{{$bill->productname}}</td>
                      
                            <td>{{$bill->quantity}}</td>
                     
                            <td>{{$bill->total}}</td>
                        </tr>
                       @endforeach
                    </tbody>
                </table>
                <a href="">THANH TOÁN &#8594;</a>
            </div>
        </div>
    </div>
@endsection