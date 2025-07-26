<!-- Footer  -->
<footer>
    <div class="container-lg">
        <div class="row text-center text-md-start">
            <div class="col-md-3 mb-4">
                <div class="footer-logo">
                    <img src="{{ asset('images/main-logo.jpg') }}" alt="Logo">
                </div>
            </div>

            <div class="col-md-3 mb-4 footer-section">
                <div class="footer-link">
                    <h6 class="fw-bold">{{ __('ben.contact.page') }}</h6>
                    <a href="#">{{ __('ben.menu_header.our_services') }}</a>
                    <a href="#">{{ __('ben.menu_header.gallery') }}</a>
                    <a href="#">{{ __('ben.menu_header.contact_us') }}</a>
                </div>
            </div>

            <div class="col-md-3 mb-4 footer-section">
                <div class="footer-link">
                    <h6 class="fw-bold">{{ __('ben.contact.big_title') }}</h6>
                    <a href="tel:0123456789">
                        <i class="fas fa-phone me-2"></i>{{ __('ben.contact.phone') }}: 0123-456-789
                    </a>
                    <a href="mailto:photo@example.com">
                        <i class="fas fa-envelope me-2"></i>{{ __('ben.contact.email') }}: photo@example.com
                    </a>
                </div>
            </div>

            <div class="col-md-3 mb-4 footer-section">
                <h6 class="fw-bold">{{ __('ben.contact.social') }}</h6>
                <div class="social-icons">
                    <a href="#" title="Facebook">
                        <i class="fab fa-facebook-f"></i>
                    </a>
                    <a href="#" title="Instagram">
                        <i class="fab fa-instagram"></i>
                    </a>
                    <a href="#" title="Zalo">
                        <img src="https://upload.wikimedia.org/wikipedia/commons/9/91/Icon_of_Zalo.svg" alt="Zalo">
                    </a>
                </div>
            </div>
        </div>

        <div class="row footer-bottom text-center">
            <div class="col">
                &copy; <span id="copyright-year"></span> BEN Interior Photography Group. All rights reserved.
            </div>
        </div>
        <script>
            document.addEventListener('DOMContentLoaded', () => {
                const year = new Date().getFullYear();
                document.getElementById('copyright-year').textContent = year;
            });
        </script>
    </div>
</footer>
<!-- End Footer -->
<a href="https://zaloapp.com/qr/p/d69xtqlom0em" target="_blank" class="zalo-float">
  <img src="{{ asset('images/icons/zalo.svg') }}" alt="Chat Zalo" />
</a>
