@extends('layouts.master')

@section('title', 'Default')

@section('css')
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/vendors/animate.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/vendors/prism.css') }}">
@endsection

@section('style')
    <link rel="stylesheet" type="text/css" href="{{ asset('/assets/css/vendors/datatables.css') }}">
@endsection

@section('breadcrumb-title')
    <h3>إدارة المتدربين</h3>
@endsection

@section('breadcrumb-items')
    <li class="breadcrumb-item">المتدربين</li>
    <li class="breadcrumb-item active">إدارة المتدربين</li>
@endsection

@section('content')
    <div class="container-fluid">
        <div class="row">
            <!-- Zero Configuration  Starts-->
            <div class="col-sm-12">
                <div class="card">

                    <div class="card-body">
                        <div class="table-responsive" style="scrollbar-gutter: stable;">
                            <table class="display" id="basic-1">
                                <thead>
                                    <tr>
                                        <th></th>
                                        <th>الاسم</th>
                                        <th>Name</th>
                                        <th>الوظيفة</th>
                                        <th>الإدارة / القسم</th>
                                        <th>الشركة</th>
                                        <th>إدارة</th>
                                    </tr>
                                </thead>
                                <tbody>

                                    @foreach ($Employees as $employee)
                                        <tr>
                                            <td>
                                                @if ($employee->sex == 'ذكر')
                                                    <i style="color: rgb(18, 141, 255)" class="icofont icofont-business-man-alt-2"></i>
                                                    <span></span>
                                                @else
                                                    <i style="color: rgb(225, 24, 228)" class="icofont icofont-girl"></i>
                                                @endif
                                            </td>
                                            <td>{{ $employee->name }}</td>
                                            <td>{{ $employee->ename }}</td>
                                            <td>{{ $employee->position }}</td>
                                            <td>{{ $employee->department }}</td>
                                            <td>{{ $employee->company->name }}</td>
                                            <td>
                                                <ul class="action">
                                                    <li class="edit"> <a
                                                            href="{{ url('/employee/' . $employee->id . '/edit') }}"><i
                                                                class="icon-pencil-alt"></i></a>
                                                    </li>
                                                    <li class="delete">
                                                        <form action="{{ url('/employee/delete/' . $employee->id) }}"
                                                            method="POST">
                                                            @csrf
                                                            @method('DELETE')
                                                            <button type="submit"
                                                                style="background:none; border:none; padding:0; margin:0;">
                                                                <i class="icon-trash"></i>
                                                            </button>
                                                        </form>
                                                    </li>
                                                </ul>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Zero Configuration  Ends-->
        </div>
    </div>

@endsection

@section('script')
    <script src="{{ asset('/assets/js/datatable/datatables/jquery.dataTables.min.js') }}"></script>
    <script src="{{ asset('/assets/js/datatable/datatables/datatable.custom.js') }}"></script>
@endsection
