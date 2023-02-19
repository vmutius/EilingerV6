<div class="shadow p-3 mb-5 bg-body rounded">

    <div>
        @if (session()->has('message'))
            <div class="alert alert-success">
                {{ session('message') }}
            </div>
        @endif
    </div>
    <div class="col-md-12">
        <div class="blog-comment">
            <h3>Nachrichten</h3>
            <form wire:submit.prevent="postMessage">
                <div>
                    <textarea wire:model.defer="message.body" id="textareaID" class="form-control"></textarea>
                </div>
            </form>
            <br />
            <div class="col-md-12 text-end">
                <button button class="btn btn-colour-1" type="submit" class="btn btn-success">
                    <span class="align-middle d-sm-inline-block d-none">Nachricht speichern</span>
                </button>
            </div>
            <hr />
        </div>
        <div class="col-md-12">
            <ul class="comments">
                @forelse ($application->messages->sortDesc() as $message)
                <li class="clearfix">
                    <div class="post-comments">
                        <p class="meta">{{ $message->created_at }} <a href="#">{{ $message->user->name }}</a> says : <i class="pull-right"><a
                                    href="#"><small>Reply</small></a></i></p>
                        <p>
                           {{ $message->body }}
                        </p>
                    </div>
                </li>
                @empty
                    Keine Nachrichten vorhanden
                @endforelse
                <li class="clearfix">
                    <div class="post-comments">
                        <p class="meta">Dec 19, 2014 <a href="#">JohnDoe</a> says : <i class="pull-right"><a
                                    href="#"><small>Reply</small></a></i></p>
                        <p>
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                            Etiam a sapien odio, sit amet
                        </p>
                    </div>

                    <ul class="comments">
                        <li class="clearfix">
                            <div class="post-comments">
                                <p class="meta">Dec 20, 2014 <a href="#">JohnDoe</a> says : <i
                                        class="pull-right"><a href="#"><small>Reply</small></a></i></p>
                                <p>
                                    Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                                    Etiam a sapien odio, sit amet
                                </p>
                            </div>
                        </li>
                    </ul>
                </li>
            </ul>
        </div>
    </div>
</div>
