@extends('en.layouts.master')
@section('css')
    <style>
        /*======================
                                                            404 page
                                                        =======================*/


        .page_404 {
            padding: 60px 0;
            background: #fff;
        }

        .page_404 img {
            width: 100%;
        }

        .page_404 .four_zero_four_bg {

            background-image: url(https://cdn.dribbble.com/users/285475/screenshots/2083086/dribbble_1.gif);
            height: 400px;
            background-position: center;
        }


        .page_404 .four_zero_four_bg h1 {
            font-size: 80px;
        }

        .page_404 .four_zero_four_bg h3 {
            font-size: 80px;
        }

        .page_404 .link_404 {
            padding: 10px 20px;
            background: var();
            margin: 20px 0;
            display: inline-block;
        }

        .page_404 .contant_box_404 {
            margin-top: -50px;
        }
    </style>
@endsection
@section('content')
    <section class="page_404">
        <div class="container">
            <div class="row">
                <div class="col-sm-12 ">
                    <div class="text-center">
                        <div class="four_zero_four_bg">
                            <h1 class="text-center ">404</h1>
                        </div>
                        <div class="contant_box_404">
                            <h3 class="h2">
                                Looks like you're lost
                            </h3>

                            <p>The page you are looking for is not available!</p>

                            <a href="{{ route('en.home') }}" class="btn btn-outline-warning link_404"><i
                                    class="fa-light fa-arrow-left"></i> Go to Homepage</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
