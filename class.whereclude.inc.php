<?php
class whereclude
{
	// get class with namespace
	// get filename
	// get full path
	public function github($class_name)
	{
		#echo "Nothing found: ", $class_name;
		$ini = parse_ini_file("paths.ini", true);
		#print_r($ini["RemoteClasses"]);
		
		$remote_url = isset($ini["RemoteClasses"][$class_name])?$ini["RemoteClasses"][$class_name]:"";
		if($remote_url)
		{
			$local_file = "remote/".md5($remote_url).".php";
			if(!is_file($local_file))
			{
				file_put_contents($local_file, file_get_contents($remote_url));
			}
			
			require_once($local_file);
		}
		//print_r($paths);
		#print_r($remote_url);
		
		// if not local file
		// download from live
		// to correct path
		// include local file
	}
}

spl_autoload_register(array(new whereclude(), "github"), false);
