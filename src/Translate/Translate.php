<?php 
namespace EsperoSoft\Translate;


class Translate
{
    static function getdata($value,$method, $lang="en-En"){
            $data = [
                "fr-Fr" => [
                    "y" => "il y a ".$value. " an",
                    "m" => "il y a ".$value. " mois",
                    "d" => "il y a ".$value. " jour",
                    "h" => "il y a ".$value. " heur",
                    "i" => "il y a ".$value. " minute",
                    "s" => "il y a ".$value. " seconde",
                ],
                "en-En" => [
                    "y" => $value." year ago",
                    "m" => $value." month ago",
                    "d" => $value." day ago",
                    "h" => $value." hour ago",
                    "i" => $value." minute ago",
                    "s" => $value." second ago",
                ]
                ];
        $datas = [
            "fr-Fr" => [
                "y" => " il y a ".$value. " ans",
                "m" => " il y a ".$value. " mois",
                "d" => " il y a ".$value. " jours",
                "h" => " il y a ".$value. " heurs",
                "i" => " il y a ".$value. " minutes",
                "s" => " il y a ".$value. " secondes",
            ],
            "en-En" => [
                "y" => $value." years ago",
                "m" => $value." months ago",
                "d" => $value." days ago",
                "h" => $value." hours ago",
                "i" => $value." minutes ago",
                "s" => $value." seconds ago",
            ]
            ];
      
        if(!in_array($lang, ["fr-Fr", "en-En"])){
            $lang = "fr-Fr";
        }
        return $value > 1 ? $datas[$lang][$method] : $data[$lang][$method];
    }
}
