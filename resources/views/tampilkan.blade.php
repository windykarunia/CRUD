<style>
    
table, td, th {
  border: 1px solid;
  padding: 10px
}
</style>
<table  style="border-collapse:collapse;">
    <tr>
        <th>Id</th>
        <th>Tittle</th>
        <th>Description</th>
    </tr>
        @foreach($data as $isi)
        <tr >
            <td>
                {{ $isi -> id }}
            </td>
            <td>
                {{ $isi -> title }}
            </td>
            <td>
                {{ $isi -> description }}
            </td>
        </tr>
        @endforeach
</table>