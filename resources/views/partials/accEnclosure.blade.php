<div class="accordion-item">
    <h2 class="accordion-header" id="headingEnclosure">
        <button type="button" class="accordion-button collapsed" data-bs-toggle="collapse"
                data-bs-target="#collapseEnclosure">{{ __('enclosure.title') }}
        </button>
    </h2>
    <div id="collapseEnclosure" class="accordion-collapse collapse">
        @if ($enclosure)
            <div class="card-body">
                <div class=row>
                    <div class="col-sm-12">
                        <p>{{ __('enclosure.remark') }}: {{ $enclosure->remark }}</p>
                    </div>
                    <div class="col-sm-12">
                        <p>{{ __('enclosure.certificate_of_study') }}:
                            @if ($enclosure->certificate_of_study)
                                <a href="{{ Storage::disk('s3')->url($enclosure->certificate_of_study) }}"
                                   target="_blank">{{ $enclosure->certificate_of_study }}</a>
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
                        <p>{{ __('enclosure.expense_receipts_stip') }}:
                            @if ($enclosure->expense_receipts)
                                <a href="{{ Storage::disk('s3')->url($enclosure->expense_receipts) }}"
                                   target="_blank">{{ $enclosure->expense_receipts }}</a>
                            @endif
                        </p>
                    </div>
                    <div class="col-sm-12">
                        <p>{{ __('enclosure.partner_tax_assessment') }}:
                            @if ($enclosure->partner_tax_assessment)
                                <a href="{{ Storage::disk('s3')->url($enclosure->partner_tax_assessment) }}"
                                   target="_blank">{{ $enclosure->partner_tax_assessment }}</a>
                            @endif
                        </p>
                    </div>
                    <div class="col-sm-12">
                        <p>{{ __('enclosure.supplementary_services') }}:
                            @if ($enclosure->supplementary_services)
                                <a href="{{ Storage::disk('s3')->url($enclosure->supplementary_services) }}"
                                   target="_blank">{{ $enclosure->supplementary_services }}</a>
                            @endif
                        </p>
                    </div>
                    <div class="col-sm-12">
                        <p>{{ __('enclosure.ects_points') }}:
                            @if ($enclosure->ects_points)
                                <a href="{{ Storage::disk('s3')->url($enclosure->ects_points) }}"
                                   target="_blank">{{ $enclosure->ects_points }}</a>
                            @endif
                        </p>
                    </div>
                    <div class="col-sm-12">
                        <p>{{ __('enclosure.parents_tax_factors') }}:
                            @if ($enclosure->parents_tax_factors)
                                <a href="{{ Storage::disk('s3')->url($enclosure->parents_tax_factors) }}"
                                   target="_blank">{{ $enclosure->parents_tax_factors }}</a>
                            @endif
                        </p>
                    </div>
                    <div class="col-sm-12">
                        <p>{{ __('enclosure.passport') }}:
                            @if ($enclosure->passport)
                                <a href="{{ Storage::disk('s3')->url($enclosure->passport) }}"
                                   target="_blank">{{ $enclosure->passport }}</a>
                            @endif
                        </p>
                    </div>
                    <div class="col-sm-12">
                        <p>{{ __('enclosure.cv') }}:
                            @if ($enclosure->cv)
                                <a href="{{ Storage::disk('s3')->url($enclosure->cv) }}"
                                   target="_blank">{{ $enclosure->cv }}</a>
                            @endif
                        </p>
                    </div>
                    <div class="col-sm-12">
                        <p>{{ __('enclosure.apprenticeship_contract') }}:
                            @if ($enclosure->apprenticeship_contract)
                                <a href="{{ Storage::disk('s3')->url($enclosure->apprenticeship_contract) }}"
                                   target="_blank">{{ $enclosure->apprenticeship_contract }}</a>
                            @endif
                        </p>
                    </div>
                    <div class="col-sm-12">
                        <p>{{ __('enclosure.diploma') }}:
                            @if ($enclosure->diploma)
                                <a href="{{ Storage::disk('s3')->url($enclosure->diploma) }}"
                                   target="_blank">{{ $enclosure->diploma }}</a>
                            @endif
                        </p>
                    </div>
                    <div class="col-sm-12">
                        <p>{{ __('enclosure.divorce') }}:
                            @if ($enclosure->divorce)
                                <a href="{{ Storage::disk('s3')->url($enclosure->divorce) }}"
                                   target="_blank">{{ $enclosure->divorce }}</a>
                            @endif
                        </p>
                    </div>
                    <div class="col-sm-12">
                        <p>{{ __('enclosure.rental_contract_aboard') }}:
                            @if ($enclosure->rental_contract)
                                <a href="{{ Storage::disk('s3')->url($enclosure->rental_contract) }}"
                                   target="_blank">{{ $enclosure->rental_contract }}</a>
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
