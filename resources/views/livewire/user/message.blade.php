<section class="home-section">
    <div class="text">{{ __('message.messageRequest') }} {{ $application->name }} ({{__('application.area')}}: {{ $application->bereich }})</div>
    <div class="content">
        <div class="shadow p-3 mb-5 bg-body rounded">
            @livewire('messages-section', ['application' => $application])
        </div>
    </div>
</section>
