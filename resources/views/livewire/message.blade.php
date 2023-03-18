<div class="post-comments">
    <p class="meta">{{ $message->created_at->diffForHumans() }} <a href="#">{{ $message->user->username }}</a>
        says : <i class="pull-right">
            @if (!$message->main_message_id)
                <button wire:click="$toggle('isReplying')" type="button" class="btn btn-success btn-sm">Reply</button>
            @endif

            <button wire:click="$toggle('isEditing')" type="button" class="btn btn-primary btn-sm">Edit</button>

            <button type="button" class="btn btn-danger btn-sm">Delete</button>
        </i>
    </p>
    <p>
        {{ $message->body }}
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
