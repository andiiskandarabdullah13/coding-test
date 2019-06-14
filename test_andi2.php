<html>
<head>
    <title>Test Online Hier Digital Soal 2</title>
    <style>
        .nav{
            width:300pt;
            height:auto;
            padding:20px;
            background-color:#00CED1;
            border-radius:10px;
        }
    </style>
</head>
<body>
    <h2>Buble Sort</h2>
    <form action="" method="POST">
    <div class="nav">
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
            echo "<br>
            <br> Output : ";
            for($a=0; $a<count($output); $a++){
                echo $output[$a]." ";
            }
        }else{
            echo "<br>
            <br> Output : Empty";
        }
    ?>
    </div>
</body>
</html>