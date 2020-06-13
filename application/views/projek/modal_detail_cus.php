<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <title>Welcome to CodeIgniter</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
        <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js"></script>
        <style type="text/css">
            #body{
                margin: 0 15px 0 15px;
            }
            #container{
                margin: 10px;                
                border: 1px solid #D0D0D0;
                -webkit-box-shadow: 0 0 8px #D0D0D0;
            }


            .calendar{
                /*           background-color: yellow;*/
            }
            table.calendar{
                margin: auto;
                border-collapse: collapse;
            }
            .calendar .days td {
                width:90px;
                height: 100px;
                padding: 4px;
                border:  1px solid #999;
                vertical-align:  top;
                background-color: #DEF;

            }
            .calendar .days td:hover{
                background-color: #fff;
            }
            .calendar .highlight {
                font-weight: bold;
                color: #EF1BAC;
            }   



            .calendar .content .rp_am_no{
                float: left;
                display: inline-block;
                width: 40px;
                background-color: #E13300;
            }           


        </style>        
    </head>
    <body>
        <script src="http://code.jquery.com/jquery-latest.min.js" type="text/javascript"></script>
        <script src="https://code.jquery.com/jquery-1.10.2.js"></script>
        <script type="text/javascript">
            $(document).ready(function() {

                $(".calendar .content .rp_am_no").click(function() {
                    var title = "RP";
                    var type = "AM";
                    var date_cal = $(this).attr("id");

                    $.ajax({
                        type: 'POST',
                        url: '<?php echo site_url(); ?>/my_calendar/get_reservations_records',
                        data: "type=" + type + "&title=" + title + "&date_cal=" + date_cal,
                        success: function(msg) {
                            //alert(msg);
                            $('#reservation_detail_model_body').html(msg);
                            $('#reservation_detail_model').modal('show');

                        },
                        error: function(msg) {
                            alert("Error Occured!");
                        }
                    });
                });

            });

        </script>
        <div id="container">

            <div id="body">
                <?php echo $calendar; ?>
            </div>
            
            


        </div>

    </body>
</html>