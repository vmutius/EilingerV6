<form wire:submit.prevent="saveEnclosureDarlehen">
    <div class="content-header mb-3">
        <h3 class="mb-0">Ergänzende Angaben und Beilagen</h3>
        <small>(z. B. Grund des Gesuchs, Schilderung Ausgangslage; Projektvorstellung/ggf. Anlagen beifügen)</small>
    </div>
    <div class="row g-3">

        <x-notification/>

        <h4 class="mb-0">Bemerkungen</h4>
        <div class="col-sm-12">
            <div class="row g-3">
                <div class="col-sm-12">
                    <textarea wire:model.lazy="enclosure.remark" class="form-control" rows="3"></textarea>
                </div>
            </div>
        <br/>
        <br/>
        <h4 class="mb-0">Notwendige Dokumente</h4>

        <table class="table table-striped">
            <thead>
                <tr>
                <th scope="col">#</th>
                <th scope="col">Dokument</th>
                <th scope="col">Datein</th>
                <th scope="col">Hochgeladen</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                <th scope="row">1</th>
                <td>Vorstellung Tätigkeit</td>
                <td>
                    <div class="mb-3">
                        <input wire:model.defer="activity" class="form-control" type="file">
                    </div>
                    <span class="text-danger">@error('activity'){{ $message }}@enderror</span>
                </td>
                <td>
                    @if ($enclosure->activity)
                    <span class="text.success">{{ $enclosure->activity}}</span>
                    @endif
                </td>
                </tr>
                <tr>
                <th scope="row">2</th>
                <td>Alle Tätigkeitsberichte </td>
                <td>
                    <div class="mb-3">
                        <input wire:model.defer="cv" class="form-control" type="file" id="formFile">
                    </div>
                    <span class="text-danger">@error('cv'){{ $message }}@enderror</span>
                </td>
                <td>
                    @if ($enclosure->cv)
                        <span class="text.success">{{ $enclosure->cv}}</span>
                    @endif
                    </td>
                </tr>
                <tr>
                <th scope="row">3</th>
                <td>Kopie eines Mietvertrages </td>
                <td>
                    <div class="mb-3">
                        <input wire:model.defer="apprenticeship_contract" class="form-control" type="file" id="formFile">
                    </div>
                    <span class="text-danger">@error('apprenticeship_contract'){{ $message }}@enderror</span>
                </td>
                <td>
                    @if ($enclosure->apprenticeship_contract)
                    <span class="text.success">{{ $enclosure->apprenticeship_contract}}</span>
                    @endif
                </td>
                </tr>
                <tr>
                <th scope="row">4</th>
                <td>Ein- und Ausgabenaufstellung detailliert (Bilanz, Jahresbilanz) </td>
                <td>
                    <div class="mb-3">
                        <input wire:model.defer="diploma" class="form-control" type="file" id="formFile">
                    </div>
                    <span class="text-danger">@error('diploma'){{ $message }}@enderror</span>
                </td>
                <td>
                    @if ($enclosure->diploma)
                    <span class="text.success">{{ $enclosure->diploma}}</span>
                    @endif
                </td>
                </tr>
                <tr>
                <th scope="row">5</th>
                <td>Kopie der neuesten Steuerveranlagung, Steuerbefreiung </td>
                <td>
                    <div class="mb-3">
                        <input wire:model.defer="divorce" class="form-control" type="file" id="formFile">
                    </div>
                    <span class="text-danger">@error('divorce'){{ $message }}@enderror</span>
                </td>
                <td>
                    @if ($enclosure->divorce)
                    <span class="text.success">{{ $enclosure->divorce}}</span>
                    @endif
                </td>
                </tr>
                <tr>
                <th scope="row">6</th>
                <td>Kopie Kostenbelege für Verwendung des/r genehmigten Betrages/Beträge</td>
                <td>
                    <div class="mb-3">
                        <input wire:model.defer="rental_contract" class="form-control" type="file" id="formFile">
                    </div>
                    <span class="text-danger">@error('rental_contract'){{ $message }}@enderror</span>
                </td>
                <td>
                    @if ($enclosure->rental_contract)
                    <span class="text.success">{{ $enclosure->rental_contract}}</span>
                    @endif
                </td>
                </tr>
                <tr>
                <th scope="row">1</th>
                <td>Kopie offene Rechnung/en (z. B. Arzt, Krankenhaus, Tierarzt, Pflegestelle, Sonstiges) </td>
                <td>
                    <div class="mb-3">
                        <input wire:model.defer="certificate_of_study" class="form-control" type="file">
                        </div>
                    <span class="text-danger">@error('certificate_of_study'){{ $message }}@enderror</span>
                </td>
                <td>
                    @if ($enclosure->certificate_of_study)
                        <span class="text.success">{{ $enclosure->certificate_of_study}}</span>
                    @endif
                    </td>
                </tr>
            </tbody>
            </table>
            
        </div>

        <div class="col-md-12 text-center">
            <button type="submit"  class="btn btn-success">
                <span class="align-middle d-sm-inline-block d-none">Zwischenspeichern</span>
            </button>
        </div>
    </div>
</form>