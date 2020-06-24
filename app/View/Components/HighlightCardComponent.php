<?php

namespace App\View\Components;

use Illuminate\View\Component;

class HighlightCardComponent extends Component
{

    /**
     * Define the value of highlight card
     * 
     * @var mixed $value
     */
    public $value;

    /**
     * Define the title of highlight card
     * 
     * @var mixed $title
     */
    public $title;

    /**
     * Define the display icon of highlight card
     *  (Using font awesome class)
     * @var mixed $icon
     */
    public $icon;

    /**
     * Define the variant color of highlight-card
     * @var mixed $icon
     */
    public $variant;

    /**
     * Define the link of details
     * 
     * @var mixed $link
     */
    public $link; 

    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct($title, $value, $icon, $variant = 'info', $link = NULL)
    {
        $this->title = $title;
        $this->value = $value;
        $this->variant = $variant;
        $this->icon = $icon;
        $this->link = $link;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\View\View|string
     */
    public function render()
    {
        return view('components.highlight-card-component');
    }
}
