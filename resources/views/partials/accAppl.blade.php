<div class="accordion-item">
    <h2 class="accordion-header" id="headingAppl">
        <button type="button" class="accordion-button" data-bs-toggle="collapse"
                data-bs-target="#collapseAppl">Antrag
        </button>
    </h2>
    <div id="collapseAppl" class="accordion-collapse collapse show">
        <div class="card-body">
            <div class=row>
                <div class="col-sm-4">
                    <p>{{ __('application.name') }}: {{ $application->name }}</p>
                </div>
                <div class="col-sm-4">
                    <p>{{ __('application.bereich') }}: {{ $application->bereich }}</p>
                </div>
                <div class="col-sm-4">
                    <p>{{ __('application.form') }}: {{ $application->form }}</p>
                </div>
                <div class="col-sm-4">
                    <p>{{ __('application.currency') }}: {{ $application->currency->abbreviation }}</p>
                </div>
                <div class="col-sm-4">
                    <p>{{ __('application.calc_amount') }}: {{ $application->calc_amount }}</p>
                </div>
                <div class="col-sm-4">
                    <p>{{ __('application.req_amount') }}: {{ $application->req_amount }}</p>
                </div>
                <div class="col-sm-4">
                    <p>{{ __('application.start_appl') }}: {{ $application->start_appl->format('d.m.Y') }}</p>
                </div>
                <div class="col-sm-4">
                    <p>{{ __('application.end_appl') }}
                        : {{ $application->end_appl ? $application->end_appl->format('d.m.Y') :null }}</p>
                </div>
                @if ($application->form->value == 'Darlehen')
                    <div class="col-sm-4">
                        <p>{{ __('application.payout_plan') }}: {{ $application->payout_plan }}</p>
                    </div>
                @endif
            </div>
        </div>
    </div>
</div>
