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

    <section class="content">
      <div class="container-fluid">
        

<div class="card">
    <div class="card-header text-center">
        <a class="btn btn-app" title="" data-toggle="tooltip" href="{{ route('VacationRequest') }}" data-original-title="إنشاء طلب">
            <i class="icofont icofont-toy-ball"></i> إجازة
        </a>
        <a class="btn btn-app" title="" data-toggle="tooltip" href="/attendance/RemoteWorkRequest/" data-original-title="إنشاء طلب">
            <i class="fa fa-home"></i> عمل عن بعد
        </a>
        <a class="btn btn-app" title="" data-toggle="tooltip" href="/attendance/TimeoffRequest/" data-original-title="إنشاء طلب">
            <i class="icofont icofont-plus-circle"></i> استئذان
        </a>
        <a class="btn btn-app" title="" data-toggle="tooltip" href="/attendance/Add/" data-original-title="إنشاء طلب" style="pointer-events: none;">
            <i class="icofont icofont-meeting-add"></i>إضافة سجل حضور
        </a>
        <a class="btn btn-app" title="" data-toggle="tooltip" href="/payroll/CreateLoan/" data-original-title="إنشاء طلب">
            <i class="fa fa-money"></i> قرض
        </a>
        <a class="btn btn-app" title="" data-toggle="tooltip" href="/user/change_profile_request/" data-original-title="إنشاء طلب">
            <i class="icofont icofont-law-document"></i> تعديل بيانات
        </a>
        <a class="btn btn-app" title="" data-toggle="tooltip" href="/general_request/" data-original-title="إنشاء طلب">
            <i class="fa fa-folder-open"></i> طلب عام/وثيقة
        </a>
    </div>
    <!-- /.card-header -->

    <div class="card-body">
        <div class="row">
            <div class="col-xl-3">
                <div class="nav flex-column nav-tabs h-100">
                
                <a class="nav-link active" href="?s=">
                    <b>جميع الطلبات</b>
                </a>
                <a class="nav-link " href="?t=_leave&amp;s=">
                     <i class="fas fa-umbrella-beach"></i> الإجازات
                </a>
                <a class="nav-link " href="?t=_remote&amp;s=">
                    <i class="fas fa-laptop-house"></i> عمل عن بعد
                </a>
                <a class="nav-link " href="?t=_timeoff&amp;s=">
                    <i class="fas fa-building-circle-arrow-right"></i> استئذان
                </a>
                <a class="nav-link " href="?t=_timesheet&amp;s=">
                   <i class="fas fa-calendar-day"></i> تعديلات سجلات الحضور
                </a>
                <a class="nav-link " href="?t=_loan&amp;s=">
                   <i class="fas fa-money-bill-transfer"></i> القروض
                </a>
                <a class="nav-link " href="?t=_petition&amp;s=">
                   <i class="fas fa-hands-helping"></i> العفو عن المخالفات
                </a>
                <a class="nav-link " href="?t=_profile&amp;s=">
                    <i class="fas fa-user-edit"></i> تعديل البيانات الشخصية
                </a>
                <a class="nav-link " href="?t=_general&amp;s=">
                    <i class="fas fa-folder-open"></i>  الطلبات العامة
                </a>
                </div>

            </div>
            <div class="col-xl-9">
                <div class="d-flex justify-content-end mb-3">
                    <div class="btn-group">
                        <a href="?t=" class="btn btn-sm btn-primary">الكل</a>
                        <a href="?s=1&amp;t=" class="btn btn-sm btn-default">بانتظار الموافقة</a>
                        <a href="?s=2&amp;t=" class="btn btn-sm btn-default">مقبول</a>
                        <a href="?s=3&amp;t=" class="btn btn-sm btn-default">مرفوض</a>
                        <a href="?s=4&amp;t=" class="btn btn-sm btn-default">ملغي</a>
                    </div>
                </div>
                <div class="row">
                
                    <div class="col-12">
                        <h5 class="text-center">لا يوجد طلبات لعرضها</h5>
                    </div>
                
                </div>
            </div>
         </div>
         <!--./row-->
    </div>
    <!-- /.card-body -->
</div>
<!--/.card-->


<!-- Cancel modal -->
<div class="modal" id="cancel-modal">
    <div class="modal-dialog modal-sm">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">متأكد من إلغاء الطلب؟</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">×</span>
                </button>
            </div>
            <div class="modal-body">
                <form id="cancel-form" method="post" enctype="multipart/form-data">
                    <input type="hidden" name="csrfmiddlewaretoken" value="4GQA9ot0pstdZFN0fVuHLfimeNnV4V0cKdJw2YWcBy1vXlttos2LxaStH3T4xOQ9">
                    <span>يمكنك أضافة ملاحظة أو مرفق اختياري:</span>
                <div class="form-group">


<textarea name="note" cols="40" rows="5" placeholder="اكتب ملاحظة ..." maxlength="512" class=" form-control" id="id_note"></textarea>
</div>
                <div class="form-group">
                    مرفق
                    <input type="file" name="attachment" accept=".pdf,.doc,.docx,.jpg,.png,.jfif" id="id_attachment">
                    <small>أقصى حجم هو 4 ميجابايت</small>
                </div>
                </form>
            </div>
            <div class="modal-footer">
                <button type="button" id="cancel-btn" class="btn btn-warning">نعم. ألغ الطلب</button>
            </div>
        </div>
        <!-- /.modal-content -->
    </div>
    <!-- /.modal-dialog -->
</div>
<!-- /.modal -->

      </div><!-- /.container-fluid -->
    </section>

@endsection

@section('script')
@endsection
