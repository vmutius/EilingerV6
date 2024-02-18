<x-layout.eilinger>
    <main id="main">

        <section>
            <div class="container">
                <div class="section-title">
                    <h2>{{  __('regLog.resetPassword')  }}</h2>
                </div>

                <form method="POST" action="{{ route('password.store', app()->getLocale()) }}">
                    @csrf

                    <!-- Password Reset Token -->
                    <input type="hidden" name="token" value="{{ $request->route('token') }}">

                    <!-- Email Address -->
                    <div>
                        <label class="form-label" for="email">Email *</label>
                        <input id="email" name='email' class="form-control" type="email"
                            value={{ $request->email }}>
                    </div>

                    <!-- Password -->
                    <div class="group">
                        <label class="form-label" for="password">{{  __('user.password')  }} *</label>
                        <input name="password" class="form-control @error('password') is-invalid @enderror @if (session('valid-password')) is-valid @endif"
                            id="password" type="password" required autocomplete="new-password" />
                        @error('password')
                            <div id="invalidFeedback" class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                        @if (session()->has('valid-password'))
                            <div class="valid-feedback">
                                {{ session(['valid-password' => 'OK']) }}
                            </div>
                        @endif
                    </div>

                    <div class="group">
                        <label class="form-label" for="password_confirmation">{{  __('user.password_confirmation')  }}*</label>
                        <input name="password_confirmation"
                            class="form-control @error('password_confirmation') is-invalid @enderror @if (session('valid-password_confirmation')) is-valid @endif"
                            id="password_confirmation" type="password" required autocomplete="new-password" />
                        @error('password_confirmation')
                            <div id="invalidFeedback" class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                        @if (session()->has('valid-password_confirmation'))
                            <div class="valid-feedback">
                                {{ session(['valid-password_confirmation' => 'OK']) }}
                            </div>
                        @endif
                    </div>

                    <div class="col-md-12 text-center">
                        <x-primary-button>
                            {{ __('Reset Password') }}
                        </x-primary-button>
                    </div>
                </form>
            </div>
        </section>
    </main>
</x-layout.eilinger>
