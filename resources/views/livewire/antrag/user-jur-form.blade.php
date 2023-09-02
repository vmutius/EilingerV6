<form wire:submit.prevent="saveUserJur">
    <div class="content-header mb-3">
        <h3 class="mb-0">Gesuchssteller</h3>
        <small>Angaben über die Organisation</small>
    </div>
    <div class="row g-3">

        <x-notification/>

        <div class="col-md-6">
            <label class="form-label" for="name_inst">{{  __('attributes.name_inst')  }}</label>
            <input wire:model.lazy="user.name_inst" type="text" class="form-control" />
            <span class="text-danger">@error('user.name_inst'){{ $message }}@enderror</span>
        </div>

        <div class="col-md-6">
            <label class="form-label" for="telefon_inst">{{  __('attributes.telefon_inst')  }}</label>
            <input wire:model.lazy="user.telefon_inst" type="text" class="form-control" />
            <span class="text-danger">@error('user.telefon_inst'){{ $message }}@enderror</span>
        </div>

        <div class="col-md-6">
            <label class="form-label" for="email_inst">{{  __('attributes.email_inst')  }}</label>
            <input wire:model.lazy="user.email_inst" type="text" class="form-control" />
            <span class="text-danger">@error('user.email_inst'){{ $message }}@enderror</span>
        </div>

        <div class="col-md-6">
            <label class="form-label" for="website">{{  __('attributes.website')  }}</label>
            <input wire:model.lazy="user.website" type="text" class="form-control" />
            <span class="text-danger">@error('user.website'){{ $message }}@enderror</span>
        </div>

        <div class="col-sm-2">
            <label class="form-label" for="salutation">{{  __('attributes.salutation')  }}</label>
            <select wire:model.lazy="user.salutation" class="form-select">
                <option selected value="">Bitte Anrede auswählen</option>
                @foreach (App\Enums\Salutation::cases() as $salutation)
                    <option value="{{ $salutation }}">{{ $salutation }}</option>
                @endforeach
            </select>
            <span class="text-danger">@error('user.salutation'){{ $message }}@enderror</span>
        </div>
        <div class="col-sm-5">
            <label class="form-label" for="firstname">Vorname der Kontaktperson</label>
            <input wire:model.lazy="user.firstname" type="text" class="form-control" />
            <span class="text-danger">@error('user.firstname'){{ $message }}@enderror</span>
        </div>
        <div class="col-sm-5">
            <label class="form-label" for="lastname">Nachname der Kontaktperson</label>
            <input wire:model.lazy="user.lastname" type="text" class="form-control"/>
            <span class="text-danger">@error('user.lastname'){{ $message }}@enderror</span>
        </div>


        <div class="col-md-4">
            <label class="form-label" for="email">Email der Kontaktperson</label>
            <input wire:model.lazy="user.email" type="email" class="form-control" />
            <span class="text-danger">@error('user.email'){{ $message }}@enderror</span>
        </div>

        <div class="col-md-4">
            <label class="form-label" for="telefon">Telefon der Kontaktperson</label>
            <input wire:model.lazy="user.telefon" type="text" class="form-control" />
            <span class="text-danger">@error('user.telefon'){{ $message }}@enderror</span>
        </div>
        <div class="col-md-4">
            <label class="form-label" for="mobile">Mobile der Kontaktperson</label>
            <input wire:model.lazy="user.mobile" type="text" class="form-control" />
            <span class="text-danger">@error('user.mobile'){{ $message }}@enderror</span>
        </div>

        <div class="col-md-12">
            <label class="form-label" for="contact_partner_aboard">Ansprechpartner im Ausland</label>
            <input wire:model.lazy="user.contact_partner_aboard" type="text" class="form-control" />
        </div>




        <div class="col-md-12 text-center">
            <button type="submit"  class="btn btn-success">
                <span class="align-middle d-sm-inline-block d-none">Zwischenspeichern</span>
            </button>
        </div>
    </div>
</form>

