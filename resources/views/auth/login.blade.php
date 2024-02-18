<x-layout.eilinger>

    @section('title', 'Registrieren/Einloggen')
    <main id="main">
        <section id="contact" class="contact">
            <div class="container">
                <div class="section-title">
                    <h2>{{  __('regLog.loginTitle')  }} </h2>
                </div>
                <p> {{  __('regLog.loginSubTitle')  }} </p>

                <strong>{{  __('regLog.inputTitle')  }} </strong>
                <p>{{  __('regLog.inputNotes')  }}</p>
                <br/>

                <h3>{{  __('regLog.newAccount')  }} </h3>

                <p>{{  __('regLog.newAccountText1')  }} <strong><a
                            href="{{ route('registerPrivat', app()->getLocale()) }}">{{  __('regLog.privat')  }}</a></strong>
                    {{  __('regLog.newAccountText2')  }}
                    <strong><a href="{{ route('registerInst', app()->getLocale()) }}">{{  __('regLog.org')  }} </a></strong>.
                </p>
                <br/>
                <h3>{{  __('regLog.alreadyRegistered')  }} </h3>

                <form method="POST" action="{{ route('login', app()->getLocale()) }}">
                    <div class="row g-3">
                        @csrf
                        <div class="col-md-4">
                            <label for="">{{ __('user.email') }}</label>
                            <input name="email" id="email" type="email" class="form-control"
                                   placeholder="name@example.com">
                            <x-input-error :messages="$errors->get('email')"/>
                        </div>


                        <div class="col-md-4">
                            <label for="">{{ __('user.password') }}</label>
                            <input name="password" id="password" type="password" class="form-control">
                            <x-input-error :messages="$errors->get('password')"/>
                        </div>
                        <div class="col-md-4">
                            <button type="submit" class="btn btn-colour-1">{{ __('Login') }}</button>
                        </div>


                        <div class="col-md-4">
                            <a class="btn btn-link" href="{{ route('password.request', app()->getLocale()) }}">{{  __('regLog.resetPassword')  }}</a>
                        </div>
                        <div class="col-md-4">
                            <div class="form-check form-switch">
                                <input class="form-check-input" type="checkbox" name="remember" id="remember">
                                <label class="form-check-label" for="remember">{{  __('regLog.rememberMe')  }}</label>
                            </div>
                        </div>
                    </div>
                </form>
                <br/>
                <p> {{  __('regLog.loginNoteOrg')  }} </p>
            </div>
        </section>
    </main><!-- End #main -->
</x-layout.eilinger>
