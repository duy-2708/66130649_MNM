<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bai1</title>
</head>
<body>
    <table border ="1">
        <tr>
            <?php
            for($i= 1 ; $i<=10 ; $i++){
                printf("<td> Bang cuu chuong %d </td>",$i);
             }   
            ?>
        </tr>
        <?php
        for($i = 1 ; $i <=10 ; $i++){
            echo "<tr>";
            for($j = 1 ; $j <=10 ;$j++){
                printf("<td> %d x %d = %d </td>",$i,$j,$i*$j);
            }
             echo"</tr>";
        }
        ?>
    </table>
    <?php
        $n = rand(1,100);
        for($i = 0 ; $i < $n ; $i++){
            if($i %2 == 0 )
                echo $i."<br>"  ;
        }
        for($k = 1 ; $k <= 10 ; $k++){
            printf("Bang cuu chuong %d<br> ",$k);
            for($m = 1 ; $m<=10 ;$m++){    
                $multi = $k * $m ; 
                printf("%d x %d = %d<br>",$k,$m,$multi);
            }
        }
        function Uoc ($N){
            for($j = 1 ; $j <= $N ; $j++){
                if($N % $j == 0){
                    echo $j."<br>" ;
                }
            }
        }
        function SNT($N){
            if( $N < 2 ) return 0 ;
            for( $l = 2 ; $l <= sqrt($N) ; $l++){
                if($N % $l == 0 ){
                    return 0 ;
                }
            }
             return 1 ;
        }
        function TongNT ($N){
            $tong = 0;
            for($b = 2 ; $b <=$N ; $b++){
                if(SNT($b) == 1 ){
                    $tong += $b ;
                }
            }
            return $tong ;
        }
        function SCP($N){
            if( $N < 0 ) return 0 ;
            $can = sqrt($N);
            if( $can * $can  == $N){
                return 1 ;
            }
            return 0 ;
        }
        $N = rand(-100,100);
            if($N > 0 ){
                printf("Uoc cua %d <br> ",$N);
                Uoc($N) ;
        }
        if(SNT($N) == 0 ){
            printf("Khong phai la so nguyen to<br> ") ;
        } else{ 
            echo "La so nguyen to "."Tong cac so nguyen to < N<br> ".TongNT($N) ;
        }
        if(SCP($N) == 0 ) printf("Khong phai so chinh phuong ");
        else printf("La so chinh phuong %d ",$N);
    ?>
</body>
</html>