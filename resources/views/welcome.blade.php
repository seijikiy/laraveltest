@extends('layouts.index')
@section('content')

    <!-- Background Image -->
    <div class="head pb-5">

        <!-- TOP navbar -->
    @include('layouts.navbar-top')
    <!--END TOP navbar -->


        <div>
            <div class="" style="padding-top: 100px">

                <div class="w-75 margin-15">
                    <h1 class=" font-weight-bold text-white font" style="line-height: 50px;">Fast and
                        simple,<br>
                        Unsecured
                        <br> funding.</h1>
                </div>

                <div class="mt-4 lorem margin-15">
                    <p class="text-white font-weight-light font" style="font-size: 1.5em; ">Lorem ipsum dolor sit
                        amet, consectetur
                        adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore.</p>
                </div>

                <a href="/login">
                    <button type="button" class="btn btn-size font  rounded-pill text-white font-weight-bold margin-15"
                            style="background-color: #28AD47; ">APPLY NOW
                    </button>
                </a>

                <div class="mt-4 margin-15">
                    <p class="text-white font font-weight-light">Applying doesn’t affect your credit<br> score, and
                        there’s
                        no obligation to accept funding.</p>
                </div>
            </div>
        </div>
    </div>
    <!--END Background Image -->

    <!--Gray Rectangle -->

    <div class=" gray-rectangle">
        <div class="gray gray-block py-5" style="background-color: #F7F7F7">

            <div class="gray-block1">
                <div class="float-right pr-5"><p class="font gray-rectangle-text-1">Getting <span
                            style="color: #28AD47">capital</span> for your<br> business is complicated</p></div>
            </div>

            <div class="gray-block2">
                <div class=""><p class="gray-rectangle-text-2 font font-weight-light">Lorem ipsum dolor sit
                        amet,
                        consectetur<br> adipiscing elit, sed do eiusmod tempor<br> incididunt ut labore et dolore
                        magna
                        aliqua.</p></div>
            </div>
        </div>
    </div>

    <!-- END Gray Rectangle -->

    <div class="white-block" style="">
        <div class="d-flex justify-content-center mt-5">
            <h3 class="font font-weight-bold gray-rectangle-text-1 mt-4">Take the guesswork out of funding</h3>
        </div>
        <div class="d-flex justify-content-center mt-3">
            <p class="font text-center font-weight-light gray-rectangle-text-2">
                Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut
                labore.
            </p>
        </div>
    </div>

    <div class="d-flex justify-content-center">
        <div class=" text mt-5 mb-3" style=" padding: auto">

            <div class="w-368 text1 d-flex justify-content-center " style="height: 98px">
                <img src="/images/thunder.svg" alt="thunder icon" class="w-98">
                <p class="font pl-3 w-270 white-rectangle-text-1 pt-2">Funding awarded in just 10 - 21 days so
                    you
                    can move quickly.</p>
            </div>

            <div class="w-368 text2 d-flex justify-content-between " style="height: 98px">
                <img src="/images/profile.svg" alt="profile icon" class="w-98">
                <p class="font pl-3 w-270 white-rectangle-text-1 pt-2">Senior funding advisor to help you
                    succeed.</p>
            </div>

            <div class="w-368 text3 d-flex justify-content-between " style="height: 110px">
                <img src="/images/target.svg" alt="target icon" class=" w-98">
                <p class="font w-270 white-rectangle-text-1 pt-2 pl-3">Data-driven algorithm to strategize your
                    application process for the
                    best results.</p>
            </div>

            <div class="w-368 text4 d-flex justify-content-between " style="height: 98px">
                <img src="/images/dolar.svg" alt="money icon" class="w-98">
                <p class="font w-270 white-rectangle-text-1 pl-3 pt-2">Loan marketplace to make lenders compete for
                    you
                    and improve their
                    terms.</p>
            </div>
        </div>
    </div>

    <div style="background-color: #F7F7F7" class="bgc pb-5">
        <h3 class="font font-weight-bold text-center px-3 pt-5 gray-rectangle-text-1 mt-4">Capital for
            start-ups, small businesses and
            entrepreneurs
        </h3>

        <div>

            <div class="hq">
                <div class="hq-1">
                    <img alt="wallet icon" src="/images/wallet.svg" width="300px">
                </div>

                <div class="hq-2">
                    <h4 class="font font-weight-bold" style="color: #676767">Start-up
                        funding</h4>
                    <p class="font   white-rectangle-text-1">Maximize your funding</p>
                    <p class="font font-weight-light white-rectangle-text-1" style="font-size: 1.5em">Receive more
                        funding than you could anywhere else with our strategic, perfectly-timed application
                        process.</p>
                    <a href="/login">
                        <button type="button" class="btn mt-4 font  rounded-pill text-white font-weight-bold "
                                style="background-color: #28AD47; width: 178px">APPLY NOW
                        </button>
                    </a>
                </div>
            </div>

            <div class="hq">

                <div class="hq-3">
                    <h4 class="font font-weight-bold" style="color: #676767">Business funding</h4>
                    <p class="font white-rectangle-text-1">Get lenders to compete for you</p>
                    <p class="font font-weight-light white-rectangle-text-1" style="font-size: 1.5em">Receive better
                        rates and higher funding amounts than you can anywhere else with our competitive loan
                        marketplace.</p>
                    <a href="/login">
                        <button type="button" class="btn mt-4 font  rounded-pill text-white font-weight-bold "
                                style="background-color: #28AD47; width: 178px">APPLY NOW
                        </button>
                    </a>
                </div>

                <div class="hq-4">
                    <img src="/images/rocket.svg" alt="rocket icon" width="300px">
                </div>
            </div>
        </div>
    </div>

    <div>
        <div class=" d-flex w- justify-content-center pt-5">
            <h3 class="font font-weight-bold gray-rectangle-text-1 mt-4">Written testimonials</h3>
        </div>

        <div class=" d-flex w- justify-content-center pt-5">
            <div class=" shadow border-0 box">
                <div class="mx-5 mt-5 mb-5">
                    <div class=" ">
                        <img src="/images/photo1.png" class="" width="50px" height="50px">
                        <h5 class="card-title font mt-1">John Neil<br> <span
                                class=" font card-subtitle mb-2 text-muted"
                                style="font-size: 15px">Like Family Care NY</span>
                        </h5>

                    </div>

                </div>

                <div class="mx-5 mb-5">
                    <p class="card-text font font-weight-light">
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor
                        incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud
                        exercitation
                        ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in
                        reprehenderit
                        in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint.</p>
                </div>
            </div>
        </div>

        <div class=" d-flex w- justify-content-center py-5">
            <div class=" shadow border-0 box">
                <div class="mx-5 mt-5 mb-5">
                    <div class=" ">
                        <img src="/images/photo2.png" class="" width="50px" height="50px">
                        <h5 class="card-title font mt-1">Nick Maine<br> <span
                                class=" font card-subtitle mb-2 text-muted"
                                style="font-size: 15px">Picasso Details</span>
                        </h5>

                    </div>

                </div>

                <div class="mx-5 mb-5">
                    <p class="card-text font font-weight-light">
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor
                        incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud
                        exercitation
                        ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in
                        reprehenderit
                        in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint.</p>
                </div>
            </div>
        </div>
    </div>

    <div style="background-color: #F7F7F7">
        <div class="">
            <div class="gray gray-block py-5" style="background-color: #F7F7F7">

                <div class="gray-block1">
                    <div class="float-right pr-5"><h1 class="font font-weight-bold" style="color: #7B7B7B;">Fast and
                            simple,<br>Unsecured <br>funding.</h1></div>
                </div>

                <div class="gray-block2">
                    <div class="">
                        <div class="d-flex justify-content-center"><a href="/login">
                                <button type="button" class="btn font  rounded-pill text-white font-weight-bold "
                                        style="background-color: #28AD47; width: 278px; margin-top: 50px;">APPLY NOW
                                </button>
                            </a></div>
                        <p class="text-center mt-3 font" style="color: #7B7B7B">Applying doesn’t affect your credit<br>
                            score, and
                            there’s
                            no obligation to accept funding.</p></div>
                </div>
            </div>
        </div>
    </div>

    <div style="background-color: #575757" class="py-5">
        <div class="bot">
        <div class="bot1">
            <div class="mr-3">
                <div class="float-left pr-3">
                    <img src="/images/logo2.svg" alt="">
                </div>

                <div class="float-right pr-3">
                    <p class="font text-white">How it Works<br>Get Funding<br>Apply Now</p>
                </div>

                <div class="float-right pr-3">
                    <p class="font text-white">Contact Us<br>Careers<br>FAQ</p>
                </div>
            </div>
        </div>

        <div class="ml-3">
            <div class="d-flex justify-content-center mt-3">

                <div class="mr-2"><img src="/images/slack.svg" alt="slack icon"></div>
                <div class="mr-2"><img src="/images/twitter.svg" alt="twitter icon"></div>
                <div class="mr-2"><img src="/images/linkedin.svg" alt="linkedin icon"></div>
                <div class="mr-2"><img src="/images/facebook.svg" alt="facebook icon"></div>
                <div class="mr-2"><img src="/images/instagram.svg" alt="instagram icon"></div>

            </div>

        </div>
        </div>
        </div>

@endsection
