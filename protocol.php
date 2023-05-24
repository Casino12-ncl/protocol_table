<?php 
require_once 'connect.php'; ?>

<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css" integrity="sha384-zCbKRCUGaJDkqS1kPbPd7TveP5iyJE0EjAuZQTgFLD2ylzuqKfdKlfG/eSrtxUkn" crossorigin="anonymous">

<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

<div class="offset-md-4 col-sm-6">
    <div class="tablepages">
        <th scope="row">
            <table class="table">
                <thead>
                    <tr>                        
                        <th scope="col">номер протокола</th>
                        <th scope="col">Дата выдачи</th>
                        <th scope="col">Ответсвтенный СОтрудник</th>
                        <th scope="col">Признак соответствия значений в протоколе по нормам</th>                            
                    </tr>
                </thead>
                <tbody>
                <?php  
                $results = $connect-> query("SELECT * FROM protocol_table");             
                foreach($results as $result) { ?>
                    <tr>
                    
                    <td><?php echo $result["number"] ?></td>                                                    
                    <td><?php echo $result["date"] ?></td>
                    <td><?php echo $result["worker"] ?></td>
                    <td><?php echo $result["pro_norm"] ?></td>
                    </tr>
                    <?php }; ?>
                </tbody>
            </table>
        </th>  
    </div>
    
    <form action="add.php">
        <br>
        <button class="offset-md-4 col-sm-6 btn btn-primary">Добавить</button>
    </form>
</div>
            
        
            
