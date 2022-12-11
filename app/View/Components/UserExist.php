<?php

namespace App\View\Components;

use App\Models\User;
use Illuminate\View\Component;

class UserExist extends Component
{
    /**
     * Create a new component instance.
     *
     * @return void
     */

     // check if a user exist in database.
    public function companyAdmin(): bool {
        return (User::count() > 1);
    }

    public function __construct()
    {
        //
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.user-exist');
    }
}
