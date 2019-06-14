<html>
<head>
    <title>Test Online Hier Digital Soal 2</title>
</head>
<body align="center">
    <h2>Buble Sort</h2>
    <form action="" method="POST">
        Input Number :
        <input type="text" name="input" placeholder="Gunakan spasi">
        <input type="submit" value="Proses">
    </form>
    <?php 
        if(isset($_POST['input'])){
            $input = $_POST['input'];
            $output = explode(' ',$input);
            foreach ($output as $value) {
                for($i=0; $i<count($output)-1; $i++){
                    if($output[$i]>$output[$i+1]){
                        $output[$i]   = $output[$i] + $output[$i+1] ;
                        $output[$i+1] = $output[$i] - $output[$i+1];
                        $output[$i]   = $output[$i] - $output[$i+1];
                    }
                }
            }
            echo "Output : ";
            for($a=0; $a<count($output); $a++){
                echo $output[$a]." ";
            }
        }else{
            echo "Output : Empty";
        }
    ?>
</body>
</html>