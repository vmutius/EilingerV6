<form wire:submit.prevent="saveParents">
    <div class="content-header mb-3">
        <h3 class="mb-0">Eltern</h3>
        <small>Leibliche Eltern der gesuchstellenden Person</small>
    </div>

    @if (session()->has('message'))
        <div class="alert alert-success">
            {{ session('message') }}
        </div>
    @endif


    @foreach ($parents as $index => $parent)
        <div class="row g-3" wire:key="{{ $parent->id }}">
            <div class="col-sm-2">
                <label class="form-label" for="job_type">Elternteil</label>
                <select wire:model.lazy="parents.{{ $index }}.parent_type" name="parent_type" class="form-select">
                    <option value="">-- Wählen Sie eine Option --</option>
                    @foreach (App\Models\Parents::PARENT_TYPE as $key => $label)
                        <option value="{{ $key }}">{{ $label }}</option>
                    @endforeach
                </select>
            </div>
            <div class="col-sm-5">
                <label class="form-label" for="lastname">Nachname</label>
                <input wire:model.lazy="parents.{{ $index }}.lastname" type="text" class="form-control" />
            </div>
            <div class="col-sm-5">
                <label class="form-label" for="firstname">Vorname</label>
                <input wire:model.lazy="parents.{{ $index }}.firstname" type="text" class="form-control" />
            </div>

            <div class="col-sm-6">
                <label class="form-label" for="birthday">Geburtstag</label>
                <input wire:model.lazy="parents.{{ $index }}.birthday" type="text" class="form-control" />
            </div>
            <div class="col-sm-6">
                <label class="form-label" for="telefon">Telefon</label>
                <input wire:model.lazy="parents.{{ $index }}.telefon" type="text" class="form-control" />
            </div>

            <div class="col-sm-5">
                <label class="form-label" for="address">Strasse und Hausnummer</label>
                <input wire:model.lazy="parents.{{ $index }}.address" type="text" class="form-control" />
            </div>
            <div class="col-sm-5">
                <label class="form-label" for="plz_ort">PLZ und Ort</label>
                <input wire:model.lazy="parents.{{ $index }}.plz_ort" type="text" class="form-control" />
            </div>
            <div class="col-sm-2">
                <label class="form-label" for="since">Wohnhaft seit</label>
                <input wire:model.lazy="parents.{{ $index }}.since" type="text" class="form-control" />
            </div>

            <div class="col-sm-5">
                <label class="form-label" for="job">Beruf</label>
                <input wire:model.lazy="parents.{{ $index }}.job" type="text" class="form-control" />
            </div>
            <div class="col-sm-5">
                <label class="form-label" for="plz_ort">Arbeitgeber</label>
                <input wire:model.lazy="parents.{{ $index }}.plz_ort" type="text" class="form-control" />
            </div>
            <div class="col-sm-2">
                <label class="form-label" for="job_type">Arbeitsverhältnis</label>
                <select wire:model.lazy="parents.{{ $index }}.job_type" name="job_type" class="form-select">
                    <option value="">-- Wählen Sie eine Option --</option>
                    @foreach (App\Models\Parents::JOB_TYPE as $key => $label)
                        <option value="{{ $key }}">{{ $label }}</option>
                    @endforeach
                </select>
            </div>
        </div>
    @endforeach


    <div class="col-md-12 text-center">
        <button type="submit" class="btn btn-success">
            <span class="align-middle d-sm-inline-block d-none">Zwischenspeichern</span>
        </button>
    </div>
    <div class="row">
        <div class="col-md-12">
            <button class="btn btn-sm btn-secondary" wire:click.prevent="addParent">+ Weitere Elternteile</button>
        </div>
    </div>
</form>
