@extends('layouts.index')
@section('content')

    <!-- TOP navbar -->
    <!-- Left Side -->

    <nav class=" navbar-light shadow ">
        <div class="d-flex bd-highlight">
            <div class="mr-auto p-1 bd-highlight">
                <div class="d-flex justify-content-center bd-highlight py-2" style="width: 225px;">
                    <div>
                        <a class="navbarbrand" href="/"><img src="images/logo.svg" alt="logo icon" width="159"
                                                             height="53"></a>
                    </div>
                </div>
            </div>

            <!-- Right Side -->
            <div class=" bd-highlight m-2 p-3 pt-4">
                <div class="bd-example">
                    <div class="dropdown mr-5"><a href="/home">
                            <button type="button" id="btn1"
                                    class="btn font  ml-auto mr-4  rounded-pill text-white font-weight-bold"
                                    style="background-color: #28AD47; width: 178px; height: 40px">Go Back
                            </button></a>
                            <a class=" align-middle font dropdown-toggle" href="#" role="button" id="dropdownMenuLink"
                               data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" style="color: #2c3539">
                                {{ Auth::user()->name }}
                            </a>

                            <div class="dropdown-menu " aria-labelledby="dropdownMenuLink" x-placement="bottom-start"
                                 style="position: absolute; transform: translate3d(-20px, 38px, 0px); top: 0px; left: 0px; will-change: transform;">
                                <a class="dropdown-item" href="{{ route('logout') }}"
                                   onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                                    Logout
                                </a>

                                <form id="logout-form" action="{{ route('logout') }}" method="POST"
                                      style="display: none;">
                                    {{ csrf_field() }}
                                </form>
                            </div>
                    </div>
                </div>
            </div>
        </div>
    </nav>
    <!--END TOP navbar -->





    <div>
        <div class="mx-auto pt-5" style="width: 75vw">
            <div class="d-flex justify-content-center">
                <div>
                    <img src="/uploads/avatars/{{ $user->avatar }}"
                         style="width: 150px; height: 150px; float: left; border-radius: 50%; margin-right: 25px;"
                         alt="Profile picture">
                </div>
                <div class="ml-3">
                    <h2 class="font">{{ $user->name }}'s Profile</h2>

                    <form class="font" enctype="multipart/form-data" action="{{ route('profile') }}" method="POST">
                        <div class="mt-4"><label>Change Profile Image</label></div>
                        <div class="mt-2"><input type="file" name="avatar"></div>
                        <div><input type="hidden" name="_token" value="{{ csrf_token() }}"></div>
                        <div class="mt-2"><input type="submit" class="pull-right btn btn-sm btn-success"></div>
                    </form>
                </div>
            </div>
        </div>
    </div>


    <script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
    <script src="//netdna.bootstrapcdn.com/bootstrap/3.1.1/js/bootstrap.min.js"></script>
    <link rel="stylesheet" type="text/css" href="//netdna.bootstrapcdn.com/bootstrap/3.1.1/css/bootstrap.min.css">

@endsection

