<?php 
ini_set('display_errors', 1); ini_set('display_startup_errors', 1); error_reporting(E_ALL);
include("richtexteditorphp/richtexteditor/include_rte.php"); ?>  
<?php   
	// Create Editor instance and use Text property to load content into the RTE.  
	$rte=new RichTextEditor();   
	$rte->Text="Type here"; 
	// Set a unique ID to Editor   
	$rte->ID="Editor1";    
	$rte->TempDirectory="/home/mywebsite/tmp/";    
	$rte->MvcInit();   
?>    
<html>   
<body>   
        <form id="form1" method="POST">   
            <?php     
                // Render Editor 
                echo $rte->GetString();  
            ?>   
        </form>   
</body>   
</html> 