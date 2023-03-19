<div class="post-comments">
    <p class="meta">{{ $message->created_at->diffForHumans() }} <a href="#">{{ $message->user->username }}</a>
        says : <i class="pull-right">
            @if (!$message->main_message_id)
                <button wire:click="$toggle('isReplying')" type="button" class="btn btn-success btn-sm">Reply</button>
            @endif

            @can ('update', $message)
                <button wire:click="$toggle('isEditing')" type="button" class="btn btn-primary btn-sm">Bearbeiten</button>
            @endcan

            @can ('destroy', $message)
            <button type="button" 
                class="btn btn-danger btn-sm"
                x-on:click="confirmMessageDeletion"
                x-data="{
                    confirmMessageDeletion () {
                        if (window.confirm('Wollen Sie die Nachricht wirklich löschen?')) {
                            @this.call('deleteMessage')
                        }
                    }
                }"
                >Löschen</button>
            @endcan
        </i>
    </p>
    <p>
        @if ($isEditing)
            <form wire:submit.prevent="editMessage">
                <div class="blog-comment">
                    <textarea wire:model.defer="body" id="textareaID" class="form-control"></textarea>

                    @error('body')
                        <p class="text-danger">{{ $message }}</p>
                    @enderror
                </div>
                <br />
                <div class="col-md-12 text-end">
                    <button class="btn btn-colour-1" type="submit">
                        <span class="align-middle d-sm-inline-block d-none">Nachricht ändern</span>
                    </button>
                </div>
            </form>
        @else
        {{ $message->body }}
        @endif
        
    </p>
    @if ($isReplying)
        <form wire:submit.prevent="postReply">
            <div class="blog-comment">
                <textarea wire:model.defer="body" id="textareaID" class="form-control"></textarea>

                @error('body')
                    <p class="text-danger">{{ $message }}</p>
                @enderror
            </div>
            <br />
            <div class="col-md-12 text-end">
                <button class="btn btn-colour-1" type="submit">
                    <span class="align-middle d-sm-inline-block d-none">Reply speichern</span>
                </button>
            </div>
        </form>
    @endif
    <div>
        @foreach ($message->replies as $reply)
            <ul class="comments">
                <li class="clearfix">
                    @livewire('message', ['message' => $reply],  key('reply-'.$reply->id))
                </li>
            </ul>
        @endforeach
    </div>
</div>
