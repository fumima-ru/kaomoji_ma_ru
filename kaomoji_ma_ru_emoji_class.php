<?php
class Emoji {
  private $emoji;
  private $pen_name;
  private $category;
}

public function __construct($emoji, $pen_name, $category) {
  $this->emoji = $emoji;
  $this->pen_name = $pen_name;
  $this->category = $category;
}

?>