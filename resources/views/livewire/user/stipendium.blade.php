<div>
    {{-- 1 Account Details --}}
    @if ($currentStep == 1)
        <div class="step-one">
            <div class="card">
                <div class="card-header bg-secondary text-white">Schritt 1/11 - Bewerber</div>
                <div class="card-body">
                    @livewire('antrag.user-nat-form')
                </div>
            </div>
        </div>
    @endif

    {{-- 2 Address Details --}}
    @if ($currentStep == 2)
        <div class="step-two">
            <div class="card">
                <div class="card-header bg-secondary text-white">Schritt 2/11- Adresse</div>
                <div class="card-body">
                    @livewire('antrag.address-form')
                </div>
            </div>
        </div>
    @endif

    {{-- 2 Abweichende Address Details --}}
    @if ($currentStep == 3)
        <div class="step-three">
            <div class="card">
                <div class="card-header bg-secondary text-white">Schritt 3/11 - Abweichende Adresse</div>
                <div class="card-body">
                    @livewire('antrag.abweichende-address-form')
                </div>
            </div>
        </div>
    @endif


    {{-- 4 Ausbildung --}}
    @if ($currentStep == 4)
        <div class="step-four">
            <div class="card">
                <div class="card-header bg-secondary text-white">Schritt 4/11 - Ausbildung</div>
                <div class="card-body">
                    @livewire('antrag.education-form')
                </div>
            </div>
        </div>
    @endif

    {{-- 5 Auszahlung --}}
    @if ($currentStep == 5)
        <div class="step-five">
            <div class="card">
                <div class="card-header bg-secondary text-white">Schritt 5/11 - Auszahlung</div>
                <div class="card-body">
                    @livewire('antrag.account-form')
                </div>
            </div>
        </div>
    @endif

    {{-- 6 Eltern --}}
    @if ($currentStep == 6)
        <div class="step-six">
            <div class="card">
                <div class="card-header bg-secondary text-white">Schritt 6/11 - Eltern</div>
                <div class="card-body">
                    @livewire('antrag.parent-form')
                </div>
            </div>
        </div>
    @endif

    {{-- 7 Geschwister --}}
    @if ($currentStep == 7)
        <div class="step-seven">
            <div class="card">
                <div class="card-header bg-secondary text-white">Schritt 7/11 - Geschwister</div>
                <div class="card-body">
                    @livewire('antrag.sibling-form')
                </div>
            </div>
        </div>
    @endif

    {{-- 8 Kosten --}}
    @if ($currentStep == 8)
        <div class="step-eight">
            <div class="card">
                <div class="card-header bg-secondary text-white">Schritt 8/11 - Kosten</div>
                <div class="card-body">
                    @livewire('antrag.cost-form')
                </div>
            </div>
        </div>
    @endif

    {{-- 9 Finanzierung --}}
    @if ($currentStep == 9)
        <div class="step-nine">
            <div class="card">
                <div class="card-header bg-secondary text-white">Schritt 9/11 - Finanzierung</div>
                <div class="card-body">
                    @livewire('antrag.financing-form')
                </div>
            </div>
        </div>
    @endif

    {{-- 10 Beilagen --}}
    @if ($currentStep == 10)
        <div class="step-ten">
            <div class="card">
                <div class="card-header bg-secondary text-white">Schritt 10/11 - Bemerkungen und Beilagen</div>
                <div class="card-body">
                    @livewire('antrag.enclosure-form')
                </div>
            </div>
        </div>
    @endif

    {{-- 11 Einreichen --}}
    @if ($currentStep == 11)
        <div class="step-eleven">
            <div class="card">
                <div class="card-header bg-secondary text-white">Schritt 11/11 - Finaler Check und Einreichen</div>
                <div class="card-body">
                    @livewire('antrag.sending-form')
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
        @if ($currentStep == 11)
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

        @if ($currentStep < 11)
            <button class="btn btn-colour-1  btn-next pull-right" wire:click="increaseStep()">
                <span class="align-middle d-sm-inline-block d-none me-sm-1 align-middle">Weiter</span>
                <i class="bx bx-chevron-right bx-sm me-sm-n2 align-middle"></i>
            </button>
        @endif
    </div>

</div>
