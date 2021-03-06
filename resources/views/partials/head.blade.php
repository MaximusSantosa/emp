<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">

<title>Employees</title>

{!! Html::favicon('emp.png') !!}

<!-- Fonts -->
<link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

<!-- Bootstrap -->
<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">

<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script>

<!-- Popper JS -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>

<!-- JQuery Tables -->
<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.19/css/jquery.dataTables.css">

<script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.js"></script>

<!-- Feathericons -->
<script src="https://unpkg.com/feather-icons"></script>

<!-- Load c3.css -->
<link href="{{ URL::asset('lib/c3-0.7.1/c3.css') }}" rel="stylesheet">

<!-- Load d3.js and c3.js -->
<script src="{{ URL::asset('lib/d3.min.js') }}" charset="utf-8"></script>
<script src="{{ URL::asset('lib/c3-0.7.1/c3.min.js') }}"></script>

<!-- Styles -->
<style>
    html, body {
        background-color: #fff;
        color: #636b6f;
        font-family: 'Nunito', sans-serif;
        font-weight: 200;
        height: 100vh;
        margin: 0;
    }

    table {
        width: 100%;
    }

    table, th, td {
        padding: 5px;
    }

    .full-height {
        height: 100vh;
    }

    .flex-center {
        align-items: center;
        display: flex;
        justify-content: center;
    }

    .position-ref {
        position: relative;
    }

    .top-right {
        position: absolute;
        right: 10px;
        top: 18px;
    }

    .content {
        text-align: center;
    }

    .title {
        font-size: 84px;
    }

    .links > a {
        color: #636b6f;
        padding: 0 25px;
        font-size: 13px;
        font-weight: 600;
        letter-spacing: .1rem;
        text-decoration: none;
        text-transform: uppercase;
    }

    .m-b-md {
        margin-bottom: 30px;
    }

    .link {
        background:none;
        color:inherit;
        border:none; 
        padding:0!important;
        font: inherit;
        /*border is optional*/
        border-bottom:1px solid #444; 
        cursor: pointer;
    }
    
</style>