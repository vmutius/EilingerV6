<section class="home-section">
    <div class="text">{{  __('message.allMessagesTitle')  }}</div>
    <div class="content">
        <div class="shadow p-3 mb-5 bg-body rounded">
            <div class="content">
                <div class="shadow p-3 mb-5 bg-body rounded">

                    <div class="accordion " id="applAccordion">
                        <div class="accordion-item">
                            @if ($applications)
                                @forelse($applications as $application)
                                    <h2 class="accordion-header" id="headingAppl">
                                        <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne_{{ $application->id }}" aria-expanded="true" aria-controls="collapseOne">
                                            {{ $application->name }}
                                        </button>
                                    </h2>
                                    <div id="collapseOne_{{ $application->id }}" class="accordion-collapse collapse" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
                                        <div class="accordion-body">
                                            @livewire('messages-section', ['application' => $application])
                                        </div>
                                    </div>
                                @empty
                                <div class="card-body">
                                    <div class=row>
                                        <div class="col-sm-12">
                                            <p>{{  __('message.allMessagesTitle')  }}</p>
                                        </div>
                                    </div>
                                </div>
                                @endforelse
                            @else
                            <div class="card-body">
                                <div class=row>
                                    <div class="col-sm-12">
                                        <p>Keine Gesuche oder Projekte vorhanden</p>
                                    </div>
                                </div>
                            </div>
                            @endif
                        </div>
                      </div>
                </div>
            </div>

        </div>
    </div>
</section>

