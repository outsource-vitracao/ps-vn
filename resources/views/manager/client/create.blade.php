@extends('manager.layout.master')

@section('content')

<div class="row">
    <div class="col-md-12 ">
        <!-- BEGIN SAMPLE FORM PORTLET-->
        <div class="portlet light bordered">
            <div class="portlet-title">
                <div class="caption font-red-sunglo">
                    <span class="caption-subject bold uppercase">Create Client</span>
                </div>
            </div>
            <div class="portlet-body form">
                <form role="form" action="{{route('manager-store-order')}}" method="POST">
                    {{ csrf_field() }}
                    <div class="form-body">
                        <div class="form-group">
                            <label>Name:</label>
                            <input class="form-control spinner" name="name" type="text"> 
                        </div>

                        <div class="form-group">
                            <label>Style:</label>
                            <select class="form-control select2" id="single" name="style_id" data-placeholder="Choose Style">
                                <option ></option>
                                @foreach($styles as $style)
                                <option value="{{$style->id}}">{{$style->name}}</option>
                                @endforeach
                            </select>
                        </div>
                        
                        <div class="form-group">
                            <label>Description:</label>
                            <textarea name="descrtiption" class="form-control" rows="3"></textarea> 
                        </div>
                    </div>
                    
                    <div class="form-actions">
                        <button type="submit" class="btn blue">Create Client</button>
                        <button type="reset" class="btn green">Reset</button>
                        <a href="{{url()->previous()}}" class="btn default">Cancel</a>
                    </div>
                </form>
            </div>
        </div>
        <!-- END SAMPLE FORM PORTLET-->
    </div>
</div>
@stop