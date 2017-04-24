
<p>Page : {!! $data->page !!}</p>
<p>Section : {!! $data->section !!}</p>
@include('admin.widget.textarea', ['field' => 'eng','attr' => 'required'])
@include('admin.widget.textarea', ['field' => 'idn','attr' => 'required'])


{{--@include('admin.widget.select', ['field' => 'category', 'option' => $option,'attr' => 'required'])--}}
{{--@include('admin.widget.input', ['field' => 'name','attr' => 'required'])--}}
{{--@include('admin.widget.textarea', ['field' => 'desc','attr' => 'required'])--}}
{{--@include('admin.widget.checkbox', ['field' => 'active'])--}}
