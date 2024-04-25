<section class="home-section">
    <div class="text">Antrag {{ $application->name }} (Bereich: {{ $application->bereich }})</div>

    <div class="content">
        <div class="shadow p-3 mb-5 bg-body rounded">
            <div class="accordion" id="AntragAdmin">
                @include('partials.accAppl')
                @if($user->type == App\Enums\Types::nat)
                    @if($application->form==App\Enums\Form::Darlehen)
                        @include('partials.accUserNatDarlehen')
                    @else
                        @include('partials.accUserNat')
                    @endif
                @else
                    @include('partials.accUserJur')
                @endif
                @include('partials.accAddress')
                @if($application->form==App\Enums\Form::Darlehen)
                    @include('partials.accAboardAddress')
                @else
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
                @if($user->type == App\Enums\Types::nat)
                    @include('partials.accFinancing')
                @else
                    @include('partials.accFinancingOrganisation')
                @endif
                @if($application->form==App\Enums\Form::Stipendium)
                    @include('partials.accEnclosure')
                @else
                    @if($user->type == App\Enums\Types::nat)
                        @include('partials.accEnclosureDarlehenPrivat')
                    @else
                        @include('partials.accEnclosureOrganisation')
                    @endif
                @endif
            </div>
        </div>
        @livewire('set-status', ['application' => $application])
        @livewire('messages-section', ['application' => $application])
    </div>
</section>
