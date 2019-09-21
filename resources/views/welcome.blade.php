@extends('layouts.app', ['class' => 'off-canvas-sidebar', 'activePage' => 'home','title' =>__('Material Dashboard'),'titlePage' => __('Material Dashboard')])
@if(auth())
    @php
        header("Location: " . URL::to('/home'), true, 302);
        exit();
    @endphp
@else
@section('content')
    <div class="container" style="height: auto;">
        <div class="row justify-content-center">
            <div class="col-lg-7 col-md-8">
                <h1 class="text-white text-center">{{ __('Welcome to Material Dashboard FREE Laravel Live Preview.') }}</h1>
            </div>
        </div>
    </div>
@endsection
@endif

