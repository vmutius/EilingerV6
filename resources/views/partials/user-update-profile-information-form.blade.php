@php use Illuminate\Contracts\Auth\MustVerifyEmail; @endphp
<h3 class="m-0">{{  __('profile.title')  }}</h3>
<small>{{  __('profile.subtitle')  }}</small>


<form id="send-verification" method="post" action="{{ route('verification.send', app()->getLocale()) }}">
    @csrf
</form>

<form method="post" action="{{ route('user_profile.update', app()->getLocale()) }}" class="mt-6 space-y-6">
    @csrf
    @method('patch')
    <div class="row">
        <x-input-text-all name="lastname" :value="old('lastname', $user->lastname)">{{  __('user.lastname')  }} *</x-input-text-all>
        <x-input-error :messages="$errors->get('lastname')"/>
        <x-input-text-all name="firstname" :value="old('firstname', $user->firstname)">{{  __('user.firstname')  }} *</x-input-text-all>
        <x-input-error :messages="$errors->get('firstname')"/>
        <x-input-text-all name="email" type="email" :value="old('email', $user->email)">{{  __('user.email')  }} *</x-input-text-all>
        <x-input-error :messages="$errors->get('email')"/>


        @if ($user instanceof MustVerifyEmail && !$user->hasVerifiedEmail())
            <div>
                <p class="text-sm mt-2 text-gray-800">
                    {{ __('Your email address is unverified.') }}

                    <button form="send-verification"
                            class="underline text-sm text-gray-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">
                        {{ __('Click here to re-send the verification email.') }}
                    </button>
                </p>

                @if (session('status') === 'verification-link-sent')
                    <p class="mt-2 font-medium text-sm text-green-600">
                        {{ __('A new verification link has been sent to your email address.') }}
                    </p>
                @endif
            </div>
        @endif
    </div>

    <div class="flex mt-3">
        <x-primary-button>{{ __('attributes.save') }}</x-primary-button>

        @if (session('status') === 'profile-updated')
            <p x-data="{ show: true }" x-show="show" x-transition x-init="setTimeout(() => show = false, 2000)"
               class="text-sm text-gray-600">{{ __('Saved.') }}</p>
        @endif
    </div>
</form>
