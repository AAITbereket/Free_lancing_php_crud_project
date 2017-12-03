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
    <div class="container-fluid" style="padding: 10px; background-color: #23507b; font-size: larger;">
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
    <div style="background-color: #b2b2b2; padding: 30px;">
        <span>View Referate achitii </span>
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
                            <a href="{{ url('/bereket/logout') }}"
                               onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                Logout
                            </a>

                        <li><a href="{{ url('/bereket/addUser') }}">Add User</a></li>

                        <form id="logout-form" action="{{ url('/bereket/logout') }}" method="POST" style="display: none;">
                            {{ csrf_field() }}
                        </form>
                        </li>
                    </ul>
                </li>
            @endif
        </ul>
    </div>

</nav>

<div class="" >

    <br/>
    <div id="printableArea"> 
            <br/><br/>
            <div id="General_description" style="font-size: larger;">
                Achiziționați un ID unic :- <label> {{$Purchase->Purchase_unique_id}} </label> <br/>
                Data :- <label> {{$Purchase->Data}} </label> <br/>
                Descriere :- <label> {{$Purchase->Description}} </label> <br/>
            </div>

        <br/>
            <table id="crud_table" class="table table-striped table-bordered" style="width:50%;" cellspacing="0">

                <thead style="background-color: #a3807b; color: white;">
                <tr>
                    <th>Item</th>
                    <th>Contractual Clause Item</th>
                    <th>Item Descriere</th>
                    <th>Item Price</th>
                </tr>
                </thead>

                @foreach($Items as $Item)
                    <tr>
                        <th>{{$Item->Item}}</th>
                        <th>{{$Item->Contractual_clause_item}}</th>
                        <th>{{$Item->Item_descriptioin}}</th>
                        <th>{{$Item->Item_price}}</th>
                    </tr>
                @endforeach
            </table>
                <div style="font-size: larger; ">
                    Suma :- <label> {{$Purchase->Amount}} </label> <br/>
                </div>
        <br/>
    </div>
    <button class="btn btn-success btn-lg" onclick="printDiv('printableArea')">
        <i class="fa fa-print fa-1x" aria-hidden="true"></i>
        <label>Print</label>
    </button>

</div>

</body>

<script>

function printDiv(divName) {
     var printContents = document.getElementById(divName).innerHTML;
     var originalContents = document.body.innerHTML;

     document.body.innerHTML = printContents;

     window.print();

     document.body.innerHTML = originalContents;
}

</script>

</html>
