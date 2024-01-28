<form wire:submit.prevent="saveEnclosureOrg">
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
                    <td><b>{{  __('enclosure.commercial_register_extract')  }} *</b></td>
                    <td>
                        <div class="mb-3">
                            <input wire:model.defer="commercial_register_extract" class="form-control" type="file">
                        </div>
                        <span
                            class="text-danger">@error('commercial_register_extract'){{ $message }}@enderror</span>
                    </td>
                    <td>
                        @if ($enclosure->commercial_register_extract)
                            <a href="{{ asset('uploads/'.$enclosure->commercial_register_extract) }}"
                               target="_blank">{{ $enclosure->commercial_register_extract }}</a>
                        @endif
                    </td>
                    <td>
                        <div class="mb-3">
                            <input wire:model="enclosure.commercialRegisterExtractSendLater" type="checkbox">
                        </div>
                    </td>
                </tr>
                <tr>
                    <th scope="row">2</th>
                    <td><b>{{  __('enclosure.statute')  }} * </b></td>
                    <td>
                        <div class="mb-3">
                            <input wire:model.defer="statute" class="form-control" type="file" id="formFile">
                        </div>
                        <span class="text-danger">@error('statute'){{ $message }}@enderror</span>
                    </td>
                    <td>
                        @if ($enclosure->statute)
                            <a href="{{ asset('uploads/'.$enclosure->statute) }}"
                               target="_blank">{{ $enclosure->statute }}</a>
                        @endif
                    </td>
                    <td>
                        <div class="mb-3">
                            <input wire:model="enclosure.statuteSendLater" type="checkbox">
                        </div>
                    </td>
                </tr>
                <tr>
                    <th scope="row">3</th>
                    <td><b>{{  __('enclosure.activity')  }} * </b></td>
                    <td>
                        <div class="mb-3">
                            <input wire:model.defer="activity" class="form-control" type="file" id="formFile">
                        </div>
                        <span class="text-danger">@error('activity'){{ $message }}@enderror</span>
                    </td>
                    <td>
                        @if ($enclosure->activity)
                            <a href="{{ asset('uploads/'.$enclosure->activity) }}"
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
                    <th scope="row">4</th>
                    <td>{{  __('enclosure.balance_sheet')  }}</td>
                    <td>
                        <div class="mb-3">
                            <input wire:model.defer="balance_sheet" class="form-control" type="file" id="formFile">
                        </div>
                        <span class="text-danger">@error('balance_sheet'){{ $message }}@enderror</span>
                    </td>
                    <td>
                        @if ($enclosure->balance_sheet)
                            <a href="{{ asset('uploads/'.$enclosure->balance_sheet) }}"
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
                    <td>{{  __('enclosure.tax_assessment')  }}</td>
                    <td>
                        <div class="mb-3">
                            <input wire:model.defer="tax_assessment" class="form-control" type="file" id="formFile">
                        </div>
                        <span class="text-danger">@error('tax_assessment'){{ $message }}@enderror</span>
                    </td>
                    <td>
                        @if ($enclosure->tax_assessment)
                            <a href="{{ asset('uploads/'.$enclosure->tax_assessment) }}"
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
                    <td>{{  __('enclosure.cost_receipts')  }}</td>
                    <td>
                        <div class="mb-3">
                            <input wire:model.defer="cost_receipts" class="form-control" type="file" id="formFile">
                        </div>
                        <span class="text-danger">@error('cost_receipts'){{ $message }}@enderror</span>
                    </td>
                    <td>
                        @if ($enclosure->cost_receipts)
                            <a href="{{ asset('uploads/'.$enclosure->cost_receipts) }}"
                               target="_blank">{{ $enclosure->cost_receipts }}</a>
                        @endif
                    </td>
                    <td>
                        <div class="mb-3">
                            <input wire:model="enclosure.costReceiptsSendLater" type="checkbox">
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
