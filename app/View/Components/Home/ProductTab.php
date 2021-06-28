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
    public function __construct($courses)
    {
        $this->IGCSE = clone $courses; 
        $this->UKISET = clone $courses; 
        $this->IELTS = clone $courses; 
        $this->IAL = clone $courses; 
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\View\View|string
     */
    public function render()
    {
        // DB::enableQueryLog();

        $this->IGCSE->whereHas('membershipCourses.course.subject.certificate', function ( $query )
        {
            return $query->where('id', 1);
        })->get();
        
        $this->UKISET->whereHas('membershipCourses.course.subject.certificate', function ( $query )
        {
            return $query->where('id', 2);
        })->get();
        
        $this->IELTS->whereHas('membershipCourses.course.subject.certificate', function ( $query )
        {
            return $query->where('id', 3);
        })->get();
        
        $this->IAL->whereHas('membershipCourses.course.subject.certificate', function ( $query )
        {
            return $query->where('id', 4);
        })->get();

        return view('components.home.product-tab',[
            'courseIGCSE' => $this->IGCSE->get(),
            'courseUKISET' => $this->UKISET->get(),
            'courseIELTS' => $this->IELTS->get(),
            'courseIAL' => $this->IAL->get(),
        ]);
    }
}
