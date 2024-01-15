<section class="home-section">
    <div class="text">{{  __('useroverview.welcome')  }}</div>

    <div class="home-content">
        <div class="shadow p-3 mb-5 bg-body rounded">


            <section class="bg-light pt-5 pb-5 shadow-sm">
                <div class="container">
                    <div class="row pt-5">
                        <div class="col-12">
                            <h3 class="text-uppercase border-bottom mb-4">{{  __('useroverview.overview')  }}</h3>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-lg-4 mb-3 d-flex align-items-stretch">
                            <div class="card">
                                <h5 class="card-header">{{  __('useroverview.applications_header')  }}</h5>
                                <div class="card-body">
                                    <p class="card-text">{{  __('useroverview.applications_body')  }}</p>
                                </div>
                                <div class="card-footer p-3">
                                    <a href="{{ route('user_antraege', app()->getLocale()) }}" class="btn btn-colour-1">{{  __('useroverview.applications_button')  }}</a>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-4 mb-3 d-flex align-items-stretch">
                            <div class="card">
                                <h5 class="card-header">{{  __('useroverview.projects_header')  }}</h5>
                                <div class="card-body">
                                    <p class="card-text">{{  __('useroverview.projects_body')  }}</p>
                                </div>
                                <div class="card-footer p-3">
                                    <a href="{{ route('user_gesuch', app()->getLocale()) }}" class="btn btn-colour-1">{{  __('useroverview.projects_button')  }}</a>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-4 mb-3 d-flex align-items-stretch">
                            <div class="card">
                                <h5 class="card-header">{{  __('useroverview.message_header')  }}</h5>
                                <div class="card-body">
                                    <p class="card-text">{{  __('useroverview.message_body')  }} </p>
                                </div>
                                <div class="card-footer p-3">
                                    <a href="{{ route('user_nachrichten', app()->getLocale()) }}" class="btn btn-colour-1">{{  __('useroverview.message_button')  }}</a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-lg-4 mb-3 d-flex align-items-stretch">
                            <div class="card">
                                <h5 class="card-header">{{  __('useroverview.profil_header')  }}</h5>
                                <div class="card-body">
                                    <p class="card-text">{{  __('useroverview.profile_body')  }}</p>
                                </div>
                                <div class="card-footer p-3">
                                    <a href="{{ route('user_profile.edit', app()->getLocale()) }}" class="btn btn-colour-1">{{  __('useroverview.profile_button')  }}</a>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-4 mb-3 d-flex align-items-stretch">
                            <div class="card">
                                <h5 class="card-header">{{  __('useroverview.files_header')  }}</h5>
                                <div class="card-body">
                                    <p class="card-text">{{  __('useroverview.files_body')  }}</p>
                                </div>
                                <div class="card-footer p-3">
                                    <a href="{{ route('user_dateien', app()->getLocale()) }}" class="btn btn-colour-1">{{  __('useroverview.files_button')  }}</a>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-4 mb-3 d-flex align-items-stretch">
                            <div class="card">
                                <h5 class="card-header">{{  __('useroverview.logout_header')  }}</h5>
                                <div class="card-body">
                                    <p class="card-text">{{  __('useroverview.logout_body')  }}</p>
                                </div>
                                <div class="card-footer p-3">
                                    <a href="{{ route('logout', app()->getLocale()) }}" class="btn btn-colour-1">{{  __('useroverview.logout_button')  }}</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

        </div>
    </div>
</section>
