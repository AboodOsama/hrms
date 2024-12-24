@extends('layouts.master')
@section('title', 'Project List')

@section('css')

@endsection

@section('style')
<link rel="stylesheet" type="text/css" href="{{ asset('assets/css/vendors/animate.css')}}">
<link rel="stylesheet" type="text/css" href="{{ asset('assets/css/vendors/date-picker.css')}}">
<link rel="stylesheet" type="text/css" href="{{ asset('assets/css/vendors/dropzone.css')}}">
@endsection

@section('breadcrumb-title')
<h3>Project Create</h3>
@endsection

@section('breadcrumb-items')
<li class="breadcrumb-item">Project</li>
<li class="breadcrumb-item active">Project Create</li>
@endsection

@section()
<form class="card-body" method="POST" action="{{ url('/vacation/store') }}">
    <div class="form theme-form">
      <div class="row">
        <div class="col">
          <div class="mb-3">
            <label>Project Title</label>
            <input name="emp_id" class="form-control" type="text" placeholder="Project name *" required>
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-sm-4">
          <div class="mb-3">
            <label>Vacation Type</label>
            <select name="vacation_type"  class="form-select" required>
              <option>Hourly</option>
              <option>Fix price</option>
            </select>
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-sm-4">
          <div class="mb-3">
            <label>Starting date</label>
            <input name="start_date" class="datepicker-here form-control" type="text" required data-language="en">
          </div>
        </div>
        <div class="col-sm-4">
          <div class="mb-3">
            <label>Ending date</label>
            <input name="end_date" class="datepicker-here form-control" type="text"  data-language="en" required>
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col">
          <div class="mb-3">
            <label>Enter some Details</label>
            <input name="status" class="form-control" id="exampleFormControlTextarea4" rows="3" required></input>
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col">
          <div class="mb-3">
            <label>Upload project file</label>
            <form  name="profile_img" class="dropzone" id="singleFileUpload" type="file" action="#">
              <div class="dz-message needsclick">
                <i class="icon-cloud-up"></i>
                <h6>Drop files here or click to upload.</h6>
                <span class="note needsclick">(This is just a demo dropzone. Selected files are <strong>not</strong> actually uploaded.)</span>
              </div>
            </form>
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col">
          <div><a class="btn btn-success me-3" href="{{ route('VacationAdd') }}">Add</a><a class="btn btn-danger" href="#">Cancel</a></div>
        </div>
      </div>
    </div>
  </form>
@endsection