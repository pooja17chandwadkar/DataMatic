<!DOCTYPE html>
<html>
<body>

<?PHP 
class TieFighter_B extends TieFighter {

	Private $fID;
	Private $fLocation;
	Private $fStatus;

	function __construct(	$fModel, $fClass,$fCost,$fManufacturer,$fLength,$fWidth,$fHeight,
                         $fMass,$fCrew,$fMaxSpeed,$fMaxClimb,$fArmament,$fPropulsion,$fHull,$fID,$fLocation,$fStatus){
		parent::__construct($fModel, $fClass,$fCost,$fManufacturer,$fLength,$fWidth,$fHeight,
                         $fMass,$fCrew,$fMaxSpeed,$fMaxClimb,$fArmament,$fPropulsion,$fHull);
		
		$this->fID = $fID;
		$this->fLocation = $fLocation;
		$this->fStatus = $fStatus;
    }	

    function displayFighterInfo(){
    
		    echo"<h3>Imperial Tie Spacecraft</h3>";
		    echo'<h5>Model:'.$this->get_fModel().'  Class:'.$this->get_fClass().'</h5>';
		    echo'<h5>Manufacturer:'.$this-> get_fManufacturer().'</h5>';
		    echo'<h5>Cost:'.$this->get_fCost().' Imperial Credits</h5>';

		    echo'<h3>SPECIFICATIONS</h3>';
		    echo'<h5>Length:'.$this->get_fLength().' m Width:'.$this->get_fWidth().' m</h5>';
		    echo'<h5>Height:'.$this->get_fHeight().' m Mass:'.$this->get_fMass().' Imperial tons</h5>';
		    echo'<h5>Hull Construction:'.$this->get_fHull().'</h5>';
		    echo'<h5>Crew:'.$this->get_fCrew().'</h5>';
		    
		    echo'<h3>PERFORMANCE</h3>';
		    echo'<h5>Maximum Speed:'.$this->get_fMaxSpeed().' m/sec</h5>';
		    echo'<h5>Maximum Climb:'.$this->get_fMaxClimb().' m/sec</h5>';

		    echo'<h3>ARMAMENT</h3>';
		    echo'<h5>Armament:'.$this->get_fArmament().' Cannon</h5>';
		  
		    echo'<h3>PROPULSION</h3>';
		    echo'<h5>Propulsion:'.$this->get_fPropulsion().'</h5>';
    }   
 

}
?>
</body>
</html>



