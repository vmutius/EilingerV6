<div>
    <li class="nav-item dropdown notification-ui show">
        <a class="nav-link dropdown-toggle notification-ui_icon" href="#" id="navbarDropdown" role="button"
           data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            <i class="bi bi-bell"></i>
            @if($notificationCount > 0)
                <span class="unread-notification"></span>
            @endif
        </a>
        <div class="dropdown-menu notification-ui_dd" aria-labelledby="navbarDropdown">
            <div class="notification-ui_dd-header">
                <h3 class="text-center">Nachrichten</h3>
            </div>
            <div class="notification-ui_dd-content">

                @foreach ($notifications as $notification)
                    @if ($notification->type == App\Notifications\MessageAddedAdmin::class ||
                        $notification->type == App\Notifications\MessageAddedUser::class)
                        <a href="{{ $notification->data['url'] }}"
                           class="notification-list notification-list--unread text-dark">
                            <div class="notification-list_detail">
                                <p><b>{{ $notification->data['username'] }}</b> <br><span class="text-muted">kommentierte zu
                                    {{ $notification->data['appl_name'] }}</span></p>
                                <p class="nt-link text-truncate">{{ $notification->data['message_body'] }}</p>
                            </div>
                            <p><small>{{ $notification->created_at->diffForHumans() }}</small></p>
                        </a>
                    @elseif ($notification->type == App\Notifications\NewApplication::class)
                        <a href="{{ $notification->data['url'] }}"
                           class="notification-list notification-list--unread text-dark">
                            <div class="notification-list_detail">
                                <p>Es wurde ein neuer Antrag <br/> <b>{{ $notification->data['appl_name'] }}</b><br/>
                                    <span class="text-muted">eingereicht.</span><br/>
                            </div>
                            <p><small>{{ $notification->created_at->diffForHumans() }}</small></p>
                        </a>
                    @else
                    <a href="{{ $notification->data['url'] }}"
                       class="notification-list notification-list--unread text-dark">
                        <div class="notification-list_detail">
                            <p>Der Status Ihres Gesuchs <br/> <b>{{ $notification->data['appl_name'] }}</b><br/>
                                <span class="text-muted">wurde geändert auf</span><br/>
                                <b>{{ $notification->data['appl_status'] }}</b></p>
                        </div>
                        <p><small>{{ $notification->created_at->diffForHumans() }}</small></p>
                    </a>
                    @endif
                @endforeach
            </div>
            <div class="notification-ui_dd-footer text-center p-3">
                <a wire:click.prevent="markAllAsRead" class="btn btn-success btn-block">Alle als gelesen markieren</a>
            </div>

        </div>

    </li>


</div>
