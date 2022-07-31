@extends('frontend.layouts.app')
@section('content')
<section class="header-bottom contactbanner">
  <div class="header-container">
    <div class="header-brand">
      {{-- <div class="brand-img"> --}}
        {{-- <div class="brand-logo"> --}}
          <h1 class="header-title text-center">Project Details</h1>
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
            <li class="breadcrumb-item"><a href="#">Project Details</a></li>
          </ol>
        </nav>
      </div>
    </div>
  </div>
</section>
  <section class="project-details">
    <div class="container">
      
      <div class="row">
        <div class="col-md-12 col-lg-9">
          <div class="row">
            <div class="col-md-6"><img src="img/s-2.jpg" alt=""></div>
            <div class="col-md-6"><img src="img/s-3.jpg" alt=""></div>
          </div>
          <div class="row">
            <div class="col-md-12 details-text">
              <h3 class="mt-4">PROJECT <span class="fw-bold"> OVERVIEW</span></h3>
              <p class="mb-4">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Cum rerum beatae consequatur, totam fugit, alias fuga aliquam quod tempora a nisi esse magnam nulla quas! Error praesentium, vero dolorum laborum. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Cum rerum beatae consequatur, totam fugit.</p>
              <p class="mb-0">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Cum rerum beatae consequatur, totam fugit, alias fuga aliquam quod tempora a nisi esse magnam nulla quas! Error praesentium, vero dolorum laborum. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Cum rerum beatae consequatur, totam fugit.</p>
                                
            </div>
          </div>
          <div class="row">
            <div class="col-md-12 details-text">
              <h3 class="mt-4">INTERIOR  <span class="fw-bold"> DETAILS</span></h3>
              <img src="img/pd-1.jpg" class="py-4 img-responsive" alt="">
              <p class="mb-4">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Cum rerum beatae consequatur, totam fugit, alias fuga aliquam quod tempora a nisi esse magnam nulla quas! Error praesentium, vero dolorum laborum. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Cum rerum beatae consequatur, totam fugit.</p>
              <p class="mb-0">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Cum rerum beatae consequatur, totam fugit, alias fuga aliquam quod tempora a nisi esse magnam nulla quas! Error praesentium, vero dolorum laborum. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Cum rerum beatae consequatur, totam fugit.</p>
                                
            </div>
          </div>
          <div class="row">
            <div class="details-text">
              <h3 class="mt-4">COMPLETED <span class="fw-bold"> PROJECT</span></h3>
            </div>
            <div class="col-md-4 hover-effect">
              <div class="complete-porject">
                <a href="#">
                  <figure><img src="img/s-1.jpg" alt="project 1"></figure>
                </a>
              </div>
            </div>
            <div class="col-md-4 hover-effect">
              <div class="complete-porject">
                <a href="#">
                  <figure><img src="img/s-2.jpg" alt="project 2"></figure>
                </a>
              </div>
            </div>
            <div class="col-md-4 hover-effect">
              <div class="complete-porject">
                <a href="#">
                  <figure><img src="img/s-3.jpg" alt="project 3"></figure>
                </a>
              </div>
            </div>
          </div>
        </div>
        <div class="col-md-12 col-lg-3">
          <div class="service-box box-1">
            <div class="details-text">
              <h3 class="">SERVICES  <span class="fw-bold"> List</span></h3>
            </div>
            <ul>
              <li class="pt-0"><a href="#"><i class="fa fa-caret-right" aria-hidden="true"></i>Residential Interior</a></li>
              <li><a href="#"><i class="fa fa-caret-right" aria-hidden="true"></i>Commercial Interior</a></li>
              <li><a href="#"><i class="fa fa-caret-right" aria-hidden="true"></i>Office Interior</a></li>
              <li><a href="#"><i class="fa fa-caret-right" aria-hidden="true"></i>Hospitality Design</a></li>
              <li><a href="#"><i class="fa fa-caret-right" aria-hidden="true"></i>Modern Furniture</a></li>
          </ul>
            
          </div>
          <div class="service-box">
            <div class="details-text">
              <h3 class="mt-4">RECENT  <span class="fw-bold"> NEWS</span></h3>
            </div>
            <div class="d-flex n-content my-4">
              <div class="flex-shrink-0 news-img-content">
                <img src="img/blog/b-1.jpg" alt="...">
              </div>
              <div class="flex-grow-1 ">
                <h4 class="blog-title">Construction News</h4>
                <p>May 10, 2020</p>
              </div>
            </div>
             <div class="d-flex n-content my-4">
              <div class="flex-shrink-0 news-img-content">
                <img src="img/blog/b-2.jpg" alt="...">
              </div>
              <div class="flex-grow-1 ">
                <h4 class="blog-title">Architect Planning</h4>
                <p>May 10, 2020</p>
              </div>
            </div>
             <div class="d-flex n-content my-4">
              <div class="flex-shrink-0 news-img-content">
                <img src="img/blog/b-3.jpg" alt="...">
              </div>
              <div class="flex-grow-1 ">
                <h4 class="blog-title">House Renovation</h4>
                <p>May 10, 2020</p>
              </div>
            </div>
          </div>
          <div class="service-box">
            <div class="details-text">
              <h3 class="mt-4">POPULAR   <span class="fw-bold"> TAGS</span></h3>
              <div class="tags">
                <a href="#" class="btn btn-yellow btn-outline-primary">Renovation</a>
                <a href="#" class="btn btn-yellow btn-outline-primary">Interior</a>
              </div>
              <div class="tags">
                <a href="#" class="btn btn-yellow btn-outline-primary">Building</a>
                <a href="#" class="btn btn-yellow btn-outline-primary">Electrician</a>
              </div>
              <div class="tags">
                <a href="#" class="btn btn-yellow btn-outline-primary">Exterior Design</a>
                <a href="#" class="btn btn-yellow btn-outline-primary">Plumber</a>
              </div>
              <div class="tags">
                <a href="#" class="btn btn-yellow btn-outline-primary">Carpenter</a>
                <a href="#" class="btn btn-yellow btn-outline-primary">Construction</a>
              </div>
            </div>
          </div>
          <div class="service-box">
            <div class="details-text">
              <h3 class="mt-4">OPENING HOURS  <span class="fw-bold"> HOURS</span></h3>
              <ul class="list-group list-group-flush">
                 <li class="list-group-item d-flex justify-content-between align-items-center">
                    Monday
                    <span class="badge time">9 AM - 5 PM</span>
                  </li>
                  <li class="list-group-item d-flex justify-content-between align-items-center">
                    Tuesday
                    <span class="badge time">9 AM - 5 PM</span>
                  </li>
                  <li class="list-group-item d-flex justify-content-between align-items-center">
                    Wednesday
                    <span class="badge time">9 AM - 5 PM</span>
                  </li>
                  <li class="list-group-item d-flex justify-content-between align-items-center">
                    Thursday
                    <span class="badge time">9 AM - 5 PM</span>
                  </li>
                  <li class="list-group-item d-flex justify-content-between align-items-center">
                    Friday
                    <span class="badge time">9 AM - 5 PM</span>
                  </li>
                  <li class="list-group-item d-flex justify-content-between align-items-center">
                    Saturday
                    <span class="badge time">9 AM - 5 PM</span>
                  </li>
                  <li class="list-group-item d-flex justify-content-between align-items-center">
                    Sunday
                    <span class="badge time">Closed</span>
                  </li>
                </ul>
            </div>
          </div>
        </div>

      </div>
    </div>
  </section>
 


@endsection