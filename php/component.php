<?php
  // Input Component
  function inputElement($id, $name, $icon, $value, $placeholder){
    $ele="
      <div class=\"d-flex input-group mb-3 mt-3\">
        <span class=\"input-group-text bg-dark\" id=\"$id\"><i class='$icon text-white'></i></span>
        <input type=\"text\" class=\"form-control\" name=\"$name\" value=\"$value\" placeholder=\"$placeholder\">
      </div>
    ";
    echo $ele;
  }
  // Button Component
  function buttonElement($btn_id, $style, $icon){
    $ele="
      <button type=\"button\" id=\"$btn_id\" class=\"$style\"><i class=\"$icon\"></i></button>
    ";
    echo $ele;
  }
  // Footer Component
  function footerElement(){
    $ele="
      <footer class=\"d-flex bg-dark\"></footer>
    ";
    echo $ele;
  }
?>