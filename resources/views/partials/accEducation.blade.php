<div class="accordion-item">
    <h2 class="accordion-header" id="headingEducation">
        <button type="button" class="accordion-button collapsed" data-bs-toggle="collapse"
                data-bs-target="#collapseEducation">Ausbildung
        </button>
    </h2>
    <div id="collapseEducation" class="accordion-collapse collapse">
        @if ($education)
            <div class="card-body">
                <div class=row>
                    <div class="col-sm-4">
                        <p>{{ __('education.initial_education') }}: {{ $education->initial_education }}</p>
                    </div>
                    <div class="col-sm-4">
                        <p>{{ __('education.education') }}: {{ $education->education }}</p>
                    </div>
                    <div class="col-sm-4">
                        <p>{{ __('education.name') }}: {{ $education->name }}</p>
                    </div>
                    <div class="col-sm-4">
                        <p>{{ __('education.final') }}: {{ $education->final }}</p>
                    </div>
                    <div class="col-sm-4">
                        <p>{{ __('education.grade') }}: {{ $education->grade }}</p>
                    </div>
                    <div class="col-sm-4">
                        <p>{{ __('education.ects_points') }}: {{ $education->ects_points }}</p>
                    </div>
                </div>
            </div>
        @else
            <div class="card-body">
                <div class=row>
                    <div class="col-sm-12">
                        <p>{{ __('education.noEducation') }}</p>
                    </div>
                </div>
            </div>
        @endif
    </div>
</div>
