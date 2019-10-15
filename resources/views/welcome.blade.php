@extends('layouts.app')

@section('content-slider')
    {{-- @include('inc.slider')         --}}
    @include('inc.swiper')        
@endsection

@section('content')
    @include('inc.welcome')  
    {{-- @component('alert')
        <strong>Whoops!</strong> Something went wrong!
    @endcomponent   --}} 


    {{-- @alert(['type' => 'danger'])
    @slot('title')
        Forbidden
    @endslot
        You are not allowed to access this resource!
    @endalert --}}
    {{-- vue component --}}
    {{-- <example-component></example-component>  --}}

{{--     <passport-clients></passport-clients>
<passport-authorized-clients></passport-authorized-clients>
<passport-personal-access-tokens></passport-personal-access-tokens> --}}
@endsection

