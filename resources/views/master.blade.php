<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.1.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">
    <!-- toastr -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css" rel="stylesheet" />
    <title>@yield('title')</title>
</head>
<body>
    <main>
        <section class="content">
            <div class="container container-xl">
                <div class="row">
                    <div class="content-inner">
                        <div class="box">
                            <div class="inner-box">
                                <div class="col-md-5">
                                    @yield('contents')
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>


    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="https://kit.fontawesome.com/cf51417c04.js" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.1.1/js/bootstrap.min.js"></script>
    <!-- toastr -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/js/toastr.min.js"></script>
    @if(\Illuminate\Support\Facades\Session::has('success'))
        <script>
            toastr.info("{!! \Illuminate\Support\Facades\Session::get('success') !!}")
        </script>
    @endif
    @if(\Illuminate\Support\Facades\Session::has('error'))
        <script>
            toastr.error("{!! \Illuminate\Support\Facades\Session::get('error') !!}")
        </script>
    @endif
    @if(\Illuminate\Support\Facades\Session::has('info'))
        <script>
            toastr.info("{!! \Illuminate\Support\Facades\Session::get('info') !!}")
        </script>
    @endif
    @if(\Illuminate\Support\Facades\Session::has('warning'))
        <script>
            toastr.warning("{!! \Illuminate\Support\Facades\Session::get('warning') !!}")
        </script>
    @endif
</body>

</html>
