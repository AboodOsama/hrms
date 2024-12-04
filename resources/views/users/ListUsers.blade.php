@extends('layouts.master')

@section('title', 'Default')

@section('css')
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/vendors/animate.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/vendors/prism.css') }}">
@endsection

@section('style')
@endsection

@section('breadcrumb-title')
    <h3>إدارة المستخدمين</h3>
@endsection

@section('breadcrumb-items')
    <li class="breadcrumb-item">المستخدمين</li>
    <li class="breadcrumb-item active">إدارة المستخدمين</li>
@endsection

@section('content')
    <div class="container-fluid">
        <div class="row">
            @foreach ($users as $user)
                <div class="col-xl-6 col-sm-12 col-xxl-6 col-ed-6 box-col-6">
                    <div class="card social-profile">
                        <div class="card-body">
                            <div class="social-img-wrap">
                                <div class="social-img">
                                    <img class="img-fluid" src="{{ asset('storage/profile_images/' . $user->profile_img) }}"
                                        alt="profile">

                                </div>
                                <div class="edit-icon">
                                    @if ($user->status == 'active')
                                        <svg>
                                            <use href="../assets/svg/icon-sprite.svg#profile-check"></use>
                                        </svg>
                                    @endif

                                </div>
                            </div>
                            <div class="social-details">
                                <h4 class="mb-1"><a href="">{{ $user->name }}</a></h4>
                                <p class="mb-1">(
                                    @if ($user->auth == 1)
                                        مسؤول
                                    @else
                                        مستخدم عادي
                                    @endif
                                    )
                                </p>
                                <span class="f-light">{{ $user->email }}</span>
                            </div>
                            <br>
                            <div class="row">
                                <div class="col-4">
                                    <a class="btn btn-primary btn-sm" href="{{ url('/users/' . $user->id . '/edit') }}"> <i
                                            class="fa fa-pencil"></i> تعديل </a>
                                </div>
                                <div class="col-4">
                                    <form action="{{ route('users.toggle-status', $user) }}" method="POST">
                                        @csrf
                                        @method('PUT')
                                        @if ($user->status == 'active')
                                            <button class="btn btn-success btn-sm" type="submit"> <i
                                                    class="fa fa-check"></i> نشط</button>
                                        @else
                                            <button class="btn btn-info btn-sm" type="submit"> <i class="fa fa-times"></i>
                                                غير نشط</button>
                                        @endif

                                    </form>
                                </div>
                                <div class="col-4">
                                    <form action="{{ route('users.destroy', $user) }}" method="POST">
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
