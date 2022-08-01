<?php

namespace App\View\Components\Home;

use Illuminate\Support\Arr;
use Illuminate\View\Component;
use function url;
use function view;

class Portfolio extends Component
{
    public array $items = [];

    public array $tabs = [];

    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->items = [
            [
                'category' => ['Laravel', 'Tailwind.css', 'Alpinejs'],
                'title' => 'Full Responsive portfolio  ',
                'image' => url('/img/laravel.png'),
                'github' => 'https://github.com'
            ],
            [
                'category' => ['CSS' ,'HTML','JAVASCRIPT'],
                'title' => 'Single page personal portfoliio',
                'image' => url('/img/hem.png'),
                'github' => 'https://github.com/heamanbelay/heman_portfolio/tree/main/portfolio'
            ],
            [
                'category' => ['PHP', 'CSS' ,'HTML','JAVASCRIPT'],
                'title' => 'hospital management system',
                'image' => url('/img/boot.png'),
                'github' => 'https://github.com/heamanbelay/hospital-management-system/tree/main'
            ],
            [
                'category' => ['Flutter'],
                'title' => 'Mobile application',
                'image' => url('/img/flutt.jpg'),
                'github' => 'https://github.com'
            ],
            
        ];

        $this->tabs = array_unique(Arr::flatten(Arr::pluck($this->items, 'category')));
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.home.portfolio');
    }
}
