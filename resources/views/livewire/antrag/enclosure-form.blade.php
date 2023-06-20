<form wire:submit.prevent="saveEnclosure">
    <div class="content-header mb-3">
        <h3 class="mb-0">Bemerkungen und Beilagen</h3>
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
            <h4 class="mb-0">Nur für Erstantrag</h4>

            <table class="table table-striped">
                <thead>
                  <tr>
                    <th scope="col">#</th>
                    <th scope="col">Dokument</th>
                    <th scope="col">Datein</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <th scope="row">1</th>
                    <td>Kopie des aktuellen Personalausweises (Pass, ID, Ausländerausweis)</td>
                    <td>
                        <div class="mb-3">
                            <input wire:model="enclosure.passport" class="form-control" type="file" id="formFile">
                          </div>
                        <span class="text-danger">@error('enclosure.passport'){{ $message }}@enderror</span>
                    </td>
                  </tr>
                  <tr>
                    <th scope="row">2</th>
                    <td>Lebenslauf</td>
                    <td>
                        <div class="file-upload">
                            <div class="file-select">
                              
                              <div class="file-select-name" id="noFile">No file chosen...</div> 
                              <input wire:model="enclosure.cv" type="file" name="chooseFile" id="chooseFile">
                            </div>
                          </div>
                        <span class="text-danger">@error('enclosure.cv'){{ $message }}@enderror</span>
                    </td>
                  </tr>
                  <tr>
                    <th scope="row">3</th>
                    <td>Kopie: Ausbildungs- oder Lehrvertrag(Für Uni/FH: ausgefülltes Zusatzformular A)</td>
                    <td>
                        <div class="file-upload">
                            <div class="file-select">
                              <div class="file-select-button">Choose File</div>
                              <div class="file-select-name">No file chosen...</div> 
                              <input wire:model="passport" type="file">
                            </div>
                          </div>
                        <span class="text-danger">@error('passport'){{ $message }}@enderror</span>
                    </td>
                  </tr>
                  <tr>
                    <th scope="row">4</th>
                    <td>Kopie: Ausweis über einen Berufsabschluss, BM, Matura bzw. andere Abschlüsse falls vorhanden</td>
                    <td>
                        <div class="mb-3">
                            <input wire:model="enclosure.diploma" class="form-control" type="file" id="formFile">
                          </div>
                        <span class="text-danger">@error('enclosure.diploma'){{ $message }}@enderror</span>
                    </td>
                  </tr>
                  <tr>
                    <th scope="row">5</th>
                    <td>Für Gesuchsteller aus getrennten oder geschiedenen Ehen: Kopie Unterhaltsvereinbarung/Scheidungsurteil</td>
                    <td>
                        <form action="/file-upload" class="dropzone rounded mb-4">
                            <div class="fallback">
                                <input name="file" type="file" />
                            </div>
                        </form>
                    </td>
                  </tr>
                  <tr>
                    <th scope="row">5</th>
                    <td>Für Gesuchsteller mit auswärtigem Wohnsitz: Kopie eines Mietvertrages / Wochenaufenthaltsbestätigung</td>
                    <td>
                        <form action="/file-upload" class="dropzone rounded mb-4">
                            <div class="fallback">
                                <input name="file" type="file" />
                            </div>
                        </form>
                    </td>
                  </tr>
                </tbody>
              </table>

           
            <div class="form-check">
                <label class="form-check-label" for="has_apprenticeship_contract">Kopie: Ausbildungs- oder Lehrvertrag(Für Uni/FH: ausgefülltes Zusatzformular A)</label>
                <input wire:model.lazy="enclosure.has_apprenticeship_contract" class="form-check-input" type="checkbox" value="" />
                <span class="text-danger">@error('enclosure.has_apprenticeship_contract'){{ $message }}@enderror</span>
            </div>
            <div class="form-check">
                <label class="form-check-label" for="has_diploma">Kopie: Ausweis über einen Berufsabschluss, BM, Matura bzw. andere Abschlüsse falls vorhanden</label>
                <input wire:model.lazy="enclosure.has_diploma" class="form-check-input" type="checkbox" value="" />
                <span class="text-danger">@error('enclosure.has_diploma'){{ $message }}@enderror</span>
            </div>
            <div class="form-check">
                <label class="form-check-label" for="has_divorce">Für Gesuchsteller aus getrennten oder geschiedenen Ehen: Kopie
                    Unterhaltsvereinbarung/Scheidungsurteil</label>
                <input wire:model.lazy="enclosure.has_divorce" class="form-check-input" type="checkbox" value="" />
                <span class="text-danger">@error('enclosure.has_divorce'){{ $message }}@enderror</span>
            </div>
            <div class="form-check">
                <label class="form-check-label" for="has_rental_contract">Für Gesuchsteller mit auswärtigem Wohnsitz: Kopie eines Mietvertrages / Wochenaufenthaltsbestätigung</label>
                <input wire:model.lazy="enclosure.has_rental_contract" class="form-check-input" type="checkbox" value="" />
                <span class="text-danger">@error('enclosure.has_rental_contract'){{ $message }}@enderror</span>
            </div>

            

            <br/>
            <h4 class="mb-0">Immer einreichen</h4>

            <div class="form-check">
                <label class="form-check-label" for="has_certificate_of_study">Semesterbestätigung/ Studienbescheinigung</label>
                <input wire:model.lazy="enclosure.has_certificate_of_study" class="form-check-input" type="checkbox" value="" />
                <span class="text-danger">@error('enclosure.has_certificate_of_study'){{ $message }}@enderror</span>
            </div>
            <div class="form-check">
                <label class="form-check-label" for="has_tax_assessment">Für Steuerpflichtige Gesuchsteller: Kopie der neuesten Steuerveranlagung(Veranlagungsprotokoll nicht
                    Steuerrechnung)</label>
                <input wire:model.lazy="enclosure.has_tax_assessment" class="form-check-input" type="checkbox" value="" />
                <span class="text-danger">@error('enclosure.has_tax_assessment'){{ $message }}@enderror</span>
            </div>
            <div class="form-check">
                <label class="form-check-label" for="has_expense_receipts">Kopie: Kostenbelege für Schulgeld und weitere Auslagen, die ausbildungsbedingt geltend gemacht werden</label>
                <input wire:model.lazy="enclosure.has_expense_receipts" class="form-check-input" type="checkbox" value="" />
                <span class="text-danger">@error('enclosure.has_expense_receipts'){{ $message }}@enderror</span>
            </div>
            <div class="form-check">
                <label class="form-check-label" for="has_partner_tax_assessment">Nur für Partner von in Partnerschaft lebenden Gesuchsteller: neueste Steuerveranlagung</label>
                <input wire:model.lazy="enclosure.has_partner_tax_assessment" class="form-check-input" type="checkbox" value="" />
                <span class="text-danger">@error('enclosure.has_partner_tax_assessment'){{ $message }}@enderror</span>
            </div>
            <div class="form-check">
                <label class="form-check-label" for="has_supplementary_services">Empfänger von IV-, Waisenrenten bzw. Ergänzungsleistungen: Kopie der Verfügung beilegen</label>
                <input wire:model.lazy="enclosure.has_supplementary_services" class="form-check-input" type="checkbox" value="" />
                <span class="text-danger">@error('enclosure.has_supplementary_services'){{ $message }}@enderror</span>
            </div>
            <div class="form-check">
                <label class="form-check-label" for="has_ects_points">Nur für Studenten an universitären Hochschulen: Beleg über die geplanten/gebuchten ECTS-Punkte</label>
                <input wire:model.lazy="enclosure.has_ects_points" class="form-check-input" type="checkbox" value="" />
                <span class="text-danger">@error('enclosure.has_ects_points'){{ $message }}@enderror</span>
            </div>
            <div class="form-check">
                <label class="form-check-label" for="has_parents_tax_factors">Steuerfaktoren der Eltern</label>
                <input wire:model.lazy="enclosure.has_parents_tax_factors" class="form-check-input" type="checkbox" value="" />
                <span class="text-danger">@error('enclosure.has_parents_tax_factors'){{ $message }}@enderror</span>
            </div>
            
        </div>

        <div class="col-md-12 text-center">
            <button type="submit"  class="btn btn-success">
                <span class="align-middle d-sm-inline-block d-none">Zwischenspeichern</span>
            </button>
        </div>
    </div>
</form>