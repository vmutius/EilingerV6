<form wire:submit.prevent="Step1UserSubmit">
    <div class="content-header mb-3">
        <h3 class="mb-0">Bewerber</h3>
        <small>Angaben über die in Ausbildung stehende Person, welche um Beiträge nachsucht</small>
    </div>
    <div class="row g-3">
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
            <label class="form-label" for="firstname">Vorname</label>
            <input wire:model.lazy="user.firstname" type="text" id="firstname" class="form-control" />
        </div>
        <div class="col-sm-5">       
            <label class="form-label" for="lastname">Nachname</label>
            <input wire:model.lazy="user.lastname" type="text" id="lastname" class="form-control"/>
        </div>
    
        <div class="col-sm-2">
            <label class="form-label" for="country">Nationalität</label>
            <select wire:model.lazy="user.nationality" class="form-select">
                <option disabled>Bitte auswählen...</option>
                @foreach ($countries as $country)
                    <option value="{{ $country->id }}">{{ $country->name }}</option>
                @endforeach
            </select>
        </div>
        <div class="col-sm-5">
            <label for="birthday" class="form-label">Geburtstag</label>
            <input wire:model.lazy="user.birthday" class="form-control" id="datepicker" type="text" placeholder="DD.MM.YYYY" />
        </div>
        <div class="col-md-5">
            <label class="form-label" for="email">Email</label>
            <input wire:model.lazy="user.email" type="email" id="email" class="form-control" />
        </div>

        <div class="col-md-4">
            <label class="form-label" for="telefon">Telefon</label>
            <input wire:model.lazy="user.telefon" type="text" id="telefon" class="form-control" />
        </div>
        <div class="col-md-4">
            <label class="form-label" for="mobile">Mobile</label>
            <input wire:model.lazy="user.mobile" type="text" id="mobile" class="form-control" />
        </div>
        <div class="col-md-4">
            <label class="form-label" for="sozVersNr">Sozialversicherungsnummer</label>
            <input wire:model.lazy="user.sozVersNr" type="text" id="sozVersNr" class="form-control" />
        </div>

        <div class="col-sm-6">
            <label class="form-label" for="inCHsince">In der Schweiz seit (für Ausländer)</label>
            <input wire:model.lazy="user.inCHsince" type="text" id="inCHsince" class="form-control" />
        </div>
        <div class="col-sm-6">       
            <label class="form-label" for="bewilligung">Art der Bewilligung  (für Ausländer)</label>
            <select wire:model.lazy="user.bewilligung" id="bewilligung" name="bewilligung" class="form-select">
                <option value="">-- Wählen Sie eine Option --</option>
                @foreach (App\Models\User::BEWILLIGUNG as $key => $label)
                    <option value="{{ $key }}">{{ $label }}</option>
                @endforeach
            </select>
        </div>
      
        <div class="col-md-12 text-center">        
            <button type="submit"  class="btn btn-success">
                <span class="align-middle d-sm-inline-block d-none">Zwischenspeichern</span>
            </button>
        </div>
    </div>
</form>

