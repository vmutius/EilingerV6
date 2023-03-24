<?php

namespace App\Enums;

enum ApplStatus {
    const NOT_SEND = 'Not Send';
    const PENDING = 'Pending';
    const WAITING = 'Waiting';
    const COMPLETE = 'Complete';
    const APPROVED = 'Approved';
    const BLOCKED = 'Blocked';
    const FINISHED = 'Finished';
}