<h1>Listado de oficinas</h1>
<table width="100%" border ="1">
<tr>
    <th>city</th>
    <th>phone</th>
    <th>anddressline1</th>
    <th>anddressline2</th>
    <th>state</th>
    <th>country</th>
    <th>postalCode</th>
    <th>territory</th>
</tr>
@foreach ($offices as $offices)
<tr>
    <td>{{ $offices->city }}</td>
    <td>{{ $offices->phone }}</td>
    <td>{{ $offices->anddressline1 }}</td>
    <td>{{ $offices->anddressline2 }}</td>
    <td>{{ $offices->country }}</td>
    <td>{{ $offices->stpostalCodeate }}</td>
    <td>{{ $offices->territory }}</td>
</tr>
@endforeach
</table>