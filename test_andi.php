<html>
<head>
    <title>Test Online Hier Digital Soal 1</title>
    <style>
        .nav{
            width:250pt;
            height:auto;
            padding:20px;
            background-color:#2E8B57;
            border-radius:10px;
        }
    </style>
</head>
<body>
    <h2>Huruf Duplikat</h2>
    <form action="" method="POST">
        <div class="nav">
            Input :
            <input type="text" name="input">
            <input type="submit" value="Proses">
        </div>
    </form>
    <?php
        if(isset($_POST['input'])){
            $input = $_POST['input'];
            $output = "Empty";
            $break = 0;
            $tmp = str_split($input);
            $len = strlen($input);
            foreach ($tmp as $key => $value) {
                for($b=$key+1; $b< $len; $b++){
                    if ( $tmp[$b] == $tmp[$b-1] || $tmp[$key]==$tmp[$b] ){
                        $output = $tmp[$b];
                        $break = 1;
                        break;
                    }
                }
                if($break==1){
                    break;
                }
            }
            echo "<div class='nav'>Output : <input type='text' value='".$output."'></div>"; 
        }
    ?>
</body>
</html>