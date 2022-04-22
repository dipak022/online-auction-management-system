@extends('frontend.layouts.master')
@section('title')
Home Page
@endsection
@section('content')


    <!-- BEGIN SLIDER -->
    <div class="page-slider margin-bottom-35">
        <div id="carousel-example-generic" class="carousel slide carousel-slider">
            <!-- Indicators -->
            <ol class="carousel-indicators">
                <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
                <li data-target="#carousel-example-generic" data-slide-to="1"></li>
                <li data-target="#carousel-example-generic" data-slide-to="2"></li>
                <li data-target="#carousel-example-generic" data-slide-to="3"></li>
            </ol>

            <!-- Wrapper for slides -->
            <div class="carousel-inner" role="listbox">
                <!-- First slide -->
                <div class="item  active" style="background-image: url({{ asset($banners->image) }}); background-size: cover; background-position: center center; width: 100%; height: 100%; min-height: 580px;">
                    <div class="container">
                        <div class="carousel-position-four text-center">
                            <h2 class="margin-bottom-20 animate-delay carousel-title-v3 border-bottom-title text-uppercase" data-animation="animated fadeInDown">
                               <span class="color-red-v2">{{$banners->title}}</span><br/>
                            </h2>
                            <p class="carousel-subtitle-v2" data-animation="animated fadeInUp">{{$banners->description}}.<br/></p>
                        </div>
                    </div>
                </div>
                
                <!-- Second slide -->
                <div class="item" style="background-image: url({{ asset($banners->image_two) }}); background-size: cover; background-position: center center; width: 100%; height: 100%; min-height: 580px;">
                    <div class="container">
                        <div class="carousel-position-four text-center">
                            <h2 class="animate-delay carousel-title-v4" data-animation="animated fadeInDown">
                            <span class="color-red-v2">{{$banners->title}}</span><br/>
                            </h2>
                           
                            <p class="carousel-subtitle-v2" data-animation="animated fadeInUp">{{$banners->description}}.<br/></p>
                        </div>
                    </div>
                </div>

                <!-- Third slide -->
                <div class="item" style="background-image: url({{ asset($banners->image_three) }}); background-size: cover; background-position: center center; width: 100%; height: 100%; min-height: 580px;">
                    <div class="container">
                        <div class="carousel-position-four text-center">
                            <h2 class="animate-delay carousel-title-v4" data-animation="animated fadeInDown">
                             <span class="color-red-v2">{{$banners->title}}</span><br/>
                            </h2>
                           
                            <p class="carousel-subtitle-v2" data-animation="animated fadeInUp">{{$banners->description}}.<br/></p>
                        </div>
                    </div>
                </div>

                <!-- Fourth slide -->
                <div class="item" style="background-image: url({{ asset($banners->image_four) }}); background-size: cover; background-position: center center; width: 100%; height: 100%; min-height: 580px;">
                   <div class="center-block">
                        <div class="center-block-wrap">
                            <div class="center-block-body">
                            <h2 class="animate-delay carousel-title-v4" data-animation="animated fadeInDown">
                            <span class="color-red-v2">{{$banners->title}}</span><br/>
                            </h2>
                           
                            <p class="carousel-subtitle-v2" data-animation="animated fadeInUp">{{$banners->description}}.<br/></p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Controls -->
            <a class="left carousel-control carousel-control-shop" href="#carousel-example-generic" role="button" data-slide="prev">
                <i class="fa fa-angle-left" aria-hidden="true"></i>
            </a>
            <a class="right carousel-control carousel-control-shop" href="#carousel-example-generic" role="button" data-slide="next">
                <i class="fa fa-angle-right" aria-hidden="true"></i>
            </a>
        </div>
    </div>
    <!-- END SLIDER -->

    <div class="main">
      <div class="container">
        <!-- BEGIN SALE PRODUCT & All ARRIVALS -->
        <div class="row margin-bottom-40">
          <!-- BEGIN SALE PRODUCT -->
          <div class="col-md-12 sale-product">
            <h2>All Arrivals</h2>
            <div class="owl-carousel owl-carousel5">
              @foreach($allproducts as $allproduct)
              <div>
                <div class="product-item">
                  <div class="pi-img-wrapper">
                    <img src="{{asset($allproduct->image)}}" class="img-responsive" alt="Berry Lace Dress">
                    <div>
                      <a href="{{asset($allproduct->image)}}" class="btn btn-default fancybox-button">Zoom</a>
                    </div>
                  </div>
                  <h3><a href="javascript:;">{{$allproduct->name}}</a></h3>
                  <div class="pi-price">{{$allproduct->regular_price}} TK</div>
                  <a href="{{route('auction.details',$allproduct->id)}}" class="btn btn-default add2cart">View Biding Item </a>
                </div>
              </div>
             @endforeach
              
            </div>
          </div>
          <!-- END SALE PRODUCT -->
        </div>
        <!-- END SALE PRODUCT & All ARRIVALS -->

         <!-- BEGIN SALE PRODUCT & All ARRIVALS -->
         <div class="row margin-bottom-40">
          <!-- BEGIN SALE PRODUCT -->
          <div class="col-md-12 sale-product">
            <h2>New Arrivals</h2>
            <div class="owl-carousel owl-carousel5">
              @foreach($newproducts as $newproduct)
              <div>
                <div class="product-item">
                  <div class="pi-img-wrapper">
                    <img src="{{asset($newproduct->image)}}" class="img-responsive" alt="Berry Lace Dress">
                    <div>
                      <a href="{{asset($newproduct->image)}}" class="btn btn-default fancybox-button">Zoom</a>
                    </div>
                  </div>
                  <h3><a href="javascript:;">{{$newproduct->name}}</a></h3>
                  <div class="pi-price">{{$newproduct->regular_price}} TK</div>
                  <a href="{{route('auction.details',$newproduct->id)}}" class="btn btn-default add2cart">View Biding Item </a>
                </div>
              </div>
             @endforeach
              
            </div>
          </div>
          <!-- END SALE PRODUCT -->
        </div>
        <!-- END SALE PRODUCT & All ARRIVALS -->


         <!-- BEGIN SALE PRODUCT & All ARRIVALS -->
         <div class="row margin-bottom-40">
          <!-- BEGIN SALE PRODUCT -->
          <div class="col-md-12 sale-product">
            <h2>Featured Arrivals</h2>
            <div class="owl-carousel owl-carousel5">
              @foreach($featuredproducts as $featuredproduct)
              <div>
                <div class="product-item">
                  <div class="pi-img-wrapper">
                    <img src="{{asset($featuredproduct->image)}}" class="img-responsive" alt="Berry Lace Dress">
                    <div>
                      <a href="{{asset($featuredproduct->image)}}" class="btn btn-default fancybox-button">Zoom</a>
                    </div>
                  </div>
                  <h3><a href="javascript:;">{{$featuredproduct->name}}</a></h3>
                  <div class="pi-price">{{$featuredproduct->regular_price}} TK</div>
                  <a href="{{route('auction.details',$allproduct->id)}}" class="btn btn-default add2cart">View Biding Item </a>
                </div>
              </div>
             @endforeach
              
            </div>
          </div>
          <!-- END SALE PRODUCT -->
        </div>
        <!-- END SALE PRODUCT & All ARRIVALS -->

       

      </div>
    </div>

@endsection