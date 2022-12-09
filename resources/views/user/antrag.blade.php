@extends('layouts.user_dashboard')

@section('content')
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
        <div class="shadow p-3 mb-5 bg-body rounded">
          <div class="bs-stepper wizard-numbered mt-2">
            <div class="row bs-stepper-header">
              <div class="step col d-flex justify-content-center" data-target="#user">
                <button type="button" class="step-trigger">
                  <span class="bs-stepper-circle">1</span>
                  <span class="bs-stepper-label mt-1">
                    <span class="bs-stepper-title"> Bewerber</span>
                  </span>
                </button>
              </div>
              <div class="line">
                <i class="bx bx-chevron-right"></i>
              </div>
              <div class="step col d-flex justify-content-center" data-target="#education">
                <button type="button" class="step-trigger">
                  <span class="bs-stepper-circle">2</span>
                  <span class="bs-stepper-label mt-1">
                    <span class="bs-stepper-title"> Ausbildung</span>
                  </span>
      
                </button>
              </div>
              <div class="line">
                <i class="bx bx-chevron-right"></i>
              </div>
              <div class="step col d-flex justify-content-center" data-target="#account">
                <button type="button" class="step-trigger">
                  <span class="bs-stepper-circle">3</span>
                  <span class="bs-stepper-label mt-1">
                    <span class="bs-stepper-title">Auszahlung</span>
                  </span>
                </button>
              </div>
              <div class="line">
                <i class="bx bx-chevron-right"></i>
              </div>
              <div class="step col d-flex justify-content-center" data-target="#parent">
                <button type="button" class="step-trigger">
                  <span class="bs-stepper-circle">4</span>
                  <span class="bs-stepper-label mt-1">
                    <span class="bs-stepper-title">Eltern</span>
                  </span>
                </button>
              </div>
              <div class="line">
                <i class="bx bx-chevron-right"></i>
              </div>
              <div class="step col d-flex justify-content-center" data-target="#sibling">
                <button type="button" class="step-trigger">
                  <span class="bs-stepper-circle">5</span>
                  <span class="bs-stepper-label mt-1">
                    <span class="bs-stepper-title">Geschwister</span>
                  </span>
                </button>
              </div>
              <div class="line">
                <i class="bx bx-chevron-right"></i>
              </div>
              <div class="step col d-flex justify-content-center" data-target="#cost">
                <button type="button" class="step-trigger">
                  <span class="bs-stepper-circle">6</span>
                  <span class="bs-stepper-label mt-1">
                    <span class="bs-stepper-title">Kosten</span>
                  </span>
                </button>
              </div>
              <div class="line">
                <i class="bx bx-chevron-right"></i>
              </div>
              <div class="step col d-flex justify-content-center" data-target="#financing">
                <button type="button" class="step-trigger">
                  <span class="bs-stepper-circle">7</span>
                  <span class="bs-stepper-label mt-1">
                    <span class="bs-stepper-title">Finanzierung</span>
                  </span>
                </button>
              </div>
              <div class="line">
                <i class="bx bx-chevron-right"></i>
              </div>
              <div class="step col d-flex justify-content-center" data-target="#remark">
                <button type="button" class="step-trigger">
                  <span class="bs-stepper-circle">8</span>
                  <span class="bs-stepper-label mt-1">
                    <span class="bs-stepper-title">Bemerkung</span>
                  </span>
                </button>
              </div>
              <div class="line">
                <i class="bx bx-chevron-right"></i>
              </div>
              <div class="step col d-flex justify-content-center" data-target="#enclosure">
                <button type="button" class="step-trigger">
                  <span class="bs-stepper-circle">9</span>
                  <span class="bs-stepper-label mt-1">
                    <span class="bs-stepper-title">Beilagen</span>
                  </span>
                </button>
              </div>
            </div>
            <div class="bs-stepper-content">
              <!-- 1 Account Details -->
              <div id="user" class="content">
                @include('antrag.user')
              </div>
              <!-- 2 Education Details -->
              <div id="education" class="content">
                @include('antrag.education')
              </div>
              <!-- 3 Auszahlung Details -->
              <div id="account" class="content">
                @include('antrag.account')
              </div>
              <!-- 4 Eltern Details -->
              <div id="parent" class="content">
                @include('antrag.parent')
              </div>
              <!-- 5 Geschister Details -->
              <div id="sibling" class="content">
                @include('antrag.sibling')
              </div>
              <!-- 6 Kosten Details -->
              <div id="cost" class="content">
                @include('antrag.cost')
              </div>
              <!-- 7 Finazierung Details -->
              <div id="financing" class="content">
                @include('antrag.financing')
              </div>
              <!-- 8 Bemerkungen -->
              <div id="remark" class="content">
                @include('antrag.remark')
              </div>
              <!-- 9 Beilagen -->
              <div id="enclosure" class="content">
                @include('antrag.enclosure')
              </div>

            </div>
          </div>
        </div>
    </div>
</section>
<script>

  var flatpickrFriendly = document.querySelector("#flatpickr-human-friendly");

  flatpickrFriendly.flatpickr({
    altInput: true,
    altFormat: "j F Y",
    dateFormat: "d-m-Y"
  });

</script>
@endsection