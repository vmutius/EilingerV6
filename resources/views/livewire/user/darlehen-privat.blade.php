<div>
    {{-- 1 Account Details --}}
    @if ($currentStep == 1)
        <div class="step-one">
            <div class="card">
                <div class="card-header bg-secondary text-white">Schritt 1/9 - Bewerber</div>
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
                <div class="card-header bg-secondary text-white">Schritt 2/9- Adresse</div>
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
                <div class="card-header bg-secondary text-white">Schritt 3/9- Adresse im Ausland</div>
                <div class="card-body">
                    @livewire('antrag.aboard-address-form')
                </div>
            </div>
        </div>
    @endif

    {{-- 4 Auszahlung --}}
    @if ($currentStep == 4)
        <div class="step-four">
            <div class="card">
                <div class="card-header bg-secondary text-white">Schritt 4/9 - Auszahlung</div>
                <div class="card-body">
                    @livewire('antrag.account-form')
                </div>
            </div>
        </div>
    @endif

    {{-- 5 Kosten --}}
    @if ($currentStep == 5)
        <div class="step-five">
            <div class="card">
                <div class="card-header bg-secondary text-white">Schritt 5/9 - Kosten</div>
                <div class="card-body">
                    @livewire('antrag.cost-form-darlehen')
                </div>
            </div>
        </div>
    @endif

    {{-- 6 Finanzierung --}}
    @if ($currentStep == 6)
        <div class="step-six">
            <div class="card">
                <div class="card-header bg-secondary text-white">Schritt 6/9 - Finanzierung</div>
                <div class="card-body">
                    @livewire('antrag.financing-form')
                </div>
            </div>
        </div>
    @endif

    {{-- 7 Gewünschter Betrag --}}
    @if ($currentStep == 7)
    <div class="step-seven">
        <div class="card">
            <div class="card-header bg-secondary text-white">Schritt 7/9 - Gewünschter Betrag</div>
            <div class="card-body">
                @livewire('antrag.req-amount-form')
            </div>
        </div>
    </div>
   @endif

    
    {{-- 8 Bemerkungen und Beilagen --}}
    @if ($currentStep == 8)
        <div class="step-eight">
            <div class="card">
                <div class="card-header bg-secondary text-white">Schritt 8/9 - Bemerkungen und Beilagen</div>
                <div class="card-body">
                    @livewire('antrag.enclosure-form-darlehen')
                </div>
            </div>
        </div>
    @endif

    {{-- 9 Einreichen --}}
    @if ($currentStep == 9)
        <div class="step-nine">
            <div class="card">
                <div class="card-header bg-secondary text-white">Schritt 9/9 - Finaler Check und Einreichen</div>
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
        @if ($currentStep == 9)
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

        @if ($currentStep < 9)
            <button class="btn btn-colour-1  btn-next pull-right" wire:click="increaseStep()">
                <span class="align-middle d-sm-inline-block d-none me-sm-1 align-middle">Weiter</span>
                <i class="bx bx-chevron-right bx-sm me-sm-n2 align-middle"></i>
            </button>
        @endif
    </div>
</div>
