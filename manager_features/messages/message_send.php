<?php
session_start();
include_once('../../dashboards/manager/sidenav_manager.php');
?>
<!DOCTYPE html>
<html lang="en">
    <head>
      <meta charset="UTF-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <title>Send Message</title>
        <link rel="stylesheet" href="../../data/public/css/styles.css" />
      </head>

    
</head>
<body>
    
    <body>
            <div class="container3" >
       
        <h2>Send Message to Resident</h2>
        <form>
            <div class="form-group">
                <label for="Text">Message</label>
                <input type="text" id="text" name="text" >
            </div>
            <div class="form-group">
                <label for="floor">Floor</label>
                <input type="number" id="floor" name="text" >
                <br>
                <br>
                <label for="floor">Door</label>
                <input type="number" id="floor" name="text" >
            </div><input type="submit" value="Send Message" style="display: block; margin-bottom:  2vh; margin-left:17vw">
        </form>
    </div>
            </div>
        </div>
    </div>
</body>
</html>