
<div class="checkbox">
    @if(isset($data))
        <label for="{{$field}}" class="text-capitalize"> <input type="checkbox" value="1" name="{!! $field !!}" id="{{$field}}" {{$attr or ''}} @if($data[$field] == 1) checked @endif>{{$title or $field}} </label>
    @else
        <label for="{{$field}}" class="text-capitalize"> <input type="checkbox" value="1" name="{!! $field !!}" id="{{$field}}"  {{$attr or ''}}>{{$title or $field}} </label>
    @endif
    <div class="help-block with-errors"></div>
</div>