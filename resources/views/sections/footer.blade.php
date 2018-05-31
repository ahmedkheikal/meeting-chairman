<footer>
  <div class="container-fluid">
    <div class="row">
      <div class="col-md-4">
        <h3>Contact info</h3>
        <ul>
            <li><span class="fa fa-phone"> </span> 010xxxxxxxx</li>
        </ul>
      </div>
      <div class="col-md-4">
        <h3>Credits</h3>

      </div>
      <div class="col-md-4">
        <h3>Send feedback</h3>
        <form action="{{ (new Illuminate\Http\Request)->path() }}" method="post">
            <input type="text" name="email" class="form-control" value="">
            <input type="text" name="subject" class="form-control" value="">
            <textarea name="message" rows="8" cols="80"></textarea>
        </form>
      </div>
    </div>
    <small style="float: right">&copy; 1icoder.com &nbsp;</small>
  </div>
</footer>
