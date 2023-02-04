<section class="home-section">
    <div class="text">Antrag stellen</div>
    <p>Um möglichst ziel- und wirkungsorientiert zu arbeiten, hat die Eilinger Stiftung inhaltliche Schwerpunkte und
        Förderkriterien definiert.
        Wir bitten Sie deshalb, vor dem Einreichen Ihres Gesuchs zu überprüfen, ob Ihr Projekt: </p>

    <ul>
        <li>Den inhaltlichen Schwerpunkten der Stiftung entspricht (hier wird später zurück auf einen anderen Teil der
            Webseite verlinkt) </li>
        <li>Die Fördervoraussetzungen erfüllt entspricht (hier wird später zurück auf einen anderen Teil der Webseite
            verlinkt) </li>
    </ul>

    <p>Durch Einreichen des Antrag bestätigen Sie, dass Sie die Fördervoraussetzungen sowie die Ausschlusskriterien
        gelesen und zur
        Kenntnis genommen haben. </p>

    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
    
    <div class="home-content">
        @if (auth()->user()->type == 'nat')
            {{-- 1 Account Details --}}
            @if ($currentStep == 1)
                <div class="step-one">
                    <div class="card">
                        <div class="card-header bg-secondary text-white">Schritt 1/10 - Bewerber</div>
                        <div class="card-body">
                            @livewire('antrag.user-nat-form')
                        </div>
                    </div>
                </div>
            @endif
        @else
            @if ($currentStep == 1)
                <div class="step-one">
                    <div class="card">
                        <div class="card-header bg-secondary text-white">Schritt 1/10 - Bewerber</div>
                        <div class="card-body">
                            @include('antrag.user_jur')
                        </div>
                    </div>
                </div>
            @endif
        @endif

        {{-- 2 Address Details --}}
        @if ($currentStep == 2)
            <div class="step-two">
                <div class="card">
                    <div class="card-header bg-secondary text-white">Schritt 2/10 - Adresse</div>
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
                    <div class="card-header bg-secondary text-white">Schritt 3/10 - Abweichende Adresse</div>
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
                    <div class="card-header bg-secondary text-white">Schritt 4/10 - Ausbildung</div>
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
                    <div class="card-header bg-secondary text-white">Schritt 5/10 - Auszahlung</div>
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
                    <div class="card-header bg-secondary text-white">Schritt 6/10 - Eltern</div>
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
                    <div class="card-header bg-secondary text-white">Schritt 7/10 - Geschwister</div>
                    <div class="card-body">
                        @include('antrag.sibling')
                    </div>
                </div>
            </div>
        @endif

        {{-- 8 Kosten --}}
        @if ($currentStep == 8)
            <div class="step-eight">
                <div class="card">
                    <div class="card-header bg-secondary text-white">Schritt 8/10 - Kosten</div>
                    <div class="card-body">
                        @include('antrag.cost')
                    </div>
                </div>
            </div>
        @endif

        {{-- 9 Finanzierung --}}
        @if ($currentStep == 9)
            <div class="step-nine">
                <div class="card">
                    <div class="card-header bg-secondary text-white">Schritt 9/10 - Finanzierung</div>
                    <div class="card-body">
                        @include('antrag.financing')
                    </div>
                </div>
            </div>
        @endif

        {{-- 10 Beilagen --}}
        @if ($currentStep == 10)
            <div class="step-eleven">
                <div class="card">
                    <div class="card-header bg-secondary text-white">Schritt 10/10 - Bemerkungen und Beilagen</div>
                    <div class="card-body">

                        @include('antrag.enclosure')

                    </div>
                </div>
            </div>
        @endif

        <div class="col-12 pt-2 d-flex justify-content-between">
            <button class="btn btn-colour-1 btn-prev pull-left" wire:click="decreaseStep()">
                <i class="bx bx-chevron-left bx-sm ms-sm-n2 align-middle"></i>
                <span class="align-middle d-sm-inline-block d-none">Zurück</span>
            </button>

            @if ($currentStep == 10)
                <button class="btn btn-danger btn-lg" wire:click="SendApplication()">
                    <span class="align-middle d-sm-inline-block d-none">Antrag einreichen</span>
                </button>
            @endif

            <button class="btn btn-colour-1  btn-next pull-right" wire:click="increaseStep()">
                <span class="align-middle d-sm-inline-block d-none me-sm-1 align-middle">Weiter</span>
                <i class="bx bx-chevron-right bx-sm me-sm-n2 align-middle"></i>
            </button>
        </div>

    </div>
</section>
