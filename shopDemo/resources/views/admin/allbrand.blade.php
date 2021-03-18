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
                                            <th>Thương Hiệu</th>
                                            <th>Quốc Gia</th>
                                            <th>Hiệu Chỉnh</th>
                                            <th>Tổng Cộng</th>
                                            
                                        </tr>
                                    </thead>
                                    <tfoot>
                                        <tr>
                                            <th>Tổng cộng:</th>
                                            <th><th>
                                            <th>{{$count}}</th>
                                            
                                        </tr>
                                    </tfoot>
                                    <tbody>
                                      @foreach($allbrand as $brand)
                                      
                                        <tr>
                                            <td>{{$brand->brandname}}</td>
                                            <td>{{$brand->nation}}</td>
                                            <td>
                                              
                                                 
                                                 
                                                    <form method="post" action="/admin/deletebrand/{{$brand->id}}">
                                                    <a href="/admin/updatebrand/{{$brand->id}}" class="btn btn-primary">Chỉnh sửa</a>
                                                        {{ method_field('Delete') }}
                                                        @csrf
                                                        <button  class="btn btn-danger" type="submit"
                                                        onclick="return confirm('Are you sure?')">Xóa</button>
                                                    </form>
                                            </td>
                                            <td></td>
                                        </tr>
                                      @endforeach
                                       
                                       
                                    </tbody>
                                </table>
                                {{ $allbrand->links() }}
                            </div>
                        </div>
                    </div>
                    @endsection