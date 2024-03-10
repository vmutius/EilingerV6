<div iv class="accordion-item">
    <h2 class="accordion-header" id="headingUserJur">
        <button type="button" class="accordion-button" data-bs-toggle="collapse"
                data-bs-target="#collapseUserJur">Gesuchssteller
        </button>
    </h2>
    <div id="collapseUserJur" class="accordion-collapse collapse show">
        <div class="card-body">
            <div class=row>
                <div class="col-sm-3">
                    <p>{{  __('user.name_inst')  }}: {{ $user->name_inst }}</p>
                </div>
                <div class="col-sm-3">
                    <p>{{  __('user.phone_inst')  }}: {{ $user->phone_inst }}</p>
                </div>
                <div class="col-sm-3">
                    <p>{{  __('user.email_inst')  }}: {{ $user->email_inst }}</p>
                </div>
                <div class="col-sm-3">
                    <p>{{  __('user.website')  }}: {{ $user->website }}</p>
                </div>
                <div class="col-sm-3">
                    <p>{{  __('user.salutation')  }}: {{ $user->salutation }}</p>
                </div>
                <div class="col-sm-3">
                    <p>{{ __('user.lastname') }} {{ __('user.contact') }}: {{ $user->lastname }}</p>
                </div>
                <div class="col-sm-3">
                    <p>{{ __('user.firstname') }} {{ __('user.contact') }}: {{ $user->firstname }}</p>
                </div>
                <div class="col-sm-3">
                    <p>{{  __('user.email')  }} {{ __('user.contact') }}: {{ $user->email }}</p>
                </div>
                <div class="col-sm-3">
                    <p>{{  __('user.phone')  }} {{ __('user.contact') }}: {{ $user->phone }}</p>
                </div>
                <div class="col-sm-3">
                    <p>{{  __('user.mobile')  }} {{ __('user.contact') }}: {{ $user->mobile }}</p>
                </div>
            </div>
        </div>
    </div>
</div>
