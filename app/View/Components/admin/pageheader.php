<?php

namespace App\View\Components\admin;

use Illuminate\View\Component;

class pageheader extends Component
{
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public $modelName; // name of model in question
    public $description; // text describing activity on model
    public $addButton = false; // show add button or not

   public function __construct($modelName, $description, $addButton)
   {
       $this->modelName = $modelName;
       $this->description = $description;
       $this->addButton = $addButton;
       //
   }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.admin.pageheader');
    }
}
