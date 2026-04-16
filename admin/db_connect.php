<?php
ini_set('display_errors', '0');
ini_set('display_startup_errors', '0');
error_reporting(E_ALL);
@session_start();
// $con = mysqli_connect("localhost", "root", "", "blog-admin-panel");
define("DBHOST_NAME","localhost");
define("DBUSER_NAME","u385873850_ngplasticsurge");
define("DBPASSWORD",'@iB0NWGRgRh9');
define("DBDATABASE_NAME","u385873850_ngplasticsurge");
define("smtp_host","smtp.gmail.com");
define("smtp_username","areshahvaibhav999@gmail.com");
define("smtp_password","qbuljoilnpofedcz");
define("smtp_secure","tls");


define("Send_Email",'1');


define("Site_Url","https://www.ngplasticsurgery.in/");
define("LOGO_URL","https://ngplasticsurgery.in/image/main-logo.png");

$con = mysqli_connect(DBHOST_NAME,DBUSER_NAME,DBPASSWORD,DBDATABASE_NAME);


$fetch_settings =mysqli_query($con,"SELECT * FROM `site_config` WHERE  `id`='1' ")or die(mysqli_error($con));
$setting_data =mysqli_fetch_array($fetch_settings);


define("smtp_email_Mailer_name",$setting_data['company_name']);
define("Company_Name",$setting_data['company_name']);
define("Company_address",$setting_data['company_address']);
define("Company_Email",$setting_data['company_email']);
define("Company_Phone",$setting_data['company_phone']);
define("Company_Phone1",$setting_data['company_phone1']);
define("Company_Phone2",$setting_data['company_phone2']);

if (!$con) {
  die("Connection failed: " . mysqli_connect_error());
}

function check_input($con, $data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  $data = addslashes($data);
  $data = mysqli_real_escape_string($con, $data);
  return $data;
}

function check_textinput($con, $data) {
  $data = trim($data);
  $data = htmlspecialchars($data);
  $data = mysqli_real_escape_string($con, $data);
  return $data;
}

function random_generator($length) {
    $chars = "abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789!@#$";
    $password = substr( str_shuffle( $chars ), 0, $length );
    return $password;
}

function getRealIpAddr(){
  if (!empty($_SERVER['HTTP_CLIENT_IP']))
  //check ip from share internet
  {
    $ip=$_SERVER['HTTP_CLIENT_IP'];
  }
  elseif (!empty($_SERVER['HTTP_X_FORWARDED_FOR']))
  //to check ip is pass from proxy
  {
    $ip=$_SERVER['HTTP_X_FORWARDED_FOR'];
  }
  else
  {
    $ip=$_SERVER['REMOTE_ADDR'];
  }
  return $ip;
}

function getCurrentURL()
{
    $currentURL = (@$_SERVER["HTTPS"] == "on") ? "https://" : "http://";
    $currentURL .= $_SERVER["SERVER_NAME"];
 
    if($_SERVER["SERVER_PORT"] != "80" && $_SERVER["SERVER_PORT"] != "443")
    {
        $currentURL .= ":".$_SERVER["SERVER_PORT"];
    } 
 
    $currentURL .= $_SERVER["REQUEST_URI"];
    return $currentURL;
}

$crtUrl=getCurrentURL();


$blogImg="blog-img";
$newsImg="news-img";

$albumImg="album-img";
$galleryImg="gallery-img";
$uploads="uploads";
$eventImg="event-img";

$navlImg="img/image-not-available.png";

function maincategory($con){
  $main_result=array();
  
  $fetch_categories=mysqli_query($con,"SELECT * FROM `spc_category` WHERE  `status`='1'")or die(mysqli_error($con));
  while($catresult=mysqli_fetch_array($fetch_categories)){
   $main_result[]=$catresult;
  }   
  return $main_result;
}
function medCategory($con){
  $main_result=array();
  
  $fetch_med=mysqli_query($con,"SELECT * FROM `sub_category` WHERE  `status`='1'")or die(mysqli_error($con));
  while($medResult=mysqli_fetch_array($fetch_med)){
   $main_result[]=$medResult;
  }   
  return $main_result;
}
function fetchModel($con){
  $model_result=array();
  
  $fetch_model=mysqli_query($con,"SELECT * FROM `spc_model` WHERE  `status`='1'")or die(mysqli_error($con));
  while($modelResult=mysqli_fetch_array($fetch_model)){
   $model_result[]=$modelResult;
  }   
  return $model_result;
}
function fetchProduct($con){
  $product_result=array();
  
  $fetch_product=mysqli_query($con,"SELECT * FROM `spc_product` WHERE  `status`='1'")or die(mysqli_error($con));
  while($productResult=mysqli_fetch_array($fetch_product)){
   $product_result[]=$productResult;
  }   
  return $product_result;
}
/*function maincategory($con){
$fetch_categories=mysqli_query($con,"SELECT `category_id`,`category`,`category_slug` FROM `ahq_category` WHERE `status`='1' ORDER BY `category_id` DESC ")or die(mysqli_error($con));

while($result=mysqli_fetch_array($fetch_categories)){
	$main_result[]=array("category_id" => $result['category_id'],
                                      "category" => $result['category'],
                                      "category_slug" => $result['category_slug'],
                                      );
}
return $main_result;
}*/

/*function subcategory($con,$parentcategory){
$fetch_subcategories=mysqli_query($con,"SELECT `subcategory_id`,`subcategory`,`subcategory_slug` FROM `ahq_subcategory` WHERE `category_id`='".$parentcategory."' AND `status`='1' ORDER BY `subcategory_id` DESC ")or die(mysqli_error($con));

while($subcatresult=mysqli_fetch_array($fetch_subcategories)){
	$sub_result[]=array("subcategory_id" => $subcatresult['subcategory_id'],
                                      "subcategory" => $subcatresult['subcategory'],
                                      "subcategory_slug" => $subcatresult['subcategory_slug'],
                                      );
}
return $sub_result;
}*/


/*function clientreview($con){
   $fetchCreviews=mysqli_query($con,"SELECT * FROM `ahq_review` WHERE `status`='1' ORDER BY `review_id` DESC ")or die(mysqli_error($con));
   while($cr_result=mysqli_fetch_array($fetchCreviews)){
      $crmain_result[]=array("review_id" => $cr_result['review_id'],
         "client_name" => $cr_result['client_name'],
         "country" => $cr_result['country'],
         "review_date" => $cr_result['review_date'],
         "rating" => $cr_result['rating'],
         "image" => $cr_result['image'],
         "image_alt" => $cr_result['image_alt'],
         "image_title" => $cr_result['image_title'],
         "company_name" => $cr_result['company_name'],
         "designation" => $cr_result['designation'],
         "description" => $cr_result['description'],
      );
   }
   return $crmain_result;
}*/

function ProductDiscountCalculate($discount_percentage="",$actual_price=0)
{
  $discount_percentage = (empty($discount_percentage)) ? 0 : $discount_percentage;
  // Calculate the discount amount
  $discountAmount = $actual_price * ($discount_percentage / 100);

  // Calculate the discounted price
  $discountedPrice = $actual_price - $discountAmount;
  return $discountedPrice;
}

function AdminMenuSelected($page_name)
{
  $currentPage=pathinfo($_SERVER['PHP_SELF'], PATHINFO_FILENAME);;
  
  $active = "";
  if($currentPage == $page_name)
  {
    $active = "active";
  }
  return $active;
}
date_default_timezone_set("Asia/Kolkata");

$tdate=date("Y-m-d");

$countryList = array(
  "AF" => "Afghanistan",
  "AL" => "Albania",
  "DZ" => "Algeria",
  "AS" => "American Samoa",
  "AD" => "Andorra",
  "AO" => "Angola",
  "AI" => "Anguilla",
  "AQ" => "Antarctica",
  "AG" => "Antigua and Barbuda",
  "AR" => "Argentina",
  "AM" => "Armenia",
  "AW" => "Aruba",
  "AU" => "Australia",
  "AT" => "Austria",
  "AZ" => "Azerbaijan",
  "BS" => "Bahamas",
  "BH" => "Bahrain",
  "BD" => "Bangladesh",
  "BB" => "Barbados",
  "BY" => "Belarus",
  "BE" => "Belgium",
  "BZ" => "Belize",
  "BJ" => "Benin",
  "BM" => "Bermuda",
  "BT" => "Bhutan",
  "BO" => "Bolivia",
  "BA" => "Bosnia and Herzegovina",
  "BW" => "Botswana",
  "BV" => "Bouvet Island",
  "BR" => "Brazil",
  "BQ" => "British Antarctic Territory",
  "IO" => "British Indian Ocean Territory",
  "VG" => "British Virgin Islands",
  "BN" => "Brunei",
  "BG" => "Bulgaria",
  "BF" => "Burkina Faso",
  "BI" => "Burundi",
  "KH" => "Cambodia",
  "CM" => "Cameroon",
  "CA" => "Canada",
  "CT" => "Canton and Enderbury Islands",
  "CV" => "Cape Verde",
  "KY" => "Cayman Islands",
  "CF" => "Central African Republic",
  "TD" => "Chad",
  "CL" => "Chile",
  "CN" => "China",
  "CX" => "Christmas Island",
  "CC" => "Cocos [Keeling] Islands",
  "CO" => "Colombia",
  "KM" => "Comoros",
  "CG" => "Congo - Brazzaville",
  "CD" => "Congo - Kinshasa",
  "CK" => "Cook Islands",
  "CR" => "Costa Rica",
  "HR" => "Croatia",
  "CU" => "Cuba",
  "CY" => "Cyprus",
  "CZ" => "Czech Republic",
  "CI" => "Côte d’Ivoire",
  "DK" => "Denmark",
  "DJ" => "Djibouti",
  "DM" => "Dominica",
  "DO" => "Dominican Republic",
  "NQ" => "Dronning Maud Land",
  "DD" => "East Germany",
  "EC" => "Ecuador",
  "EG" => "Egypt",
  "SV" => "El Salvador",
  "GQ" => "Equatorial Guinea",
  "ER" => "Eritrea",
  "EE" => "Estonia",
  "ET" => "Ethiopia",
  "FK" => "Falkland Islands",
  "FO" => "Faroe Islands",
  "FJ" => "Fiji",
  "FI" => "Finland",
  "FR" => "France",
  "GF" => "French Guiana",
  "PF" => "French Polynesia",
  "TF" => "French Southern Territories",
  "FQ" => "French Southern and Antarctic Territories",
  "GA" => "Gabon",
  "GM" => "Gambia",
  "GE" => "Georgia",
  "DE" => "Germany",
  "GH" => "Ghana",
  "GI" => "Gibraltar",
  "GR" => "Greece",
  "GL" => "Greenland",
  "GD" => "Grenada",
  "GP" => "Guadeloupe",
  "GU" => "Guam",
  "GT" => "Guatemala",
  "GG" => "Guernsey",
  "GN" => "Guinea",
  "GW" => "Guinea-Bissau",
  "GY" => "Guyana",
  "HT" => "Haiti",
  "HM" => "Heard Island and McDonald Islands",
  "HN" => "Honduras",
  "HK" => "Hong Kong SAR China",
  "HU" => "Hungary",
  "IS" => "Iceland",
  "IN" => "India",
  "ID" => "Indonesia",
  "IR" => "Iran",
  "IQ" => "Iraq",
  "IE" => "Ireland",
  "IM" => "Isle of Man",
  "IL" => "Israel",
  "IT" => "Italy",
  "JM" => "Jamaica",
  "JP" => "Japan",
  "JE" => "Jersey",
  "JT" => "Johnston Island",
  "JO" => "Jordan",
  "KZ" => "Kazakhstan",
  "KE" => "Kenya",
  "KI" => "Kiribati",
  "KW" => "Kuwait",
  "KG" => "Kyrgyzstan",
  "LA" => "Laos",
  "LV" => "Latvia",
  "LB" => "Lebanon",
  "LS" => "Lesotho",
  "LR" => "Liberia",
  "LY" => "Libya",
  "LI" => "Liechtenstein",
  "LT" => "Lithuania",
  "LU" => "Luxembourg",
  "MO" => "Macau SAR China",
  "MK" => "Macedonia",
  "MG" => "Madagascar",
  "MW" => "Malawi",
  "MY" => "Malaysia",
  "MV" => "Maldives",
  "ML" => "Mali",
  "MT" => "Malta",
  "MH" => "Marshall Islands",
  "MQ" => "Martinique",
  "MR" => "Mauritania",
  "MU" => "Mauritius",
  "YT" => "Mayotte",
  "FX" => "Metropolitan France",
  "MX" => "Mexico",
  "FM" => "Micronesia",
  "MI" => "Midway Islands",
  "MD" => "Moldova",
  "MC" => "Monaco",
  "MN" => "Mongolia",
  "ME" => "Montenegro",
  "MS" => "Montserrat",
  "MA" => "Morocco",
  "MZ" => "Mozambique",
  "MM" => "Myanmar [Burma]",
  "NA" => "Namibia",
  "NR" => "Nauru",
  "NP" => "Nepal",
  "NL" => "Netherlands",
  "AN" => "Netherlands Antilles",
  "NT" => "Neutral Zone",
  "NC" => "New Caledonia",
  "NZ" => "New Zealand",
  "NI" => "Nicaragua",
  "NE" => "Niger",
  "NG" => "Nigeria",
  "NU" => "Niue",
  "NF" => "Norfolk Island",
  "KP" => "North Korea",
  "VD" => "North Vietnam",
  "MP" => "Northern Mariana Islands",
  "NO" => "Norway",
  "OM" => "Oman",
  "PC" => "Pacific Islands Trust Territory",
  "PK" => "Pakistan",
  "PW" => "Palau",
  "PS" => "Palestinian Territories",
  "PA" => "Panama",
  "PZ" => "Panama Canal Zone",
  "PG" => "Papua New Guinea",
  "PY" => "Paraguay",
  "YD" => "People's Democratic Republic of Yemen",
  "PE" => "Peru",
  "PH" => "Philippines",
  "PN" => "Pitcairn Islands",
  "PL" => "Poland",
  "PT" => "Portugal",
  "PR" => "Puerto Rico",
  "QA" => "Qatar",
  "RO" => "Romania",
  "RU" => "Russia",
  "RW" => "Rwanda",
  "RE" => "Réunion",
  "BL" => "Saint Barthélemy",
  "SH" => "Saint Helena",
  "KN" => "Saint Kitts and Nevis",
  "LC" => "Saint Lucia",
  "MF" => "Saint Martin",
  "PM" => "Saint Pierre and Miquelon",
  "VC" => "Saint Vincent and the Grenadines",
  "WS" => "Samoa",
  "SM" => "San Marino",
  "SA" => "Saudi Arabia",
  "SN" => "Senegal",
  "RS" => "Serbia",
  "CS" => "Serbia and Montenegro",
  "SC" => "Seychelles",
  "SL" => "Sierra Leone",
  "SG" => "Singapore",
  "SK" => "Slovakia",
  "SI" => "Slovenia",
  "SB" => "Solomon Islands",
  "SO" => "Somalia",
  "ZA" => "South Africa",
  "GS" => "South Georgia and the South Sandwich Islands",
  "KR" => "South Korea",
  "ES" => "Spain",
  "LK" => "Sri Lanka",
  "SD" => "Sudan",
  "SR" => "Suriname",
  "SJ" => "Svalbard and Jan Mayen",
  "SZ" => "Swaziland",
  "SE" => "Sweden",
  "CH" => "Switzerland",
  "SY" => "Syria",
  "ST" => "São Tomé and Príncipe",
  "TW" => "Taiwan",
  "TJ" => "Tajikistan",
  "TZ" => "Tanzania",
  "TH" => "Thailand",
  "TL" => "Timor-Leste",
  "TG" => "Togo",
  "TK" => "Tokelau",
  "TO" => "Tonga",
  "TT" => "Trinidad and Tobago",
  "TN" => "Tunisia",
  "TR" => "Turkey",
  "TM" => "Turkmenistan",
  "TC" => "Turks and Caicos Islands",
  "TV" => "Tuvalu",
  "UM" => "U.S. Minor Outlying Islands",
  "PU" => "U.S. Miscellaneous Pacific Islands",
  "VI" => "U.S. Virgin Islands",
  "UG" => "Uganda",
  "UA" => "Ukraine",
  "SU" => "Union of Soviet Socialist Republics",
  "AE" => "United Arab Emirates",
  "GB" => "United Kingdom",
  "US" => "United States",
  "ZZ" => "Unknown or Invalid Region",
  "UY" => "Uruguay",
  "UZ" => "Uzbekistan",
  "VU" => "Vanuatu",
  "VA" => "Vatican City",
  "VE" => "Venezuela",
  "VN" => "Vietnam",
  "WK" => "Wake Island",
  "WF" => "Wallis and Futuna",
  "EH" => "Western Sahara",
  "YE" => "Yemen",
  "ZM" => "Zambia",
  "ZW" => "Zimbabwe",
  "AX" => "Åland Islands",
  );
?>