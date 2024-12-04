@extends('layouts.master')

@section('title', 'Default')

@section('css')
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/vendors/animate.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/vendors/prism.css') }}">
@endsection

@section('style')
@endsection

@section('breadcrumb-title')
    <h3>إضافة مستخدم</h3>
@endsection

@section('breadcrumb-items')
    <li class="breadcrumb-item">المستخدمين</li>
    <li class="breadcrumb-item active">إضافة مستخدم</li>
@endsection

@section('content')
    <div class="container-fluid">
        <div class="col-xl-8">
            <form class="card" method="POST" enctype="multipart/form-data" action="{{ url('/users/store') }}">
                @csrf
                <div class="card-header">
                    <h4 class="card-title mb-0">إضافة مستخدم</h4>
                    <div class="card-options"><a class="card-options-collapse" href="#"
                            data-bs-toggle="card-collapse"><i class="fe fe-chevron-up"></i></a><a
                            class="card-options-remove" href="#" data-bs-toggle="card-remove"><i
                                class="fe fe-x"></i></a></div>
                </div>
                <div class="card-body">
                    <div class="row">
                        <div class="col-sm-6 col-md-6">
                            <div class="mb-3">
                                <label class="form-label">الاسم</label>
                                <input name="name" class="form-control" type="text" placeholder="اسم المستخدم"
                                    required>
                            </div>
                        </div>
                        <div class="col-sm-6 col-md-6">
                            <div class="mb-3">
                                <label class="form-label">الإيميل</label>
                                <input name="email" class="form-control" type="email" placeholder="test@womyemen.com"
                                    required>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="mb-3">
                                <label class="form-label">كلمة المرور</label>
                                <input name="password" class="form-control" type="password" placeholder="**********"
                                    required>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="mb-3">
                                <label class="form-label" for="formFile">صورة البروفايل</label>
                                <input name="profile_img" class="form-control" id="formFile" type="file">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card-footer text-end">
                    <input class="btn btn-primary" type="submit" value="إضافة متسخدم">
                </div>
            </form>
        </div>

    </div>

@endsection

@section('script')
@endsection
