@extends('core::components.theme-stisla.layouts.main', ['title' => 'Dashboard'])

@section('css_specific') @endsection

@section('container')

    @component('core::components.theme-stisla.partials.header', [
        'title'      => 'Treinamento - '.$training->name_pt_br,
        'breadcrumb' => ['Treinamentos', 'Material Didático']
    ]) @endcomponent


    <div class="row">
        <div class="col-lg-3 col-md-3 col-sm-12">
            <div class="card card-statistic-2">
                <div class="card-stats">
                    <div class="card-stats-title text-right">
                        Download
                    </div>
                    {{--<div class="card-stats-items">
                        <div class="card-stats-item">
                            <div class="card-stats-item-count ">
                                <i class="fas fa-file" style="font-size: 25px; float: center;"></i>
                            </div>
                            --}}{{--<div class="card-stats-item-label">Pending</div>--}}{{--
                        </div>
                    </div>--}}
                </div>
                <div class="card-icon"> <i class="fas fa-file" style="font-size: 20px"></i></div>
                <div class="card-wrap">
                    <div class="card-header">
                        <i class="fas fa-file text-center" style="font-size: 25px;"></i>
                        <h4 style="color: #212529">Livro Didático Teste</h4>

                    </div>{{--
                    <div class="card-body">
                        59
                    </div>--}}
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-lg-4 col-md-4 col-sm-12">
                <div class="card card-statistic-2">
                    <div class="card-stats">
                        <div class="card-stats-title text-right">Download</div>
                        {{--<div class="card-stats-items">--}}
                            <div class="card-stats-item">
                                <div class="card-stats-item-count">24</div>
                                <div class="card-stats-item-label">Pending</div>
                            </div>
                        {{--</div>--}}
                    </div>
                    <div class="card-icon"></div>
                    {{--<div class="card-wrap">
                       --}}{{-- <div class="card-header">
                            <h4>Total Orders</h4>
                        </div>
                        <div class="card-body">
                            59
                        </div>--}}{{--
                    </div>--}}
                </div>
            </div>
            <div class="col-lg-4 col-md-4 col-sm-12">
                <div class="card card-statistic-2">
                    <div class="card-chart">
                        <canvas id="balance-chart" height="80"></canvas>
                    </div>
                    <div class="card-icon shadow-primary bg-primary">
                        <i class="fas fa-dollar-sign"></i>
                    </div>
                    <div class="card-wrap">
                        <div class="card-header">
                            <h4>Balance</h4>
                        </div>
                        <div class="card-body">
                            $187,13
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-4 col-sm-12">
                <div class="card card-statistic-2">
                    <div class="card-chart">
                        <canvas id="sales-chart" height="80"></canvas>
                    </div>
                    <div class="card-icon shadow-primary bg-primary">
                        <i class="fas fa-shopping-bag"></i>
                    </div>
                    <div class="card-wrap">
                        <div class="card-header">
                            <h4>Sales</h4>
                        </div>
                        <div class="card-body">
                            4,732
                        </div>
                    </div>
                </div>
            </div>
        </div>




@endsection


@section('js_specific')
    <!-- Page Specific JS File -->
    <script src="{{asset('themes/stisla/js/page/index.js')}}"></script>

@endsection