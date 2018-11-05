<script type="text/javascript">
//This script allows users to like a post without reloading the page
    <?php foreach ($headlines as $headline): ?>
        // var likeButton<?php echo $headline->id ?> = 
        //     document.getElementById('like-button-<?php echo $headline->id ?>');
        // if(likeButton<?php echo $headline->id ?> != null){
        //     likeButton<?php echo $headline->id ?>.addEventListener('click', function(event) {
        //         event.preventDefault();
        //         var xhttp = new XMLHttpRequest();
        //         xhttp.onreadystatechange = function() {
        //             if (this.readyState == 4 && this.status == 200) {
        //                 var likeOrUnlike = document.getElementById("like-or-unlike-" + this.responseText);
        //                 likeOrUnlike.innerHTML = 
        //                     `<a id='unlike-button-${this.responseText}' class='like-unlike' href='/like'>
        //                         <i class="far fa-heart"></i>&nbsp;Unlike
        //                     </a>`;
        //             }
        //         };

<<<<<<< HEAD
        if(likeButton<?php echo $headline->id ?> != null){
            likeButton<?php echo $headline->id ?>.addEventListener('click', function() {
                var xHttpRequest = new XMLHttpRequest();
                xHttpRequest.onreadystatechange = function() {
                    if (this.readyState == 4 && this.status == 200) {
                        likeButton<?php echo $headline->id ?>.className = 'like-unlike display-none';
                        unlikeButton<?php echo $headline->id ?>.className = 'like-unlike';
                        var likes = document.getElementById('likes-<?php echo $headline->id ?>');
                        likes.textContent = parseInt(likes.textContent) + 1;
                        if (parseInt(likes.textContent)) {
                            document.getElementById('heart-<?php echo $headline->id ?>').className = "fas fa-heart"
                        } else {
                            document.getElementById('heart-<?php echo $headline->id ?>').className = "far fa-heart"
                        }
                    }
                };
                xHttpRequest.open("GET", "/like/" + <?php echo $headline->id ?>, true);
                xHttpRequest.send();
            })
        }

        if(unlikeButton<?php echo $headline->id ?> != null){
            unlikeButton<?php echo $headline->id ?>.addEventListener('click', function() {
                var xHttpReqest = new XMLHttpRequest();
                xHttpReqest.onreadystatechange = function() {
                    if (this.readyState == 4 && this.status == 200) {
                        likeButton<?php echo $headline->id ?>.className = 'like-unlike';
                        unlikeButton<?php echo $headline->id ?>.className = 'like-unlike display-none';
                        var likes = document.getElementById('likes-<?php echo $headline->id ?>');
                        likes.textContent = parseInt(likes.textContent) - 1;
                        if (parseInt(likes.textContent)) {
                            document.getElementById('heart-<?php echo $headline->id ?>').className = "fas fa-heart"
                        } else {
                            document.getElementById('heart-<?php echo $headline->id ?>').className = "far fa-heart"
                        }
                    }
                };
                xHttpReqest.open("GET", "/unlike/" + <?php echo $headline->id ?>, true);
                xHttpReqest.send();
            })
        }
=======
        //         xhttp.open("DELETE", "/like/" + <?php echo $headline->id ?>, true);
        //         xhttp.setRequestHeader("X-CSRF-TOKEN", "{{ csrf_token() }}");
        //         xhttp.send();
        //     })
        // }


        // var unlikeButton<?php echo $headline->id ?> = 
        //     document.getElementById('unlike-button-<?php echo $headline->id ?>');
        // if(unlikeButton<?php echo $headline->id ?> != null){
        //     unlikeButton<?php echo $headline->id ?>.addEventListener('click', function(event) {
        //         event.preventDefault();
        //         var xhttp = new XMLHttpRequest();
        //         xhttp.onreadystatechange = function() {
        //             if (this.readyState == 4 && this.status == 200) {
        //                 var likeOrUnlike = document.getElementById("like-or-unlike-" + this.responseText);
        //                 likeOrUnlike.innerHTML = 
        //                     `<a id='like-button-${this.responseText}' class='like-unlike' href='/unlike'>
        //                         <i class="far fa-heart"></i>&nbsp;Like
        //                     </a>`;
        //             }
        //         };
        //         xhttp.open("GET", "/unlike/" + <?php echo $headline->id ?>, true);
        //         xhttp.setRequestHeader("X-CSRF-TOKEN", "{{ csrf_token() }}");
        //         xhttp.send();
        //     })
        // }
>>>>>>> parent of 845c042... implement liking with ajax
    <?php endforeach; ?>
</script>