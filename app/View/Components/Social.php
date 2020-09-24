<?php

namespace App\View\Components;

use Illuminate\View\Component;

class Social extends Component
{
    public $yt;
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct($yt)
    {
        $this->yt = $yt;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\View\View|string
     */
    public function render()
    {
        return view('components.social');
    }
}