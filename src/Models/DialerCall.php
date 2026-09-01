<?php

declare(strict_types=1);

namespace Liberu\CRM\DialerAndOutreach\Models;

use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Liberu\Foundation\Organizations\Models\Team;
use Illuminate\Database\Eloquent\Model;

/**
 * @property int $team_id
 * @property int $list_id
 * @property string $status
 * @property int $attempts
 */
final class DialerCall extends Model
{
    public function team(): BelongsTo
    {
        return $this->belongsTo(Team::class);
    }

    protected $table = 'crm_dialer_calls';

    protected $guarded = [];

    protected function casts(): array
    {
        return ['voicemail_dropped' => 'boolean', 'next_attempt_at' => 'datetime', 'completed_at' => 'datetime'];
    }
}
