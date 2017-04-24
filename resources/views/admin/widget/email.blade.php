
<div class="form-group">
    <label for="{{$field}}" class="text-capitalize">{{$title or $field}} </label>
    <input type="email" name="{{$field}}" class="form-control" id="{{$field}}" value="{{ $data[$field] or ''  }}" {{$attr or ''}}/>
    <div class="help-block with-errors"></div>
</div>