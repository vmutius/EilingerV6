<div class="accordion-item">
    <h2 class="accordion-header" id="headingACostDarlehen">
        <button type="button" class="accordion-button collapsed" data-bs-toggle="collapse"
                data-bs-target="#collapseCostDarlehen">Auszahlung
        </button>
    </h2>
    <div id="collapseCostDarlehen" class="accordion-collapse collapse">
        @if ($account)
            <div class="card-body">
                <div class=row>
                    <div class="col-sm-3">
                        <p>{{  __('account.name_bank')  }}: {{ $account->name_bank }}</p>
                    </div>
                    <div class="col-sm-3">
                        <p>{{  __('account.city_bank_bank')  }}: {{ $account->city_bank }}</p>
                    </div>
                    <div class="col-sm-3">
                        <p>{{  __('account.owner')  }}: {{ $account->owner }}</p>
                    </div>
                    <div class="col-sm-3">
                        <p>{{  __('account.IBAN')  }}: {{ $account->IBAN }}</p>
                    </div>
                </div>
            </div>
        @else
            <div class="card-body">
                <div class=row>
                    <div class="col-sm-12">
                        <p>Keine Kontodaten eingetragen</p>
                    </div>
                </div>
            </div>
        @endif
    </div>
</div>
