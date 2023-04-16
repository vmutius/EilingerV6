<div>
    {{-- 1 Account Details --}}
    @if ($currentStep == 1)
        <div class="step-one">
            <div class="card">
                <div class="card-header bg-secondary text-white">Schritt 1/7 - Bewerber</div>
                <div class="card-body">
                    @livewire('antrag.user-nat-darlehen-form')
                </div>
            </div>
        </div>
    @endif

    {{-- 2 Address Details --}}
    @if ($currentStep == 2)
        <div class="step-two">
            <div class="card">
                <div class="card-header bg-secondary text-white">Schritt 2/7- Adresse</div>
                <div class="card-body">
                    @livewire('antrag.address-form')
                </div>
            </div>
        </div>
    @endif

    {{-- 3 Address Details Aboard--}}
    @if ($currentStep == 3)
        <div class="step-three">
            <div class="card">
                <div class="card-header bg-secondary text-white">Schritt 3/7- Adresse im Ausland</div>
                <div class="card-body">
                    @livewire('antrag.aboard-address-form')
                </div>
            </div>
        </div>
    @endif

    {{-- 4 Finanzierung --}}
    @if ($currentStep == 4)
        <div class="step-four">
            <div class="card">
                <div class="card-header bg-secondary text-white">Schritt 4/7 - Finanzierung</div>
                <div class="card-body">
                    @livewire('antrag.financing-darlehen-form')
                </div>
            </div>
        </div>
    @endif

    {{-- 5 Auszahlung --}}
    @if ($currentStep == 5)
        <div class="step-five">
            <div class="card">
                <div class="card-header bg-secondary text-white">Schritt 5/7 - Auszahlung</div>
                <div class="card-body">
                    @livewire('antrag.account-form')
                </div>
            </div>
        </div>
    @endif

    {{-- 6 Bemerkungen --}}
    @if ($currentStep == 6)
        <div class="step-six">
            <div class="card">
                <div class="card-header bg-secondary text-white">Schritt 6/7 - Bemerkungen</div>
                <div class="card-body">
                    @livewire('antrag.remark-form')
                </div>
            </div>
        </div>
    @endif

    {{-- 7 Einreichen --}}
    @if ($currentStep == 7)
        <div class="step-seven">
            <div class="card">
                <div class="card-header bg-secondary text-white">Schritt 7/7 - Finaler Check und Einreichen</div>
                <div class="card-body">
                    @livewire('antrag.sending-darlehen-form')
                </div>
            </div>
        </div>
    @endif

    <div class="col-12 pt-2 d-flex justify-content-between">
        @if ($currentStep > 1)
            <button class="btn btn-colour-1 btn-prev pull-left" wire:click="decreaseStep()">
                <i class="bx bx-chevron-left bx-sm ms-sm-n2 align-middle"></i>
                <span class="align-middle d-sm-inline-block d-none">Zurück</span>
            </button>
        @endif
        @if ($currentStep == 7)
            <button type="button" class="btn btn-danger btn-lg" x-on:click="confirmSendApplication"
                x-data="{
                    confirmSendApplication() {
                        if (window.confirm('Haben Sie alle Angaben wahrheitsgemäss ausgefüllt?')) {
                            @this.call('SendApplication')
                        }
                    }
                }">
                <span class="align-middle d-sm-inline-block d-none">Antrag einreichen</span>
            </button>
        @endif

        @if ($currentStep < 7)
            <button class="btn btn-colour-1  btn-next pull-right" wire:click="increaseStep()">
                <span class="align-middle d-sm-inline-block d-none me-sm-1 align-middle">Weiter</span>
                <i class="bx bx-chevron-right bx-sm me-sm-n2 align-middle"></i>
            </button>
        @endif
    </div>
</div>
