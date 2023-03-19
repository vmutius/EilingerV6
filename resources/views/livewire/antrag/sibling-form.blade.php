<form wire:submit.prevent="saveSiblings">
    <div class="content-header mb-3">
        <h3 class="mb-0">Geschwister</h3>
        <div class="d-flex justify-content-between">
            <div>
                <small>Angaben über Geschwister</small>
            </div>
            <div>
                {{-- @livewire('toogle-draft', ['model' => $sibling]) --}}
            </div>
        </div>
    </div>

    <x-notification/>

    @foreach ($siblings as $index => $sibling)
        <div class="row g-3">
            <div class="col-sm-2">
                <label class="form-label" for="birth_year">Geburtsjahr</label>
                <input wire:model.lazy="siblings.{{ $index }}.birth_year" type="text" class="form-control" />
            </div>
            <div class="col-sm-5">
                <label class="form-label" for="lastname">Nachname</label>
                <input wire:model.lazy="siblings.{{ $index }}.lastname" type="text" class="form-control" />
            </div>
            <div class="col-sm-5">
                <label class="form-label" for="firstname">Vorname</label>
                <input wire:model.lazy="siblings.{{ $index }}.firstname" type="text" class="form-control" />
            </div>

            <div class="col-sm-12">
                <label class="form-label" for="place_of_residence">Aufenthaltsadresse</label>
                <input wire:model.lazy="siblings.{{ $index }}.place_of_residence" type="text"
                    class="form-control" />
            </div>

            <div class="col-sm-4">
                <label class="form-label" for="education">Ausbildung/Berufstätigkeit (Schule/Lehre/Lehrjahr)</label>
                <input wire:model.lazy="siblings.{{ $index }}.education" type="text" class="form-control" />
            </div>
            <div class="col-sm-2">
                <label class="form-label" for="birth_year">Abschluss der Ausbildung</label>
                <input wire:model.lazy="siblings.{{ $index }}.graduation_year" type="text"
                    class="form-control" />
            </div>
            <div class="col-sm-2">
                <label class="form-label" for="get_amount">Bezieht Ausbildungsbeiträge</label>
                <select wire:model.lazy="siblings.{{ $index }}.get_amount" class="form-select">
                    <option value="">-- Wählen Sie eine Option --</option>
                    @foreach (App\Models\Sibling::get_amount as $key => $label)
                        <option value="{{ $key }}">{{ $label }}</option>
                    @endforeach
                </select>
            </div>
            <div class="col-sm-4">
                <label class="form-label" for="support_site">Beziehende Stelle</label>
                <input wire:model.lazy="siblings.{{ $index }}.support_site" type="text"
                    class="form-control" />
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
            <button class="btn btn-sm btn-secondary" wire:click.prevent="addSibling">+ Weitere Geschwister</button>
        </div>
    </div>


</form>
