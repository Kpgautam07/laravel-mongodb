@if(Auth::user()->name != "Admin")

<footer class="footer" style="background-color: #333333;">
                   <div class="container-fluid">
                        <div class="row">
                            <div class="col-sm-6" style="color: #ffff;">
                                <script>document.write(new Date().getFullYear())</script> &copy; Sapphire.
                            </div>
              <div class="col-sm-2"></div>
                            <div class="col-sm-4" style="color: #ffff;">
                                <div class="text-sm-end d-none d-sm-block">
                                    Design &amp; Develop by Sapphire Software Solutions
                                </div>
                            </div>
                        </div>
                    </div>
                </footer>
@endif
<script>
function digi() {
  var date = new Date(),
      hour = date.getHours(),
      minute = checkTime(date.getMinutes()),
      ss = checkTime(date.getSeconds());

  function checkTime(i) {
    if( i < 10 ) {
      i = "0" + i;
    }
    return i;
  }

if ( hour > 12 ) {
  hour = hour - 12;
  if ( hour == 12 ) {
    hour = checkTime(hour);
  document.getElementById("tt").innerHTML = hour+":"+minute+":"+ss+" AM";
  }
  else {
    hour = checkTime(hour);
    document.getElementById("tt").innerHTML = hour+":"+minute+":"+ss+" PM";
  }
}
else {
  document.getElementById("tt").innerHTML = hour+":"+minute+":"+ss+" AM";;
}
var time = setTimeout(digi,1000);
}
</script>
