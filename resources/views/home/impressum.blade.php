<x-layout.eilinger>

@section('title', __('impressum.title'))

<main id="main">
    <section id="about" class=about">
        <div class="container" data-aos="fade-up">
            <div class="section-title">
                <h2>{{ __('impressum.title') }}</h2>
                <h3>{{ __('impressum.responsible') }}</h3>
                <address>
                    <strong>Eilinger Stiftung</strong><br>
                    Seeweg 45<br>
                    8264 Eschenz, CH<br>
                    <a href="mailto:{{ config('mail.from.address') }}" target="_blank">{{ config('mail.from.address') }}</a><br>
                    UID: CHE-247.433.436<br>
                    © Eilinger Stiftung 2024
                </address>
                <br>
                <h3>{{ __('impressum.concept') }}</h3>
                    <p>Eilinger Stiftung</p>
                <br>
                <h3>{{ __('impressum.copyrights') }}</h3>
                    <p>{{ __('impressum.copyrights_text') }}</p>
                <br>
                <h4>{{ __('impressum.disclaimer') }}</h4>
                    <p>{{ __('impressum.disclaimer_text1') }}</p>
                    <p>{{ __('impressum.disclaimer_text2') }}</p>
                    <p>{{ __('impressum.disclaimer_text3') }}</p>
                <br>
                <h4>{{ __('impressum.liability_links') }}</h4>
                    <p>{{ __('impressum.liability_links_text') }}</p>
            </div>
        </div>
    </section>
</main><!-- End #main -->
</x-layout.eilinger>
