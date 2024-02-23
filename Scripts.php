<script src="assets/js/jquery.min.js"></script>
<script src="assets/js/bootstrap.bundle.min.js"></script>
<script src="assets/js/modernizr.custom.js"></script>
<script src="assets/js/jquery.dlmenu.js"></script>
<script src="assets/js/jquery-plugin-collection.js"></script>
<script src="assets/js/script.js"></script>

<script>
    $(document).ready(function () {
        $("#btn-modal").click(function () {
            $("#modal-screen").fadeIn("active");
        });
        $("#modal-close").click(function () {
            $("#modal-screen").fadeOut("active");
        });
        $(".app-button").click(function () {
            $("#modal-cnfrm-app").addClass("active");
        });            
        if($(".lawyer-radio").is(':checked')){
        }
        
        
        
        $("#right-fltr-side").click(function () {
            $(".d-t-lwyr-sec").addClass("d-t-lwyr-sec active");
            $("#right-fltr-side").addClass("active");
            $("#left-fltr-side").addClass("active");
        });            
        $("#left-fltr-side").click(function () {
            $(".d-t-lwyr-sec").removeClass("active");
            $("#right-fltr-side").removeClass("active");
            $("#left-fltr-side").removeClass("active");
        });            
    });
</script>
