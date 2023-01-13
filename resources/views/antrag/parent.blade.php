<form wire:submit.prevent="Step6ParentsSubmit">
    <div class="content-header mb-3">
        <h3 class="mb-0">Eltern</h3>
        <small>Leibliche Eltern der gesuchstellenden Person</small>
    </div>
    <div class="row g-3">
        <h4 class="mb-0">Vater</h4>
        <div class="col-sm-6">
            <label class="form-label" for="lastname">Nachname</label>
            <input wire:model.lazy="father.lastname" type="text" class="form-control" />
        </div>
        <div class="col-sm-6">
            <label class="form-label" for="firstname">Vorname</label>
            <input wire:model.lazy="father.firstname" type="text" class="form-control" />
        </div>

        <div class="col-sm-6">
            <label class="form-label" for="birthday">Geburtstag</label>
            <input wire:model.lazy="father.birthday" type="text"  class="form-control" />
        </div>
        <div class="col-sm-6">
            <label class="form-label" for="telefon">Telefon</label>
            <input wire:model.lazy="father.telefon" type="text" class="form-control"/>
        </div>

        <div class="col-sm-5">
            <label class="form-label" for="address">Strasse und Hausnummer</label>
            <input wire:model.lazy="father.address" type="text" class="form-control" />
        </div>
        <div class="col-sm-5">
            <label class="form-label" for="plz_ort">PLZ und Ort</label>
            <input wire:model.lazy="father.plz_ort" type="text" class="form-control"/>
        </div>
        <div class="col-sm-2">
            <label class="form-label" for="since">Wohnhaft seit</label>
            <input wire:model.lazy="father.since" type="text" class="form-control" />
        </div>

        <div class="col-sm-5">
            <label class="form-label" for="job">Beruf</label>
            <input wire:model.lazy="father.job" type="text" class="form-control" />
        </div>
        <div class="col-sm-5">
            <label class="form-label" for="plz_ort">Arbeitgeber</label>
            <input wire:model.lazy="father.plz_ort" type="text" class="form-control"/>
        </div>
        <div class="col-sm-2">
            <label class="form-label" for="job_type">Arbeitsverhältnis</label>
            <select wire:model.lazy="father.job_type" name="job_type" class="form-select">
                <option value="">-- Wählen Sie eine Option --</option>
                @foreach (App\Models\Parents::JOB_TYPE as $key => $label)
                    <option value="{{ $key }}">{{ $label }}</option>
                @endforeach
            </select>
        </div>

        <h4 class="mb-0">Mutter</h4>
        <div class="col-sm-6">
            <label class="form-label" for="lastname">Nachname</label>
            <input wire:model.lazy="mother.lastname" type="text" class="form-control" />
        </div>
        <div class="col-sm-6">
            <label class="form-label" for="firstname">Vorname</label>
            <input wire:model.lazy="mother.firstname" type="text" class="form-control"  />
        </div>

        <div class="col-sm-6">
            <label class="form-label" for="birthday">Geburtstag</label>
            <input wire:model.lazy="mother.birthday" type="text" class="form-control" />
        </div>
        <div class="col-sm-6">
            <label class="form-label" for="telefon">Telefon</label>
            <input wire:model.lazy="mother.telefon" type="text" class="form-control"  />
        </div>

        <div class="col-sm-5">
            <label class="form-label" for="address">Strasse und Hausnummer</label>
            <input wire:model.lazy="mother.address" type="text" class="form-control" />
        </div>
        <div class="col-sm-5">
            <label class="form-label" for="plz_ort">PLZ und Ort</label>
            <input wire:model.lazy="mother.plz_ort" type="text" class="form-control"  />
        </div>
        <div class="col-sm-2">
            <label class="form-label" for="since">Wohnhaft seit</label>
            <input wire:model.lazy="mother.since" type="text" class="form-control" />
        </div>

        <div class="col-sm-5">
            <label class="form-label" for="job">Beruf</label>
            <input wire:model.lazy="mother.job" type="text" class="form-control" />
        </div>
        <div class="col-sm-5">
            <label class="form-label" for="plz_ort">Arbeitgeber</label>
            <input wire:model.lazy="mother.plz_ort" type="text" class="form-control" />
        </div>
        <div class="col-sm-2">
            <label class="form-label" for="job_type">Arbeitsverhältnis</label>
            <select wire:model.lazy="mother.job_type" class="form-select">
                <option value="">-- Wählen Sie eine Option --</option>
                @foreach (App\Models\Parents::JOB_TYPE as $key => $label)
                    <option value="{{ $key }}">{{ $label }}</option>
                @endforeach
            </select>
        </div>

        <h4 class="mb-0">Stiefvater, wenn Mutter wiederverheiratet ist</h4>
        <div class="col-sm-6">
            <label class="form-label" for="lastname">Nachname</label>
            <input wire:model.lazy="stepfather.lastname" type="text" class="form-control"/>
        </div>
        <div class="col-sm-6">
            <label class="form-label" for="firstname">Vorname</label>
            <input wire:model.lazy="stepfather.firstname" type="text" class="form-control"/>
        </div>

        <div class="col-sm-6">
            <label class="form-label" for="address">Strasse und Hausnummer</label>
            <input wire:model.lazy="stepfather.address" type="text" class="form-control" />
        </div>
        <div class="col-sm-6">
            <label class="form-label" for="plz_ort">PLZ und Ort</label>
            <input wire:model.lazy="stepfather.plz_ort" type="text" class="form-control"/>
        </div>
        
        <div class="col-sm-6">
            <label class="form-label" for="plz_ort">Arbeitgeber</label>
            <input wire:model.lazy="stepfather.plz_ort" type="text" class="form-control"  />
        </div>

        <h4 class="mb-0">Stiefmutter, wenn Vater wiederverheiratet ist</h4>
        <div class="col-sm-6">
            <label class="form-label" for="lastname">Nachname</label>
            <input wire:model.lazy="stepmother.lastname" type="text"class="form-control" />
        </div>
        <div class="col-sm-6">
            <label class="form-label" for="firstname">Vorname</label>
            <input wire:model.lazy="stepmother.firstname" type="text" class="form-control"/>
        </div>

        <div class="col-sm-6">
            <label class="form-label" for="address">Strasse und Hausnummer</label>
            <input wire:model.lazy="stepmother.address" type="text" class="form-control" />
        </div>
        <div class="col-sm-6">
            <label class="form-label" for="plz_ort">PLZ und Ort</label>
            <input wire:model.lazy="stepmother.plz_ort" type="text" class="form-control" />
        </div>
        
        <div class="col-sm-6">
            <label class="form-label" for="plz_ort">Arbeitgeber</label>
            <input wire:model.lazy="stepmother.plz_ort" type="text"class="form-control"  />
        </div>
        
        
        <div class="col-md-12 text-center">        
            <button type="submit"  class="btn btn-success">
                <span class="align-middle d-sm-inline-block d-none">Zwischenspeichern</span>
            </button>
        </div>
    </div>
</form>
