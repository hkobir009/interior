@extends('frontend.layouts.app')
@section('content')
<section class="header-bottom contactbanner">
  <div class="header-container">
    <div class="header-brand">
      {{-- <div class="brand-img"> --}}
        {{-- <div class="brand-logo"> --}}
          <h1 class="header-title text-center">Our Service</h1>
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
            <li class="breadcrumb-item"><a href="#">Service</a></li>
          </ol>
        </nav>
      </div>
    </div>
  </div>
</section>
  
  <section class="product-container pt-4">
    <div class="container-fluid px-4">
      {{-- <div class="row justify-content-center align-items-center">
        <div class="col-lg-8">
          <h1 class="text-center">Most Popular Design And Projects</h1>
          <div class="bottom-line"></div>
        </div>
      </div> --}}
      <div class="row my-5">
        <div class="col-lg-12">
          <ul class="nav nav-tabs justify-content-center mb-5" id="myTab" role="tablist">
      <li class="nav-item" role="presentation">
        <button class="nav-link active" id="all-tab" data-bs-toggle="tab" data-bs-target="#all-tab-pane" type="button" role="tab" aria-controls="all-tab-pane" aria-selected="true">All</button>
      </li>
      <li class="nav-item" role="presentation">
        <button class="nav-link" id="hotel-tab" data-bs-toggle="tab" data-bs-target="#hotel-tab-pane" type="button" role="tab" aria-controls="hotel-tab-pane" aria-selected="false">Hotels and Restaurant</button>
      </li>
      <li class="nav-item" role="presentation">
        <button class="nav-link" id="office-tab" data-bs-toggle="tab" data-bs-target="#office-tab-pane" type="button" role="tab" aria-controls="office-tab-pane" aria-selected="false">Office</button>
      </li>
      <li class="nav-item" role="presentation">
        <button class="nav-link" id="retail-tab" data-bs-toggle="tab" data-bs-target="#retail-tab-pane" type="button" role="tab" aria-controls="retail-tab-pane" aria-selected="false">Retail</button>
      </li>
        <li class="nav-item" role="presentation">
        <button class="nav-link" id="public-tab" data-bs-toggle="tab" data-bs-target="#public-tab-pane" type="button" role="tab" aria-controls="public-tab-pane" aria-selected="false">Public building</button>
      </li>
        <li class="nav-item" role="presentation">
        <button class="nav-link" id="residental-tab" data-bs-toggle="tab" data-bs-target="#residental-tab-pane" type="button" role="tab" aria-controls="residental-tab-pane" aria-selected="false">Residential</button>
      </li>
    </ul>
          <div class="tab-content" id="myTabContent">
            <div class="tab-pane fade show active" id="all-tab-pane" role="tabpanel" aria-labelledby="home-tab" tabindex="0">
              <div class="row">
                <div class="col-lg-4">
                  <div class="image-container">
                    <a href="#">
                      <img src="img/image-1.jpeg" alt="img" class="img-fluid">
                    </a>
                    <div class="content-text">
                      <a href="#">
                        <span class="ltext">Art space | Parisian art boutique renovation</span><br><span>Paris - France</span>
                      </a>
                    </div>
                  </div>
                </div>
                <div class="col-lg-4">
                  <div class="image-container">
                    <a href="#">
                      <img src="img/image-2.jpeg" alt="img" class="img-fluid">
                    </a>
                    <div class="content-text">
                      <a href="#">
                        <span class="ltext">Woods Quay | Panbeton® bar & fireplace cladding
                        </span><br><span>Londres - Royaume-Uni</span>
                      </a>
                    </div>
                  </div>
                </div>
                <div class="col-lg-4">
                  <div class="image-container">
                    <a href="#">
                      <img src="img/image-3.jpeg" alt="img" class="img-fluid">
                    </a>
                    <div class="content-text">
                      <a href="#">
                        <span class="ltext">Denfert Rochereau | Concrete duplex</span><br><span>Paris - France</span>
                      </a>
                    </div>
                  </div>
                </div>
                <div class="col-lg-4">
                  <div class="image-container">
                    <a href="#">
                      <img src="img/image-4.jpeg" alt="img" class="img-fluid">
                    </a>
                    <div class="content-text">
                      <a href="#">
                        <span class="ltext">Dynasty Heights | Flat by Plot</span><br><span>Hongkong - china</span>
                      </a>
                    </div>
                  </div>
                </div>
                <div class="col-lg-4">
                  <div class="image-container">
                    <a href="#">
                      <img src="img/image-4.jpg" alt="img" class="img-fluid">
                    </a>
                    <div class="content-text">
                      <a href="#">
                        <span class="ltext">Designing seminar and meeting spaces - Comet Meetings</span><br><span>Paris - France</span>
                      </a>
                    </div>
                  </div>
                </div>
                <div class="col-lg-4">
                  <div class="image-container">
                    <a href="#">
                      <img src="img/image-5.jpeg" alt="img" class="img-fluid">
                    </a>
                    <div class="content-text">
                      <a href="#">
                        <span class="ltext">Nicolas Fafiotte Couture | Scenography for the couturier’s studio</span><br><span>lyon - France</span>
                      </a>
                    </div>
                  </div>
                </div>
                <div class="col-lg-4">
                  <div class="image-container">
                    <a href="#">
                      <img src="img/image-6.jpeg" alt="img" class="img-fluid">
                    </a>
                    <div class="content-text">
                      <a href="#">
                        <span class="ltext">Claude Cartier Studio | Showroom Decoration</span><br><span>Paris - France</span>
                      </a>
                    </div>
                  </div>
                </div>
                <div class="col-lg-4">
                  <div class="image-container">
                    <a href="#">
                      <img src="img/image-7.jpeg" alt="img" class="img-fluid">
                    </a>
                    <div class="content-text">
                      <a href="#">
                        <span class="ltext">Starbucks Las Vegas | Panbeton® with custom made logo</span><br><span>Las Vegas - États-Unis</span>
                      </a>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="tab-pane fade" id="hotel-tab-pane" role="tabpanel" aria-labelledby="hotel-tab" tabindex="0">
              <div class="row">
                <div class="col-lg-4">
                  <div class="image-container">
                    <a href="#">
                      <img src="img/image-2.jpeg" alt="img" class="img-fluid">
                    </a>
                    <div class="content-text">
                      <a href="#">
                        <span class="ltext">Woods Quay | Panbeton® bar & fireplace cladding
                        </span><br><span>Londres - Royaume-Uni</span>
                      </a>
                    </div>
                  </div>
                </div>
                <div class="col-lg-4">
                  <div class="image-container">
                    <a href="#">
                      <img src="img/image-3.jpeg" alt="img" class="img-fluid">
                    </a>
                    <div class="content-text">
                      <a href="#">
                        <span class="ltext">Denfert Rochereau | Concrete duplex</span><br><span>Paris - France</span>
                      </a>
                    </div>
                  </div>
                </div>
                <div class="col-lg-4">
                  <div class="image-container">
                    <a href="#">
                      <img src="img/image-4.jpeg" alt="img" class="img-fluid">
                    </a>
                    <div class="content-text">
                      <a href="#">
                        <span class="ltext">Dynasty Heights | Flat by Plot</span><br><span>Hongkong - china</span>
                      </a>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="tab-pane fade" id="office-tab-pane" role="tabpanel" aria-labelledby="contact-tab" tabindex="0">
              <div class="row">
                <div class="col-lg-4">
                  <div class="image-container">
                    <a href="#">
                      <img src="img/image-2.jpeg" alt="img" class="img-fluid">
                    </a>
                    <div class="content-text">
                      <a href="#">
                        <span class="ltext">Woods Quay | Panbeton® bar & fireplace cladding
                        </span><br><span>Londres - Royaume-Uni</span>
                      </a>
                    </div>
                  </div>
                </div>
                <div class="col-lg-4">
                  <div class="image-container">
                    <a href="#">
                      <img src="img/image-3.jpeg" alt="img" class="img-fluid">
                    </a>
                    <div class="content-text">
                      <a href="#">
                        <span class="ltext">Denfert Rochereau | Concrete duplex</span><br><span>Paris - France</span>
                      </a>
                    </div>
                  </div>
                </div>
                <div class="col-lg-4">
                  <div class="image-container">
                    <a href="#">
                      <img src="img/image-4.jpeg" alt="img" class="img-fluid">
                    </a>
                    <div class="content-text">
                      <a href="#">
                        <span class="ltext">Dynasty Heights | Flat by Plot</span><br><span>Hongkong - china</span>
                      </a>
                    </div>
                  </div>
                </div>
                <div class="col-lg-4">
                  <div class="image-container">
                    <a href="#">
                      <img src="img/image-4.jpg" alt="img" class="img-fluid">
                    </a>
                    <div class="content-text">
                      <a href="#">
                        <span class="ltext">Designing seminar and meeting spaces - Comet Meetings</span><br><span>Paris - France</span>
                      </a>
                    </div>
                  </div>
                </div>
                <div class="col-lg-4">
                  <div class="image-container">
                    <a href="#">
                      <img src="img/image-5.jpeg" alt="img" class="img-fluid">
                    </a>
                    <div class="content-text">
                      <a href="#">
                        <span class="ltext">Nicolas Fafiotte Couture | Scenography for the couturier’s studio</span><br><span>lyon - France</span>
                      </a>
                    </div>
                  </div>
                </div>
                <div class="col-lg-4">
                  <div class="image-container">
                    <a href="#">
                      <img src="img/image-7.jpeg" alt="img" class="img-fluid">
                    </a>
                    <div class="content-text">
                      <a href="#">
                        <span class="ltext">Starbucks Las Vegas | Panbeton® with custom made logo</span><br><span>Las Vegas - États-Unis</span>
                      </a>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="tab-pane fade" id="retail-tab-pane" role="tabpanel" aria-labelledby="disabled-tab" tabindex="0">
              <div class="row">
                <div class="col-lg-4">
                  <div class="image-container">
                    <a href="#">
                      <img src="img/image-3.jpeg" alt="img" class="img-fluid">
                    </a>
                    <div class="content-text">
                      <a href="#">
                        <span class="ltext">Denfert Rochereau | Concrete duplex</span><br><span>Paris - France</span>
                      </a>
                    </div>
                  </div>
                </div>
                <div class="col-lg-4">
                  <div class="image-container">
                    <a href="#">
                      <img src="img/image-4.jpeg" alt="img" class="img-fluid">
                    </a>
                    <div class="content-text">
                      <a href="#">
                        <span class="ltext">Dynasty Heights | Flat by Plot</span><br><span>Hongkong - china</span>
                      </a>
                    </div>
                  </div>
                </div>
                <div class="col-lg-4">
                  <div class="image-container">
                    <a href="#">
                      <img src="img/image-4.jpg" alt="img" class="img-fluid">
                    </a>
                    <div class="content-text">
                      <a href="#">
                        <span class="ltext">Designing seminar and meeting spaces - Comet Meetings</span><br><span>Paris - France</span>
                      </a>
                    </div>
                  </div>
                </div>
                <div class="col-lg-4">
                  <div class="image-container">
                    <a href="#">
                      <img src="img/image-5.jpeg" alt="img" class="img-fluid">
                    </a>
                    <div class="content-text">
                      <a href="#">
                        <span class="ltext">Nicolas Fafiotte Couture | Scenography for the couturier’s studio</span><br><span>lyon - France</span>
                      </a>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="tab-pane fade" id="public-tab-pane" role="tabpanel" aria-labelledby="disabled-tab" tabindex="0">
              <div class="row">
                <div class="col-lg-4">
                  <div class="image-container">
                    <a href="#">
                      <img src="img/image-3.jpeg" alt="img" class="img-fluid">
                    </a>
                    <div class="content-text">
                      <a href="#">
                        <span class="ltext">Denfert Rochereau | Concrete duplex</span><br><span>Paris - France</span>
                      </a>
                    </div>
                  </div>
                </div>
                <div class="col-lg-4">
                  <div class="image-container">
                    <a href="#">
                      <img src="img/image-4.jpeg" alt="img" class="img-fluid">
                    </a>
                    <div class="content-text">
                      <a href="#">
                        <span class="ltext">Dynasty Heights | Flat by Plot</span><br><span>Hongkong - china</span>
                      </a>
                    </div>
                  </div>
                </div>
                <div class="col-lg-4">
                  <div class="image-container">
                    <a href="#">
                      <img src="img/image-4.jpg" alt="img" class="img-fluid">
                    </a>
                    <div class="content-text">
                      <a href="#">
                        <span class="ltext">Designing seminar and meeting spaces - Comet Meetings</span><br><span>Paris - France</span>
                      </a>
                    </div>
                  </div>
                </div>
                <div class="col-lg-4">
                  <div class="image-container">
                    <a href="#">
                      <img src="img/image-5.jpeg" alt="img" class="img-fluid">
                    </a>
                    <div class="content-text">
                      <a href="#">
                        <span class="ltext">Nicolas Fafiotte Couture | Scenography for the couturier’s studio</span><br><span>lyon - France</span>
                      </a>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="tab-pane fade" id="residental-tab-pane" role="tabpanel" aria-labelledby="disabled-tab" tabindex="0">
              <div class="row">
                                <div class="col-lg-4">
                  <div class="image-container">
                    <a href="#">
                      <img src="img/image-4.jpg" alt="img" class="img-fluid">
                    </a>
                    <div class="content-text">
                      <a href="#">
                        <span class="ltext">Designing seminar and meeting spaces - Comet Meetings</span><br><span>Paris - France</span>
                      </a>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  @endsection