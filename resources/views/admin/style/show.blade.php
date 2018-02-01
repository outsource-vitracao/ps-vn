@extends('admin.layout.master')

@section('content')
<div class="row">
    <div class="col-md-12">
        <div class="portlet light bordered">
            <div class="portlet-title">
                <div class="caption">
                    <i class="icon-social-dribbble font-purple-soft"></i>
                    <span class="caption-subject font-purple-soft bold uppercase">Thông tin chi tiết Style</span>
                </div>
            </div>
            <div class="portlet-body">
                <ul class="nav nav-tabs">
                    <li class="active">
                        <a href="#tab_1_1" data-toggle="tab" aria-expanded="false"> Chi tiết </a>
                    </li>
                </ul>
                <div class="tab-content">
                    <div class="tab-pane fade active in" id="tab_1_1">

                        <div class="col-lg-12">
                            <div class="mt-element-list">
                                <div class="mt-list-container list-todo" id="accordion1" role="tablist" aria-multiselectable="true">
                                    <ul>
                                        <li class="mt-list-item">
                                            ID: {{$style->id}}
                                        </li>
                                        <li class="mt-list-item">
                                            Tên Style: {{$style->name}}
                                        </li>
                                        <li class="mt-list-item">
                                            Thời gian làm: {{$style->time}}
                                        </li>
                                        <li class="mt-list-item">
                                            Mô tả: {{$style->description}}
                                        </li>
                                        <li class="mt-list-item">

                                            <a href="{{route('admin-delete-style',$style->id)}}" class="btn btn-outline btn-circle dark btn-sm black">Xóa </a>
                                            <a href="{{route('admin-edit-style',$style->id)}}" class="btn btn-outline btn-circle dark btn-sm black">Sửa </a>
                                            
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
                <div class="clearfix margin-bottom-20"> </div>
            </div>
        </div>

        <div class="clearfix"> </div>
    </div>
</div>
@stop