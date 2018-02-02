@extends('manager.layout.master')

@section('content')

<div class="row">
    <div class="col-md-12">
        <!-- BEGIN EXAMPLE TABLE PORTLET-->
        <div class="portlet light bordered">
            <div class="portlet-title">
                <div class="caption font-dark">
                    <i class="icon-settings font-dark"></i>
                    <span class="caption-subject bold uppercase"> Danh sách job</span>
                </div>
            </div>
            <div class="portlet-body">
                <div class="table-toolbar">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="btn-group">
                                <a id="sample_editable_1_new" class="btn sbold green" href="{{route('manager-create-job')}}"> Tạo Job
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
                            <th> Tên Job </th>
                            <th> Số lượng </th>
                            <th> Order </th>
                            <th> Trạng thái</th>
                            <th> Thao tác </th>
                        </tr>
                    </thead>
                    <tbody>
                        @if(isset($jobs))
                        @foreach($jobs as $job)
                        <tr class="odd gradeX">
                            <td> {{$job->id}} </td>
                            <td>
                                {{$job->name}}
                            </td>
                            <td>
                                {{$job->total}}
                            </td>
                            <td>
                                {{count($job->order)}}
                            </td>
                            <td>
                                {{$job->status->status}}
                            </td>
                            <td>
                                <div class="btn-group">
                                    <button class="btn btn-xs green dropdown-toggle" type="button" data-toggle="dropdown" aria-expanded="false"> Thao tác
                                        <i class="fa fa-angle-down"></i>
                                    </button>
                                    <ul class="dropdown-menu pull-left" role="menu">
                                        <li>
                                            <a href="{{route('manager-show-job',$job->id)}}"> Chi tiết </a>
                                        </li>
                                        <li>
                                            <a href="{{route('manager-edit-job',$job->id)}}"> Sửa </a>
                                        </li>
                                        <li>
                                            <a href="{{route('manager-delete-job',$job->id)}}"> Xóa </a>
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