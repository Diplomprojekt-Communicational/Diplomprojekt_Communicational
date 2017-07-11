<html>
    <head>
        <title>Semesterprojekt Footer</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="css/style.css" rel="stylesheet" type="text/css">
        <link rel="stylesheet" href="./../css/bootstrap.min.css">        
        <link rel="stylesheet" href="./../css/bootstrap-theme.min.css">
        <link rel="stylesheet" href="./../css/main.css">
        <link rel="stylesheet" href="./../css/test.css">
    </head>
    <body>       
        <div class="container">
            <div class="row">
                <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                    <div class="panel panel-default">
                        <div class="panel-body">
                        <?php                                                               
                            $outputFooter = 'Copyright' . '&copy; ' . "2006-2017 itsys-tirol Ticket All Rights Reserved.";    
                            echo "<p align='center'>$outputFooter</p>";
                        ?>
                        </div>
                    </div>                          
                </div>
            </div>
        </div>
    </body>
</html>


