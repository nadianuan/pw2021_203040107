	</div>
	</div>
</body>
<script src="assets/plugins/jquery/jquery-3.1.1.min.js"></script>
<script src="assets/plugins/bootstrap/js/bootstrap.min.js"></script>
<script src="assets/js/theme.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script type="text/javascript">
            $(document).ready(function (){
                $(".open_modal").click(function (e){
                    var m = $(this).attr("id");
                    $.ajax({
                        url: "edit.php",
                        type: "GET",
                        data : {id_barang: m,},
                        success: function (ajaxData){
                            $("#ModalEdit").html(ajaxData);
                            $("#ModalEdit").modal('show',{backdrop: 'true'});
                        }
                    });
                });
            });
        </script>
        <script>
        (function() {
    
    var PasswordToggler = function( element, field ) {
        this.element = element;
        this.field = field;
        
        this.toggle();  
    };
    
    PasswordToggler.prototype = {
        toggle: function() {
            var self = this;
            self.element.addEventListener( "change", function() {
                if( self.element.checked ) {
                    self.field.setAttribute( "type", "text" );
                } else {
                    self.field.setAttribute( "type", "password" );  
                }
            }, false);
        }
    };
    
    document.addEventListener( "DOMContentLoaded", function() {
        var checkbox = document.querySelector( "#show-hide" ),
            pwd = document.querySelector( "#pwd" ),
            form = document.querySelector( "#login" );
            
            form.addEventListener( "submit", function( e ) {
                e.preventDefault();
            }, false);
            
            var toggler = new PasswordToggler( checkbox, pwd );
        
    });
    
})();
</script>
</html>