<div iv class="accordion-item">
    <h2 class="accordion-header" id="headingUserNat">
        <button type="button" class="accordion-button" data-bs-toggle="collapse"
                data-bs-target="#collapseUserNat">Bewerber
        </button>
    </h2>
    <div id="collapseUserNat" class="accordion-collapse collapse show">
        <div class="card-body">
            <div class=row>
                <div class="col-sm-4">
                    <p>{{ __('attributes.lastname') }}: {{ $user->lastname }}</p>
                </div>
                <div class="col-sm-4">
                    <p>{{ __('attributes.firstname') }}: {{ $user->firstname }}</p>
                </div>
                <div class="col-sm-4">
                    <p>{{ __('user.nationality') }}: {{ $user->nationality }}</p>
                </div>
                <div class="col-sm-4">
                    <p>{{ __('attributes.birthday') }}: {{ $user->birthday->format('d.m.Y')  }}</p>
                </div>
                <div class="col-sm-4">
                    <p>{{ __('user.email') }}: {{ $user->email }}</p>
                </div>
                <div class="col-sm-4">
                    <p>{{ __('user.phone') }}: {{ $user->phone }}</p>
                </div>
                <div class="col-sm-4">
                    <p>{{ __('user.mobile') }}: {{ $user->mobile }}</p>
                </div>
                <div class="col-sm-4">
                    <p>{{ __('user.soz_vers_nr') }}: {{ $user->soz_vers_nr }}</p>
                </div>
                <div class="col-sm-4">
                    <p>{{ __('user.in_ch_since') }}: {{ $user->in_ch_since }}</p>
                </div>
                <div class="col-sm-4">
                    <p>{{ __('user.granting') }}: {{ $user->granting }}</p>
                </div>
            </div>
        </div>
    </div>
</div>
