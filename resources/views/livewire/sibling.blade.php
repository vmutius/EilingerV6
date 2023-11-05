<div>
    <!-- loop over all your sibling models -->
    @foreach ($siblings as $index => $sibling)
        <div class="row g-3" :key="siblings.{{ $index }}">
            <div class="col-sm-5">
                <label class="form-label" for="siblings.{{ $index }}.lastname">Nachname</label>
                <input wire:model.lazy="siblings.{{ $index }}.lastname" type="text" class="form-control"/>
            </div>
            <div class="col-sm-5">
                <label class="form-label" for="siblings.{{ $index }}.firstname">Vorname</label>
                <input wire:model.lazy="siblings.{{ $index }}.firstname" type="text" class="form-control"/>
            </div>
            <div class="col-sm-2">
                <label class="form-label" for="siblings.{{ $index }}.birth_year">Geburtsjahr</label>
                <input wire:model.lazy="siblings.{{ $index }}.birth_year" type="text" class="form-control"/>
            </div>
        </div>
    @endforeach
    <!-- Only show the new model inputs if isAdding is true -->
    @if ($isAdding)
        <div class="row g-3">
            @foreach ($addSibling as $index => $value)
                <div class="col-sm-5" :key="addSibling{{ $index }}">
                    <label class="form-label" for="addSibling.{{ $index }}.lastname">Nachname</label>
                    <input type="text" wire:model="addSibling.{{ $index }}.lastname"
                           :key="addSibling.{{ $index }}.lastname"/>

                    <button class="btn btn-success" type="button" wire:click="save({{ $index }})"
                            :key="addSibling{{ $index }}_save">
                        <span class="align-middle d-sm-inline-block d-none">Save</span>
                    </button>
                </div>
            @endforeach
            <button class="btn btn-success" type="button" wire:click="saveAll">
                <span class="align-middle d-sm-inline-block d-none">Save all</span></button>
        </div>
    @endif

    <button class="btn btn-success" type="button" wire:click="saveAll">
        <span class="align-middle d-sm-inline-block d-none">Save all</span></button>
    <!-- triggers the add function on the component -->
    <button type="button" wire:click="add">Add More</button>
</div>
