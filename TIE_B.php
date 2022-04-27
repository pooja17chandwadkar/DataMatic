<!doctype html>
    <html>
    <head>
    <title>
     TIE Attack Fighter
    </title>
    <style>
    h1 {
            font-family: sans-serif;
    }

    .button4 {
  appearance: none;
  background-color:black;
  color:white;
  border: 2px solid red;
  border-radius: 6px;
  border-color:deeppink;
  box-shadow: rgba(27, 31, 35, 0.04) 0 1px 0, rgba(255, 255, 255, 0.25) 0 1px 0 inset;
  box-sizing: border-box;
  cursor: pointer;
  display: inline-block;
  font-family: -apple-system, system-ui, "Segoe UI", Helvetica, Arial, sans-serif, "Apple Color Emoji", "Segoe UI Emoji";
  font-size: 10px;
  font-weight: 500;
  line-height: 20px;
  list-style: none;
  padding: 6px 15px;;
  position: relative;
  transition: background-color 0.2s cubic-bezier(0.3, 0, 0.5, 1);
  user-select: none;
  -webkit-user-select: none;
  touch-action: manipulation;
  vertical-align: middle;
  white-space: nowrap;
  word-wrap: break-word;
  
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

.center{
        display: block;
        margin-left: auto;
        margin-right: auto;
       }
    </style>
    </head>
    <body>


         <div style="background-color: black;width: 800px;">
          <img src='B_TIE.jpg' height="200" width="200" class="center"><br><br>
        <h1 aligh="center"; style="color:white;margin-left: 300px;">TIE Attack Fighter<br><br>
         </div>
        <?php
         include 'TieFighter.php';   
         include 'TieFighter_B.php' ;
    

        // Connection to db
        $connDB = mysqli_connect("localhost", "root", "", "tiefighter",3308);


        if(mysqli_connect_errno()){
            echo"Failed to conenct to MySQL:" .mysqli_connect_errno();
        }
        else{
        // connection successfull
          $result = $connDB->query("SELECT m.Model, m.Class, m.Cost, m.Manufacturer,
                                        s.Length, s.Width, s.Height, s.Mass, s.Crew,
                                        P.MaxSpeed, p.MaxClimb, pr.Propulsion, co.Hull, CONCAT(ar.cannons,'  x ',
                                        ar.CannonType) as Armament
                                        from tieModel m inner JOIN tieSpecifications s
                                        ON m.Model = s.Model
                                        inner join tiePerformance p
                                        ON m.Model = p.Model
                                        inner join tiePropulsion pr
                                        ON m.Model = pr.Model
                                        inner join tieConstruction co
                                        ON m.Model = co.Model
                                        inner join tieArmament ar
                                        ON m.Model = ar.Model
                                        where m.Model = 'Tie Fighter B' ");

        if($result->num_rows > 0){
         while ($row_val = $result->fetch_assoc()){
            $tieBobj= new TieFighter_B( $row_val["Model"], $row_val["Class"], $row_val["Cost"], $row_val["Manufacturer"], $row_val["Length"], $row_val["Width"], $row_val["Height"], $row_val["Mass"], $row_val["Crew"], $row_val["MaxSpeed"], $row_val["MaxClimb"], $row_val["Armament"], $row_val["Propulsion"], $row_val["Hull"],' ','',' ');

          
          echo "<h2>" .$tieBobj->displayFighterInfo(). "</h2>";
        }
        }else{
          echo"<h2> No Data Available </h2>";
        }
        
        }        
        // Close Connection
        mysqli_close($connDB);
   
        ?>
        <div style="text-align:left"> 
        <form method="POST" >  
        <button type="button" class="button4" onclick="location= 'index.php'" >HOME </button>
        <button type="button" class="button4" style="width: 100px;" onclick="location= 'BInventory.php'">TIE B Inventory</button>
        </form> 
        </div>
      </body>
    </html>  


