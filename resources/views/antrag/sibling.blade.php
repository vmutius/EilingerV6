<form wire:submit.prevent="Step7SiblingSubmit">
    <div class="content-header mb-3">
        <h3 class="mb-0">Geschwister</h3>
        <small>Enter Your Account Details.</small>
    </div>
    @foreach ($siblings as $key => $sibling)
        <div class="row g-3">
            <div class="col-sm-2">
                <label class="form-label" for="birth_year">Geburtsjahr</label>
                <input wire:model.lazy="sibling.{{ $key }}.birth_year" type="text" class="form-control" />
            </div>
            <div class="col-sm-5">
                <label class="form-label" for="lastname">Nachname</label>
                <input wire:model.lazy="sibling.{{ $key }}.lastname" type="text" class="form-control" />
            </div>
            <div class="col-sm-5">
                <label class="form-label" for="firstname">Vorname</label>
                <input wire:model.lazy="sibling.{{ $key }}.firstname" type="text" class="form-control" />
            </div>

            <div class="col-sm-12">
                <label class="form-label" for="placeOfResidence">Aufenthaltsadresse</label>
                <input wire:model.lazy="sibling.{{ $key }}.placeOfResidence" type="text"
                    class="form-control" />
            </div>

            <div class="col-sm-4">
                <label class="form-label" for="education">Ausbildung/Berufstätigkeit (Schule/Lehre/Lehrjahr)</label>
                <input wire:model.lazy="sibling.{{ $key }}.education" type="text" class="form-control" />
            </div>
            <div class="col-sm-2">
                <label class="form-label" for="birth_year">Abschluss der Ausbildung</label>
                <input wire:model.lazy="sibling.{{ $key }}.graduation_year" type="text"
                    class="form-control" />
            </div>
            <div class="col-sm-2">
                <label class="form-label" for="getAmount">Bezieht Ausbildungsbeiträge</label>
                <select wire:model.lazy="sibling.{{ $key }}.getAmount" class="form-select">
                    <option value="">-- Wählen Sie eine Option --</option>
                    @foreach (App\Models\Sibling::GETAMOUNT as $key => $label)
                        <option value="{{ $key }}">{{ $label }}</option>
                    @endforeach
                </select>
            </div>
            <div class="col-sm-4">
                <label class="form-label" for="supportSite">Beziehende Stelle</label>
                <input wire:model.lazy="sibling.{{ $key }}.supportSite" type="text" class="form-control" />
            </div>
            <hr class="hr" />
        </div>
    @endforeach

    <div class="col-md-12 text-center">
        <button type="submit" class="btn btn-success">
            <span class="align-middle d-sm-inline-block d-none">Zwischenspeichern</span>
        </button>
    </div>

    <div class="row">
        <div class="col-md-12">
            <button class="btn btn-sm btn-secondary" wire:click.prevent="AddSibling">+ Weitere Geschwister</button>
        </div>
    </div>


</form>
