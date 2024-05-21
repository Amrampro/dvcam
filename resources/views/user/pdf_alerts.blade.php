<style>
    body{
        background: rgba(128, 128, 128, 0.3);
    }
    table {
        width: 100%;
        /* width: 750px;  */
        border-collapse: collapse;
        margin: 50px auto;
    }

    /* Zebra striping */
    tr:nth-of-type(odd) {
        background: #eee;
    }

    th {
        background: #3498db;
        color: white;
        font-weight: bold;
    }

    td,
    th {
        padding: 10px;
        border: 1px solid #ccc;
        text-align: left;
        font-size: 18px;
    }

    /*
Max width before this PARTICULAR table gets nasty
This query will take effect for any screen smaller than 760px
and also iPads specifically.
*/
    @media only screen and (max-width: 760px),
    (min-device-width: 768px) and (max-device-width: 1024px) {

        table {
            width: 100%;
        }

        /* Force table to not be like tables anymore */
        /* table, thead, tbody, th, td, tr {
  display: block;
 } */

        /* Hide table headers (but not display: none;, for accessibility) */
        thead tr {
            position: absolute;
            top: -9999px;
            left: -9999px;
        }

        tr {
            border: 1px solid #ccc;
        }

        td {
            /* Behave  like a "row" */
            border: none;
            border-bottom: 1px solid #eee;
            /* position: relative; */
            padding-left: 50%;
        }

        td:before {
            /* Now like a table header */
            /* position: absolute; */
            /* Top/left values mimic padding */
            top: 6px;
            left: 6px;
            /* width: 45%;  */
            padding-right: 10px;
            white-space: nowrap;
            /* Label the data */
            content: attr(data-column);

            color: #000;
            font-weight: bold;
        }

    }

    th,
    td {
        text-align: left;
    }

    /*
    tr {
        border-bottom: 1px solid #000;
    }

    table {
        border: 5px solid #000;
    }*/

    legend {
        background-color: #000;
        color: #fff;
        padding: 3px 6px;
    }
    fieldset{
        margin-bottom: 10px;
    }
    h1, h2{
        text-align: center;
    }
    h1{
        text-decoration: underline;
    }
</style>

<h1>Liste des Alertes</h1>
<i><h2>DEFENDRE c'est ma VOCATION</h2></i>
<div id="data">
    @foreach ($datas as $data)
    <fieldset>
        @foreach ($users as $user)
            @if ($user->id == $data->user_id)
                <legend>{{ $data->type }}/DVCAM/00{{ $data->id }} <small class="">Par: {{ '@'.$user->name }}</small></legend>
            @endif
        @endforeach
        <div class="toggle-content">
            <p><strong>Niveau d'alert :</strong> {{ $data->level }}</p>
            <p><strong>Lieu d'alert :</strong> {{ $data->place }}</p>
            <p><strong>Type d'alert :</strong> {{ $data->type }}</p>
            <p><strong>Auteur de l'alert :</strong> {{ $data->author }}</p>
            <p><strong>Description :</strong> {{ $data->description }}</p>
            <p></p>
            <p><strong>Crée le :</strong> {{ $data->created_at }}</p>
        </div>
    </fieldset>
    @endforeach

    <p>Date : ____/____/________</p>
    <p></p>
    <p>Signature du chef : ______________________________</p>
</div>
<div id="myDiv" style="display: none;">
    <h2>Le téléchargement est terminé. <a href="{{ url('/apk/pdf') }}">Cliquer ici</a> pour retourner à la page d'impressions</h2>
</div>

<script>
    window.print()
    // window.location.href = 'potato'

    // Get the element you want to display
    const myDiv = document.getElementById("myDiv");

    // Define the function to display the div
    function displayDiv() {
        myDiv.style.display = "block"; // Show the div
    }

    function redirect() {
        // document.getElementById("data").style.display = "none";
        window.location.href = '/apk/pdf'
    }

    function undisplay(){
        document.getElementById("data").style.display = "none";
    }

    // Use setTimeout to call the function after 1 second (1000 milliseconds)
    setTimeout(displayDiv, 1000);
    setTimeout(redirect, 1000);
    setTimeout(undisplay, 1000);
</script>
