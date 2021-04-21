<html>
<head>
<style>
ul {
  list-style-type: none;
  margin: 0;
  padding: 0;
  overflow: hidden;
}

li {
  text-align: center;
}

li a {
  display: block;
  color: white;
  text-align: center;
  padding: 14px 16px;
  text-decoration: none;
}


</style>
</head>
<body>

<ul>
    <li>
        <form  class="form"  action="createList.php" method="post">
            <input class="buttons" type="submit"  name="createList" value="Create list"></input>
        </form>
    </li>
    <li>
        <form  class="form"   method="post">
            <input class="buttons" type="submit"  name="sortOnStatus" value="Sort tasks on status"></input>
        </form>
    </li>
    <li>
        <form class="form"  method="post">
            <input class="buttons" type="submit"  name="sortOnTime" value="Sort on time"></input>
        </form> 
    </li>
  
  


</ul>
</body>
</html>
