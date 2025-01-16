<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class TreeView extends Component
{
    public $title;
    public $items;
    public $subitems;
    public $hasSub;

    /**
     * Create a new component instance.
     */
    public function __construct($title, $items, $subitems = null, $hasSub = true)
    {
        $this->title = $title;
        $this->items = $items;
        $this->subitems = $subitems;
        $this->hasSub = $hasSub;
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.tree-view');
    }
}