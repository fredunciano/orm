<?php 
$ret = array();    
$ret['2019-03-04 10:00:00'] = array(
    0 => array(
        'date' => '2019-03-04 10:00:00',
        'resource_id' => '1MSINLO_G04',
        'start_date' => '2019-02-25 00:00:00',
       'end_date' => '2019-03-11 10:00:30'
    )
);

$ret['2019-03-04 12:00:00'] = array(
    0 => array(
        'date' => '2019-03-04 12:00:00',
       'resource_id' => '1BAUANG_G01',
       'start_date' => '2019-02-25 00:00:00',
       'end_date' => '2019-03-11 10:00:30'
    ),
    1 => array(
        'date' => '2019-03-04 12:00:00',
       'resource_id' => '1BAKUN_G01',
       'start_date' => '2019-02-25 00:00:00',
       'end_date' => '2019-03-11 10:00:30'
    )
);

$ret['2019-03-06 12:00:00'] = array(
    0 => array(
       'date' => '2019-03-06 12:00:00',
       'resource_id' => '1BAUANG_G01',
       'start_date' => '2019-03-07 00:00:00',
       'end_date' => '2019-03-08 10:00:30'
   ),
    1 => array(
       'date' => '2019-03-06 12:00:00',
       'resource_id' => '1BAKUN_G01',
       'start_date' => '2019-03-07 00:00:00',
       'end_date' => '2019-03-08 10:00:30'
   )
);

$ret['2019-03-11 12:00:00'] = array(
    0 => array(
       'date' => '2019-03-11 12:00:00',
            'resource_id' => '1BAUANG_G01',
            'start_date' => '2019-03-11 00:00:00',
            'end_date' => '2019-03-13 10:00:30'
        ),
    1 => array(
       'date' => '2019-03-11 12:00:00',
            'resource_id' => '1BAKUN_G01',
            'start_date' => '2019-03-11 00:00:00',
            'end_date' => '2019-03-13 10:00:30'
        )
);
// print_r($ret); die();
$start_d = strtotime(date('Y-01-01', strtotime('-1 year')));
$end_d = strtotime(date('Y-12-31'));

$date_array = array();
for ( $i = $start_d; $i <= $end_d; $i = $i + 86400 ) {
   $date_array[] = date( 'Y-m-d', $i );
}


$new_arr = array();
$test = array();

foreach ($ret as $date => $date_data) {
    $date = date('Y-m-d', strtotime($date));
    $test[] = $date;
}
$test2 = array_values(array_unique($test));
unset($test2[0]);
// print_r($test2); die();
foreach ($date_array as $dates) {
     foreach ($ret as $date => $date_data) {
         foreach ($date_data as $keys => $value) {

             $sdate = date('Y-m-d', strtotime($value['start_date']));
             $edate = date('Y-m-d', strtotime($value['end_date']));

             foreach ($test2 as $key => $val) {


                 if ($sdate <= $dates && $edate >= $dates ) {
                     $get_date = date('Y-m-d', strtotime($value['date']));
                      $new_arr[$dates][$value['resource_id']] = $value;

                      // if( isset($key)) {
                      //     unset($test2[$key]);    
                      // }

                      // $val < meron yung date posted mismo
                      if ($val <= $dates && $val > $get_date) {
                        
                        print_r($val.'<='.$dates.' '.$val. ' > '. $get_date.' ');
                          echo "<pre>";
                          unset($new_arr[$dates]);
                          print_r($new_arr);

                          
                      }
                                
                  }
             }

         }
     }
}
// print_r($new_arr); die();