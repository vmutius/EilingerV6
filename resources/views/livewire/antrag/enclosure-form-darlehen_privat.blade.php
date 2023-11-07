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
                            <a href="{{ asset('uploads/'.$enclosure->activity) }}"
                               target="_blank">{{ $enclosure->activity }}</a>
                        @endif
                    </td>
                </tr>
                <tr>
                    <th scope="row">2</th>
                    <td>Alle Tätigkeitsberichte</td>
                    <td>
                        <div class="mb-3">
                            <input wire:model.defer="activity_report" class="form-control" type="file" id="formFile">
                        </div>
                        <span class="text-danger">@error('activity_report'){{ $message }}@enderror</span>
                    </td>
                    <td>
                        @if ($enclosure->activity_report)
                            <a href="{{ asset('uploads/'.$enclosure->activity_report) }}"
                               target="_blank">{{ $enclosure->activity_report }}</a>
                        @endif
                    </td>
                </tr>
                <tr>
                    <th scope="row">3</th>
                    <td>Kopie eines Mietvertrages</td>
                    <td>
                        <div class="mb-3">
                            <input wire:model.defer="rental_contract" class="form-control" type="file" id="formFile">
                        </div>
                        <span class="text-danger">@error('rental_contract'){{ $message }}@enderror</span>
                    </td>
                    <td>
                        @if ($enclosure->rental_contract)
                            <a href="{{ asset('uploads/'.$enclosure->rental_contract) }}"
                               target="_blank">{{ $enclosure->rental_contract }}</a>
                        @endif
                    </td>
                </tr>
                <tr>
                    <th scope="row">4</th>
                    <td>Ein- und Ausgabenaufstellung detailliert (Bilanz, Jahresbilanz)</td>
                    <td>
                        <div class="mb-3">
                            <input wire:model.defer="balance_sheet" class="form-control" type="file" id="formFile">
                        </div>
                        <span class="text-danger">@error('balance_sheet'){{ $message }}@enderror</span>
                    </td>
                    <td>
                        @if ($enclosure->balance_sheet)
                            <a href="{{ asset('uploads/'.$enclosure->balance_sheet) }}"
                               target="_blank">{{ $enclosure->balance_sheet }}</a>
                        @endif
                    </td>
                </tr>
                <tr>
                    <th scope="row">5</th>
                    <td>Kopie der neuesten Steuerveranlagung, Steuerbefreiung</td>
                    <td>
                        <div class="mb-3">
                            <input wire:model.defer="tax_assessment" class="form-control" type="file" id="formFile">
                        </div>
                        <span class="text-danger">@error('tax_assessment'){{ $message }}@enderror</span>
                    </td>
                    <td>
                        @if ($enclosure->tax_assessment)
                            <a href="{{ asset('uploads/'.$enclosure->tax_assessment) }}"
                               target="_blank">{{ $enclosure->tax_assessment }}</a>
                        @endif
                    </td>
                </tr>
                <tr>
                    <th scope="row">6</th>
                    <td>Kopie Kostenbelege für Verwendung des/r genehmigten Betrages/Beträge</td>
                    <td>
                        <div class="mb-3">
                            <input wire:model.defer="cost_receipts" class="form-control" type="file" id="formFile">
                        </div>
                        <span class="text-danger">@error('cost_receipts'){{ $message }}@enderror</span>
                    </td>
                    <td>
                        @if ($enclosure->cost_receipts)
                            <a href="{{ asset('uploads/'.$enclosure->cost_receipts) }}"
                               target="_blank">{{ $enclosure->cost_receipts }}</a>
                        @endif
                    </td>
                </tr>
                <tr>
                    <th scope="row">7</th>
                    <td>Kopie offene Rechnung/en (z. B. Arzt, Krankenhaus, Tierarzt, Pflegestelle, Sonstiges)</td>
                    <td>
                        <div class="mb-3">
                            <input wire:model.defer="open_invoice" class="form-control" type="file">
                        </div>
                        <span class="text-danger">@error('open_invoice'){{ $message }}@enderror</span>
                    </td>
                    <td>
                        @if ($enclosure->open_invoice)
                            <a href="{{ asset('uploads/'.$enclosure->open_invoice) }}"
                               target="_blank">{{ $enclosure->open_invoice }}</a>
                        @endif
                    </td>
                </tr>
                </tbody>
            </table>

        </div>

        <div class="col-md-12 text-center">
            <button type="submit" class="btn btn-success">
                <span class="align-middle d-sm-inline-block d-none">Zwischenspeichern</span>
            </button>
        </div>
    </div>
</form>
