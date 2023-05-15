<div id="loader-page2" class="center">
    <span class="loader__text">
        <img src="assets/prev/images/yellow_pan.gif" class="loader9" />
    </span>
</div>
<script>
    document.onreadystatechange = function() {
        if (document.readyState !== "complete") {
            document.querySelector(
                "body").style.visibility = "hidden";
            document.querySelector(
                "#loader-page2").style.visibility = "visible";
        } else {
            document.querySelector(
                "#loader-page2").style.display = "none";
            document.querySelector(
                "body").style.visibility = "visible";
        }
    };
</script>