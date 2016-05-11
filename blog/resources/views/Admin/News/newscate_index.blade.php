@extends('templateadmin')
@section('title')
sdfsdfgdffdf
@endsection
@section('head')
sfsdgsdfsdfsdas
@endsection
@section('content')
<div class="box">
    <div class="box-header">
        <h3 class="box-title">Danh muc tin tuc</h3>
    </div>
    <div class="box-body">
        <div class="dataTables_wrapper form-inline dt-bootstrap">
            <div class="row">
                <div class="col-sm-6">
                    <div class="dataTables_length" id="example1_length">
                        <label> Show 
                            <select name="example1_length" aria-controls="example1" class="form-control input-sm">
                                <option value="10">10</option>
                                <option value="25">25</option>
                                <option value="50">50</option>
                                <option value="100">100</option>
                            </select> entries
                        </label>
                    </div>
                </div>
                <div class="col-sm-6">
                    <div id="example1_filter" class="dataTables_filter">
                        <label>Search:<input type="search" class="form-control input-sm" placeholder="" aria-controls="example1"></label>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-sm-12">
                    <table id="example1" class="table table-bordered table-striped table-hover">
                        <thead>
                            <tr role="row">
                                <th></th>
                                <th>Tieu de</th>
                                <th>Hinh anh</th>
                                <th>Danh muc</th>
                                <th>URL</th>
                                <th>Stutus</th>
                                <th>Order</th>
                                <th></th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($items as $item)
                            <tr role="row">
                                <td style="text-align: center;"><input type="checkbox" /></td>
                                <td>{{$item->title}}</td>
                                <td><img style="width: 150px;" src="{{ReturnImage($item->avatar)}}" alt="{{$item->title}}" /></td>
                                <td><a href="/{{$item->url}}">{{$item->url}}</a></td>
                                <td style="text-align: center;"><input type="checkbox" {{($item->status==1?'checked="checked"':'')}}  /></td>
                                <td style="text-align: right;">{{$item->order}}</td>
                                <td>
                                    <a class="label label-primary" href=""><span class="glyphicon glyphicon-pencil" aria-hidden="true"></span> Edit</a>
                                    <a class="label label-danger" href=""><span class="glyphicon glyphicon-remove" aria-hidden="true"></span> Delete</a>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
                
                
                










@endsection