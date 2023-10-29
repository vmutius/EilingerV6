<x-layout.admin_dashboard>
    <section class="home-section">
        <div class="text">Benutzerprofil</div>
        <div class="home-content">
            <div class="shadow p-3 mb-5 bg-body rounded">
                <div class="col-md-12">
                    @include('partials.user-update-profile-information-form')
                </div>
            </div>

            <div class="shadow p-3 mb-5 bg-body rounded">
                <div class="col-md-12">
                    @include('partials.user-update-password-form')
                </div>
            </div>
        </div>
    </section>
</x-layout.admin_dashboard>