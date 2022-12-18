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
    <div class="home-content">
        @if (auth()->user()->type == 'nat')
            {{-- 1 Account Details --}}
            @if ($currentStep == 1)
                <div class="step-one">
                    <div class="card">
                        <div class="card-header bg-secondary text-white">Schritt 1/10 - Bewerber</div>
                        <div class="card-body">
                            @include('antrag.user_nat')
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
                        @include('antrag.address')
                    </div>
                </div>
            </div>
        @endif

        {{-- 3 Ausbildung --}}
        @if ($currentStep == 3)
            <div class="step-three">
                <div class="card">
                    <div class="card-header bg-secondary text-white">Schritt 3/10 - Ausbildung</div>
                    <div class="card-body">
                        @include('antrag.education')
                    </div>
                </div>
            </div>
        @endif

        {{-- 4 Auszahlung --}}
        @if ($currentStep == 4)
            <div class="step-four">
                <div class="card">
                    <div class="card-header bg-secondary text-white">Schritt 4/10 - Auszahlung</div>
                    <div class="card-body">
                        @include('antrag.account')
                    </div>
                </div>
            </div>
        @endif

        {{-- 5 Eltern --}}
        @if ($currentStep == 5)
            <div class="step-five">
                <div class="card">
                    <div class="card-header bg-secondary text-white">Schritt 5/10 - Eltern</div>
                    <div class="card-body">
                        @include('antrag.parent')
                    </div>
                </div>
            </div>
        @endif

        {{-- 6 Geschwister --}}
        @if ($currentStep == 6)
            <div class="step-six">
                <div class="card">
                    <div class="card-header bg-secondary text-white">Schritt 6/10 - Geschwister</div>
                    <div class="card-body">
                        @include('antrag.sibling')
                    </div>
                </div>
            </div>
        @endif

        {{-- 7 Kosten --}}
        @if ($currentStep == 7)
            <div class="step-seven">
                <div class="card">
                    <div class="card-header bg-secondary text-white">Schritt 7/10 - Kosten</div>
                    <div class="card-body">
                        @include('antrag.cost')
                    </div>
                </div>
            </div>
        @endif

        {{-- 8 Finanzierung --}}
        @if ($currentStep == 8)
            <div class="step-eight">
                <div class="card">
                    <div class="card-header bg-secondary text-white">Schritt 8/10 - Finanzierung</div>
                    <div class="card-body">
                        @include('antrag.financing')
                    </div>
                </div>
            </div>
        @endif

        {{-- 9 Bemerkungen --}}
        @if ($currentStep == 9)
            <div class="step-nine">
                <div class="card">
                    <div class="card-header bg-secondary text-white">Schritt 9/10 - Bemerkungen</div>
                    <div class="card-body">
                        @include('antrag.remark')
                    </div>
                </div>
            </div>
        @endif

        {{-- 10 Beilagen --}}
        @if ($currentStep == 10)
            <div class="step-ten">
                <div class="card">
                    <div class="card-header bg-secondary text-white">Schritt 10/10 - Beilagen</div>
                    <div class="card-body">
                        @include('antrag.enclosure')
                    </div>
                </div>
            </div>
        @endif

    </div>
</section>
