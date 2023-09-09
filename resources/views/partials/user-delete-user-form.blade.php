<h3 class="m-2">Account löschen</h3>
<small>Wenn Sie Ihren Account löschen, werden alle Daten dauerhaft gelöscht. Dieser Vorgang kann nicht rückgängig gemacht werden.
    Um Ihren Account zu löschen geben Sie bitte Ihr Passwort ein und bestätigen Sie die Löschung durch Klicken des "Account löschen" Button.
    
</small>


    <form method="post" action="{{ route('user_profile.destroy', app()->getLocale()) }}" class="p-6">
        @csrf
        @method('delete')

        <div class="mt-6">
            <label class="form-label" for="password">Passwort *</label>
            <input name="password" type="password" class="form-control" />

            <x-input-error :messages="$errors->userDeletion->get('password')" class="mt-2" />
        </div>

        <div class="modal" @if ($showModal) style="display:block" @endif>
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <form wire:submit.prevent="save">
                        <div class="modal-header">
                            <h5 class="modal-title">Antrag einreichem</h5>
                            <button wire:click="close" type="button" class="close" data-dismiss="modal"
                                aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            
                            <br />
                            Wollen Sie ihren Account wirklich löschen??
                            <br />
                            
                        </div>
                        <div class="modal-footer">
                            <button type="submit" class="btn btn-primary">Account löschen</button>
                            <button wire:click="close" type="button" class="btn btn-secondary"
                                data-dismiss="modal">Close
                            </button>
                        </div>
                    </form>
                </div>
            </div>
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

