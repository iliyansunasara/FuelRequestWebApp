<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
Route::get('/', function () {
    return view('register');
});

Route::get('/profileManagement', function () {
    return view('profileManagement');
});
Route::get('/login', function () {
    return view('login');
});
Route::get('/register', function () {
    return view('register');
});
Route::get('/fuelQuoteForm', function () {
    return view('fuelQuoteForm');
});
Route::get('/fuelQuoteHistory', function () {
    return view('fuelQuoteHistory');
});

Route::post('/profileManagementSubmit', function () {
    //get the data from the form
    // $userID = "1111111";
    $userID = $_POST['userID'];
    // $userID = $_SESSION['userID'];
    $fullName = $_POST["fullName"];
    $address1 = $_POST["address1"];
    $address2 = $_POST["address2"];
    $city = $_POST["city"];
    $state = $_POST["state"];
    $zip = $_POST["zip"];

    $result = DB::select('select * from ClientInformation where user_id = ?', [$userID]);
    if($result) {
        $result2 = DB::update('update ClientInformation set fullName = ?, address1 = ?, address2 = ?, city = ?, state = ?, zip = ? where user_id = ?', [$fullName, $address1, $address2, $city, $state, $zip, $userID]);
    } else {
        $result2 = DB::insert('insert into ClientInformation (user_id, fullName, address1, address2, city, state, zip) values (?, ?, ?, ?, ?, ?, ?)', [$userID, $fullName, $address1, $address2, $city, $state, $zip]);
    }

    if ($result2) {
        echo '<script>alert("You have successfully updated your information!")</script>';
        return view('profileManagement')->with('success', 'Profile updated successfully');
    } else {
        echo '<script>alert("Nothing was changed! Try again!")</script>';
        return view('profileManagement')->with('error', 'Profile update failed');
    }


});

Route::post('/fuelQuoteFormSubmit', function () {
    //get the data from the form
    $gallonsRequested = $_POST["gallonsRequested"];
    $address1 = $_POST["address1"];
    $address2 = $_POST["address2"];
    $deliveryDate = $_POST["deliveryDate"];
    $gallonPrice = $_POST["gallonPrice"];
    $totalPrice = $_POST["totalPrice"];
});





