<form wire:submit.prevent="saveEnclosure">
    <div class="content-header mb-3">
        <h3 class="mb-0">Ergänzende Angaben und Beilagen</h3>
        <small>die mit dem Stipendienantrag einzureichen sind</small>
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
                    <td>Semesterbestätigung/ Studienbescheinigung</td>
                    <td>
                        <div class="mb-3">
                            <input wire:model.defer="certificate_of_study" class="form-control" type="file">
                        </div>
                        <span class="text-danger">@error('certificate_of_study'){{ $message }}@enderror</span>
                    </td>
                    <td>
                        @if ($enclosure->certificate_of_study)
                            <a href="{{ asset('uploads/'.$enclosure->certificate_of_study) }}"
                               target="_blank">{{ $enclosure->certificate_of_study }}</a>
                        @endif
                    </td>
                </tr>
                <tr>
                    <th scope="row">2</th>
                    <td>Für Steuerpflichtige Gesuchsteller: Kopie der neuesten Steuerveranlagung(Veranlagungsprotokoll
                        nicht
                        Steuerrechnung)
                    </td>
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
                    <th scope="row">3</th>
                    <td>Kopie: Kostenbelege für Schulgeld und weitere Auslagen, die ausbildungsbedingt geltend gemacht
                        werden
                    </td>
                    <td>
                        <div class="mb-3">
                            <input wire:model.defer="expense_receipts" class="form-control" type="file" id="formFile">
                        </div>
                        <span class="text-danger">@error('expense_receipts'){{ $message }}@enderror</span>
                    </td>
                    <td>
                        @if ($enclosure->expense_receipts)
                            <a href="{{ asset('uploads/'.$enclosure->expense_receipts) }}"
                               target="_blank">{{ $enclosure->expense_receipts }}</a>
                        @endif
                    </td>
                </tr>
                <tr>
                    <th scope="row">4</th>
                    <td>Nur für Partner von in Partnerschaft lebenden Gesuchsteller: neueste Steuerveranlagung</td>
                    <td>
                        <div class="mb-3">
                            <input wire:model.defer="partner_tax_assessment" class="form-control" type="file"
                                   id="formFile">
                        </div>
                        <span class="text-danger">@error('partner_tax_assessment'){{ $message }}@enderror</span>
                    </td>
                    <td>
                        @if ($enclosure->partner_tax_assessment)
                            <a href="{{ asset('uploads/'.$enclosure->partner_tax_assessment) }}"
                               target="_blank">{{ $enclosure->partner_tax_assessment }}</a>
                        @endif
                    </td>
                </tr>
                <tr>
                    <th scope="row">5</th>
                    <td>Empfänger von IV-, Waisenrenten bzw. Ergänzungsleistungen: Kopie der Verfügung beilegen</td>
                    <td>
                        <div class="mb-3">
                            <input wire:model.defer="supplementary_services" class="form-control" type="file"
                                   id="formFile">
                        </div>
                        <span class="text-danger">@error('supplementary_services'){{ $message }}@enderror</span>
                    </td>
                    <td>
                        @if ($enclosure->supplementary_services)
                            <a href="{{ asset('uploads/'.$enclosure->supplementary_services) }}"
                               target="_blank">{{ $enclosure->supplementary_services }}</a>
                        @endif
                    </td>
                </tr>
                <tr>
                    <th scope="row">6</th>
                    <td>Nur für Studenten an universitären Hochschulen: Beleg über die geplanten/gebuchten ECTS-Punkte
                    </td>
                    <td>
                        <div class="mb-3">
                            <input wire:model.defer="ects_points" class="form-control" type="file" id="formFile">
                        </div>
                        <span class="text-danger">@error('ects_points'){{ $message }}@enderror</span>
                    </td>
                    <td>
                        @if ($enclosure->ects_points)
                            <a href="{{ asset('uploads/'.$enclosure->ects_points) }}"
                               target="_blank">{{ $enclosure->ects_points }}</a>
                        @endif
                    </td>
                </tr>
                <tr>
                    <th scope="row">7</th>
                    <td>Steuerfaktoren der Eltern</td>
                    <td>
                        <div class="mb-3">
                            <input wire:model.defer="parents_tax_factors" class="form-control" type="file"
                                   id="formFile">
                        </div>
                        <span class="text-danger">@error('parents_tax_factors'){{ $message }}@enderror</span>
                    </td>
                    <td>
                        @if ($enclosure->parents_tax_factors)
                            <a href="{{ asset('uploads/'.$enclosure->parents_tax_factors) }}"
                               target="_blank">{{ $enclosure->parents_tax_factors }}</a>
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
