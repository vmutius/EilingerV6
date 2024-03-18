<form wire:submit.prevent="saveEnclosure">
    <div class="content-header mb-3">
        <h3 class="mb-0">{{  __('enclosure.title')  }}</h3>
        <small>{{  __('enclosure.subtitle_stip')  }}</small>
    </div>
    <div class="row g-3">

        <x-notification/>

        <h4 class="mb-0">{{  __('enclosure.remark')  }}</h4>
        <div class="col-sm-12">
            <div class="row g-3">
                <div class="col-sm-12">
                    <textarea wire:model.lazy="enclosure.remark" class="form-control" rows="3"></textarea>
                </div>
            </div>
            <br/>
            <br/>
            <h4 class="mb-0">{{  __('enclosure.reqDocs')  }}</h4>

            <table class="table table-striped">
                <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">{{  __('enclosure.doc')  }}</th>
                    <th scope="col">{{  __('enclosure.file')  }}</th>
                    <th scope="col">{{  __('enclosure.upload')  }}</th>
                    <th scope="col">{{  __('enclosure.send_later')  }}</th>
                </tr>
                </thead>
                <tbody>
                <tr>
                    <th scope="row">1</th>
                    <td><b>{{  __('enclosure.certificate_of_study')  }} *</b></td>
                    <td>
                        <div class="mb-3">
                            <input wire:model.defer="certificate_of_study" class="form-control" type="file">
                        </div>
                        <span class="text-danger">@error('certificate_of_study'){{ $message }}@enderror</span>
                    </td>
                    <td>
                        @if ($enclosure->certificate_of_study)
                            <a href="{{ Storage::disk('s3')->url($enclosure->certificate_of_study) }}"
                               target="_blank">{{ $enclosure->certificate_of_study }}</a>
                        @endif
                    </td>
                    <td>
                        <div class="mb-3">
                            <input wire:model.defer="enclosure.certificateOfStudySendLater" type="checkbox">
                        </div>
                    </td>
                </tr>
                <tr>
                    <th scope="row">2</th>
                    <td><b>{{  __('enclosure.tax_assessment')  }} *</b></td>
                    <td>
                        <div class="mb-3">
                            <input wire:model.defer="tax_assessment" class="form-control" type="file" id="formFile">
                        </div>
                        <span class="text-danger">@error('tax_assessment'){{ $message }}@enderror</span>
                    </td>
                    <td>
                        @if ($enclosure->tax_assessment)
                            <a href="{{ Storage::disk('s3')->url($enclosure->tax_assessment) }}"
                               target="_blank">{{ $enclosure->tax_assessment }}</a>
                        @endif
                    </td>
                    <td>
                        <div class="mb-3">
                            <input wire:model.defer="enclosure.taxAssessmentSendLater" type="checkbox">
                        </div>
                    </td>
                </tr>
                <tr>
                    <th scope="row">3</th>
                    <td><b>{{  __('enclosure.expense_receipts_stip')  }} *</b></td>
                    <td>
                        <div class="mb-3">
                            <input wire:model.defer="expense_receipts" class="form-control" type="file" id="formFile">
                        </div>
                        <span class="text-danger">@error('expense_receipts'){{ $message }}@enderror</span>
                    </td>
                    <td>
                        @if ($enclosure->expense_receipts)
                            <a href="{{ Storage::disk('s3')->url($enclosure->expense_receipts) }}"
                               target="_blank">{{ $enclosure->expense_receipts }}</a>
                        @endif
                    </td>
                    <td>
                        <div class="mb-3">
                            <input wire:model.defer="enclosure.expenseReceiptsSendLater" type="checkbox">
                        </div>
                    </td>
                </tr>
                <tr>
                    <th scope="row">4</th>
                    <td>{{  __('enclosure.partner_tax_assessment')  }}</td>
                    <td>
                        <div class="mb-3">
                            <input wire:model.defer="partner_tax_assessment" class="form-control" type="file"
                                   id="formFile">
                        </div>
                        <span class="text-danger">@error('partner_tax_assessment'){{ $message }}@enderror</span>
                    </td>
                    <td>
                        @if ($enclosure->partner_tax_assessment)
                            <a href="{{ Storage::disk('s3')->url($enclosure->partner_tax_assessment) }}"
                               target="_blank">{{ $enclosure->partner_tax_assessment }}</a>
                        @endif
                    </td>
                    <td>
                        <div class="mb-3">
                            <input wire:model.defer="enclosure.partnerTaxAssessmentSendLater" type="checkbox">
                        </div>
                    </td>
                </tr>
                <tr>
                    <th scope="row">5</th>
                    <td>{{  __('enclosure.supplementary_services')  }}</td>
                    <td>
                        <div class="mb-3">
                            <input wire:model.defer="supplementary_services" class="form-control" type="file"
                                   id="formFile">
                        </div>
                        <span class="text-danger">@error('supplementary_services'){{ $message }}@enderror</span>
                    </td>
                    <td>
                        @if ($enclosure->supplementary_services)
                            <a href="{{ Storage::disk('s3')->url($enclosure->supplementary_services) }}"
                               target="_blank">{{ $enclosure->supplementary_services }}</a>
                        @endif
                    </td>
                    <td>
                        <div class="mb-3">
                            <input wire:model.defer="enclosure.supplementaryServicesSendLater" type="checkbox">
                        </div>
                    </td>
                </tr>
                <tr>
                    <th scope="row">6</th>
                    <td>{{  __('enclosure.ects_points')  }}</td>
                    <td>
                        <div class="mb-3">
                            <input wire:model.defer="ects_points" class="form-control" type="file" id="formFile">
                        </div>
                        <span class="text-danger">@error('ects_points'){{ $message }}@enderror</span>
                    </td>
                    <td>
                        @if ($enclosure->ects_points)
                            <a href="{{ Storage::disk('s3')->url($enclosure->ects_points) }}"
                               target="_blank">{{ $enclosure->ects_points }}</a>
                        @endif
                    </td>
                    <td>
                        <div class="mb-3">
                            <input wire:model.defer="enclosure.ectsPointsSendLater" type="checkbox">
                        </div>
                    </td>
                </tr>
                <tr>
                    <th scope="row">7</th>
                    <td><b>{{  __('enclosure.parents_tax_factors')  }} *</b></td>
                    <td>
                        <div class="mb-3">
                            <input wire:model.defer="parents_tax_factors" class="form-control" type="file"
                                   id="formFile">
                        </div>
                        <span class="text-danger">@error('parents_tax_factors'){{ $message }}@enderror</span>
                    </td>
                    <td>
                        @if ($enclosure->parents_tax_factors)
                            <a href="{{ Storage::disk('s3')->url($enclosure->parents_tax_factors) }}"
                               target="_blank">{{ $enclosure->parents_tax_factors }}</a>
                        @endif
                    </td>
                    <td>
                        <div class="mb-3">
                            <input wire:model.defer="enclosure.parentsTaxFactorsSendLater" type="checkbox">
                        </div>
                    </td>
                </tr>

                <tr>
                    <th scope="row">8</th>
                    <td><b>{{  __('enclosure.passport')  }} * </b></td>
                    <td>
                        <div class="mb-3">
                            <input wire:model.defer="passport" class="form-control" type="file">
                        </div>
                        <span class="text-danger">@error('passport'){{ $message }}@enderror</span>
                    </td>
                    <td>
                        @if ($enclosure->passport)
                            <a href="{{ Storage::disk('s3')->url($enclosure->passport) }}"
                               target="_blank">{{ $enclosure->passport }}</a>
                        @endif
                    </td>
                    <td>
                        <div class="mb-3">
                            <input wire:model.defer="enclosure.passportSendLater" type="checkbox">
                        </div>
                    </td>
                </tr>
                <tr>
                    <th scope="row">9</th>
                    <td><b>{{  __('enclosure.cv')  }} *</b></td>
                    <td>
                        <div class="mb-3">
                            <input wire:model.defer="cv" class="form-control" type="file" id="formFile">
                        </div>
                        <span class="text-danger">@error('cv'){{ $message }}@enderror</span>
                    </td>
                    <td>
                        @if ($enclosure->cv)
                            <a href="{{ Storage::disk('s3')->url($enclosure->cv) }}"
                               target="_blank">{{ $enclosure->cv }}</a>
                        @endif
                    </td>
                    <td>
                        <div class="mb-3">
                            <input wire:model.defer="enclosure.cvSendLater" type="checkbox">
                        </div>
                    </td>
                </tr>
                <tr>
                    <th scope="row">10</th>
                    <td><b>{{  __('enclosure.apprenticeship_contract')  }} *</b></td>
                    <td>
                        <div class="mb-3">
                            <input wire:model.defer="apprenticeship_contract" class="form-control" type="file"
                                   id="formFile">
                        </div>
                        <span class="text-danger">@error('apprenticeship_contract'){{ $message }}@enderror</span>
                    </td>
                    <td>
                        @if ($enclosure->apprenticeship_contract)
                            <a href="{{ Storage::disk('s3')->url($enclosure->apprenticeship_contract) }}"
                               target="_blank">{{ $enclosure->apprenticeship_contract }}</a>
                        @endif
                    </td>
                    <td>
                        <div class="mb-3">
                            <input wire:model.defer="enclosure.apprenticeshipContractSendLater" type="checkbox">
                        </div>
                    </td>
                </tr>
                <tr>
                    <th scope="row">11</th>
                    <td><b>{{  __('enclosure.diploma')  }} *</b></td>
                    <td>
                        <div class="mb-3">
                            <input wire:model.defer="diploma" class="form-control" type="file" id="formFile">
                        </div>
                        <span class="text-danger">@error('diploma'){{ $message }}@enderror</span>
                    </td>
                    <td>
                        @if ($enclosure->diploma)
                            <a href="{{ Storage::disk('s3')->url($enclosure->diploma) }}"
                               target="_blank">{{ $enclosure->diploma }}</a>
                        @endif
                    </td>
                    <td>
                        <div class="mb-3">
                            <input wire:model.defer="enclosure.diplomaSendLater" type="checkbox">
                        </div>
                    </td>
                </tr>
                <tr>
                    <th scope="row">12</th>
                    <td>{{  __('enclosure.divorce')  }}</td>
                    <td>
                        <div class="mb-3">
                            <input wire:model.defer="divorce" class="form-control" type="file" id="formFile">
                        </div>
                        <span class="text-danger">@error('divorce'){{ $message }}@enderror</span>
                    </td>
                    <td>
                        @if ($enclosure->divorce)
                            <a href="{{ Storage::disk('s3')->url($enclosure->divorce) }}"
                               target="_blank">{{ $enclosure->divorce }}</a>
                        @endif
                    </td>
                    <td>
                        <div class="mb-3">
                            <input wire:model.defer="enclosure.divorceSendLater" type="checkbox">
                        </div>
                    </td>
                </tr>
                <tr>
                    <th scope="row">13</th>
                    <td>{{  __('enclosure.rental_contract_aboard')  }}</td>
                    <td>
                        <div class="mb-3">
                            <input wire:model.defer="rental_contract" class="form-control" type="file"
                                   id="formFile">
                        </div>
                        <span class="text-danger">@error('rental_contract'){{ $message }}@enderror</span>
                    </td>
                    <td>
                        @if ($enclosure->rental_contract)
                            <a href="{{ Storage::disk('s3')->url($enclosure->rental_contract) }}"
                               target="_blank">{{ $enclosure->rental_contract }}</a>
                        @endif
                    </td>
                    <td>
                        <div class="mb-3">
                            <input wire:model.defer="enclosure.rentalContractSendLater" type="checkbox">
                        </div>
                    </td>
                </tr>
                </tbody>
            </table>

        </div>

        <div class="col-md-12 text-center">
            <button type="submit" class="btn btn-success">
                <span class="align-middle d-sm-inline-block d-none">{{ __('attributes.save') }}</span>
            </button>
        </div>
    </div>
</form>
