<?php

namespace Trungpv1601\TALL\View\Components;

use Illuminate\View\Component;

class SidebarDesktopNavItem extends Component
{
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\View\View|string
     */
    public function render()
    {
        return view('TALL::components.sidebar-desktop-nav-item');
    }
}
