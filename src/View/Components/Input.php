<?php

namespace Trungpv1601\TALL\View\Components;

use Illuminate\View\Component;

class Input extends Component
{
    public $name;

    public $label;

    public $required;

    public $disabled;

    public $readonly;

    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct($name, $label, $required = false, $disabled = false, $readonly = false)
    {
        $this->name = $name;
        $this->label = $label;
        $this->required = $required;
        $this->disabled = $disabled;
        $this->readonly = $readonly;
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
