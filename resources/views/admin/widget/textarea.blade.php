<div class="form-group">
    <label for="{{$field}}" class="text-capitalize">{{$title or $field}} </label>
    <textarea name="{{$field}}" class="form-control" id="{{$field}}" {{$attr or ''}} rows="7" >{{ $data[$field] or ''   }}</textarea>
    <div class="help-block with-errors"></div>
</div>

<script>
    var textarea = '{!! $field !!}';
    CKEDITOR.replace( textarea );
</script>