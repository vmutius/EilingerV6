<div class="accordion-item">
    <h2 class="accordion-header" id="headingParents">
        <button type="button" class="accordion-button collapsed" data-bs-toggle="collapse"
                data-bs-target="#collapseParents">Eltern
        </button>
    </h2>
    <div id="collapseParents" class="accordion-collapse collapse">
        @forelse ($parents as $parent)
            <div class="card-body">
                <div class=row>
                    <div class="col-sm-4">
                        <p>{{ __('parents.parent_type') }}: {{ $parent->parent_type }}</p>
                    </div>
                    <div class="col-sm-4">
                        <p>{{ __('parents.lastname') }}: {{ $parent->lastname }}</p>
                    </div>
                    <div class="col-sm-4">
                        <p>{{ __('parents.firstname') }}: {{ $parent->firstname }}</p>
                    </div>
                    <div class="col-sm-4">
                        <p>{{ __('parents.birthday') }}: {{ $parent->birthday }}</p>
                    </div>
                    <div class="col-sm-4">
                        <p>{{ __('parents.phone') }}: {{ $parent->phone }}</p>
                    </div>
                    <div class="col-sm-4">
                        <p>{{ __('parents.address') }}: {{ $parent->address }}</p>
                    </div>
                    <div class="col-sm-4">
                        <p>{{ __('parents.plz_ort') }}: {{ $parent->plz_ort }}</p>
                    </div>
                    <div class="col-sm-4">
                        <p>{{ __('parents.since') }}: {{ $parent->since }}</p>
                    </div>
                    <div class="col-sm-4">
                        <p>{{ __('parents.job') }}: {{ $parent->job }}</p>
                    </div>
                    <div class="col-sm-4">
                        <p>{{ __('parents.employer') }}: {{ $parent->employer }}</p>
                    </div>
                    <div class="col-sm-4">
                        <p>{{ __('parents.job_type') }}: {{ $parent->job_type }}</p>
                    </div>
                </div>
            </div>
        @empty
            <div class="card-body">
                <div class=row>
                    <div class="col-sm-12">
                        <p>{{ __('parents.noParents') }}</p>
                    </div>
                </div>
            </div>
        @endforelse
    </div>
</div>
