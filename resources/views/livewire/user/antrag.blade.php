<section class="home-section">
    <div class="text">{{  __('antrag.title')  }}</div>
    <p>{{  __('antrag.text1')  }}: <a target='_blank' href="{{ route('index', app()->getLocale()) }}#our-values">{{ __('home.funding') }}</a>.</p>
    <p>{{  __('antrag.text2')  }} </p>

    <p class="text-danger fw-bolder">{{  __('antrag.textSave')  }}</p>


    <div class="home-content">

        @if (session()->has('message'))
            <div class="alert alert-success">
                {{ session('message') }}
            </div>
        @endif

        @if ($application->form->value === \App\Enums\Form::Stipendium->value)
            @livewire('user.stipendium')
        @elseif (auth()->user()->type->value == \App\Enums\Types::nat->value)
            @livewire('user.darlehen-privat')
        @else
            @livewire('user.darlehen-verein')
        @endif
    </div>
</section>
