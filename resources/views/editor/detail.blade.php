@extends('editor.layout.master')

@section('content')
<div class="row">
    <div class="col-md-12">
        <div class="portlet light bordered">
            <div class="portlet-title">
                <div class="caption">
                    <i class="icon-social-dribbble font-purple-soft"></i>
                    <span class="caption-subject font-purple-soft bold uppercase">Thông tin chi tiết Job</span>
                </div>
                <div class="actions">
                    @if($job->status->status == "Đang edit")
                    <a href="{{route('editor-finish-queue',$job->id)}}" class="btn btn-outline btn-circle dark btn-sm black">Hoàn thành</a>
                    @endif
                    <a href="{{route('editor-back-queue',$job->id)}}" class="btn btn-outline btn-circle dark btn-sm black">Trả về</a>
                    @if($job->status->status == "Trả về Editor")
                    <a href="{{route('editor-return-queue',$job->id)}}" class="btn btn-outline btn-circle dark btn-sm black">Kiểm tra lại</a>
                    @endif
                </div>
            </div>
            <div class="portlet-body">
                <ul class="nav nav-tabs">
                    <li class="active">
                        <a href="#tab_1_1" data-toggle="tab" aria-expanded="false"> Chi tiết </a>
                    </li>
                    @if(isset($job->order->id))
                    <li class="">
                        <a href="#tab_1_2" data-toggle="tab" aria-expanded="true"> Order kèm theo </a>
                    </li>
                    @endif
                    <li class="">
                        <a href="#tab_1_3" data-toggle="tab" aria-expanded="true">Bình luận</a>
                    </li>
                </ul>
                <div class="tab-content">
                    <div class="tab-pane fade active in" id="tab_1_1">

                        <div class="col-lg-12">
                            <div class="mt-element-list">
                                <div class="mt-list-container list-todo" id="accordion1" role="tablist" aria-multiselectable="true">
                                    <ul>
                                        <li class="mt-list-item">
                                            ID: {{$job->id}}
                                        </li>
                                        <li class="mt-list-item">
                                            Tên Job: {{$job->name}}
                                        </li>
                                        <li class="mt-list-item">
                                            Số lượng ảnh: {{$job->total}}
                                        </li>
                                        <li class="mt-list-item">
                                            Style: {{$job->style->name}}
                                        </li>
                                        <li class="mt-list-item">
                                            Trạng thái: {{$job->status->status}}
                                        </li>
                                        <li class="mt-list-item">
                                            Link download: {{$job->linkdownload}}
                                        </li>
                                        <li class="mt-list-item">
                                            Chú thích: {{$job->note}}
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>

                    </div>
                    <div class="tab-pane fade" id="tab_1_2">
                        <div class="col-lg-12">
                            <div class="mt-element-list">
                                <div class="mt-list-container list-todo" id="accordion1" role="tablist" aria-multiselectable="true">
                                    @if(isset($job->order->id))
                                    <ul>
                                        <li class="mt-list-item">
                                            Style: {{$job->order->style->name}}
                                        </li>
                                        <li class="mt-list-item">
                                            Số lượng ảnh: {{$job->order->total}}
                                        </li>
                                        <li class="mt-list-item">
                                            Ghi chú: {{$job->order->note}}
                                        </li>
                                    </ul>
                                    @endif
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane fade" id="tab_1_3">
                        <div class="col-lg-12">
                            <div class="portlet light bordered">
                                    <div class="portlet-title">
                                        <div class="caption font-red-sunglo">
                                            <span class="caption-subject bold uppercase">Bình luận</span>
                                        </div>
                                    </div>
                                    <div class="mt-element-list">
                                        <div class="mt-list-container list-todo" id="accordion1" role="tablist" aria-multiselectable="true">
                                            @if(count($job->comment) > 0)
                                            <ul>
                                                @foreach($job->comment as $comment)
                                                <li class="mt-list-item">
                                                    {{$comment->user}}: {{$comment->comment}}
                                                </li>
                                                @endforeach
                                            </ul>
                                            @endif
                                        </div>
                                    </div>
                                    <div class="portlet-body form">
                                        <form role="form" action="{{route('editor-store-comment')}}" method="POST">
                                            {{ csrf_field() }}
                                            <input type="hidden" name="job_id" value="{{$job->id}}" >
                                            <div class="form-body">
                                                <div class="form-group">
                                                    <label>Bình Luận:</label>
                                                    <textarea name="comment" class="form-control" rows="3"></textarea> 
                                                </div>
                                            </div>
                                            <div class="form-actions">
                                                <button type="submit" class="btn blue">Bình luận</button>
                                                <button type="reset" class="btn green">Reset</button>
                                            </div>
                                        </form>
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