<?php

namespace Trungpv1601\TALL\View\Components;

use Illuminate\View\Component;

class SidebarDesktopNavItem extends Component
{
    public $label;
    public $url;
    public $icon;
    public $route;

    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct($label, $url = false, $icon = false, $route = false)
    {
        $this->label = $label;
        $this->url = boolval($url) ? $url : false;
        $this->icon = $icon;
        $this->route = boolval($route) ? $route : false;
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
