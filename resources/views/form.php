<form action="/request/add" method="post">
  <input type="text" name="input">
  <button type="submit">submit</button>
  <input type="hidden" name="_token" value='<?php echo csrf_token()?>'>
</form>