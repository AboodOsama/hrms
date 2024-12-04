@extends('layouts.master')

@section('title', 'Default')

@section('css')
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/vendors/animate.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/vendors/prism.css') }}">
@endsection

@section('style')
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/vendors/select2.css') }}">
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
                action="{{ url('/employee/' . $employee->id . '/update') }}">
                @csrf
                @method('PUT')
                <div class="card-header">
                    <h4 class="card-title mb-0">تعديل متدرب</h4>
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
                                <input name="name" class="form-control" type="text" placeholder="اسم المتدرب"
                                    value="{{ $employee->name }}" required>
                            </div>
                        </div>
                        <div class="col-sm-6 col-md-6">
                            <div class="mb-3">
                                <label class="form-label">الاسم بالانجليزي</label>
                                <input name="ename" class="form-control" type="text" placeholder="English Name"
                                    value="{{ $employee->ename }}" required>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-6 col-md-6">
                            <div class="mb-3">
                                <label class="form-label">الوظيفة</label>
                                <input name="position" class="form-control" type="text" placeholder="المسمى الوظيفي"
                                    value="{{ $employee->position }}">
                            </div>
                        </div>
                        <div class="col-sm-6 col-md-6">
                            <div class="mb-3">
                                <label class="form-label">الإدارة/القسم</label>
                                <input name="department" class="form-control" type="text" placeholder="الإدارة/القسم"
                                    value="{{ $employee->department }}">
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-6 col-md-6">
                            <div class="mb-3">
                                <div class="col-form-label pt-0">الشركة:</div>
                                <select class="js-example-basic-single col-sm-12 job-select2" name="company_id" required>
                                    <optgroup label="اختر الشركة">
                                        @foreach ($companies as $company)
                                            <option value="{{ $company->id }}"
                                                {{ $company->id == $employee->company_id ? 'selected' : '' }}>
                                                {{ $company->name }}</option>
                                        @endforeach
                                    </optgroup>
                                </select>
                            </div>
                        </div>
                        <div class="col-sm-6 col-md-6">
                            <div class="mb-3">
                                <div class="col-form-label pt-0">الشركة:</div>
                                <select class="form-select" style="line-height: 2.1;" name="sex" required>
                                    <optgroup label="الجنس">
                                            <option value="ذكر" {{ $employee->sex == "ذكر" ? 'selected' : '' }}>ذكر</option>
                                            <option value="أنثى" {{ $employee->sex == "أنثى" ? 'selected' : '' }}>أنثى</option>
                                    </optgroup>
                                </select>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card-footer text-end">
                    <input class="btn btn-primary" type="submit" value="تعديل متدرب">
                </div>
            </form>
        </div>
    </div>

@endsection

@section('script')
    <script src="{{ asset('/assets/js/select2/select2.full.min.js') }}"></script>
    <script src="{{ asset('/assets/js/select2/select2-custom.js') }}"></script>
@endsection
