
<div class="container">
    <div class="text-right">
        <div class="col-12 col-md-8 col-lg-6 pb-5">
            <div class="card border-warning rounded-0">
                <div class="card-header p-0">
                    <div class="bg-dark text-warning">
                        <h5><i class="fa fa-envelope"></i> צור קשר</h5>
                        <p>רעיונות הצעות מתקבלות בברכה</p>
                    </div>
                </div>
                <div class="card-body p-3">
                    <form id="contact" method="post" action="contact_send.php">

                        <div class="messages"></div>
                        <div class="form-group">
                            <div class="input-group-prepend">
                                <div class="input-group-text"><i class="fa fa-user text-info"></i></div>
                            <input type="text" name="name" id="name" class="form-control text-right" placeholder="הקלד שם פונה" required>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="input-group-prepend">
                            <div class="input-group-text"><i class="fa fa-envelope text-info"></i></div>
                                <input type="email" name="email" id="email" class="form-control text-left" placeholder="הקלד אימאייל שולח" required>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="input-group-prepend">
                            <div class="input-group-text"><i class="fa fa-comment text-info"></i></div>
                                <textarea name="message" id="message" class="form-control text-right" placeholder="הקלד הודע..." required></textarea>
                            </div><br>
                            <input type="submit" class="btn btn-warning btn-send" value="שלח">
                            <div class="row">
                                <p class="text-muted">כל השדות חובה</p>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

<script>
    $(function(){
        $('#contact').validator();
        $('#contact').on('submit', function(e){
            if (!e.isDefaultPrevented()) {
                var url = "contact_send.php";
                $.ajax({
                    url: url,
                    type: 'POST',
                    data: $(this).serialize(),
                    success: function(data){
                        var messageAlert = 'alert-'+data.type;
                        var messageText = data.message;
                        $('.messages').html(messageText);
                        // var alertBox = '<div class="alert ' + messageAlert + ' alert-dismissable"><button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>' + messageText + '</div>';

                        // if (messageAlert && messageText) {
                        //     $('#contact').find('.messages').html(alertBox);
                        //     $('#contact')[0].reset();
                        // }
                    }
                });
                return false;
            }
        })
    });
</script>