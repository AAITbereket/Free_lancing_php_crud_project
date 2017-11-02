<!DOCTYPE html>
<html lang="en">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<head>
    <title>Contract Prestari Servicii</title>

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.1/css/font-awesome.min.css">
    <link href="css/datatables.css" rel="stylesheet">

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <script src="js/bootstrap-table.js"></script>
    <script src="js/datatables.js"></script>

</head>
<body class="container">

<nav class="navbar navbar-inverse">
    <div class="container-fluid" style="padding: 10px;">
        <div class="navbar-header">
            <a class="navbar-brand" href="#">Logo</a>
        </div>
        <ul class="nav navbar-nav" style="float: right;">
            <li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" href="#">Inchiriere <span class="caret"></span></a>
                <ul class="dropdown-menu">
                    <li><a href="/Client">Clienti</a></li>
                    <li><a href="/Cerere Inchiriere">Cereri inchiriere</a></li>
                    <li><a href="/Disopzitii_Incasare">Dispozitii incasare</a></li>
                    <li><a href="/Contract_Inchiriere">Contracte ​inchiriere</a></li>
                </ul>
            </li>
            <li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" href="#">Prestari ​Servicii <span class="caret"></span></a>
                <ul class="dropdown-menu">
                    <li><a href="/Partner">Parteneri</a></li>
                    <li><a href="/contract_prestari_servicii">Contracte ​Prestari ​Servicii</a></li>
                    <li><a href="/PV_constatare_serviciilor_prestate">PV de constatare ​a ​serviciilor​ ​prestate</a></li>
                </ul>
            </li>

            <li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" href="#">Institutie <span class="caret"></span></a>
                <ul class="dropdown-menu">
                    <li><a href="#">Referate achitii</a></li>
                    <li><a href="#">Referate nereguli</a></li>
                    <li><a href="/Adrese">Adrese</a></li>
                </ul>
            </li>

        </ul>
    </div>

    <!--bread crumb-->
    <div style="background-color: #b2b2b2; padding: 13px;">
        <span> Contract Prestari Servicii </span>
    </div>

</nav>

<div class="">

    <button class="btn btn-primary" data-toggle="modal" data-target="#addClientModal">New Contract Prestari Servicii </button>
    <br/><br/>

    <div id="addClientModal" class="modal fade" role="dialog">
        <div class="modal-dialog">

            <!-- Modal content-->
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                    <h4 class="modal-title">Nou Formular De Contract De Servicii</h4>
                </div>
                <div class="modal-body">
                    <form class="form-horizontal" method="post" action="#" style="display: block;">

                        <div class="row" style="align-content: center;">
                            <div class="col-sm-1"></div>
                            <div class="form-group form-inline" style="">
                                <label  class="col-sm-4 control-label formLabelStyle">Partener : </label>
                                <div class="">
                                    <div class="input-group col-sm-3">
                                        <input type="text" class="form-control" style="border-radius: 1rem;" name="name" />
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="row" style="align-content: center;">
                            <div class="col-sm-1"></div>
                            <div class="form-group form-inline " style="">
                                <label  class="col-sm-4 control-label formLabelStyle">Obiectul Contractului : </label>
                                <div class="">
                                    <div class="input-group col-sm-3">
                                        <input type="text" class="form-control" name="name" />
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="row" style="align-content: center;">
                            <div class="col-sm-1"></div>
                            <div class="form-group form-inline " style="">
                                <label  class="col-sm-4 control-label formLabelStyle">Suma : </label>
                                <div class="">
                                    <div class="input-group col-sm-3">
                                        <input type="text" class="form-control" name="name" />
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="row" style="align-content: center;">
                            <div class="col-sm-1"></div>
                            <div class="form-group form-inline " style="">
                                <label  class="col-sm-4 control-label formLabelStyle">Durata Contractului : </label>
                                <div class="">
                                    <div class="input-group col-sm-3">
                                        <input type="text" class="form-control" name="name" />
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="row" style="align-content: center;">
                            <div class="col-sm-1"></div>
                            <div class="form-group form-inline" style="">
                                <label  class="col-sm-4 control-label formLabelStyle">Obligatiile Prestatorului : </label>
                                <div class="">
                                    <div class="input-group col-sm-4">
                                        <textarea class="form-control" rows="1" name="name"></textarea>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </form>
                </div>
                <div class="modal-footer">
                    <input type="submit" class="btn btn-primary" value="Add" />
                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                </div>
            </div>

        </div>
    </div>

    <table id="crud_table" class="table table-striped table-bordered" width="100%" cellspacing="0">

        <thead style="background-color: #454545; color: white;">
        <tr>
            <th>ID</th>
            <th>Partener</th>
            <th>Obiectul Contractului</th>
            <th>Suma</th>
            <th>Durata Contractului</th>
            <th>Obligatiile Prestatorului</th>
            <th>ACTIONS</th>
        </tr>
        </thead>

        <tr>
            <th>1</th>
            <th>John Doe</th>
            <th>Lorem Ipsum</th>
            <th>Lorem Ipsum</th>
            <th>Lorem Ipsum</th>
            <th>Lorem ipsum</th>
            <th>
                <a> <i class="fa fa-eye fa-2x" aria-hidden="true"></i> </a>
                <a><i class="fa fa-pencil-square-o fa-2x" aria-hidden="true" data-toggle="modal" data-target="#myModal"></i> </a>
                <a><i class="fa fa-times fa-2x" aria-hidden="true"></i> </a>
            </th>

            <div id="myModal" class="modal fade" role="dialog" style="text-align: match-parent;">
                <div class="modal-dialog">

                    <!-- Modal content-->
                    <div class="modal-content">
                        <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal">&times;</button>
                            <h4 class="modal-title">Edit</h4>
                        </div>
                        <div class="modal-body">
                            <form class="form-horizontal" method="post" action="#" style="display: block;">
                                <div class="row" style="align-content: center;">
                                    <div class="col-sm-1"></div>
                                    <div class="form-group form-inline" style="">
                                        <label  class="col-sm-4 control-label formLabelStyle">Partener</label>
                                        <div class="">
                                            <div class="input-group col-sm-3">
                                                <input type="text" class="form-control" style="border-radius: 1rem;" name="name" />
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="row" style="align-content: center;">
                                    <div class="col-sm-1"></div>
                                    <div class="form-group form-inline " style="">
                                        <label  class="col-sm-4 control-label formLabelStyle">Obiectul Contractului</label>
                                        <div class="">
                                            <div class="input-group col-sm-3">
                                                <input type="text" class="form-control" name="name" />
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="row" style="align-content: center;">
                                    <div class="col-sm-1"></div>
                                    <div class="form-group form-inline " style="">
                                        <label  class="col-sm-4 control-label formLabelStyle">Suma</label>
                                        <div class="">
                                            <div class="input-group col-sm-3">
                                                <input type="text" class="form-control" name="name" />
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="row" style="align-content: center;">
                                    <div class="col-sm-1"></div>
                                    <div class="form-group form-inline " style="">
                                        <label  class="col-sm-4 control-label formLabelStyle">Durata Contractului</label>
                                        <div class="">
                                            <div class="input-group col-sm-3">
                                                <input type="text" class="form-control" name="name" />
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="row" style="align-content: center;">
                                    <div class="col-sm-1"></div>
                                    <div class="form-group form-inline" style="">
                                        <label  class="col-sm-4 control-label formLabelStyle">Obligatiile Prestatorului</label>
                                        <div class="">
                                            <div class="input-group col-sm-3">
                                                <input type="text" class="form-control" name="name" />
                                            </div>
                                        </div>
                                    </div>
                                </div>

                            </form>
                        </div>
                        <div class="modal-footer">
                            <input type="submit" class="btn btn-primary" value="Save Changes" />
                            <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                        </div>
                    </div>

                </div>
            </div>

        </tr>

        <tr>
            <th>2</th>
            <th>John Doe</th>
            <th>Lorem Ipsum</th>
            <th>Lorem Ipsum</th>
            <th>Lorem Ipsum</th>
            <th>Lorem ipsum</th>
            <th>
                <a> <i class="fa fa-eye fa-2x" aria-hidden="true"></i> </a>
                <a><i class="fa fa-pencil-square-o fa-2x" aria-hidden="true" data-toggle="modal" data-target="#myModal"></i> </a>
                <a><i class="fa fa-times fa-2x" aria-hidden="true"></i> </a>
            </th>

        </tr>

    </table>


</div>

</body>

<script>$(document).ready(function() {
    $('#crud_table').DataTable();
} );</script>

</html>
