<div class="burger" id="burgerDiv" onclick="toggleNav()">
    <div class="burger-line"></div>
    <div class="burger-line"></div>
    <div class="burger-line"></div>
</div>

<nav id="nav">
        <ul>
          <li><a href="index.php">Home</a></li>
          <li><a href="boxing.php">Boxing</a></li>
          <li><a href="mma.php">MMA</a></li>
          <li><a href="events.php">Upcoming Events</a></li> 
          <li><a href="ranks.php">Ranks</a></li>  
        </ul>
</nav>

<script>
  
  function toggleNav() {
      var nav = document.getElementById("nav");
      
      if (nav.style.visibility === "hidden") {
          nav.style.visibility = "visible"; 
      } else {
          nav.style.visibility = "hidden";
      } // end if else
      
  } // end function showNav
    
</script>