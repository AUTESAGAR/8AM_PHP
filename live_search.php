<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js" integrity="sha512-v2CJ7UaYy4JwqLDIrZUI/4hqeoQieOmAZNXBeQyjo21dadnwR+8ZaIJVT8EE2iyI61OV8e6M8PP2/4hpQINQ/g==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<script>
  $(document).ready(function() {
    $("#search").keyup(function() {
      var searchText = $(this).val();
      if (searchText != '') {
        $.ajax({
          url: "search.php",
          method: "post",
          data: {search_data : searchText},
          success: function(response) {
            $("#result").html(response);
          }
        });
      } else { 
        $("#result").html(''); 
    }
    });
  });
</script>

<input type="text" id="search" placeholder="Search">
<div id="result"></div>