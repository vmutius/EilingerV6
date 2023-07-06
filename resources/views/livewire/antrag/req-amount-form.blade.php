<form wire:submit.prevent="saveReqAmount">
    <div class="content-header mb-3">
        <h3 class="mb-0">Gewünschte Höhe des Stipendiums bzw. des Darlehens</h3>
        <div class="d-flex justify-content-between">
            <div>
                <p><small>Bitte geben sie die gewünsche Höhe des Stipendiums bzw. des Darlehens ein. Angezeigt ist der errechnete Betrag </small></p>
                <p><small>Der gewünschte Betrag kann erst eingegeben werden, wenn Ausbildungs- und Lebenskosten und Finanzierung eingegeben sind </small></p> 
            </div>
            <div>
                
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
                    @if (!is_null($cost))
                        <td class="text-end">{{ $cost->total_amount_costs }}</td>
                        <td>{{ $myCurrency->abbreviation }}</td>
                    @else
                        <td></td>
                        <td></td>
                    @endif
                </tr>
                <tr>
                    <td>Totale Finanzierung</td>
                    @if (!is_null($financing))
                        <td class="text-end">- {{ $financing->total_amount_financing }}</td>
                        <td>{{ $myCurrency->abbreviation }}</td>
                    @else
                        <td></td>
                        <td></td>
                    @endif
                    
                </tr>  
                <tr>
                    <td>Berechneter Betrag</td>
                    @if ($diffAmount != 0)
                        <td class="text-end">= {{ $diffAmount }}</td>
                        <td>{{ $myCurrency->abbreviation }}</td>
                    @else
                        <td></td>
                        <td></td>
                    @endif
                </tr>  
                <tr>
                    <td>Gewünschter Betrag</td>
                    @if ($diffAmount != 0)
                        <td><input wire:model.lazy="application.req_amount" type="number" class="form-control" /></td>
                        <td>{{ $myCurrency->abbreviation }}</td>
                    @else
                        <td></td>
                        <td></td>
                    @endif
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

