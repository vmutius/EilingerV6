<h3 class="m-2">Account löschen</h3>
<small>Wenn Sie Ihren Account löschen, werden alle Daten dauerhaft gelöscht. Dieser Vorgang kann nicht rückgängig gemacht werden.
    Um Ihren Account zu löschen geben Sie bitte Ihr Passwort ein und bestätigen Sie die Löschung durch Klicken des "Account löschen" Button.
    Es erfolgt keine weitere Nachfrage, Ihre Daten sind dann unwiderruflich geöscht.
</small>


    <form method="post" action="{{ route('user_profile.destroy') }}" class="p-6">
        @csrf
        @method('delete')

        <div class="mt-6">
            <label class="form-label" for="password">Passwort *</label>
            <input name="password" type="password" class="form-control" />

            <x-input-error :messages="$errors->userDeletion->get('password')" class="mt-2" />
        </div>

        <div class="flex mt-3">
            <x-secondary-button x-on:click="$dispatch('Abbrechen')">
                {{ __('Cancel') }}
            </x-secondary-button>

            <x-danger-button class="ml-3">
                {{ __('Account löschen') }}
            </x-danger-button>
        </div>
    </form>

