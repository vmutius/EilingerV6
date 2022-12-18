<section class="home-section">
    <div class="text">Antrag stellen</div>
    <p>Um möglichst ziel- und wirkungsorientiert zu arbeiten, hat die Eilinger Stiftung inhaltliche Schwerpunkte und Förderkriterien definiert. 
      Wir bitten Sie deshalb, vor dem Einreichen Ihres Gesuchs zu überprüfen, ob Ihr Projekt: </p>

      <ul>
        <li>Den inhaltlichen Schwerpunkten der Stiftung entspricht (hier wird später zurück auf einen anderen Teil der Webseite verlinkt) </li>     
        <li>Die Fördervoraussetzungen erfüllt entspricht (hier wird später zurück auf einen anderen Teil der Webseite verlinkt) </li>
      </ul>    
      
    <p>Durch Einreichen des Antrag bestätigen Sie, dass Sie die Fördervoraussetzungen sowie die Ausschlusskriterien gelesen und zur 
      Kenntnis genommen haben. </p>
        <div class="home-content">
            {{-- 1 Account Details --}}
            @if ($currentStep == 1)
                <div class="step-one">
                    <div class="card">
                        <div class="card-header bg-secondary text-white">Schritt 1/10 - Bewerber</div>
                        <div class="card-body">
                            @include('antrag.user')
                        </div>
                    </div>
                </div>
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
                         @include('antrag.parents')
                     </div>
                 </div>
             </div>
         @endif

        </div>
    </div>
</section>
