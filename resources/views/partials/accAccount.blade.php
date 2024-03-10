<div class="accordion-item">
    <h2 class="accordion-header" id="headingAccount">
        <button type="button" class="accordion-button collapsed" data-bs-toggle="collapse"
                data-bs-target="#collapseAccount">Auszahlung
        </button>
    </h2>
    <div id="collapseAccount" class="accordion-collapse collapse">
        @if ($account)
            <div class="card-body">
                <div class=row>
                    <div class="col-sm-4">
                        <p>{{  __('account.name_bank')  }}: {{ $account->name_bank }}</p>
                    </div>
                    <div class="col-sm-4">
                        <p>{{  __('account.city_bank')  }}: {{ $account->city_bank }}</p>
                    </div>
                    <div class="col-sm-4">
                        <p>{{  __('account.owner')  }}: {{ $account->owner }}</p>
                    </div>
                    <div class="col-sm-4">
                        <p>{{  __('account.IBAN')  }}: {{ $account->IBAN }}</p>
                    </div>
                </div>
            </div>
        @else
            <div class="card-body">
                <div class=row>
                    <div class="col-sm-12">
                        <p>{{  __('account.noAccount')  }}</p>
                    </div>
                </div>
            </div>
        @endif
    </div>
</div>
