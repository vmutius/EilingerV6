<div class="accordion-item">
    <h2 class="accordion-header" id="headingSibling">
        <button type="button" class="accordion-button collapsed" data-bs-toggle="collapse"
                data-bs-target="#collapseSibling">{{ __('sibling.title') }}
        </button>
    </h2>
    <div id="collapseSibling" class="accordion-collapse collapse">
        @forelse ($siblings as $sibling)
            <div class="card-body">
                <div class=row>
                    <div class="col-sm-4">
                        <p>{{ __('sibling.lastname') }}: {{ $sibling->lastname }}</p>
                    </div>
                    <div class="col-sm-4">
                        <p>{{ __('sibling.firstname') }}: {{ $sibling->firstname }}</p>
                    </div>
                    <div class="col-sm-4">
                        <p>{{ __('sibling.birthday') }}: {{ $sibling->birthday }}</p>
                    </div>
                    <div class="col-sm-4">
                        <p>{{ __('sibling.place_of_residence') }}: {{ $sibling->place_of_residence }}</p>
                    </div>
                    <div class="col-sm-4">
                        <p>{{ __('sibling.education') }}: {{ $sibling->education }}</p>
                    </div>
                    <div class="col-sm-4">
                        <p>{{ __('sibling.graduation_year') }}: {{ $sibling->graduation_year }}</p>
                    </div>
                    <div class="col-sm-4">
                        <p>{{ __('sibling.get_amount') }}: {{ $sibling->get_amount }}</p>
                    </div>
                    <div class="col-sm-4">
                        <p>{{ __('sibling.support_site') }}: {{ $sibling->support_site }}</p>
                    </div>
                </div>
            </div>
        @empty
            <div class="card-body">
                <div class=row>
                    <div class="col-sm-12">
                        <p>{{ __('sibling.noSiblings') }}</p>
                    </div>
                </div>
            </div>
        @endforelse
    </div>
</div>
