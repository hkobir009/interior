@extends('frontend.layouts.app')
@section('content')

   <section class="header-bottom product">
    <div class="container">
      <div class="header-brand">
        <!-- <div class="brand-img"> -->
          <!-- <div class="brand-logo"> -->
            <h1 class="header-title text-center">PROJECT DETAIL</h1>
          <!-- </div> -->
        <!-- </div> -->
      </div>
    </div>
  </section>

  <section class="bottom-nav py-3">
    <div class="container">
      <div class="row">
        <div class="col-lg-12">
          <nav class="header-link" aria-label="breadcrumb">
            <ol class="breadcrumb">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item"><a href="#">PROJECT DETAIL</a></li>
            </ol>
          </nav>
        </div>
      </div>
    </div>
  </section>
  <section class="aboutus-details">
    <div class="container">
      <div class="row">
        <div class="col-lg-12 about-top">
          <h5>Sed non mauris vitae erat consequat Auctor eu in elit. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Mauris in erat justo. Nullam ac urna eu felis dapibus Condimentum sit amet a augue. Sed non Neque elit. Sed ut imperdiet nisi. Proin condimentum.</h5>
        </div>
      </div>
      <div class="row">
        <div class="col-lg-7">
          <div class="img-box">
            <a href="">
              <img src="{{asset('img/about-us-img-1.jpg')}}" alt="">
            </a>
          </div>
          <div class="img-box">
            <a href="">
              <img src="{{asset('asset/img/about-us-img-2.jpg')}}" alt="">
            </a>
          </div>
        </div>
        <div class="col-lg-5">
          <div class="about-content-box">
            <h3>OUR HISTORY</h3>
            <div class="about-us-title">
              <span></span>
              <h5>About us</h5>
            </div>
            <p>Lorem ipsum dolor sit amet, ius et simul antiopam vituperata. Ei vix prima homero animal. Te mei adipisci democritum, saepe nostrud an mei. Illum viris sententiae qui an.Cu has commodo dolorum posidonium, cum ad equidem suscipiantur, sea ea melius debitis mediocritatem. Ei iusto ornatus albucius nec. Has id posse feugait accusamus. At qui errem quaestio. Ei usu movet populo dissentiet. Nostro latine usu an, vulputate concludaturque ut eos, quando deleniti per eu. Pri quem scripta at. At nam nullam</p>
          </div>
        </div>
      </div>
    </div>
  </section>
  <section class="ourproject-page">
    <div class="container">
      <div class="row">
        <div class="col-lg-3 text-center">
          <div class="counter-box">
            <span class="counter-count">591</span>
            <h6>Finished Projects</h6>
          </div>
        </div>
        <div class="col-lg-3 text-center">
          <div class="counter-box">
            <span class="counter-count">778</span>
            <h6>New Designs</h6>
          </div>
        </div>
        <div class="col-lg-3 text-center">
          <div class="counter-box">
            <span class="counter-count">121</span>
            <h6>Different materials</h6>
          </div>
        </div>
        <div class="col-lg-3 text-center">
          <div class="counter-box">
            <span class="counter-count">725</span>
            <h6>Happy Clients</h6>
          </div>
        </div>
      </div>
    </div>
  </section>
  <section class="project-bg"  data-parallax="scroll" data-image-src="{{asset('img/about-us-background-img-1.jpg') }}">
    <div class="container">
      <div class="row align-items-center pt-50">
        <div class="col-lg-12">
          <div class="project-header">
            <h1>Project</h1>
            <a href="#" class="btn btn-seemore"> See More</a>
          </div>
            
        </div>
      </div>
    </div>
  </section>
  <section class="our-skillpage">
    <div class="container">
      <div class="row">
        <div class="col-lg-6">
          <div class="img-wrapper">
            <div class="img-holder">
              <div class="img-holder-item">
                <div class="box-shdaow-item">
                  <img src="{{asset('img/about-us-img-3.jpg')}}" width="800px;" alt="">
                  <div class="box-shadow-box"></div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="col-lg-6">
          <div class="skill-details">
            <h3>Our skill</h3>
            <p>Altera nostrud eam cu. Pri quem scripta at. At nam nullam dicunt constituam, velit viris ancillae ut sed, ponderum delicatissimi qui ut. Ex sed fastidii vivendum, euismod placerat mel ea.</p>
            <a class="btn btn-seemore see-btn"><span class="seetxt">See More</span> <i class="fa-solid fa-arrow-right"></i></a>

            <div class="progressbar">
              <div class="single-progressbar">
                  <h4 class="title">INTERIOR DESIGN</h4>
                  <div class="html"></div>
              </div>
              <div class="top-line"></div>
              <div class="single-progressbar">
                  <h4 class="title">NEW PROJECTS</h4>
                  <div class="css"></div>
              </div>
              <div class="top-line"></div>
              <div class="single-progressbar">
                  <h4 class="title">ARCHITECTURE55</h4>
                  <div class="php"></div>
              </div>
              <div class="top-line"></div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
@endsection
@section('script')
<script>
  $(document).ready(function(){
    $('.counter-count').counterUp({
     delay: 10,
      time: 5000

    });
    $('.project-bg').parallax({imageSrc: '{{ asset("img/about-us-background-img-1.jpg") }}'});
        $('.html').rProgressbar({
        percentage: 60,
        // fillBackgroundColor: '#1abc9c'
    });
    $('.css').rProgressbar({
        percentage: 88,
        // fillBackgroundColor: '#2ecc71'
    });



    $('.php').rProgressbar({
        percentage: 55,
        // fillBackgroundColor: '#9b59b6'
    });

    $('.owl-car').owlCarousel({
      loop:true,
      margin:10,
      nav:true,
      autoplay:true,
      autoplayTimeout:10000,
      autoplayHoverPause:true,
      navText: ['<i class="fa-solid fa-arrow-left-long"></i>', '<i class="fa-solid fa-arrow-right-long"></i>'],
      responsive:{
          0:{
              items:1
          },
          600:{
              items:3
          },
          1000:{
              items:2
          }
      }
      
  })

  });

  AOS.init();
</script>


@endsection