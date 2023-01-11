<!DOCTYPE html>

<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>YBLTD-laravel8-livewire</title>

    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">

    <link rel="stylesheet" href="{{mix("css/app.css")}}">

    @livewireStyles
</head>

<body class="hold-transition sidebar-mini">
    <div class="wrapper">

       <x-topnav />


        <aside class="main-sidebar sidebar-dark-primary elevation-4">

            <a href="index3.html" class="brand-link">
                <span class="brand-text font-weight-bold">YBLTD</span>
            </a>

            <div class="sidebar">

                <div class="user-panel mt-3 pb-3 mb-3 d-flex">
                    <div class="image">
                        <img src="{{asset('images/user1-128x128.jpg')}}" class="img-circle elevation-2" alt="User Image">
                    </div>
                    <div class="info">
                        <a href="#" class="d-block">{{userFullName()}}</a>
                    </div>
                </div>

              <x-menu />

            </div>

        </aside>

        <div class="content-wrapper" style="background-color: #e3f2fd;>
            <div class="content">
                <div class="container-fluid">
                    {{-- <div class="row">
                        <div class="col-lg-6">
                            @yield("contenu")
                        </div>
                    </div> --}}
                    @yield("contenu")

                </div>
            </div>

        </div>


        <x-sidebar />

        <footer class="main-footer">

            <div class="float-right d-none d-sm-inline">
                Anything you want
            </div>

            <strong>Copyright &copy; 2023 <a href="https://jaim.net">JAIM SERVICE</a>.</strong> All rights
            reserved.
        </footer>
    </div>
<script src="{{mix("js/app.js")}}"></script>

@livewireScripts

</body>

</html>
