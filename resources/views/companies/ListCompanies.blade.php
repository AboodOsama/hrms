@extends('layouts.master')

@section('title', 'Default')

@section('css')
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/vendors/animate.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/vendors/prism.css') }}">
@endsection

@section('style')
@endsection

@section('breadcrumb-title')
    <h3>إدارة الشركات</h3>
@endsection

@section('breadcrumb-items')
    <li class="breadcrumb-item">الشركات</li>
    <li class="breadcrumb-item active">إدارة الشركات</li>
@endsection

@section('content')
    <div class="container-fluid">
        <div class="row">
            @foreach ($companies as $company)
                <div class="col-xl-4 col-sm-12 col-xxl-4 col-ed-4 box-col-4">
                    <div class="card social-profile">
                        <div class="card-body">
                            <div class="social-img-wrap">
                                <div class="social-img">
                                    <img class="img-fluid" src="{{ asset('storage/companies_images/' . $company->img) }}"
                                        alt="profile">

                                </div>
                            </div>
                            <div class="social-details">
                                <h4 class="mb-1"><a href="">{{ $company->name }}</a></h4>
                                <p class="mb-1">(
                                    {{ $company->industry->name }}
                                    )
                                </p>
                                <span class="f-light">{{ $company->address }}</span>
                            </div>
                            <br>
                            <div class="row">
                                <div class="col-6">
                                    <a class="btn btn-primary btn-sm"
                                        href="{{ url('/company/' . $company->id . '/edit') }}"> <i class="fa fa-pencil"></i>
                                        تعديل </a>
                                </div>
                                <div class="col-6">
                                    <form action="{{ route('company.destroy', $company) }}" method="POST">
                                        @csrf
                                        @method('DELETE')
                                        <button class="btn btn-danger btn-sm" type="submit"> <i class="fa fa-trash"></i>
                                            Delete</button>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>

@endsection

@section('script')
@endsection
