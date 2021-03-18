@extends('adminLayout')
@section('content')
<div id="content">

   

    <div class="container">
  
        <div class="row">
            <div class="col-3">
           
            </div>
            <div class="col">
                <form method="post" action="{{asset('/admin/addproductgroup')}}">
                <div class="mb-3 ">
                       @csrf
                        <label for="exampleFormControlInput1" class="fw-bold text-dark  " >Tên Nhóm Sản Phẩm</label>
                        <input type="text" class="form-control" id="exampleFormControlInput1" name="groupname" placeholder="Tên Nhóm">
                    </div>
                    <div class="mb-3 ">
                        <label for="exampleFormControlInput1" class="fw-bold text-dark  " > Mô Tả</label>
                        <textarea type="text" class="form-control" id="exampleFormControlInput1" name="description" rows="5" ></textarea>
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