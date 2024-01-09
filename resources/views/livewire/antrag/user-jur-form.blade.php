<form wire:submit.prevent="saveUserJur">
    <div class="content-header mb-3">
        <h3 class="mb-0">Gesuchssteller</h3>
        <small>Angaben über die Organisation</small>
    </div>
    <div class="row g-3">

        <x-notification/>

        <div class="col-md-6">
            <label class="form-label" for="name_inst">{{  __('user.name_inst')  }}</label>
            <input wire:model.lazy="user.name_inst" type="text" class="form-control" />
            <span class="text-danger">@error('user.name_inst'){{ $message }}@enderror</span>
        </div>

        <div class="col-md-6">
            <label class="form-label" for="phone_inst">{{  __('user.phone_inst')  }}</label>
            <input wire:model.lazy="user.phone_inst" type="text" class="form-control" />
            <span class="text-danger">@error('user.phone_inst'){{ $message }}@enderror</span>
        </div>

        <div class="col-md-6">
            <label class="form-label" for="email_inst">{{  __('user.email_inst')  }}</label>
            <input wire:model.lazy="user.email_inst" type="text" class="form-control" />
            <span class="text-danger">@error('user.email_inst'){{ $message }}@enderror</span>
        </div>

        <div class="col-md-6">
            <label class="form-label" for="website">{{  __('user.website')  }}</label>
            <input wire:model.lazy="user.website" type="text" class="form-control" />
            <span class="text-danger">@error('user.website'){{ $message }}@enderror</span>
        </div>

        <div class="col-sm-2">
            <label class="form-label" for="salutation">{{  __('user.salutation')  }}</label>
            <select wire:model.lazy="user.salutation" class="form-select">
                <option selected value="">Bitte Anrede auswählen</option>
                @foreach (App\Enums\Salutation::cases() as $salutation)
                    <option value="{{ $salutation }}">{{ $salutation }}</option>
                @endforeach
            </select>
            <span class="text-danger">@error('user.salutation'){{ $message }}@enderror</span>
        </div>
        <div class="col-sm-5">
            <label class="form-label" for="firstname">{{  __('user.firstname')  }} {{  __('user.contact')  }}</label>
            <input wire:model.lazy="user.firstname" type="text" class="form-control" />
            <span class="text-danger">@error('user.firstname'){{ $message }}@enderror</span>
        </div>
        <div class="col-sm-5">
            <label class="form-label" for="lastname">{{  __('user.lastname')  }} {{  __('user.contact')  }}</label>
            <input wire:model.lazy="user.lastname" type="text" class="form-control"/>
            <span class="text-danger">@error('user.lastname'){{ $message }}@enderror</span>
        </div>

        <div class="col-md-4">
            <label class="form-label" for="phone">{{  __('user.phone')  }} {{  __('user.contact')  }}</label>
            <input wire:model.lazy="user.phone" type="text" class="form-control" />
            <span class="text-danger">@error('user.phone'){{ $message }}@enderror</span>
        </div>
        <div class="col-md-4">
            <label class="form-label" for="mobile">{{  __('user.mobile')  }} {{  __('user.contact')  }}</label>
            <input wire:model.lazy="user.mobile" type="text" class="form-control" />
            <span class="text-danger">@error('user.mobile'){{ $message }}@enderror</span>
        </div>

        <div class="col-md-12">
            <label class="form-label" for="contact_aboard">{{  __('user.contact_aboard')  }}</label>
            <input wire:model.lazy="user.contact_aboard" type="text" class="form-control" />
        </div>




        <div class="col-md-12 text-center">
            <button type="submit"  class="btn btn-success">
                <span class="align-middle d-sm-inline-block d-none">{{ __('attributes.save') }}</span>
            </button>
        </div>
    </div>
</form>

