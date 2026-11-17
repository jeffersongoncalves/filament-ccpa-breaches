<?php

namespace JeffersonGoncalves\Filament\CcpaBreaches\Support;

use Illuminate\Support\Carbon;
use JeffersonGoncalves\CcpaBreaches\Models\Breach;

class Labels
{
    public static function notification(?bool $required): string
    {
        return __('filament-ccpa-breaches::filament-ccpa-breaches.notification.'.match ($required) {
            true => 'required',
            false => 'not_required',
            null => 'pending',
        });
    }

    public static function notificationColor(?bool $required): string
    {
        return match ($required) {
            true => 'danger',
            false => 'success',
            null => 'warning',
        };
    }

    public static function status(Breach $breach): string
    {
        return match (true) {
            $breach->closed_at !== null => 'closed',
            $breach->isOverdue() => 'overdue',
            $breach->owesResidentNotice() || $breach->owesAttorneyGeneralNotice() => 'pending',
            default => 'open',
        };
    }

    public static function statusColor(string $status): string
    {
        return match ($status) {
            'closed' => 'gray',
            'overdue' => 'danger',
            'pending' => 'warning',
            default => 'info',
        };
    }

    public static function date(mixed $value): Carbon
    {
        return Carbon::parse($value);
    }
}
