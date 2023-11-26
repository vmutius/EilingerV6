<div class="accordion-item">
    <h2 class="accordion-header" id="headingEnclosureDarlehenPrivat">
        <button type="button" class="accordion-button collapsed" data-bs-toggle="collapse"
                data-bs-target="#collapseEnclosureDarlehenPrivat">Bemerkungen und Beilagen (Darlehen)
        </button>
    </h2>
    <div id="collapseEnclosureDarlehenPrivat" class="accordion-collapse collapse">
        @if ($enclosure)
            <div class="card-body">
                <div class=row>
                    <div class="col-sm-12">
                        <p>{{ __('enclosure.remark') }}: {{ $enclosure->remark }}</p>
                    </div>
                    <div class="col-sm-12">
                        <p>{{ __('enclosure.activity') }}:
                            <a href="{{ asset('uploads/'.$enclosure->activity) }}"
                               target="_blank">{{ $enclosure->activity }}</a>
                        </p>
                    </div>
                    <div class="col-sm-12">
                        <p>{{ __('enclosure.activity_report') }}:
                            <a href="{{ asset('uploads/'.$enclosure->actvity_report) }}"
                               target="_blank">{{ $enclosure->activity_report }}</a>
                        </p>
                    </div>
                    <div class="col-sm-12">
                        <p>{{ __('enclosure.rental_contract') }}:
                            <a href="{{ asset('uploads/'.$enclosure->rental_contract) }}"
                               target="_blank">{{ $enclosure->rental_contract }}</a>
                        </p>
                    </div>
                    <div class="col-sm-12">
                        <p>{{ __('enclosure.balance_sheet') }}:
                            <a href="{{ asset('uploads/'.$enclosure->balance_sheet) }}"
                               target="_blank">{{ $enclosure->balance_sheet }}</a>
                        </p>
                    </div>
                    <div class="col-sm-12">
                        <p>{{ __('enclosure.tax_assessment') }}:
                            <a href="{{ asset('uploads/'.$enclosure->tax_assessment) }}"
                               target="_blank">{{ $enclosure->tax_assessment }}</a>
                        </p>
                    </div>
                    <div class="col-sm-12">
                        <p>{{ __('enclosure.cost_receipts') }}:
                            <a href="{{ asset('uploads/'.$enclosure->cost_receipts) }}"
                               target="_blank">{{ $enclosure->cost_receipts }}</a>
                        </p>
                    </div>
                    <div class="col-sm-12">
                        <p>{{ __('enclosure.open_invoice') }}:
                            <a href="{{ asset('uploads/'.$enclosure->open_invoice) }}"
                               target="_blank">{{ $enclosure->open_invoice }}</a>
                        </p>
                    </div>
                </div>
            </div>
        @else
            <div class="card-body">
                <div class=row>
                    <div class="col-sm-12">
                        <p>Keine Auszahlungsdaten eingetragen</p>
                    </div>
                </div>
            </div>
        @endif
    </div>
</div>
