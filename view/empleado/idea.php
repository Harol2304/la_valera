
                <?php
                include "../../bd/conexion.php";
                            $query = mysqli_query($conection,"SELECT * FROM mesa ORDER BY numero_m ASC
                                                                            LIMIT 0,9");
                    mysqli_close($conection);
                    $result = mysqli_num_rows($query);
                    if ($result > 0) {
                        while ($data = mysqli_fetch_array($query)) {
                    ?>
                        <a href="../pedidos/pedido.php?id=<?php echo $data["id_mesa"]?>">
                        <div class="col-sm-2 rock_book_table contenedor-mesa ">
                        <?php
                            
                            switch ($data["estado"]) {
                                case '1':
                                    ?>
                                    <div class="libre">
                                    <img src="../../librerias/mesas/images/table/mesa.png"alt="">
                                    <?php   
                                    break;
                                
                                
                                default:
                                    ?>
                                    <div class="alerta">
                                    <img src="../../librerias/mesas/images/table/alerta.png"alt="">
                                    <?php 
                                    break;
                            }
                        
                        ?>

                        
                            <h2>Mesa #<?php echo $data["numero_m"]?></h2>
                        </div>
                        </div>
                        </a>
                <?php
                        }
                    }

                ?>
                </div>
                </div>
                </div>
                        </div>
                        </div>
                    </div>
                    </div>

                    <div class="container">
                    <div class="rock_book_table_main">
                        <div class="row">
                        <div class="col-lg-12">
                        <div><strong style="font-family: garamond;
                                            color:black;"><h1>Segunda Planta</h1></strong></div>
                                            <?php
                include "../../bd/conexion.php";
                            $query = mysqli_query($conection,"SELECT * FROM mesa ORDER BY numero_m ASC
                                                                            LIMIT 10,30");
                    mysqli_close($conection);
                    $result = mysqli_num_rows($query);
                    if ($result > 0) {
                        while ($data = mysqli_fetch_array($query)) {
                    ?>
                        <a href="../pedidos/pedido.php?id=<?php echo $data["id_mesa"]?>">
                        <div class="col-sm-2 rock_book_table contenedor-mesa ">
                        <?php
                            
                            switch ($data["estado"]) {
                                case '1':
                                    ?>
                                    <div class="libre">
                                    <img src="../../librerias/mesas/images/table/mesa.png"alt="">
                                    <?php   
                                    break;
                                case '2':
                                    ?>
                                    <div class="ocupada">
                                    <img src="../../librerias/mesas/images/table/ocupada.png" alt="">
                                    <?php   
                                    break;
                                
                                default:
                                    ?>
                                    <div class="alerta">
                                    <img src="../../librerias/mesas/images/table/alerta.png"alt="">
                                    <?php 
                                    break;
                            }
                        
                        ?>

                        
                            <h2>Mesa #<?php echo $data["numero_m"]?></h2>
                        </div>
                        </div>
                        </a>
                <?php
                        }
                    }

                ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>