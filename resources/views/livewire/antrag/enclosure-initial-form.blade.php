<div>
    <h4 class="mb-0">Nur für Erstantrag</h4>
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
            <td>Kopie des aktuellen Personalausweises (Pass, ID, Ausländerausweis)</td>
            <td>
                <div class="mb-3">
                    <input wire:model.defer="passport" class="form-control" type="file">
                  </div>
                <span class="text-danger">@error('passport'){{ $message }}@enderror</span>
            </td>
            <td>
              @if ($enclosure->passport)
                <span class="text.success">{{ $enclosure->passport}}</span>
              @endif
            </td>
          </tr>
          <tr>
            <th scope="row">2</th>
            <td>Lebenslauf</td>
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
            <td>Kopie: Ausbildungs- oder Lehrvertrag(Für Uni/FH: ausgefülltes Zusatzformular A)</td>
            <td>
                <div class="mb-3">
                    <input wire:model.defer="cv" class="form-control" type="file" id="formFile">
                </div>
                <span class="text-danger">@error('apprenticeship_contract'){{ $message }}@enderror</span>
            </td>
            <td>
              @if ($enclosure->passport)
                <span class="text.success">{{ $enclosure->cv}}</span>
              @endif
            </td>
          </tr>
          <tr>
            <th scope="row">4</th>
            <td>Kopie: Ausweis über einen Berufsabschluss, BM, Matura bzw. andere Abschlüsse falls vorhanden</td>
            <td>
                <div class="mb-3">
                    <input wire:model.defer="diploma" class="form-control" type="file" id="formFile">
                </div>
                <span class="text-danger">@error('diploma'){{ $message }}@enderror</span>
            </td>
            <td>
              @if ($enclosure->passport)
                <span class="text.success">{{ $enclosure->diploma}}</span>
              @endif
            </td>
          </tr>
          <tr>
            <th scope="row">5</th>
            <td>Für Gesuchsteller aus getrennten oder geschiedenen Ehen: Kopie Unterhaltsvereinbarung/Scheidungsurteil</td>
            <td>
                <div class="mb-3">
                    <input wire:model.defer="divorce" class="form-control" type="file" id="formFile">
                </div>
                <span class="text-danger">@error('divorce'){{ $message }}@enderror</span>
            </td>
            <td>
              @if ($enclosure->passport)
                <span class="text.success">{{ $enclosure->divorce}}</span>
              @endif
            </td>
          </tr>
          <tr>
            <th scope="row">6</th>
            <td>Für Gesuchsteller mit auswärtigem Wohnsitz: Kopie eines Mietvertrages / Wochenaufenthaltsbestätigung</td>
            <td>
                <div class="mb-3">
                    <input wire:model.defer="rental_contract" class="form-control" type="file" id="formFile">
                </div>
                <span class="text-danger">@error('rental_contract'){{ $message }}@enderror</span>
            </td>
            <td>
              @if ($enclosure->passport)
                <span class="text.success">{{ $enclosure->rental_contract}}</span>
              @endif
            </td>
          </tr>
        </tbody>
      </table>
</div>
