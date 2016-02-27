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
			
			// Integer
			$this->RegisterVariableInteger("id", "Aktivitaets-ID");
			$this->RegisterVariableInteger("type_id", "Aktivitaets-Typ-ID");
			$this->RegisterVariableInteger("duration", "Dauer");
			$this->RegisterVariableInteger("distance", "Strecke");
			$this->RegisterVariableInteger("kcal", "kcal");
			$this->RegisterVariableInteger("heartrate_avg", "Durchschnittspuls");
			$this->RegisterVariableInteger("heartrate_max", "Maximalpuls");
			$this->RegisterVariableInteger("weather_id", "Maximalpuls");
			$this->RegisterVariableInteger("feeling_id", "Maximalpuls");
			$this->RegisterVariableInteger("surface_id", "Maximalpuls");
			$this->RegisterVariableInteger("year", "Maximalpuls");
			$this->RegisterVariableInteger("month", "Maximalpuls"); // kommt als String
			$this->RegisterVariableInteger("day", "Maximalpuls"); // kommt als String
			$this->RegisterVariableInteger("hour", "Maximalpuls");
			$this->RegisterVariableInteger("minutes", "Maximalpuls");
			$this->RegisterVariableInteger("seconds", "Maximalpuls");
			
			
			// Strings
			$this->RegisterVariableString("type", "Aktivitaets-Typ");
			$this->RegisterVariableString("surface", "Aktivitaets-Typ");
			$this->RegisterVariableString("weather", "Wetter");
			$this->RegisterVariableString("feeling", "Aktivitaets-Typ");
			$this->RegisterVariableString("notes", "Notizen");
			$this->RegisterVariableString("page_url", "page_url");
			$this->RegisterVariableString("create_route_url", "create_route_url");
			$this->RegisterVariableString("map_url", "map_url");
			
			// Floats
			$this->RegisterVariableFloat("pace", "Aktivitaets-Pace");
			$this->RegisterVariableFloat("speed", "Geschwindigkeit"); // kommt als String
			$this->RegisterVariableFloat("elevation_gain", "Maximaler Höhenunterschied");
			$this->RegisterVariableFloat("elevation_loss", "Höhenunterschied");

			
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
