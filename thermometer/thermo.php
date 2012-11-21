<?
/*
     Fundraising Thermometer Generator v1.1
     Sairam Suresh sai1138@yahoo.com / www.entropyfarm.org
    
     NOTE - you must include the full path to the truetype font on your system below 
            if you want text labels to appear on your graph. No TrueType fonts are
            included in this package, you can probably find some on your system or
            else download one off the net.
      

     Inputs: 'unit'    - the ascii value of the currency unit. By default 36 ($)
                         other interesting ones are:
                           163:  British Pound
                           165:  Japanese Yen
                           8355: French Franc
                           8364: Euro

             'max'     - the goal
             'current' - the current amount raised

     Versions:
     1.2 - added a 'burst' image on request, cleaned up the images a little bit.
     1.1 - Internationalized :) added 'unit' at a user's request so other currencies could be used.
     1.0 - intial version

*/
error_reporting(7); // Only report errors
Header("Content-Type: image/jpeg"); 

function code2utf($num){
 //Returns the utf string corresponding to the unicode value
 //courtesy - romans@void.lv
 if($num<128)return chr($num);
 if($num<2048)return chr(($num>>6)+192).chr(($num&63)+128);
 if($num<65536)return chr(($num>>12)+224).chr((($num>>6)&63)+128).chr(($num&63)+128);
 if($num<2097152)return chr(($num>>18)+240).chr((($num>>12)&63)+128).chr((($num>>6)&63)+128). chr(($num&63)+128);
 return '';
} 

$font = "Trebuchet-Bold.ttf";

$unit = ($_GET['unit']) ? $_GET['unit'] : 36; // ascii 36 = $
$t_unit = ($unit == 'none') ? '' : code2utf($unit);
$t_max = ($_GET['max']) ? $_GET['max'] : 0;
$t_current = isset($_GET['current']) ? $_GET['current'] : 0;

$finalimagewidth = max(strlen($t_max),strlen($t_current))*25;
$finalimage = imagecreateTrueColor(220+$finalimagewidth,550);

$white = imagecolorallocate ($finalimage, 255, 255, 255);
$black = imagecolorallocate ($finalimage, 0, 0, 0);
$red = imagecolorallocate ($finalimage, 255, 0, 0);
$butterscotch = imagecolorallocate ($finalimage, 120, 70, 11);

imagefill($finalimage,0,0,$white);
ImageAlphaBlending($finalimage, true); 

$thermImage = imagecreatefrompng("therm.png");
$tix = ImageSX($thermImage);
$tiy = ImageSY($thermImage);
ImageCopy($finalimage,$thermImage,0,0,0,0,$tix,$tiy);

/*
  thermbar pic courtesy http://www.rosiehardman.com/
*/
$thermbarImage = ImageCreateFrompng('thermbar.png'); 
$barW = ImageSX($thermbarImage); 
$barH = ImageSY($thermbarImage); 


$xpos = 39;
$ypos = 417;
$ydelta = 15;
$fsize = 12;


// Set number of $ybars to use, calculated as a factor of current / max.
if ($t_current > $t_max) {
    $ybars = 21;
} elseif ($t_current > 0) {
    $ybars = $t_max ? round(20 * ($t_current / $t_max)) : 0;
}

// Draw each ybar (filled red bar) in successive shifts of $ydelta.
while ($ybars--) {
    ImageCopy($finalimage, $thermbarImage, $xpos, $ypos, 0, 0, $barW, $barH); 
    $ypos = $ypos - $ydelta;
}

if ($t_current == $t_max) {
    ImageCopy($finalimage, $thermbarImage, $xpos, $ypos, 0, 0, $barW, $barH); 
    $ypos -= $ydelta;
} 

// If there's a truetype font available, use it
if ($font && (file_exists($font))) {
    imagettftext ($finalimage, $fsize, 0, 95, 430, $butterscotch, $font,$t_unit."0");                 // Write the Zero
    imagettftext ($finalimage, $fsize, 0, 95, 90+(2*$fsize), $butterscotch, $font, $t_unit."$t_max");   // Write the max
    if ($t_current > $t_max) {
        imagettftext ($finalimage, $fsize+1, 0, 95, 70, $butterscotch, $font, $t_unit."$t_current!!"); // Current > Max
    } elseif($t_current != 0) {
        if ($t_current == $t_max) {
            imagettftext ($finalimage, $fsize, 0, 95, 90+(2*$fsize), $red, $font, $t_unit."$t_max!");  // Current = Max
        } else {
            if (round($t_current/$t_max) == 1) {
                $ypos += 2*$fsize;
            }
            imagettftext ($finalimage, $fsize, 0, 95, ($t_current > 0) ? ($ypos+$fsize) : ($ypos+(4*$fsize)), ($t_current > 0) ? $butterscotch : $red, $font, $t_unit."$t_current");  // Current < Max
        }
    }
}

if ($t_current > $t_max) {
    $burstImg = ImageCreateFrompng('burst.png');
    $burstW = ImageSX($burstImg);
    $burstH = ImageSY($burstImg);
    ImageCopy($finalimage, $burstImg, 35,57,0,0,$burstW, $burstH);
}

Imagejpeg($finalimage);
Imagedestroy($finalimage);
Imagedestroy($thermImage);
Imagedestroy($thermbarImage);

?> 
