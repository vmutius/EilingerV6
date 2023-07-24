<form wire:submit.prevent="saveFinancingDarlehen">
    <div class="content-header mb-3">
        <h3 class="mb-0">Finanzierung</h3>
        <div class="d-flex justify-content-between">
            <div>
                <small>Angaben über die Finanzierung</small>
            </div>
        </div>
    </div>
    <div class="row g-3">

        <x-notification />

        <div class="col-sm-5">
            <label class="form-label" for="required_amount">Benötigter Betrag</label>
            <input wire:model.lazy="financing.required_amount" type="number" class="form-control" />
            <span class="text-danger">@error('financing.required_amount'){{ $message }}@enderror</span>
        </div>
        <div class="col-sm-5">
            <label class="form-label" for="payout_plan">Gewünschte Auszahlung</label>
            <select wire:model.lazy="financing.payout_plan" class="form-select">
                <option selected value="">-- Wählen Sie eine Option --</option>
                @foreach (\App\Enums\PayoutPlan::cases() as $plan)
                    <option value="{{ $plan->value }}">{{ $plan->value }}</option>
                @endforeach
            </select>
            <span class="text-danger">@error('financing.payout_plan'){{ $message }}@enderror</span>
        </div>



        <div class="col-md-12 text-center">
            <button type="submit" class="btn btn-success">
                <span class="align-middle d-sm-inline-block d-none">Zwischenspeichern</span>
            </button>
        </div>
    </div>
</form>
