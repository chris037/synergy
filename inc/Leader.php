<?php
class Leader {
    private $name;
    private $designation;
    private $image;
    private $bio;
    private $email;
    
    public function __construct($name, $designation, $image, $bio, $email) {
        $this->name = $name;
        $this->designation = $designation;
        $this->image = $image;
        $this->bio = $bio;
        $this->email = $email;
    }
    
    public function getBio() {
        return $this->bio;
    }
    
    public function setBio($bio) {
        $this->bio = $bio;
    }
    
    public function getName() {
        return $this->name;
    }
    
    public function getDesignation() {
        return $this->designation;
    }
    
    public function getImage() {
        return $this->image;
    }
    
    public function setName($name) {
        $this->name = $name;
    }
    
    public function setDesignation($designation) {
        $this->designation = $designation;
    }
    
    public function setImage($image) {
        $this->image = $image;
    }
    
    public function getEmail() {
        return $this->email;
    }
    
    public function setEmail($email) {
        $this->email = $email;
    }
    
    public function generateHtml() {
        $html = '<div class="speaker-block-two col-xl-4 col-lg-4 col-md-6 col-sm-12 wow fadeInUp" data-email="' . $this->email . '">';
        $html .= '<div class="inner-box">';
        $html .= '<div class="info-box">';
        $html .= '<h4 class="name"><a href="#">' . $this->name . '</a></h4>';
        $html .= '<span class="designation">' . $this->designation . '</span>';
        $html .= '<p class="bio hidden">' . $this->bio. '</p>';
       
        $html .= '</div>';
        $html .= '<div class="image-box">';
        $html .= '<figure class="image"><a href="#"><img src="' . $this->image . '" alt=""></a></figure>';
        $html .= '<p class="email" style="padding-top: 16px; font-size: 16px;">' . $this->email . '</p>';
        $html .= '</div>';
        $html .= '</div>';
        $html .= '</div>';
        
        return $html;
    }
}


?>