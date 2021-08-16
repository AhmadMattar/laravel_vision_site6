
  <!-- ======= Hero Section ======= -->
  <section id="hero" class="d-flex align-items-center">
    <div class="container position-relative text-center text-lg-start" data-aos="zoom-in" data-aos-delay="100">
      <div class="row">
        <div class="col-lg-8">
            @isset($title)
                <h1>Welcome to <span>{{$title}}</span></h1>
            @endisset

            @isset($text)
                <h2>{{$text}}</h2>
            @endisset

          <div class="btns">
            <a href="{{route('menu')}}" class="btn-menu animated fadeInUp scrollto">Our Menu</a>
            <a href="{{route('bookTable')}}" class="btn-book animated fadeInUp scrollto">Book a Table</a>
          </div>
        </div>
        @isset($video)
          <div class="col-lg-4 d-flex align-items-center justify-content-center position-relative" data-aos="zoom-in" data-aos-delay="200">
            <a href="{{$video}}" class="glightbox play-btn"></a>
          </div>
        @endisset


      </div>
    </div>
  </section><!-- End Hero -->
