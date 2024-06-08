<?php include('php/secction/header.php')?>

<div class="bigslam-page-title-wrap  bigslam-style-medium bigslam-left-align">
    <div class="bigslam-header-transparent-substitute"></div>
    <div class="bigslam-page-title-overlay"></div>
    <div class="bigslam-page-title-container bigslam-container">
        <div class="bigslam-page-title-content bigslam-item-pdlr">
            <h1 class="bigslam-page-title">Categories</h1>
            <!--div class="bigslam-page-caption">Justo Vulputate Vehicula</div--->
        </div>
    </div>
</div>

<style>
    table {
        width: 100%;
        border-collapse: collapse;
        margin-bottom: 20px;
    }
    table, th, td {
        border: 1px solid black;
        
    }
    th, td {
        padding: 8px;
        text-align: left;
        color: #18181f;
    }
    th {
        background-color: #000;
    }
    h2 {
        margin-top: 20px;
    }
    .bg-black{
        background-color: #18181f;
    }
</style>





<?php
    // Configuración de la base de datos
    $servername = "localhost"; // Cambia esto si tu servidor de MySQL no está en localhost
    $username = "root"; // Cambia esto a tu usuario de MySQL
    $password = ""; // Cambia esto a tu contraseña de MySQL
    $dbname = "SmokyMountainCup2024";

    // Crear conexión
    $conn = new mysqli($servername, $username, $password, $dbname);

    // Verificar conexión
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    } 
    
    function mostrarEquiposPorCategoria($conn, $categoria) {
        $sql = "SELECT nombre, estado, categoria FROM Equipos WHERE categoria = '$categoria'";
        $result = $conn->query($sql);

        // echo "<h2>Categoria: $categoria</h2>";
        echo "<table>
                <thead>
                    <tr>
                        <th style='background-color: #000000' >Nombre</th>
                        <th style='background-color: #000000'>Estado</th>
                        <th style='background-color: #000000'>Categoria</th>
                    </tr>
                </thead>
                <tbody>";

        if ($result->num_rows > 0) {
            while($row = $result->fetch_assoc()) {
                echo "<tr>
                        <td class='text-black'>{$row['nombre']}</td>
                        <td>{$row['estado']}</td>
                        <td> {$row['categoria']} </td>
                      </tr>";
            }
        } else {
            echo "<tr><td colspan='2'>No hay datos disponibles</td></tr>";
        }

        echo "</tbody></table>";
    }

    function mostrarNombreCategoria($conn, $categoria){
        $sql = "SELECT nombre, estado FROM Equipos WHERE categoria = '$categoria'";
        $result = $conn->query($sql);

        echo "<h2>Categoria: $categoria</h2>";
    }

    // Mostrar equipos por cada categoría
    
    // mostrarEquiposPorCategoria($conn, 'Premier');
    // mostrarEquiposPorCategoria($conn, 'Primera');
    // mostrarEquiposPorCategoria($conn, 'Femenil');

    // Cerrar conexión
    // $conn->close();
    ?>

?>




<div class="gdlr-core-pbf-wrapper " style="padding: 100px 0px 50px 0px;" id="gdlr-core-wrapper-2">
    <div class="gdlr-core-pbf-background-wrap"></div>
    <div class="gdlr-core-pbf-wrapper-content gdlr-core-js ">
        <div class="gdlr-core-pbf-wrapper-container clearfix gdlr-core-container">


            <div class="gdlr-core-pbf-column gdlr-core-column-60">
                <div class="gdlr-core-pbf-column-content-margin gdlr-core-js ">
                    <div class="gdlr-core-pbf-column-content clearfix gdlr-core-js ">
                        

                        <div class="container">
                            <div class="display-flex">
                                <h3> Categories </h3>
                            </div>
                        </div>

                        <div class="gdlr-core-pbf-element">
                            <div class="gdlr-core-text-box-item gdlr-core-item-pdlr gdlr-core-item-pdb gdlr-core-left-align gdlr-core-no-p-space"
                                style="padding-bottom: 0px ;">
                                <div class="gdlr-core-text-box-item-content" style="text-transform: none ;">
                                    <div class="sportspress sp-widget-align-none">
                                        <div class="sp-template sp-template-event-list">
                                            <h4 class="sp-table-caption bg-black" style="background-color: #18181f;"> FEMENIL  </h4>
                                            <div class="sp-table-wrapper">
                                               <?php echo mostrarEquiposPorCategoria($conn, 'Premier')?>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="gdlr-core-pbf-element">
                            <div class="gdlr-core-text-box-item gdlr-core-item-pdlr gdlr-core-item-pdb gdlr-core-left-align gdlr-core-no-p-space"
                                style="padding-bottom: 0px ;">
                                <div class="gdlr-core-text-box-item-content" style="text-transform: none ;">
                                    <div class="sportspress sp-widget-align-none">
                                        <div class="sp-template sp-template-event-list">
                                            <h4 class="sp-table-caption">PREMIER</h4>
                                            <div class="sp-table-wrapper">
                                               <?php echo mostrarEquiposPorCategoria($conn, 'Primera')?>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="gdlr-core-pbf-element">
                            <div class="gdlr-core-text-box-item gdlr-core-item-pdlr gdlr-core-item-pdb gdlr-core-left-align gdlr-core-no-p-space"
                                style="padding-bottom: 0px ;">
                                <div class="gdlr-core-text-box-item-content" style="text-transform: none ;">
                                    <div class="sportspress sp-widget-align-none">
                                        <div class="sp-template sp-template-event-list">
                                            <h4 class="sp-table-caption">PRIMERA</h4>
                                            <div class="sp-table-wrapper">
                                               <?php echo mostrarEquiposPorCategoria($conn, 'Femenil')?>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                      
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


<?php $conn->close();?>
<?php include('php/secction/footer.php')?>
