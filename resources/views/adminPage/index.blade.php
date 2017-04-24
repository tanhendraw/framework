@extends('admin.admin_template')

@section('content')
    <div class="box">
        <div class="box-header">
          <h3 class="box-title">Database</h3>
            <div class="text-right">
                <a class="btn btn-success" href="{{route ('admin'.$active.'.create')}}">+ Add new {{$active}}</a>
            </div>
        </div>
        <!-- /.box-header -->
        <div class="box-body">
          <table id="example1" class="table table-bordered table-striped table-hover">
            <thead>
                <tr>
                    @foreach ($title as $data)
                    <th style="text-transform:capitalize">{{$data}}</th>
                    @endforeach
                    <th style="text-transform:capitalize">&nbsp;</th>
                </tr>
            </thead>
            <tbody>
                @foreach($database as $data)
                <tr>
                    @foreach($field as $fData)
                        <td>{!! substr($data->$fData,0,50) !!}</td>
                    @endforeach

                    {{--*************** IF THERE IS IMAGE ***************--}}
                    @if($data->image)
                        <td><img src="{!! asset($data->image) !!}" alt="" width="200"></td>
                    @else
                        <td></td>
                    @endif

                    {{--*************** IF THERE IS CHECKBOX ***************--}}
                    {{--<td>--}}
                        {{--@if($data->is_active == 1)--}}
                            {{--<span class="label label-success">Active</span>--}}
                        {{--@else--}}
                            {{--<span class="label label-default">Not active</span>--}}
                        {{--@endif--}}
                    {{--</td>--}}

                    <td class="text-right">
                        <a href="{{route('admin'.$active.'.edit',$data->id)}}" class="btn btn-warning"><i class="glyphicon glyphicon-pencil"></i></a>&nbsp;
                        {!! Form::open(['url' => 'admin'.$active.'/' . $data->id, 'class' => 'pull-right']) !!}
                            {!! Form::hidden('_method', 'DELETE') !!}
                            <button class="btn btn-danger"><i class="glyphicon glyphicon-trash"></i></button>
                        {!! Form::close() !!}
                    </td>
                </tr>
                @endforeach
            </tbody>
          </table>
        </div>
    </div>
@endsection

@section('script')
<script>
  $(function () {
    $("#example1").DataTable();
    $('#example2').DataTable({
      "paging": true,
      "lengthChange": false,
      "searching": false,
      "ordering": true,
      "info": true,
      "autoWidth": false
    });
  });
</script>
@endsection