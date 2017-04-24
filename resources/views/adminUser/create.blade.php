@extends('admin.admin_template')

@section('content')
    <div class="row">
        <div class="col-lg-12">
            <h1>Add new {{$active}}</h1>
            @if ($errors->any())
                <ul class="alert alert-danger">
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            @endif
            {!! Form::open(['route' => 'admin'.$active.'.store', 'method' => 'POST','data-toggle'=>'validator','role'=>'form']) !!}
            @include('admin'.$active.'.form')
            @include('admin.widget.password', ['field' => 'password','attr' => 'required'])
            @include('admin.widget.cpassword', ['field' => 'cPassword','title' => 'Confirm password','matchWith' => 'password','attr' => 'required'])
            <button type="submit" class="btn btn-success">Add</button>
            {!! Form::close() !!}

        </div>
    </div>
@endsection

@section('script')
    <script>
    </script>
@endsection