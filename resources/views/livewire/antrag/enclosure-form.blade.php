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
        </br>
            <h4 class="mb-0">Nur für Erstantrag</h4>
            <div class="form-check mt-3">
                <label class="form-check-label" for="hasID">Kopie des aktuellen Personalausweises (Pass, ID, Ausländerausweis)</label>
                <input wire:model.lazy="enclosure.hasID" class="form-check-input" type="checkbox" />             
            </div>
            <div class="form-check">
                <label class="form-check-label" for="hasCV">Lebenslauf</label>
                <input wire:model.lazy="enclosure.hasCV" class="form-check-input" type="checkbox" value="" />
            </div>
            <div class="form-check">
                <label class="form-check-label" for="hasApprenticeshipContract">Kopie: Ausbildungs- oder Lehrvertrag(Für Uni/FH: ausgefülltes Zusatzformular A)</label>
                <input wire:model.lazy="enclosure.hasApprenticeshipContract" class="form-check-input" type="checkbox" value="" />
            </div>
            <div class="form-check">
                <label class="form-check-label" for="hasDiploma">Kopie: Ausweis über einen Berufsabschluss, BM, Matura bzw. andere Abschlüsse falls vorhanden</label>
                <input wire:model.lazy="enclosure.hasDiploma" class="form-check-input" type="checkbox" value="" />
            </div>
            <div class="form-check">
                <label class="form-check-label" for="hasDivorce">Für Gesuchsteller aus getrennten oder geschiedenen Ehen: Kopie
                    Unterhaltsvereinbarung/Scheidungsurteil</label>
                <input wire:model.lazy="enclosure.hasDivorce" class="form-check-input" type="checkbox" value="" />
            </div>
            <div class="form-check">
                <label class="form-check-label" for="hasRentalContract">Für Gesuchsteller mit auswärtigem Wohnsitz: Kopie eines Mietvertrages / Wochenaufenthaltsbestätigung</label>
                <input wire:model.lazy="enclosure.hasRentalContract" class="form-check-input" type="checkbox" value="" />
            </div>

            <br/>
            <h4 class="mb-0">Immer einreichen</h4>

            <div class="form-check">
                <label class="form-check-label" for="hasCertificateOfStudy">Semesterbestätigung/ Studienbescheinigung</label>
                <input wire:model.lazy="enclosure.hasCertificateOfStudy" class="form-check-input" type="checkbox" value="" />
            </div>
            <div class="form-check">
                <label class="form-check-label" for="hasTaxAssessment">Für Steuerpflichtige Gesuchsteller: Kopie der neuesten Steuerveranlagung(Veranlagungsprotokoll nicht
                    Steuerrechnung)</label>
                <input wire:model.lazy="enclosure.hasTaxAssessment" class="form-check-input" type="checkbox" value="" />
            </div>
            <div class="form-check">
                <label class="form-check-label" for="hasExpenseReceipts">Kopie: Kostenbelege für Schulgeld und weitere Auslagen, die ausbildungsbedingt geltend gemacht werden</label>
                <input wire:model.lazy="enclosure.hasExpenseReceipts" class="form-check-input" type="checkbox" value="" />
            </div>
            <div class="form-check">
                <label class="form-check-label" for="hasPartnerTaxAssessment">Nur für Partner von in Partnerschaft lebenden Gesuchsteller: neueste Steuerveranlagung</label>
                <input wire:model.lazy="enclosure.hasPartnerTaxAssessment" class="form-check-input" type="checkbox" value="" />
            </div>
            <div class="form-check">
                <label class="form-check-label" for="hasSupplementaryServices">Empfänger von IV-, Waisenrenten bzw. Ergänzungsleistungen: Kopie der Verfügung beilegen</label>
                <input wire:model.lazy="enclosure.hasSupplementaryServices" class="form-check-input" type="checkbox" value="" />
            </div>
            <div class="form-check">
                <label class="form-check-label" for="hasECTSPoints">Nur für Studenten an universitären Hochschulen: Beleg über die geplanten/gebuchten ECTS-Punkte</label>
                <input wire:model.lazy="enclosure.hasECTSPoints" class="form-check-input" type="checkbox" value="" />
            </div>
            <div class="form-check">
                <label class="form-check-label" for="hasParentsTaxFactors">Steuerfaktoren der Eltern</label>
                <input wire:model.lazy="enclosure.hasParentsTaxFactors" class="form-check-input" type="checkbox" value="" />
            </div>
        </div>

        <div class="col-md-12 text-center">        
            <button type="submit"  class="btn btn-success">
                <span class="align-middle d-sm-inline-block d-none">Zwischenspeichern</span>
            </button>
        </div>
    </div>
</form>
