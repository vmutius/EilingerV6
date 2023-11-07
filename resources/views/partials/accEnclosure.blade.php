<div class="accordion-item">
    <h2 class="accordion-header" id="headingEnclosure">
        <button type="button" class="accordion-button collapsed" data-bs-toggle="collapse"
                data-bs-target="#collapseEnclosure">Bemerkungen und Beilagen
        </button>
    </h2>
    <div id="collapseEnclosure" class="accordion-collapse collapse">
        @if ($education)
            <div class="card-body">
                <div class=row>
                    <div class="col-sm-12">
                        <p>{{ __('enclosure.remark') }}: {{ $enclosure->remark }}</p>
                    </div>
                    <div class="col-sm-12">
                        <p>{{ __('enclosure.passport') }}:
                            <a href="{{ asset('uploads/'.$enclosure->passport) }}"
                               target="_blank">{{ $enclosure->passport }}</a>
                        </p>
                    </div>
                    <div class="col-sm-12">
                        <p>{{ __('enclosure.cv') }}:
                            <a href="{{ asset('uploads/'.$enclosure->cv) }}"
                               target="_blank">{{ $enclosure->cv }}</a>
                        </p>
                    </div>
                    <div class="col-sm-12">
                        <p>{{ __('enclosure.apprenticeship_contract') }}:
                            <a href="{{ asset('uploads/'.$enclosure->apprenticeship_contract) }}"
                               target="_blank">{{ $enclosure->apprenticeship_contract }}</a>
                        </p>
                    </div>
                    <div class="col-sm-12">
                        <p>{{ __('enclosure.diploma') }}:
                            <a href="{{ asset('uploads/'.$enclosure->diploma) }}"
                               target="_blank">{{ $enclosure->diploma }}</a>
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
