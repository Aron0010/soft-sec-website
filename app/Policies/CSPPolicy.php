<?php

namespace App\Policies;

use App\Models\User;
use Illuminate\Auth\Access\HandlesAuthorization;
use Spatie\Csp\Directive;
use Spatie\Csp\Policies\Basic;
use Spatie\Csp\Policies\Policy as pol;

class CSPPolicy extends Pol
{
    use HandlesAuthorization;

    /**
     * Create a new policy instance.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    public function configure()
    {
        $this
        ->addDirective(Directive::SCRIPT, [
            'self',
            'unsafe-inline',
            'cdn.jsdelivr.net',
            'unsafe-eval',
            'code.jquery.com',
            ])
        ->addDirective(Directive::STYLE, [
            'fonts.googleapis.com',
            'self',
            'maxcdn.bootstrapcdn.com',
            'stackpath.bootstrapcdn.com',
            'unsafe-inline'
            ])
        ->addDirective(Directive::FONT, [
            'fonts.googleapis.com',
            'fonts.gstatic.com',
            'maxcdn.bootstrapcdn.com',
            'self',
            'unsafe-inline'
            ]);
    }
}
