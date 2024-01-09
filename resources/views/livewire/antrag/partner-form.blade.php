<div class="row g-3">

    <x-notification/>

    <div class="col-sm-6">
        <label class="form-label" for="name">{{  __('partner.lastname')  }} *</label>
        <input wire:model.lazy="partner.lastname" type="text" class="form-control"/>
        <span class="text-danger">@error('partner.lastname'){{ $message }}@enderror</span>
    </div>

</div>
