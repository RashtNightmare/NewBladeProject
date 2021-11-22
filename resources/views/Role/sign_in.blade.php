@extends('index') 
@section('content') 

<div class="p-7">
{{$role}}
<table style="width:100%" class="table-fixed" >
<tr class="bg-blue-200">
  <th>id</td>
  <th>name</td>
</tr>
<tbody>
@for($i=0;$i < count($role);$i ++)
  <tr>
   <td>{{$role[$i]['id']}}</td>
   <td>{{$role[$i]['name']}}</td>
 </tr>
@endfor
<!-- 
<tr>
  <td>2</td>
  <td>Student</td>
</tr>
</tbody> -->

</table>

</div>

@endsection