<?php
//========================================================================
// Module: shared.php
// 
//========================================================================
?>
<?php
	error_reporting(E_ALL);
	ini_set( 'display_errors','0');

    date_default_timezone_set("America/New_York");

	// General Info ( Don't Edit)
	$siteName 		= "SlaughterHouse";
	$siteAuthor 	= "";
	$siteCopyright 	= "&copy; Copyright (C) Slaughter House  2015 .";

	// Site Root
	$siteRoot 		= "/";
	
	// Home Settings
	// Slider Settings
	// (Title, Description, Link, Img)
	
	$slides = array( 
	
		array(	"title"  => "", 
				"desc" => "", 
				"link" => "", 
				"img"  => "http://www.entertheslaughterhouse.com/core/images/shimage1.jpg"
			 ),		
		array(	"title"  => "", 
				"desc" => "", 
				"link" => "", 
				"img"  => "http://www.entertheslaughterhouse.com/core/images/TEW.png"
			 ),		
		array(	"title"  => "", 
				"desc" => "", 
				"link" => "", 
				"img"  => "http://www.entertheslaughterhouse.com/core/images/SHP.jpg"
			 ),
	);
	
	// Staff Settings
	// (Title, Description, Link, Img)
	
	$staffList = array( 
	
		array(	"name"  => "", 
				"rank" => "Server Owner", 
			 ),
		array(	"name"  => "", 
				"rank" => "Server Owner", 
			 ),		
		array(	"name"  => "", 
				"rank" => "Developer", 
			 ),
	
		
	);
	
	
	$homeSum = "
	
	Check our Forums for frequent updates!
	<BR>
	<BR>
	<BR>
	
	
	";	
	$aboutUs = "
	
	Status : Online
	<BR>
	<BR>
	<BR>
	
	
	";
		
	
	// Google Drive Download
	$gDriveText		= "Launcher";
	$gDriveLink 	= "";
	$g2DriveText	= "Full Client";
	$g2DriveLink 	= "";
	
	// Mega Download
	$fcText 		= "Launcher ";
	$fcLink			= "";
	$lText			= "Full Client";
	$lLink			= "";
	
	// Database Info
	$db_user   		= "wz_api_user";
	$db_pass   		= "password";
	$db_dbname 		= "WarZ";
	$db_serverName  = "localhost,1433";
	  

	
	
	//Shop Items
	$shop_prices = array(
							"GC01"		=> array(5.00,	5.00,	-1,	0,	"25,000 Gold Credits"),
							"GC02"		=> array(7.50,	7.50,	-1,	0,	"50,0000 Gold Credits"),
							"GC03"		=> array(10.00,	10.00,	-1,	0,	"75,000 Gold Credits"),
							"GC04"		=> array(12.50,	12.50,	-1,	0,	"100,000 Gold Credits"),
							"GC05"		=> array(15.00,	15.00,	-1,	0,	"150,000 Gold Credits"),
							"-end-"		=> array(0,	0,	-1,	0,	"-------")
						);
						
	$cases = array(
        0 => array(
            "page" => "case1.php",
            "img" => "Case1_s.png",
            "name" => "Weapon Case 1",
            "category" => "Sniper's",
            "price" => 1000,
            "priceType" => 3, // 1 xp, 2 gd, 3 gp
            "loot" => array(
                array(
                    "fname" => "SNP_AW",
                    "name" => "Mauser SP66 Sniper Rifle",
                    "itemid" => 101085,
                    "chance" => 25,
                    "color" => "color: rgb(75, 105, 255);",
                ),
                array(
                    "fname" => "SNP_Blaser_LRS2_01",
                    "name" => "Blaser Sniper Rifle",
                    "itemid" => 101247,
                    "chance" => 25,
                    "color" => "color: rgb(75, 105, 255);",
                ),
                array(
                    "fname" => "SNP_SVD",
                    "name" => "SVD Sniper Rifle",
                    "itemid" => 101068,
                    "chance" => 25,
                    "color" => "color: rgb(75, 105, 255);",
                ),				
                array(
                    "fname" => "SNP_M82",
                    "name" => "M107 Sniper Rifle",
                    "itemid" => 101088,
                    "chance" => 25,
                    "color" => "color: rgb(136, 71, 255);",
                ),
            ),
        ),
        1 => array(
            "page" => "case2.php",
            "img" => "Case2_s.png",
            "name" => "Weapon Case 2",
            "category" => "SMG's",
            "price" => 250,
            "priceType" => 3, // 1 xp, 2 gd, 3 gp
			"loot" => array(
                array(
                    "fname" => "SMG_AacHoneyBadger_01",
                    "name" => "Honey Badger",
                    "itemid" => 101106,
                    "chance" => 25,
                    "color" => "color: rgb(75, 105, 255);",
                ),
			),	
        ),		
        2 => array(
            "page" => "case3.php",
            "img" => "Case3_s.png",
            "name" => "Weapon Case 3",
            "category" => "Assault Rifles",
            "price" => 500,
            "priceType" => 3, // 1 xp, 2 gd, 3 gp
			"loot" => array(
                array(
                    "fname" => "ballista",
                    "name" => "Crossbow",
                    "itemid" => 105002,
                    "chance" => 25,
                    "color" => "color: rgb(75, 105, 255);",
                ),
			),	
        ),
		 3 => array(
            "page" => "case5.php",
            "img" => "Case5_s.png",
            "name" => "Weapon Case 5",
            "category" => "Melee's",
            "price" => 250,
            "priceType" => 3, // 1 xp, 2 gd, 3 gp
			"loot" => array(
				array(
                    "fname" => "mel_karambit_Tiger",
                    "name" => "Karambit Tiger - No Drop",
                    "itemid" => 105008,
                    "chance" => 15,
                    "color" => "color: rgb(255, 1, 1);",
                ),
				array(
                    "fname" => "mel_karambit_fade",
                    "name" => "Karambit Fade - No Drop",
                    "itemid" => 105005,
                    "chance" => 15,
                    "color" => "color: rgb(255, 1, 1);",
                ),
				array(
                    "fname" => "MEL_RazerBlade",
                    "name" => "RazorBlade - No Drop",
                    "itemid" => 105041,
                    "chance" => 15,
                    "color" => "color: rgb(255, 1, 1);",
                ),
			),	
        ),
        4 => array(
            "page" => "case4.php",
            "img" => "Case4_s.png",
            "name" => "Case 4",
            "category" => "Ammo",
            "price" => 1,
            "priceType" => 1, // 1 xp, 2 gd, 3 gp
			"loot" => array(
                array(
                    "fname" => "ATTM_Mag_M4_30rnd_01",
                    "name" => "STANAG 30",
                    "itemid" => 400016,
                    "chance" => 25,
                    "color" => "color: rgb(75, 105, 255);",
                ),
				
				array(
                    "fname" => "ATTM_Mag_C-Mag_01",
                    "name" => "C-MAG",
                    "itemid" => 400017,
                    "chance" => 25,
                    "color" => "color: rgb(75, 105, 255);",
                ),
				array(
                    "fname" => "ATTM_Mag_M82",
                    "name" => ".50 BMG",
                    "itemid" => 400133,
                    "chance" => 25,
                    "color" => "color: rgb(75, 105, 255);",
                ),
			),	
        ),
        5 => array(
            "page" => "case6.php",
            "img" => "Case6_s.png",
            "name" => "Case 6",
            "category" => "Headgear / Armor",
            "price" => 125,
            "priceType" => 3, // 1 xp, 2 gd, 3 gp
			"loot" => array(               
				array(
                    "fname" => "Hgear_Lucifer",
                    "name" => "Devil Horns",
                    "itemid" => 21000,
                    "chance" => 15,
                    "color" => "color: rgb(255, 1, 1);",
                ),
				array(
                    "fname" => "Karti_Piggy_Mask",
                    "name" => "Pig Mask",
                    "itemid" => 21002,
                    "chance" => 75,
                    "color" => "color: rgb(255, 1, 1);",
                ),
				array(
                    "fname" => "Hgear_Mask_Drive",
                    "name" => "Motocross Helmet",
                    "itemid" => 21003,
                    "chance" => 15,
                    "color" => "color: rgb(255, 1, 1);",
                ),
				
			),	
        ),
        6 => array(
            "page" => "case7.php",
            "img" => "Gift1_s.png",
            "name" => "Case 7",
            "category" => "Game Dollars",
            "price" => 100,
            "priceType" => 1, // 1 xp, 2 gd, 3 gp
            "loot" => array(
                array(
					"fname" => "ZGD",
                    "name" => "1000 GD",
                    "reward" => 1000,
                    "rewardType" => 1, // 1 GD, 2 GC
                    "chance" => 25,
                    "color" => "color: rgb(255, 215, 0);",
                ),
                array(
					"fname" => "ZGD",
                    "name" => "5000 GD",
                    "reward" => 5000,
                    "rewardType" => 1, // 1 GD, 2 GC
                    "chance" => 20,
                    "color" => "color: rgb(255, 215, 0);",
                ),
                array(
					"fname" => "ZGD",
                    "name" => "10000 GD",
                    "reward" => 10000,
                    "rewardType" => 1, // 1 GD, 2 GC
                    "chance" => 15,
                    "color" => "color: rgb(255, 215, 0);",
                ),
                array(
					"fname" => "ZGD",
                    "name" => "15000 GD",
                    "reward" => 15000,
                    "rewardType" => 1, // 1 GD, 2 GC
                    "chance" => 10,
                    "color" => "color: rgb(255, 215, 0);",
                ),
                array(
					"fname" => "ZGD",
                    "name" => "20000 GD",
                    "reward" => 20000,
                    "rewardType" => 1, // 1 GD, 2 GC
                    "chance" => 5,
                    "color" => "color: rgb(255, 215, 0);",
                ),
            ),
        ),
        7 => array(
            "page" => "case8.php",
            "img" => "Gift2_s.png",
            "name" => "Case 8",
            "category" => "GC",
            "price" => 1000,
            "priceType" => 2, // 1 xp, 2 gd, 3 gp
            "loot" => array(
                array(
					"fname" => "ZGC",
                    "name" => "1000 GC",
                    "reward" => 1000,
                    "rewardType" => 2, // 1 GD, 2 GC
                    "chance" => 40,
                    "color" => "color: rgb(255, 215, 0);",
                ),
                array(
					"fname" => "ZGC",
                    "name" => "2000 GC",
                    "reward" => 2000,
                    "rewardType" => 2, // 1 GD, 2 GC
                    "chance" => 30,
                    "color" => "color: rgb(255, 215, 0);",
                ),
                array(
					"fname" => "ZGC",
                    "name" => "3000 GC",
                    "reward" => 3000,
                    "rewardType" => 2, // 1 GD, 2 GC
                    "chance" => 15,
                    "color" => "color: rgb(255, 215, 0);",
                ),
                array(
					"fname" => "ZGC",
                    "name" => "4000 GC",
                    "reward" => 4000,
                    "rewardType" => 2, // 1 GD, 2 GC
                    "chance" => 10,
                    "color" => "color: rgb(255, 215, 0);",
                ),
                array(
					"fname" => "ZGC",
                    "name" => "5000 GC",
                    "reward" => 5000,
                    "rewardType" => 2, // 1 GD, 2 GC
                    "chance" => 5,
                    "color" => "color: rgb(255, 215, 0);",
                ),
            ),
        ),
    );
?>