<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js" integrity="sha512-v2CJ7UaYy4JwqLDIrZUI/4hqeoQieOmAZNXBeQyjo21dadnwR+8ZaIJVT8EE2iyI61OV8e6M8PP2/4hpQINQ/g==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

<center>
    <h1>VIT Technology Solution</h1>
    <img src="./vit.jpg" alt="" height="150px">
    <p>Lorem ipsum dolor sit amet consectetur.</p>
    <button id="Like">Like <span id="count"></span> </button>
    <button id="Comments">Comments</button>
    <button id="Share">Share</button>
    <div id="comments-box"></div>
</center>

<script>
    $(document).ready(() => {        
        $.ajax({
            url: "like.php",
            success: function(result){
                $("#count").html(result);
            }
        })
                
        $("#Like").on("click",()=>{
            $.ajax({
                url: "like.php",
                success: function(result){
                    $("#count").html(result=+1);
                }
            })
        });

        $("#Comments").on("click",()=>{
            $.ajax({
                url: "comments.php",
                success: function(result){
                    $("#comments-box").html(result);
                }
            })
        });

    });
</script>