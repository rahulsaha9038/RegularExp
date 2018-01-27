<?php
        class regular{
        var $text;
        var $reg;
        
        function __construct($str,$reg_exp){
            $this->text=$str;
            $this->reg=$reg_exp;
        }   
        
        function check(){
            preg_match_all($this->reg,$this->text,$matches);
            return $matches[1];
            
        
        }

    }

        $myfile = fopen("regex.txt","r") or die("Unable to open file!");
        $text = fread($myfile,filesize("regex.txt"));
        fclose($myfile);
        
        
        $reg_exp1 = "/\d+\.\<\/pre\-line\>\<\/td\>\<td width\=\"\d+\%\" valign\=\"top\"\>\<pre\-line\>([A-Z][A-Z][A-Z]*+ \d+[A-Z]*\/20\d\d)/";

        $ob=new regular($text,$reg_exp1);
        $matches = $ob->check();
    
        
        foreach($matches as $match){
                echo $match."<br />";
            }
        
?>
    