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
            <h4 class="mb-0">{{  __('enclosure.reqDocs')  }} Dokumente</h4>

            <table class="table table-striped">
                <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">{{  __('enclosure.doc')  }}</th>
                    <th scope="col">{{  __('enclosure.file')  }}</th>
                    <th scope="col">{{  __('enclosure.upload')  }}</th>
                </tr>
                </thead>
                <tbody>


                <tr>
                    <th scope="row">1</th>
                    <td>{{  __('enclosure.certificate_of_study')  }}</td>
                    <td>
                        <div class="mb-3">
                            <input wire:model.defer="certificate_of_study" class="form-control" type="file">
                        </div>
                        <span class="text-danger">@error('certificate_of_study'){{ $message }}@enderror</span>
                    </td>
                    <td>
                        @if ($enclosure->certificate_of_study)
                            <a href="{{ asset('uploads/'.$enclosure->certificate_of_study) }}"
                               target="_blank">{{ $enclosure->certificate_of_study }}</a>
                        @endif
                    </td>
                </tr>
                <tr>
                    <th scope="row">2</th>
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
                </tr>
                <tr>
                    <th scope="row">3</th>
                    <td>{{  __('enclosure.expense_receipts_stip')  }}</td>
                    <td>
                        <div class="mb-3">
                            <input wire:model.defer="expense_receipts" class="form-control" type="file" id="formFile">
                        </div>
                        <span class="text-danger">@error('expense_receipts'){{ $message }}@enderror</span>
                    </td>
                    <td>
                        @if ($enclosure->expense_receipts)
                            <a href="{{ asset('uploads/'.$enclosure->expense_receipts) }}"
                               target="_blank">{{ $enclosure->expense_receipts }}</a>
                        @endif
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
                            <a href="{{ asset('uploads/'.$enclosure->partner_tax_assessment) }}"
                               target="_blank">{{ $enclosure->partner_tax_assessment }}</a>
                        @endif
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
                            <a href="{{ asset('uploads/'.$enclosure->supplementary_services) }}"
                               target="_blank">{{ $enclosure->supplementary_services }}</a>
                        @endif
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
                            <a href="{{ asset('uploads/'.$enclosure->ects_points) }}"
                               target="_blank">{{ $enclosure->ects_points }}</a>
                        @endif
                    </td>
                </tr>
                <tr>
                    <th scope="row">7</th>
                    <td>{{  __('enclosure.parents_tax_factors')  }}</td>
                    <td>
                        <div class="mb-3">
                            <input wire:model.defer="parents_tax_factors" class="form-control" type="file"
                                   id="formFile">
                        </div>
                        <span class="text-danger">@error('parents_tax_factors'){{ $message }}@enderror</span>
                    </td>
                    <td>
                        @if ($enclosure->parents_tax_factors)
                            <a href="{{ asset('uploads/'.$enclosure->parents_tax_factors) }}"
                               target="_blank">{{ $enclosure->parents_tax_factors }}</a>
                        @endif
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
