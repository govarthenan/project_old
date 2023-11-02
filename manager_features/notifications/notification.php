<?php
session_start();
include_once('../../dashboards/manager/sidenav_manager.php');
?>
<!DOCTYPE html>
<html lang="en">
    <head>
      <meta charset="UTF-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <title>Notification</title>
        <link rel="stylesheet" href="../../data/public/css/styles.css" />
      </head>

    
</head>
<body>
    
    <body>
            <div class="container3" >
       
        <h2>Notification</h2>
        <form>
            <div class="form-group">
                <label for="subject">Subject </label>
                <input type="text" id="subject" name="subject" >
            </div>
            <div class="form-group">
                <label for="Text">Text</label>
                <input type="text" id="text" name="text" >
            </div>
            <div class="form-group">
            <label for="notification-category">Notification catergory:</label>
              <select id="notification-catergory" name="notification-catergory" required>
                  <option value="1">Service   </option>
                  <option value="2">Maintenance   </option>
                  <option value="2">Security  </option>
                  <option value="2">General  </option>
              </select>
            </div><input type="submit" value="Send Notification" style="display: block; margin-bottom:  2vh; margin-left:17vw">
        </form>
    </div>
            </div>
        </div>
    </div>
</body>
</html>