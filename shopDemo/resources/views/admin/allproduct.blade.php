@extends('adminLayout')
@section('content')
<div class="card shadow mb-4">
                        <div class="card-header py-3">
                            <h6 class="m-0 font-weight-bold text-primary">DataTables Example</h6>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                    <thead>
                                        <tr>
                                            <th>Mã Sản Phẩm</th>
                                            <th>Tên Sản Phẩm</th>
                                            <th>Loại Sản Phẩm</th>
                                            <th>Tag</th>
                                            <th>Giá gốc </th>
                                            <th>Giá khuyến mãi </th>
                                            <th>Nhãn Hiệu</th>
                                            <th>Nhóm Sản Phẩm</th>
                                            <th>Hiệu chỉnh</td>
                                        </tr>
                                    </thead>
                                    <tbody>
                                    
                                    @foreach ($allproduct as $product)
                                        <tr>
                                           <td>{{ $product->productid}}</td>
                                           <td>{{ $product->productname}}</td>
                                           <td>{{ $product->dimension}}</td>
                                           <td>{{ $product->tag}}</td>
                                           <td>{{ $product->price}}</td>
                                           <td>{{ $product->salesprice}}</td>
                                           <td>{{ $product->brandname}}</td>
                                           <td>{{ $product->groupname}}</td>
                                           <td>
                                                <form method="post" action="">
                                                    <a href="" class="btn btn-primary">Chỉnh sửa</a>
                                                    {{ method_field('Delete') }}
                                                    @csrf
                                                    <button  class="btn btn-danger" type="submit"
                                                    onclick="return confirm('Are you sure?')">Xóa</button>
                                                </form>
                                           </td>
                                        </tr>
                                    @endforeach
                                      
                                       
                                    </tbody>
                                </table>

                                {{ $allproduct->links() }}
                            </div>
                        </div>
                    </div>
                    @endsection