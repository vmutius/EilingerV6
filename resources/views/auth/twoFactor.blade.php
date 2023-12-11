<x-layout.eilinger>
    <main id="main">

        <section>
            <div class="container">
                <div class="section-title">
                    <h2>Two Factor Verification</h2>
                </div>

                <form method="POST" action="{{ route('verify.store', app()->getLocale()) }}">
                    @csrf
                    <p class="text-muted">
                        You have received an email which contains two factor login code.
                        If you haven't received it, press <a href="{{ route('verify.resend', app()->getLocale()) }}">here</a>.
                    </p>

                    <div>
                       <input name="two_factor_code" type="text" class="form-control{{ $errors->has('two_factor_code') ? ' is-invalid' : '' }}" required autofocus placeholder="Two Factor Code">
                        @if($errors->has('two_factor_code'))
                            <div class="invalid-feedback">
                                {{ $errors->first('two_factor_code') }}
                            </div>
                        @endif
                    </div>

                    <div class="row">
                        <div class="col-6">
                            <x-primary-button>
                                Verify
                            </x-primary-button>
                        </div>

                    </div>
                </form>

            </div>
        </section>
    </main>
</x-layout.eilinger>
