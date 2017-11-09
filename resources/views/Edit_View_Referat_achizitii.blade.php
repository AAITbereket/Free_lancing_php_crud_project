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
    <div style="background-color: #b2b2b2; padding: 13px;">
        <span>View Referate achitii </span>
    </div>

</nav>

<div class="" >

    <br/>
    <div id="General_description">

        <form action="/edit_achiziti_form" method="post">
            {{csrf_field()}}

            <input type="hidden" value="{{$Purchase->id}}" name="id_"/>
            <input type="hidden" value="{{$Purchase->Purchase_unique_id}}" name="Purchase_unique_id"/>

            Achiziționați un ID unic :- <label> {{$Purchase->Purchase_unique_id}} </label> <br/>
            <br/>
            <div class="row">
                <label class="col-sm-1 control-label">Data :- </label>
                <div class="col-sm-3 date">
                    <div class="input-group input-append date datePicker" id="datePicker">
                        <input type="date" class="form-control" value="{{$Purchase->Data}}" name="Data" required/>
                        <span class="input-group-addon add-on"><span class="glyphicon glyphicon-calendar"></span></span>
                    </div>
                </div>
            </div>

            <br/>

            <div>
                <label  class="col-sm-2 control-label" style="float: left;"> Descrierea achiziției : </label>
                <div class="input-group col-sm-3" style="float: left;">
                    <textarea type="text" rows="1" cols="5" class="form-control" style="border-radius: 1rem;" name="Description" required>{{$Purchase->Description}}</textarea>
                </div>
                <label  class="col-sm-2 control-label"> Justificarea achizitiei : </label>
                <div class="input-group col-sm-3" >
                    <textarea type="text" rows="1" cols="5" class="form-control" style="border-radius: 1rem;" name="Justificarea_achizitiei" required>{{$Purchase->Justificarea_achizitiei}}</textarea>
                </div>
                <br/>
            </div>

            <div style="font-size: medium;">
                <p>
                    <input type="button" value="Add Item" onClick="addRow('dataTable')" />
                    <input type="button" value="Remove Item" onClick="deleteRow('dataTable')" />
                <p>(All acions apply only to entries with check marked check boxes only.)</p>
                </p>

                <table id="dataTable" class="form table" border="0">
                    <tbody>
                    @foreach($Items as $Item)

                        <tr>
                        <p>
                        <td>
                            <br/>
                            <input type="checkbox" name="chk[]" checked="checked" required />
                        </td>
                        <td>
                            <label>Item : </label>
                            <input value="{{$Item->Item}}" type="text" name="Items_[]" required>
                        </td>
                        <td>
                            <label>Descriere : </label>
                            <input value="{{$Item->Item_descriptioin}}" type="text" name="Items_Desc[]" required>
                        </td>
                        <td>
                            <label>Clauze Contractuale : </label>
                            <input value="{{$Item->Contractual_clause_item}}" type="text" class="small"  name="Clauze_Item[]" required>
                        </td>
                        <td>
                            <label>Pret : </label>
                            <input type="number"  class="small Pret" value="{{$Item->Item_price}}" step="any"  min="0" name="Pret_Item[]" onkeyup="calculateSuma();" required>
                        </td>

                        </p>
                    </tr>

                    @endforeach

                    </tbody>
                </table>

                <div class="row">
                    <label  class="col-sm-2 control-label formLabelStyle"> Suma : </label>
                    <div class="input-group col-sm-2">
                        <input type="number" id="Suma" readonly class="form-control" value="{{$Purchase->Amount}}" name="Suma"/>
                    </div>
                </div>

            </div>

            <div style="float:right;">
                <input class="btn btn-info btn-lg" type="submit" value="Save changes">
            </div>

        </form>
    </div>


</div>

</body>
<script>
//    $('#datePicker')
//        .datepicker({
//            format: 'mm/dd/yyyy'
//        });



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
