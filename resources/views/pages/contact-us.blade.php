@extends('theme-master') @section('theme-content')

<!-- Hero -->
<section id="slider" class="hero p-0 odd featured">
    <div class="swiper-container no-slider slider-h-75">
        <div class="swiper-wrapper">
            <!-- Item 1 -->
            <div class="swiper-slide slide-center">
                <img src="{{ asset('theme/images/bg-4.jpg') }}" class="full-image" data-mask="70" />

                <div class="slide-content row text-center">
                    <div class="col-12 mx-auto inner">
                        <h1 data-aos="zoom-out-up" data-aos-delay="400" class="title effect-static-text">Contact Us</h1>
                        <nav data-aos="zoom-out-up" data-aos-delay="800" aria-label="breadcrumb">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="index.html#demos">Home</a></li>
                                <li class="breadcrumb-item"><a href="index.html#pages">Pages</a></li>
                                <li class="breadcrumb-item active" aria-current="page">Contact Us</li>
                            </ol>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Contacts -->
<section id="contacts" class="section-1 offers">
    <div class="container">
        <div class="row intro">
            <div class="col-12 col-md-9 align-self-center text-center text-md-left">
                <h2 class="featured">How Can We Help?</h2>
                <p>Talk to one of our consultants today and learn how to start leveraging your business.</p>
            </div>
            <div class="col-12 col-md-3 align-self-end">
                <a href="#contact" class="smooth-anchor btn mx-auto mr-md-0 ml-md-auto primary-button"><i class="icon-speech"></i>GET IN TOUCH</a>
            </div>
        </div>
        <div class="row justify-content-center text-center items">
            <div class="col-12 col-md-6 col-lg-4 item">
                <div class="card featured">
                    <i class="icon icon-phone"></i>
                    <h4>+1 123 98765 4321</h4>
                    <p class="mb-1">We answer by phone from Monday to Saturday from 10 am until 6 pm.</p>
                </div>
            </div>
            <div class="col-12 col-md-6 col-lg-4 item">
                <div class="card">
                    <i class="icon icon-envelope"></i>
                    <h4>hello@business.com</h4>
                    <p class="mb-1">We will respond to your email within 8 hours on business days.</p>
                </div>
            </div>
            <div class="col-12 col-md-6 col-lg-4 item">
                <div class="card featured">
                    <i class="icon icon-location-pin"></i>
                    <h4>Office Street, 123</h4>
                    <p class="mb-1">Come visit us from Monday to Friday from 11 am to 4 pm.</p>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Custom -->
<section id="custom" class="section-2 map">
    <iframe
        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2970.123073808986!2d12.490042215441486!3d41.89021017922119!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x132f61b6532013ad%3A0x28f1c82e908503c4!2sColiseu!5e0!3m2!1spt-BR!2sbr!4v1594148229878!5m2!1spt-BR!2sbr"
        width="600"
        height="450"
        aria-hidden="false"
        tabindex="0"
    ></iframe>
</section>

<!-- Contact -->
<section id="contact" class="section-7 odd form featured">
    <div class="container">
        <div class="row">
            <div class="col-12 col-md-6">
                @if ($message = Session::get('success'))
                    <div class="alert alert-success">
                        <p>
                            {{ $message }}
                        </p>
                    </div>
                @endif
                <form class="form" action="{{ route('contact.submit') }}" enctype="multipart/form-data" method="POST">
                    @csrf
                    <div class="form-group">
                        <input type="text" class="form-control" id="name" placeholder="Enter Name" />
                    </div>
                    <div class="form-group">
                        <input type="email" class="form-control" name="email" placeholder="Enter email" />
                        <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
                    </div>
                    <div class="form-group">
                        <input type="phone" name="phone" class="form-control" placeholder="Phone" />
                    </div>
                    <div class="form-group">
                        <textarea class="form-control" name="msg" placeholder="Enter Message"></textarea>
                    </div>
                    <button type="submit" class="btn primary-button">SUBMIT <i class="icon-arrow-right-circle left"></i></button>
                </form>
            </div>
            <div class="col-12 col-md-6">
                <img src="{{ asset('theme/images/about-2.jpg') }}" class="fit-image" alt="Contact Us" />
            </div>
        </div>
    </div>
</section>

@endsection
