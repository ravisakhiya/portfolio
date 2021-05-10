@extends('theme-master')

@section('theme-content')

 <!-- Hero -->
<section id="slider" class="hero p-0 odd">
    <div class="swiper-container full-slider featured animation slider-h-100">
        <div class="swiper-wrapper">
            <div class="swiper-slide slide-center">
                <img data-aos="zoom-out-up" data-aos-delay="800" src="{{ asset('uploads/banner/'.$banner->image) }}" class="hero-image" alt="Hero Image">
                <div class="slide-content row" data-mask-768="50">
                    <div class="col-12 d-flex inner">
                        <div class="left align-self-center text-center text-md-left">
                            <h1 data-aos="zoom-out-up" data-aos-delay="400" class="title effect-static-text">{{$banner->title}}</h1>
                            <p data-aos="zoom-out-up" data-aos-delay="800" class="description">{{$banner->detail}}</p>
                            <a href="#contact" data-aos="zoom-out-up" data-aos-delay="1200" class="smooth-anchor ml-auto mr-auto ml-md-0 mt-4 btn dark-button"><i class="icon-cup"></i>GET STARTED</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Get -->
<section id="get" class="section-2 hero p-0 right">
    <div class="swiper-container no-slider animation slider-h-100">
        <div class="swiper-wrapper">

            <!-- Item 1 -->
            <div class="swiper-slide slide-center">
                <img data-aos="zoom-out-up" data-aos-delay="800" src="{{ asset('uploads/about/'.$about->image) }}" class="hero-image-left" alt="Hero Image">

                <div class="slide-content row" data-mask-768="70">
                    <div class="col-12 d-flex justify-content-end inner">
                        <div class="right text-center text-md-right">
                            <h2 data-aos="zoom-out-up" data-aos-delay="400" class="title effect-static-text">{{ $about->title }}</h2>
                            <p data-aos="zoom-out-up" data-aos-delay="800" class="description ml-auto">{{ $about->detail }}</p>
                            <div class="d-sm-inline-flex mt-3">
                                <a href="{{ asset('uploads/resume/'.$about->resume) }}" target="_blank" data-aos="zoom-out-up" data-aos-delay="1200" class="smooth-anchor ml-auto mr-auto mr-md-0 mt-4 mt-sm-0 btn dark-button"></i>DOWNLOAD CV</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
        <div class="swiper-pagination"></div>
    </div>
</section>
<!-- Get -->
<!-- Services -->
<section id="services" class="section-4 odd offers featured">
    <div class="container">
        <div class="row intro">
            <div class="col-12 col-md-9 align-self-center text-center text-md-left">
                <h2 class="featured">Our Services</h2>
                <p>Focused on results we seek to raise the level of our customers.</p>
            </div>
            <div class="col-12 col-md-3 align-self-end">
                <a href="#" class="btn mx-auto mr-md-0 ml-md-auto primary-button"><i class="icon-grid"></i>VIEW ALL</a>
            </div>
        </div>
        <div class="row justify-content-center text-center items">
            @foreach ($services as $service)
            <div class="col-12 col-md-6 col-lg-4 item">
                <div class="card featured">
                    <i class="{{ $service->icons }}"></i>
                    <h4>{{ $service->title }}</h4>
                    <p>{{ $service->detail }}</p>
                    <a href="#"><i class="btn-icon icon-arrow-right-circle"></i></a>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</section>
<!-- Portfolio Grid -->
<section id="portfolio-grid" class="section-3 showcase portfolio blog-grid filter-section">
    <div class="overflow-holder">
        <div class="container">
            <div class="row text-center intro">
                <div class="col-12">
                    <h2 class="mb-0">What We Do</h2>
                </div>
            </div>
            <div class="row justify-content-center text-center">
                <div class="col-12">
                    <div class="btn-group btn-group-toggle" data-toggle="buttons">
                        <label class="btn active">
                            <input type="radio" value="all" checked class="btn-filter-item">
                            <span>All</span>
                        </label>
                        @foreach ($categorys as $category)
                            <label class="btn">
                                <input type="radio" value="{{ $category->slug }}" class="btn-filter-item">
                                <span>{{ $category->name }}</span>
                            </label>
                        @endforeach
                    </div>
                </div>
            </div>

            <div class="row items filter-items">
            @foreach ($projects as $project)

                <div class="col-12 col-md-6 col-lg-4 item filter-item" data-groups='["{{ $project->category }}"]'>
                    <div class="row card p-0 text-center">
                        <div class="gallery">
                            <a href="{{ asset('uploads/projects/'.$project->image) }}" class="image-over">
                                <img src="{{ asset('uploads/projects/'.$project->image) }}" alt="{{ $project->image }}">
                            </a>
                        </div>
                        <div class="card-caption col-12 p-0">
                            <div class="card-body">
                                <h4 class="m-0">{{ $project->name }}</h4>
                            </div>
                            <div class="card-footer d-lg-flex align-items-center justify-content-center">
                                <p>{{ $project->detail }}</p>
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach
                <div class="col-1 filter-sizer"></div>
            </div>

        </div>
    </div>
</section>
<style type="text/css">
    @charset "UTF-8";
/*font Variables*/
/*Color Variables*/
@import url("https://fonts.googleapis.com/css?family=Roboto:300i,400,400i,500,700,900");
.multi_step_form {
  background: #f6f9fb;
  display: block;
  overflow: hidden;
}
.multi_step_form #msform {
  text-align: center;
  position: relative;
  padding-top: 50px;
  min-height: 820px;
  max-width: 810px;
  margin: 0 auto;
  background: transparent;
  z-index: 1;
}
.multi_step_form #msform .tittle {
  text-align: center;
  padding-bottom: 55px;
}
.multi_step_form #msform .tittle h2 {
  font: 500 24px/35px "Roboto", sans-serif;
  color: #3f4553;
  padding-bottom: 5px;
}
.multi_step_form #msform .tittle p {
  font: 400 16px/28px "Roboto", sans-serif;
  color: #5f6771;
}
.multi_step_form #msform fieldset {
  border: 0;
  padding: 20px 105px 0;
  position: relative;
  width: 100%;
  left: 0;
  right: 0;
}
.multi_step_form #msform fieldset:not(:first-of-type) {
  display: none;
}
.multi_step_form #msform fieldset h3 {
  font: 500 18px/35px "Roboto", sans-serif;
  color: #3f4553;
}
.multi_step_form #msform fieldset h6 {
  font: 400 15px/28px "Roboto", sans-serif;
  color: #5f6771;
  padding-bottom: 30px;
}
.multi_step_form #msform fieldset .intl-tel-input {
  display: block;
  background: transparent;
  border: 0;
  box-shadow: none;
  outline: none;
}
.multi_step_form #msform fieldset .intl-tel-input .flag-container .selected-flag {
  padding: 0 20px;
  background: transparent;
  border: 0;
  box-shadow: none;
  outline: none;
  width: 65px;
}
.multi_step_form #msform fieldset .intl-tel-input .flag-container .selected-flag .iti-arrow {
  border: 0;
}
.multi_step_form #msform fieldset .intl-tel-input .flag-container .selected-flag .iti-arrow:after {
  content: "";
  position: absolute;
  top: 0;
  right: 0;
  font: normal normal normal 24px/7px Ionicons;
  color: #5f6771;
}
.multi_step_form #msform fieldset #phone {
  padding-left: 80px;
}
.multi_step_form #msform fieldset .form-group {
  padding: 0 10px;
}
.multi_step_form #msform fieldset .fg_2, .multi_step_form #msform fieldset .fg_3 {
  padding-top: 10px;
  display: block;
  overflow: hidden;
}
.multi_step_form #msform fieldset .fg_3 {
  padding-bottom: 70px;
}
.multi_step_form #msform fieldset .form-control, .multi_step_form #msform fieldset .product_select {
  border-radius: 3px;
  border: 1px solid #d8e1e7;
  padding: 0 20px;
  height: auto;
  font: 400 15px/48px "Roboto", sans-serif;
  color: #5f6771;
  box-shadow: none;
  outline: none;
  width: 100%;
}
.multi_step_form #msform fieldset .form-control.placeholder, .multi_step_form #msform fieldset .product_select.placeholder {
  color: #5f6771;
}
.multi_step_form #msform fieldset .form-control:-moz-placeholder, .multi_step_form #msform fieldset .product_select:-moz-placeholder {
  color: #5f6771;
}
.multi_step_form #msform fieldset .form-control::-moz-placeholder, .multi_step_form #msform fieldset .product_select::-moz-placeholder {
  color: #5f6771;
}
.multi_step_form #msform fieldset .form-control::-webkit-input-placeholder, .multi_step_form #msform fieldset .product_select::-webkit-input-placeholder {
  color: #5f6771;
}
.multi_step_form #msform fieldset .form-control:hover, .multi_step_form #msform fieldset .form-control:focus, .multi_step_form #msform fieldset .product_select:hover, .multi_step_form #msform fieldset .product_select:focus {
  border-color: #5cb85c;
}
.multi_step_form #msform fieldset .form-control:focus.placeholder, .multi_step_form #msform fieldset .product_select:focus.placeholder {
  color: transparent;
}
.multi_step_form #msform fieldset .form-control:focus:-moz-placeholder, .multi_step_form #msform fieldset .product_select:focus:-moz-placeholder {
  color: transparent;
}
.multi_step_form #msform fieldset .form-control:focus::-moz-placeholder, .multi_step_form #msform fieldset .product_select:focus::-moz-placeholder {
  color: transparent;
}
.multi_step_form #msform fieldset .form-control:focus::-webkit-input-placeholder, .multi_step_form #msform fieldset .product_select:focus::-webkit-input-placeholder {
  color: transparent;
}
.multi_step_form #msform fieldset .product_select:after {
  display: none;
}
.multi_step_form #msform fieldset .product_select:before {
  content: "";
  position: absolute;
  top: 0;
  right: 20px;
  font: normal normal normal 24px/48px Ionicons;
  color: #5f6771;
}
.multi_step_form #msform fieldset .product_select .list {
  width: 100%;
}
.multi_step_form #msform fieldset .done_text {
  padding-top: 40px;
}
.multi_step_form #msform fieldset .done_text .don_icon {
  height: 36px;
  width: 36px;
  line-height: 36px;
  font-size: 22px;
  margin-bottom: 10px;
  background: #5cb85c;
  display: inline-block;
  border-radius: 50%;
  color: #ffffff;
  text-align: center;
}
.multi_step_form #msform fieldset .done_text h6 {
  line-height: 23px;
}
.multi_step_form #msform fieldset .code_group {
  margin-bottom: 60px;
}
.multi_step_form #msform fieldset .code_group .form-control {
  border: 0;
  border-bottom: 1px solid #a1a7ac;
  border-radius: 0;
  display: inline-block;
  width: 30px;
  font-size: 30px;
  color: #5f6771;
  padding: 0;
  margin-right: 7px;
  text-align: center;
  line-height: 1;
}
.multi_step_form #msform fieldset .passport {
  margin-top: -10px;
  padding-bottom: 30px;
  position: relative;
}
.multi_step_form #msform fieldset .passport .don_icon {
  height: 36px;
  width: 36px;
  line-height: 36px;
  font-size: 22px;
  position: absolute;
  top: 4px;
  right: 0;
  background: #5cb85c;
  display: inline-block;
  border-radius: 50%;
  color: #ffffff;
  text-align: center;
}
.multi_step_form #msform fieldset .passport h4 {
  font: 500 15px/23px "Roboto", sans-serif;
  color: #5f6771;
  padding: 0;
}
.multi_step_form #msform fieldset .input-group {
  padding-bottom: 40px;
}
.multi_step_form #msform fieldset .input-group .custom-file {
  width: 100%;
  height: auto;
}
.multi_step_form #msform fieldset .input-group .custom-file .custom-file-label {
  width: 168px;
  border-radius: 5px;
  cursor: pointer;
  font: 700 14px/40px "Roboto", sans-serif;
  border: 1px solid #99a2a8;
  text-align: center;
  transition: all 300ms linear 0s;
  color: #5f6771;
}
.multi_step_form #msform fieldset .input-group .custom-file .custom-file-label i {
  font-size: 20px;
  padding-right: 10px;
}
.multi_step_form #msform fieldset .input-group .custom-file .custom-file-label:hover, .multi_step_form #msform fieldset .input-group .custom-file .custom-file-label:focus {
  background: #5cb85c;
  border-color: #5cb85c;
  color: #fff;
}
.multi_step_form #msform fieldset .input-group .custom-file input {
  display: none;
}
.multi_step_form #msform fieldset .file_added {
  text-align: left;
  padding-left: 190px;
  padding-bottom: 60px;
}
.multi_step_form #msform fieldset .file_added li {
  font: 400 15px/28px "Roboto", sans-serif;
  color: #5f6771;
}
.multi_step_form #msform fieldset .file_added li a {
  color: #5cb85c;
  font-weight: 500;
  display: inline-block;
  position: relative;
  padding-left: 15px;
}
.multi_step_form #msform fieldset .file_added li a i {
  font-size: 22px;
  padding-right: 8px;
  position: absolute;
  left: 0;
  transform: rotate(20deg);
}
.multi_step_form #msform #progressbar {
  margin-bottom: 30px;
  overflow: hidden;
}
.multi_step_form #msform #progressbar li {
  list-style-type: none;
  color: #99a2a8;
  font-size: 9px;
  width: calc(100%/3);
  float: left;
  position: relative;
  font: 500 13px/1 "Roboto", sans-serif;
}
.multi_step_form #msform #progressbar li:nth-child(2):before {
  content: "";
}
.multi_step_form #msform #progressbar li:nth-child(3):before {
  content: "";
}
.multi_step_form #msform #progressbar li:before {
  content: "";
  font: normal normal normal 30px/50px Ionicons;
  width: 50px;
  height: 50px;
  line-height: 50px;
  display: block;
  background: #eaf0f4;
  border-radius: 50%;
  margin: 0 auto 10px auto;
}
.multi_step_form #msform #progressbar li:after {
  content: "";
  width: 100%;
  height: 10px;
  background: #eaf0f4;
  position: absolute;
  left: -50%;
  top: 21px;
  z-index: -1;
}
.multi_step_form #msform #progressbar li:last-child:after {
  width: 150%;
}
.multi_step_form #msform #progressbar li.active {
  color: #5cb85c;
}
.multi_step_form #msform #progressbar li.active:before, .multi_step_form #msform #progressbar li.active:after {
  background: #5cb85c;
  color: white;
}
.multi_step_form #msform .action-button {
  background: #5cb85c;
  color: white;
  border: 0 none;
  border-radius: 5px;
  cursor: pointer;
  min-width: 130px;
  font: 700 14px/40px "Roboto", sans-serif;
  border: 1px solid #5cb85c;
  margin: 0 5px;
  text-transform: uppercase;
  display: inline-block;
}
.multi_step_form #msform .action-button:hover, .multi_step_form #msform .action-button:focus {
  background: #405867;
  border-color: #405867;
}
.multi_step_form #msform .previous_button {
  background: transparent;
  color: #99a2a8;
  border-color: #99a2a8;
}
.multi_step_form #msform .previous_button:hover, .multi_step_form #msform .previous_button:focus {
  background: #405867;
  border-color: #405867;
  color: #fff;
}
</style>
<!-- Contact -->
<section id="contact" class="section-7 odd form featured multi_step_form">
    <!-- Multi step form -->
    <div class="row justify-content-center">
        <div class="col-12 col-md-8">
    <div class="step-title text-center" id="step-title-1">
        <h2 class="featured alt">Let's Talk?</h2>
        <p>Don't wait until tomorrow. Talk to one of our consultants today and learn how to start leveraging your business.</p>
    </div>
</div>
</div>
  <form id="msform" action="{{ route('contact.submit') }}" enctype="multipart/form-data" method="POST">
    <!-- Tittle -->
    <!-- progressbar -->
    @csrf
    <ul id="progressbar">
      <li class="active">Personal Details</li>
      <li>Company Budget</li>
      <li>Service Setup</li>
    </ul>
    <!-- fieldsets -->
    <fieldset class="slide one">
      <h3>Personal Details</h3>
      <div class="form-row">
        <div class="form-group col-md-12">
            <input type="text" id="name" class="form-control" name="name" placeholder="Enter Your Name">
        </div>
        <div class="form-group col-md-12">
          <input type="email" id="email" class="form-control" name="email" placeholder="Enter Your Email">
        </div>
        <div class="form-group col-md-12">
          <input type="tel" id="phone" class="form-control" name="phone" placeholder="+91 0101010101">
        </div>
      </div>
      <button type="button" class="action-button previous_button">Back</button>
      <button type="button" class="next action-button">Continue</button>
    </fieldset>
    <fieldset class="slide two">
      <h3>Company Budget</h3>
      <div class="form-row">
        <div class="form-group col-md-12">
          <input type="text" id="company" class="form-control" name="company" placeholder="Company">
        </div>
        <div class="form-group col-md-12">
          <input type="text" id="manager" class="form-control" name="manager" placeholder="Manager">
        </div>
        <div class="form-group col-md-12">
            <select name="budget" class="product_select">
                <option selected disabled>What's your budget range?</option>
                <option value="Less than $2.000">Less than $2.000</option>
                <option value="$2.000 — $5.000">$2.000 — $5.000</option>
                <option value="$5.000 — $10.000">$5.000 — $10.000</option>
                <option value="$10,000+">$10,000+</option>
            </select>
        </div>
      </div>
      <button type="button" class="action-button previous previous_button">Back</button>
      <button type="button" class="next action-button">Continue</button>
    </fieldset>
    <fieldset class="slide three">
      <h3>Create Security Questions</h3>
      <div class="form-row">
        <div class="form-group col-md-12">
            <textarea name="message" data-minlength="3" class="form-control field-message" placeholder="Message" required=""></textarea>
        </div>
      </div>
      <button type="button" class="action-button previous previous_button">Back</button>
      <button type="submit" class="action-button finish-btn previous previous_button">Finish</button>
    </fieldset>
  </form>
</section>

@endsection
