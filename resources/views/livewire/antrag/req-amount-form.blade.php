<form wire:submit.prevent="saveReqAmount">
    <div class="content-header mb-3">
        <h3 class="mb-0">Gewünschte Höhe des Stipendiums bzw. des Darlehens</h3>
        <div class="d-flex justify-content-between">
            <div>
                <small>Bitte geben sie die gewünsche Höhe des Stipendiums bzw. des Darlehens ein. Angezeigt ist der errechnete Betrag </small>
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
                    <td class="text-end">{{ $cost->total_amount_costs }}</td>
                    <td>{{ $myCurrency->abbreviation }}</td>
                </tr>
                <tr>
                    <td>Totale Finanzierung</td>
                    <td class="text-end">- {{ $financing->total_amount_financing }}</td>
                    <td>{{ $myCurrency->abbreviation }}</td>
                </tr>  
                <tr>
                    <td>Berechneter Betrag</td>
                    <td class="text-end">= {{ $diffAmount }}</td>
                    <td>{{ $myCurrency->abbreviation }}</td>
                </tr>  
                <tr>
                    <td>Gewünschter Betrag</td>
                    <td><input wire:model.lazy="cost.semester_fees" type="number" class="form-control" /></td>
                    <td>{{ $myCurrency->abbreviation }}</td>
                </tr>
            </tbody>
        </table>

        <div class="col-md-12 text-center">
            <button type="submit"  class="btn btn-success">
                <span class="align-middle d-sm-inline-block d-none">Zwischenspeichern</span>
            </button>
        </div>
    </div>
</form>

