<!DOCTYPE html>
<html lang="en">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<head>
    <title>PV ​ ​de ​ ​constatare ​ ​a ​ ​serviciilor​ ​prestate</title>

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
    <div style="background-color: #b2b2b2; padding: 30px;">
        <span> PV ​ ​de ​ ​constatare ​ ​a ​ ​serviciilor​ ​prestate </span>
        <ul class="nav navbar-nav navbar-right" style="float: right;">
            <!-- Authentication Links -->
            @if (Auth::guest())
                <li><a href="{{ url('/login') }}">Login</a></li>
            @else
                <li class="dropdown">
                    <a style="color: #7e3f3f; font-size: larger;" href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                        {{ Auth::user()->name }} <span class="caret"></span>
                    </a>

                    <ul class="dropdown-menu" role="menu">
                        <li>
                            <a href="{{ url('/logout') }}"
                               onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                Logout
                            </a>

                        <li><a href="{{ url('/addUser') }}">Add User</a></li>

                        <form id="logout-form" action="{{ url('/logout') }}" method="POST" style="display: none;">
                            {{ csrf_field() }}
                        </form>
                        </li>
                    </ul>
                </li>
            @endif
        </ul>
    </div>

</nav>

<div class="">

    <button class="btn btn-primary" data-toggle="modal" data-target="#addClientModal">New PV ​ ​de ​ ​constatare ​ ​a ​ ​serviciilor​ ​prestate </button>
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
                    <h4 class="modal-title">Nou Formular </h4>
                </div>
                <form class="form-horizontal" method="post" action="/new_PV_constrate" style="display: block;">
                    {{csrf_field()}}
                    <div class="modal-body">

                            <div class="row" style="align-content: center;">
                                <div class="col-sm-3"></div>
                                <div class="form-group">
                                    <label class="col-sm-2 control-label formLabelStyle">Date :</label>
                                    <div class="col-sm-4 date">
                                        <div class="input-group input-append date datePicker" >
                                            <input type="date" class="form-control" name="Data" />
                                            <span class="input-group-addon add-on"><span class="glyphicon glyphicon-calendar"></span></span>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="row" style="align-content: center;">
                                <div class="col-sm-1"></div>
                                <div class="form-group form-inline" style="">
                                    <label  class="col-sm-4 control-label formLabelStyle">Partener :</label>
                                    <div class="">
                                        <div class="input-group col-sm-3">
                                            <input type="text" class="form-control" style="border-radius: 1rem;" name="Partener" required />
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="row" style="align-content: center;">
                                <div class="col-sm-1"></div>
                                <div class="form-group form-inline " style="">
                                    <label  class="col-sm-4 control-label formLabelStyle">Sericiile Prestate :</label>
                                    <div class="">
                                        <div class="input-group col-sm-5">
                                            <textarea class="form-control" rows="1" name="Sericiile_Prestate"></textarea>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="row" style="align-content: center;">
                                <div class="col-sm-1"></div>
                                <div class="form-group form-inline " style="">
                                    <label  class="col-sm-4 control-label formLabelStyle">Contract : </label>
                                    <div class="">
                                        <div class="input-group col-sm-3">
                                            <input type="text" class="form-control" name="Contract" />
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="row" style="align-content: center;">
                                <div class="col-sm-2"></div>
                                <div class="form-group">
                                    <label class="col-sm-3 control-label formLabelStyle">Data Contract</label>
                                    <div class="col-sm-4 date">
                                        <div class="input-group input-append date datePicker">
                                            <input type="date" class="form-control" name="Data_Contract" />
                                            <span class="input-group-addon add-on"><span class="glyphicon glyphicon-calendar"></span></span>
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
            <th>Data</th>
            <th>Partener</th>
            <th>​Sericiile Prestate</th>
            <th>Contract</th>
            <th>Data Contract</th>
            <th>ACTIONS</th>
        </tr>
        </thead>

        @foreach($PVprestates as $PVprestate)
            <tr>
                <th>{{$PVprestate['id']}}</th>
                <th>{{$PVprestate['Data']}}</th>
                <th>{{$PVprestate['Partener']}}</th>
                <th>{{$PVprestate['Sericiile_Prestate']}}</th>
                <th>{{$PVprestate['Contract']}}</th>
                <th>{{$PVprestate['Data_Contract']}}</th>

                <form id="deleteForm{{$PVprestate['id']}}" action="/delete_PV_constrate" method="post">
                    {{csrf_field()}}
                    <input type="hidden" name="__Id" value="{{$PVprestate['id']}}"/>
                </form>

                <th>
                    <a> <i class="fa fa-eye fa-2x" aria-hidden="true"></i> </a>
                    <a><i class="fa fa-pencil-square-o fa-2x" aria-hidden="true" data-toggle="modal" data-target="#Modal{{$PVprestate['id']}}"></i> </a>

                    <a href="{{ url('/delete_PV_constrate') }}"
                       onclick="event.preventDefault();
                               document.getElementById('deleteForm{{$PVprestate['id']}}').submit();">
                        <i class="fa fa-times fa-2x" aria-hidden="true"></i>
                    </a>
                </th>

                <div id="Modal{{$PVprestate['id']}}" class="modal fade" role="dialog">
                    <div class="modal-dialog">
                        <!-- Modal content-->
                        <div class="modal-content">
                            <div class="modal-header">
                                <button type="button" class="close" data-dismiss="modal">&times;</button>
                                <h4 class="modal-title">Edit</h4>
                            </div>
                            <form class="form-horizontal" method="post" action="/update_PV_constrate" style="display: block;">
                                <div class="modal-body">
                                    {{csrf_field()}}

                                    <input type="hidden" value="{{$PVprestate['id']}}" name="__Id">

                                    <div class="row" style="align-content: center;">
                                        <div class="col-sm-3"></div>
                                        <div class="form-group">
                                            <label class="col-sm-2 control-label formLabelStyle">Date : </label>
                                            <div class="col-sm-4 date">
                                                <div class="input-group input-append date datePicker">
                                                    <input type="date" class="form-control" value="{{$PVprestate['Data']}}" name="Data" />
                                                    <span class="input-group-addon add-on"><span class="glyphicon glyphicon-calendar"></span></span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <br/>
                                    <div class="row" style="align-content: center;">
                                        <div class="col-sm-3"></div>
                                        <div class="form-group form-inline" style="">
                                            <label  class="col-sm-2 control-label formLabelStyle">Partener :</label>
                                            <div class="">
                                                <div class="input-group col-sm-3">
                                                    <input type="text" class="form-control" value="{{$PVprestate['Partener']}}" style="border-radius: 1rem;" name="Partener" required />
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row" style="align-content: center;">
                                        <div class="col-sm-2"></div>
                                        <div class="form-group form-inline " style="">
                                            <label  class="col-sm-4 control-label formLabelStyle">Sericiile Prestate :</label>
                                            <div class="">
                                                <div class="input-group col-sm-5">
                                                    <textarea class="form-control" rows="1" name="Sericiile_Prestate">{{$PVprestate['Sericiile_Prestate']}}</textarea>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row" style="align-content: center;">
                                        <div class="col-sm-3"></div>
                                        <div class="form-group form-inline " style="">
                                            <label  class="col-sm-2 control-label formLabelStyle">Contract : </label>
                                            <div class="">
                                                <div class="input-group col-sm-3">
                                                    <input type="text" class="form-control" name="Contract" value="{{$PVprestate['Contract']}}"/>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row" style="align-content: center;">
                                        <div class="col-sm-2"></div>
                                        <div class="form-group">
                                            <label class="col-sm-3 control-label formLabelStyle">Data Contract : </label>
                                            <div class="col-sm-4 date">
                                                <div class="input-group input-append date datePicker">
                                                    <input type="date" class="form-control" name="Data_Contract" value="{{$PVprestate['Data_Contract']}}"/>
                                                    <span class="input-group-addon add-on"><span class="glyphicon glyphicon-calendar"></span></span>
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
//    $('#datePicker_')
//        .datepicker({
//            format: 'mm/dd/yyyy'
//        });
//    $('#datePicker__')
//        .datepicker({
//            format: 'mm/dd/yyyy'
//        });
//    $('.datePicker')
//        .datepicker({
//            format: 'mm/dd/yyyy'
//        });
    $(document).ready(function() {
        $('#crud_table').DataTable();
    } );
</script>
</html>
