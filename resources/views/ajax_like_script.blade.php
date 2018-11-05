<script type="text/javascript">
//This script allows users to like a post without reloading the page
    <?php foreach ($headlines as $headline): ?>
        var likeButton<?php echo $headline->id ?> = 
            document.getElementById('like-button-<?php echo $headline->id ?>');
        var unlikeButton<?php echo $headline->id ?> = 
            document.getElementById('unlike-button-<?php echo $headline->id ?>');

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
                xHttpRequest.setRequestHeader("X-CSRF-TOKEN", "{{ csrf_token() }}");
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
                xHttpReqest.setRequestHeader("X-CSRF-TOKEN", "{{ csrf_token() }}");
                xHttpReqest.send();
            })
        }
    <?php endforeach; ?>
</script>