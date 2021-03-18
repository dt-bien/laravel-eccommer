@extends('adminLayout')
@section('content')
<div id="content">

   

    <div class="container">
    
        <div class="row">
            <div class="col-3">
           
            </div>
            <div class="col">
            <h3>Cập Nhật Thương Hiệu</h1>
                <form method="post" action="/admin/updatebrand/{{$brand[0]->id}}">
                {{ method_field('PUT') }}

                <div class="mb-3 ">
                       @csrf
                        <label for="exampleFormControlInput1" class="fw-bold text-dark  " >Tên Thương Hiệu</label>
                        <input type="text" class="form-control" id="exampleFormControlInput1" name="namebrand" value="{{$brand[0]->brandname}}">
                    </div>
                    <div class="mb-3 ">
                        <label for="exampleFormControlInput1" class="fw-bold text-dark  " > Quốc Gia</label>
                        <input type="text" class="form-control" id="exampleFormControlInput1" name="nation" value="{{$brand[0]->nation}}">
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