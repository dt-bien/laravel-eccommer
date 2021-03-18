@extends('adminLayout')
@section('content')
<div id="content">

   

    <div class="container">
  
        <div class="row">
            <div class="col-3">
           
            </div>
            <div class="col">
                <form method="post" action="{{asset('/admin/addcategory')}}" enctype="multipart/form-data">
                @csrf
                    <div class="mb-3 ">
                        <label for="exampleFormControlInput1" class="fw-bold text-dark  " >Quy cách</label>
                        <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="Mã sản phẩm" 
                        name="dimension">
                    </div>
                    <div class="mb-3 ">
                        <label for="exampleFormControlInput1" class="fw-bold text-dark  " >Hình ảnh 1</label>
                        <input type="file" class="form-control" id="exampleFormControlInput1" 
                        name="photo1">
                    </div>
                    <div class="mb-3 ">
                        <label for="exampleFormControlInput1" class="fw-bold text-dark  " >Hình ảnh 2</label>
                        <input type="file" class="form-control" id="exampleFormControlInput1" 
                        name="photo2">
                    </div>
                    <div class="mb-3 ">
                        <label for="exampleFormControlInput1" class="fw-bold text-dark  " >Hình ảnh 3</label>
                        <input type="file" class="form-control" id="exampleFormControlInput1" 
                        name="photo3">
                    </div>
                    <div class="mb-3 ">
                        <label for="exampleFormControlInput1" class="fw-bold text-dark  " >Hình ảnh 4</label>
                        <input type="file" class="form-control" id="exampleFormControlInput1" 
                        name="photo4">
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