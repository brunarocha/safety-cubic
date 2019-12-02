{{-- Example
@component('core::components.theme-stisla.form.input-text', [
    'label'     => 'Titulo',
    'required'  => true,
    'id'        => '', optional
    'name'      => '',
    'value'     => '',
    'error_msg' => '',
    'class_col' => '',
    'disabled'  => true,
])@endcomponent
--}}
<div class="{{$class_col}}">
    <div class="form-group">
        <label>{{$label}}</label>
        <input type="text"
               class="form-control"
               {{$required ? 'required' : ''}}
               id="{{isset($id) ? $id : $name}}"
               name="{{$name}}"
               value="{{$value}}"
               {{isset($disabled) ? "disabled": ""}}>
        @if(isset($error_msg))
            <div class="invalid-feedback">
                {{$error_msg}}
            </div>
        @endif
    </div>
</div>