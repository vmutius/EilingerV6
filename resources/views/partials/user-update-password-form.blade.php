<h3 class="m-0">{{  __('profile.changePassword')  }}</h3>
<small>{{  __('profile.changePasswordNote')  }}</small>

<form method="post" action="{{ route('password.update', app()->getLocale()) }}" class="mt-6 space-y-6">
    @csrf
    @method('put')
    <div class="row">
        <x-input-text-all name="current_password" type="password">{{  __('profile.password')  }} * </x-input-text-all>
        <x-input-error :messages="$errors->updatePassword->get('current_password')" class="mt-2" />
        <x-input-text-all name="password" type="password">{{  __('profile.newPassword')  }} * </x-input-text-all>
        <x-input-error :messages="$errors->updatePassword->get('password')" class="mt-2" />
        <x-input-text-all name="password_confirmation" type="password">{{  __('profile.confirmPassword')  }} * </x-input-text-all>
        <x-input-error :messages="$errors->updatePassword->get('password_confirmation')" class="mt-2" />
    </div>
    <div class="flex mt-3">
        <x-primary-button>{{ __('attributes.save') }}</x-primary-button>

        @if (session('status') === 'password-updated')
            <p x-data="{ show: true }" x-show="show" x-transition x-init="setTimeout(() => show = false, 2000)"
                class="text-sm text-gray-600">{{ __('Saved.') }}</p>
        @endif
    </div>
</form>
