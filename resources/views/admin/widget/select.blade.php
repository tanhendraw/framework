<div class="form-group">
    <label for="{{$field}}" class="text-capitalize">{{$title or $field}} </label>
    <select name="{{$field}}" id="{{$field}}">
        @foreach($option as $dataOption)
            @if(isset($data))
                <option value="{!! $dataOption['value'] !!}" @if($dataOption['value'] == $data->$field) selected @endif>{!! $dataOption['text'] !!}</option>
            @else
                <option value="{!! $dataOption['value'] !!}">{!! $dataOption['text'] !!}</option>
            @endif
        @endforeach
    </select>
    <div class="help-block with-errors"></div>
</div>