<!DOCTYPE html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>ITFP Admin - Device Session</title>
  <!-- Favicon -->
  <link rel="shortcut icon" href="/assets/logo/iconplus-mini.jpg" type="image/png">
  <!-- plugins:css -->
  <link rel="stylesheet" href="/skydash/vendors/feather/feather.css">
  <link rel="stylesheet" href="/skydash/vendors/ti-icons/css/themify-icons.css">
  <link rel="stylesheet" href="/skydash/vendors/css/vendor.bundle.base.css">
  <link rel="stylesheet" href="/skydash/vendors/font-awesome/css/font-awesome.min.css">
  <!-- endinject -->
  <!-- Plugin css for this page -->
  <!-- End plugin css for this page -->
  <!-- inject:css -->
  <link rel="stylesheet" href="/skydash/css/vertical-layout-light/style-2.css">
  {{-- Custom CSS --}}
  <link rel="stylesheet" href="/skydash/css/custom.css" type="text/css">
  <style>
    
  </style>
</head>

<body>
  <div class="container">
    <h4 class="text-center mt-5 pb-4">Session Play Video</h4>
    <div class="row justify-content-center">
      <div class="col-10">
        <table class="table table-hover" id="datatable">
          <thead>
            <tr>
              <th>No</th>
              <th>IP Address</th>
              <th>Device Unique ID</th>
              <th>Platform</th>
              <th>Brand</th>
              <th>Model</th>
              <th>Action Date</th>
            </tr>
          </thead>
          <tbody>
            @foreach($deviceSessions as $i => $device)
            <tr>
              <td>{{ $i+1 }}</td>
              <td>{{ $device->ip_address }}</td>
              <td>{{ $device->device_id }}</td>
              <td>{{ $device->platform }}</td>
              <td>{{ $device->brand }}</td>
              <td>{{ $device->model }}</td>
              <td>{{ $device->created_at->format('H:i:s d-m-Y') }}</td>
            </tr>
            @endforeach
          </tbody>
        </table>
      </div>
    </div>
  </div>
  <!-- container-scroller -->
  <!-- plugins:js -->
  <script src="/skydash/vendors/js/vendor.bundle.base.js"></script>
  <!-- endinject -->
  <!-- Plugin js for this page -->
  <!-- End plugin js for this page -->
  <!-- inject:js -->
  <script src="/skydash/js/off-canvas.js"></script>
  <script src="/skydash/js/hoverable-collapse.js"></script>
  <script src="/skydash/js/template.js"></script>
  <script src="/skydash/js/settings.js"></script>
  <script src="/skydash/js/todolist.js"></script>
  <!-- endinject -->
</body>

</html>
