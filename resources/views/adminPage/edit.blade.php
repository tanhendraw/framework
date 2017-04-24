@extends('admin.admin_template')

@section('content')
    <div class="col-xs-12">
        @if (Session::has('message'))
            <div class="alert alert-info">{{ Session::get('message') }}</div>
        @endif
        {!! Form::model($data, ['route' => ['admin'.$active.'.update', $data->id], 'method' => 'PUT','data-toggle'=>'validator','role'=>'form']) !!}
            @include('admin'.$active.'.form')
            <button type="submit" class="btn btn-success">Submit</button>
        {!! Form::close() !!}
    </div>
    @foreach($image as $i)
        <div class="col-xs-12" style="padding-top: 20px;">
            <h3 style="text-transform: capitalize;">{!! $i !!}</h3>
            <img src="{!! asset($data->$i) !!}" alt="" width="300px">
            {!! Form::open(array('url'=>'admin/upload','method'=>'POST', 'files'=>true)) !!}
            <input type="hidden" name="folder" value="{!! $active !!}" />
            <input type="hidden" name="url" value="{!! Request::url() !!}" />
            <input type="hidden" name="id" value="{!! $data->id !!}" />
            <input type="hidden" name="table" value="{!! $active !!}" />
            <input type="hidden" name="column" value="{!! $i !!}" />
            <div class="control-group">
                <div class="controls">
                    {!! Form::file('image') !!}
                    <p class="errors">{!!$errors->first('image')!!}</p>
                    @if(Session::has('error'))
                        <p class="errors">{!! Session::get('error') !!}</p>
                    @endif
                </div>
            </div>
            <div id="success"> </div>
            {!! Form::submit('Submit', array('class'=>'send-btn')) !!}
            {!! Form::close() !!}
        </div>
    @endforeach
@endsection

@section('script')
<script>
</script>
@endsection