
<?php
$mark =$_GET ["mark"] ;


if ($mark >= 80 && $mark <=100 ){
    echo "Grad = 4 " ;
}else if ($mark >= 70 && $mark <80){

    echo "Grad = 3 " ;
}else if ($mark >= 60 && $mark <70){

    echo "Grad = 2 " ;

}else if ($mark >= 50 && $mark <60){
    echo "Grad = 2 " ;

}else if ($mark >= 0 && $mark <50){
    echo "Grad = 0 " ;
    
}else {
    echo "คะแนนไม่ได้อยู่ในช่วง 0 - 100" ;
}
?>

