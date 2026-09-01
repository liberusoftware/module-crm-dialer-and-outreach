<?php

declare(strict_types=1);

namespace Liberu\CRM\DialerAndOutreach\Models;

use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Liberu\Foundation\Organizations\Models\Team;
use Illuminate\Database\Eloquent\Model;

/** @property int $team_id @property string $mode @property string $status */
final class DialerList extends Model
{
    public function team(): BelongsTo
    {
        return $this->belongsTo(Team::class);
    }

    protected $table = 'crm_dialer_lists';

    protected $guarded = [];

    protected function casts(): array
    {
        return ['local_time_policy' => 'array', 'compliance' => 'array', 'script' => 'array'];
    }
}
