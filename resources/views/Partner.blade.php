<!DOCTYPE html>
<html lang="en">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<head>
    <title>Partener​s</title>

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
        <span> Partener​s </span>
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

    <button class="btn btn-primary" data-toggle="modal" data-target="#addClientModal">Add Partener​ </button>
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
                <form class="form-horizontal" method="post" action="/new_Partner" style="display: block;">
{{csrf_field()}}
                <div class="modal-body">

                        <div class="row" style="align-content: center;">
                            <div class="col-sm-2"></div>
                            <div class="form-group form-inline" style="">
                                <label  class="col-sm-3 control-label formLabelStyle">Partener</label>
                                <div class="">
                                    <div class="input-group col-sm-3">
                                        <input type="text" class="form-control" style="border-radius: 1rem;" name="Partener" />
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="row" style="align-content: center;">
                            <div class="col-sm-2"></div>
                            <div class="form-group form-inline " style="">
                                <label  class="col-sm-3 control-label formLabelStyle">Cui</label>
                                <div class="">
                                    <div class="input-group col-sm-3">
                                        <input type="text" class="form-control" name="Cui" />
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="row" style="align-content: center;">
                            <div class="col-sm-2"></div>
                            <div class="form-group form-inline " style="">
                                <label  class="col-sm-3 control-label formLabelStyle">Nrordregcom</label>
                                <div class="">
                                    <div class="input-group col-sm-3">
                                        <input type="text" class="form-control" name="Nrordregcom" />
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="row" style="align-content: center;">
                            <div class="col-sm-2"></div>
                            <div class="form-group form-inline " style="">
                                <label  class="col-sm-3 control-label formLabelStyle">Sediu</label>
                                <div class="">
                                    <div class="input-group col-sm-3">
                                        <input type="text" class="form-control" name="Sediu" />
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="row" style="align-content: center;">
                            <div class="col-sm-2"></div>
                            <div class="form-group form-inline" style="">
                                <label  class="col-sm-3 control-label formLabelStyle">Iban</label>
                                <div class="">
                                    <div class="input-group col-sm-3">
                                        <input type="text" class="form-control" name="Iban" />
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="row" style="align-content: center;">
                            <div class="col-sm-2"></div>
                            <div class="form-group form-inline " style="">
                                <label  class="col-sm-3 control-label formLabelStyle">Reprezentant</label>
                                <div class="">
                                    <div class="input-group col-sm-3">
                                        <input type="text" class="form-control" name="Reprezentant" />
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="row" style="align-content: center;">
                            <div class="col-sm-2"></div>
                            <div class="form-group form-inline " style="">
                                <label  class="col-sm-3 control-label formLabelStyle">Functia</label>
                                <div class="">
                                    <div class="input-group col-sm-3">
                                        <input type="text" class="form-control" name="Functia" />
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
            <th>Cui</th>
            <th>Nrordregcom</th>
            <th>Sediu</th>
            <th>Iban</th>
            <th>Reprezentant</th>
            <th>Functia</th>
            <th>ACTIONS</th>
        </tr>
        </thead>

        @foreach($partners as $partner)
            <tr>
                <th>{{$partner['id']}}</th>
                <th>{{$partner['Partener']}}</th>
                <th>{{$partner['Cui']}}</th>
                <th>{{$partner['Nrordregcom']}}</th>
                <th>{{$partner['Sediu']}}</th>
                <th>{{$partner['Iban']}}</th>
                <th>{{$partner['Reprezentant']}}</th>
                <th>{{$partner['Functia']}}</th>

                <form id="deleteForm{{$partner['id']}}" action="/delete_Partner" method="post">
                    {{csrf_field()}}
                    <input type="hidden" name="__Id" value="{{$partner['id']}}"/>
                </form>

                <th>
                    <a> <i class="fa fa-eye fa-2x" aria-hidden="true"></i> </a>
                    <a><i class="fa fa-pencil-square-o fa-2x" aria-hidden="true" data-toggle="modal" data-target="#Modal{{$partner['id']}}"></i> </a>

                    <a href="{{ url('/delete_Partner') }}"
                       onclick="event.preventDefault();
                               document.getElementById('deleteForm{{$partner['id']}}').submit();">
                        <i class="fa fa-times fa-2x" aria-hidden="true"></i>
                    </a>
                </th>

                <div id="Modal{{$partner['id']}}" class="modal fade" role="dialog">
                    <div class="modal-dialog">
                        <!-- Modal content-->
                        <div class="modal-content">
                            <div class="modal-header">
                                <button type="button" class="close" data-dismiss="modal">&times;</button>
                                <h4 class="modal-title">Edit</h4>
                            </div>
                            <form class="form-horizontal" method="post" action="/update_Partner" style="display: block;">
                                <div class="modal-body">
                                    {{csrf_field()}}

                                    <input type="hidden" value="{{$partner['id']}}" name="__Id">

                                    <div class="row" style="align-content: center;">
                                        <div class="col-sm-4"></div>
                                        <div class="form-group form-inline" style="">
                                            <label  class="col-sm-2 control-label formLabelStyle">Partener</label>
                                            <div class="">
                                                <div class="input-group col-sm-3">
                                                    <input type="text" class="form-control" name="Partener" value="{{$partner['Partener']}}" required/>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row" style="align-content: center;">
                                        <div class="col-sm-4"></div>
                                        <div class="form-group form-inline " style="">
                                            <label  class="col-sm-2 control-label formLabelStyle">Cui</label>
                                            <div class="">
                                                <div class="input-group col-sm-3">
                                                    <input type="text" class="form-control" name="Cui" value="{{$partner['Cui']}}"/>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row" style="align-content: center;">
                                        <div class="col-sm-4"></div>
                                        <div class="form-group form-inline " style="">
                                            <label  class="col-sm-2 control-label formLabelStyle">Nrordregcom</label>
                                            <div class="">
                                                <div class="input-group col-sm-3">
                                                    <input type="tel" class="form-control" name="Nrordregcom" value="{{$partner['Nrordregcom']}}" required/>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row" style="align-content: center;">
                                        <div class="col-sm-4"></div>
                                        <div class="form-group form-inline " style="">
                                            <label  class="col-sm-2 control-label formLabelStyle">Sediu</label>
                                            <div class="">
                                                <div class="input-group col-sm-3">
                                                    <input type="text" class="form-control" name="Sediu" value="{{$partner['Sediu']}}" required/>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row" style="align-content: center;">
                                        <div class="col-sm-4"></div>
                                        <div class="form-group form-inline" style="">
                                            <label  class="col-sm-2 control-label formLabelStyle">Iban :</label>
                                            <div class="">
                                                <div class="input-group col-sm-3">
                                                    <input type="text" class="form-control" name="Iban" value="{{$partner['Iban']}}" required/>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row" style="align-content: center;">
                                        <div class="col-sm-4"></div>
                                        <div class="form-group form-inline " style="">
                                            <label  class="col-sm-2 control-label formLabelStyle">Reprezentant : </label>
                                            <div class="">
                                                <div class="input-group col-sm-3">
                                                    <input type="text" class="form-control" name="Reprezentant" value="{{$partner['Reprezentant']}}" required/>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row" style="align-content: center;">
                                        <div class="col-sm-4"></div>
                                        <div class="form-group form-inline " style="">
                                            <label  class="col-sm-2 control-label formLabelStyle">Functia : </label>
                                            <div class="">
                                                <div class="input-group col-sm-3">
                                                    <input type="text" class="form-control" name="Functia" value="{{$partner['Functia']}}" required/>
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
