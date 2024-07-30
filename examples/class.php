<?php
class Fruits{
  public $name;
  public $color;

  // Methods
  function set_name($name) {
    $this->name = $name;
  }
  function get_name() {
    return $this->name;
  }
}

$apple = new Fruit();
$banana = new Fruit();
$apple->set_name('Apple');
$banana->set_name('Banana');

echo $apple->get_name();
echo "<br>";
echo $banana->get_name();
echo "<br>";
echo "<br>";
class Fruit {
    public $name;
    public $color;
  
    // Methods
    function set_name($name) {
      $this->name = $name;
    }
    function get_name() {
      return $this->name;
    }
    function set_color($color) {
      $this->color = $color;
    }
    function get_color() {
      return $this->color;
    }
  }
  
  $apple = new Fruit();
  $apple->set_name('Apple');
  $apple->set_color('Red');
  echo "Name: " . $apple->get_name();
  echo "<br>";
  echo "Color: " . $apple->get_color();
  echo "<br>";
  echo "<br>";
  
class Book {
    // Properties
    public $title;
    public $author;
    
    function set_title($title) {
        $this->title = $title;
      }
      function get_title() {
        return $this->title;
      }
      function set_author($author) {
        $this->author= $author;
      }
      function get_author() {
        return $this->author;
      }
    }

    $ToKillaMockingbird = new book();
    $ToKillaMockingbird->set_title('The Great Gatsby');
    $ToKillaMockingbird->set_author('George Orwell');
    echo "Title: " . $ToKillaMockingbird->get_title();
    echo "<br>";
    echo "Author: " . $ToKillaMockingbird->get_author();
    

  
