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
        gelesen und zur Kenntnis genommen haben. </p>


    <div class="home-content">
        
        {{ $application->form }}
        @if (session()->has('message'))
            <div class="alert alert-success">
                {{ session('message') }}
            </div>
        @endif

        @if ($application->form == 'Stipendium')
            @livewire('user.stipendium')
        @elseif (auth()->user()->type == 'nat')
            @livewire('user.darlehen-privat')
        @else
            @livewire('user.darlehen-verein')
        @endif
    </div>
</section>
