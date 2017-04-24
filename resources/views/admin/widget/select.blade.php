
<div class="form-group">
    <label for="{{$field}}" class="text-capitalize">{{$title or $field}} </label>
    <select name="{{$field}}" id="{{$field}}">
        @foreach($option as $dataOption)
            <option value="{!! $dataOption['value'] !!}" @if($dataOption['value'] == $data->$field) selected @endif>{!! $dataOption['text'] !!}</option>
        @endforeach
    </select>
    <div class="help-block with-errors"></div>
</div>