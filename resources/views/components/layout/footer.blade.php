<footer id="footer">

    <div class="footer-top">
        <div class="container">
            <div class="row">

                <div class="col-lg-6 col-md-6 footer-contact">
                    <h3>Walter und Gabriella <br>Eilinger Stiftung</h3>
                    <p>
                    Seeweg 45<br>
                    8260 Eschenz<br>
                    Schweiz <br><br>
                    <strong>Email:</strong> EilingerStiftung@gmx.net <br>
                    <br>
                    <strong>{{__('home.desired_contact') }}</strong>
                    </p>
                </div>

                <div class="col-lg-6 col-md-6 footer-links">
                    <h4>{{__('home.links') }}</h4>
                    <ul>
                    <li><i class="bi bi-chevron-right"></i> <a href="{{ route('index', app()->getLocale()) }}">Home</a></li>
                    <li><i class="bi bi-chevron-right"></i> <a href="{{ route('impressum', app()->getLocale()) }}">Impressum</a></li>
                    <li><i class="bi bi-chevron-right"></i> <a href="{{ route('datenschutz', app()->getLocale()) }}">{{__('dataprotection.data-protection') }}</a></li>
                    </ul>
                </div>

            </div>
        </div>
    </div>

    <div class="container footer-bottom clearfix">
    <div class="copyright">
        &copy; Copyright <strong><span>Eilinger Stiftung</span></strong>. All Rights Reserved
    </div>
    </div>
    </footer><!-- End Footer -->
