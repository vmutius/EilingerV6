<main id="main">

    <section>
        <div class="container">
            <div class="section-title">
                <h2>{{  __('regLog.regPrivat')  }}</h2>
            </div>

            <form wire:submit.prevent="registerPrivat">
                @csrf
                <div class="group">
                    <label class="form-label" for="username">{{  __('user.username')  }} *</label>
                    <input wire:model.lazy="username" class="form-control @error('username') is-invalid @enderror @if (session('valid-username')) is-valid @endif" id="username" type="text"
                        placeholder="Wählen Sie einen Benutzernamen" autofocus autocomplete="off">
                    @error('username')
                        <div id="invalidFeedback" class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                    @if (session()->has('valid-username'))
                        <div class="valid-feedback">
                            {{ session('valid-username') }}
                        </div>
                    @endif
                </div>


                <div class="group">
                    <label class="form-label" for="salutation">{{  __('user.salutation')  }} *</label>
                    <select wire:model.lazy="salutation" class="form-select @error('salutation') is-invalid @enderror @if (session('valid-salutation'))
                        is-valid @endif" id="salutation" type="text" autofocus autocomplete="off">
                        <option selected value="" disabled>{{  __('attributes.please_select')  }}</option>
                        @foreach (App\Enums\Salutation::cases() as $salutation)
                            <option value="{{ $salutation->value }}">{{ __('user.salutation_name.' .$salutation->name) }}</option>
                        @endforeach
                    </select>
                    @error('salutation')
                        <div id="invalidFeedback" class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                    @if (session()->has('valid-salutation'))
                        <div class="valid-feedback">
                            {{ session(['valid-salutation', 'OK']) }}
                        </div>
                    @endif
                </div>

                <div class="group">
                    <label class="form-label" for="firstname">{{  __('user.firstname')  }} *</label>
                    <input wire:model.lazy="firstname" class="form-control @error('firstname') is-invalid @enderror @if (session('valid-firstname'))
                        is-valid @endif" id="firstname" type="text" placeholder="Max"  autofocus autocomplete="off">
                    @error('firstname')
                        <div id="invalidFeedback" class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                    @if (session()->has('valid-firstname'))
                        <div class="valid-feedback">
                            {{ session(['valid-firstname' => 'OK']) }}
                        </div>
                    @endif
                </div>

                <div class="group">
                    <label class="form-label" for="lastname">{{  __('user.lastname')  }} *</label>
                    <input wire:model.lazy="lastname" class="form-control @error('lastname') is-invalid @enderror @if (session('valid-lastname'))
                        is-valid @endif" id="lastname" type="text" placeholder="Muster"  autofocus autocomplete="off">
                    @error('lastname')
                        <div id="invalidFeedback" class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                    @if (session()->has('valid-lastname'))
                        <div class="valid-feedback">
                            {{ session(['valid-lastname' => 'OK']) }}
                        </div>
                    @endif
                </div>

                <div class="group">
                    <label class="form-label" for="street">{{  __('address.street')  }} *</label>
                    <input wire:model.lazy="street" class="form-control @error('street') is-invalid @enderror @if (session('valid-street'))
                        is-valid @endif" id="street" type="text" placeholder="Mustergasse"  autofocus autocomplete="off">
                    @error('street')
                        <div id="invalidstreetFeedback" class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                    @if (session()->has('valid-street'))
                        <div class="valid-feedback">
                            {{ session('valid-street') }}
                        </div>
                    @endif
                </div>

                <div class="group">
                    <label class="form-label" for="number">{{  __('address.number')  }} </label>
                    <input wire:model.lazy="number" class="form-control @error('number') is-invalid @enderror @if (session('valid-number'))
                        is-valid @endif" id="number" type="text" placeholder="12"  autofocus autocomplete="off">
                    @error('number')
                        <div id="invalidstreetFeedback" class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                    @if (session()->has('valid-number'))
                        <div class="valid-feedback">
                            {{ session(['valid-number' => 'OK']) }}
                        </div>
                    @endif
                </div>


                <div class="group">
                    <label class="form-label" for="plz">{{  __('address.plz')  }} *</label>
                    <input wire:model.lazy="plz" class="form-control @error('plz') is-invalid @enderror @if (session('valid-plz'))
                        is-valid @endif" id="plz" type="number" placeholder="7000"  autofocus autocomplete="off">
                    @error('plz')
                        <div id="invalidstreetFeedback" class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                    @if (session()->has('valid-plz'))
                        <div class="valid-feedback">
                            {{ session('valid-plz') }}
                        </div>
                    @endif
                </div>

                <div class="group">
                    <label class="form-label" for="town">{{  __('address.plz')  }} *</label>
                    <input wire:model.lazy="town" class="form-control @error('town') is-invalid @enderror @if (session('valid-town'))
                        is-valid @endif" id="town" type="text" placeholder="Musterhausen"  autofocus autocomplete="off">
                    @error('town')
                        <div id="invalidFeedback" class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                    @if (session()->has('valid-town'))
                        <div class="valid-feedback">
                            {{ session('valid-town') }}
                        </div>
                    @endif
                </div>

                <div class="group">
                    <label class="form-label" for="country">{{  __('address.country')  }} *</label>
                    <select wire:model.lazy="country_id" class="form-select @error('country_id') is-invalid @enderror @if (session('valid-country_id'))
                        is-valid @endif" id="country" type="text" placeholder="Schweiz"  autofocus autocomplete="off">
                        <option selected value="" disabled>{{  __('attributes.please_select')  }}</option>
                        @foreach ($countries as $country)
                            <option value="{{ $country->id }}">{{ $country->name }}
                            </option>
                        @endforeach
                    </select>
                    @error('country_id')
                        <div id="invalidFeedback" class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                    @if (session()->has('valid-country_id'))
                        <div class="valid-feedback">
                            {{ session('valid-country_id') }}
                        </div>
                    @endif
                </div>

                <div class="group">
                    <label class="form-label" for="phone">{{  __('user.phone')  }} *</label>
                    <input wire:model.lazy="phone" class="form-control @error('phone') is-invalid @enderror @if (session('valid-phone'))
                        is-valid @endif" id="phone" type="text" placeholder="+41 81 123 4567"  autofocus autocomplete="off">
                    @error('phone')
                        <div id="invalidFeedback" class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                    @if (session()->has('valid-phone'))
                        <div class="valid-feedback">
                            {{ session(['valid-phone' => 'OK']) }}
                        </div>
                    @endif
                </div>


                <div class="group">
                    <label class="form-label" for="email">{{  __('user.email')  }} *</label>
                    <input wire:model.lazy="email" class="form-control @error('email') is-invalid @enderror @if (session('valid-email'))
                        is-valid @endif" id="email" type="email" placeholder="max@mustermann.ch"  autofocus autocomplete="off">
                    @error('email')
                        <div id="invalidFeedback" class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                    @if (session()->has('valid-email'))
                        <div class="valid-feedback">
                            {{ session(['valid-email' => 'OK']) }}
                        </div>
                    @endif
                </div>

                <div class="group">
                    <label class="form-label" for="password">{{  __('user.password_register')  }}</label>
                    <input wire:model.lazy="password" class="form-control @error('password') is-invalid @enderror @if (session('valid-password'))
                        is-valid @endif" id="password" type="password" autofocus autocomplete="off">
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
                    <label class="form-label" for="password_confirmation">{{  __('user.password_confirmation')  }} *</label>
                    <input wire:model.lazy="password_confirmation" class="form-control @error('password_confirmation') is-invalid @enderror @if (session('valid-password_confirmation'))
                        is-valid @endif" id="password_confirmation" type="password" autofocus autocomplete="off">
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
                <br/>
                <div class="form-check">
                    <label class="form-label" for="terms">
                        <input wire:model.lazy="terms" class="@error('terms') is-invalid @enderror @if (session('valid-terms'))
                            is-valid @endif" id="terms" type="checkbox">
                        @error('terms')
                            <div id="invalidFeedback" class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                        @if (session()->has('valid-terms'))
                            <div class="valid-feedback">
                                {{ session(['valid-terms' => 'OK']) }}
                            </div>
                        @endif
                        {{  __('regLog.accept')  }}
                    </label>
                </div>
                <div class="col-md-12 text-center">
                    <x-primary-button>
                        {{ __('Registrieren') }}
                    </x-primary-button>
                </div>
            </form>
        </div>
    </section>

</main><!-- End #main -->
