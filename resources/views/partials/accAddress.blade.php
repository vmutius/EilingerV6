<div class="accordion-item">
    <h2 class="accordion-header" id="headingAddress">
        <button type="button" class="accordion-button collapsed" data-bs-toggle="collapse"
                data-bs-target="#collapseAddress">Adresse
        </button>
    </h2>
    <div id="collapseAddress" class="accordion-collapse collapse">
        <div class="card-body">
            <div class=row>
                <div class="col-sm-4">
                    <p>{{  __('address.street')  }}: {{ $address->street }}</p>
                </div>
                <div class="col-sm-4">
                    <p>{{  __('address.number')  }}: {{ $address->number }}</p>
                </div>
                <div class="col-sm-4">
                    <p>{{  __('address.plz')  }}: {{ $address->plz }}</p>
                </div>
                <div class="col-sm-4">
                    <p>{{  __('address.town')  }}: {{ $address->town }}</p>
                </div>
                <div class="col-sm-4">
                    <p>{{  __('address.country')  }}: {{ $address->country->name }}</p>
                </div>
            </div>
        </div>
    </div>
</div>
