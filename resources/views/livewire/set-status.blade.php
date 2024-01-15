@php use App\Enums\ApplStatus; @endphp
<div class="shadow p-3 mb-5 bg-body rounded">
    <div>
        @if (session()->has('message'))
            <div class="alert alert-success">
                {{ session('message') }}
            </div>
        @endif
    </div>
    <h3>Status des Antrags</h3>

    <form wire:submit.prevent="setStatus">
        <div class="row">
            <div class="col-md-12">
                <p>Aktueller Status: {{ __('application.status_name.' .$application->appl_status->name) }}</p>
                <p> Neuer Status:
                @foreach (ApplStatus::cases() as $status)
                    <input type="radio" wire:model.lazy="application.appl_status" value={{ $status->value }}>
                    <span>{{ __('application.status_name.' .$status->name) }}</span>
                @endforeach
                <span class="text-danger">
                    @error('application.appl_status')
                    {{ $message }}
                    @enderror
                </span>
                </p>

                <p>
                    <label class="form-label" for="reason_rejected">{{  __('application.reason_rejected')  }} </label>
                    <input wire:model.lazy="application.reason_rejected" type="text" class="form-control" />
                    <span class="text-danger">@error('application.reason_rejected'){{ $message }}@enderror</span>
                </p>
            </div>


            <div class="text-end">
                <button class="btn btn-colour-1" type="submit">
                    <span class="align-middle d-sm-inline-block d-none">Status ändern</span>
                </button>
            </div>
        </div>
    </form>

</div>
