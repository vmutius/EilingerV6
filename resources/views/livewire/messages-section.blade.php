<div class="shadow p-3 mb-5 bg-body rounded">

    <div>
        @if (session()->has('message'))
            <div class="alert alert-success">
                {{ session('message') }}
            </div>
        @endif
    </div>
    <div class="col-md-12">
        <h3>Nachrichten</h3>

        <form wire:submit.prevent="postMessage">
            <div class="blog-comment">
                <textarea wire:model.defer="newMessage.body" id="textareaID" class="form-control"></textarea>

                @error('newMessage.body')
                    <p class="text-danger">{{ $message }}</p>
                @enderror
            </div>
            <br />
            <div class="col-md-12 text-end">
                <button class="btn btn-colour-1" type="submit">
                    <span class="align-middle d-sm-inline-block d-none">Nachricht speichern</span>
                </button>
            </div>
        </form>

    </div>
    <div class="blog-comment">
        <ul class="comments">
            @forelse ($messages as $message)
                <li class="clearfix">
                    <div class="post-comments">
                        <p class="meta">{{ $message->created_at->diffForHumans() }} <a
                                href="#">{{ $message->user->username }}</a> says : <i class="pull-right"><a
                                    href="#"><small>Reply</small></a></i></p>
                        <p>
                            {{ $message->body }}
                        </p>
                    </div>
                    @forelse($message->replies as $reply)
                        <ul class="comments">
                            <li class="clearfix">
                                <div class="post-comments">
                                    <p class="meta">{{ $reply->created_at->diffForHumans() }}<a
                                            href="#">{{ $reply->user->username }}</a> says :
                                    <p>
                                        {{ $reply->body }}
                                    </p>
                                </div>
                            </li>
                        </ul>
                    @empty
                    @endforelse
                </li>
            @empty
                Keine Nachrichten vorhanden
            @endforelse

        </ul>
    </div>
</div>
