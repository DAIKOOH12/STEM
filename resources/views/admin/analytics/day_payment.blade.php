@extends('layout.admin_master')

@section('content')
<div class="card" style="padding:10px">
    <h5 class="card-header">Danh sách hóa đơn</h5>
    <div class="card-action-element ms-auto py-0">
    <div class="dropdown">
      <button type="button" class="btn dropdown-toggle p-0" data-bs-toggle="dropdown" aria-expanded="false"><i class="icon-base bx bx-calendar"></i></button>
      <ul class="dropdown-menu dropdown-menu-end">
        <li><a href="javascript:void(0);" class="dropdown-item d-flex align-items-center">Today</a></li>
        <li><a href="javascript:void(0);" class="dropdown-item d-flex align-items-center">Yesterday</a></li>
        <li><a href="javascript:void(0);" class="dropdown-item d-flex align-items-center">Last 7 Days</a></li>
        <li><a href="javascript:void(0);" class="dropdown-item d-flex align-items-center">Last 30 Days</a></li>
        <li>
          <hr class="dropdown-divider">
        </li>
        <li><a href="javascript:void(0);" class="dropdown-item d-flex align-items-center">Current Month</a></li>
        <li><a href="javascript:void(0);" class="dropdown-item d-flex align-items-center">Last Month</a></li>
      </ul>
    </div>
</div>
@endsection

@section(section: 'script')
<script src="{{url('js/admin/day-analytics.js')}}"></script>
@endsection