{{-- Example
@component('core::components.theme-stisla.form.input-text', [
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
        <input type="text"
               class="form-control"
               {{$required ? 'required=""' : ''}}
               {{isset($id) ? "id=$id" : ''}}
               name="{{$name}}"
               value="{{$value}}">
        <div class="invalid-feedback">
            {{$error_msg}}
        </div>
    </div>
</div>