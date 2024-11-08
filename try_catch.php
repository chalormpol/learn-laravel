<h3>Try Catch</h3>

<?php
try{
    $x = 10 / 'Hello World';
}catch(DivisionByZeroError $e){
    echo "เกิดข้อผิดพลาด: ไม่สามารถหารด้วยเลขศูนย์ได้";
}catch(TypeError $e){
    echo "เกิดข้อผิดพลาด: ไม่สามารถหารด้วยตัวอักษรได้";
}catch(Throwable $e){
    echo "เกิดข้อผิดพลาดอื่นๆ:" . $e->getMessage();
}

echo '<br />';

try{
    $x = 10 / 0;
}catch(DivisionByZeroError $e){
    echo "เกิดข้อผิดพลาด: ไม่สามารถหารด้วยเลขศูนย์ได้";
}catch(TypeError $e){
    echo "เกิดข้อผิดพลาด: ไม่สามารถหารด้วยตัวอักษรได้";
}catch(Throwable $e){
    echo "เกิดข้อผิดพลาดอื่นๆ:" . $e->getMessage();
}
?>