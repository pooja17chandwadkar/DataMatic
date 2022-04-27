<!doctype html>
  <html>
  <head>
    <title>
     Project 2
    </title>
    <style>

 h1 {
            font-family: sans-serif;
        }
.button4 {
  appearance: none;
  background-color: #FAFBFC;
  border: 0.5px solid black;
  border-radius: 6px;
  box-shadow: rgba(27, 31, 35, 0.04) 0 1px 0, rgba(255, 255, 255, 0.25) 0 1px 0 inset;
  box-sizing: border-box;
  color: #24292E;
  cursor: pointer;
  display: inline-block;
  font-family: -apple-system, system-ui, "Segoe UI", Helvetica, Arial, sans-serif, "Apple Color Emoji", "Segoe UI Emoji";
  font-size: 14px;
  font-weight: 500;
  line-height: 20px;
  list-style: none;
  padding: 6px 28px;;
  position: relative;
  transition: background-color 0.2s cubic-bezier(0.3, 0, 0.5, 1);
  user-select: none;
  -webkit-user-select: none;
  touch-action: manipulation;
  vertical-align: middle;
  white-space: nowrap;
  word-wrap: break-word;
  width: 120px;
}

.button-4:hover {
  background-color: #F3F4F6;
  text-decoration: none;
  transition-duration: 0.1s;
}

.button-4:disabled {
  background-color: #FAFBFC;
  border-color: black;
  color: #959DA5;
  cursor: default;
}

.button-4:active {
  background-color: #EDEFF2;
  box-shadow: rgba(225, 228, 232, 0.2) 0 1px 0 inset;
  transition: none 0s;
}

.button-4:focus {
  outline: 1px black;
}

.button-4:before {
  display: none;
}

.button-4:-webkit-details-marker {
  display: none;
}
</style>
  </head>
  <body>
    <h4 style="text-align:center;font-family: sans-serif;">Project 2 created by Pooja Chandwadkar IS-667 Spring 2022 </h4>
    <h1 style="text-align:center;font-family: sans-serif;">Imperial TIE Spacecraft Construction Facility</h1>
    <p align="center"> <img  src='EmpireLogo.png' height="200" width="200">
     
    <div style="text-align:center;">
    <form method="post"> 
    <button type="button" onclick="location='SInventory.php'" style="background-color:black;color:white;" >TIE S Inventory</button>
    
    <form method="post">
    <button type="button"  onclick="location='IInventory.php'" style="background-color:black;color:white;">TIE I Inventory</button>

    <form method="post">
    <button type="button"  onclick="location='SVInventory.php'" style="background-color:black;color:white;">TIE SV Inventory</button>

    <form method="post" >
    <button type="button" onclick="location='BInventory.php'" style="background-color:black;color:white;">TIE B Inventory</button>
  </div>

    <form method="post" >
    <button type="button" class="button4" onclick="location='TIE_S.php'">TIE S Data</button><br><br>      
    </form>
      
    <form method="post" >
    <button type="button" class="button4" onclick="location='TIE_I.php'">TIE I Data</button><br><br>  
    </form>
    
    <form method="post" >
    <button type="button" class="button4" onclick="location='TIE_SV.php'">TIE SV Data</button><br><br> 
    </form>
     
    <Form method="post">
    <button type="button" class="button4" onclick="location='TIE_B.php'">TIE B Data</button><br><br> 
    </form>
  </body>
  </html> 


   