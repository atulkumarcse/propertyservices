<?php

namespace App\Http\Middleware;

use Closure;
use Filament\Facades\Filament;
use App\Models\Team;
use Illuminate\Http\Request;

class AssignDefaultTeam
{
    // public function handle(Request $request, Closure $next)
    // {

    //     // if (!Filament::getTenant() && auth()->check()) {
    //     //     $user = auth()->user();
    //     //     $defaultTeam = $user->currentTeam ?? $user->ownedTeams()->first();
    //     //     if (!$defaultTeam) {
    //     //         $defaultTeam = $user->ownedTeams()->create([
    //     //             'name' => $user->name . "'s Team",
    //     //             'personal_team' => true,
    //     //         ]);
    //     //         $user->current_team_id = $defaultTeam->id;
    //     //         $user->save();
    //     //     }
    //     //     Filament::setTenant($defaultTeam);
    //     // }
    //     // return $next($request);
    // }

    public function handle($request, Closure $next)
    {
        $user = auth()->user();

        if (! $user) {
            return $next($request);
        }

        $defaultTeam = $user->teams()->first(); // or however you define default

        if (! $defaultTeam) {
            // 🚨 IMPORTANT: do NOT call setTenant if null
            return $next($request);
        }

        if (! $user->current_team_id) {
            $user->current_team_id = $defaultTeam->id;
            $user->save();
        }

        // ✅ Safe tenant assignment
        Filament::setTenant($defaultTeam);

        return $next($request);
    }


}