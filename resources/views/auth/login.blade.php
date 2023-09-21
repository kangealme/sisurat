<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>SIsurat | Log in</title>

    <!-- Google Font: Source Sans Pro -->
    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="/assets/plugins/fontawesome-free/css/all.min.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="/assets/dist/css/adminlte.min.css">
</head>

<body class="hold-transition login-page">
    <div class="login-box">
        <div class="login-logo">
            <a href="#"><b>Login</b>Page</a>
        </div>
        <!-- /.login-logo -->
        <div class="card">
            <div class="card-body login-card-body">
                <p class="login-box-msg">Sign in to start your session</p>
                <form action="{{ route('login') }}" method="post" id="loginForm">
                    <div class="input-group mb-3">
                        <input type="text" class="form-control" placeholder="Username" name="username"
                            id="username">
                        <div class="input-group-append">
                            <div class="input-group-text">
                                <span class="fas fa-user"></span>
                            </div>
                        </div>
                    </div>
                    <div class="input-group mb-3">
                        <input type="password" class="form-control" placeholder="Password" name="password"
                            id="password">
                        <div class="input-group-append">
                            <div class="input-group-text">
                                <span class="fas fa-lock"></span>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-8">
                            <div class="icheck-primary">

                            </div>
                        </div>
                        <!-- /.col -->
                        <div class="col-4">
                            <button type="submit" class="btn btn-primary btn-block" id="btnSubmit">Sign In</button>
                        </div>
                        <!-- /.col -->
                    </div>
                </form>
                <a href="/register" class="text-center">Belum Punya Member ?</a>
            </div>
            <!-- /.login-card-body -->
        </div>
    </div>
    <!-- /.login-box -->

    <!-- jQuery -->
    <script src="/assets/plugins/jquery/jquery.min.js"></script>
    <!-- Bootstrap 4 -->
    <script src="/assets/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
    <!-- AdminLTE App -->
    <script src="/assets/dist/js/adminlte.min.js"></script>

    <script>
        $(document).ready(function() {
            let route = '';

            //jika tombol submit di klik
            $('#btnSubmit').click(function(e) {
                e.preventDefault();
                route = '/auth/login';
                const formData = new FormData();
                formData.append('_method', 'POST');
                submit(formData);
            });

            //kelompok fungsi
            function submit(formData) {
                $.ajaxSetup({
                    headers: {
                        "X-CSRF-TOKEN": "{{ csrf_token() }}"
                    }
                });

                $.ajax({
                    type: "POST",
                    url: route,
                    data: formData,
                    processData: false,
                    contentType: false,
                    success: function(res) {
                        console.log(res.responseJSON);
                    },
                    error: function(err) {
                        toastr.error(err.responseJSON.msgBody, err.responseJSON.msgTitle);
                    }
                });
            }
        });
    </script>
</body>
<!-- jQuery -->
<script src="/assets/plugins/jquery/jquery.min.js"></script>
{{-- Toastr --}}
<link rel="stylesheet" href="/assets/plugins/toastr/toastr.css">
<script src="/assets/plugins/toastr/toastr.min.js"></script>
{{-- <script src="/assets/plugins/toastr/customToastr.js"></script> --}}

</html>
