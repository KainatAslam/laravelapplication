<?php

namespace App\Enums;

enum TicketStatus :string
{
case Open = 'open';
case Resolved = 'resolved';
case Rejected = 'rejected';
}
