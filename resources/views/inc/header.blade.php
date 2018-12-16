<html>

<head>
    <title>WebDev Interview </title>
    <link rel="stylesheet" type="text/css" href="{{url('css/bootstrap.css')}}">
    <link rel="stylesheet" type="text/css" href="{{url('css/materialize.css')}}">
    <link rel="stylesheet" type="text/css" href="{{url('css/style.css')}}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/intro.js/2.9.3/introjs.css" />
    <script type="text/javascript" src="{{url('js/jquery.js')}}"></script>
    <script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.js"></script>
    <script type="text/javascript" charset="utf8" src="https://cdnjs.cloudflare.com/ajax/libs/limonte-sweetalert2/7.32.2/sweetalert2.all.js"></script>
    <script type="text/javascript" src="{{url('js/custom.js')}}"></script>
    <script type="text/javascript" src="{{url('js/materialize.js')}}"></script>
    <script type="text/javascript" src="{{url('js/bootstrap.js')}}"></script>
    
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.19/css/jquery.dataTables.css">
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/limonte-sweetalert2/7.32.2/sweetalert2.css">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <script src="https://cdnjs.cloudflare.com/ajax/libs/intro.js/2.9.3/intro.js"></script>
</head>


<body>

    <nav class="navbar navbar-expand-lg navbar-dark bg-primary __web-inspector-hide-shortcut__">
        <a class="navbar-brand" href="#">Welcome</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarColor01" aria-controls="navbarColor01"
            aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarColor01">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item active">
                    <a class="nav-link" href="#">Tabular Layout <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item active">
                        <a class="nav-link" href="#">Grid Layout </a>
                    </li>
                <li class="nav-item">
                    <a class=" nav-link waves-effect waves-light btn modal-trigger" data-toggle="modal" data-target="#modal1">Create
                        User</a>
                </li>

            </ul>

        </div>
    </nav>