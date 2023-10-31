<section class="home-section">
    <div class="text">Antrag {{ $application->name }} (Bereich: {{ $application->bereich }})</div>

    <div class="content">
        <div class="shadow p-3 mb-5 bg-body rounded">
            <div class="accordion" id="AntragAdmin">
                @include('partials.accAppl')
                @if($user->type == 'nat')
                    @include('partials.accUserNat')
                @else
                    @include('partials.accUserJur')
                @endif
                @include('partials.accAddress')
                @if($user->type == 'nat')
                    @include('partials.accAbwAddress')
                @endif
                @if($application->form==App\Enums\Form::Stipendium)
                    @include('partials.accEducation')
                @endif
                @include('partials.accAccount')
                @if($application->form==App\Enums\Form::Stipendium)
                    @include('partials.accParents')
                    @include('partials.accSiblings')
                @endif
                @if($application->form==App\Enums\Form::Stipendium)
                    @include('partials.accCost')
                @else
                    @include('partials.accCostDarlehen')
                @endif
                @include('partials.accFinancing')
                @if($application->form==App\Enums\Form::Stipendium)
                    @include('partials.accEnclosure')
                @else
                    @include('partials.accEnclosureDarlehen')
                @endif
            </div>
        </div>
        @livewire('set-status', ['application' => $application])
        @livewire('messages-section', ['application' => $application])
    </div>

    </div>
</section>
