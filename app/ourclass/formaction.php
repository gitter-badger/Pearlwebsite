<?php


namespace App\ourclass;
use App\Http\Controllers\operationController;

use DB;

class formaction {
    
        public $month = array(
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
    
         public $month_r = array(
              'January' => '01',
              'February'=> '02',
              'March'   => '03',
              'April'   =>  '04',
              'May'     => '05',
              'June'    => '06',
              'July'    =>  '07',
              'Auguest' =>  '08',
              'September'=> '09',
              'October'  => '10',
              'November' => '11',
              'December' => '12'
         );
                 
         public function show_MY($id,$name)
    {
         
         $month = $this->month;
         $nm = (int)date('m');
         $ny = (int)date('Y');
         echo '<select name="'.$name.'" class="form-control" id="'.$id.'">';
         $count = 0;
         for($i = $nm;$i <= 12;$i++)
         {
                $m = $month[$i];
                echo '<option value="'.$m.' '.$ny.'">'.$m.' '.$ny.'</option>';
                $count++;     
                if ($i == 12 && $count < 12)
                {
                    $ny++;
                    for($i = 1; $i <= (12-$count);$i++)
                    {
                        $m = $month[$i];
                        echo '<option value="'.$m.' '.$ny.'">'.$m.' '.$ny.'</option>';
                    }
                    $i = 12;
                }
         }
         echo "</select>";
    }
    
    public function genReservation()
    {
        
        DB::table('reservation_table')->insert([
            'user_id' => 1,
            'checkin' => '2016-01-12',
            'checkout'=> '2016-01-20',
            'reservation_date' => '2016-01-10'
        ]);   
    }
    
    public function make_date($day,$my)// get day and month year
    {
        $month = $this->month_r;
        $dm = explode(" ", $my);
        $mon = $month[$dm[0]];
        $year = $dm[1];
        $date = "$year-$mon-$day";
        return $date;
    }
    
    public function get_room($room_type,$reserve)
    {
        $sum = 0;
       
            for($i = 0; $i < sizeof($reserve);$i++)
            {
                $r = DB::table('table_reserved_rooms')->where('reservation_id',$reserve[$i]->id)->get();
                for($h = 0;$h < sizeof($r);$h++)
                {
                    $roomid = $r[$h]->room_id;
                    $room = DB::table('table_rooms')->where('id',$roomid)->first();
                    if($room->room_type_id == $room_type)
                    {
                        $sum++;
                    }
                }
            }
        return $sum;
    }
    
    public function change_room_status()
    {
        $today = date("Y-m-d");
        /** changing from availble to unavailble *******************/
        // see reservations that today is between their checkin and checkout 
        $result = DB::select(DB::raw("select * from reservation_table where  checkin <= '$today'  and checkout >= '$today' "));
        //change their status of room to unavailble
        for($i = 0; $i < sizeof($result);$i++)
        {
            $r = DB::table('table_reserved_rooms')->where('reservation_id',$result[$i]->id)->get();
            for($h = 0;$h < sizeof($r);$h++)
            {
                $roomid = $r[$h]->room_id;
                // update room with that id room_status from 1 to 0 
               DB::table('table_rooms')->where("id","$roomid")->update(['room_state' => 0]);
            }
        }
        /**** deleting all checked out reservation from the 
            reservation table and making their rooms availble **************/
        $res = DB::table('reservation_table')->where('checkout','<',"$today")->get();
        for($i = 0; $i < sizeof($res);$i++)
        {
            $r = DB::table('table_reserved_rooms')->where('reservation_id',$res[$i]->id)->get();
            for($h = 0;$h < sizeof($r);$h++)
            {
                $roomid = $r[$h]->room_id;
                // update room with that id room_status from 1 to 0 
               DB::table('table_rooms')->where("id","$roomid")->update(['room_state' => 1]);
            }
        }
        for($i = 0; $i < sizeof($res);$i++)
        {
            DB::table('table_reserved_rooms')->where('reservation_id',$res[$i]->id)->delete();
            DB::table('reservation_table')->where('id',$res[$i]->id)->delete();
        }
        /****************************/
        
    }
}
