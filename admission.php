<?php

session_start();
if (!isset($_SESSION['User_name'])) {
    header('location:Log_in.php');
}

?>

<!DOCTYPE html>
<html>

<head>
    <title>Admin - School management system </title>
    <meta name="viewport" content="width=device-width,intial-scale=1.0" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="css/mystyle.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>


<body>
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <?php include 'header.php' ?>
            </div>

        </div>
        <div class="row">
            <div class="col-md-3 bg-dark text-white">
                <?php include 'leftbar.php' ?>
                <div>
                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <?php echo $_SESSION['User_name']; ?>&nbsp;&nbsp;
                    <button type="submit" name="save" class="btn btn-danger"><a href="logout.php" class="text-white" style="text-decoration:none;">Logout</a></button>
                </div>
            </div>
            <div class="col-md-8">
                <div class="row pt-4">
                    <div class="col-md-12 text-success">
                        <h4>Admission Form : </h4>
                    </div>
                </div>
                <form action="<?php echo $_SERVER['PHP_SELF']; ?>" name="Admissionform" class="form-control">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="sname" class="form-label">Student Name</label>
                                <input type="text" name="sname" id="sname" class="form-control" placeholder="Student name" />
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="fname" class="form-label">Father Name</label>
                                <input type="text" name="fname" id="fname" class="form-control" placeholder="Father name" />
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="mname" class="form-label">Mother Name</label>
                                <input type="text" name="mname" id="mname" class="form-control" placeholder="Mother name" />

                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="DOB" class="form-label">D.O.B</label>
                                <input type="date" name="DOB" id="DOB" class="form-control" />

                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label class="form-label"> Gender :</label>

                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="gender" id="male">
                                    <label class="form-check-label" for="male">
                                        Male
                                    </label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="gender" id="female" checked>
                                    <label class="form-check-label" for="female">
                                        Female
                                    </label>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="from-group">
                                <label for="DOM" class="form-label">Date of Admission</label>
                                <input type="date" name="DOM" id="DOM" class="form-control" />
                            </div>
                        </div>

                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="classlist" class="form-label">Class </label>
                                <select id="classlist" class="form-select">
                                    <option selected>Select Class</option>
                                    <option>1st</option>
                                    <option>2nd</option>
                                    <option>3rd</option>
                                    <option>4th</option>
                                    <option>6th</option>
                                    <option>7th</option>
                                    <option>8th</option>
                                    <option>9th</option>
                                    <option>10th</option>
                                    <option>11th</option>
                                    <option>12th</option>

                                </select>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="paidfee" class="form-label">Paid Fee.</label>
                                <input type="number" name="paidfee" id="paidfee" class="form-control" placeholder="Paid Fee">
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="contact" class="form-label">Contact No.</label>
                                <input type="text" name="contact" id="contact" placeholder="Contact Number" class="form-control"/>
                            </div>
                        </div>
                        <div class="col-md-6">

                        <div class="form-group">
                                <label for="alternate" class="form-label">Alternate No.</label>
                                <input type="text" name="alternate" id="alternate" placeholder="Alternate Number" class="form-control"/>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <div class="form-group">
                            <label for="address" class="form-label">Address</label>
                            <input type="text" class="form-control"  name="address" id="address" placeholder="Enter Full Address"/>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                    <div class="col-md-3 col-sm-3 mt-3">
                        <button type="submit" name="save" class="btn btn-primary form-control">Form Submit</button>
                    </div>
                    </div>
                        
                </form>
            </div>
        </div>
    </div>



    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>