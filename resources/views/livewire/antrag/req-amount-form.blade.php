<form wire:submit.prevent="saveReqAmount">
    <div class="content-header mb-3">
        <h3 class="mb-0">{{  __('reqAmount.title')  }}</h3>
        <div class="d-flex justify-content-between">
            <div>
                <p><small>{{  __('reqAmount.subTitle')  }}</small></p>
                <p><small>{{  __('reqAmount.addHint')  }} </small></p>
            </div>
        </div>
    </div>
    <div class="row g-3">

        <x-notification/>

        <table class="table table-striped">
            <thead>
            <tr>
                <th class="text-center" scope="col"></th>
                <th class="text-center" scope="col">{{  __('reqAmount.amount')  }}</th>
                <th class="text-center" scope="col">{{  __('reqAmount.currency')  }}</th>
            </tr>
            </thead>

            <tbody>
            <tr>
                <td>{{  __('reqAmount.totalCost')  }}</td>
                @if (!is_null($this->total_amount_costs))
                    <td class="text-end">{{ $this->total_amount_costs }}</td>
                    <td>{{ $this->application->currency->abbreviation }}</td>
                @else
                    <td></td>
                    <td></td>
                @endif
            </tr>
            <tr>
                <td>{{  __('reqAmount.totalFinancing')  }}</td>
                @if (!is_null($this->total_amount_financing))
                    <td class="text-end">- {{ $this->total_amount_financing }}</td>
                    <td>{{ $this->application->currency->abbreviation }}</td>
                @else
                    <td></td>
                    <td></td>
                @endif

            </tr>
            <tr>
                <td>{{  __('reqAmount.diffAmount')  }}</td>
                @if ($diffAmount != 0)
                    <td class="text-end">= {{ $this->diffAmount }}</td>
                    <td>{{ $this->application->currency->abbreviation }}</td>
                @else
                    <td></td>
                    <td></td>
                @endif
            </tr>
            <tr>
                <td>{{  __('reqAmount.reqAmount')  }}</td>
                <td><input wire:model.lazy="application.req_amount" type="number" class="form-control"/></td>
                <td>{{ $this->application->currency->abbreviation }}</td>

            </tr>
                <tr>
                    <td>{{  __('reqAmount.payoutPlan')  }}</td>
                    <td>
                        <select wire:model.lazy="application.payout_plan" class="form-select">
                            <option selected value="" disabled>{{  __('attributes.please_select')  }}</option>
                            @foreach (App\Enums\PayoutPlan::cases() as $payoutplan)
                                <option value="{{ $payoutplan }}">{{ __('application.payoutplan_name.' .$payoutplan->name) }}</option>
                            @endforeach
                        </select>
                        @error('payout_plan')
                        <div style="font-size: 0.75rem; color: red">{{ $message }}</div>
                        @enderror
                    </td>
                    <td></td>
                </tr>

            </tbody>
        </table>


        <div class="col-md-12 text-center">
            <button type="submit" class="btn btn-success">
                <span class="align-middle d-sm-inline-block d-none">{{ __('attributes.save') }}</span>
            </button>
        </div>
    </div>
</form>

