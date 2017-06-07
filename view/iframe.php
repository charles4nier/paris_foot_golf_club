<iframe id='iframe'
 <?php
  if ($_SESSION['source'])
  {
    echo "src='" . $_SESSION['source'] . "' ";
  }
  else
  {
    echo "src='https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2624.6117239942373!2d2.6621683156746383!3d48.865613979288256!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47e61ac1221ac1d3%3A0x615ddb66a7da1135!2sGolf+de+Torcy!5e0!3m2!1sfr!2sfr!4v1496136129002'";
  }
  ?>
  frameborder='0' style='border:0; width: 575px; height: 426px;' allowfullscreen></iframe>
