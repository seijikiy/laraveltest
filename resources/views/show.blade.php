@extends('layouts.index')
@section('content')

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

                                <strong> All Products</strong>
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

                                    Import List
                                </a></p>
                        </li>

                    </ul>
                </div>
            </nav>

            <div class="ml-auto" style="width: calc(100vw - 250px);overflow: auto; height: 100%; overflow-x: hidden;">
                <div class="d-flex justify-content-center">
                    <div>
                        <h1 class="font p-5" style="font-size: calc( 2vw + 10px);">All products</h1>
                    </div>
                </div>


                <div class=" wid ">
                    <div class="row justify-content-center">
                        @if(count($products) > 0)

                            @foreach($products as $product)
                                <div class="product shadow m-4">
                                    <div class="d-flex justify-content-center">
                                        <img class="" src="/storage/image/{{$product->image}}" alt="car photo"
                                             width="100%"
                                             height="150px" style="border-radius: 25px 25px 0px 0px;">
                                    </div>
                                    <div>
                                        <p class="font text-white pt-4 pl-5" style="font-size: 16px">
                                            {{$product->name}} <img src="/images/info.svg" alt="info icon"
                                                                    width="20px"
                                                                    height="15px" class="pl-2 mb-1 red-tooltip"
                                                                    data-toggle="tooltip"
                                                                    data-placement="right"
                                                                    title="{{$product->description}} ">
                                        </p>
                                    </div>
                                    <div><p class="font text-white pl-5">{{$product->category}}</p></div>
                                    <div class="d-flex  bd-highlight" style="margin-top: 15px">
                                        <div class="pl-5 mt-auto bd-highlight">
                                            <h3 class="font text-white">${{$product->price}}</h3>
                                        </div>
                                        <div class="bd-highlight ml-auto mt-3 pr-5">
                                            <a href="/">
                                                <button type="button"
                                                        class="btn font rounded-pill text-white font-weight-light "
                                                        style="font-size: 18px;background-color: #28AD47; width: 99px; height: 41px">
                                                    Buy
                                                </button>
                                            </a>
                                        </div>
                                    </div>
                                </div>


                            @endforeach
                        @else
                            <div class=" vertical-center d-flex justify-content-center">
                                <div class="alert alert-warning" style="">
                                    <p class="font">There is no product, click here to create</p>
                                    <div class="d-flex justify-content-center mt-4">
                                        <button type="button"
                                                class="btn font p-auto rounded-pill text-white font-weight-bold "
                                                style="background-color: #28AD47; width: 178px; height: 40px"
                                                data-toggle="modal"
                                                data-target="#exampleModal" data-whatever="@mdo">New Product
                                        </button>
                                    </div>
                                </div>
                            </div>
                        @endif
                        <div class="w-100" style="background-color: white; z-index: 0;">
                            <div class=" d-flex justify-content-center ">
                                {{ $products->links()}}

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
    <script>
        $(function () {
            $('[data-toggle="tooltip"]').tooltip()
        })
    </script>

    </body>
@endsection
