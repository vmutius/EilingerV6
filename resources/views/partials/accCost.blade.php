<div class="accordion-item">
    <h2 class="accordion-header" id="headingCost">
        <button type="button" class="accordion-button collapsed" data-bs-toggle="collapse"
                data-bs-target="#collapseCost">{{ __('cost.cost') }}
        </button>
    </h2>
    <div id="collapseCost" class="accordion-collapse collapse">
        @if ($cost)
            <div class="card-body">
                <div class=row>
                    <div class="col-sm-4">
                        <p>{{ __('cost.semester_fees') }}: {{ $cost->semester_fees }}</p>
                    </div>
                    <div class="col-sm-4">
                        <p>{{ __('cost.fees') }}: {{ $cost->fees }}</p>
                    </div>
                    <div class="col-sm-4">
                        <p>{{ __('cost.educational_material') }}: {{ $cost->educational_material }}</p>
                    </div>
                    <div class="col-sm-4">
                        <p>{{ __('cost.excursion') }}: {{ $cost->excursion }}</p>
                    </div>
                    <div class="col-sm-4">
                        <p>{{ __('cost.travel_expenses') }}: {{ $cost->travel_expenses }}</p>
                    </div>
                    <div class="col-sm-4">
                        <p>{{ __('cost.number_of_children') }}: {{ $cost->number_of_children }}</p>
                    </div>
                    <h5 class="ms-2 mt-4">{{ __('cost.other_standard_of_living') }}</h5>
                    <div class="col-sm-4">
                        <p>{{ __('cost.cost_of_living_with_parents') }}: {{ $cost->cost_of_living_with_parents }}</p>
                    </div>
                    <div class="col-sm-4">
                        <p>{{ __('cost.cost_of_living_alone') }}: {{ $cost->cost_of_living_alone }}</p>
                    </div>
                    <div class="col-sm-4">
                        <p>{{ __('cost.cost_of_living_single_parent') }}: {{ $cost->cost_of_living_single_parent }}</p>
                    </div>
                    <div class="col-sm-4">
                        <p>{{ __('cost.cost_of_living_with_partner') }}: {{ $cost->cost_of_living_with_partner }}</p>
                    </div>

                    <div class="col-12 text-end">
                        <p>Gesamtkosten {{ $cost->total_amount_costs}}</p>
                    </div>
                </div>
            </div>
        @else
            <div class="card-body">
                <div class=row>
                    <div class="col-sm-12">
                        <p>Keine Kostendaten eingetragen</p>
                    </div>
                </div>
            </div>
        @endif
    </div>
</div>
