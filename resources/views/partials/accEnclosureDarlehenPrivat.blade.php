<div class="accordion-item">
    <h2 class="accordion-header" id="headingEnclosureDarlehenPrivat">
        <button type="button" class="accordion-button collapsed" data-bs-toggle="collapse"
                data-bs-target="#collapseEnclosureDarlehenPrivat">{{ __('enclosure.title') }}
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
                            @if ($enclosure->activity)
                                <a href="{{ Storage::disk('s3')->url($enclosure->activity) }}"
                                   target="_blank">{{ $enclosure->activity }}</a>
                            @endif
                        </p>
                    </div>
                    <div class="col-sm-12">
                        <p>{{ __('enclosure.activity_report') }}:
                            @if ($enclosure->actvity_report)
                                <a href="{{ Storage::disk('s3')->url($enclosure->actvity_report) }}"
                                   target="_blank">{{ $enclosure->actvity_report }}</a>
                            @endif
                        </p>
                    </div>
                    <div class="col-sm-12">
                        <p>{{ __('enclosure.rental_contract') }}:
                            @if ($enclosure->rental_contract)
                                <a href="{{ Storage::disk('s3')->url($enclosure->rental_contract) }}"
                                   target="_blank">{{ $enclosure->rental_contract }}</a>
                            @endif
                        </p>
                    </div>
                    <div class="col-sm-12">
                        <p>{{ __('enclosure.balance_sheet') }}:
                            @if ($enclosure->activity)
                                <a href="{{ Storage::disk('s3')->url($enclosure->balance_sheet) }}"
                                   target="_blank">{{ $enclosure->balance_sheet }}</a>
                            @endif
                        </p>
                    </div>
                    <div class="col-sm-12">
                        <p>{{ __('enclosure.tax_assessment') }}:
                            @if ($enclosure->tax_assessment)
                                <a href="{{ Storage::disk('s3')->url($enclosure->tax_assessment) }}"
                                   target="_blank">{{ $enclosure->tax_assessment }}</a>
                            @endif
                        </p>
                    </div>
                    <div class="col-sm-12">
                        <p>{{ __('enclosure.cost_receipts') }}:
                            @if ($enclosure->cost_receipts)
                                <a href="{{ Storage::disk('s3')->url($enclosure->cost_receipts) }}"
                                   target="_blank">{{ $enclosure->cost_receipts }}</a>
                            @endif
                        </p>
                    </div>
                    <div class="col-sm-12">
                        <p>{{ __('enclosure.open_invoice') }}:
                            @if ($enclosure->open_invoice)
                                <a href="{{ Storage::disk('s3')->url($enclosure->open_invoice) }}"
                                   target="_blank">{{ $enclosure->open_invoice }}</a>
                            @endif
                        </p>
                    </div>
                </div>
            </div>
        @else
            <div class="card-body">
                <div class=row>
                    <div class="col-sm-12">
                        <p>{{ __('enclosure.noEnclosure') }}</p>
                    </div>
                </div>
            </div>
        @endif
    </div>
</div>
