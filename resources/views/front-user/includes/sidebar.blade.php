<a href="#" class="dashMenu">Hi {{Auth::user()->first_name}}</a>
<ul>
  <li><a href="{{url('logout')}}">Log Out</a></li>
</ul>

<script>
$(document).ready(function(){
  $(".dashMenu").click(function(){
    $(".side-profile").toggleClass("expand");
  });
});
</script>