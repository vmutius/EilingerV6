<form wire:submit.prevent="saveUserJur">
    <div class="content-header mb-3">
        <h3 class="mb-0">Bewerber</h3>
        <small>Angaben über die in Ausbildung stehende Person, welche um Beiträge nachsucht</small>
    </div>
    <div class="row g-3">

        <x-notification/>

        <div class="col-md-6">
            <label class="form-label" for="name_inst">Name der Organisation</label>
            <input wire:model.lazy="user.name_inst" type="text" class="form-control" />
        </div>

        <div class="col-md-6">
            <label class="form-label" for="telefon_inst">Telefonnummer der Organisation</label>
            <input wire:model.lazy="user.telefon_inst" type="text" class="form-control" />
        </div>

        <div class="col-md-6">
            <label class="form-label" for="email_inst">Email der Organisation</label>
            <input wire:model.lazy="user.email_inst" type="text" class="form-control" />
            @error('user.email_inst') <span class="text-danger">{{ $message }}</span> @enderror
        </div>

        <div class="col-md-6">
            <label class="form-label" for="website">Webseite der Organisation</label>
            <input wire:model.lazy="user.website" type="text" class="form-control" />
        </div>

        <div class="col-sm-2">
            <label class="form-label" for="salutation">Anrede</label>
            <select wire:model.lazy="user.salutation" class="form-select">
                <option value="" disabled>Bitte Anrede auswählen</option>
                @foreach (App\Models\User::SALUTATION as $key => $label)
                    <option value="{{ $key }}">{{ $label }}</option>
                @endforeach
            </select>
        </div>
        <div class="col-sm-5">
            <label class="form-label" for="firstname">Vorname der Kontaktperson</label>
            <input wire:model.lazy="user.firstname" type="text" class="form-control" />
        </div>
        <div class="col-sm-5">
            <label class="form-label" for="lastname">Nachname der Kontaktperson</label>
            <input wire:model.lazy="user.lastname" type="text" class="form-control"/>
        </div>


        <div class="col-md-4">
            <label class="form-label" for="email">Email der Kontaktperson</label>
            <input wire:model.lazy="user.email" type="email" class="form-control" />
        </div>

        <div class="col-md-4">
            <label class="form-label" for="telefon">Telefon der Kontaktperson</label>
            <input wire:model.lazy="user.telefon" type="text" class="form-control" />
        </div>
        <div class="col-md-4">
            <label class="form-label" for="mobile">Mobile der Kontaktperson</label>
            <input wire:model.lazy="user.mobile" type="email" class="form-control" />
        </div>




        <div class="col-md-12 text-center">
            <button type="submit"  class="btn btn-success">
                <span class="align-middle d-sm-inline-block d-none">Zwischenspeichern</span>
            </button>
        </div>
    </div>
</form>

