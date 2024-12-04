@extends('layouts.master')

@section('title', 'Default')

@section('css')
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/vendors/animate.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/vendors/prism.css') }}">
@endsection

@section('style')
@endsection

@section('breadcrumb-title')
    <h3>الصفحة الرئيسية</h3>
@endsection

@section('breadcrumb-items')
    {{-- <li class="breadcrumb-item">المستخدمين</li>
    <li class="breadcrumb-item active">Default</li> --}}
@endsection

@section('content')
    <div class="container-fluid">
        
    </div>
    
@endsection

@section('script')
@endsection
