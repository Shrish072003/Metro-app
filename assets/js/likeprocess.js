var likeExist=parseInt("<?php echo insertLike() ?>");
if(likeExist){
    $("#likeBtn").addClass("liked");
}

$("#likeBtn").click(function(){
    var likeExist = parseInt("<?php echo insertLike() ?>");
    if(likeExist>0){
        //dislike
        var disliked = parseInt("<?php echo processDislike() ?>");
        if(disliked==1){
            $("#likeBtn").removeClass("liked");
        }
        else{
            alert(updated);
        }
    }else{
        //like
        var liked = parseInt("<?php echo processLike() ?>");
        if(liked==1){
            $("#likeBtn").addClass("liked");
        }
        else{
            alert(inserted);
        } 
    }
});