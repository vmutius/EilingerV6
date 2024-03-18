<form wire:submit.prevent="saveEnclosureDarlehen">
    <div class="content-header mb-3">
        <h3 class="mb-0">{{  __('enclosure.title')  }}</h3>
        <small>{{  __('enclosure.subtitle')  }}</small>
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
                    <td><b>{{  __('enclosure.activity')  }} *</b></td>
                    <td>
                        <div class="mb-3">
                            <input wire:model.defer="activity" class="form-control" type="file">
                        </div>
                        <span class="text-danger">@error('activity'){{ $message }}@enderror</span>
                    </td>
                    <td>
                        @if ($enclosure->activity)
                            <a href="{{ Storage::disk('s3')->url($enclosure->activity) }}"
                               target="_blank">{{ $enclosure->activity }}</a>
                        @endif
                    </td>
                    <td>
                        <div class="mb-3">
                            <input wire:model.defer="enclosure.activitySendLater" type="checkbox">
                        </div>
                    </td>
                </tr>
                <tr>
                    <th scope="row">2</th>
                    <td><b>{{  __('enclosure.activity_report')  }} *</b></td>
                    <td>
                        <div class="mb-3">
                            <input wire:model.defer="activity_report" class="form-control" type="file" id="formFile">
                        </div>
                        <span class="text-danger">@error('activity_report'){{ $message }}@enderror</span>
                    </td>
                    <td>
                        @if ($enclosure->activity_report)
                            <a href="{{ Storage::disk('s3')->url($enclosure->activity_report) }}"
                               target="_blank">{{ $enclosure->activity_report }}</a>
                        @endif
                    </td>
                    <td>
                        <div class="mb-3">
                            <input wire:model.defer="enclosure.activityReportSendLater" type="checkbox">
                        </div>
                    </td>
                </tr>
                <tr>
                    <th scope="row">3</th>
                    <td><b>{{  __('enclosure.rental_contract')  }} *</b></td>
                    <td>
                        <div class="mb-3">
                            <input wire:model.defer="rental_contract" class="form-control" type="file" id="formFile">
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
                <tr>
                    <th scope="row">4</th>
                    <td><b>{{  __('enclosure.balance_sheet')  }} *</b></td>
                    <td>
                        <div class="mb-3">
                            <input wire:model.defer="balance_sheet" class="form-control" type="file" id="formFile">
                        </div>
                        <span class="text-danger">@error('balance_sheet'){{ $message }}@enderror</span>
                    </td>
                    <td>
                        @if ($enclosure->balance_sheet)
                            <a href="{{ Storage::disk('s3')->url($enclosure->balance_sheet) }}"
                               target="_blank">{{ $enclosure->balance_sheet }}</a>
                        @endif
                    </td>
                    <td>
                        <div class="mb-3">
                            <input wire:model.defer="enclosure.balanceSheetSendLater" type="checkbox">
                        </div>
                    </td>
                </tr>
                <tr>
                    <th scope="row">5</th>
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
                    <th scope="row">6</th>
                    <td><b>{{  __('enclosure.cost_receipts')  }} *</b></td>
                    <td>
                        <div class="mb-3">
                            <input wire:model.defer="cost_receipts" class="form-control" type="file" id="formFile">
                        </div>
                        <span class="text-danger">@error('cost_receipts'){{ $message }}@enderror</span>
                    </td>
                    <td>
                        @if ($enclosure->cost_receipts)
                            <a href="{{ Storage::disk('s3')->url($enclosure->cost_receipts) }}"
                               target="_blank">{{ $enclosure->cost_receipts }}</a>
                        @endif
                    </td>
                    <td>
                        <div class="mb-3">
                            <input wire:model.defer="enclosure.costReceiptsSendLater" type="checkbox">
                        </div>
                    </td>
                </tr>
                <tr>
                    <th scope="row">7</th>
                    <td>{{  __('enclosure.open_invoice')  }}</td>
                    <td>
                        <div class="mb-3">
                            <input wire:model.defer="open_invoice" class="form-control" type="file">
                        </div>
                        <span class="text-danger">@error('open_invoice'){{ $message }}@enderror</span>
                    </td>
                    <td>
                        @if ($enclosure->open_invoice)
                            <a href="{{ Storage::disk('s3')->url($enclosure->open_invoice) }}"
                               target="_blank">{{ $enclosure->open_invoice }}</a>
                        @endif
                    </td>
                    <td>
                        <div class="mb-3">
                            <input wire:model.defer="enclosure.openInvoiceSendLater" type="checkbox">
                        </div>
                    </td>
                </tr>
                </tbody>
            </table>

        </div>

        <div class="col-md-12 text-center">
            <button type="submit" class="btn btn-success">
                <span class="align-middle d-sm-inline-block d-none">{{  __('attributes.save')  }}</span>
            </button>
        </div>
    </div>
</form>
