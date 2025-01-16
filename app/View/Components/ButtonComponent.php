<?php
namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class ButtonComponent extends Component
{
    public $btnTitle;
    public $modalTarget;
    public $modalLabel;
    public $contentTitle;
    public $contentLabel;
    public $contentId;
    public $formId;
    public $sbtTitle;
    public $routeAction;

    /**
     * Create a new component instance.
     */
    public function __construct($btnTitle, $modalTarget, $modalLabel, $contentTitle, $contentLabel, $contentId, $formId, $sbtTitle, $routeAction)
    {
        $this->btnTitle = $btnTitle;
        $this->modalTarget = $modalTarget;
        $this->modalLabel = $modalLabel;
        $this->contentTitle = $contentTitle;
        $this->contentLabel = $contentLabel;
        $this->contentId = $contentId;
        $this->formId = $formId;
        $this->sbtTitle = $sbtTitle;
        $this->routeAction = $routeAction;
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.button-component');
    }
}