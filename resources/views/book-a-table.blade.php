@extends('master')
@include('include',[
    'title' => 'Book A Table'
])
@section('body')
  <main id="main">

    <!-- ======= Book A Table Section ======= -->
    <section id="book-a-table" class="book-a-table">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h2>Reservation</h2>
          <p>Book a Table</p>
        </div>

        <form action="{{route('bookTableSubmit')}}" method="POST" >
            @csrf
            <div class="row">
                <div class="col-lg-4 col-md-6 form-group">
                <input type="text" name="name" class="form-control @error('name') is-invalid @enderror" id="name" placeholder="Your Name" value="{{old('name')}}">
                @error('name')
                    <small invalid-feedback>{{$message}}</small>
                @enderror
                </div>

                <div class="col-lg-4 col-md-6 form-group mt-3 mt-md-0">
                <input type="email" class="form-control @error('email') is-invalid @enderror" name="email" id="email" placeholder="Your Email" data-rule="email" value="{{old('email')}}">
                @error('email')
                    <small invalid-feedback>{{$message}}</small>
                @enderror
                </div>

                <div class="col-lg-4 col-md-6 form-group mt-3 mt-md-0">
                <input type="text" class="form-control @error('phone') is-invalid @enderror" name="phone" id="phone" placeholder="Your Phone" value="{{old('phone')}}">
                @error('phone')
                    <small invalid-feedback>{{$message}}</small>
                @enderror
                </div>

                <div class="col-lg-4 col-md-6 form-group mt-3">
                <input type="text" name="date" class="form-control @error('date') is-invalid @enderror" id="date" placeholder="Date" value="{{old('date')}}">
                @error('date')
                    <small invalid-feedback>{{$message}}</small>
                @enderror
                </div>

                <div class="col-lg-4 col-md-6 form-group mt-3">
                <input type="text" class="form-control @error('time') is-invalid @enderror" name="time" id="time" placeholder="Time" value="{{old('time')}}">
                @error('time')
                    <small invalid-feedback>{{$message}}</small>
                @enderror
                </div>

                <div class="col-lg-4 col-md-6 form-group mt-3">
                <input type="number" class="form-control @error('people') is-invalid @enderror" name="people" id="people" placeholder="# of people" value="{{old('people')}}">
                @error('people')
                    <small invalid-feedback>{{$message}}</small>
                @enderror
                </div>
            </div>
            <div class="form-group mt-3">
                <textarea class="form-control @error('message') is-invalid @enderror" name="message" rows="5" placeholder="Message"></textarea>
                @error('message')
                    <small invalid-feedback>{{$message}}</small>
                @enderror

            </div>
            <div class="text-center my-3"><button type="submit">Book a Table</button></div>
        </form>

      </div>
    </section><!-- End Book A Table Section -->

    <!-- ======= Testimonials Section ======= -->
    <section id="testimonials" class="testimonials section-bg">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h2>Testimonials</h2>
          <p>What they're saying about us</p>
        </div>

        <div class="testimonials-slider swiper-container" data-aos="fade-up" data-aos-delay="100">
          <div class="swiper-wrapper">

            <div class="swiper-slide">
              <div class="testimonial-item">
                <p>
                  <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                  Proin iaculis purus consequat sem cure digni ssim donec porttitora entum suscipit rhoncus. Accusantium quam, ultricies eget id, aliquam eget nibh et. Maecen aliquam, risus at semper.
                  <i class="bx bxs-quote-alt-right quote-icon-right"></i>
                </p>
                <img src="{{asset('assets/img/testimonials/testimonials-1.jpg')}}" class="testimonial-img" alt="">
                <h3>Saul Goodman</h3>
                <h4>Ceo &amp; Founder</h4>
              </div>
            </div><!-- End testimonial item -->

            <div class="swiper-slide">
              <div class="testimonial-item">
                <p>
                  <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                  Export tempor illum tamen malis malis eram quae irure esse labore quem cillum quid cillum eram malis quorum velit fore eram velit sunt aliqua noster fugiat irure amet legam anim culpa.
                  <i class="bx bxs-quote-alt-right quote-icon-right"></i>
                </p>
                <img src="{{asset('assets/img/testimonials/testimonials-2.jpg')}}" class="testimonial-img" alt="">
                <h3>Sara Wilsson</h3>
                <h4>Designer</h4>
              </div>
            </div><!-- End testimonial item -->

            <div class="swiper-slide">
              <div class="testimonial-item">
                <p>
                  <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                  Enim nisi quem export duis labore cillum quae magna enim sint quorum nulla quem veniam duis minim tempor labore quem eram duis noster aute amet eram fore quis sint minim.
                  <i class="bx bxs-quote-alt-right quote-icon-right"></i>
                </p>
                <img src="{{asset('assets/img/testimonials/testimonials-3.jpg')}}" class="testimonial-img" alt="">
                <h3>Jena Karlis</h3>
                <h4>Store Owner</h4>
              </div>
            </div><!-- End testimonial item -->

            <div class="swiper-slide">
              <div class="testimonial-item">
                <p>
                  <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                  Fugiat enim eram quae cillum dolore dolor amet nulla culpa multos export minim fugiat minim velit minim dolor enim duis veniam ipsum anim magna sunt elit fore quem dolore labore illum veniam.
                  <i class="bx bxs-quote-alt-right quote-icon-right"></i>
                </p>
                <img src="{{asset('assets/img/testimonials/testimonials-4.jpg')}}" class="testimonial-img" alt="">
                <h3>Matt Brandon</h3>
                <h4>Freelancer</h4>
              </div>
            </div><!-- End testimonial item -->

            <div class="swiper-slide">
              <div class="testimonial-item">
                <p>
                  <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                  Quis quorum aliqua sint quem legam fore sunt eram irure aliqua veniam tempor noster veniam enim culpa labore duis sunt culpa nulla illum cillum fugiat legam esse veniam culpa fore nisi cillum quid.
                  <i class="bx bxs-quote-alt-right quote-icon-right"></i>
                </p>
                <img src="{{asset('assets/img/testimonials/testimonials-5.jpg')}}" class="testimonial-img" alt="">
                <h3>John Larson</h3>
                <h4>Entrepreneur</h4>
              </div>
            </div><!-- End testimonial item -->

          </div>
          <div class="swiper-pagination"></div>
        </div>

      </div>
    </section><!-- End Testimonials Section -->

  </main><!-- End #main -->
@endsection
