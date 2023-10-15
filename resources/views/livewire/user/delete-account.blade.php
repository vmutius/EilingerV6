<section class="home-section">
    <div class="text">Account löschen</div>
    <div class="home-content">
        <div class="shadow p-3 mb-5 bg-body rounded">
            <div class="row">
                <div class="mt-6">
                    
                </div>
        
                <div class="modal" @if ($showModal) style="display:block" @endif>
                    <div class="modal-dialog" role="document">
                        <div class="modal-content">
                            <form wire:submit.prevent="destroy()">
                                @csrf
                                @method('delete')
                                <div class="modal-header">
                                    <h5 class="modal-title">Account löschen</h5>
                                    <button wire:click="close" type="button" class="close" data-dismiss="modal"
                                        aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                                <div class="modal-body">
                                    <label class="form-label" for="password">Passwort *</label>
                                    <input wire:model="current_password" type="password" class="form-control" />
                                    <span class="text-danger">@error('current_password'){{ $message }}@enderror</span>
                                    <br />
                                    Wollen Sie ihren Account wirklich löschen??
                                    <br />
                                    
                                </div>
                                <div class="modal-footer">
                                    <button type="submit" class="btn btn-primary">Account löschen</button>
                                    <button wire:click="close" type="button" class="btn btn-secondary"
                                        data-dismiss="modal">Close
                                    </button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
                <div class="flex mt-3">
                    <button class="btn btn-colour-1  btn-next pull-right" wire:click="delete()">Account löschen</button>
                </div>
            </div>
        </div>
    </div>
</section>

