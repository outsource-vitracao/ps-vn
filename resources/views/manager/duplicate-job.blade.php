@extends('manager.layout.master')

@section('content')

<div class="row">
    <div class="col-md-12 ">
        <!-- BEGIN SAMPLE FORM PORTLET-->
        <div class="portlet light bordered">
            <div class="portlet-title">
                <div class="caption font-red-sunglo">
                    <span class="caption-subject bold uppercase">Tạo Job</span>
                </div>
            </div>
            <div class="portlet-body form">
                <form role="form" action="{{route('manager-store-job')}}" method="POST">
                    {{ csrf_field() }}
                    <input type="hidden" name="id" value="{{$job->id}}" >
                    <div class="form-body">
                        <div class="form-group">
                            <label>Tên Job:</label>
                            <input class="form-control spinner" type="text" placeholder="Tên Job" name="name" value="{{$job->name}}"> 
                        </div>
                    
                        <div class="form-group">
                            <label>Tên khách hàng:</label>
                            <input class="form-control spinner" type="text" placeholder="Tên khách hàng" name="client" value="{{$job->client}}"> 
                        </div>

                        <div class="form-group">
                            <label>Số lượng ảnh:</label>
                            <input class="form-control spinner" type="number" placeholder="Số lượng ảnh" name="total" value="{{$job->total}}"> 
                        </div>

                        <div class="form-group">
                            <label>Style:</label>
                            <select class="form-control" name="style" >
                                <option selected>{{$job->style}}</option>
                                <option>SE and TV</option>
                                <option>SE</option>
                                <option>SE Extra</option>
                            </select>
                        </div>

                        <div class="form-group">
                            <label>Link Download:</label>
                            <input class="form-control spinner" type="text" placeholder="Link Download" name="linkdownload" value="{{$job->linkdownload}}"> 
                        </div>
                        
                        <div class="form-group">
                            <label>Chú thích:</label>
                            <textarea class="form-control" rows="3" name="note" >{{$job->note}}</textarea> 
                        </div>
                    </div>
                    <div class="form-actions">
                        <button type="submit" class="btn blue">Tạo</button>
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