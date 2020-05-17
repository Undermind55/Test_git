<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

</head>
<body>
<input type="text" id="myText" value="">
<button onclick="myFunction()">กดดิ</button>

<p id="demo"></p>

<script>
function myFunction() {
  var x = document.getElementById("myText").value;
  if(x == 1){
    document.getElementById("demo").innerHTML = x+"   Undermind";
  }else{
    document.getElementById("demo").innerHTML = "Ohohohohoho";
  }

}
</script>
<?php
echo "------------------------------Chapter 1--------------------------------<br>";
$n = 2;
for($i=1;$i<=$n+1;$i++){ //Row

    for($j=1;$j<=$n+1-$i;$j++){ // Column
        echo 1;
    }
    for($j=1;$j<=$i;$j++){
        echo 0;
    }
    echo "<br>";
}

echo "--------------------------Chapter 2------------------------------<br>";

$n2 = 5;
$status = "";
for($i=1;$i<=$n2;$i++){ //Row
    if($i%2 == 0){
        $status = "event";
    }else{
        $status = "odd";
    }

    for($j=1;$j<=$n2;$j++){ // Column
            if($status == "event"){
            if($j%2 == 0){
                echo "0";
            }else{
                echo "1";
            }
        }else{
            if($j%2 == 0){
                echo "1";
            }else{
                echo "0";
            }

        }
    }
    echo "<br>";
}

echo "---------------------Chapter 3---------------------------------<br>";
$n3 = 4;
for($i=0;$i<$n3;$i++){
  
    for($j=1;$j<=$n3-($i+1);$j++){ // Column
        echo "#";
    }
     for($j=1;$j<=($i*2)+1;$j++){ // Column
      
        echo $i+1;
    }
    for($j=1;$j<=$n3-($i+1);$j++){ // Column
        echo "#";
    }
    echo "<br>";
}

for($i=$n3-2;$i>=0;$i--){
  
    for($j=1;$j<=$n3-($i+1);$j++){ // Column
        echo "#";
    }
     for($j=1;$j<=($i*2)+1;$j++){ // Column
      
        echo $i+1;
    }
    for($j=1;$j<=$n3-($i+1);$j++){ // Column
        echo "#";
    }
    echo "<br>";
}


?>


</body>
</html>