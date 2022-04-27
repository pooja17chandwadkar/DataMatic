<!doctype html>
    <html>
    <head>
    <title>
     TIE Stealth Fighter
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
         <div style = "background-color: black;height: 350px;width: 700px;">
          <img src='SV_TIE.jpg' height="200" width="200" class="center"><br><br>
          <h1 style="color:white;margin-left: 200px;">TIE Stealth Fighter<br><br></h1>
        <div>
         
    <?php
         include 'TieFighter.php'; 	
         include 'TieFighter_SV.php' ;
        
        // Connection to db
        $connDB = mysqli_connect("localhost", "root", "", "tiefighter",3308);


        if(mysqli_connect_errno()){
            echo"Failed to conenct to MySQL:" .mysqli_connect_errno();
        }
        else{

        	
        // connection successfull
          $result = $connDB->query("select m.Model, TI.TFID, i.Status, i.cnt
										 from tieModel m inner JOIN (select Model, Status, count(*) as cnt 
										 from tieInventory group by Model, Status) i ON m.Model = i.Model
										 inner JOIN tieInventory TI 
										 ON i.Model = TI.Model and i.Status=TI.Status and m.Model=TI.Model 
										 where m.Model = 'Tie Fighter SV' 
										 order by TI.TFID ");
        
         echo"<h3>Database Connection Established</h3>";
        if($result->num_rows > 0){
         while ($row_val = $result->fetch_assoc()){
     	  echo'<h5> TFID:'.$row_val["TFID"].' Status:'.$row_val["Status"].' </h5>';
             	  
     	  if ($row_val["Status"] == 'Operational'){
     	  	$op_val = $row_val["cnt"] ;
     	  }elseif ($row_val["Status"] == 'Damaged'){
     	  	$d_val = $row_val["cnt"] ;
     	  }else{
     	    $de_val = $row_val["cnt"] ;
     	  }	 
     	}
           
    	echo'<h5>Operational:'.$op_val.'</h5>';
    	echo'<h5>Damaged:'.$d_val.' </h5>';
     	echo'<h5>Destroyed:'.$de_val.' </h5>';        
    	}else{
          echo"<h2> No Data Available </h2>";
        }
        
        }        
        // Close connection
        mysqli_close($connDB);
   
        ?>
        <div style="text-align:left"> 
        <form method="POST" >  
        <button type="button" class="button4" style="width: 50px;padding: 6px 8px;" onclick="location= 'index.php'" >HOME </button>
        <button type="button" class="button4" style="width: 80px;" onclick="location= 'TIE_SV.php'"> TIE SV Data</button>
        </form> 
        </div>
      </body>
    </html>  


