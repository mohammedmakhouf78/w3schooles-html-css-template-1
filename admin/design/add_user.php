<form method="post" action="functions/insert_user.php">
  <div class="form-group">
    <label for="exampleInputUsername1">username</label>
    <input type="text" name="username" value="" class="form-control" id="exampleInputUsername1">
  </div>
  <div class="form-group">
    <label for="exampleInputEmail1">password</label>
    <input type="password" name="password"  class="form-control" id="exampleInputEmail1" placeholder="Edit password">
  </div>
  <div class="form-group">
    <label for="exampleInputEmail1">Email address</label>
    <input type="email" name="email" class="form-control" id="exampleInputEmail1" >
  </div>
  <div class="form-group">
    <label for="exampleInputEmail1">phone</label>
    <input type="text" name="phone" class="form-control" id="exampleInputEmail1" >
  </div>
  <div class="form-check form-check-inline">
    <input class="form-check-input" type="radio"  name="gender" id="inlineRadio1" value="0" >
    <label class="form-check-label" for="inlineRadio1">Male</label>
  </div>
  <div class="form-check form-check-inline">
    <input class="form-check-input" type="radio" name="gender" id="inlineRadio2" value="1" >
    <label class="form-check-label" for="inlineRadio2">Female</label>
  </div>
  <br>
  <div class="form-group">
    <label for="exampleFormControlSelect1">Privliges</label>
    <select name="priv" class="form-control" id="exampleFormControlSelect1">
      <option value="0" >Admin</option>
      <option value="1" >User</option>
    </select>
  </div>
  <button type="submit" class="btn btn-primary">Submit</button>
</form>