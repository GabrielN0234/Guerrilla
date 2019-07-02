<?php
    $JsonGuerrilla='[{"name":"NOMBRE_POR_DEFECTO","email":"EMAIL_POR_DEFECTO","faction":"FACTION_POR_DEFECTO","timestamp":0,"rank":0,"resourcess":{"oil":0,"money":0,"people":0},"buuildings":{"bunker":0},"army":{"assault":0,"engineer":0,"tank":0}},{"name":"NOMBRE_POR_DEFECTO","email":"EMAIL_POR_DEFECTO","faction":"FACTION_POR_DEFECTO","timestamp":0,"rank":0,"resourcess":{"oil":0,"money":0,"people":0},"buuildings":{"bunker":0},"army":{"assault":0,"engineer":0,"tank":0}},{"name":"NOMBRE_POR_DEFECTO","email":"EMAIL_POR_DEFECTO","faction":"FACTION_POR_DEFECTO","timestamp":0,"rank":0,"resourcess":{"oil":0,"money":0,"people":0},"buuildings":{"bunker":0},"army":{"assault":0,"engineer":0,"tank":0}}]';
    
    $guerrillaArray = json_decode($JsonGuerrilla,true);
?>


<section id="login" class="login-block">
    <div class="container">
        <div class="row">
            <div class="col login-sec">
                <h2 class="text-center">Rank</h2>

                <table id="tabla" class="table table-striped" cellspacing="0" width="100%">
                    <thead>
                        <tr>
                            <th class="th-sm">Rank
                            </th>
                            <th class="th-sm">Company
                            </th>
                            <th class="th-sm">
                            </th>

                        </tr>
                    </thead>
                        <tbody>
                            <?php
                                foreach ($guerrillaArray as $item) {
                            ?>    
                            <tr>
                                <td id="fila"><?php echo $item["rank"]?></td>
                                <td id="fila"><?php echo $item["name"]?></td>
                                <td id="fila"><a  href="Javascript:showForms('view/result.php')" class="btn btn-block btn-lg btn-success" id="btienda">
                                   <span class="texto_grande">Atacar </span></a></td>
                            </tr>
                            <?php
                                }
                            ?> 

                        </tbody>

                </table>
                
                
                
            </div>
        </div>
    </div>
</section>