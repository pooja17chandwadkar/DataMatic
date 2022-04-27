<!DOCTYPE html>
<html>
<head>
<style>
h5 {
  font-family: sans-serif;
}
h3 {
  font-family: sans-serif;  
  margin-bottom:0;margin-top:0;
}
</style>
</head>    
<body>

<?PHP
abstract class TieFighter{
    // Properties
        private $fModel; 
        private $fClass;
        private $fCost;
        private $fManufacturer;
        private $fLength;
        private $fWidth;
        private $fHeight;
        private $fMass;
        private $fCrew;
        private $fMaxSpeed;
        private $fMaxClimb;
        private $fArmament;
        private $fPropulsion;
        private $fHull;
    
    // Constructor 
	function __construct($fModel,$fClass,$fCost,$fManufacturer,$fLength,$fWidth,$fHeight,
                         $fMass,$fCrew,$fMaxSpeed,$fMaxClimb,$fArmament,$fPropulsion,$fHull){

        $this->fModel = $fModel;
        $this->fClass = $fClass;
        $this->fCost = $fCost;
        $this->fManufacturer = $fManufacturer;
        $this->fLength = $fLength;
        $this->fWidth = $fWidth;
        $this->fHeight = $fHeight;
        $this->fMass = $fMass;
        $this->fCrew = $fCrew;
        $this->fMaxSpeed = $fMaxSpeed;
        $this->fMaxClimb = $fMaxClimb ;
        $this->fArmament = $fArmament;
        $this->fPropulsion = $fPropulsion ;
        $this->fHull = $fHull ;
	}

    function get_fModel(){

      return $this->fModel;
    }

    function set_fModel($FM){

      $this->fModel = $FM;
    }

    function get_fClass(){

      return $this->fClass;
    }

     function set_fClass($FCLS){

      $this->fClass = $FCLS;
    }

    function get_fCost(){

      return $this->fCost;
    }

     function set_fCost($FCST){

      $this->fCost = $FCST;
    }

    function get_fManufacturer(){

      return $this->fManufacturer;
    }

     function set_fManufacturer($FMN){

      $this->fManufacturer = $FMN;
    }

    function get_fLength(){

      return $this->fLength;
    }

    function set_fLength($FL){

      $this->fManufacturer = $FL;
    }

    // Width
    function get_fWidth(){

      return $this->fWidth;
    }

    function set_fWidth($W){

      $this->fWidth = $W;
    }
   
    // height
    function get_fHeight(){

      return $this->fHeight;
    }

    function set_fHeight($H){

      $this->fHeight = $H;
    }


    // Mass 
    
    function get_fMass(){

      return $this->fMass;
    }

    function set_fMass($M){

      $this->fMass = $M;
    }

    // Hull
    
    function get_fHull(){

      return $this->fHull;
    }

    function set_fHull($FH){

      $this->fHull = $FH;
    }

    // Crew
    function get_fCrew(){

      return $this->fCrew;
    }

    function set_fCrew($FC){

      $this->fCrew = $FC;
    }

    // Max speed
    function get_fMaxSpeed(){

      return $this->fMaxSpeed;
    }

    function set_fMaxSpeed($MS){

      $this->fMaxSpeed = $MS;
    }

    // Max Climb
    function get_fMaxClimb(){

      return $this->fMaxClimb;
    }

    function set_fMaxClimb($MC){

      $this->fMaxClimb = $MC;
    }

    // Armament
    function get_fArmament(){

      return $this->fArmament;
    }

    function set_fArmament($FA){

      $this->fArmament = $FA;
    }
    
    // Propulsion
    function get_fPropulsion(){

      return $this->fPropulsion;
    }

    function set_fPropulsion($FP){

      $this->fPropulsion = $FP;
    }


    function displayFighter(){
    
    echo"<h3>Imperial Tie Spacecraft</h3>";
    echo'<h5>Model:'.$this->fModel.'  Class:'.$this->fClass.'</h5>';
    echo'<h5>Manufacturer:'.$this->fManufacturer.'</h5>';
    echo'<h5>Cost:'.$this->fCost.' Imperial Credits</h5>';

    echo'<h3>SPECIFICATIONS</h3>';
    echo'<h5>Length:'.$this->fLength.' m Width:'.$this->fWidth.' m</h5>';
    echo'<h5>Height:'.$this->fHeight.' m Mass:'.$this->fMass.' Imperial tons</h5>';
    echo'<h5>Hull Construction:'.$this->fHull.'</h5>';
    echo'<h5>Crew:'.$this->fCrew.'</h5>';
    
    echo'<h3>PERFORMANCE</h3>';
    echo'<h5>Maximum Speed:'.$this->fMaxSpeed.' m/sec</h5>';
    echo'<h5>Maximum Climb:'.$this->fMaxClimb.' m/sec</h5>';

    echo'<h3>ARMAMENT</h3>';
    echo'<h5>Armament:'.$this->fArmament.' Cannon</h5>';
  
    echo'<h3>PROPULSION</h3>';
    echo'<h5>Propulsion:'.$this->fPropulsion.'</h5>';
    }   

   abstract function displayFighterInfo(); 
}

?>
</body>
</html>



