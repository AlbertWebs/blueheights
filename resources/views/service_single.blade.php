@extends('master-page-2')

@section('content')

<!-- page-title -->
<section class="page-title">
    <div class="bg-layer" style="background-image: url('{{asset('theme/assets/images/_MG_5001.jpg')}}');"></div>
    <div class="pattern-layer">
        <div class="pattern-1" style="background-image: url('{{asset('theme/assets/images/shape/shape-36.png')}}');"></div>
        <div class="pattern-2" style="background-image: url('{{asset('theme/assets/images/shape/shape-47.png')}}');"></div>
    </div>
    <div class="auto-container">
        <div class="content-box">
            <ul class="bread-crumb clearfix mb_20">
                <li><a href="{{url('/')}}"># Home</a></li>
                <li>&nbsp;-&nbsp;</li>
                <li>Single Service</li>
            </ul>
            <h1>Single Service</h1>
        </div>
    </div>
</section>
<!-- page-title end -->

   <!-- about-style-two -->
   <section class="about-style-two pt_120 pb_120" id="about">
    <div class="pattern-11"></div>
    <div class="pattern-layer">
        <div class="pattern-1"></div>
        {{-- <div class="pattern-2" style="background-image: url('{{asset('theme/assets/images/shape/shape-33.png')}}');"></div> --}}
    </div>
    <div class="auto-container">
        <div class="row align-items-center">
            <div class="col-lg-6 col-md-12 col-sm-12 content-column">
                <div class="content-box">
                    <div class="sec-title mb_20">
                        <span class="sub-title"># </span>
                        <h3>Service Title</h3>
                    </div>
                    <div class="text-boxs">
                        <p>
                            The Blue Heights Events Ltd is an event management company that was
                            established to provide events management services to various corporate
                            clients and enable them achieve memorable events and effectively promote
                            their brand.<br><br>
                            We specialize in providing premium services to corporate clients both the
                            private and public sectors of the economy. We are committed to providing
                            innovative solutions spanning; Design of exhibition floor plans, provision of
                            quality shell scheme structures, media coverage and comprehensive
                            provision of all conferencing equipment that gurantees our clientele
                            satisfaction.
                            <br><br>
                        </p>

                    </div>
                </div>
            </div>
            <div class="col-lg-6 col-md-12 col-sm-12 image-column">
                <div class="image-box">
                    <figure class="image image-1"><img src="{{asset('theme/assets/images/IMG_20220419_111200.png')}}" alt=""></figure>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- about-style-two end -->


@endsection
