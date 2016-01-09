<?php


namespace App\ourclass;

class formaction {
    
     public function show_MY($id,$name)
    {
         $month = array(
             1 => 'January',
             2 => 'February',
             3 => 'March',
             4 => 'April',
             5 => 'May',
             6 => 'June',
             7 => 'July',
             8 => 'Auguest',
             9 => 'September',
             10=> 'October',
             11=> 'November',
             12=> 'December'
         );
         $nm = (int)date('m');
         $ny = (int)date('Y');
         echo '<select name="'.$name.'" class="form-control" id="'.$id.'">';
         $count = 0;
         for($i = $nm;$i <= 12;$i++)
         {
                $m = $month[$i];
                echo '<option value="'.$m.''.$ny.'">'.$m.' '.$ny.'</option>';
                $count++;     
                if ($i == 12 && $count < 12)
                {
                    $ny++;
                    for($i = 1; $i <= (12-$count);$i++)
                    {
                        $m = $month[$i];
                        echo '<option value="'.$m.''.$ny.'">'.$m.' '.$ny.'</option>';
                    }
                    $i = 12;
                }
         }
         echo "</select>";
    }
}
