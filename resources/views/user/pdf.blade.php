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

<h1>Liste des enquêtes</h1>
<i><h2>DEFENDRE c'est ma VOCATION</h2></i>
<div id="data">
    @foreach ($datas as $index => $data)
        <fieldset>
            @foreach ($users as $user)
                @if ($user->id == $data->user_id)
                    <legend> {{ $index }} : {{ $user->name }}</legend>
                @endif
            @endforeach
            <table border="1">
                <tr>
                    <th>N° : </th>
                    <th>{{ $index + 1 }}</th>
                </tr>
                <tr>
                    <th>Nom d'utilisateur : </th>
                    @foreach ($users as $user)
                        @if ($user->id == $data->user_id)
                            <th>{{ $user->name }}</th>
                        @endif
                    @endforeach
                </tr>
                <tr>
                    <th>Code : </th>
                    <td>{{ $data->code }}</td>
                </tr>
                <tr>
                    <th>Date couverture : </th>
                    <td>{{ $data->date_cover }}</td>
                </tr>
                <tr>
                    <th>Type violence : </th>
                    <td>{{ $data->violence_type }}</td>
                </tr>
                <tr>
                    <th>Nature de la violence : </th>
                    <td>{{ $data->nature }}</td>
                </tr>
                <tr>
                    <th>Identité du genre : </th>
                    <td>{{ $data->identity }}</td>
                </tr>
                <tr>
                    <th>Orientation sexuelle : </th>
                    <td>{{ $data->orientation }}</td>
                </tr>
                <tr>
                    <th>Age : </th>
                    <td>{{ $data->age }}</td>
                </tr>
                <tr>
                    <th>Let : </th>
                    <td>{{ $data->let }}</td>
                </tr>
                <tr>
                    <th>Occupation : </th>
                    <td>{{ $data->occupation }}</td>
                </tr>
                <tr>
                    <th>Pays : </th>
                    <td>{{ $data->country }}</td>
                </tr>
                <tr>
                    <th>Ville : </th>
                    <td>{{ $data->town }}</td>
                </tr>
                <tr>
                    <th>Quartier : </th>
                    <td>{{ $data->quater }}</td>
                </tr>
                <tr>
                    <th>Date d'incident : </th>
                    <td>{{ $data->date_incident }}</td>
                </tr>
                <tr>
                    <th>Place d'incident : </th>
                    <td>{{ $data->place_incident }}</td>
                </tr>
                <tr>
                    <th>Source : </th>
                    <td>{{ $data->source }}</td>
                </tr>
                <tr>
                    <th>Mode de collecte : </th>
                    <td>{{ $data->collect_mode }}</td>
                </tr>
                <tr>
                    <th>Etat de passing : </th>
                    <td>{{ $data->passing_state }}</td>
                </tr>
                <tr>
                    <th>Auteur : </th>
                    <td>{{ $data->author }}</td>
                </tr>
                <tr>
                    <th>Réferré pour : </th>
                    <td>{{ $data->refered_for }}</td>
                </tr>
                <tr>
                    <th>Organization : </th>
                    <td>{{ $data->organisation }}</td>
                </tr>
                <tr>
                    <th>Détails : </th>
                    <td>{{ $data->details }}</td>
                </tr>
                <tr>
                    <th>Ce qui a été fait : </th>
                    <td>{{ $data->thing_done }}</td>
                </tr>
                <tr>
                    <th>Pensée : </th>
                    <td>{{ $data->thought }}</td>
                </tr>
                <tr>
                    <th>Attentes : </th>
                    <td>{{ $data->waiting }}</td>
                </tr>
                <tr>
                    <th>Ce qui doit être fait : </th>
                    <td>{{ $data->thing_to_be_done }}</td>
                </tr>
                <tr>
                    <th>Service reçu : </th>
                    <td>{{ $data->recieved_service }}</td>
                </tr>
                <tr>
                    <th>Pensée à propos du service : </th>
                    <td>{{ $data->thought_service }}</td>
                </tr>
                <tr>
                    <th>Pensée du survivant : </th>
                    <td>{{ $data->thought_survivor }}</td>
                </tr>
                <tr>
                    <th>Date de création : </th>
                    <td>{{ $data->created_at }}</td>
                </tr>
            </table>
        </fieldset>
        <div style="margin-top: 50px;"></div>
    @endforeach
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


{{-- <style>
            table{
                border: 1px solid #000;
            }
        </style>
        <table>
            <thead>
                <tr>
                    <th>Code</th>
                    <th>Utilisateur</th>
                    <th>Date couverture</th>
                    <th>Type violence</th>
                    <th>Nature violence</th>
                    <th>Identité</th>
                    <th>Orientation</th>
                    <th>Age</th>
                    <th>Let</th>
                    <th>Occupation</th>
                    <th>Pays</th>
                    <th>Ville</th>
                    <th>Quartier</th>
                    <th>date d'incident</th>
                    <th>Place incident</th>
                    <th>Source</th>
                    <th>Mode de collection des données</th>
                    <th>Etat de passing</th>
                    <th>Auteur</th>
                    <th>Réfféré pour</th>
                    <th>Organization</th>
                    <th>Détails</th>
                    <th>Chose faite</th>
                    <th>Pensées</th>
                    <th>Attentes de la survivante</th>
                    <th>Ce qui doit être fait</th>
                    <th>Pensée du survivant</th>
                    <th>Date de creation</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($datas as $data)
                    <tr>
                        <td>{{ $data->code }}</td>
                        @foreach ($users as $user)
                            @if ($user->id == $data->user_id)
                                <th>{{ $user->name }}</th>
                            @endif
                        @endforeach
                        <td>{{ $data->date_cover }}</td>
                        <td>{{ $data->violence_type }}</td>
                        <td>{{ $data->nature }}</td>
                        <td>{{ $data->identity }}</td>
                        <td>{{ $data->orientation }}</td>
                        <td>{{ $data->age }}</td>
                        <td>{{ $data->let }}</td>
                        <td>{{ $data->occupation }}</td>
                        <td>{{ $data->country }}</td>
                        <td>{{ $data->town }}</td>
                        <td>{{ $data->quater }}</td>
                        <td>{{ $data->date_incident }}</td>
                        <td>{{ $data->place_incident }}</td>
                        <td>{{ $data->source }}</td>
                        <td>{{ $data->collect_mode }}</td>
                        <td>{{ $data->passing_state }}</td>
                        <td>{{ $data->author }}</td>
                        <td>{{ $data->refered_for }}</td>
                        <td>{{ $data->organisation }}</td>
                        <td>{{ $data->details }}</td>
                        <td>{{ $data->thing_done }}</td>
                        <td>{{ $data->thought }}</td>
                        <td>{{ $data->waiting }}</td>
                        <td>{{ $data->thing_to_be_done }}</td>
                        <td>{{ $data->recieved_service }}</td>
                        <td>{{ $data->thought_service }}</td>
                        <td>{{ $data->thought_survivor }}</td>
                        <td>{{ $data->created_at }}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>
         --}}
