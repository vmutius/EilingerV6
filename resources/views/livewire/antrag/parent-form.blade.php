<form wire:submit.prevent="saveParents">
    <div class="content-header mb-3">
        <h3 class="mb-0">{{  __('parents.title')  }}</h3>
        <small>{{  __('parents.subtitle')  }}</small>
    </div>

    <x-notification/>

    @foreach ($parents as $index => $parent)
        <div class="row g-3">
            <div class="col-sm-2">
                <label class="form-label" for="parent_type">{{  __('parents.parent_type')  }}</label>
                <select wire:model.lazy="parents.{{ $index }}.parent_type" name="parent_type" class="form-select">
                    <option selected value="">{{  __('attributes.please_select')  }}</option>
                    @foreach (App\Enums\ParentType::cases() as $parent_type)
                        <option value="{{ $parent_type }}">{{ __('parents.parent_type_name.' .$parent_type->name) }}</option>
                    @endforeach
                </select>
                <span class="text-danger">@error('parents.'. $index .'.parent_type'){{ $message }}@enderror</span>
            </div>
            <div class="col-sm-5">
                <label class="form-label" for="lastname">{{  __('parents.lastname')  }}</label>
                <input wire:model.lazy="parents.{{ $index }}.lastname" type="text" class="form-control"/>
                <span class="text-danger">@error('parents.'. $index .'.lastname'){{ $message }}@enderror</span>
            </div>
            <div class="col-sm-5">
                <label class="form-label" for="firstname">{{  __('parents.firstname')  }}</label>
                <input wire:model.lazy="parents.{{ $index }}.firstname" type="text" class="form-control"/>
                <span class="text-danger">@error('parents.'. $index .'.firstname'){{ $message }}@enderror</span>
            </div>

            <div class="col-sm-6">
                <label class="form-label" for="birthday">{{  __('parents.birthday')  }}</label>
                <input wire:model.lazy="parents.{{ $index }}.birthday" type="date" class="form-control"/>
                <span class="text-danger">@error('parents.'. $index .'.birthday'){{ $message }}@enderror</span>
            </div>
            <div class="col-sm-6">
                <label class="form-label" for="phone">{{  __('parents.telefon')  }}</label>
                <input wire:model.lazy="parents.{{ $index }}.phone" type="text" class="form-control"/>
                <span class="text-danger">@error('parents.'. $index .'.phone'){{ $message }}@enderror</span>
            </div>

            <div class="col-sm-5">
                <label class="form-label" for="address">{{  __('parents.address')  }}</label>
                <input wire:model.lazy="parents.{{ $index }}.address" type="text" class="form-control"/>
                <span class="text-danger">@error('parents.'. $index .'.address'){{ $message }}@enderror</span>
            </div>
            <div class="col-sm-5">
                <label class="form-label" for="plz_ort">{{  __('parents.plz_ort')  }}</label>
                <input wire:model.lazy="parents.{{ $index }}.plz_ort" type="text" class="form-control"/>
                <span class="text-danger">@error('parents.'. $index .'.plz_ort'){{ $message }}@enderror</span>
            </div>
            <div class="col-sm-2">
                <label class="form-label" for="since">{{  __('parents.since')  }}</label>
                <input wire:model.lazy="parents.{{ $index }}.since" type="text" class="form-control"/>
                <span class="text-danger">@error('parents.'. $index .'.since'){{ $message }}@enderror</span>
            </div>

            <div class="col-sm-5">
                <label class="form-label" for="job">{{  __('parents.job')  }}</label>
                <input wire:model.lazy="parents.{{ $index }}.job" type="text" class="form-control"/>
                <span class="text-danger">@error('parents.'. $index .'.job'){{ $message }}@enderror</span>
            </div>
            <div class="col-sm-5">
                <label class="form-label" for="employer">{{  __('parents.employer')  }}</label>
                <input wire:model.lazy="parents.{{ $index }}.employer" type="text" class="form-control"/>
                <span class="text-danger">@error('parents.'. $index .'.employer'){{ $message }}@enderror</span>
            </div>
            <div class="col-sm-2">
                <label class="form-label" for="job_type">{{  __('parents.job_type')  }}</label>
                <select wire:model.lazy="parents.{{ $index }}.job_type" name="job_type" class="form-select">
                    <option selected value="">-- Wählen Sie eine Option --</option>
                    @foreach (App\Enums\JobType::cases() as $job_type)
                        <option value="{{ $job_type }}">{{ __('parents.job_type_name.' .$job_type->name) }}</option>
                    @endforeach
                </select>
                <span class="text-danger">@error('parents.'. $index .'.job_type'){{ $message }}@enderror</span>
            </div>
        </div>
        <hr class="border border-dark opacity-40">
    @endforeach

    <div class="row">
        <div class="col-md-12 mt-4">
            <button class="btn btn-secondary" wire:click.prevent="addParent">{{  __('parents.addParents')  }}</button>
        </div>
    </div>
    <div class="col-md-12 text-center">
        <button type="submit" class="btn btn-success">
            <span class="align-middle d-sm-inline-block d-none">{{ __('attributes.save') }}</span>
        </button>
    </div>

</form>
