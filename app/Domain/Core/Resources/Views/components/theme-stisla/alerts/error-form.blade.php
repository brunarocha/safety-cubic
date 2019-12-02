{{-- Use: 
    @include('core::components.theme-stisla.alerts.error-form')
--}}

@if(count($errors))
    <div class="form-group m-form__group row">
        <div class="col-lg-12"></div>
        <div class="col-lg-12 m--align-left">
            <div class="alert alert-danger" style="background-color: #e4605e">
                @foreach($errors->all() as $error)
                    <li>{{$error}}</li>
                @endforeach
            </div>
        </div>
        <div class="col-lg-12"></div>
    </div>
@endif