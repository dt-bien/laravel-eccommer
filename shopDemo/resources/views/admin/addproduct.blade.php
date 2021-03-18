@extends('adminLayout')
@section('content')
<div id="content">
    <div class="container">
  
        <div class="row">
            <div class="col-3">
           
            </div>
            <div class="col">
                <form method="post" action="/admin/addproduct">
                @csrf
                    <div class="mb-3 ">
                        <label for="exampleFormControlInput1" class="fw-bold text-dark  " >Mã Sản Phẩm</label>
                        <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="Mã sản phẩm" 
                        name="productid">
                    </div>
                    <div class="mb-3 ">
                        <label for="exampleFormControlInput1" class="fw-bold text-dark  " >Tên Sản Phẩm</label>
                        <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="Tên sản phẩm"
                        name="productname">
                    </div>
                    <div class="mb-3 ">
                        <label for="exampleFormControlInput1" class="fw-bold text-dark  " >Giá Sản Phẩm</label>
                        <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="Giá sản phẩm"
                        name="productprice">
                    </div>
                    <div class="mb-3 ">
                        <label for="exampleFormControlInput1" class="fw-bold text-dark  " >Giá Khuyến Mãi</label>
                        <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="Giá khuyến mãi"
                        name="productsalesprice">
                    </div>
                    <div class="mb-3 ">
                        <label for="exampleFormControlInput1" class="fw-bold text-dark  " >
                        Tag ( newproduct | topproduct | salesproduct )</label>
                        <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="Tag"
                        name="tag">
                    </div>
                    <div class="mb-3 ">
                        <label for="exampleFormControlInput1" class="fw-bold text-dark  " >Tên Thương Hiệu</label>
                        <select class="form-select form-control" aria-label="Default select example"
                        name="brandname">
                        @foreach($allbrand as $brand)
                            <option value="{{$brand->id}}">{{$brand->brandname}}</option>
                            
                        @endforeach
                        </select>
                    </div>
                    <div class="mb-3 ">
                        <label for="exampleFormControlInput1" class="fw-bold text-dark  " >Nhóm Sản Phẩm</label>
                        <select class="form-select form-control" aria-label="Default select example"
                        name="groupname">
                            @foreach($allproductgroup as $productgroup)
                                <option value="{{$productgroup->id}}">{{$productgroup->groupname}}</option>
                                
                            @endforeach
                           
                        </select>
                    </div>
                    <div class="mb-3 ">
                        <label for="exampleFormControlInput1" class="fw-bold text-dark  " >Quy cách</label>
                        <select class="form-select form-control" aria-label="Default select example"
                        name="dimension">
                           
                            @foreach($allproductcategory as $productcategory)
                                <option value="{{$productcategory->id}}">{{$productcategory->dimension}}</option>
                                
                            @endforeach
                        </select>
                    </div>
                    
                   
                    
                   
                    <div class="mb-3 ">
                    <input type="submit" class="btn btn-primary" value="Send" />
                    </div>
                  
                </form>
                   
                   

            </div>
            <div class="col">
           
            </div>
        </div>
    </div>
</div>


@endsection