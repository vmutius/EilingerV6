<x-layout.eilinger>
    @section('title', 'Bestätigung')

    <main id="main">
        <section id="contact" class="contact">
            <div class="container">
                <div class="section-title">
                    <h2>Validierung Ihrer Email Adresse</h2>
                    <p>Um Ihren Account verwenden zu können, müssen Sie Ihre Email Adresse bestätigen.</p>
                    <p>Eine Mail ist an Ihre Email Adresse gesendet worden. Bitte klicken Sie auf den Verifikationslink in der Mail.</p>
                    <p>Vielen Dank</p>
                </div>


                <div class="row">
                    <div class="col-md-6">
                        <form method="POST" action="{{ route('verification.send', app()->getLocale()) }}">
                            @csrf

                            <div>
                                <x-primary-button>
                                    {{ __('Verifikationslink erneut senden') }}
                                </x-primary-button>
                            </div>
                        </form>
                    </div>

                    <div class="col-md-6">
                        <form method="POST" action="{{ route('logout', app()->getLocale()) }}">
                            @csrf

                            <div>
                                <x-primary-button>
                                    {{ __('Logout') }}
                                </x-primary-button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </section>
    </main>

</x-layout.eilinger>
