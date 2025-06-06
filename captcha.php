<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js" integrity="sha512-v2CJ7UaYy4JwqLDIrZUI/4hqeoQieOmAZNXBeQyjo21dadnwR+8ZaIJVT8EE2iyI61OV8e6M8PP2/4hpQINQ/g==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<input type="text" name="uname" id="">
<input type="password" name="pwd" id="">
<div id="response"></div>
<button id="refresh">Refresh</button>
<script>
    $(document).ready(() => {
        $("#refresh").on("click",()=>{
            $.ajax({
                url: "captcha-1.php",
                method:"POST",
                data:[],
                success: function(result){
                    $("#response").html(result).fadeOut(1000);
                }
            })
        });
    });
</script>