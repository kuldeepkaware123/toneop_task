<?php
// Include the FirebaseDB class
include 'db-config.php';

// Use the FirebaseDB instance
$data = $firebaseDB->getData('/');


$field1 = "10 to 25 mm Price";
$price1 = 1000;
$field2 = "8 to 25 mm Price";
$price2 = 2000;
$field3 = "6 to 25 mm Price";
$price3 = 3000;


?>
<?php

?>
<!-- pages/tmt-bars-price.php -->
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Bansal TMT Saria Price Today | TMT Bar Price Today </title>
    <meta name="description" content="Bansal TMT Saria Price Today - 12 mm, 10 mm, 8 mm, 6 mm TMT bar price in MP Top Cities including - Bhopal , Indore, Lucknow, Sagar, Jabalpur, Sehore, Ujjain, Dewas, Rewa. Inquiry Now">
    <meta name="keywords" content="Bansal TMT,Bansal TMT saria, Bansal bars,Bansal TMT bars, About Bansal TMT, Bansal TMT Company, Bansal TMT manufacturers, Bansal TMT suppliers, Bansal TMT Sariya, Bansal TMT Exporters">
    <link rel="canonical" href="https://bansaltmtsariya.com/tmt-bars-price.php" />
    <link rel="stylesheet" href="style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">


    <!-- Include Firebase JavaScript SDK initialization -->
</head>


<body>
    <!-- Include the header content -->
    <div class="page-header has-image">
        <!-- Your existing header content -->
        <div class="page-header-content">
            <div class="featured-image"></div>
            <div class="container">
                <h1>Bansal TMT Saria Price Today</h1>
                <nav class="breadcrumbs">
                    <a class="home" href="#"><span>Home</span></a>
                    <i class="fa fa-angle-right" aria-hidden="true"></i>
                    <span>Bansal TMT Saria Price Today</span>
                    <a href="priceinput.html">
                        <button class="btn btn-danger">Input</button>
                    </a>
                </nav>
            </div>
        </div>
    </div>
    <!-- iframe -->
    <!-- <iframe src="https://www.jagran.com/" width="600" height="400"></iframe> -->

    <!-- Your existing HTML content with dynamic data from Firebase -->
    <div class="contactpage pagepadd">
        <div class="container">
            <div class="row">

                <div class="col-lg-12 col-md-12">

                </div>
                <div class="col-lg-6 col-md-12">
                    <img src="Price-Today_new.jpg" class="w-100 poster">

                    <div class="container price-section w-75 rounded text-center">
                        <button type="button" class="btn btn-outline-light btn-lg fw-bold "> Date : <?php echo $data['date']; ?></button>
                        <div class="row px-5 py-1 fw-bold fs-5 mx-auto my-3">
                            <div class="col-8"><?php echo $field1; ?></div>
                            <div class="col-2 text-right"><?php echo $price1; ?></div>
                        </div>
                        <div class="row px-5 py-1 fw-bold fs-5 mx-auto my-3">
                            <div class="col-8"><?php echo $field2; ?></div>
                            <div class="col-2 text-right"><?php echo $price2; ?></div>
                        </div>
                        <div class="row px-5 py-1 fw-bold fs-5 mx-auto my-3">
                            <div class="col-8"><?php echo $field3; ?></div>
                            <div class="col-2 text-right"><?php echo $price3; ?></div>
                        </div>

                    </div>
                </div>
                <div class="col-lg-6 col-md-12">
                    <h2>Bansal TMT Saria 10 to 25 mm Price</h2>
                    <div class="table-responsive">
                        <table class="table table-1">
                            <tbody>
                                <tr>
                                    <th><span>City</span></th>
                                    <th><span>Size</span></th>
                                    <th><span>Quantity</span></th>
                                    <th><span>Price</span></th>
                                    <th><span>Updated On</span></th>

                                </tr>

                                <tr>
                                    <td>Bhopal</td>
                                    <td rowspan="4" style="vertical-align: middle;">10 to 25</td>
                                    <td rowspan="4" style="vertical-align: middle;">100 kg</td>
                                    <td rowspan="4" style="vertical-align: middle;"><?php echo $data['price']; ?></td>
                                    <td rowspan="4" style="vertical-align: middle;"><?php echo $data['date']; ?></td>


                                </tr>
                                <tr>
                                    <td>Indore</td>
                                </tr>
                                <tr>
                                    <td>Ujjain</td>
                                </tr>
                                <tr>
                                    <td>Jabalpur</td>
                                </tr>

                                <!-- /tr -->




                            </tbody>
                        </table>
                    </div>
                    <h2>Bansal TMT Saria 08 to 32 mm Price</h2>
                    <table class="table table-1">
                        <tbody>
                            <tr>
                                <th><span>City</span></th>
                                <th><span>Size</span></th>
                                <th><span>Quantity</span></th>
                                <th><span>Price</span></th>
                                <th><span>Updated On</span></th>
                            </tr>

                            <tr>
                                <td>Bhopal</td>
                                <td rowspan="4" style="vertical-align: middle;">08 to 32</td>
                                <td rowspan="4" style="vertical-align: middle;">100 kg</td>
                                <td rowspan="4" style="vertical-align: middle;"><?php echo $data['price']; ?></td>
                                <td rowspan="4" style="vertical-align: middle;"><?php echo $data['date']; ?></td>

                            </tr>
                            <tr>
                                <td>Indore</td>
                            </tr>
                            <tr>
                                <td>Ujjain</td>
                            </tr>
                            <tr>
                                <td>Jabalpur</td>
                            </tr>

                            <!-- /tr -->
                        </tbody>
                    </table>
                    <h2>Bansal TMT Saria 6mm Price</h2>
                    <table class="table table-1">
                        <tbody>
                            <tr>
                                <th><span>City</span></th>
                                <th><span>Size</span></th>
                                <th><span>Quantity</span></th>
                                <th><span>Price</span></th>
                                <th><span>Updated On</span></th>
                            </tr>
                            <tr>
                                <td>Bhopal </td>
                                <td rowspan="4" style="vertical-align: middle;">6mm</td>
                                <td rowspan="4" style="vertical-align: middle;">100 kg</td>
                                <td rowspan="4" style="vertical-align: middle;"><?php echo $data['price']; ?></td>
                                <td rowspan="4" style="vertical-align: middle;"><?php echo $data['date']; ?></td>


                            </tr>
                            <tr>
                                <td>Indore</td>
                            </tr>
                            <tr>
                                <td>Ujjain</td>
                            </tr>
                            <tr>
                                <td>Jabalpur</td>
                            </tr>

                            <!--/tr -->




                        </tbody>
                    </table>
                </div>

            </div>
        </div>
    </div>

</body>

</html>