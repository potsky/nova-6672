<?php

namespace App\Nova\Actions;

use Illuminate\Bus\Queueable;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Support\Collection;
use Laravel\Nova\Actions\Action;
use Laravel\Nova\Actions\Actionable;
use Laravel\Nova\Actions\ActionResponse;
use Laravel\Nova\Fields\ActionFields;

class ItemAction extends Action
{
    use Actionable;
    use InteractsWithQueue;
    use Queueable;

    public function handle(ActionFields $fields, Collection $models): Action|ActionResponse
    {
        return Action::message('ok');
    }

    public function name(): string
    {
        // We have a lot of Nova Actions and Resources so loading takes a while and the ajax request getActions() response arrives after the page is loaded.
        sleep(2);

        return 'Item Action';
    }
}
