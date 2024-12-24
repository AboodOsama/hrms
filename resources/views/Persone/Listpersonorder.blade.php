@extends('layouts.master')
@section('title', 'File Manager')

@section('css')

@endsection

@section('style')
@endsection

@section('breadcrumb-title')
<h3>File Manager</h3>
@endsection

@section('breadcrumb-items')
<li class="breadcrumb-item">Apps</li>
<li class="breadcrumb-item">File Manager</li>
@endsection

@section('content')
<div class="container-fluid">
  <div class="row">
    <div class="col-xl-3 box-col-6 pe-0">
      <div class="file-sidebar">
        <div class="card">
          <form method="POST" action="{{ url('/vacation/create') }}" class="card-body">
            <ul>
              <li>
                <a class="btn btn-primary" ><i data-feather="home"></i>Vacations </a>
              </li>
              <li>
                <div class="btn btn-light"><i data-feather="folder"></i>Permission    </div>
              </li>
              <li>
                <div class="btn btn-light"><i data-feather="clock"></i>Loan    </div>
              </li>
              <li>
                <div class="btn btn-light"><i data-feather="star"></i>EditData      </div>
              </li>
              <li>
                <div class="btn btn-light"><i data-feather="alert-circle"></i>GeneralRequest        </div>
              </li>
            </ul>
          </form>
        </div>
      </div>
    </div>
    <div class="col-xl-9 col-md-12 box-col-12">
      <div class="file-content">
        <div class="card">
          <div class="card-header">
            <div class="media">
              <form class="form-inline" action="#" method="get">
                <div class="form-group mb-0">                                      <i class="fa fa-search"></i>
                  <input class="form-control-plaintext" type="text" placeholder="Search...">
                </div>
              </form>
              <div class="media-body text-end">
                <form class="d-inline-flex" action="#" method="POST" enctype="multipart/form-data" name="myForm">
                  <div class="btn btn-primary" onclick="getFile()"> <i data-feather="plus-square"></i>Add New</div>
                  <div style="height: 0px;width: 0px; overflow:hidden;">
                    <input id="upfile" type="file" onchange="sub(this)">
                  </div>
                </form>
                {{-- <div class="btn btn-outline-primary ms-2"><i data-feather="upload">   </i>Upload  </div> --}}
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
@endsection
