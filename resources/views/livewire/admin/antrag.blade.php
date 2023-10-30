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
                @include('partials.accAbwAddress')
                @include('partials.accEducation')
                @include('partials.accAccount')
                @include('partials.accParents')
                @include('partials.accSiblings')
                @include('partials.accCost')
                @include('partials.accFinancing')
                @include('partials.accRemarks')
            </div>
        </div>
        @livewire('set-status', ['application' => $application])
        @livewire('messages-section', ['application' => $application])
    </div>

    </div>
</section>
