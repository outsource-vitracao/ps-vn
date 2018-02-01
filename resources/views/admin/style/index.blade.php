@extends('admin.layout.master')

@section('content')
<div class="row">
    <div class="col-md-12">
        <!-- BEGIN EXAMPLE TABLE PORTLET-->
        <div class="portlet light bordered">
            <div class="portlet-title">
                <div class="caption font-dark">
                    <i class="icon-settings font-dark"></i>
                    <span class="caption-subject bold uppercase"> Danh sách style</span>
                </div>
            </div>
            <div class="portlet-body">
                <div class="table-toolbar">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="btn-group">
                                <a id="sample_editable_1_new" class="btn sbold green" href="{{route('admin-create-style')}}"> Tạo Style
                                    <i class="fa fa-plus"></i>
                                </a >
                            </div>
                        </div>

                    </div>
                </div>
                <table class="table table-striped table-bordered table-hover table-checkable order-column" id="sample_1">
                    <thead>
                        <tr>
                            <th> Id </th>
                            <th> Tên Style </th>
                            <th> Thời gian làm </th>
                            <th> Thao tác </th>
                        </tr>
                    </thead>
                    <tbody>
                        @if(isset($styles))
                        @foreach($styles as $style)
                        <tr class="odd gradeX">
                            <td> {{$style->id}} </td>
                            <td>
                                {{$style->name}}
                            </td>
                            <td>
                                {{$style->time}} phút
                            </td>
                            <td>
                                <div class="btn-group">
                                    <button class="btn btn-xs green dropdown-toggle" type="button" data-toggle="dropdown" aria-expanded="false"> Thao tác
                                        <i class="fa fa-angle-down"></i>
                                    </button>
                                    <ul class="dropdown-menu pull-left" role="menu">
                                        <li>
                                            <a href="{{route('admin-show-style',$style->id)}}">
                                                <i class="icon-tag"></i> Chi tiết </a>
                                        </li>
                                        <li>
                                            <a href="{{route('admin-edit-style',$style->id)}}">
                                                <i class="icon-docs"></i> Sửa </a>
                                        </li>
                                        <li>
                                            <a href="{{route('admin-delete-style',$style->id)}}">
                                                <i class="icon-user"></i> Xóa </a>
                                        </li>
                                    </ul>
                                </div>
                            </td>
                        </tr>
                        @endforeach
                        @endif
                    </tbody>
                </table>
            </div>
        </div>
        <!-- END EXAMPLE TABLE PORTLET-->
    </div>
</div>

@stop