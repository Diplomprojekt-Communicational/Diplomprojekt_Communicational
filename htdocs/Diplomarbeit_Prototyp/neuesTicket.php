<!DOCTYPE html>
    <?php
        include('header.php');
    ?>
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
        
    <div class="container">
        <div class="row">            
            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                <ul class="nav nav-tabs nav-justified">
                    <li role="presentation"><a href="#">
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
                    <li role="presentation" class="active"><a href="#"> <!--class active-->
                        <span class="glyphicon glyphicon-plus" aria-hidden="true"></span>   
                        Neues Ticket</a>                   
                    </li>
                </ul>
            </div>
        </div>        
        <!--Input forms http://www.w3schools.com/bootstrap/bootstrap_forms_inputs.asp-->
        <div class="row">            
            <div class="col-xs-8 col-sm-8 col-md-6 col-lg-6">
                <form>
                    <div class="form-group">
                        <br><label for="sel1">Hilfethema:</label>
                        <select class="form-control" id="sel1">
                            <option>Allgemeine Anfrage</option>
                            <option>Ein Problem melden</option>
                            <option>Ein Problem melden/Zugangsproblem</option>
                            <option>Feedback</option>
                        </select><br>                                              
                    </div>
                </form>
            </div>
        </div
        <!--Betreff-->
        <div class="row">            
            <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">
                <div class="form-group">
                    <label for="comment">Betreff:</label>
                    <textarea class="form-control" rows="1" id="comment"></textarea>
                </div>
            </div>
        </div>
        <!--Beschreibung-->
        <div class="row">            
            <div class="col-xs-12 col-sm-12 col-md-8 col-lg-8">
                <div class="form-group">
                    <label for="comment">Details der Anfrage:</label>
                    <textarea class="form-control" rows="5" id="comment"></textarea>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-xs-4 col-sm-4 col-md-3 col-lg-3">
                <label for="comment">Priorität:</label><br>
                <div class="radio">
                    <label><input type="radio" name="optradio">Niedrig</label>
                </div>
                <div class="radio">
                    <label><input type="radio" name="optradio">Mittel</label>
                </div>
                <div class="radio">
                    <label><input type="radio" name="optradio">Hoch</label>
                </div>
            </div>
        </div><br>
        <!--Absende und Abbrechen Button-->
        <div class="row">
            <div class="col-xs-3 col-sm-3 col-md-3 col-lg-3">
                <p>
                    <a href="#" class="btn btn-primary" role="button">Absenden</a>
                    <a href="#" class="btn btn-default" role="button">Abbrechen</a>
                </p>
            </div>
        </div><br>
    </div>
        
    </div>
    <?php
        include('footer.php');
    ?>
    </body>
</html>
