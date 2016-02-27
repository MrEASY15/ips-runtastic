<?

	class Runtastic extends IPSModule
	{
		
		private $imagePath;
		
		public function __construct($InstanceID)
		{
			//Never delete this line!
			parent::__construct($InstanceID);
			
			//You can add custom code below.
			//$this->imagePath = "media/radar".$InstanceID.".gif";
			
		}
		
		public function Create()
		{
			//Never delete this line!
			parent::Create();
			
			//$this->RegisterPropertyString("area", "dsch");
			//$this->RegisterPropertyInteger("homeX", 324);
			//$this->RegisterPropertyInteger("homeY", 179);
			//$this->RegisterPropertyInteger("homeRadius", 10);
			
		}		
	
		public function ApplyChanges()
		{
			//Never delete this line!
			parent::ApplyChanges();
			
			$this->RegisterVariableInteger("TestVariable", "und der Text");

			//$this->RegisterMediaImage("RadarImage", "Radarbild", $this->imagePath);
			//$this->RegisterEventCyclic("UpdateTimer", "Automatische aktualisierung", 15);
			
		}
	
		/**
		* This function will be available automatically after the module is imported with the module control.
		* Using the custom prefix this function will be callable from PHP and JSON-RPC through:
		*
		* UWZ_RequestInfo($id);
		*
		*/
		public function RequestInfo()
		{
		

			SetValue($this->GetIDForIdent("TestVariable"), 15);
//			SetValue($this->GetIDForIdent("RainValue"), $regenmenge);
			
		}
	
	}

?>
