<style>
    .table {
        width: 100%;
        border: none;
        margin-bottom: 20px;
    }
    .table thead th {
        font-weight: bold;
        text-align: left;
        border: none;
        padding: 10px 15px;
        background: #d8d8d8;
        font-size: 14px;
        border-left: 1px solid #ddd;
        border-right: 1px solid #ddd;
    }
    .table tbody td {
        text-align: left;
        border-left: 1px solid #ddd;
        border-right: 1px solid #ddd;
        padding: 10px 15px;
        font-size: 14px;
        vertical-align: top;
    }
    .table thead tr th:first-child, .table tbody tr td:first-child {
        border-left: none;
    }
    .table thead tr th:last-child, .table tbody tr td:last-child {
        border-right: none;
    }
    .table tbody tr:nth-child(even){
        background: #f3f3f3;
    }
</style>
<h1>Список товарно-материальных запасов</h1>


    <table class="table table-bordered table-striped">
        <thead>
        <tr>
            <th scope="col">ID</th>
            <th scope="col">Name</th>
            <th scope="col">Address</th>

        </tr>

        </thead>

            <br>
                @foreach($tms as $item)
            <tbody>
            <tr><td>{{$item['id']}}</td>
                <td>{{$item['name']}}</td>
                <td>{{$item['address']}}</td></tr>

            </tbody>
                @endforeach


    </table>



