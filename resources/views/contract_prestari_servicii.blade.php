<!DOCTYPE html>
<html lang="en">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<head>
    <title>Contract Prestari Servicii</title>

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.1/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.7.1/css/bootstrap-datepicker.css">
    <link href="https://cdn.datatables.net/1.10.16/css/jquery.dataTables.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-combobox/1.1.8/css/bootstrap-combobox.css" rel="stylesheet">

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-table/1.11.1/bootstrap-table.js"></script>
    {{--<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.7.1/js/bootstrap-datepicker.js"></script>--}}
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
                    <li><a href="/Referate_achitii">Referate achitii</a></li>
                    <li><a href="/Referat_nereguli">Referate nereguli</a></li>
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
                    <h4 class="modal-title">Nou Formular De Contract De Servicii</h4>
                </div>
                <form class="form-horizontal" method="post" action="/new_contract_prestari_servicii" style="display: block;">
                    {{csrf_field()}}
                <div class="modal-body">

                        <div class="row" style="align-content: center;">
                        <div class="col-sm-3"></div>
                        <div class="form-group form-inline" style="">
                            <label  class="col-sm-2 control-label formLabelStyle">Partner : </label>
                            <div class="">
                                <div class="input-group col-sm-4">
                                    <select class="form-control combobox" name="Partener" required>
                                        <option></option>
                                        @foreach($Partners as $Partner)
                                            <option value="{{$Partner}}"> {{$Partner}} </option>
                                        @endforeach
                                    </select>
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
                                        <input type="text" class="form-control" name="Obiectul_Contractului" />
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
                                        <input type="text" class="form-control" name="Suma" />
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
                                        <input type="text" class="form-control" name="Durata_Contractului" />
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
                                        <textarea class="form-control" rows="1" name="Obligatiile_Prestatorului"></textarea>
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
            <th>Partener</th>
            <th>Obiectul Contractului</th>
            <th>Suma</th>
            <th>Durata Contractului</th>
            <th>Obligatiile Prestatorului</th>
            <th>ACTIONS</th>
        </tr>
        </thead>

        @foreach($contracts as $contract)

            <tr>
                <th>{{$contract['id']}}</th>
                <th>{{$contract['Partener']}}</th>
                <th>{{$contract['Obiectul_Contractului']}}</th>
                <th>{{$contract['Suma']}}</th>
                <th>{{$contract['Durata_Contractului']}}</th>
                <th>{{$contract['Obligatiile_Prestatorului']}}</th>

                <form id="deleteForm{{$contract['id']}}" action="/delete_contract_prestari_servicii" method="post">
                    {{csrf_field()}}
                    <input type="hidden" name="__Id" value="{{$contract['id']}}"/>
                </form>

                <th>
                    <a> <i class="fa fa-eye fa-2x" aria-hidden="true"></i> </a>
                    <a><i class="fa fa-pencil-square-o fa-2x" aria-hidden="true" data-toggle="modal" data-target="#Modal{{$contract['id']}}"></i> </a>

                    <a href="{{ url('/delete_contract_prestari_servicii') }}"
                       onclick="event.preventDefault();
                               document.getElementById('deleteForm{{$contract['id']}}').submit();">
                        <i class="fa fa-times fa-2x" aria-hidden="true"></i>
                    </a>
                </th>

                <div id="Modal{{$contract['id']}}" class="modal fade" role="dialog">
                    <div class="modal-dialog">
                        <!-- Modal content-->
                        <div class="modal-content">
                            <div class="modal-header">
                                <button type="button" class="close" data-dismiss="modal">&times;</button>
                                <h4 class="modal-title">Edit</h4>
                            </div>
                            <form class="form-horizontal" method="post" action="/update_contract_prestari_servicii" style="display: block;">
                                <div class="modal-body">
                                    {{csrf_field()}}
                                    <input type="hidden" value="{{$contract['id']}}" name="__Id">
                                    <div class="row" style="align-content: center;">
                                        <div class="col-sm-3"></div>
                                        <div class="form-group form-inline" style="">
                                            <label  class="col-sm-2 control-label formLabelStyle">Partner : </label>
                                            <div class="">
                                                <div class="input-group col-sm-4">
                                                    <input type="text" class="form-control" name="Partener" value="{{$contract['Partener']}}" required/>
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
                                                    <input type="text" class="form-control" name="Obiectul_Contractului" value="{{$contract['Obiectul_Contractului']}}" required/>
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
                                                    <input type="tel" class="form-control" name="Suma" value="{{$contract['Suma']}}" required/>
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
                                                    <input type="text" class="form-control" name="Durata_Contractului" value="{{$contract['Durata_Contractului']}}" required/>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row" style="align-content: center;">
                                        <div class="col-sm-1"></div>
                                        <div class="form-group form-inline" style="">
                                            <label  class="col-sm-4 control-label formLabelStyle">Obligatiile Prestatorului </label>
                                            <div class="">
                                                <div class="input-group col-sm-4">
                                                    <textarea class="form-control" name="Obligatiile_Prestatorului"> {{$contract['Obligatiile_Prestatorului']}}</textarea>
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

<script>$(document).ready(function() {

    $('#crud_table').DataTable();
    $('.combobox').combobox();

} );</script>

</html>
