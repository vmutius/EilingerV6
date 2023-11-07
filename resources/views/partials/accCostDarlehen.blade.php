<div class="accordion-item">
    <h2 class="accordion-header" id="headingACostDarlehen">
        <button type="button" class="accordion-button collapsed" data-bs-toggle="collapse"
                data-bs-target="#collapseCostDarlehen">Kosten (Darlehen)
        </button>
    </h2>
    <div id="collapseCostDarlehen" class="accordion-collapse collapse">
        @if ($costDarlehen)
            <div class="card-body">
                <div class=row>
                    @foreach ($costDarlehen as $cost)
                        <div class="col-sm-6">
                            <p>{{  __('cost.cost_name')  }}: {{ $cost->cost_name }}</p>
                        </div>
                        <div class="col-sm-6">
                            <p>{{  __('cost.cost_amount')  }}: {{ $cost->cost_amount }}</p>
                        </div>
                    @endforeach
                </div>
            </div>
        @else
            <div class="card-body">
                <div class=row>
                    <div class="col-sm-12">
                        <p>Keine Kosten (Darlehen) eingetragen</p>
                    </div>
                </div>
            </div>
        @endif
    </div>
</div>
