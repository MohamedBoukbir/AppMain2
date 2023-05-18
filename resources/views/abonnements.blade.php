@extends('dashboard')

@section('activate-abonnements')
active
@endsection
{{-- ////////////////////// --}}
@section('content')
    <div class="page-wrapper">
        <div class="content container-fluid">
            <div class="row">
                <div class="col-xl-12 col-sm-12 col-12">
                    <div class="breadcrumb-path mb-4">
                        <ul class="breadcrumb">
                            <li class="breadcrumb-item">
                                <a href="#"><img src="{{ asset('img/dash.png') }}" class="mr-2"
                                        alt="breadcrumb" />Home</a>
                            </li>
                            <li class="breadcrumb-item active">Abonnement</li>
                        </ul>
                        <h3>Abonnements</h3>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
