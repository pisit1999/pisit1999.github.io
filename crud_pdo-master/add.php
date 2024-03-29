<?php 
    require_once('connection.php');

    if (isset($_REQUEST['btn_insert'])) {
        $firstname = $_REQUEST['txt_firstname'];
        $lastname = $_REQUEST['txt_lastname'];
        $amount = $_REQUEST['txt_amount'];

        if (empty($firstname)) {
            $errorMsg = "Please enter Firstname";
        } else if (empty($lastname)) {
            $errorMsg = "please Enter Lastname";
        } else if (empty($amount)) {
            $errorMsg = "please Enter amount"; 
        
              }else      {
            try {
                if (!isset($errorMsg)) {
                    $insert_stmt = $db->prepare("INSERT INTO tbl_person(firstname, lastname,amount) VALUES (:fname, :lname ,:amount) ");
                    $insert_stmt->bindParam(':fname', $firstname);
                    $insert_stmt->bindParam(':lname', $lastname);
                    $insert_stmt->bindParam(':amount', $amount);

                    if ($insert_stmt->execute()) {
                        $insertMsg = "Insert Successfully...";
                        header("refresh:2;index.php");
                    }
                }
            } catch (PDOException $e) {
                echo $e->getMessage();
            }
        }
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <link rel="stylesheet" href="bootstrap/bootstrap.css">
</head>
<style>
    body{
        background: pink;
    }
</style>
<style>
    body{
        font-family: mitr;
    }
</style>
<body>
<a href="02.php" class="btn btn-success">หน้าหลัก</a>

    <div class="container">
    <div class="display-3 text-center">Add+</div>

    <?php 
         if (isset($errorMsg)) {
    ?>
        <div class="alert alert-danger">
            <strong>Wrong! <?php echo $errorMsg; ?></strong>
        </div>
    <?php } ?>
    

    <?php 
         if (isset($insertMsg)) {
    ?>
        <div class="alert alert-success">
            <strong>Success! <?php echo $insertMsg; ?></strong>
        </div>
    <?php } ?>

    <form method="post" class="form-horizontal mt-5">
            
            <div class="form-group text-center">
                <div class="row">
                    <label for="firstname" class="col-sm-3 control-label">PartNo</label>
                    <div class="col-sm-9">
                        <input type="text" name="txt_firstname" class="form-control" placeholder="PartNo...">
                    </div>
                </div>
            </div>
            <div class="form-group text-center">
                <div class="row">
                    <label for="lastname" class="col-sm-3 control-label">DC</label>
                    <div class="col-sm-9">
                        <input type="text" name="txt_lastname" class="form-control" placeholder="DC...">
                    </div>
                </div>
            </div>
            <div class="form-group text-center">
                <div class="row">
                    <label for="amount" class="col-sm-3 control-label">Qty*Amount=Total</label>
                    <div class="col-sm-9">
                        <input type="text" name="txt_amount" class="form-control" placeholder="Qty*Amount=Total...">
                    </div>
                </div>
            </div>
            <div class="form-group text-center">
                <div class="col-md-12 mt-3">
                    <input type="submit" name="btn_insert" class="btn btn-success" value="Insert">
                    <a href="index.php" class="btn btn-danger">Cancel</a>
                </div>
            </div>


    </form>

    <script src="js/slim.js"></script>
    <script src="js/popper.js"></script>
    <script src="js/bootstrap.js"></script>
</body>
</html>