@extends('core::components.theme-stisla.layouts.main', ['title' => 'Dashboard'])

@section('css_specific')
    <script src="{{asset('themes/stisla/modules/jquery-ui/jquery-ui.min.js')}}"></script>
    <link rel="stylesheet" href="{{asset('themes/stisla/modules/datatables/datatables.min.css')}}">
    <link rel="stylesheet" href="{{asset('themes/stisla/modules/datatables/DataTables-1.10.16/css/dataTables.bootstrap4.min.css')}}">
    <link rel="stylesheet" href="{{asset('themes/stisla/modules/datatables/Select-1.2.4/css/select.bootstrap4.min.css')}}">
@endsection

@section('container')

    @component('core::components.theme-stisla.partials.header', [
        'title'      => '',
        'breadcrumb' => [
            'Institucional',
            'Treinamentos'
        ]
    ]) @endcomponent

    <div class="section-body">

        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <h4>Treinamentos</h4>

                        {{--<div class="card-header-action">
                            <a href="{{route('admin.trainings.create')}}" class="btn btn-primary"> Cadastrar Treinamento </a>
                        </div>--}}
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table table-striped" id="table-1">
                                <thead>
                                    <tr>
                                        <th>Nome</th>
                                        <th>Categoria</th>
                                        <th>Carga Horária</th>
                                        <th>Ações</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach($trainings as $training)
                                        <tr>
                                            <td>{{$training->name_pt_br}}</td>
                                            <td>{{$training->category->name_pt_br}}</td>
                                            <td>{{$training->course_load}}</td>
                                            <td>
                                                {{--<a href="#" class="btn btn-secondary">Detail</a>--}}
                                                <a href="{{route('admin.trainings.edit', $training->id)}}" class="btn btn-primary">Editar</a>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>

@endsection


@section('js_specific')
    <!-- Page Specific JS File -->
    <script src="{{asset('themes/stisla/modules/datatables/datatables.min.js')}}"></script>
    <script src="{{asset('themes/stisla/modules/datatables/DataTables-1.10.16/js/dataTables.bootstrap4.min.js')}}"></script>
    <script src="{{asset('themes/stisla/modules/datatables/Select-1.2.4/js/dataTables.select.min.js')}}"></script>
    <script src="{{asset('themes/stisla/modules/jquery-ui/jquery-ui.min.js')}}"></script>

    <script src="{{asset('themes/stisla/js/page/modules-datatables.js')}}"></script>


@endsection