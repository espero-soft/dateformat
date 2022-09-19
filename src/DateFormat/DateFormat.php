<?php
namespace EsperoSoft\DateFormat;


use EsperoSoft\Translate\Translate;



class DateFormat{

    static public function dateDiff($date1, $date2, $lang){
        
        
        $firstDate  = $date1;
        $secondDate =  $date2;
        $result = "";
        $intvl = $firstDate->diff($secondDate);

        if($intvl->y > 0){
            $result .= Translate::getData($intvl->y, "y", $lang);
        }else if($intvl->m > 0){
            $result .= Translate::getData($intvl->m, "m", $lang);
        }else if($intvl->d > 0){
            $result .= Translate::getData($intvl->d, "d", $lang);
        } else if($intvl->h > 0){
            $result .= Translate::getData($intvl->h, "h", $lang);
        }
        else if($intvl->i > 0){
            $result .= Translate::getData($intvl->i, "i", $lang);
        }
        else if($intvl->s > 0){
            $result .= Translate::getData($intvl->s, "s", $lang);
        }
        return $result;
    }

    static function fromNow($date, $lang='fr-Fr'):?string
    {
        $now = new \DateTimeImmutable();
        $diff = DateFormat::dateDiff($now,$date, $lang);
        return $diff;
    }

}