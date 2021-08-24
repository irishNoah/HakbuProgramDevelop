<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <center>

      <form name='find_id' method="POST">
      <label>

        <h2>find id</h2>
        <p>phone <input type='text' name='user_phone'  placeholder='phone' ><br></p>
        <p>email <input type='text' name='user_email' placeholder='email'></p>
      </label>
      <input type="submit" value="submit" onclick="javascript:form.action='find_id_server.php';">

    </center>
    </form>
    </body>
</html>