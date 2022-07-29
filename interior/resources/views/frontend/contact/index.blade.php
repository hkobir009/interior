@extends('frontend.layouts.app')
@section('content')
<section class="header-bottom contactbanner">
    <div class="header-container">
      <div class="header-brand">
        {{-- <div class="brand-img"> --}}
          {{-- <div class="brand-logo"> --}}
            <h1 class="header-title text-center">Contact Us</h1>
          {{-- </div> --}}
        {{-- </div> --}}
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
              <li class="breadcrumb-item"><a href="#">Contact us</a></li>
            </ol>
          </nav>
        </div>
      </div>
    </div>
  </section>
  <section class="contact-us">
    <div class="container">
      
      <div class="row">
        <div class="col-md-8">
          <div class="section-title mt-50">
            <h3>Have any Query?</h3>
            <h2>Contact Us</h2>
         </div>
           {{-- <h1 class="text-center title my-4">Contact <span>Us </span></h1> --}}
          <form>
            <div class="mb-3">
              <input type="text" class="form-control" id="firstname" placeholder="First Name">
            </div>
            <div class="mb-3">
              <input type="text" class="form-control" id="lastname" placeholder="Last name">
            </div>
            <div class="mb-3">
              <input type="email" class="form-control" id="exampleInputEmail1" placeholder="Email">
            </div>
            <div class="mb-3">
              <textarea class="form-control" id="exampleFormControlTextarea1" rows="3">Your Message</textarea>

            </div>
            <div class="d-flex text-center justify-content-center">
              <button type="submit" class="btn btn-secondary btn-lg btn-get" style="border-radius: 0">Submit</button>
            
            </div>
            </form>
        </div>
        <div class="col-md-4 contact-inf">
          <h4>Keep in touch</h4>
          <div class="d-flex align-items-center">
            <div class="flex-shrink-0">
              <span class="box-circle"><i class="fa-solid fa-location-dot"></i></span>
              
            </div>
            <div class="flex-grow-1 ms-3">
               95 South Park Ave.
            </div>
          </div>
          <div class="d-flex align-items-center">
            <div class="flex-shrink-0">
                            <span class="box-circle"><i class="fa-solid fa-envelope"></i></span>
              
            </div>
            <div class="flex-grow-1 ms-3">
               info@admin.com
            </div>
          </div>
          <div class="d-flex align-items-center">
            <div class="flex-shrink-0">
                          <span class="box-circle"><i class="fa-solid fa-phone"></i></span>
              
            </div>
            <div class="flex-grow-1 ms-3">
                +880 1725468955
            </div>
          </div>
          <div class="d-flex align-items-center">
            <div class="flex-shrink-0">
                            <span class="box-circle"><i class="fa-brands fa-whatsapp"></i></span>
              
            </div>
            <div class="flex-grow-1 ms-3">
               +880 1725468955
            </div>
          </div>
        </div>

      </div>
    </div>
  </section>
  <section class="maps-container my-5">
    <!-- <div class="container-fluid"> -->
      <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d14594.628318985333!2d90.3886470971724!3d23.866307850984445!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3755c43afd6998ad%3A0xcef4ff45892a6bf1!2sHousebuilding%20Counter!5e0!3m2!1sbn!2sbd!4v1656990892650!5m2!1sbn!2sbd" width="100%" height="600" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
    <!-- </div> -->
  </section>

  @endsection