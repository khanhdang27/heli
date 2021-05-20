<?php

namespace App\View\Components\Product;

use Illuminate\View\Component;

class ProductBox extends Component
{
    private $_subject = "";
    private $_subtitle = "";
    private $_description = "";
    private $_courseName = "";
    private $_tutor = "";
    private $_price = "";

    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct(
        $subject,
        $subtitle,
        $description,
        $courseName,
        $tutor,
        $price
    )
    {
        $this->_subject = $subject;
        $this->_subtitle = $subtitle;
        $this->_description = $description;
        $this->_courseName = $courseName;
        $this->_tutor = $tutor;
        $this->_price = $price;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\View\View|string
     */
    public function render()
    {
        return view('components.product.product-box', [
            'subject' => $this->_subject,
            'subtitle' => $this->_subtitle,
            'description' => $this->_description,
            'courseName' => $this->_courseName,
            'tutor' => $this->_tutor,
            'price' => $this->_price,
        ]);
    }
}
