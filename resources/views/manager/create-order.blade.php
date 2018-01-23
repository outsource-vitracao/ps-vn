@extends('manager.layout.master')

@section('content')

<div class="row">
    <div class="col-md-12 ">
        <!-- BEGIN SAMPLE FORM PORTLET-->
        <div class="portlet light bordered">
            <div class="portlet-title">
                <div class="caption font-red-sunglo">
                    <span class="caption-subject bold uppercase">Tạo Order</span>
                </div>
            </div>
            <div class="portlet-body form">
                <form role="form" action="{{route('manager-store-order')}}" method="POST">
                    {{ csrf_field() }}
                    <input type="hidden" name="job_id" value="{{request()->job_id}}" >
                    <div class="form-body">
                        <div class="form-group">
                            <label>Số lượng ảnh:</label>
                            <input class="form-control spinner" name="total" type="number" placeholder="Số lượng ảnh"> 
                        </div>

                        <div class="form-group">
                            <label>Style:</label>
                            <select name="style" class="form-control">
                                <option>Retouch</option>
                            </select>
                        </div>
                        
                        <div class="form-group">
                            <label>Chú thích:</label>
                            <textarea name="note" class="form-control" rows="3"></textarea> 
                        </div>
                    </div>
                    <div class="form-actions">
                        <button type="submit" class="btn blue">Tạo Order</button>
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