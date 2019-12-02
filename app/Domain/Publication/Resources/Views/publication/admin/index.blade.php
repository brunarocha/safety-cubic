@extends('core::components.theme-stisla.layouts.main', ['title' => 'Publicações'])

@section('css_specific')
    <script src="{{asset('themes/stisla/modules/jquery-ui/jquery-ui.min.js')}}"></script>
    <link rel="stylesheet" href="{{asset('themes/stisla/modules/datatables/datatables.min.css')}}">
    <link rel="stylesheet" href="{{asset('themes/stisla/modules/datatables/DataTables-1.10.16/css/dataTables.bootstrap4.min.css')}}">
    <link rel="stylesheet" href="{{asset('themes/stisla/modules/datatables/Select-1.2.4/css/select.bootstrap4.min.css')}}">
@endsection

@section('container')

    @component('core::components.theme-stisla.partials.header', [
        'title'      => '',
        'breadcrumb' => [ 'Cadastros', 'Publicações' ]
    ]) @endcomponent

    <div class="section-body">

        @component('core::components.theme-stisla.alerts.sweetalert') @endcomponent

        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <h4>Publicações</h4>

                        <div class="card-header-action">
                            <a href="{{route('publication.admin.create')}}" class="btn btn-primary"> Cadastrar Publicação </a>
                        </div>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table table-striped" id="table-1">
                                <thead>
                                    <tr>
                                        <th>Título</th>
                                        <th>Data</th>
                                        <th>Autor</th>
                                        <th>Ações</th>
                                    </tr>
                                </thead>

                                <tbody>
                                    @foreach($publications as $publication)
                                        <tr>
                                            <td>{{$publication->title}}</td>
                                            <td>{{date('d/m/Y', strtotime($publication->date))}}</td>
                                            <td>{{$publication->user->name}}</td>
                                            <td>
                                                <a href="{{route('publication.admin.edit', $publication->id)}}" class="btn btn-primary">Editar</a>
                                                {{--<a href="#" class="btn btn-secondary">Detail</a>--}}
                                               {{-- <a href="#" class="btn btn-danger">Excluir</a>--}}

                                                <a class="btn btn-danger" style="color: #fff;" onclick="event.preventDefault();
                                                    swal({
                                                        title: 'Tem certeza que deseja excluir a publicação?',
                                                        text: '',//'You wont be able to revert this!',
                                                        icon: 'warning',
                                                        buttons: true,
                                                        dangerMode: true,
                                                    }).then((willDelete) => {
                                                        if (willDelete) {
                                                            var form = document.getElementById('publication-delete-form');
                                                            form.action = '/cadastros/publicacoes/{{$publication->id}}';
                                                            form.submit();
                                                        }
                                                    });">Excluir</a>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>

                            <!--begin: Form for delete -->
                            <form  id="publication-delete-form" action="" method="POST" style="display: none;">
                                <input type="hidden" name="_method" value="DELETE">
                                <input type="hidden" name="_token" value="{{csrf_token()}}">
                                <button type="submit" style="display: none;"></button>
                            </form>
                            <!--end: Form for delete -->
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