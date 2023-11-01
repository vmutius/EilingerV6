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
    {{ __('application.status.' .$application->appl_status->name) }}

    <form wire:submit.prevent="setStatus">
        <div class="row">
            <div class="col-md-10">
                @foreach (ApplStatus::cases() as $status)
                    <input type="radio" wire:model.lazy="application.appl_status" value={{ $status->value }}>
                    <span>{{ __('application.status.' .$status->name) }}</span>
                @endforeach
                <span class="text-danger">
                    @error('application.appl_status')
                    {{ $message }}
                    @enderror
                </span>
            </div>

            <div class="col-md-2">
                <button class="btn btn-colour-1" type="submit">
                    <span class="align-middle d-sm-inline-block d-none">Status ändern</span>
                </button>
            </div>
        </div>
    </form>

</div>
