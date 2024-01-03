<script type="text/javascript">
    $(document).ready(function () {
        var Selectors = {
            MODAL_REQUEST: '#modal_new_request',        
        };

        $("#btn_open_modal_request").click(function(){
            var obj = document.querySelector(Selectors.MODAL_REQUEST);
            var modal = new window.bootstrap.Modal(obj);
            modal.show();
        });

    });
</script>