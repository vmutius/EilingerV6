<div iv class="accordion-item">
    <h2 class="accordion-header" id="headingUserNat">
        <button type="button" class="accordion-button" data-bs-toggle="collapse"
                data-bs-target="#collapseUserNat">Bewerber
        </button>
    </h2>
    <div id="collapseUserNat" class="accordion-collapse collapse show">
        <div class="card-body">
            <div class=row>
                <div class="col-sm-3">
                    <p>{{ __('attributes.lastname') }}: {{ $user->lastname }}</p>
                </div>
                <div class="col-sm-3">
                    <p>{{ __('attributes.firstname') }}: {{ $user->firstname }}</p>
                </div>
                <div class="col-sm-3">
                    <p>{{ __('attributes.nationality') }}: {{ $user->nationality }}</p>
                </div>
                <div class="col-sm-3">
                    <p>{{ __('attributes.birthday') }}: {{ $user->birthday }}</p>
                </div>
                <div class="col-sm-3">
                    <p>{{ __('attributes.email') }}: {{ $user->email }}</p>
                </div>
                <div class="col-sm-3">
                    <p>{{ __('attributes.phone') }}: {{ $user->phone }}</p>
                </div>
                <div class="col-sm-3">
                    <p>{{ __('attributes.mobile') }}: {{ $user->mobile }}</p>
                </div>
                <div class="col-sm-3">
                    <p>{{ __('attributes.soz_vers_nr') }}: {{ $user->soz_vers_nr }}</p>
                </div>
                <div class="col-sm-3">
                    <p>{{ __('attributes.in_ch_since') }}: {{ $user->in_ch_since }}</p>
                </div>
                <div class="col-sm-3">
                    <p>{{ __('attributes.granting') }}: {{ $user->granting }}</p>
                </div>
            </div>
        </div>
    </div>
</div>
