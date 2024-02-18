<main id="main">
    <section>
        <div class="container">
            <div class="section-title">
                <h2>{{  __('regLog.regOrg')  }}</h2>
            </div>
            <div>
                <form wire:submit.prevent="registerInst">
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
                        <label class="form-label" for="name_inst">{{  __('user.name_inst')  }} *</label>
                        <input wire:model.lazy="name_inst" class="form-control @error('name_inst') is-invalid @enderror @if (session('valid-name_inst')) is-valid @endif" id="name_inst" type="text"
                            placeholder="Firma Mustermann"  autofocus autocomplete="off">
                        @error('name_inst')
                            <div id="invalidname_instFeedback" class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                        @if (session()->has('valid-name_inst'))
                            <div class="valid-feedback">
                                {{ session('valid-name_inst') }}
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
                                {{ session(['valid-number']) }}
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
                        <label class="form-label" for="town">{{  __('address.town')  }} *</label>
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
                            is-valid @endif" id="country_id" type="text" autofocus autocomplete="off">
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
                        <label class="form-label" for="phone_inst">{{  __('user.phone_inst')  }}</label>
                        <input wire:model.lazy="phone_inst" class="form-control @error('phone_inst') is-invalid @enderror @if (session('valid-phone_inst'))
                            is-valid @endif" id="phone_inst" type="text" placeholder="+41 81 123 4567"  autofocus autocomplete="off">
                        @error('phone_inst')
                            <div id="invalidFeedback" class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                        @if (session()->has('valid-phone_inst'))
                            <div class="valid-feedback">
                                {{ session(['valid-phone_inst']) }}
                            </div>
                        @endif
                    </div>

                    <div class="group">
                        <label class="form-label" for="email_inst">{{  __('user.email_inst')  }}</label>
                        <input wire:model.lazy="email_inst" class="form-control @error('email_inst') is-invalid @enderror @if (session('valid-email_inst'))
                            is-valid @endif" id="email_inst" type="email" placeholder="muster@muster.ch"  autofocus autocomplete="off">
                        @error('email_inst')
                            <div id="invalidFeedback" class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                        @if (session()->has('valid-email_inst'))
                            <div class="valid-feedback">
                                {{ session('valid-email_inst') }}
                            </div>
                        @endif
                    </div>


                    <div class="group">
                        <label class="form-label" for="website">{{  __('user.website')  }}</label>
                        <input wire:model.lazy="website" class="form-control @error('website') is-invalid @enderror @if (session('valid-website'))
                            is-valid @endif" id="website" type="text" placeholder="https://www.musterfirma.ch"  autofocus autocomplete="off">
                        @error('website')
                            <div id="invalidFeedback" class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                        @if (session()->has('valid-website'))
                            <div class="valid-feedback">
                                {{ session(['valid-website']) }}
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
                                {{ session(['valid-salutation']) }}
                            </div>
                        @endif
                    </div>


                    <div class="group">
                        <label class="form-label" for="firstname">{{  __('user.firstname')  }} {{  __('user.contact')  }} *</label>
                        <input wire:model.lazy="firstname" class="form-control @error('firstname') is-invalid @enderror @if (session('valid-firstname'))
                            is-valid @endif" id="firstname" type="text" placeholder="Max"  autofocus autocomplete="off">
                        @error('firstname')
                            <div id="invalidFeedback" class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                        @if (session()->has('valid-firstname'))
                            <div class="valid-feedback">
                                {{ session(['valid-firstname']) }}
                            </div>
                        @endif
                    </div>

                    <div class="group">
                        <label class="form-label" for="lastname">{{  __('user.lastname')  }} {{  __('user.contact')  }} *</label>
                        <input wire:model.lazy="lastname" class="form-control @error('lastname') is-invalid @enderror @if (session('valid-lastname'))
                            is-valid @endif" id="lastname" type="text" placeholder="Muster"  autofocus autocomplete="off">
                        @error('lastname')
                            <div id="invalidFeedback" class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                        @if (session()->has('valid-lastname'))
                            <div class="valid-feedback">
                                {{ session(['valid-lastname']) }}
                            </div>
                        @endif
                    </div>

                    <div class="group">
                        <label class="form-label" for="phone">{{  __('user.phone')  }} {{  __('user.contact')  }} *</label>
                        <input wire:model.lazy="phone" class="form-control @error('phone') is-invalid @enderror @if (session('valid-phone'))
                            is-valid @endif" id="phone" type="text" placeholder="+41 81 123 4567"  autofocus autocomplete="off">
                        @error('phone')
                            <div id="invalidFeedback" class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                        @if (session()->has('valid-phone'))
                            <div class="valid-feedback">
                                {{ session(['valid-phone']) }}
                            </div>
                        @endif
                    </div>

                   <div class="group">
                        <label class="form-label" for="mobile">{{  __('user.mobile')  }} {{  __('user.contact')  }} *</label>
                        <input wire:model.lazy="mobile" class="form-control @error('mobile') is-invalid @enderror @if (session('valid-mobile'))
                            is-valid @endif" id="mobile" type="text" placeholder="+41 79 123 4567"  autofocus autocomplete="off">
                        @error('mobile')
                            <div id="invalidFeedback" class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                        @if (session()->has('valid-mobile'))
                            <div class="valid-feedback">
                                {{ session(['valid-mobile']) }}
                            </div>
                        @endif
                    </div>

                    <div class="group">
                        <label class="form-label" for="email">{{  __('user.email')  }} {{  __('user.contact')  }} *</label>
                        <input wire:model.lazy="email" class="form-control @error('email') is-invalid @enderror @if (session('valid-email'))
                            is-valid @endif" id="email" type="email" placeholder="max@mustermann.ch"  autofocus autocomplete="off">
                        @error('email')
                            <div id="invalidFeedback" class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                        @if (session()->has('valid-email'))
                            <div class="valid-feedback">
                                {{ session(['valid-email']) }}
                            </div>
                        @endif
                    </div>


                    <div class="group">
                        <label class="form-label" for="password">{{  __('user.password')  }} *</label>
                        <input wire:model.lazy="password" class="form-control @error('password') is-invalid @enderror @if (session('valid-password'))
                            is-valid @endif" id="password" type="password" autofocus autocomplete="off">
                        @error('password')
                            <div id="invalidFeedback" class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                        @if (session()->has('valid-password'))
                            <div class="valid-feedback">
                                {{ session(['valid-password']) }}
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
                                {{ session(['valid-password_confirmation']) }}
                            </div>
                        @endif
                    </div>
                    <br/>
                    <div class="form-check">
                        <label class="form-label" for="terms">
                            <input wire:model.lazy="terms" class ="@error('terms') is-invalid @enderror @if (session('valid-terms'))
                                is-valid @endif" id="terms" type="checkbox" autofocus autocomplete="off">
                            @error('terms')
                                <div id="invalidFeedback" class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                            @if (session()->has('valid-terms'))
                                <div class="valid-feedback">
                                    {{ session(['valid-terms']) }}
                                </div>
                            @endif
                            {{  __('regLog.accept')  }}
                        </label>
                    </div>
                    <div class="col-md-12 text-center">
                        <x-primary-button>
                            {{  __('regLog.register')  }}
                        </x-primary-button>
                    </div>
                </form>
            </div>

        </div>

    </section>

</main><!-- End #main -->
