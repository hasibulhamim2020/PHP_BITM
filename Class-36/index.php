<?php

//class  One{
//    public function one(){
//        return $this;
//    }
//    public function two(){
////        return "one";
//        echo "one";
//        return $this;
//    }
//    public function three(){
//        return "one";
//    }
//}
//
//echo  (new One())->two()->three();
//require_once  "One.php";
////require_once  "Two.php";
//
//use \One\kkk\One;
//use \Two\kkk\Two;
//
//(new One())->test();
//(new Two())->test1();

//mkdir("test",'0777',true);

//echo "pre";
//print_r($_POST);
$allData = scandir(getcwd());
$directory = [];
$file =[];


print_r($file);
print_r($directory);

//print_r($allData);
$msg ="";
$fmsg ="";
$dmsg="";
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
?>
<!doctype html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css">
<title>Hello, world!</title>
</head>
<body>
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
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.min.js"></script>
</body>
</html>