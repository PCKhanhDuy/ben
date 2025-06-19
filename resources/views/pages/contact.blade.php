<!-- resources/views/home.blade.php -->
@extends('layouts.app')

@section('title', 'Contact Us')

@section('content')
    <section class="contact-section my-md-5 my-4 py-xl-3">
      <div class="container">
        <div class="text-center mb-5">
          <h2 class="fw-bold">Contact</h2>
          <p class="text-muted">
            Necessitatibus eius consequatur ex aliquid fuga eum quidem sint
            consectetur velit
          </p>
        </div>

        <div class="row contact-card">
          <!-- LEFT: Contact Info -->
          <div class="col-md-5 contact-info d-flex flex-column justify-content-between">
            <div>
              <div class="info-item">
                <i class="bi bi-geo-alt-fill"></i>
                <div>
                  <h6 class="mb-1 fw-semibold">Address</h6>
                  <p class="mb-0 text-muted">Di An, Binh Duong , Viet Nam</p>
                </div>
              </div>
              <div class="info-item">
                <i class="bi bi-telephone-fill"></i>
                <div>
                  <h6 class="mb-1 fw-semibold">Call Us</h6>
                  <p class="mb-0 text-muted">+1 123 456</p>
                </div>
              </div>
              <div class="info-item">
                <i class="bi bi-envelope-fill"></i>
                <div>
                  <h6 class="mb-1 fw-semibold">Email Us</h6>
                  <p class="mb-0 text-muted">info@example.com</p>
                </div>
              </div>
            </div>
            <div class="mt-4">
              <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d62682.47942803745!2d106.74737689271223!3d10.913805226392535!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3174d91eb88b3a0d%3A0xc29bee41fcab904c!2zRMSpIEFuLCBCw6xuaCBExrDGoW5nLCBWaeG7h3QgTmFt!5e0!3m2!1svi!2s!4v1748938292063!5m2!1svi!2s" allowfullscreen loading="lazy" ></iframe>
            </div>
          </div>
          <!-- RIGHT: Form -->
          <div class="col-md-7 contact-form">
            <form>
              <p class="title pb-3">Leave us a message</p>
              <div class="row mb-3">
                <div class="col-md-6 mb-3 mb-md-0">
                  <input type="text" class="form-control" placeholder="Your Name" required />
                </div>
                <div class="col-md-6">
                  <input type="email" class="form-control" placeholder="Your Email" required />
                </div>
              </div>
              <div class="mb-3">
                <input type="text" class="form-control" placeholder="Subject" required />
              </div>
              <div class="mb-3">
                <textarea class="form-control" rows="6" placeholder="Message" required ></textarea>
              </div>
              <div class="text-end">
                <button type="submit" class="btn btn-submit">
                  Send Message
                </button>
              </div>
            </form>
          </div>
        </div>
      </div>
    </section>
@endsection
