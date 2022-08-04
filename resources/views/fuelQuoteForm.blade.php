<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
        <!-- Styles -->
        <style>
            /*! normalize.css v8.0.1 | MIT License | github.com/necolas/normalize.css */html{line-height:1.15;-webkit-text-size-adjust:100%}body{margin:0}a{background-color:transparent}[hidden]{display:none}html{font-family:system-ui,-apple-system,BlinkMacSystemFont,Segoe UI,Roboto,Helvetica Neue,Arial,Noto Sans,sans-serif,Apple Color Emoji,Segoe UI Emoji,Segoe UI Symbol,Noto Color Emoji;line-height:1.5}*,:after,:before{box-sizing:border-box;border:0 solid #e2e8f0}a{color:inherit;text-decoration:inherit}svg,video{display:block;vertical-align:middle}video{max-width:100%;height:auto}.bg-white{--bg-opacity:1;background-color:#fff;background-color:rgba(255,255,255,var(--bg-opacity))}.bg-gray-100{--bg-opacity:1;background-color:#f7fafc;background-color:rgba(247,250,252,var(--bg-opacity))}.border-gray-200{--border-opacity:1;border-color:#edf2f7;border-color:rgba(237,242,247,var(--border-opacity))}.border-t{border-top-width:1px}.flex{display:flex}.grid{display:grid}.hidden{display:none}.items-center{align-items:center}.justify-center{justify-content:center}.font-semibold{font-weight:600}.h-5{height:1.25rem}.h-8{height:2rem}.h-16{height:4rem}.text-sm{font-size:.875rem}.text-lg{font-size:1.125rem}.leading-7{line-height:1.75rem}.mx-auto{margin-left:auto;margin-right:auto}.ml-1{margin-left:.25rem}.mt-2{margin-top:.5rem}.mr-2{margin-right:.5rem}.ml-2{margin-left:.5rem}.mt-4{margin-top:1rem}.ml-4{margin-left:1rem}.mt-8{margin-top:2rem}.ml-12{margin-left:3rem}.-mt-px{margin-top:-1px}.max-w-6xl{max-width:72rem}.min-h-screen{min-height:100vh}.overflow-hidden{overflow:hidden}.p-6{padding:1.5rem}.py-4{padding-top:1rem;padding-bottom:1rem}.px-6{padding-left:1.5rem;padding-right:1.5rem}.pt-8{padding-top:2rem}.fixed{position:fixed}.relative{position:relative}.top-0{top:0}.right-0{right:0}.shadow{box-shadow:0 1px 3px 0 rgba(0,0,0,.1),0 1px 2px 0 rgba(0,0,0,.06)}.text-center{text-align:center}.text-gray-200{--text-opacity:1;color:#edf2f7;color:rgba(237,242,247,var(--text-opacity))}.text-gray-300{--text-opacity:1;color:#e2e8f0;color:rgba(226,232,240,var(--text-opacity))}.text-gray-400{--text-opacity:1;color:#cbd5e0;color:rgba(203,213,224,var(--text-opacity))}.text-gray-500{--text-opacity:1;color:#a0aec0;color:rgba(160,174,192,var(--text-opacity))}.text-gray-600{--text-opacity:1;color:#718096;color:rgba(113,128,150,var(--text-opacity))}.text-gray-700{--text-opacity:1;color:#4a5568;color:rgba(74,85,104,var(--text-opacity))}.text-gray-900{--text-opacity:1;color:#1a202c;color:rgba(26,32,44,var(--text-opacity))}.underline{text-decoration:underline}.antialiased{-webkit-font-smoothing:antialiased;-moz-osx-font-smoothing:grayscale}.w-5{width:1.25rem}.w-8{width:2rem}.w-auto{width:auto}.grid-cols-1{grid-template-columns:repeat(1,minmax(0,1fr))}@media (min-width:640px){.sm\:rounded-lg{border-radius:.5rem}.sm\:block{display:block}.sm\:items-center{align-items:center}.sm\:justify-start{justify-content:flex-start}.sm\:justify-between{justify-content:space-between}.sm\:h-20{height:5rem}.sm\:ml-0{margin-left:0}.sm\:px-6{padding-left:1.5rem;padding-right:1.5rem}.sm\:pt-0{padding-top:0}.sm\:text-left{text-align:left}.sm\:text-right{text-align:right}}@media (min-width:768px){.md\:border-t-0{border-top-width:0}.md\:border-l{border-left-width:1px}.md\:grid-cols-2{grid-template-columns:repeat(2,minmax(0,1fr))}}@media (min-width:1024px){.lg\:px-8{padding-left:2rem;padding-right:2rem}}@media (prefers-color-scheme:dark){.dark\:bg-gray-800{--bg-opacity:1;background-color:#2d3748;background-color:rgba(45,55,72,var(--bg-opacity))}.dark\:bg-gray-900{--bg-opacity:1;background-color:#1a202c;background-color:rgba(26,32,44,var(--bg-opacity))}.dark\:border-gray-700{--border-opacity:1;border-color:#4a5568;border-color:rgba(74,85,104,var(--border-opacity))}.dark\:text-white{--text-opacity:1;color:#fff;color:rgba(255,255,255,var(--text-opacity))}.dark\:text-gray-400{--text-opacity:1;color:#cbd5e0;color:rgba(203,213,224,var(--text-opacity))}.dark\:text-gray-500{--tw-text-opacity:1;color:#6b7280;color:rgba(107,114,128,var(--tw-text-opacity))}}
        </style>
        <style>
            body {
                font-family: 'Nunito', sans-serif;
            }
        </style>
        <script src="https://cdn.tailwindcss.com"></script>
    </head>

    <!-- <body class="relative items-top justify-center min-h-screen bg-gray-100 dark:bg-gray-900 sm:items-center py-4 sm:pt-0"> -->
    <body class="dark:bg-gray-900 py-0">
        <?php
            $userID = $_SESSION['userID'];
            //get address from database
            $result = DB::select('select * from ClientInformation where user_id = ?', [$userID]);
            $address1 = $result[0]->address1;
            $address2 = $result[0]->address2;
            $state = $result[0]->state;
            $result2 = DB::select('select * from FuelQuote where user_id = ?', [$userID]);
            if($result2) {
                $histDisc = .1;
            } else {
                $histDisc = 0;
            }
            $gallonsRequested = "...";
            $deliveryDate = "";
            $gallonPrice = 1.50;
            $totalPrice = 0;
        ?>
        <div>
            <ul class = "navbar-nav text-center mb-2 bg-zinc-600 py-1 rounded">
                <a class="nav-link text-white hover:text-zinc-800 font-bold py-1 px-4 rounded" href="{{url('/fuelQuoteHistory')}}">Quote History</a>
                <a class="nav-link text-white hover:text-zinc-800 font-bold py-1 px-4 rounded" href="{{url('/profileManagement')}}">Manage Profile</a>
                <a class="nav-link text-white hover:text-zinc-800 font-bold py-1 px-4 rounded" href="{{url('/logout')}}">Logout</a>
            </ul>
        </div>
        <div class="container pt-2">
            <div class="flex justify-center">
                <div class="text-center text-cyan-700 dark:bg-gray-800 sm:rounded-lg">
                    <div class="p-6">
                    <div class="card font-bold">
                        <div class="card-header">
                        <h2 class="text-3xl">Fuel Quote Form</h2>
                        </div>
                        <div class="card-body">
                            <form action="/fuelQuoteFormSubmit" method="POST">
                            <!-- <form> -->
                                @csrf
                                <div class="grid justify-items-stretch">
                                <input type="text" class="text-center" id="userID" name="userID" value="{{$userID}}" hidden>
                                    <label for="gallonsRequested" class="pt-2">Gallons Requested</label>
                                    <input type="number" min="1" id="gallonsRequested" name="gallonsRequested" onchange="PricingModule(this.value)" class="text-center" placeholder="..." required>
                                    <label for="address1" class="pt-2">Address</label>
                                    @if($address2 == "")
                                        <input type="text" readonly id="address1" name="address1" class="text-center" value="<?php echo $address1;?>" required>
                                    @else
                                        <input type="text" readonly id="address1" name="address1" class="text-center" value="<?php echo $address1;?>, <?php echo $address2;?>">
                                    @endif
                                    <label for="state" class="pt-2">State</label>
                                    <input type="text" readonly id="state" name="state" class="text-center" value="<?php echo $state; ?>">
                                    <label for="deliveryDate" class="pt-2">Delivery Date</label>
                                    <input type="date" id="deliveryDate" name="deliveryDate" class="text-center" placeholder="Delivery Date" value="<?php echo $deliveryDate; ?>" required>
                                    <label for="gallonPrice" class="pt-2">Gallon Price ($)</label>
                                    <input type="number" readonly id="gallonPrice" name="gallonPrice" class="text-center" value="<?php echo number_format($gallonPrice,2); ?>">
                                    <label for="totalPrice" class="pt-2">Total Price ($)</label>
                                    <input type="number" readonly id="totalPrice" name="totalPrice" class="text-center" value="<?php echo $totalPrice; ?>">
                                        <script>
                                            function PricingModule(gallonsReq) {
                                                var gallonAmountCharge = .03;
                                                if (gallonsReq > 1000) {
                                                    gallonAmountCharge = .02;
                                                }
                                                var locationFactor = .04;
                                                if (document.getElementById("state").value == "TX") {
                                                    locationFactor = .02;
                                                }
                                                var historyDiscount = <?php echo $histDisc; ?>;

                                                var margin = (locationFactor - historyDiscount + gallonAmountCharge + .1) * 1.5;
                                                var gallonP = 1.5 + margin;
                                                var totalP = gallonsReq * gallonP;
                                                var divobj = document.getElementById('totalPrice');
                                                var divobj2 = document.getElementById('gallonPrice');
                                                // divobj.value = totalP.toFixed(2);
                                                //round totalP up to 2 decimal places
                                                divobj.value = Math.ceil(totalP * 100) / 100;
                                                divobj2.value = Math.ceil(gallonP * 100) / 100;
                                                // divobj2.value = gallonP.toFixed(2);
                                            }
                                        </script>
                                    <div class="grid justify-items-stretch pt-6">
                                        <button class="bg-cyan-700 hover:bg-cyan-900 text-white font-bold py-2 px-4 rounded" onclick="return confirm('Are you sure you want to submit?, The total is: $' + document.getElementById('totalPrice').value)" type="submit">Submit</button>
                                    </div>
                                </div>
                            </form>

                        </div>
                    </div>
                    </div>
                </div>
            </div>
        </div>
    </body>
</html>
