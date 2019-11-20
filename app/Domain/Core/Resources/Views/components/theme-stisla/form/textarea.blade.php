{{-- Example
@component('core::components.theme-stisla.form.textarea', [
    'label'     => 'Titulo',
    'required'  => true,
    'id'        => '', optional
    'name'      => '',
    'value'     => '',
    'error_msg' => '',
    'class_col' => '',
])@endcomponent
--}}
<div class="{{$class_col}}">
    <div class="form-group">
        <label>{{$label}}</label>
        <textarea class="form-control" name="{{$name}}" {{$required ? 'required=""' : ''}} rows="5" style="height: 0">{{$value}}</textarea>

        <div class="invalid-feedback">
            {{$error_msg}}
        </div>
    </div>
</div>

