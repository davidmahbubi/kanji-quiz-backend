<?php

namespace App\View\Components;

use Illuminate\View\Component;

class CardComponent extends Component
{

    /**
     * To define the directions of content
     * 
     * @var mixed|string $direction
     */
    public $direction;

    /**
     * To define of column's size
     * (Using bootstrap column guide)
     * 
     * @var mixed $length
     */
    public $cols;

    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct($cols = 'col', $direction = 'left')
    {
        $this->cols = $cols;
        $this->direction = $direction;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\View\View|string
     */
    public function render()
    {
        return view('components.card-component');
    }
}
