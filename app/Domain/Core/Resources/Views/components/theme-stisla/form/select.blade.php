{{-- Example
@component('core::components.theme-stisla.form.select', [
    'label'     => 'Titulo',
    'required'  => true,
    'id'        => '', optional
    'name'      => '',
    'value'     => '',
    'error_msg' => '',
    'class_col' => '',
    'items'     => $items
    'column_value' => 'id',
    'column_text'  => 'description',
])@endcomponent
--}}
<div class="{{$class_col}}">
    <div class="form-group">
        <label>{{$label}}</label>
        <select class="form-control"
            {{isset($id) ? "id=$id" : ''}}
            name="{{$name}}">
            @foreach($items as $item)
                <option value="{{$item[$column_value]}}"
                        @if($value == $item[$column_value]) selected @endif>
                    {{$item[$column_text]}}
                </option>
            @endforeach
        </select>

        <div class="invalid-feedback">
            {{$error_msg}}
        </div>
    </div>
</div>