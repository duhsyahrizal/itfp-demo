<!DOCTYPE html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>ITFP Admin</title>
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

<body style="background-color: #e5e5e5;">
  <div class="container-scroller">
    <div class="container-fluid page-body-wrapper full-page-wrapper">
      <div class="content-wrapper d-flex align-items-center auth px-0">
        <div class="row w-100 mx-0">
          <div class="col-lg-4 mx-auto">
            <div class="card shadow-lg">
              <div class="card-body py-0 px-0">
                <div class="py-5 px-4 px-sm-5">
                  <div class="text-center font-weight-bold text-sm mb-3 text-muted mt-0 pt-0 pb-3 h4">
                    ITFP Admin
                  </div>
                  <form action="{{ url('login') }}" method="POST">
                    @csrf
                    <div class="form-group mb-3">
                      <div class="input-group input-group-merge input-group-alternative">
                        <div class="input-group-prepend">
                          <span class="input-group-text"><i class="icon-mail text-iconnet"></i></span>
                        </div>
                        <input type="email" class="form-control" name="email" placeholder="Username" required>
                        <div class="invalid-feedback ml-1" >
                          Please type correct username
                        </div>
                      </div>
                    </div>
                    <div class="form-group">
                      <div class="input-group input-group-merge input-group-alternative">
                        <div class="input-group-prepend">
                          <span class="input-group-text"><i class="icon-unlock text-iconnet"></i></span>
                        </div>
                        <input type="password" class="form-control" id="exampleInputPassword1" name="password" placeholder="Password" required>
                        <div class="invalid-feedback ml-1" >
                          Please type correct password
                        </div>
                      </div>
                    </div>
                    <div class="mt-3">
                      <button type="submit" class="btn btn-block btn-iconnet-2 btn-lg font-weight-medium auth-form-btn"><i class="fa fa-sign-in text-white mr-2"></i> SIGN IN</button>
                    </div>
                    <div class="text-center text-sm text-muted mt-4 pt-0" style="font-size: 13px;">
                      Demo Admin - ITFP
                    </div>
                  </form>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <!-- content-wrapper ends -->
    </div>
    <!-- page-body-wrapper ends -->
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
