<?php

namespace Trungpv1601\TALL\View\Components;

use Illuminate\View\Component;

class Row extends Component
{
    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\View\View|string
     */
    public function render()
    {
        return view('TALL::components.row');
    }
}
