@extends('app')
@section('content')
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">Formulate</h1>
        <div class="btn-toolbar mb-2 mb-md-0">
            
        </div>
    </div>
<?php 
$noOfPeriods = [1,2,4,12];
for($m=1;$m<=12;$m++){
    foreach($noOfPeriods as $period){
        $noOfPeriod=$period;
        $currentMonth=$m;
        echo "<p>Current Month: ".$currentMonth. " : No of Period: ".$noOfPeriod. " : Window: ". getWindowIdx($noOfPeriod, $currentMonth)."</p>";
    }
}
?>
@endsection
<?php 
function getWindowIdx($noOfPeriod, $currentMonth){
    $window = 0;
    $array_chunk = array_chunk(range(1,12), (12/$noOfPeriod), true);
    foreach($array_chunk as $array_key => $array_slice){
        foreach ($array_slice as $value){
            if($value === $currentMonth){
                $window = $array_key;
                break;
            }
        }
    }
    return $window;
}
?>
