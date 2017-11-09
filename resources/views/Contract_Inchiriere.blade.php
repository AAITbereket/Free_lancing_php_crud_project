<!DOCTYPE html>
<html lang="en">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<head>
    <title>Contract Inchiriere</title>

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
        <span> Contract Inchiriere </span>
    </div>

</nav>

<div class="">

    <button class="btn btn-primary" data-toggle="modal" data-target="#addNewModal">New Contract Inchiriere</button>
    @if(!empty($Message[0]))
        <div class="alert {{$Message[1]}} alert-dismissable" style="float: right;">
            <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
            <strong>{{$Message[0]}}</strong>
        </div>
    @endif
    <br/><br/>

    <div id="addNewModal" class="modal fade" role="dialog">
        <div class="modal-dialog">

            <!-- Modal content-->
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                    <h4 class="modal-title">New Contract Inchiriere</h4>
                </div>
                <form class="form-horizontal" method="post" action="/new_Contract_Inchiriere">
                <div class="modal-body">
                    {{csrf_field()}}
                        <div class="row" style="align-content: center;">
                            <div class="col-sm-3"></div>
                            <div class="form-group form-inline" style="">
                                <label  class="col-sm-2 control-label formLabelStyle">Client: </label>
                                <div class="">
                                    <div class="input-group col-sm-4">
                                        <select class="form-control combobox" name="Client" required>
                                            <option></option>
                                            @foreach($Clients as $client)
                                                <option value="{{$client}}"> {{$client}} </option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="row" style="align-content: center;">
                            <div class="col-sm-3"></div>
                            <div class="form-group">
                                <label class="col-sm-2 control-label formLabelStyle">Date :</label>
                                <div class="col-sm-4 date">
                                    <div class="input-group input-append date datePicker" id="datePicker_">
                                        <input type="date" class="form-control" name="data" />
                                        <span class="input-group-addon add-on"><span class="glyphicon glyphicon-calendar"></span></span>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="row" style="align-content: center;">
                            <div class="col-sm-3"></div>
                            <div class="form-group form-inline" style="">
                                <label  class="col-sm-2 control-label formLabelStyle">Item: </label>
                                <div class="">
                                    <div class="input-group col-sm-6">
                                        <label class="checkbox-inline"><input name="Items[]" type="checkbox" value="Item1" >Item 1</label>
                                        <label class="checkbox-inline"><input name="Items[]" type="checkbox" value="Item2" >Item 2</label>
                                        <label class="checkbox-inline"><input name="Items[]" type="checkbox" value="Item3" >Item 3</label>
                                        <label class="checkbox-inline"><input name="Items[]" type="checkbox" value="Item4" >Item 4</label>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="row" style="align-content: center;">
                            <div class="col-sm-3"></div>
                            <div class="form-group form-inline " style="">
                                <label  class="col-sm-2 control-label formLabelStyle">Suma: </label>
                                <div class="">
                                    <div class="input-group col-sm-3">
                                        <input type="number" class="form-control" name="Suma" />
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
            <th>Client</th>
            <th>Date</th>
            <th>Items</th>
            <th>Suma</th>
            <th>ACTIONS</th>
        </tr>
        </thead>


        @foreach($contrats as $contrat)

            <tr>
                <th>{{$contrat['Client']}}</th>
                <th>{{$contrat['data']}}</th>
                <th>{{$contrat['Items']}}</th>
                <th>{{$contrat['Suma']}}</th>

                <form id="deleteForm{{$contrat['id']}}" action="/delete_Contract_Inchiriere" method="post">
                    {{csrf_field()}}
                    <input type="hidden" name="__Id" value="{{$contrat['id']}}"/>
                </form>

                <th>
                    <a> <i class="fa fa-eye fa-2x" aria-hidden="true"></i> </a>
                    <a><i class="fa fa-pencil-square-o fa-2x" aria-hidden="true" data-toggle="modal" data-target="#Modal{{$contrat['id']}}"></i> </a>

                    <a href="{{ url('/delete_Contract_Inchiriere') }}"
                       onclick="event.preventDefault();
                               document.getElementById('deleteForm{{$contrat['id']}}').submit();">
                        <i class="fa fa-times fa-2x" aria-hidden="true"></i>
                    </a>
                </th>

                <div id="Modal{{$contrat['id']}}" class="modal fade" role="dialog">
                    <div class="modal-dialog">

                        <!-- Modal content-->
                        <div class="modal-content">
                            <div class="modal-header">
                                <button type="button" class="close" data-dismiss="modal">&times;</button>
                                <h4 class="modal-title">Edit</h4>
                            </div>
                            <form class="form-horizontal" method="post" action="/update_Contract_Inchiriere">
                                <div class="modal-body">
                                    {{csrf_field()}}
                                    <input type="hidden" name="__Id" value="{{$contrat['id']}}">
                                    <div class="row" style="align-content: center;">
                                        <div class="col-sm-3"></div>
                                        <div class="form-group form-inline" style="">
                                            <label  class="col-sm-2 control-label formLabelStyle">Client: </label>
                                            <div class="">
                                                <div class="input-group col-sm-3">
                                                    <input type="text" class="form-control" name="Client" value="{{$contrat['Client']}}" required/>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row" style="align-content: center;">
                                        <div class="col-sm-3"></div>
                                        <div class="form-group">
                                            <label class="col-sm-2 control-label formLabelStyle">Date :</label>
                                            <div class="col-sm-4 date">
                                                <div class="input-group input-append date datePicker" id="datePicker">
                                                    <input type="date" class="form-control" name="data" value="{{$contrat['data']}}" required/>
                                                    <span class="input-group-addon add-on"><span class="glyphicon glyphicon-calendar"></span></span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <br/>
                                    <div class="row" style="align-content: center;">
                                        <div class="col-sm-3"></div>
                                        <div class="form-group form-inline" style="">
                                            <label  class="col-sm-2 control-label formLabelStyle">Item: </label>
                                            <div class="">

                                                <?php
                                                $Items_ = explode( "," ,$contrat['Items']);
                                                ?>

                                                <div class="input-group col-sm-6">
                                                    <label class="checkbox-inline"><input name="Items[]" type="checkbox" value="Item1" @if(in_array("Item1", $Items_)) checked="checked"  @endif >Item 1</label>
                                                    <label class="checkbox-inline"><input name="Items[]" type="checkbox" value="Item2" @if(in_array("Item2", $Items_)) checked="checked"  @endif >Item 2</label>
                                                    <label class="checkbox-inline"><input name="Items[]" type="checkbox" value="Item3" @if(in_array("Item3", $Items_)) checked="checked"  @endif >Item 3</label>
                                                    <label class="checkbox-inline"><input name="Items[]" type="checkbox" value="Item4" @if(in_array("Item4", $Items_)) checked="checked"  @endif >Item 4</label>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row" style="align-content: center;">
                                        <div class="col-sm-3"></div>
                                        <div class="form-group">
                                            <label class="col-sm-2 control-label formLabelStyle">Suma :</label>
                                            <div class="col-sm-4 date">
                                                <div class="input-group input-append date">
                                                    <input type="number" class="form-control" name="Suma" value="{{$contrat['Suma']}}" required/>

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
//    $('#datePicker')
//        .datepicker({
//            format: 'mm/dd/yyyy'
//        });
//    $('.datePicker')
//        .datepicker({
//            format: 'mm/dd/yyyy'
//        });

    $(document).ready(function() {
        $('#crud_table').DataTable();
        $('.combobox').combobox();
    } );
</script>

</html>
