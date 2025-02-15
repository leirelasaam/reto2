<?php

namespace App\View\Components\Buttons;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class Generic extends Component
{
    /**
     * Create a new component instance.
     */
    public function __construct(
        public string $route,
        public string $type,
        public string $text,
        public ?string $tooltip = null
    )
    {
        //
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.buttons.generic');
    }
}
