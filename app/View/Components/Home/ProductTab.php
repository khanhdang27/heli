<?php

namespace App\View\Components\Home;

use Illuminate\Support\Facades\DB;
use Illuminate\View\Component;

class ProductTab extends Component
{
    public $IGCSE;
    public $UKISET;
    public $IELTS;
    public $IAL;
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct(
        $courseIGCSE,
        $courseUKISET,
        $courseIELTS,
        $courseIAL
    )
    {
        $this->IGCSE = $courseIGCSE; 
        $this->UKISET = $courseUKISET; 
        $this->IELTS = $courseIELTS; 
        $this->IAL = $courseIAL; 
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\View\View|string
     */
    public function render()
    {

        return view('components.home.product-tab',[
            'courseIGCSE' => $this->IGCSE,
            'courseUKISET' => $this->UKISET,
            'courseIELTS' => $this->IELTS,
            'courseIAL' => $this->IAL,
        ]);
    }
}
