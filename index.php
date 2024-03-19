<!DOCTYPE html>
<html>
  <head>
    <title>User Input but with php</title>
  </head>
  <body>
    <?php echo "<p>User Input but in php</p>" ?>
    <form action="./reader.php" method="post" target="result">
      <label for="first-name">First Name:</label>
      <input type="text" id="first-name" placeholder="Your Name" name="first-name"><br><br>
      <label for="fav-food">Favourite food:</label>
      <input type="text" id="Favourite food" placeholder="Your Favourite Food" name="fav-food"><br><br>
      <input type="submit" value="Enter">
      
      <br>
      <br>
      
    </form>
    
      <div id="result"></div>
    
      <iframe id="result" name="result">
        Your first name is <?php echo $_POST["first-name"]; ?> and your age is <?php echo $_POST["fav-food"]; ?>.
      </iframe>
    
  </body>
  
</html>