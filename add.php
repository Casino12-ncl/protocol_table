
<html>
    
    <head>
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css" integrity="sha384-zCbKRCUGaJDkqS1kPbPd7TveP5iyJE0EjAuZQTgFLD2ylzuqKfdKlfG/eSrtxUkn" crossorigin="anonymous">

<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

        
    </head>
    
<body>
    
<div class = "container">
    <div class="row">
        <div class="offset-md-4 col-sm-6">
            <legend class="col-form-label border-bottom">Форма заполнения</legend>
                <form action="" method="post" enctype="multipart/form-data">
                    <div class="form-group-row">     
                    <label for="number_protocol" class="col-sm-2 col-form-label" >
                        Номер протокола*
                        <input type="number" name="number_protocol" placeholder="Номер протокола*" required>               
                    </label>           
                    </div>
                    
                    <div class="form-group-row">  
                    <label for="date" class="col-sm-2 col-form-label">
                        Дата выдачи*
                        <input type="date" name="date" placeholder="Дата выдачи" required>
                    </label>
                    </div>
                    
                    <div class="form-group-row">  
                    <label for="worker" class="col-sm-2 col-form-label">
                        Ответственный сотрудник
                        <input type="text" name="worker" required>
                    </label>  
                    </div> 
                    <label for="pro_norm" > Признак соответствия значений в протоколе по нормам</label>
                        <select name="pro_norm">
                        <option value="">Выберите вариант</option>                            
                            <option value="yes">Да</option>
                            <option value="no">Нет</option>

                        </select>
                    
                    <br>                                       
                    <div class="offset-md-4 col-sm-6">
                    <form>
                          
                        <input type="submit" class="btn btn-success" value="Добавить">    
                      
                    </form>
                </div>
                </form>
                <p>
                
               
           
        </div>
        
        
    </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.min.js" integrity="sha384-VHvPCCyXqtD5DqJeNxl2dtTyhF78xXNXdkwX1CZeRusQfRKp+tA7hAShOK/B/fQ2" crossorigin="anonymous"></script>

</body>

<?php 
require 'connect.php';

if(isset($_POST["number_protocol"])) {    

    $number_protocol = $_POST['number_protocol'];
    $date = $_POST['date'];
    $worker = $_POST['worker'];
    if(isset($_REQUEST["pro_norm"])){
        $pro_norm = $_REQUEST["pro_norm"];
    } else $pro_norm = 'yes';
    

    
    $check = mysqli_query($connect,"INSERT INTO protocol_table (`number`, `date`, `worker`, `pro_norm`)
    VALUES ('$number_protocol', '$date', '$worker', '$pro_norm')");
     if (!$check) {?>       
        <script>alert("Ошибка записи");</script>
        <?php die;
     }else {
        header( 'Location: ./protocol.php'); 
     }
}
?>
</html>