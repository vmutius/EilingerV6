<div class="accordion-item">
    <h2 class="accordion-header" id="headingEnclosureDarlehenPrivat">
        <button type="button" class="accordion-button collapsed" data-bs-toggle="collapse"
                data-bs-target="#collapseEnclosureDarlehenPrivat">{{ __('enclosure.title') }}
    </h2>
    <div id="collapseEnclosureDarlehenPrivat" class="accordion-collapse collapse">
        @if ($enclosure)
            <div class="card-body">
                <div class=row>
                    <div class="col-sm-12">
                        <p>{{ __('enclosure.remark') }}: {{ $enclosure->remark }}</p>
                    </div>
                    <div class="col-sm-12">
                        <p>{{ __('enclosure.commercial_register_extract') }}:
                            @if ($enclosure->commercial_register_extract)
                                <a href="{{ Storage::disk('s3')->url($enclosure->commercial_register_extract) }}"
                                   target="_blank">{{ $enclosure->commercial_register_extract }}</a>
                            @endif
                        </p>
                    </div>
                    <div class="col-sm-12">
                        <p>{{ __('enclosure.statute') }}:
                            @if ($enclosure->statute)
                                <a href="{{ Storage::disk('s3')->url($enclosure->statute) }}"
                                   target="_blank">{{ $enclosure->statute }}</a>
                            @endif
                        </p>
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
                        <p>{{ __('enclosure.balance_sheet') }}:
                            @if ($enclosure->balance_sheet)
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
