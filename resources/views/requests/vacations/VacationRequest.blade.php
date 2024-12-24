@extends('layouts.master')

@section('title', 'Default')

@section('css')
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/vendors/animate.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/vendors/prism.css') }}">
@endsection

@section('style')
@endsection

@section('breadcrumb-title')
    <h3>إنشاء طلب اجازة</h3>
@endsection

@section('breadcrumb-items')
    <li class="breadcrumb-item">طلباتي</li>
    <li class="breadcrumb-item active"> طلب اجازة</li>
@endsection

@section('content')

<section class="content">
      <div class="container-fluid">
        
<div class="row">
    <div class="col-12">
        <div class="card card-warning card-outline">
            <div class="card-header">
                <h5 class="m-0">ملاحظات</h5>
            </div>
            <div class="p-3">
                <ul class="mb-0">
                    <li>رصيد إجازتك لـ <u>الإجازة الشخصية</u>:
                        <b>0 الأيام</b>.
                    </li>
                    <li>سيطلب منك اختيار أحد انواع الإجازة التالية:
                        <ul>
                            <li><b>شخصية:</b>
                                وهي إجازة مدفوعة الأجر تستطيع أخذها أي وقت، ولكن دون مجاوزة قدر رصيدك.
                            </li>
                            <li><b>مبررة:</b>
                                وهي إجازة مدفوعة الأجر، ليس لها رصيد محدد، تُؤخذ في الحالات العرضية كالمرض.
                            </li>
                            <li><b>بدون راتب:</b>
                                وهي إجازة غير مدفوعة الأجر، لذلك ليس لها رصيد، وسيتم خصم أجر أيام العمل المتغيب عنها من الراتب.
                            </li>
                        </ul>
                    </li>
                    <li>لن تُقبل الإضافة إذا عارضت وقت أجازة آخر.</li>
                    <li>الحقول المعلّمة بـ(*) الزامية.</li>
                </ul>
            </div>
        </div>
    </div>
</div>
<form method="POST" enctype="multipart/form-data" action="{{ url('/vacations/store') }}">
    @csrf
    {{-- <input type="hidden" name="user_id" value="{{ $user->id }}"> --}}
    <input type="hidden" name="csrfmiddlewaretoken" value="2ZUh01EcJUqlwE01oybdTcXc7ma7ImkuIwNdTB7oV0YDukGux5JhF7xjACGgbfar">
    <div class="row">
        <div class="col-12">
            <div class="card card-primary">
                <div class="card-header">
                    <h3 class="card-title">معلومات الإجازة</h3>
                    <div class="card-tools">
                        <button type="button" class="btn btn-tool" data-card-widget="collapse" data-toggle="tooltip" title="Collapse">
                            <i class="fas fa-minus"></i>
                        </button>
                    </div>
                </div>
                <div class="card-body">
                    
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="id_start">تاريخ البداية*</label>
                                


<input type="date" name="start_date" class=" form-control" required="" id="id_start">

                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="id_end">تاريخ النهاية*</label>
                                


<input type="date" name="end_date" class=" form-control" required="" id="id_end">

                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="id_leave_type">نوع الإجازة*</label>
                                


<select name="vacation_type" class=" form-control" id="id_leave_type">
  <option value="1" selected="">شخصية</option>

  <option value="2">مبررة</option>

  <option value="3">غير مدفوعة</option>

</select>

                            </div>
                        </div>
                        {{-- <div class="col-md-6">
                            <label for="id_duration">المدة</label>
                            <div class="input-group">
                                <input type="number" name="RemainingDates" min="1" step="1" class=" form-control" id="id_duration" autocomplete="off">
                                <div class="input-group-append">
                                    <span class="input-group-text">يوم</span>
                                </div>
                            </div>
                        </div> --}}
                    </div>

                </div>
                <!-- /.card-body -->
                <div class="card-footer">
                    
                    <input type="submit" value="طلب إجازة" class="btn btn-primary ">
                    
                    <a href="/requests/" class="btn btn-secondary">إلغاء</a>
                </div>
            </div>
            <!-- /.card -->
        </div>

    </div>
</form>

      </div><!-- /.container-fluid -->
    </section>

@endsection

@section('script')
@endsection
