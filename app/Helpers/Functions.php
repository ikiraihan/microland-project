<?php

namespace App\Helpers;

class Functions
{
    public static function getFile($model)
    {
        switch($model){
            case'Latitude 5320 2in1 Touchscreen':
            case'Latitude 5320 Touchscreen':
                $path = "asset-images/dell-latitude-5320.jpg";
                break;
            case'Latitude 5400 Touchscreen':
                $path = "asset-images/dell-latitude-5400.jpg";
                break;
            case'Thinkpad T490 Touchscreen':
                $path = "asset-images/lenovo-tinkpad-T490.jpg";
                break;
            case'Thinkpad T480 Double VGA':
                $path = "asset-images/thinkPad_T480.jpg";
                break;
            case'Thinkpad T470s Keyboard Backlight':
                $path = "asset-images/lenovo-thinkpad-T470s.jpeg";
                break; 
            case'Thinkpad T460s Keyboard Backlight':
                $path = "asset-images/lenovo-thinkpad-T460s.jpg";
                break;   
            case'Thinkpad L470':
                $path = "asset-images/lenovo-thinkpad-L470.jpg";
                break;   
            case'Thinkpad L460':
                $path = "asset-images/Lenovo-thinkpad-L460.jpg";
                break;   
            case'Thinkpad X270':
                $path = "asset-images/Lenovo-x270i.jpg";
                break;  
            case'Thinkpad L460':
                $path = "asset-images/Lenovo-thinkpad-L460.jpg";
                break; 
            case'Thinkpad T470':
                $path = "asset-images/lenovo-thinkpad-T470.jpg";
                break;  
            case'Thinkpad X280':
                $path = "asset-images/lenovo-thinkpad-x280.jpg";
                break;   
            case'Thinkpad T480s':
                $path = "asset-images/lenovo-t480s.jpg";
                break;   
            case'Thinkpad L380 Yoga + Pen Stylus':
                $path = "asset-images/lenovo-thinkpad-l380-i7-8550u.jpg";
                break;   
            case'Thinkpad L480 Tc & Non Tc':
                $path = "asset-images/lenovo-thinkpad-l480.jpg";
                break;     
            case'Thinkpad L490 Touchscreen':
                $path = "asset-images/lenovo-thinkpad-l490-i5.jpg";
                break;   

            case'Thinkpad L13':
                $path = "asset-images/lenovo-thinkpad-l13-i7.jpg";
                break;
            case'Elitebook 840 G4':
                $path = "asset-images/lenovo-thinkpad-l490-i5.jpg";
                break;  
            case'Thinkpad L490 Touchscreen':
                $path = "asset-images/hp-elitebook-840-G4.png";
                break;           
            default:
                $path = "asset-images/2148210382";
                break;

        }
        return $path;
    }
}