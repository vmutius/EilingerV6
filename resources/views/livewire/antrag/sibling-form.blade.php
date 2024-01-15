<form wire:submit.prevent="saveSiblings">
    <div class="content-header mb-3">
        <h3 class="mb-0">{{ __('sibling.title') }}</h3>
        <small>{{ __('sibling.subtitle') }}</small>
    </div>

    <x-notification/>

    @foreach ($siblings as $index => $sibling)
        <div class="row g-3">
            <div class="col-sm-5">
                <label class="form-label" for="lastname">{{ __('sibling.lastname') }}</label>
                <input wire:model.lazy="siblings.{{ $index }}.lastname" type="text" class="form-control"/>
                <span class="text-danger">@error('siblings.'. $index .'.lastname'){{ $message }}@enderror</span>
            </div>
            <div class="col-sm-5">
                <label class="form-label" for="firstname">{{ __('sibling.firstname') }}</label>
                <input wire:model.lazy="siblings.{{ $index }}.firstname" type="text" class="form-control"/>
                <span class="text-danger">@error('siblings.'. $index .'.firstname'){{ $message }}@enderror</span>
            </div>
            <div class="col-sm-2">
                <label class="form-label" for="birth_year">{{ __('sibling.birthday') }}</label>
                <input wire:model.lazy="siblings.{{ $index }}.birth_year" type="number" class="form-control"/>
                <span class="text-danger">@error('siblings.'. $index .'.birth_year'){{ $message }}@enderror</span>
            </div>

            <div class="col-sm-12">
                <label class="form-label" for="place_of_residence">{{ __('sibling.place_of_residence') }}</label>
                <input wire:model.lazy="siblings.{{ $index }}.place_of_residence" type="text" class="form-control"/>
                <span
                    class="text-danger">@error('siblings.'. $index .'.place_of_residence'){{ $message }}@enderror</span>
            </div>

            <div class="col-sm-4">
                <label class="form-label" for="education">{{ __('sibling.education') }}</label>
                <input wire:model.lazy="siblings.{{ $index }}.education" type="text" class="form-control"/>
                <span class="text-danger">@error('siblings.'. $index .'.employer'){{ $message }}@enderror</span>
            </div>
            <div class="col-sm-2">
                <label class="form-label" for="graduation_year">{{ __('sibling.graduation_year') }}</label>
                <input wire:model.lazy="siblings.{{ $index }}.graduation_year" type="text" class="form-control"/>
                <span class="text-danger">@error('siblings.'. $index .'.employer'){{ $message }}@enderror</span>
            </div>
            <div class="col-sm-2">
                <label class="form-label" for="get_amount">{{ __('sibling.get_amount') }}</label>
                <select wire:model.lazy="siblings.{{ $index }}.get_amount" class="form-select">
                    <option selected value="" disabled>{{  __('attributes.please_select')  }}</option>
                    @foreach (App\Enums\GetAmount::cases() as $getAmount)
                        <option value="{{ $getAmount }}">{{ __('sibling.get_amount_name.' .$getAmount->name) }}</option>
                    @endforeach
                </select>
                <span class="text-danger">@error('siblings.'. $index .'.get_amount'){{ $message }}@enderror</span>
            </div>
            <div class="col-sm-4">
                <label class="form-label" for="support_site">{{ __('sibling.support_site') }}</label>
                <input wire:model.lazy="siblings.{{ $index }}.support_site" type="text" class="form-control"/>
                <span class="text-danger">@error('siblings.'. $index .'.support_site'){{ $message }}@enderror</span>
            </div>
            <hr class="border border-dark opacity-40">
        </div>
    @endforeach

    <div class="row">
        <div class="col-md-12 mt-4">
            <button class="btn btn-secondary" wire:click.prevent="addSibling">{{ __('sibling.addSibling') }}</button>
        </div>
    </div>
    <div class="col-md-12 text-center">
        <button type="submit" class="btn btn-success">
            <span class="align-middle d-sm-inline-block d-none">{{ __('attributes.save') }}</span>
        </button>
    </div>


</form>
