<section class="home-section">
    <div class="text">Nachrichten</div>
    <div class="content">
        <div class="shadow p-3 mb-5 bg-body rounded">
            <div class="accordion" id="messages">
                @forelse ($applications as $application)
                <div class="accordion-item">
                    <h2 class="accordion-header" id="headingAntrag{{ $application->id }}">
                        <button type="button" class="accordion-button" data-bs-toggle="collapse"
                            data-bs-target="#collapseAntrag{{ $application->id }}">{{ $application->name }}</button>
                            <div id="collapseAntrag" class="accordion-collapse collapse show">
                                <div class="card-body">
                                    <div class="blog-comment">
                                        <ul class="comments">
                                            @forelse ($application->messages as $message)
                                                <li class="clearfix">
                                                    @livewire('message', ['message' => $message],  key('message-'.$message->id))
                                                </li>
                                
                                            @empty
                                                Keine Nachrichten vorhanden
                                            @endforelse
                                        </ul>
                                    </div>
                                </div>
                            </div>
                    </h2>
                    @empty
                        <p>Keine Anträge gefunden</p>
                    @endforelse
                </div>
            </div>
        </div>
    </div>
</section>

