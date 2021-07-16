<!doctype html>
<html lang="en">
  <head> 
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    </head> 
  
  <body>
    <div class="container">
        <h2 class="pt-3">โปรแกรมคำนวณหาค่าดัชนีมวลกาย(BMI)</h2>
        <form class="row pt-3 g-3" method="GET" action="Ex6.php">
            <div class="col-auto">
              <label for="weight" class="visually-hidden">น้ำหนัก</label>
              <input type="text"  class="form-control"  placeholder="น้ำหนัก"
              id="weight" name="weight" value="">
            </div>
            <div class="col-auto">
              <label for="height" class="visually-hidden">ส่วนสูง</label>
              <input type="text"  class="form-control"  placeholder="ส่วนสูง"
              id="height" name="height" value="">
            </div>
            
            <div class="col-auto">
              <button type="submit" value="submit" name="submit" class="btn btn-primary mb-3">คำนวณ</button>
            </div>
          </form>
    </div>

  
<div class="container">

<?php
  $weight=$_GET['weight'];
  $height=$_GET['height'] ;
  if ($weight<>"" && $height<>"")
  $bmi = $weight/(($height/100)*($height/100));
  
  if($bmi<=18.50){
       $c="น้ำหนักน้อย / ผอม";
       $s="มากกว่าคนปกติ";
  }else if($bmi>18.50 && $bmi<22.90){
       $c="ปกติ (สุขภาพดี)";   
       $s="เท่าคนปกติ";
  }else if($bmi>23 && $bmi<24.90){
       $c="ท้วม / โรคอ้วนระดับ 1";   
       $s="อันตรายระดับ 1";
  }else if($bmi>25 && $bmi<29.90){
       $c="อ้วน / โรคอ้วนระดับ 2";   
       $s="อันตรายระดับ 2";
  }else if($bmi>30){
       $c="อ้วนมาก / โรคอ้วนระดับ 3";
       $s="อันตรายระดับ 3";   
  }


  echo "<div class='alert alert-primary ' role='alert' >
   ค่า BMI {$bmi} <br>อยู่ในเกณท์ {$c} <br>ภาวะเสี่ยงต่อโรค {$s} </div>";
  
  ?>



</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
<!doctype html>
<html lang="en">
  <head> 
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title></title>
    </head> 