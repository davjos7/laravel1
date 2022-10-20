<h1>Listado de alumnos</h1>
<table width="100%" border ="1">
<tr>
    <th>Nombre</th>
    <th>Edad</th>
    <th>Dni</th>
    <th>Estados</th>
</tr>
@foreach ($alumnos as $alumno)
<tr>
    <td>{{ $alumno0->nombre }}</td>
    <td>{{ $alumno0->edad }}</td>
    <td>{{ $alumno0->dni }}</td>
    <td>{{ $alumno0->estado_id }}</td>

</tr>
@endforeach
</table>