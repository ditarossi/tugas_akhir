@extends('admin2.v_template')
@section('title')
<title>Tabel User</title>
@endsection

@section('content')
<!-- partial -->
<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>Skydash Admin</title>
  <!-- plugins:css -->
  <link rel="stylesheet" href="{{asset('dashboard2')}}/vendors/feather/feather.css">
  <link rel="stylesheet" href="{{asset('dashboard2')}}/vendors/ti-icons/css/themify-icons.css">
  <link rel="stylesheet" href="{{asset('dashboard2')}}/vendors/css/vendor.bundle.base.css">
  <!-- endinject -->
  <!-- Plugin css for this page -->
  <link rel="stylesheet" href="{{asset('dashboard2')}}/vendors/datatables.net-bs4/dataTables.bootstrap4.css">
  <!-- End plugin css for this page -->
  <!-- inject:css -->
  <link rel="stylesheet" href="{{asset('dashboard2')}}/css/vertical-layout-light/style.css">
  <!-- endinject -->
  <link rel="shortcut icon" href="{{asset('dashboard2')}}/images/favicon.png" />
</head>
<body>
<div class="main-panel">
        <div class="content-wrapper">
          <div class="card">
            <div class="card-body">
              <h4 class="card-title">Data table</h4>
              <div class="row">
                <div class="col-12"></div>
                  <div class="table-responsive">
                  <button class="btn btn-outline-success" href="{{ url('user/create') }}">Tambah Data</button>
                    <br>
                    <br>
                    <table id="order-listing" class="table">
                      <thead>
                        <tr>
                            <th>Name</th>
                            <th>E-Mail</th>
                            <th>Password</th>
                            <th>Role</th>
                            <th>Actions</th>
                        </tr>
                      </thead>
                      <tbody>
                        @foreach($datas as $value)
                        <tr>
                            <td>{{ $value->name }}</td>
                            <td>{{ $value->email }}</td>
                            <td>{{ $value->password }}</td>
                            <td>{{ $value->is_admin }}</td>
                            <td>
                              <button class="btn btn-outline-warning">Change</button>
                              <button class="btn btn-outline-danger">Delete</button>
                            </td>
                        </tr>
                        @endforeach
                      </tbody>
                    </table>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <!-- content-wrapper ends -->
        <!-- partial:../../partials/_footer.html -->
        <script src="{{asset('dashboard2')}}/vendors/js/vendor.bundle.base.js"></script>
        <!-- endinject -->
        <!-- Plugin js for this page-->
        <script src="{{asset('dashboard2')}}/vendors/datatables.net/jquery.dataTables.js"></script>
        <script src="{{asset('dashboard2')}}/vendors/datatables.net-bs4/dataTables.bootstrap4.js"></script>
        <!-- End plugin js for this page-->
        <!-- inject:js -->
        <script src="{{asset('dashboard2')}}/js/off-canvas.js"></script>
        <script src="{{asset('dashboard2')}}/js/hoverable-collapse.js"></script>
        <script src="{{asset('dashboard2')}}/js/template.js"></script>
        <script src="{{asset('dashboard2')}}/js/settings.js"></script>
        <script src="{{asset('dashboard2')}}/js/todolist.js"></script>
        <!-- endinject -->
        <!-- Custom js for this page-->
        <script src="{{asset('dashboard2')}}/js/data-table.js"></script>
</body>
@endsection