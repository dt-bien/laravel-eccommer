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
                                            <th>Quy Cách</th>
                                            <th>Hình ảnh 1</th>
                                            <th>Hình ảnh 2</th>
                                            <th>Hình ảnh 3</th>
                                            <th>Hình ảnh 4</th>
                                            <th>Hiệu chỉnh</th>
                                        </tr>
                                    </thead>
                                   
                                    <tbody>
                                      @foreach($allcategory as $category)
                                      
                                        <tr>
                                            <td>{{$category->dimension}}</td>
                                            <td>
                                            <?php if ($category->photo1 !== '') { ?>
                                              <img src="{{asset($category->photo1)}}" width="50" height="40" />
                                             <?php } ?>
                                            </td>
                                            <td>
                                                <?php if ($category->photo2 !== '') { ?>
                                                <img src="{{asset($category->photo2)}}" width="50" height="40" />
                                                <?php } ?>
                                               
                                            </td>
                                            <td>
                                                <?php if ($category->photo3 !== '') { ?>
                                                <img src="{{asset($category->photo3)}}" width="50" height="40" />
                                                <?php } ?>
                                            </td>
                                            <td>
                                                <?php if ($category->photo4 !== '') { ?>
                                                <img src="{{asset($category->photo4)}}" width="50" height="40" />
                                                <?php } ?>
                                            </td>
                                            
                                            <td>
                                                    <form method="post" action="/admin/deletecategory/{{$category->id}}">
                                                    <a href="/admin/updatecategory/{{$category->id}}" class="btn btn-primary">Chỉnh sửa</a>
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
                                {{ $allcategory->links() }}
                            </div>
                        </div>
                    </div>
                    @endsection