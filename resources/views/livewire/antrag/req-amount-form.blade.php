<form wire:submit.prevent="saveReqAmount">
    <div class="content-header mb-3">
        <h3 class="mb-0">Gewünschte Höhe des Stipendiums bzw. des Darlehens</h3>
        <div class="d-flex justify-content-between">
            <div>
                <p><small>Bitte geben sie die gewünsche Höhe des Stipendiums bzw. des Darlehens ein. Angezeigt ist der
                        errechnete Betrag </small></p>
                <p><small>Der gewünschte Betrag kann erst eingegeben werden, wenn Ausbildungs- und Lebenskosten und
                        Finanzierung eingegeben sind </small></p>
            </div>
        </div>
    </div>
    <div class="row g-3">

        <x-notification/>

        <table class="table table-striped">
            <thead>
            <tr>
                <th class="text-center" scope="col"></th>
                <th class="text-center" scope="col">Betrag</th>
                <th class="text-center" scope="col">Währung</th>
            </tr>
            </thead>

            <tbody>
            <tr>
                <td>Totale Kosten</td>
                @if (!is_null($this->total_amount_costs))
                    <td class="text-end">{{ $this->total_amount_costs }}</td>
                    <td>{{ $this->application->currency->abbreviation }}</td>
                @else
                    <td></td>
                    <td></td>
                @endif
            </tr>
            <tr>
                <td>Totale Finanzierung</td>
                @if (!is_null($this->total_amount_financing))
                    <td class="text-end">- {{ $this->total_amount_financing }}</td>
                    <td>{{ $this->application->currency->abbreviation }}</td>
                @else
                    <td></td>
                    <td></td>
                @endif

            </tr>
            <tr>
                <td>Berechneter Betrag</td>
                @if ($diffAmount != 0)
                    <td class="text-end">= {{ $this->diffAmount }}</td>
                    <td>{{ $this->application->currency->abbreviation }}</td>
                @else
                    <td></td>
                    <td></td>
                @endif
            </tr>
            <tr>
                <td>Gewünschter Betrag</td>
                <td><input wire:model.lazy="application.req_amount" type="number" class="form-control"/></td>
                <td>{{ $this->application->currency->abbreviation }}</td>

            </tr>
            @if ($this->application->form->name == "Darlehen")
                <tr>
                    <td>Auszahlungsplan</td>
                    <td>
                        <select wire:model.lazy="application.payout_plan" class="form-select">
                            <option selected value="" disabled>-- Wählen Sie eine Option --</option>
                            @foreach (App\Enums\PayoutPlan::cases() as $payoutplan)
                                <option value="{{ $payoutplan }}">{{ $payoutplan }}</option>
                            @endforeach
                        </select>
                        @error('payout_plan')
                        <div style="font-size: 0.75rem; color: red">{{ $message }}</div>
                        @enderror
                    </td>
                    <td></td>
                </tr>
            @endif

            </tbody>
        </table>


        <div class="col-md-12 text-center">
            <button type="submit" class="btn btn-success">
                <span class="align-middle d-sm-inline-block d-none">Zwischenspeichern</span>
            </button>
        </div>
    </div>
</form>

