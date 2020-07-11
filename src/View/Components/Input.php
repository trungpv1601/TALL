<?php

namespace Trungpv1601\TALL\View\Components;

use Illuminate\View\Component;

class Input extends Component
{
    public $name;

    public $label;

    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct($name, $label)
    {
        $this->name = $name;
        $this->label = $label;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\View\View|string
     */
    public function render()
    {
        return view('TALL::components.input');
    }
}
