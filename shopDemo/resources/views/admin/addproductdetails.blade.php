@extends('adminLayout')
@section('content')
<div id="content">

   

    <div class="container">

        <div class="row">
            <div class="col-3">
           
            </div>
            <div class="col-12">
                <form method="post" action="{{asset('/admin/addproductdetails')}}" enctype="multipart/form-data">
                @csrf
                    <div class="mb-3 ">
                        <label for="exampleFormControlInput1" class="fw-bold text-dark  " >Mã Sản Phẩm</label>
                        <select class="form-select form-control" aria-label="Default select example"
                        name="productid">
                           
                            @foreach($allproductid as $productid)
                                <option value="{{$productid->id}}">{{$productid->productid}}</option>
                                
                            @endforeach
                        </select>
                    </div>
                    <div class="">
                        <div class="mb-3 ckedito2" id ="area" >
                            <label for="exampleFormControlInput1" class="fw-bold text-dark  " > Mô Tả 1</label>
                            <textarea type="text" class="form-control" id="contentpage1" name="content1" rows="15"
                            style="max-width: 100%;" ></textarea>
                        </div>
                    </div>
                
                   
                   
                    <div class="mb-3 ">
                    <input type="submit" class="btn btn-primary" value="Send" />
                    </div>
                  
                </form>
                   
                   
                <script>

             
               
                CKEDITOR.replace( 'contentpage1', 
                {
                    filebrowserUploadUrl: "{{route('upload', ['_token' => csrf_token() ])}}",
                    filebrowserUploadMethod: 'form'
                } );
               

                </script>
            </div>
            <div class="col">
           
            </div>
        </div>
    </div>
</div>


@endsection