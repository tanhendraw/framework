
<div class="form-group">
    <label for="{{$field}}" class="text-capitalize">{{$title or $field}} </label>
    <input type="password" name="{{$field}}" data-match="#{{$matchWith}}" data-match-error="Password not match" class="form-control" id="{{$field}}" value="{{ $data[$field] or ''  }}" {{$attr or ''}}/>
    <div class="help-block with-errors"></div>
</div>