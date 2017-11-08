<!DOCTYPE html>
<html lang="en">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<head>
    <title>Clients</title>

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.1/css/font-awesome.min.css">
    <link href="https://cdn.datatables.net/1.10.16/css/jquery.dataTables.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-combobox/1.1.8/css/bootstrap-combobox.css" rel="stylesheet">

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.7.1/js/bootstrap-datepicker.js"></script>
    <script src="https://cdn.datatables.net/1.10.16/js/jquery.dataTables.min.js" ></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-combobox/1.1.8/js/bootstrap-combobox.js"></script>
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
                    <li><a href="/bereket/Client">Clienti</a></li>
                    <li><a href="/bereket/Cerere Inchiriere">Cereri inchiriere</a></li>
                    <li><a href="/bereket/Disopzitii_Incasare">Dispozitii incasare</a></li>
                    <li><a href="/bereket/Contract_Inchiriere">Contracte ​inchiriere</a></li>
                </ul>
            </li>
            <li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" href="#">Prestari ​Servicii <span class="caret"></span></a>
                <ul class="dropdown-menu">
                    <li><a href="/bereket/Partner">Parteneri</a></li>
                    <li><a href="/bereket/contract_prestari_servicii">Contracte ​Prestari ​Servicii</a></li>
                    <li><a href="/bereket/PV_constatare_serviciilor_prestate">PV de constatare ​a ​serviciilor​ ​prestate</a></li>
                </ul>
            </li>

            <li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" href="#">Institutie <span class="caret"></span></a>
                <ul class="dropdown-menu">
                    <li><a href="/bereket/Referate_achitii">Referate achitii</a></li>
                    <li><a href="/bereket/Referat_nereguli">Referate nereguli</a></li>
                    <li><a href="/bereket/Adrese">Adrese</a></li>
                </ul>
            </li>

        </ul>
    </div>

    <!--bread crumb-->
    <div style="background-color: #b2b2b2; padding: 13px;">
        <span> Clients </span>
    </div>

</nav>

<div class="">

    <button class="btn btn-primary" data-toggle="modal" data-target="#addClientModal">Add Client</button>

    @if(!empty($Message[0]))
        <div class="alert {{$Message[1]}} alert-dismissable" style="float: right;">
            <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
            <strong>{{$Message[0]}}</strong>
        </div>
    @endif

    <br/><br/>

    <div id="addClientModal" class="modal fade" role="dialog">
        <div class="modal-dialog">

            <!-- Modal content-->
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                    <h4 class="modal-title">Add New Client</h4>
                </div>
                <form class="form-horizontal" method="post" action="/bereket/Client" style="display: block;">
                    {{csrf_field()}}
                <div class="modal-body">

                        <div class="row" style="align-content: center;">
                            <div class="col-sm-3"></div>
                            <div class="form-group form-inline" style="">
                                <label  class="col-sm-2 control-label formLabelStyle">CLIENT :</label>
                                <div class="">
                                    <div class="input-group col-sm-3">
                                        <input type="text" class="form-control" style="border-radius: 1rem;" name="Client" required/>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="row" style="align-content: center;">
                            <div class="col-sm-3"></div>
                            <div class="form-group form-inline " style="">
                                <label  class="col-sm-2 control-label formLabelStyle">ADRESA :</label>
                                <div class="">
                                    <div class="input-group col-sm-3">
                                        <input type="text" class="form-control" name="Adresa" required/>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="row" style="align-content: center;">
                            <div class="col-sm-3"></div>
                            <div class="form-group form-inline " style="">
                                <label  class="col-sm-2 control-label formLabelStyle">TELEFON : </label>
                                <div class="">
                                    <div class="input-group col-sm-3">
                                        <input type="tel" class="form-control" name="Telefon" required/>
                                    </div>
                                </div>
                            </div>
                        </div>


                        <div class="row" style="align-content: center;">
                            <div class="col-sm-3"></div>
                            <div class="form-group form-inline " style="">
                                <label  class="col-sm-2 control-label formLabelStyle">SERIE :</label>
                                <div class="">
                                    <div class="input-group col-sm-3">
                                        <input type="text" class="form-control" name="Serie" id="" required/>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="row" style="align-content: center;">
                            <div class="col-sm-3"></div>
                            <div class="form-group form-inline" style="">
                                <label  class="col-sm-2 control-label formLabelStyle">NR :</label>
                                <div class="">
                                    <div class="input-group col-sm-3">
                                        <input type="number" class="form-control" name="NR" required/>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="row" style="align-content: center;">
                            <div class="col-sm-3"></div>
                            <div class="form-group form-inline " style="">
                                <label  class="col-sm-2 control-label formLabelStyle">CNP :</label>
                                <div class="">
                                    <div class="input-group col-sm-3">
                                        <input type="number" class="form-control" name="CNP" required/>
                                    </div>
                                </div>
                            </div>
                        </div>


                </div>
                <div class="modal-footer">
                    <input type="submit" class="btn btn-primary" value="Add" />
                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                </div>
                </form>
            </div>

        </div>
    </div>

    <table id="crud_table" class="table table-striped table-bordered" width="100%" cellspacing="0">

        <thead style="background-color: #454545; color: white;">
        <tr>
            <th>ID</th>
            <th>DIN DATA</th>
            <th>CLIENT</th>
            <th>ADRESA</th>
            <th>TELEFON</th>
            <th>SERIE</th>
            <th>NR.</th>
            <th>CNP</th>
            <th>ACTIONS</th>
        </tr>
        </thead>

        @foreach($clients as $client)
            <tr>
                <th>{{$client['id']}}</th>
                <th>{{$client['Din Data']}}</th>
                <th>{{$client['Client']}}</th>
                <th>{{$client['Adresa']}}</th>
                <th>{{$client['Telefon']}}</th>
                <th>{{$client['Serie']}}</th>
                <th>{{$client['NR']}}</th>
                <th>{{$client['CNP']}}</th>

                <form id="deleteForm{{$client['id']}}" action="/bereket/deleteClient" method="post">
                    {{csrf_field()}}
                    <input type="hidden" name="__Id" value="{{$client['id']}}"/>
                </form>

                <th>
                    <a> <i class="fa fa-eye fa-2x" aria-hidden="true"></i> </a>
                    <a><i class="fa fa-pencil-square-o fa-2x" aria-hidden="true" data-toggle="modal" data-target="#Modal{{$client['id']}}"></i> </a>

                    <a href="{{ url('/deleteClient') }}"
                       onclick="event.preventDefault();
                        document.getElementById('deleteForm{{$client['id']}}').submit();">
                        <i class="fa fa-times fa-2x" aria-hidden="true"></i>
                    </a>
                </th>

                <div id="Modal{{$client['id']}}" class="modal fade" role="dialog">
                    <div class="modal-dialog">
                        <!-- Modal content-->
                        <div class="modal-content">
                            <div class="modal-header">
                                <button type="button" class="close" data-dismiss="modal">&times;</button>
                                <h4 class="modal-title">Edit</h4>
                            </div>
                            <form class="form-horizontal" method="post" action="/bereket/EditClient" style="display: block;">
                            <div class="modal-body">
                                    {{csrf_field()}}

                                    <input type="hidden" value="{{$client['id']}}" name="__Id">

                                    <div class="row" style="align-content: center;">
                                        <div class="col-sm-4"></div>
                                        <div class="form-group form-inline" style="">
                                            <label  class="col-sm-2 control-label formLabelStyle">CLIENT</label>
                                            <div class="">
                                                <div class="input-group col-sm-3">
                                                    <input type="text" class="form-control" name="Client" value="{{$client['Client']}}" required/>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row" style="align-content: center;">
                                        <div class="col-sm-4"></div>
                                        <div class="form-group form-inline " style="">
                                            <label  class="col-sm-2 control-label formLabelStyle">ADRESA</label>
                                            <div class="">
                                                <div class="input-group col-sm-3">
                                                    <input type="text" class="form-control" name="Adresa" value="{{$client['Adresa']}}"/>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row" style="align-content: center;">
                                        <div class="col-sm-4"></div>
                                        <div class="form-group form-inline " style="">
                                            <label  class="col-sm-2 control-label formLabelStyle">TELEFON</label>
                                            <div class="">
                                                <div class="input-group col-sm-3">
                                                    <input type="tel" class="form-control" name="Telefon" value="{{$client['Telefon']}}" required/>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row" style="align-content: center;">
                                        <div class="col-sm-4"></div>
                                        <div class="form-group form-inline " style="">
                                            <label  class="col-sm-2 control-label formLabelStyle">SERIE</label>
                                            <div class="">
                                                <div class="input-group col-sm-3">
                                                    <input type="text" class="form-control" name="Serie" value="{{$client['Serie']}}" required/>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row" style="align-content: center;">
                                        <div class="col-sm-4"></div>
                                        <div class="form-group form-inline" style="">
                                            <label  class="col-sm-2 control-label formLabelStyle">NR</label>
                                            <div class="">
                                                <div class="input-group col-sm-3">
                                                    <input type="number" class="form-control" name="NR" value="{{$client['NR']}}" required/>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row" style="align-content: center;">
                                        <div class="col-sm-4"></div>
                                        <div class="form-group form-inline " style="">
                                            <label  class="col-sm-2 control-label formLabelStyle">CNP</label>
                                            <div class="">
                                                <div class="input-group col-sm-3">
                                                    <input type="number" class="form-control" name="CNP" value="{{$client['CNP']}}" required/>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                            </div>

                            <div class="modal-footer">
                                <input type="submit" class="btn btn-primary" value="Save Changes" />
                                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                            </div>

                            </form>
                        </div>

                    </div>
                </div>
            </tr>
        @endforeach

    </table>


</div>

</body>

<script>
    $(document).ready(function() {
        $('#crud_table').DataTable();
    } );
</script>

</html>
