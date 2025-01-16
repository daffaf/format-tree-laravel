<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class ButtonSubComponent extends Component
{
    /**
     * Create a new component instance.
     */
    public $btnTitle;
    public $modalTarget;
    public $modalLabel;
    public $contentTitle;
    public $contentLabel;
    public $contentId;
    public $formId;
    public $sbtTitle;
    public $routeAction;
    public $items;
    public $selectLabel;
    public $selectId;
    public $selectTitle;

    public function __construct($btnTitle, $items, $modalTarget, $modalLabel, $contentTitle, $contentLabel, $contentId, $formId, $sbtTitle, $routeAction, $selectLabel, $selectId)
    {
        //
        $this->btnTitle = $btnTitle;
        $this->modalTarget = $modalTarget;
        $this->modalLabel = $modalLabel;
        $this->contentTitle = $contentTitle;
        $this->contentLabel = $contentLabel;
        $this->contentId = $contentId;
        $this->formId = $formId;
        $this->sbtTitle = $sbtTitle;
        $this->routeAction = $routeAction;
        $this->items = $items;
        $this->selectLabel = $selectLabel;
        $this->selectId = $selectId;
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.button-sub-component');
    }
}
