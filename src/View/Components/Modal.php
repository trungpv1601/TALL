<?php

namespace Trungpv1601\TALL\View\Components;

use Illuminate\View\Component;

class Modal extends Component
{
    public $open;

    public $title;

    public $toogle;

    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct($open, $title = false, $toogle)
    {
        $this->open = $open;
        $this->title = $title;
        $this->toogle = $toogle;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\View\View|string
     */
    public function render()
    {
        return view('TALL::components.modal');
    }
}
