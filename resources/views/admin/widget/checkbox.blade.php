
<div class="checkbox">
    @if(isset($data))
        <label for="{{$field}}" class="text-capitalize"> <input type="checkbox" name="{!! $field !!}" id="{{$field}}" value="1" {{$attr or ''}} @if($data[$field] == 1) checked @endif>{{$title or $field}} </label>
    @else
        <label for="{{$field}}" class="text-capitalize"> <input type="checkbox" name="{!! $field !!}" id="{{$field}}" value="1" {{$attr or ''}}>{{$title or $field}} </label>
    @endif
    <div class="help-block with-errors"></div>
</div>