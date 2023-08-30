<!doctype html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
<title>Hello, world!</title>
</head>
<style>
        li{
            list-style: none;
            float: left;
            margin: 10px;
        }
        .folder{
            font-size: 50px;
            color:burlywood;
        }
        .file{
            font-size: 50px;
            color:#565e64;
        }
    </style>
<body>

<?php

$dir = scandir(getcwd());

foreach ($dir as $d){
    if ('.' != $d && '..' != $d){
        if (is_dir($d)){
            echo "<li>
                        <li>
                        <i class=\"fa-solid fa-folder-open folder\"></i> <br> {$d} <br> <br>
                        </li>
                        </ul>";
        }
    }
}
echo "<br>";
echo "<br>";
echo "<br>";
echo "<br>";
echo "<br>";
// echo "<br>";
foreach ($dir as $d){
    if ('.' != $d && '..' != $d){
        if (!is_dir($d)){
            echo "<li>
                        <li>
                        <i class=\"fa-brands fa-php file\"></i> <br> {$d} <br> <br>
                        </li>
                        </ul>";
        }
    }
}

















$allData = scandir(getcwd());
$directory = [];
$npdirectory = [];
$file =[];

// print_r($file);
// print_r($directory);

$msg ="";
$fmsg ="";
$dmsg="";
$ddrmsg="";
$ddrnpmsg="";
if(isset($_POST['btn'])){
    if(!file_exists($_POST['dn'])){
        mkdir("{$_POST['dn']}","0777",true);
        $msg = "create directory successfully";
    }else{
        $msg = "directory Already exists";
    }
}

if(isset($_POST['fbtn'])){
    if(!file_exists($_POST['fn'])){
        $info = pathinfo($_POST['fn']);
        if("txt" == $info['extension'] or "php" == $info['extension'] ){
            fopen("{$_POST['fn']}",'a');
            $fmsg = "create file successfully";
        }else{
            $fmsg = "file extention not supported";
        }
    }else{
        $fmsg = "file Already exists";
    }
}

foreach ($allData as $data){
    if ("."!= $data && ".."!= $data && ".idea"!= $data){
        if(is_dir($data)){
            array_push($directory,$data);
        }else{
            array_push($file,$data);
        }
    }
}

if(isset($_POST['dbtn'])){
    if(unlink("{$_POST['d-file']}")){
        $dmsg = "file deleted successfully";
    }else{
        $dmsg = "file not exists";
    }
}
if(isset($_POST['ddrbtn'])){
    if(rmdir("{$_POST['ddr-file']}")){
        $ddrmsg = "file deleted successfully";
    }else{
        $ddrmsg = "file not exists";
    }
}

if (isset($_POST['ddrnpbtn'])) {
    $targetDirectory = $_POST['ddrnp-file'];
    
    if (deleteDirectory($targetDirectory)) {
        $ddrnpmsg = "Directory deleted successfully";
    } else {
        $ddrnpmsg = "Failed to delete directory";
    }
}

function deleteDirectory($dir) {

    $files = array_diff(scandir($dir), array('.', '..'));
    foreach ($files as $file) {
        $filePath = "$dir/$file";
        if (is_dir($filePath)) {
            deleteDirectory($filePath);
        } else {
            unlink($filePath);
        }
    }
    
    return rmdir($dir);
}


?>


<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>

<section>
        <div class="container">
            <div class="row">
                <div class="col-md-6 mx-auto bg-info mt-5 p-4">
                    <form action="" method="POST">
                        <div class="mb-3">
                            <label for="dn" class="form-label">Directory Name</label>
                            <input type="text" class="form-control" id="dn" name="dn" placeholder="input directory name">
                        </div>
                        <h3> <?php echo $msg?></h3>
                        <div class="mb-3">
                            <input type="submit" class="form-control btn btn-danger" id="" value="submit-name" name="btn">
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>

    <br>
    <section>
        <div class="container">
            <div class="row">
                <div class="col-md-6 mx-auto bg-info mt-5 p-4">
                    <form action="" method="POST">
                        <div class="mb-3">
                            <label for="fn" class="form-label">Files Name</label>
                            <input type="text" class="form-control" id="fn" name="fn" placeholder="input file name">
                        </div>
                        <h3> <?php echo $fmsg?></h3>
                        <div class="mb-3">
                            <input type="submit" class="form-control btn btn-danger" id="" value="submit-name" name="fbtn">
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>

    <br>
    <section>
        <div class="container">
            <div class="row">
                <div class="col-md-6 mx-auto bg-info mt-5 p-4">
                    <form action="" method="POST">
                        <div class="mb-3">
                            <h3> <?php echo $dmsg?></h3>
                            <label for="fn" class="form-label">Select to delete Files</label>
                            <select class="form-select" aria-label="Default select example" name="d-file">
                                <option selected>Select Files</option>
                                <?php foreach ($file as $f):  ?>
                                <option value="<?php echo $f; ?>"><?php echo $f; ?></option>
                                <?php endforeach; ?>
                            </select>
                        </div>

                        <div class="mb-3">
                            <input type="submit" class="form-control btn btn-danger" id="" value="submit-name" name="dbtn">
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>


    <br>
    <section>
        <div class="container">
            <div class="row">
                <div class="col-md-6 mx-auto bg-info mt-5 p-4">
                    <form action="" method="POST">
                        <div class="mb-3">
                            <h3> <?php echo $ddrmsg?></h3>
                            <label for="fn" class="form-label">Select to delete directory</label>
                            <select class="form-select" aria-label="Default select example" name="ddr-file">
                                <option selected>Select directory</option>
                                <?php foreach ($directory as $d):  ?>
                                <option value="<?php echo $d; ?>"><?php echo $d; ?></option>
                                <?php endforeach; ?>
                            </select>
                        </div>

                        <div class="mb-3">
                            <input type="submit" class="form-control btn btn-danger" id="" value="submit-name" name="ddrbtn">
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>



    <br>
    <section>
        <div class="container">
            <div class="row">
                <div class="col-md-6 mx-auto bg-info mt-5 p-4">
                    <form action="" method="POST">
                        <div class="mb-3">
                            <h3> <?php echo $ddrnpmsg?></h3>
                            <label for="fn" class="form-label">Select to delete non empty directory</label>
                            <select class="form-select" aria-label="Default select example" name="ddrnp-file">
                                <option selected>Select non empty directory</option>
                                <?php foreach ($directory as $dnp):  ?>
                                <option value="<?php echo $dnp; ?>"><?php echo $dnp; ?></option>
                                <?php endforeach; ?>
                            </select>
                        </div>

                        <div class="mb-3">
                            <input type="submit" class="form-control btn btn-danger" id="" value="submit-name" name="ddrnpbtn">
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.min.js"></script>
</body>
</html>