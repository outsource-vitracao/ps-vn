@extends('admin.layout.master')

@section('content')

<div class="row">
    <div class="col-md-12 ">
        <!-- BEGIN SAMPLE FORM PORTLET-->
        <div class="portlet light bordered">
            <div class="portlet-title">
                <div class="caption font-red-sunglo">
                    <span class="caption-subject bold uppercase">Tạo Style</span>
                </div>
            </div>
            <div class="portlet-body form">
                <form role="form" action="{{route('admin-update-style')}}" method="POST">
                    {{ csrf_field() }}
                    <input type="hidden" name="id" value="{{$style->id}}" >
                    <div class="form-body">
                        <div class="form-group">
                            <label>Tên Style:</label>
                            <input class="form-control spinner" type="text" placeholder="Tên Style" name="name" value="{{$style->name}}"> 
                        </div>
                    

                        <div class="form-group">
                            <label>Thời gian làm:</label>
                            <input class="form-control spinner" type="number" placeholder="Thời gian làm" name="time" value="{{$style->time}}"> 
                        </div>

                        
                        <div class="form-group">
                            <label>Chú thích:</label>
                            <textarea class="form-control" rows="3" name="description" value="{{$style->description}}"></textarea> 
                        </div>
                    </div>
                    <div class="form-actions">
                        <button type="submit" class="btn blue">Sửa</button>
                        <button type="reset" class="btn green">Reset</button>
                        <a href="{{url()->previous()}}" class="btn default">Thoát</a>
                    </div>
                </form>
            </div>
        </div>
        <!-- END SAMPLE FORM PORTLET-->
    </div>
</div>

@stop