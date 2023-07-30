<form wire:submit.prevent="saveSiblings">
    <div class="content-header mb-3">
        <h3 class="mb-0">Geschwister</h3>
        <small>Geschwister der gesuchstellenden Person</small>
    </div>

    <x-notification/>

    @foreach ($siblings as $index => $sibling)
        <div class="row g-3">
            <div class="col-sm-2">
                <label class="form-label" for="birth_year">Geburtsjahr</label>
                <input wire:model.lazy="siblings.{{ $index }}.birth_year" type="text" class="form-control" />
                <span class="text-danger">@error('siblings.{{ $index }}.birth_year'){{ $message }}@enderror</span>
            </div>
            <div class="col-sm-5">
                <label class="form-label" for="lastname">Nachname</label>
                <input wire:model.lazy="siblings.{{ $index }}.lastname" type="text" class="form-control" />
                <span class="text-danger">@error('siblings.{{ $index }}.lastname'){{ $message }}@enderror</span>
            </div>
            <div class="col-sm-5">
                <label class="form-label" for="firstname">Vorname</label>
                <input wire:model.lazy="siblings.{{ $index }}.firstname" type="text" class="form-control" />
                <span class="text-danger">@error('siblings.{{ $index }}.firstname'){{ $message }}@enderror</span>
            </div>

            <div class="col-sm-12">
                <label class="form-label" for="place_of_residence">Aufenthaltsadresse</label>
                <input wire:model.lazy="siblings.{{ $index }}.place_of_residence" type="text" class="form-control" />
                <span class="text-danger">@error('siblings.{{ $index }}.place_of_residence'){{ $message }}@enderror</span>
            </div>

            <div class="col-sm-4">
                <label class="form-label" for="education">Ausbildung/Berufstätigkeit (Schule/Lehre/Lehrjahr)</label>
                <input wire:model.lazy="siblings.{{ $index }}.education" type="text" class="form-control" />
                <span class="text-danger">@error('siblings.{{ $index }}.employer'){{ $message }}@enderror</span>
            </div>
            <div class="col-sm-2">
                <label class="form-label" for="birth_year">Abschluss der Ausbildung</label>
                <input wire:model.lazy="siblings.{{ $index }}.graduation_year" type="text" class="form-control" />
                <span class="text-danger">@error('siblings.{{ $index }}.employer'){{ $message }}@enderror</span>
            </div>
            <div class="col-sm-2">
                <label class="form-label" for="get_amount">Bezieht Ausbildungsbeiträge</label>
                <select wire:model.lazy="siblings.{{ $index }}.get_amount" class="form-select">
                    <option selected value="">-- Wählen Sie eine Option --</option>
                    @foreach (App\Models\Sibling::get_amount as $key => $label)
                        <option value="{{ $key }}">{{ $label }}</option>
                    @endforeach
                </select>
                <span class="text-danger">@error('siblings.{{ $index }}.get_amount'){{ $message }}@enderror</span>
            </div>
            <div class="col-sm-4">
                <label class="form-label" for="support_site">Beziehende Stelle</label>
                <input wire:model.lazy="siblings.{{ $index }}.support_site" type="text" class="form-control" />
                <span class="text-danger">@error('siblings.{{ $index }}.support_site'){{ $message }}@enderror</span>
            </div>
            <hr class="border border-dark opacity-50">
        </div>
    @endforeach

    <div class="row">
        <div class="col-md-12 mt-4">
            <button class="btn btn-sm btn-secondary" wire:click.prevent="addSibling">+ Weitere Geschwister</button>
        </div>
    </div>
    <div class="col-md-12 text-center">
        <button type="submit" class="btn btn-success">
            <span class="align-middle d-sm-inline-block d-none">Zwischenspeichern</span>
        </button>
    </div>
    


</form>
