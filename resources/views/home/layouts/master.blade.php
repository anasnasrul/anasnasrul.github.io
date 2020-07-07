<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8"/>
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1"/>

    <title>Daftar Riwayat Hidup</title>

    <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0' name='viewport'/>
    <meta name="viewport" content="width=device-width"/>    

    {{ Html::style('assets/css/animate.min.css') }}

    {{ Html::style('assets/css/paper-dashboard.css') }}

    {{ Html::style('assets/css/font-awesome.min.css') }}
    

    {{ Html::style('https://fonts.googleapis.com/css?family=Muli:400,300') }}

    {{ Html::style('assets/css/themify-icons.css') }}

    {{ Html::style('assets/css/style.css') }}

    {{ Html::style('./assets/css/video-js.css') }}

    {{ Html::style('./assets/css/video-js.min.css') }}  

    {{ Html::style('./assets/css/indexvideo.css') }} 

    {{ Html::style('./assets/css/app.css') }}  



</head>
<body>

<div class="wrapper">
@include('home.layouts.sidebar')
    <div class="main-panel">
        <nav class="navbar navbar-default">
            <div class="container-fluid">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar bar1"></span>
                        <span class="icon-bar bar2"></span>
                        <span class="icon-bar bar3"></span>
                    </button>                    
                </div>
                <div class="collapse navbar-collapse">
                    <ul class="nav navbar-nav navbar-right">
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                <i class="ti-user"></i>
                                <p>Anas Nasrulloh</p>                                                                
                            </a>
                            <ul class="dropdown-menu">
                                <li><a href="/profile"> Profile</a></li>
                            </ul>
                        </li>
                    </ul>

                </div>
            </div>
        </nav>

        <div class="content">
            <div class="container-fluid">
                {{ Html::style('assets/bootstrap-4.0.0-dist/css/bootstrap.min.css') }}
                @yield('content')

            </div>
        </div>
        <footer class="footer">
            <div class="container-fluid">
                <nav class="pull-left">
                    <ul>
                        <li>
                            <a href="/portfolio" class="ti-folder">
                                Portfolio
                            </a>
                        </li>                        
                    </ul>
                </nav>
                <div class="copyright pull-right">
                    &copy;
                    <script>document.write(new Date().getFullYear())</script>
                    , Created By <a href="/">Anas</a><i class="fa fa-heart heart"></i> 
                </div>
            </div>
        </footer>

    </div>
</div>

</body>

{{ Html::script('assets/js/jquery-1.10.2.js') }}
{{ Html::script('assets/js/bootstrap.min.js') }}
{{ Html::script('assets/bootstrap-4.0.0-dist/js/popper.min.js') }}
{{ Html::script('assets/js/script.js') }}
{{ Html::script('assets/js/kitfontawesome.js')}}
{{ Html::script('assets/js/videojs-ie8.min.js') }}

</html>
