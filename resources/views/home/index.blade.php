<x-layout.eilinger>

    @section('title', 'Homepage')

    <main id="main">

        <!-- ======= About Us Section ======= -->
        <section id="about" class="about">
            <div class="container">

                <div class="section-title">
                    <h2>{{ __('home.about') }}</h2>
                </div>

                <div class="row content">
                    <div class="col-lg-6">
                        <h3>{{ __('home.philosophy') }}</h3>
                        <p>{{ __('home.philosophy_text1') }}
                        </p>
                        <p>
                            {{ __('home.philosophy_text2') }}
                        </p>
                    </div>
                    <div class="col-lg-6 pt-4 pt-lg-0">
                        <h3>{{ __('home.purpose') }}</h3>
                        <p>{{ __('home.purpose_text') }}: </p>
                        <ul>
                            <li><i class="bi bi-check-all"></i>{{ __('home.purpose1') }}</li>
                            <li><i class="bi bi-check-all"></i>{{ __('home.purpose2') }}</li>
                            <li><i class="bi bi-check-all"></i>{{ __('home.purpose3') }}</li>
                            <li><i class="bi bi-check-all"></i>{{ __('home.purpose4') }}</li>
                            <li><i class="bi bi-check-all"></i>{{ __('home.purpose5') }}</li>
                        </ul>
                    </div>
                </div>

            </div>
        </section><!-- End About Us Section -->

        <!-- ======= Förderbereiche ======= -->
        <section id="our-values" class="our-values section-bg">
            <div class="container">
                <div class="section-title">
                    <h2>{{ __('home.funding') }}</h2>
                </div>

                <div class="row">
                    <div class="col-md-6 d-flex align-items-stretch">
                        <div class="card" style='background-image: url("images/Bildung_4.jpg");'>
                            <div class="card-body">
                                <h5 class="card-title"><a href="">{{ __('home.education') }}</a></h5>
                                <p class="card-text">{{ __('home.education_text1') }}</p>
                                <p class="text-justify">{{ __('home.education_text2') }}</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 d-flex align-items-stretch mt-4 mt-md-0">
                        <div class="card" style='background-image: url("images/Menschen_5.jpg");'>
                            <div class="card-body">
                                <h5 class="card-title"><a href="">{{ __('home.need') }}</a></h5>
                                <p class="card-text">{{ __('home.need_text1') }}</p>
                                <p class="text-justify">{{ __('home.need_text2') }}</p>
                            </div>
                        </div>

                    </div>
                    <div class="col-md-6 d-flex align-items-stretch mt-4">
                        <div class="card" style='background-image: url("images/Tier_1.jpeg");'>
                            <div class="card-body">
                                <h5 class="card-title"><a href="">{{ __('home.welfare') }}</a></h5>
                                <p class="card-text">{{ __('home.welfare_text1') }}</p>
                                <p class="text-justify">{{ __('home.welfare_text2') }}</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 d-flex align-items-stretch mt-4">
                        <div class="card" style='background-image: url("images/Umwelt.jpg");'>
                            <div class="card-body">
                                <h5 class="card-title"><a href="">{{ __('home.environment') }}</a></h5>
                                <p class="card-text">{{ __('home.environment_text1') }}</p>
                                <p class="text-justify">{{ __('home.environment_text2') }}</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 offset-3 d-flex align-items-stretch mt-4">
                        <div class="card" style='background-image: url("images/Tier_1.jpeg");'>
                            <div class="card-body">
                                <h5 class="card-title"><a href="">{{ __('home.rights') }}</a></h5>
                                <p class="card-text">{{ __('home.rights_text1') }}</p>
                                <p class="text-justify">{{ __('home.rights_text2') }}</p>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </section><!-- End Our Values Section -->

        <!-- ======= Projekte Section ======= -->
        <section id="projekte" class="services">
            <div class="container">

                <div class="section-title">
                    <h2>{{ __('home.projects') }}</h2>
                    <p>{{ __('home.projects_text1') }}</p>
                    <p>{{ __('home.projects_text2') }}</p>
                </div>

                <div class="row">
                    <div class="col-lg-4 col-md-6">
                        <div class="icon-box">
                            <div class="icon"><i class="bi bi-briefcase" style="color: #ff689b;"></i></div>
                            <h4 class="title"><a href="">{{ __('home.project1_title') }} </a></h4>
                            <p class="description">{{ __('home.project1_text') }} </p>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 mt-4 mt-md-0">
                        <div class="icon-box">
                            <div class="icon"><i class="bi bi-card-checklist" style="color: #e9bf06;"></i></div>
                            <h4 class="title"><a href="">{{ __('home.project2_title') }} </a></h4>
                            <p class="description">{{ __('home.project2_text') }} </p>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6 mt-4 mt-lg-0">
                        <div class="icon-box">
                            <div class="icon"><i class="bi bi-bar-chart" style="color: #3fcdc7;"></i></div>
                            <h4 class="title"><a href="">{{ __('home.project3_title') }} </a></h4>
                            <p class="description">{{ __('home.project3_text') }} </p>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 mt-4">
                        <div class="icon-box">
                            <div class="icon"><i class="bi bi-binoculars" style="color:#41cf2e;"></i></div>
                            <h4 class="title"><a href="">{{ __('home.project4_title') }} </a></h4>
                            <p class="description">{{ __('home.project4_text') }} </p>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6 mt-4">
                        <div class="icon-box">
                            <div class="icon"><i class="bi bi-brightness-high" style="color: #d6ff22;"></i></div>
                            <h4 class="title"><a href="">{{ __('home.project5_title') }} </a></h4>
                            <p class="description">{{ __('home.project5_text') }} </p>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 mt-4">
                        <div class="icon-box">
                            <div class="icon"><i class="bi bi-calendar4-week" style="color: #4680ff;"></i></div>
                            <h4 class="title"><a href="">{{ __('home.project6_title') }} </a></h4>
                            <p class="description">{{ __('home.project6_text') }} </p>
                        </div>
                    </div>
                </div>

            </div>
        </section><!-- End Services Section -->


        <!-- ======= Gesuche ======= -->
        <section id="gesuche" class="pricing section-bg">
            <div class="container" data-aos="fade-up">

                <div class="section-title">
                    <h2>{{ __('home.requests') }}</h2>
                    <p>{{ __('home.request_text') }}</p>
                    <ol>
                        <li>{{ __('home.request_text1') }}</li>
                        <li>{{ __('home.request_text2') }}</li>
                        <li>{{ __('home.request_text3') }}</li>
                        <li>{{ __('home.request_text4') }}</li>
                        <li>{{ __('home.request_text5') }}</li>

                    </ol>
                    <p>{{ __('home.request_disclaimer') }}</p>
                </div>

                <div class="row">
                    <div class="col-sm-4 mb-3 d-flex align-items-stretch">
                        <div class="card border-light">
                            <div class="card-body d-flex flex-column">
                                <h3 class="card-title">{{ __('home.education') }}</h3>
                                <ul>
                                    <li><i class="bi bi-check-all"></i> Gesuch für ein Stipendium</li>
                                    <li><i class="bi bi-check-all"></i> Gesuch für Privatpersonen (ausser Stipendien)
                                    </li>
                                    <li><i class="bi bi-check-all"></i> Gesuch für Vereine oder Organisationen</li>
                                </ul>
                                <a href="{{ route('user_dashboard', app()->getLocale()) }}" class="buy-btn mt-auto">Zum
                                    Gesuchsportal</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-4 mb-3 d-flex align-items-stretch">
                        <div class="card border-light">
                            <div class="card-body d-flex flex-column">
                                <h3 class="card-title">{{ __('home.welfare') }} </h3>
                                <ul>
                                    <li><i class="bi bi-check-all"></i> Gesuch für Privatpersonen</li>
                                    <li><i class="bi bi-check-all"></i> Gesuch für Vereine oder Organisationen</li>
                                </ul>
                                <a href="{{ route('user_dashboard', app()->getLocale()) }}" class="buy-btn mt-auto">Zum
                                    Gesuchsportal</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-4 mb-3 d-flex align-items-stretch">
                        <div class="card border-light">
                            <div class="card-body d-flex flex-column">
                                <h3 class="card-title">{{ __('home.rights') }}</h3>
                                <ul>
                                    <li><i class="bi bi-check-all"></i> Gesuch für Privatpersonen</li>
                                    <li><i class="bi bi-check-all"></i> Gesuch für Vereine oder Organisationen</li>
                                </ul>
                                <a href="{{ route('user_dashboard', app()->getLocale()) }}" class="buy-btn mt-auto">Zum
                                    Gesuchsportal</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-4 mb-3 offset-2 d-flex align-items-stretch">
                        <div class="card border-light">
                            <div class="card-body d-flex flex-column">
                                <h3 class="card-title">{{ __('home.environment') }} </h3>
                                <ul>
                                    <li><i class="bi bi-check-all"></i> Gesuch für Privatpersonen</li>
                                    <li><i class="bi bi-check-all"></i> Gesuch für Vereine oder Organisationen</li>
                                </ul>
                                <a href="{{ route('user_dashboard', app()->getLocale()) }}" class="buy-btn mt-auto">Zum
                                    Gesuchsportal</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-4 mb-3 d-flex align-items-stretch">
                        <div class="card border-light">
                            <div class="card-body d-flex flex-column">
                                <h3 class="card-title">{{ __('home.need') }} </h3>
                                <ul>
                                    <li><i class="bi bi-check-all"></i> Gesuch für Privatpersonen</li>
                                    <li><i class="bi bi-check-all"></i> Gesuch für Vereine oder Organisationen</li>
                                </ul>
                                <a href="{{ route('user_dashboard', app()->getLocale()) }}" class="buy-btn mt-auto">Zum
                                    Gesuchsportal</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section><!-- End Pricing Section -->


    </main><!-- End #main -->

</x-layout.eilinger>
