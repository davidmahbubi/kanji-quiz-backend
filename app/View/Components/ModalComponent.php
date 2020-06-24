<?php

namespace App\View\Components;

use Illuminate\View\Component;

class ModalComponent extends Component
{

    /**
     * Define the ID of this modal
     * 
     * @var mixed $id
     */
    public $id;

    /**
     * Define the title of this modal
     * 
     * @var mixed $title
     */
    public $title;

    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct($id, $title = 'Untitled Modal')
    {
        $this->id = $id;
        $this->title = $title;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\View\View|string
     */
    public function render()
    {
        return view('components.modal-component');
    }
}
