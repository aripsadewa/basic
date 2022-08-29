<?php

namespace App\View\Components;

use Illuminate\View\Component;

class Navbar extends Component
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
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        $navbar = [
            [
                'menu' => 'Home',
                'url' => '/',
                'name' => '/'
            ],
            [
                'menu' => 'About',
                'url' => '/about',
                'name' => 'about'
            ],
            [
                'menu' => 'Post',
                'url' => '/posts',
                'name' => 'posts'
            ]
            // 'Home' => '/',
            // 'About' => '/about'
        ];
        // dd($navbar);

        return view('layouts.navbar', compact('navbar'));
    }
}
