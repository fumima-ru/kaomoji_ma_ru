<?php
class Emoticon {
  private $emoticon;
  private $pen_name;
  private $category;

  public function __construct($emoticon, $pen_name, $category) {
    $this->emoticon = $emoticon;
    $this->pen_name = $pen_name;
    $this->category = $category;
  }
  
  public function getEmoticon() {
    return $this->emoticon;
  }
  
  public function getPen_name() {
    return $this->pen_name;
  }
  
  public function getCategory() {
    return $this->category;
  }
}

?>