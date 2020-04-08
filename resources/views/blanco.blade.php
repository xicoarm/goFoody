
<?php


$users = DB::table('produccts')->get();

foreach ($users as $user) {
    echo $user->name;
}

?>
