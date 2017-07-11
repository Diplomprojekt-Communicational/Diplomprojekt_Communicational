<!DOCTYPE html>

<html>
    <head>
        <link rel="stylesheet" href="./css/bootstrap.min.css">        
        <link rel="stylesheet" href="./css/bootstrap-theme.min.css">
        <link rel="stylesheet" href="./css/main.css">
        <meta charset="UTF-8">
        <!--Icons-->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
        <title></title>
    </head>
    <body>
    <?php
        include('header.php');
    ?>    
    <div class="container">
        <div class="row">            
            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                <ul class="nav nav-tabs nav-justified">
                    <li role="presentation" class="active"><a href="#"> <!--class active-->
                        <span class="glyphicon glyphicon-file" aria-hidden="true"></span>
                        Offene Tickets</a>
                    </li>
                    <li role="presentation"><a href="#">
                        <span class="glyphicon glyphicon-inbox" aria-hidden="true"></span>    
                        Meine Tickets</a>
                    </li>
                    <li role="presentation"><a href="#">
                        <span class="glyphicon glyphicon-file" aria-hidden="true"></span>
                        Geschlossen</a>
                    </li>
                    <li role="presentation"><a href="#">
                        <span class="glyphicon glyphicon-plus" aria-hidden="true"></span>   
                        Neues Ticket</a>                   
                    </li>
                </ul>
            </div>
        </div>
        <!--Titel + Searchbar-->
        <div class="row">
            <div class="col-xs-4 col-sm-4 col-md-7 col-lg-7">
                <h3>Offene Tickets</h3>
            </div>
            <!--Searchbar-->
            <div class="col-xs-8 col-sm-8 col-md-5 col-lg-5">                
                <h1></h1>
                <div class="input-group">
                <input type="text" class="form-control" placeholder="">
                <span class="input-group-btn">
                    <button class="btn btn-default" type="button">Suchen</button>
                </span>
              </div>
            </div>
        </div>
        <!--Ticket Table (2 Tickets)-->
        <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                <h1></h1>
                <!--The .table class adds basic styling (light padding and only horizontal dividers) to a table-->
                <table class="table">
                    <thead>
                        <tr>
                            <th>Ticket</th>
                            <th>Datum</th>
                            <th>Betreff</th>
                            <th>Von</th>
                            <th>Priorität</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>Ticket 1</td>
                            <td>01.01.2017</td>
                            <td>Internetproblem</td>
                            <td>Peter Pollheimer</td>
                            <td>Mittel</td>
                        </tr>
                        <tr>
                            <td>Ticket 2</td>
                            <td>01.01.2017</td>
                            <td>Problem mit Infrastruktur</td>
                            <td>Jakob Tomasi</td>                       
                            <td>Mittel</td>
                        </tr>                                              
                    </tbody>
                </table>
            </div> 
        </div>
    </div>
        <?php
            include('footer.php');
        ?>
    </body>
</html>