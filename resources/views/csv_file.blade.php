<html lang="en">
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Atom | Import List</title>

    <!--Bootstrap Link -->

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css"
          integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">

    <!-- Css Link -->
    <link rel="stylesheet" href="/css/style.css">


</head>

@include('create')
@if ($errors->any())

    @foreach ($errors->all() as $error)

        <script type="text/javascript">
            alert("This name already been took, please create another with a different name!");
        </script>
    @endforeach

@endif

<body style="background-color: #F8F8F8">
<div id="app">
    <nav class="navbar navbar-expand-md shadow  navbar-light bg-white"
         style="margin-bottom: 0px; z-index: 1; height: 65px">
        <div class="float-left" style="margin-left: 25px;">
            <a href="{{ url('/') }}">
                <img src="/images/logo.svg" alt="logo icon">
            </a>
        </div>

        <!-- Right Side Of Navbar -->
        <div class="float-right ml-auto" style="margin-right: 15px;">
            <div style="">
                <button type="button" id="btn1"
                        class="btn font  ml-auto mr-3  my-2 rounded-pill text-white font-weight-bold"
                        style="background-color: #28AD47; width: 178px; height: 40px" data-toggle="modal"
                        data-target="#exampleModal" data-whatever="@mdo">New Product
                </button>

                <ul class="navbar-nav float-right ml-auto mr-3">


                    <li class="nav-item dropdown">
                        <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button"
                           data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                            {{ Auth::user()->name }}
                        </a>

                        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">

                            <a class="dropdown-item" href="{{ url('/profile') }}">

                                Profile
                            </a>


                            <a class="dropdown-item" href="{{ route('logout') }}"
                               onclick="event.preventDefault();
                                                         document.getElementById('logout-form').submit();">
                                {{ __('Logout') }}
                            </a>

                            <form id="logout-form" action="{{ route('logout') }}" method="POST"
                                  style="display: none;">
                                @csrf
                            </form>
                        </div>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
</div>

<div class="container-fluid" style=" height: calc(100% - 65px); ">
    <div class="row h-100 w-100" style="margin-right: 0px;">
        <nav class="navbar shadow bg-white"
             style="width: 200px; height: 100%; margin-bottom: 0px; align-items: normal">
            <div>
                <ul class="navbar-nav">
                    <li class="nav-item" style="padding-top: -300px">
                        <p class="font my-5" data-toggle="modal"
                           data-target="#exampleModal" data-whatever="@mdo" style="color: #525252"><img
                                src="/images/plus.svg"
                                class="mr-3"
                                alt="plus icon"
                                width="16px"
                                height="16px">
                            New Product
                        </p>
                    </li>


                    <li class="nav-item">
                        <p class="font my-5" style="color: #525252"><a class="nav-link" href="/home"
                                                                       style="color: #525252"><img
                                    src="/images/all.svg" class="mr-3" alt="plus icon"
                                    width="16px" height="16px">

                                All Products
                            </a></p>
                    </li>

                    <li class="nav-item">
                        <p class="font my-5" style="color: #525252"><a class="nav-link" href="/your-products"
                                                                       style="color: #525252"><img
                                    src="/images/folder.svg" class="mr-3" alt="plus icon"
                                    width="16px" height="16px">

                                Your Products
                            </a></p>
                    </li>

                    <li class="nav-item">
                        <p class="font my-5" style="color: #525252"><a class="nav-link" style="color: #525252"
                                                                       href="/csv_file"><img
                                    src="/images/import.svg" class="mr-3" alt="plus icon"
                                    width="16px" height="16px">

                              <strong>Import List</strong>
                            </a></p>
                    </li>

                </ul>
            </div>
        </nav>


        <div class="ml-auto" style="width: calc(100vw - 250px);overflow: auto; height: 100%; overflow-x: hidden;">
            <div class="d-flex justify-content-center">
                <div>
                    <h1 class="font p-5" style="font-size: calc( 2vw + 10px);">Import List</h1>
                </div>
            </div>


            <div class="wid" style="">
                <div class="row justify-content-center">
                    <div>
                        <div class=" bg-white shadow" style="width: 50vw;">
                            <div class="p-5 d-flex justify-content-center">
                                <form action="{{ route('import') }}" method="POST" enctype="multipart/form-data">
                                    @csrf
                                    <div class="ml-5 " style="width: 200px; height: 200px; margin-top: 100px;" >
                                        <input type="file" name="file" accept=".csv">
                                        <br>
                                        <button class="btn btn-success">Import List</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

</div>


<script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
<script src="//netdna.bootstrapcdn.com/bootstrap/3.1.1/js/bootstrap.min.js"></script>
<link rel="stylesheet" type="text/css" href="//netdna.bootstrapcdn.com/bootstrap/3.1.1/css/bootstrap.min.css">
</body>
</html>

