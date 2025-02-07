<?php

namespace App\Livewire;

use Jantinnerezo\LivewireAlert\LivewireAlert;
use Livewire\Component;

class Welcome extends Component
{
    use LivewireAlert;
    public $portfolios = [
        'seedlings' => [],
        'plants' => [],
        'poultry' => []

    ];
    public $portfolio = [
        'seedlings' => [
            [
                'name' => 'Cashew',
                'image' => 'build/assets/img/portfolio/seedlings/1.png',
                'info' => 'Anacardium occidentale'
            ],
            [
                'name' => 'Areca palm',
                'image' => 'build/assets/img/portfolio/seedlings/Areca_palm.png',
                'info' => 'Areca catechu'
            ],
            [
                'name' => 'Oil Palm',
                'image' => 'build/assets/img/portfolio/seedlings/2.png',
                'info' => 'Elaeis guineensis'
            ],
            [
                'name' => 'Rubber',
                'image' => 'build/assets/img/portfolio/seedlings/3.png',
                'info' => 'Hevea brasiliensis'
            ],
        ],
        'plants' => [
            [
                'name' => 'Cashew',
                'image' => 'build/assets/img/portfolio/plants/Cashew.png',
                'info' => 'Anacardium occidentale'
            ],
            [
                'name' => 'Cassava',
                'image' => 'build/assets/img/portfolio/plants/Cassava.png',
                'info' => 'Manihot esculenta'
            ],
            [
                'name' => 'Papaya',
                'image' => 'build/assets/img/portfolio/plants/Papaya.png',
                'info' => 'Carica papaya'
            ],
            [
                'name' => 'Hybid Papaya',
                'image' => 'build/assets/img/portfolio/plants/Papaya2.png',
                'info' => 'Manihot esculenta.'
            ],
            [
                'name' => 'African oil palm',
                'image' => 'build/assets/img/portfolio/plants/African_oil_palm.png',
                'info' => 'Elaeis guineensis'
            ],
            [
                'name' => 'Banana',
                'image' => 'build/assets/img/portfolio/plants/Banana.png',
                'info' => 'Musa spp.'
            ],
            [
                'name' => 'Noni',
                'image' => 'build/assets/img/portfolio/plants/Noni.png',
                'info' => 'Morinda citrifolia'
            ],
            [
                'name' => 'Pears',
                'image' => 'build/assets/img/portfolio/plants/Pear.png',
                'info' => 'Purus'
            ],
            [
                'name' => 'Mango',
                'image' => 'build/assets/img/portfolio/plants/Mango.png',
                'info' => 'Mangifera indica'
            ]
        ],
        'poultry' => [
            [
                'name' => 'Royal Palm turkey',
                'image' => 'build/assets/img/portfolio/poultries/Royal_Palm_turkey.png',
                'info' => 'Meleagris gallopavo f. domestica'
            ],
            [
                'name' => 'Royal Palm',
                'image' => 'build/assets/img/portfolio/poultries/Royal_Palm.png',
                'info' => 'Meleagris gallopavo f. domestica'
            ],
            [
                'name' => 'Bronze turkey',
                'image' => 'build/assets/img/portfolio/poultries/Bronze_turkey.png',
                'info' => 'Meleagris gallopavo'
            ]
        ],
    ];
    public function mount()
    {
        // Seedlings
        $this->portfolios['seedlings'] = $this->portfolio['seedlings'];
        // Plants
        $this->portfolios['plants'] = $this->portfolio['plants'];
        // Poultry
        $this->portfolios['poultry'] = $this->portfolio['poultry'];
    }
    public function render()
    {
        return view('livewire.welcome');
    }
}
