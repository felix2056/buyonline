<ul hidden="">
    <li id="a11y-refresh-page-message">Choosing a selection results in a full page refresh.</li>
    <li id="a11y-selection-message">Press the space key then arrow keys to make a selection.</li>
  </ul>


  <ul hidden="true">
    <li id="a11y-new-window-message">Opens in a new window.</li>
    <li id="a11y-external-message">Opens external website.</li>
    <li id="a11y-new-window-external-message">Opens external website in a new window.</li>
  </ul>
  <style id="vitals-styles">
    .vitals-img {
      position: relative;
      float: left;
      width: 100%;
      height: 250px;
      background-position: 50% 50%;
      background-repeat: no-repeat;
      background-size: cover;
      margin: 0 0 20px 0
    }

    .vitals-img img {
      -o-object-fit: contain;
      object-fit: contain;
      height: 100%;
      box-shadow: 1px 1px 5px rgba(146, 146, 146, 0.2);
      border-radius: 5px
    }

    .vt-hidden {
      display: none
    }

    #vitals-end-section {
      max-width: 1200px;
      margin: 0 auto
    }

    #vitals-analytics {
      max-width: 0;
      max-height: 0;
      width: 0;
      height: 0;
      position: absolute
    }

    .vitals-loader {
      border: 2px solid rgba(0, 0, 0, 0.12);
      border-left-color: #4c4c4c;
      animation: loader-spin .7s infinite linear;
      position: relative;
      display: inline-block;
      vertical-align: top;
      border-radius: 50%;
      width: 23px;
      height: 23px;
      color: transparent
    }

    @keyframes loader-spin {
      0% {
        transform: rotate(0deg)
      }

      100% {
        transform: rotate(360deg)
      }
    }

    @media only screen and (max-width: 768px) {
      .vitals-img {
        height: 200px
      }
    }

    @media only screen and (max-width: 425px) {
      .vitals-img {
        height: 150px
      }
    }

    .vitals-nice-select {
      -webkit-tap-highlight-color: transparent;
      border-radius: 5px;
      box-sizing: border-box;
      clear: both;
      cursor: pointer;
      display: block;
      float: left;
      font-family: inherit;
      font-size: 14px;
      font-weight: normal;
      height: 40px;
      line-height: 40px;
      outline: none;
      padding-left: 12px;
      padding-right: 23px;
      position: relative;
      text-align: left !important;
      transition: all 0.2s ease-in-out;
      -webkit-user-select: none;
      -ms-user-select: none;
      user-select: none;
      white-space: nowrap;
      width: auto;
      background: #fff;
      border: 1px solid #eaeaea
    }

    .vitals-nice-select:hover {
      border-color: #dbdbdb
    }

    .vitals-nice-select:active,
    .vitals-nice-select.open,
    .vitals-nice-select:focus {
      border-color: #999
    }

    .vitals-nice-select:after {
      border-bottom: 2px solid #999;
      border-right: 2px solid #999;
      content: '';
      display: block;
      height: 6px;
      width: 6px;
      margin-top: -4px;
      pointer-events: none;
      position: absolute;
      right: 10px;
      top: 50%;
      transform-origin: 66% 66%;
      transform: rotate(45deg);
      transition: all 0.15s ease-in-out
    }

    .vitals-nice-select.open:after {
      transform: rotate(-135deg)
    }

    .vitals-nice-select.open .list {
      opacity: 1;
      pointer-events: auto;
      transform: scale(1) translateY(0);
      max-height: 300px;
      overflow-y: auto;
      display: block
    }

    .vitals-nice-select.disabled {
      border-color: #ededed;
      color: #999;
      pointer-events: none
    }

    .vitals-nice-select.disabled:after {
      border-color: #cccccc
    }

    .vitals-nice-select.wide {
      width: 100%
    }

    .vitals-nice-select.wide .list {
      left: 0 !important;
      right: 0 !important
    }

    .vitals-nice-select.right {
      float: right
    }

    .vitals-nice-select.right .list {
      left: auto;
      right: 0
    }

    .vitals-nice-select.small {
      font-size: 12px;
      height: 36px;
      line-height: 34px
    }

    .vitals-nice-select.small:after {
      height: 4px;
      width: 4px
    }

    .vitals-nice-select.small .option {
      line-height: 34px;
      min-height: 34px
    }

    .vitals-nice-select .list {
      max-height: 300px;
      border-radius: 5px;
      box-shadow: 0 0 0 1px rgba(68, 68, 68, 0.11);
      box-sizing: border-box;
      margin: 4px 0 0 0;
      opacity: 0;
      overflow: hidden;
      padding: 0;
      pointer-events: none;
      position: absolute;
      top: 100%;
      left: 0;
      transform-origin: 50% 0;
      transform: scale(0.75) translateY(-21px);
      z-index: 2000000000;
      background: #fff
    }

    .vitals-nice-select .list:hover .option:not(:hover) {
      background-color: transparent !important
    }

    .vitals-nice-select .option {
      opacity: 1 !important;
      display: list-item !important;
      cursor: pointer;
      font-weight: 400;
      line-height: 40px !important;
      list-style: none;
      min-height: 40px;
      outline: none;
      padding-left: 10px;
      padding-right: 40px;
      text-align: left;
      transition: all 0.2s
    }

    .vitals-nice-select .option:hover,
    .vitals-nice-select .option.focus,
    .vitals-nice-select .option.selected.focus {
      background-color: #f6f6f6
    }

    .vitals-nice-select .option.selected {
      font-weight: bold
    }

    .vitals-nice-select .option.disabled {
      background-color: transparent;
      color: #999;
      cursor: default
    }

    .no-csspointerevents .vitals-nice-select .list {
      display: none
    }

    .no-csspointerevents .vitals-nice-select.open .list {
      display: block
    }

    .vitals-nice-select .cc-current {
      display: block;
      text-overflow: ellipsis;
      overflow: hidden
    }

    .vitals-mobile-header {
      display: flex;
      align-items: center;
      justify-content: space-between;
      width: 100%;
      padding: 5px 20px;
      height: 50px
    }

    .vitals-mobile-back {
      top: 0;
      left: 0;
      z-index: 3;
      background-color: #fff;
      width: 40px;
      height: 40px;
      display: flex;
      cursor: pointer;
      background-image: url("https://appsolve.io/asset/apps/vitals/img/mobile_back_button-modal.svg");
      background-repeat: no-repeat;
      background-position: left
    }

    .vitals-desktop-back {
      background-image: url("https://appsolve.io/asset/apps/vitals/img/close_button-modal.svg");
      background-repeat: no-repeat;
      background-position: center;
      height: 40px;
      width: 40px;
      cursor: pointer;
      position: absolute;
      top: -40px;
      right: 0;
      text-decoration: none;
      z-index: 2;
      font-family: sans-serif;
      line-height: 1
    }

    .vitals-desktop-back:hover {
      color: #fff;
      opacity: .6;
      text-decoration: none
    }

    .vitals-slider-prev,
    .vitals-slider-next {
      cursor: pointer;
      -webkit-user-select: none;
      -ms-user-select: none;
      user-select: none;
      position: absolute;
      top: calc(50% - 20px);
      background-repeat: no-repeat;
      background-position: center;
      width: 40px;
      height: 40px
    }

    .vitals-slider-prev {
      background-image: url("https://appsolve.io/asset/apps/vitals/img/arrow_left-modal.svg")
    }

    .vitals-slider-next {
      background-image: url("https://appsolve.io/asset/apps/vitals/img/arrow_right-modal.svg")
    }

    .vitals-slider-next figure,
    .vitals-slider-prev figure {
      width: 40px;
      height: 40px;
      margin: 0;
      display: flex;
      opacity: 1
    }

    .vitals-slider-next:hover figure,
    .vitals-slider-prev:hover figure {
      opacity: 0.7
    }

    .vitals-slider-next figure {
      justify-content: flex-end
    }

    .vitals-slider-prev figure {
      justify-content: flex-start
    }

    .vtl-g-not-scrollable {
      overflow-y: hidden !important
    }

    .vtl-g-clickable {
      cursor: pointer
    }

    .vtl-g-hidden {
      display: none
    }

    .vttooltip {
      position: relative;
      display: inline
    }

    .vttooltiptext {
      background-color: #333;
      color: #fff;
      text-align: center;
      border-radius: 3px;
      padding: 8px 5px;
      font-size: 12px;
      line-height: 1;
      font-weight: 200;
      position: absolute;
      z-index: 2;
      bottom: 100%;
      left: 50%;
      margin-left: -50px;
      font-family: Arial, sans-serif
    }

    .vttooltip:hover .vttooltiptext {
      visibility: visible
    }

    .vttooltip .vttooltiptext::after {
      content: "";
      position: absolute;
      top: 100%;
      left: 50%;
      border-width: 5px;
      border-style: solid;
      border-color: #333 transparent transparent transparent
    }

    .vitals-cc-notice {
      padding: 5px;
      margin: 15px 0;
      border-radius: 5px;
      clear: both
    }

    .recent-sales-content {
      box-shadow: 2px 2px 8px 0 rgba(0, 0, 0, 0.2)
    }

    .recent-sales-product {
      box-shadow: 2px 2px 8px 0 rgba(0, 0, 0, 0.2)
    }

    #bundle-recent_sales {
      height: 80px;
      display: none;
      left: 2%;
      padding: 0;
      position: fixed;
      text-align: left;
      z-index: 1999999997;
      font-family: "HelveticaNeue-Light", "Helvetica Neue Light", "HelveticaNeue", "Helvetica Neue", Helvetica, Arial, sans-serif;
      letter-spacing: 0;
      font-size: 14px;
      line-height: 1.1;
      font-weight: 400;
      width: 100%;
      overflow: visible !important;
      box-sizing: border-box
    }

    .bundle-recent_sales-person {
      line-height: 1.1;
      max-width: 300px;
      width: 100%;
      overflow: hidden;
      text-overflow: ellipsis;
      white-space: nowrap;
      display: block;
      letter-spacing: -0.2px
    }

    .recent-sales-info {
      z-index: 1;
      display: flex;
      flex-direction: column;
      justify-content: space-between
    }

    .bundle-recent_sales-link {
      max-width: 250px;
      width: 100%;
      overflow: hidden;
      text-overflow: ellipsis;
      white-space: nowrap;
      display: block;
      line-height: 1.2
    }

    #bundle-recent_sales-close {
      position: absolute;
      top: 5px;
      right: 5px;
      cursor: pointer;
      font-size: 10px;
      line-height: 1;
      font-weight: 400;
      opacity: 0.8
    }

    #bundle-recent_sales-time_ago {
      text-align: right;
      font-size: 9px;
      letter-spacing: 0;
      line-height: 1;
      text-transform: uppercase;
      padding: 4px;
      border-radius: 50px
    }

    .bundle-fade-in {
      animation-name: nbFadeIn;
      animation-duration: 1s;
      animation-fill-mode: both
    }

    .bundle-fade-out {
      animation-name: nbFadeOut;
      animation-duration: 1s;
      animation-fill-mode: both
    }

    .basic-display {
      display: flex
    }

    .recent-sales-product {
      height: 80px;
      width: 80px;
      overflow: hidden;
      display: flex !important;
      vertical-align: middle;
      text-align: center;
      box-sizing: border-box
    }

    .recent-sales-product .recent-sales-product-image {
      width: 100%;
      height: 100%;
      overflow: hidden;
      align-items: center
    }

    .recent-sales-product-image img {
      max-width: 100%;
      width: auto;
      height: 100%;
      -o-object-fit: cover;
      object-fit: cover;
      -o-object-position: center;
      object-position: center;
      min-height: 100%
    }

    .recent-sales-content {
      padding: 10px;
      position: relative;
      height: 80px;
      width: calc(100% - 80px);
      display: flex;
      box-sizing: border-box
    }

    .recent-sales-content p {
      margin: 0
    }

    .recent-sales-content a {
      text-decoration: none;
      font-weight: bold;
      font-size: 14px
    }

    .bundle-recent-sales-illustration {
      align-self: center;
      width: 100px;
      height: 100px
    }

    @media (max-width: 355px) {
      .bundle-recent-sales-illustration {
        display: none
      }
    }

    @media (max-width: 470px) {
      #bundle-recent_sales {
        width: 95% !important;
        left: -4% !important;
        margin: 10px 2% !important
      }

      #bundle-recent_sales.bundle-fade-in {
        left: 0 !important
      }

      .bundle-recent_sales-link {
        max-width: 180px !important
      }

      .bundle-recent_sales-person {
        font-size: 10px !important
      }
    }

    .verifiedby-vitals {
      margin-left: 10px
    }

    .verifiedby-badge {
      display: flex
    }

    .recent-sales-info>div:nth-child(2) {
      display: flex
    }

    .vitals-recent-sales-row {
      display: flex;
      align-items: center
    }

    .verifiedby-icon {
      background-position: center;
      background-size: contain;
      background-repeat: no-repeat;
      width: 18px;
      height: 18px
    }

    div#bundle-recent_sales {
      width: 460px;
      bottom: 30px;
      border-radius: 9px;
    }

    .recent-sales-content {
      border-bottom-right-radius: 9px;
      border-top-right-radius: 9px;
    }

    .recent-sales-product {
      border-bottom-left-radius: 9px;
      border-top-left-radius: 9px;
    }

    .recent-sales-content {
      background-color: #333e40;
    }

    .recent-sales-product {
      background-color: #333e40;
    }

    #bundle-recent_sales p {
      color: #eeeeee;
      font-size: 14px;
    }

    #bundle-recent_sales a {
      color: #FFD700;
      font-size: 13px;
    }

    .bundle-recent_sales-link {
      width: 310px;
    }

    #bundle-recent_sales-close {
      color: #cccccc;
      right: 3.7242256683503507px;
      top: 2.864788975654116px;
    }

    #bundle-recent_sales-time_ago {
      color: #cccccc;
    }

    @keyframes nbFadeIn {
      from {
        transform: translate(0, 100%);
      }

      to {
        transform: none;
      }
    }

    @keyframes nbFadeOut {
      from {}

      to {
        transform: translate(0, 100%);
        bottom: -20px;
      }
    }
  </style><img alt=""
    src="https://metrics.getvitals.io/collect?events%5BpageView%5D%5Bv%5D=1&amp;events%5BpageView%5D%5Buri%5D=https%3A%2F%2Fbuyonline.shopping%2F&amp;events%5BpageView%5D%5Bua%5D=Mozilla%2F5.0+(Windows+NT+10.0%3B+Win64%3B+x64)+AppleWebKit%2F537.36+(KHTML%2C+like+Gecko)+Chrome%2F86.0.4240.75+Safari%2F537.36&amp;events%5BpageView%5D%5Bh%5D=768&amp;events%5BpageView%5D%5Bw%5D=1366&amp;events%5BpageView%5D%5Bid%5D=49871224982&amp;events%5BpageView%5D%5Bsid%5D=49871224982&amp;events%5BpageView%5D%5BpageType%5D=home&amp;events%5BpageView%5D%5Btz%5D=-60&amp;events%5BpageView%5D%5Buid%5D=d39f2275-58ac-4487-ba85-c13eac6134d7&amp;events%5BpageView%5D%5BvsId%5D=3e4078e6-3a1b-4059-a686-bdaf375b16a9&amp;events%5BpageView%5D%5Bco%5D=NG"
    id="vitals-analytics">
  <div id="ccmicrojs">
    <!---->
    <!---->
    <!---->
    <!---->
    <!---->
    <!---->
    <!---->
    <!---->
    <!---->
    <!---->
    <div>
      <!---->
      <!---->
      <!---->
      <!---->
      <!---->
      <!---->
      <!---->
      <!---->
    </div>
  </div>
  <div id="bundle-recent_sales" class="bundle-fade-out" style="display: block;">
    <div class="basic-display">
      <div class="recent-sales-product">
        <div class="recent-sales-product-image"> <a class="recent-sales-url" target="_blank" data-id="5778917654678"
            href="https://buyonline.shopping/products/hybrid-e-bike"> <img class="recent-sales-image"
              src="https://cdn.shopify.com/s/files/1/0498/7122/4982/products/eb1_medium.jpg" alt=""> </a> </div>
      </div>
      <div class="recent-sales-content">
        <div class="recent-sales-info">
          <div>
            <p class="bundle-recent_sales-person firstRow">Someone from Junee, Australia purchased</p> <a
              class="bundle-recent_sales-link recent-sales-url" target="_blank" data-id="5778917654678"
              href="https://buyonline.shopping/products/hybrid-e-bike">Hybrid E-Bike </a>
          </div>
          <div class="vitals-recent-sales-row"><span id="bundle-recent_sales-time_ago">2 hours ago</span> </div> <span
            id="bundle-recent_sales-close">✕</span>
        </div>
        <div class="bundle-recent-sales-illustration">
          <div class="illustration"></div>
        </div>
      </div>
    </div>
  </div>