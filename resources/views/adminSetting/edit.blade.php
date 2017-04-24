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
@endsection

@section('script')
<script>
</script>
@endsection