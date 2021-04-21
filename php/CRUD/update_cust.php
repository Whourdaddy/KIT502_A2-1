<?php include('update_cust_f.php') ?>
<!DOCTYPE html>
<html>

<head>
        <title>Update</title>
        <!-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
        <link rel="stylesheet" href="css/style.css"> -->
        <link rel="stylesheet" type="text/css" href="../../css/style.css">
</head>

<body>
        <div class="header">
                <h2>Update customer</h2>
        </div>
        <form method="post" action="update_cust.php">


                <?php include('../../errors.php'); ?>
                <div class="input-group">
                        <label>Username</label>
                        <input type="text" name="c_username" value="<?php echo $c_username; ?>">
                </div>

                <div class="input-group">
                        <label>First Name</label>
                        <input type="text" name="c_first_name" value="<?php echo $c_first_name; ?>">
                </div>

                <div class="input-group">
                        <label>Last Name</label>
                        <input type="text" name="c_last_name" value="<?php echo $c_last_name; ?>">
                </div>
                <div class="input-group">
                        <label>Email</label>
                        <input type="email" name="c_email" value="<?php echo $c_email; ?>">
                </div>

                <div class="input-group">
                        <label>Mobile</label>
                        <input type="text" name="c_mobile" value="<?php echo $c_mobile; ?>">
                </div>
                <div class="input-group">
                        <label>Address</label>
                        <input type="text" name="c_address" value="<?php echo $c_address; ?>">
                </div>
                <div class="input-group">
                        <label>Country</label>
                        <select class="c_country" name="c_country" value="<?php echo $c_country; ?>"><br>
                                <option selected value=""></option>
                                <option value="China">China</option>
                                <option value="Australia">Australia</option>
                                <option value="America">America</option>
                                <option value="Africa">Africa</option>
                                <option value="Japan">Japan</option>
                                <option value="South Korea">South Korea</option>
                        </select><br>
                </div>
                <div class="input-group">
                
                        <button type="submit" class="btn btn-primary" name="update_cust_ad">Update</button>
                        <a href="../sys_dashboard.php" class="link-primary">View</a>
                </div>
        </form>
</body>

</html>


<td><a href="update.php?id=<?= $rows['id'] ?>" class="btn btn-success">Update</a>

<a href="php/delete.php?id=<?= $rows['id'] ?>" class="btn btn-danger">Delete</a>
</td>