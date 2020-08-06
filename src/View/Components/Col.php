<?php

namespace Trungpv1601\TALL\View\Components;

use Illuminate\View\Component;

class Col extends Component
{
    public $col;

    public function __construct($col = 6)
    {
        $this->col = $col;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\View\View|string
     */
    public function render()
    {
        return view('TALL::components.col');
    }
}
