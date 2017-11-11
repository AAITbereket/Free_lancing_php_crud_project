<!DOCTYPE html>
<html lang="en">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<head>
    <title>Referate achitii</title>

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
        <span> Referate achitii </span>
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

    <button class="btn btn-primary" data-toggle="modal" data-target="#addClientModal">New Referate achitii </button>
    @if(!empty($Message[0]))
        <div class="alert {{$Message[1]}} alert-dismissable" style="float: right;">
            <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
            <strong>{{$Message[0]}}</strong>
        </div>
    @endif
    <br/><br/>

    <div id="addClientModal" class="modal fade" role="dialog">
        <div class="modal-dialog modal-lg">

            <!-- Modal content-->
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                    <h4 class="modal-title"> New Referat ​achizitii form  </h4>
                </div>

                <form class="form-horizontal" method="post" action="/new_Referate_achitii" style="display: block;">
                    {{csrf_field()}}
                    <div class="modal-body">

                            <div class="row col-12">

                                <div class="form-group" style="">
                                    <div>
                                        <label  class="col-sm-2 control-label" style="float: left;"> Descrierea achiziției : </label>
                                            <div class="input-group col-sm-3" style="float: left;">
                                                <textarea type="text" rows="1" cols="5" class="form-control" style="border-radius: 1rem;" name="Description" required></textarea>
                                            </div>
                                        <label  class="col-sm-2 control-label"> Justificarea achizitiei : </label>
                                            <div class="input-group col-sm-3" >
                                                <textarea type="text" rows="1" cols="5" class="form-control" style="border-radius: 1rem;" name="Justificarea_achizitiei" required></textarea>
                                            </div>
                                            <br/>
                                    </div>

                                    <div class="row">
                                        <label class="col-sm-2 control-label">Data : </label>
                                        <div class="col-sm-3 date">
                                            <div class="input-group input-append date datePicker" id="datePicker_">
                                                <input type="date" class="form-control" name="Data" required/>
                                                <span class="input-group-addon add-on"><span class="glyphicon glyphicon-calendar"></span></span>
                                            </div>
                                        </div>
                                    </div>

                                </div>

                            </div>



                        <div>
                            <p>
                                <input type="button" value="Add Item" onClick="addRow('dataTable')" />
                                <input type="button" value="Remove Item" onClick="deleteRow('dataTable')" />
                            <p>(All acions apply only to entries with check marked check boxes only.)</p>
                            </p>

                            <table id="dataTable" class="form table" border="0">
                                <tbody>
                                <tr>
                                    <p>
                                    <td >
                                        <br/>
                                        <input type="checkbox" name="chk[]" checked="checked" required />
                                    </td>
                                    <td>
                                        <label>Item : </label>
                                        <input type="text" name="Items_[]" required>
                                    </td>
                                    <td>
                                        <label>Descriere : </label>
                                        <input type="text" name="Items_Desc[]" required>
                                    </td>
                                    <td>
                                        <label>Clauze Contractuale : </label>
                                        <input type="text" class="small"  name="Clauze_Item[]" required>
                                    </td>
                                    <td>
                                        <label>Pret : </label>
                                        <input type="number"  class="small Pret" value="0" step="any"  min="0" name="Pret_Item[]" onkeyup="calculateSuma();" required>
                                    </td>

                                    </p>
                                </tr>
                                </tbody>
                            </table>

                            <hr/>

                            <div class="row">
                                <label  class="col-sm-2 control-label formLabelStyle"> Suma : </label>
                                <div class="input-group col-sm-2">
                                    <input type="number" id="Suma" readonly class="form-control" value="0.0" name="Suma"/>
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
            <th>Suma</th>
            <th>Descriere</th>
            <th>Justificarea Achizitiei</th>
            <th>ACTIONS</th>
        </tr>
        </thead>

        @foreach($purchases as $purchase)
            <tr>
                <th>{{$purchase['id']}}</th>
                <th>{{$purchase['Data']}}</th>
                <th>{{$purchase['Amount']}}</th>
                <th>{{$purchase['Description']}}</th>
                <th>{{$purchase['Justificarea_achizitiei']}}</th>

                <form id="deleteForm{{$purchase['id']}}" action="/delete_Referate_achitii" method="post">
                    {{csrf_field()}}
                    <input type="hidden" name="__Id" value="{{$purchase['id']}}"/>
                </form>

                <th>
                    <a href="/view_achiziti_form/{{$purchase['Purchase_unique_id']}}"> <i class="fa fa-eye fa-2x" aria-hidden="true"></i> </a>
                    <a  href="/edit_achiziti_form/{{$purchase['Purchase_unique_id']}}"><i class="fa fa-pencil-square-o fa-2x" aria-hidden="true"></i> </a>
                    <a href="{{ url('/delete_Referate_achitii') }}"
                       onclick="event.preventDefault();
                               document.getElementById('deleteForm{{$purchase['id']}}').submit();">
                        <i class="fa fa-times fa-2x" aria-hidden="true"></i>
                    </a>
                </th>

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
//    $('.datePickek')
//        .datepicker({
//            format: 'mm/dd/yyyy'
//        });
//
//    $('#datePicker_')
//        .datepicker({
//            format: 'mm/dd/yyyy'
//        });
//    $('#datePicker__')
//        .datepicker({
//            format: 'mm/dd/yyyy'
//        });
    $(document).ready(function() {
        $('#crud_table').DataTable();
        $('.combobox').combobox();
    } );


    function deleteRow(tableID) {
        var table = document.getElementById(tableID);
        var rowCount = table.rows.length;
        for(var i=0; i<rowCount; i++) {
            var row = table.rows[i];
            var chkbox = row.cells[0].childNodes[3];
            console.log(chkbox);
            if(true == chkbox.checked) {
                if(rowCount <= 1) { 						// limit the user from removing all the fields
                    alert("Cannot Remove all the items.");
                    break;
                }
                table.deleteRow(i);
                rowCount--;
                i--;
            }
        }
    };

    function addRow(tableID) {
        var table = document.getElementById(tableID);
        var rowCount = table.rows.length;

            var row = table.insertRow(rowCount);
            var colCount = table.rows[0].cells.length;
            for(var i=0; i<colCount; i++) {
                var newcell = row.insertCell(i);
                newcell.innerHTML = table.rows[0].cells[i].innerHTML;
            }
    };

    function calculateSuma() {
        var total = 0; //remove the global variable total and use this.
        $(".Pret").each(function() {
            total += parseFloat($(this).val());
        });
        console.log(total);
        var total = Math.round(total * 100) / 100;
        console.log(total);
        $('#Suma')[0].value = total;
    };


</script>
</html>
