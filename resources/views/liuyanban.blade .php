<!DOCTYPE html>

<html>
<head>
    <meta charset="utf-8">
    <title>留言板</title>
</head>
<body>
   <form action="qq" method="post">

   <table border="1" width="800px" align="center">
   <p>
     USER:
     <input type="hidden" name="_method" value="put">
     <input type="text" name="one">
     PASS
     <input type="text" name="two">
   </p>

   <p>
    <input type="submit" name="提交按钮">
    <input type="reset" name="重置">
   </p>
  



   <th>Id</th>
   <th>USER</th>
   <th>pass</th>

   @foreach($data as $value)
    <tr>{{$value->id}}</tr>
    <tr>{{$value->user}}</tr>
    <tr>{{$value->pwd}}</tr>
   @endforeach

   

   </table>
   </form>
  
 
</body>
</html>