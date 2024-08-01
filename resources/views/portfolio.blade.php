@extends('master-page')

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
                <li>Our Portfolios</li>
            </ul>
            <h1>Our Portfolio</h1>
        </div>
    </div>
</section>
<!-- page-title end -->



        <!-- gallery-style-two -->
        <section class="gallery-style-two pt_140 pb_110">
            <div class="auto-container">
                <div class="sortable-masonry">
                    <div class="items-container row clearfix">
                        <div class="col-lg-4 col-md-6 col-sm-12 masonry-item small-column all technology grocery hospital">
                            <div class="gallery-block-two">
                                <div class="inner-box">
                                    <figure class="image-box"><img src="{{asset('theme/assets/images/gallery/gallery-5.jpg')}}" alt=""></figure>
                                    <div class="link"><a href="{{url('/')}}/our-portfolio/update"><i class="icon-25"></i></a></div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6 col-sm-12 masonry-item small-column all grocery technology material">
                            <div class="gallery-block-two">
                                <div class="inner-box">
                                    <figure class="image-box"><img src="{{asset('theme/assets/images/gallery/gallery-6.jpg')}}" alt=""></figure>
                                    <div class="link"><a href="{{url('/')}}/our-portfolio/update"><i class="icon-25"></i></a></div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6 col-sm-12 masonry-item small-column all construction hospital">
                            <div class="gallery-block-two">
                                <div class="inner-box">
                                    <figure class="image-box"><img src="{{asset('theme/assets/images/gallery/gallery-7.jpg')}}" alt=""></figure>
                                    <div class="link"><a href="{{url('/')}}/our-portfolio/update"><i class="icon-25"></i></a></div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6 col-sm-12 masonry-item small-column all grocery hospital construction">
                            <div class="gallery-block-two">
                                <div class="inner-box">
                                    <figure class="image-box"><img src="{{asset('theme/assets/images/gallery/gallery-8.jpg')}}" alt=""></figure>
                                    <div class="link"><a href="{{url('/')}}/our-portfolio/update"><i class="icon-25"></i></a></div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6 col-sm-12 masonry-item small-column all construction hospital">
                            <div class="gallery-block-two">
                                <div class="inner-box">
                                    <figure class="image-box"><img src="{{asset('theme/assets/images/gallery/gallery-9.jpg')}}" alt=""></figure>
                                    <div class="link"><a href="{{url('/')}}/our-portfolio/update"><i class="icon-25"></i></a></div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6 col-sm-12 masonry-item small-column all construction hospital">
                            <div class="gallery-block-two">
                                <div class="inner-box">
                                    <figure class="image-box"><img src="{{asset('theme/assets/images/gallery/gallery-10.jpg')}}" alt=""></figure>
                                    <div class="link"><a href="{{url('/')}}/our-portfolio/update"><i class="icon-25"></i></a></div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6 col-sm-12 masonry-item small-column all construction hospital">
                            <div class="gallery-block-two">
                                <div class="inner-box">
                                    <figure class="image-box"><img src="{{asset('theme/assets/images/gallery/gallery-11.jpg')}}" alt=""></figure>
                                    <div class="link"><a href="{{url('/')}}/our-portfolio/update"><i class="icon-25"></i></a></div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6 col-sm-12 masonry-item small-column all construction hospital">
                            <div class="gallery-block-two">
                                <div class="inner-box">
                                    <figure class="image-box"><img src="{{asset('theme/assets/images/gallery/gallery-12.jpg')}}" alt=""></figure>
                                    <div class="link"><a href="{{url('/')}}/our-portfolio/update"><i class="icon-25"></i></a></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- gallery-style-two end -->


@endsection
