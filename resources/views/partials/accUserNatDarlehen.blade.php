<div iv class="accordion-item">
    <h2 class="accordion-header" id="headingUserNatDalehen">
        <button type="button" class="accordion-button" data-bs-toggle="collapse"
                data-bs-target="#collapseUserNatDarlehen">Gesuchssteller
        </button>
    </h2>
    <div id="collapseUserNatDarlehen" class="accordion-collapse collapse show">
        <div class="card-body">
            <div class=row>
                <div class="col-sm-4">
                    <p>{{ __('user.salutation') }}: {{ $user->salutation }}</p>
                </div>
                <div class="col-sm-4">
                    <p>{{ __('user.lastname') }}: {{ $user->lastname }}</p>
                </div>
                <div class="col-sm-4">
                    <p>{{ __('user.firstname') }}: {{ $user->firstname }}</p>
                </div>

                <div class="col-sm-4">
                    <p>{{ __('user.birthday') }}: {{ $user->birthday  }}</p>
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
                    <p>{{ __('user.contact_aboard') }}: {{ $user->contact_aboard}}</p>
                </div>
            </div>
        </div>
    </div>
</div>
