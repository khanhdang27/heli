<?php

namespace App\View\Components\ProductDetail;

use Illuminate\View\Component;

class CourseTutor extends Component
{
    private $_tutorPhoto = "";
    private $_tutorName = "";
    private $_tutorInfo = "";
    private $_tutorLevel = "";
    private $_tutorSpecialized = "";
    private $_tutorExperience = "";

    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct
    (
        $tutorPhoto,
        $tutorName,
        $tutorInfo,
        $tutorLevel,
        $tutorSpecialized,
        $tutorExperience
    )
    {
        $this->_tutorPhoto = $tutorPhoto;
        $this->_tutorName = $tutorName;
        $this->_tutorInfo = $tutorInfo;
        $this->_tutorLevel = $tutorLevel;
        $this->_tutorSpecialized = $tutorSpecialized;
        $this->_tutorExperience = $tutorExperience;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\View\View|string
     */
    public function render()
    {
        return view('components.product-detail.course-tutor', [
            'tutor_photo' => $this->_tutorPhoto,
            'tutor_name' => $this->_tutorName,
            'tutor_info' => $this->_tutorInfo,
            'tutor_level' => $this->_tutorLevel,
            'tutor_specialized' => $this->_tutorSpecialized,
            'tutor_experience' => $this->_tutorExperience
        ]);
    }
}
