@extends('layouts.master')

@section('title', 'Default')

@section('css')
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/vendors/animate.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/vendors/prism.css') }}">
@endsection

@section('style')
@endsection

@section('breadcrumb-title')
    <h3>تعديل شركة</h3>
@endsection

@section('breadcrumb-items')
    <li class="breadcrumb-item">الشركات</li>
    <li class="breadcrumb-item active">تعديل شركة</li>
@endsection

@section('content')
    <div class="container-fluid">
        <div class="col-xl-8">
            <form class="card" method="POST" enctype="multipart/form-data"
                action="{{ url('/company/' . $company->id . '/update') }}">
                @csrf
                @method('PUT')
                <div class="card-header">
                    <h4 class="card-title mb-0">تعديل شركة</h4>
                    <div class="card-options"><a class="card-options-collapse" href="#"
                            data-bs-toggle="card-collapse"><i class="fe fe-chevron-up"></i></a><a
                            class="card-options-remove" href="#" data-bs-toggle="card-remove"><i
                                class="fe fe-x"></i></a></div>
                </div>
                <div class="card-body">
                    <div class="row">
                        <div class="row">
                            <div class="col-sm-6 col-md-6">
                                <div class="mb-3">
                                    <label class="form-label">الاسم</label>
                                    <input name="name" class="form-control" value="{{ $company->name }}"
                                        placeholder="اسم الشركة" required>
                                </div>
                            </div>
                            <div class="col-sm-6 col-md-6">
                                <div class="mb-3">
                                    <label class="form-label" for="exampleFormControlSelect12">مجال الشركة</label>
                                    <select class="form-select btn-square digits" name="industry_id"
                                        id="exampleFormControlSelect12">
                                        @foreach ($industries as $industry)
                                            <option value="{{ $industry->id }}"
                                                {{ $company->industry_id == $industry->id ? 'selected' : '' }}>
                                                {{ $industry->name }}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="mb-3">
                                    <label class="form-label">عنوان الشركة</label>
                                    <input name="address" class="form-control" type="text"
                                        value="{{ $company->address }}" placeholder="مقر المركز الرئيس للشركة" required>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="mb-3">
                                    <label class="form-label" for="formFile">شعار الشركة</label>
                                    <input name="img" class="form-control" id="formFile" type="file">
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="mb-3">
                                    <label class="form-label">مسؤول الموارد البشرية</label>
                                    <input name="recipient" class="form-control" type="text"
                                        value="{{ $company->recipient }}" placeholder="اسم مسؤول الموارد البشرية في الشركة">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="mb-3">
                                    <label class="form-label">رقم الهاتف</label>
                                    <input name="recipient_phone" class="form-control" type="text"
                                        value="{{ $company->recipient_phone }}"
                                        placeholder="رقم مسؤول الموارد البشرية في الشركة">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card-footer text-end">
                        <input class="btn btn-primary" type="submit" value="تعديل شركة">
                    </div>
                </div>
            </form>
        </div>

    </div>

@endsection

@section('script')
@endsection
