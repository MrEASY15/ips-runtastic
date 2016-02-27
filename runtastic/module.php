<?
	class Runtastic extends IPSModule
	{
	
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
			$this->RegisterVariableInteger("weather_id", "Wetter-ID");
			$this->RegisterVariableInteger("feeling_id", "Feeling-ID");
			$this->RegisterVariableInteger("surface_id", "Oberflaechenbeschaffenheits-ID");
			$this->RegisterVariableInteger("year", "Jahr");
			$this->RegisterVariableInteger("month", "Monat"); // kommt als String
			$this->RegisterVariableInteger("day", "Tag"); // kommt als String
			$this->RegisterVariableInteger("hour", "Stunde");
			$this->RegisterVariableInteger("minutes", "Minute");
			$this->RegisterVariableInteger("seconds", "Sekunde");
			
			
			// Strings
			$this->RegisterVariableString("type", "Aktivitaets-Typ");
			$this->RegisterVariableString("surface", "Oberflaechenbeschaffenheit");
			$this->RegisterVariableString("weather", "Wetter");
			$this->RegisterVariableString("feeling", "Feeling");
			$this->RegisterVariableString("notes", "Notizen");
			$this->RegisterVariableString("page_url", "page_url");
			$this->RegisterVariableString("create_route_url", "create_route_url");
			$this->RegisterVariableString("map_url", "map_url");
			
			// Floats
			$this->RegisterVariableFloat("pace", "Aktivitaets-Pace");
			$this->RegisterVariableFloat("speed", "Geschwindigkeit"); // kommt als String
			$this->RegisterVariableFloat("elevation_gain", "Maximaler Höhenunterschied");
			$this->RegisterVariableFloat("elevation_loss", "Höhenunterschied");

			// TestVariable
			$this->RegisterVariableString("usr_test", "usr_test");
			
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
			
			require_once 'Runtastic.php';
			require_once 'RuntasticActivityList.php';
	
			//use Runtastic\Runtastic;
        		
			$runtastic = new Runtastic();

			$runtastic->setUsername('ich@goetzuli.com')->setPassword('Semmel15');
			$runtastic->login();
			
			$activities = $runtastic->getActivities();
//			echo "Gesamt: " . count($activities) . PHP_EOL;
			
//			echo "<pre>";
//			var_dump($activities[0]);
//			echo "</pre>";

			$Usrname = $this->ReadPropertyString("usr");
			$Pwd = $this->ReadPropertyString("pwd"); 
			SetValue($this->GetIDForIdent("usr_test"), $Usrname);
//			SetValue($this->GetIDForIdent("RainValue"), $regenmenge);
			
		}
		
	
	}

?>
