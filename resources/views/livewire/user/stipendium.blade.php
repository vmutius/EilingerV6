<div>
    {{-- 1 Account Details --}}
    @if ($currentStep == 1)
        <div class="step-one">
            <div class="card">
                <div class="card-header bg-secondary text-white">Schritt 1/12 - Bewerber</div>
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
                <div class="card-header bg-secondary text-white">Schritt 2/12- Adresse</div>
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
                <div class="card-header bg-secondary text-white">Schritt 3/12 - Abweichende Adresse</div>
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
                <div class="card-header bg-secondary text-white">Schritt 4/12 - Ausbildung</div>
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
                <div class="card-header bg-secondary text-white">Schritt 5/12 - Auszahlung</div>
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
                <div class="card-header bg-secondary text-white">Schritt 6/12 - Eltern</div>
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
                <div class="card-header bg-secondary text-white">Schritt 7/12 - Geschwister</div>
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
                <div class="card-header bg-secondary text-white">Schritt 8/12 - Kosten</div>
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
                <div class="card-header bg-secondary text-white">Schritt 9/12 - Finanzierung</div>
                <div class="card-body">
                    @livewire('antrag.financing-form')
                </div>
            </div>
        </div>
    @endif

    {{-- 10 Gewünschter Betrag --}}
    @if ($currentStep == 10)
        <div class="step-ten">
            <div class="card">
                <div class="card-header bg-secondary text-white">Schritt 10/12 - Gewünschter Betrag</div>
                <div class="card-body">
                    @livewire('antrag.req-amount-form')
                </div>
            </div>
        </div>
    @endif


    {{-- 10 Beilagen --}}
    @if ($currentStep == 11)
        <div class="step-eleven">
            <div class="card">
                <div class="card-header bg-secondary text-white">Schritt 11/12 - Bemerkungen und Beilagen</div>
                <div class="card-body">
                    @if($isInitialAppl)
                        @livewire('antrag.enclosure-form-stipendium-erst')
                    @else
                        @livewire('antrag.enclosure-form-stipendium-folge')
                    @endif
                </div>
            </div>
        </div>
    @endif

    {{-- 11 Einreichen --}}
    @if ($currentStep == 12)
        <div class="step-twelve">
            <div class="card">
                <div class="card-header bg-secondary text-white">Schritt 12/12 - Finaler Check und Einreichen</div>
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
        @if ($currentStep == 12)
            @if (!$this->completeApp)
                <button class="btn btn-danger btn-lg disabled" wire:click="saveApplication()">
                    <span class="align-middle d-sm-inline-block d-none">Antrag einreichen</span>
                </button>
            @else
                <button class="btn btn-danger btn-lg" wire:click="saveApplication()">
                    <span class="align-middle d-sm-inline-block d-none">Antrag einreichen</span>
                </button>

                <div class="modal" @if ($showModal) style="display:block" @endif>
                    <div class="modal-dialog" role="document">
                        <div class="modal-content">
                            <form wire:submit.prevent="save">
                                <div class="modal-header">
                                    <h5 class="modal-title">Antrag einreichem</h5>
                                    <button wire:click="close" type="button" class="close" data-dismiss="modal"
                                            aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                                <div class="modal-body">

                                    <br/>
                                    Ich bestätige, dass ich alle Angaben wahrheitsmässig gemacht habe
                                    <br/>

                                </div>
                                <div class="modal-footer">
                                    <button type="submit" class="btn btn-primary">Einreichen</button>
                                    <button wire:click="close" type="button" class="btn btn-secondary"
                                            data-dismiss="modal">Close
                                    </button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            @endif
        @endif

        @if ($currentStep < 12)
            <button class="btn btn-colour-1  btn-next pull-right" wire:click="increaseStep()">
                <span class="align-middle d-sm-inline-block d-none me-sm-1 align-middle">Weiter</span>
                <i class="bx bx-chevron-right bx-sm me-sm-n2 align-middle"></i>
            </button>
        @endif
    </div>

</div>

