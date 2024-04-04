<x-layout.eilinger>

@section('title', __('dataprotection.data-protection'))

<main id="main">
    <section id="about" class="about">
        <div class="container" data-aos="fade-up">
            <div class="section-title">
                <h2>{{ __('dataprotection.data-protection') }}</h2>
                <p>{{ __('dataprotection.data-protection-text') }}</p>
                <br>
                <h3>{{ __('dataprotection.responsible') }}</h3>
                <address>
                    <strong>Eilinger Stiftung</strong><br>
                    Seeweg 45<br>
                    8264 Eschenz, CH<br>
                    <a href="mailto:{{ config('mail.from.address') }}" target="_blank">{{ config('mail.from.address') }}</a>
                </address>
                <br>
                <h3>{{ __('dataprotection.categories') }}</h3>
                <table class="table table-striped table-bordered">
                    <thead>
                    <tr>
                        <th scope="col">{{ __('dataprotection.category') }}</th>
                        <th scope="col">{{ __('dataprotection.purpose') }}</th>
                    </tr>
                    </thead>
                    <tbody>
                    <tr>
                        <td>{{ __('dataprotection.category_contact') }}</td>
                        <td>{{ __('dataprotection.purpose_contact') }}
                            <ul>
                                <li>{{ __('dataprotection.purpose_contact1') }}</li>
                                <li>{{ __('dataprotection.purpose_contact2') }}</li>
                                <li>{{ __('dataprotection.purpose_contact3') }}</li>
                            </ul>
                            {{ __('dataprotection.purpose_contact4') }}
                        </td>
                    </tr>
                    <tr>
                        <td>{{ __('dataprotection.category_ip') }}</td>
                        <td>{{ __('dataprotection.purpose_ip') }}
                            <ul>
                                <li>{{ __('dataprotection.purpose_ip1') }}</li>
                            </ul>
                    </tr>
                    <tr>
                        <td>{{ __('dataprotection.category_education') }}</td>
                        <td>{{ __('dataprotection.purpose_education') }}
                            <ul>
                                <li>{{ __('dataprotection.purpose_education1') }}</li>
                            </ul>
                    </tr>
                    <tr>
                        <td>{{ __('dataprotection.category_family') }}</td>
                        <td>{{ __('dataprotection.purpose_family') }}
                            <ul>
                                <li>{{ __('dataprotection.purpose_family1') }}</li>
                                <li>{{ __('dataprotection.purpose_family2') }}</li>
                                <li>{{ __('dataprotection.purpose_family3') }}</li>
                            </ul>
                        </td>
                    </tr>
                    <tr>
                        <td>{{ __('dataprotection.category_finance') }}</td>
                        <td>{{ __('dataprotection.purpose_finance') }}
                            <ul>
                                <li>{{ __('dataprotection.purpose_finance1') }}</li>
                                <li>{{ __('dataprotection.purpose_finance2') }}</li>
                            </ul>
                        </td>
                    </tr>
                    <tr>
                        <td>{{ __('dataprotection.category_voluntary') }}</td>
                        <td>{{ __('dataprotection.purpose_voluntary') }}
                        </td>
                    </tr>
                    </tbody>
                </table>
                <br>
                <h3>{{ __('dataprotection.data_transfer') }} </h3>
                <p>{{ __('dataprotection.data_transfer_text') }} </p>
                <br>
                <h3>{{ __('dataprotection.cookies') }} </h3>
                <p>{{ __('dataprotection.cookies_text') }} </p>
                <table class="table table-striped table-bordered">
                    <thead>
                    <tr>
                        <th scope="col">{{ __('dataprotection.cookie_name') }}</th>
                        <th scope="col">{{ __('dataprotection.cookie_function') }}</th>
                        <th scope="col">{{ __('dataprotection.cookie_meaning') }}</th>
                    </tr>
                    </thead>
                    <tbody>
                    <tr>
                        <td>{{ __('XSRF-Token') }}</td>
                        <td>{{ __('dataprotection.cookie_XSRF_function') }}</td>
                        <td>{{ __('dataprotection.cookie_XSRF_meaning') }}</td>
                    </tr>
                    <tr>
                        <td>{{ __('eilinger_stiftung_session') }}</td>
                        <td>{{ __('dataprotection.cookie_session_function') }}
                            <ul>
                                <li>{{ __('dataprotection.cookie_session_function1') }}</li>
                                <li>{{ __('dataprotection.cookie_session_function2') }}</li>
                                <li>{{ __('dataprotection.cookie_session_function3') }}</li>
                                <li>{{ __('dataprotection.cookie_session_function4') }}</li>
                                <li>{{ __('dataprotection.cookie_session_function5') }}</li>
                            </ul>
                        </td>
                        <td><p>{{ __('dataprotection.cookie_session_meaning1') }}</p>
                            <p>{{ __('dataprotection.cookie_session_meaning2') }}</p>
                        </td>
                    </tr>
                    </tbody>
                </table>
                <br>
                <h3>{{ __('dataprotection.rights') }} </h3>
                <p>{{ __('dataprotection.rights_text') }} </p>
                <br>
                <p>{{ __('dataprotection.rights_text1') }} </p>
                <ul>
                    <li>{{ __('dataprotection.rights_text2') }}</li>
                    <li>{{ __('dataprotection.rights_text3') }}</li>
                    <li>{{ __('dataprotection.rights_text4') }}</li>
                    <li>{{ __('dataprotection.rights_text5') }}</li>
                    <li>{{ __('dataprotection.rights_text6') }}</li>
                    <li>{{ __('dataprotection.rights_text7') }}</li>
                </ul>
                <br>
                <h3>{{ __('dataprotection.change') }} </h3>
                <p>{{ __('dataprotection.change_text') }} </p>
                <br>

                © 2024 Eilinger-Stiftung
            </div>
        </div>
    </section>

</main><!-- End #main -->

</x-layout.eilinger>
