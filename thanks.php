<?php
//v5

session_start();
$_SESSION["pixel"]						= isset($_GET['pixel']) ? $_GET['pixel'] : '';
$_SESSION["name"]						= isset($_GET['name']) ? $_GET['name'] : '';
$_SESSION["phone"]						= isset($_GET['phone']) ? $_GET['phone'] : '';
$_SESSION['subid']                      = isset($_GET['subid']) ? $_GET['subid'] : '';


?>
<!doctype html>
<html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <title>Cảm ơn!</title>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width">

    <!-- Facebook Pixel Code -->
    <script>
        !function(f,b,e,v,n,t,s)
        {if(f.fbq)return;n=f.fbq=function(){n.callMethod?
            n.callMethod.apply(n,arguments):n.queue.push(arguments)};
            if(!f._fbq)f._fbq=n;n.push=n;n.loaded=!0;n.version='2.0';
            n.queue=[];t=b.createElement(e);t.async=!0;
            t.src=v;s=b.getElementsByTagName(e)[0];
            s.parentNode.insertBefore(t,s)}(window, document,'script',
            'https://connect.facebook.net/en_US/fbevents.js');
        fbq('init', '<?php echo $_SESSION["pixel"];?>');
        fbq('track', 'PageView', {}, {eventID: '<?php echo $_SESSION['subid']; ?>'});
        fbq('track', 'Lead', {}, {eventID: '<?php echo $_SESSION['subid']; ?>'});
    </script>
    <noscript><img height="1" width="1" style="display:none" src="https://www.facebook.com/tr?id=<?php echo $_SESSION["pixel"];?>&ev=Lead&noscript=1&eid=<?php echo $_SESSION['subid']; ?>" /></noscript>
    <script type="text/javascript">
            window.ladi_viewport = function () {
                var screen_width = window.ladi_screen_width || window.screen.width;
                var width = window.outerWidth > 0 ? window.outerWidth : screen_width;
                var widthDevice = width;
                var is_desktop = width >= 768;
                var content = "";
                if (typeof window.ladi_is_desktop == "undefined" || window.ladi_is_desktop == undefined) {
                    window.ladi_is_desktop = is_desktop;
                }
                if (!is_desktop) {
                    widthDevice = 420;
                } else {
                    widthDevice = 960;
                }
                content = "width=" + widthDevice + ", user-scalable=no";
                var scale = 1;
                if (!is_desktop && widthDevice != screen_width && screen_width > 0) {
                    scale = screen_width / widthDevice;
                }
                if (scale != 1) {
                    content += ", initial-scale=" + scale + ", minimum-scale=" + scale + ", maximum-scale=" + scale;
                }
                var docViewport = document.getElementById("viewport");
                if (!docViewport) {
                    docViewport = document.createElement("meta");
                    docViewport.setAttribute("id", "viewport");
                    docViewport.setAttribute("name", "viewport");
                    document.head.appendChild(docViewport);
                }
                docViewport.setAttribute("content", content);
            };
            window.ladi_viewport();
        </script>
        <style id="style_ladi" type="text/css">
            a,
            abbr,
            acronym,
            address,
            applet,
            article,
            aside,
            audio,
            b,
            big,
            blockquote,
            body,
            button,
            canvas,
            caption,
            center,
            cite,
            code,
            dd,
            del,
            details,
            dfn,
            div,
            dl,
            dt,
            em,
            embed,
            fieldset,
            figcaption,
            figure,
            footer,
            form,
            h1,
            h2,
            h3,
            h4,
            h5,
            h6,
            header,
            hgroup,
            html,
            i,
            iframe,
            img,
            input,
            ins,
            kbd,
            label,
            legend,
            li,
            mark,
            menu,
            nav,
            object,
            ol,
            output,
            p,
            pre,
            q,
            ruby,
            s,
            samp,
            section,
            select,
            small,
            span,
            strike,
            strong,
            sub,
            summary,
            sup,
            table,
            tbody,
            td,
            textarea,
            tfoot,
            th,
            thead,
            time,
            tr,
            tt,
            u,
            ul,
            var,
            video {
                margin: 0;
                padding: 0;
                border: 0;
                outline: 0;
                font-size: 100%;
                font: inherit;
                vertical-align: baseline;
                box-sizing: border-box;
                -webkit-font-smoothing: antialiased;
                -moz-osx-font-smoothing: grayscale;
            }
            article,
            aside,
            details,
            figcaption,
            figure,
            footer,
            header,
            hgroup,
            menu,
            nav,
            section {
                display: block;
            }
            body {
                line-height: 1;
            }
            a {
                text-decoration: none;
            }
            ol,
            ul {
                list-style: none;
            }
            blockquote,
            q {
                quotes: none;
            }
            blockquote:after,
            blockquote:before,
            q:after,
            q:before {
                content: "";
                content: none;
            }
            table {
                border-collapse: collapse;
                border-spacing: 0;
            }
            body {
                font-size: 12px;
                -ms-text-size-adjust: none;
                -moz-text-size-adjust: none;
                -o-text-size-adjust: none;
                -webkit-text-size-adjust: none;
                background-color: #fff;
            }
            .ladi-loading {
                width: 80px;
                height: 80px;
                z-index: 900000000000;
                position: fixed;
                top: 0;
                left: 0;
                bottom: 0;
                right: 0;
                margin: auto;
                overflow: hidden;
            }
            .ladi-loading div {
                position: absolute;
                width: 6px;
                height: 6px;
                background: #fff;
                border-radius: 50%;
                animation: ladi-loading 1.2s linear infinite;
            }
            .ladi-loading div:nth-child(1) {
                animation-delay: 0s;
                top: 37px;
                left: 66px;
            }
            .ladi-loading div:nth-child(2) {
                animation-delay: -0.1s;
                top: 22px;
                left: 62px;
            }
            .ladi-loading div:nth-child(3) {
                animation-delay: -0.2s;
                top: 11px;
                left: 52px;
            }
            .ladi-loading div:nth-child(4) {
                animation-delay: -0.3s;
                top: 7px;
                left: 37px;
            }
            .ladi-loading div:nth-child(5) {
                animation-delay: -0.4s;
                top: 11px;
                left: 22px;
            }
            .ladi-loading div:nth-child(6) {
                animation-delay: -0.5s;
                top: 22px;
                left: 11px;
            }
            .ladi-loading div:nth-child(7) {
                animation-delay: -0.6s;
                top: 37px;
                left: 7px;
            }
            .ladi-loading div:nth-child(8) {
                animation-delay: -0.7s;
                top: 52px;
                left: 11px;
            }
            .ladi-loading div:nth-child(9) {
                animation-delay: -0.8s;
                top: 62px;
                left: 22px;
            }
            .ladi-loading div:nth-child(10) {
                animation-delay: -0.9s;
                top: 66px;
                left: 37px;
            }
            .ladi-loading div:nth-child(11) {
                animation-delay: -1s;
                top: 62px;
                left: 52px;
            }
            .ladi-loading div:nth-child(12) {
                animation-delay: -1.1s;
                top: 52px;
                left: 62px;
            }
            @keyframes ladi-loading {
                0%,
                100%,
                20%,
                80% {
                    transform: scale(1);
                }
                50% {
                    transform: scale(1.5);
                }
            }
            .overflow-hidden {
                overflow: hidden;
            }
            .ladi-transition {
                transition: all 150ms linear 0s;
            }
            .opacity-0 {
                opacity: 0;
            }
            .height-0 {
                height: 0 !important;
            }
            .transition-readmore {
                transition: height 350ms linear 0s;
            }
            .transition-collapse {
                transition: height 150ms linear 0s;
            }
            .transition-parent-collapse-height {
                transition: height 150ms linear 0s;
            }
            .transition-parent-collapse-top {
                transition: top 150ms linear 0s;
            }
            .pointer-events-none {
                pointer-events: none;
            }
            .ladi-google-recaptcha-checkbox {
                position: absolute;
                display: inline-block;
                transform: translateY(-100%);
                margin-top: -5px;
                z-index: 90000010;
            }
            .ladipage-message {
                position: fixed;
                width: 100%;
                height: 100%;
                top: 0;
                left: 0;
                z-index: 10000000000;
                background: rgba(0, 0, 0, 0.3);
            }
            .ladipage-message .ladipage-message-box {
                width: 400px;
                max-width: calc(100% - 50px);
                height: 160px;
                border: 1px solid rgba(0, 0, 0, 0.3);
                background-color: #fff;
                position: fixed;
                top: calc(50% - 155px);
                left: 0;
                right: 0;
                margin: auto;
                border-radius: 10px;
            }
            .ladipage-message .ladipage-message-box span {
                display: block;
                background-color: rgba(6, 21, 40, 0.05);
                color: #000;
                padding: 12px 15px;
                font-weight: 600;
                font-size: 16px;
                line-height: 16px;
                border-top-left-radius: 10px;
                border-top-right-radius: 10px;
            }
            .ladipage-message .ladipage-message-box .ladipage-message-text {
                display: -webkit-box;
                font-size: 14px;
                padding: 0 20px;
                margin-top: 10px;
                line-height: 18px;
                -webkit-line-clamp: 3;
                -webkit-box-orient: vertical;
                overflow: hidden;
                text-overflow: ellipsis;
            }
            .ladipage-message .ladipage-message-box .ladipage-message-close {
                display: block;
                position: absolute;
                right: 15px;
                bottom: 10px;
                margin: 0 auto;
                padding: 10px 0;
                border: none;
                width: 80px;
                text-transform: uppercase;
                text-align: center;
                color: #000;
                background-color: #e6e6e6;
                border-radius: 5px;
                text-decoration: none;
                font-size: 14px;
                line-height: 14px;
                font-weight: 600;
                cursor: pointer;
            }
            .ladi-wraper {
                width: 100%;
                height: 100%;
                min-height: 100%;
                overflow: hidden;
            }
            .ladi-section {
                margin: 0 auto;
                position: relative;
            }
            .ladi-section[data-tab-id] {
                display: none;
            }
            .ladi-section.selected[data-tab-id] {
                display: block;
            }
            .ladi-section .ladi-section-arrow-down {
                position: absolute;
                bottom: 0;
                right: 0;
                left: 0;
                margin: auto;
                cursor: pointer;
                z-index: 90000040;
            }
            .ladi-section .ladi-section-close {
                position: absolute;
                top: 0;
                right: 0;
                cursor: pointer;
                z-index: 90000040;
            }
            .ladi-section .ladi-section-background {
                position: absolute;
                width: 100%;
                height: 100%;
                top: 0;
                left: 0;
                pointer-events: none;
                overflow: hidden;
            }
            .ladi-container {
                position: relative;
                margin: 0 auto;
                height: 100%;
            }
            .ladi-element {
                position: absolute;
            }
            .ladi-overlay {
                position: absolute;
                top: 0;
                left: 0;
                height: 100%;
                width: 100%;
                pointer-events: none;
            }
            .ladi-survey {
                width: 100%;
                display: inline-block;
            }
            .ladi-survey .ladi-survey-option {
                cursor: pointer;
                position: relative;
                display: inline-block;
                text-decoration-line: inherit;
                -webkit-text-decoration-line: inherit;
                transition: inherit;
                user-select: none;
                -webkit-user-select: none;
                -moz-user-select: none;
                -ms-user-select: none;
            }
            .ladi-survey .ladi-survey-option-background {
                position: absolute;
                width: 100%;
                height: 100%;
                top: 0;
                left: 0;
                pointer-events: none;
                transition: inherit;
            }
            .ladi-survey .ladi-survey-option-label {
                display: block;
                text-decoration-line: inherit;
                -webkit-text-decoration-line: inherit;
                position: relative;
            }
            .ladi-survey .ladi-survey-option-image {
                background-size: cover;
                background-position: center center;
                pointer-events: none;
                vertical-align: middle;
                border-radius: inherit;
                position: relative;
            }
            .ladi-survey .ladi-survey-button-next {
                display: block;
            }
            .ladi-survey .ladi-survey-button-next.empty {
                display: none;
            }
            .ladi-survey .ladi-survey-button-next.no-select {
                display: none;
            }
            .ladi-survey .ladi-survey-button-next button {
                background-color: #fff;
                border: 1px solid #eee;
                padding: 5px 10px;
                cursor: pointer;
                border-radius: 2px;
            }
            .ladi-survey .ladi-survey-button-next button:active {
                transform: translateY(2px);
                transition: transform 0.2s linear;
            }
            .ladi-carousel {
                position: absolute;
                width: 100%;
                height: 100%;
                overflow: hidden;
                touch-action: pan-y;
            }
            .ladi-carousel .ladi-carousel-content {
                position: absolute;
                width: 100%;
                height: 100%;
                left: 0;
                transition: left 350ms ease-in-out;
            }
            .ladi-carousel .ladi-carousel-arrow {
                position: absolute;
                top: calc(50% - (33px) / 2);
                cursor: pointer;
                z-index: 90000040;
            }
            .ladi-carousel .ladi-carousel-arrow-left {
                left: 5px;
                transform: rotateY(180deg);
                -webkit-transform: rotateY(180deg);
            }
            .ladi-carousel .ladi-carousel-arrow-right {
                right: 5px;
            }
            .ladi-gallery {
                position: absolute;
                width: 100%;
                height: 100%;
            }
            .ladi-gallery .ladi-gallery-view {
                position: absolute;
                overflow: hidden;
                touch-action: pan-y;
            }
            .ladi-gallery .ladi-gallery-view > .ladi-gallery-view-item {
                background-size: cover;
                background-repeat: no-repeat;
                background-position: center center;
                width: 100%;
                height: 100%;
                position: relative;
                display: none;
                transition: transform 0.5s ease-in-out;
                -webkit-backface-visibility: hidden;
                backface-visibility: hidden;
                -webkit-perspective: 1000px;
                perspective: 1000px;
            }
            .ladi-gallery .ladi-gallery-view > .ladi-gallery-view-item.play-video {
                cursor: pointer;
            }
            .ladi-gallery .ladi-gallery-view > .ladi-gallery-view-item.play-video:after {
                content: "";
                position: absolute;
                top: 0;
                left: 0;
                right: 0;
                bottom: 0;
                margin: auto;
                width: 60px;
                height: 60px;
                background: url(https://w.ladicdn.com/source/ladipage-play.svg) no-repeat center center;
                background-size: contain;
                pointer-events: none;
                cursor: pointer;
            }
            .ladi-gallery .ladi-gallery-view > .ladi-gallery-view-item.next,
            .ladi-gallery .ladi-gallery-view > .ladi-gallery-view-item.selected.right {
                left: 0;
                transform: translate3d(100%, 0, 0);
            }
            .ladi-gallery .ladi-gallery-view > .ladi-gallery-view-item.prev,
            .ladi-gallery .ladi-gallery-view > .ladi-gallery-view-item.selected.left {
                left: 0;
                transform: translate3d(-100%, 0, 0);
            }
            .ladi-gallery .ladi-gallery-view > .ladi-gallery-view-item.next.left,
            .ladi-gallery .ladi-gallery-view > .ladi-gallery-view-item.prev.right,
            .ladi-gallery .ladi-gallery-view > .ladi-gallery-view-item.selected {
                left: 0;
                transform: translate3d(0, 0, 0);
            }
            .ladi-gallery .ladi-gallery-view > .next,
            .ladi-gallery .ladi-gallery-view > .prev,
            .ladi-gallery .ladi-gallery-view > .selected {
                display: block;
            }
            .ladi-gallery .ladi-gallery-view > .selected {
                left: 0;
            }
            .ladi-gallery .ladi-gallery-view > .next,
            .ladi-gallery .ladi-gallery-view > .prev {
                position: absolute;
                top: 0;
                width: 100%;
            }
            .ladi-gallery .ladi-gallery-view > .next {
                left: 100%;
            }
            .ladi-gallery .ladi-gallery-view > .prev {
                left: -100%;
            }
            .ladi-gallery .ladi-gallery-view > .next.left,
            .ladi-gallery .ladi-gallery-view > .prev.right {
                left: 0;
            }
            .ladi-gallery .ladi-gallery-view > .selected.left {
                left: -100%;
            }
            .ladi-gallery .ladi-gallery-view > .selected.right {
                left: 100%;
            }
            .ladi-gallery .ladi-gallery-control {
                position: absolute;
                overflow: hidden;
                touch-action: pan-y;
            }
            .ladi-gallery.ladi-gallery-top .ladi-gallery-view {
                width: 100%;
            }
            .ladi-gallery.ladi-gallery-top .ladi-gallery-control {
                top: 0;
                width: 100%;
            }
            .ladi-gallery.ladi-gallery-bottom .ladi-gallery-view {
                top: 0;
                width: 100%;
            }
            .ladi-gallery.ladi-gallery-bottom .ladi-gallery-control {
                width: 100%;
                bottom: 0;
            }
            .ladi-gallery.ladi-gallery-left .ladi-gallery-view {
                height: 100%;
            }
            .ladi-gallery.ladi-gallery-left .ladi-gallery-control {
                height: 100%;
            }
            .ladi-gallery.ladi-gallery-right .ladi-gallery-view {
                height: 100%;
            }
            .ladi-gallery.ladi-gallery-right .ladi-gallery-control {
                height: 100%;
                right: 0;
            }
            .ladi-gallery .ladi-gallery-view .ladi-gallery-view-arrow {
                position: absolute;
                top: calc(50% - (33px) / 2);
                cursor: pointer;
                z-index: 90000040;
            }
            .ladi-gallery .ladi-gallery-view .ladi-gallery-view-arrow-left {
                left: 5px;
                transform: rotateY(180deg);
                -webkit-transform: rotateY(180deg);
            }
            .ladi-gallery .ladi-gallery-view .ladi-gallery-view-arrow-right {
                right: 5px;
            }
            .ladi-gallery .ladi-gallery-control .ladi-gallery-control-arrow {
                position: absolute;
                cursor: pointer;
                z-index: 90000040;
            }
            .ladi-gallery.ladi-gallery-bottom .ladi-gallery-control .ladi-gallery-control-arrow,
            .ladi-gallery.ladi-gallery-top .ladi-gallery-control .ladi-gallery-control-arrow {
                top: calc(50% - (33px) / 2);
            }
            .ladi-gallery.ladi-gallery-top .ladi-gallery-control .ladi-gallery-control-arrow-left {
                left: 0;
                transform: rotateY(180deg) scale(0.6);
                -webkit-transform: rotateY(180deg) scale(0.6);
            }
            .ladi-gallery.ladi-gallery-top .ladi-gallery-control .ladi-gallery-control-arrow-right {
                right: 0;
                transform: scale(0.6);
                -webkit-transform: scale(0.6);
            }
            .ladi-gallery.ladi-gallery-bottom .ladi-gallery-control .ladi-gallery-control-arrow-left {
                left: 0;
                transform: rotateY(180deg) scale(0.6);
                -webkit-transform: rotateY(180deg) scale(0.6);
            }
            .ladi-gallery.ladi-gallery-bottom .ladi-gallery-control .ladi-gallery-control-arrow-right {
                right: 0;
                transform: scale(0.6);
                -webkit-transform: scale(0.6);
            }
            .ladi-gallery.ladi-gallery-left .ladi-gallery-control .ladi-gallery-control-arrow,
            .ladi-gallery.ladi-gallery-right .ladi-gallery-control .ladi-gallery-control-arrow {
                left: calc(50% - (33px) / 2);
            }
            .ladi-gallery.ladi-gallery-left .ladi-gallery-control .ladi-gallery-control-arrow-left {
                top: 0;
                transform: scale(0.6) rotate(270deg);
                -webkit-transform: scale(0.6) rotate(270deg);
            }
            .ladi-gallery.ladi-gallery-left .ladi-gallery-control .ladi-gallery-control-arrow-right {
                bottom: 0;
                transform: scale(0.6) rotate(90deg);
                -webkit-transform: scale(0.6) rotate(90deg);
            }
            .ladi-gallery.ladi-gallery-right .ladi-gallery-control .ladi-gallery-control-arrow-left {
                top: 0;
                transform: scale(0.6) rotate(270deg);
                -webkit-transform: scale(0.6) rotate(270deg);
            }
            .ladi-gallery.ladi-gallery-right .ladi-gallery-control .ladi-gallery-control-arrow-right {
                bottom: 0;
                transform: scale(0.6) rotate(90deg);
                -webkit-transform: scale(0.6) rotate(90deg);
            }
            .ladi-gallery .ladi-gallery-control .ladi-gallery-control-box {
                position: relative;
            }
            .ladi-gallery.ladi-gallery-top .ladi-gallery-control .ladi-gallery-control-box {
                display: -webkit-inline-flex;
                display: inline-flex;
                left: 0;
                transition: left 150ms ease-in-out;
            }
            .ladi-gallery.ladi-gallery-bottom .ladi-gallery-control .ladi-gallery-control-box {
                display: -webkit-inline-flex;
                display: inline-flex;
                left: 0;
                transition: left 150ms ease-in-out;
            }
            .ladi-gallery.ladi-gallery-left .ladi-gallery-control .ladi-gallery-control-box {
                display: inline-grid;
                top: 0;
                transition: top 150ms ease-in-out;
            }
            .ladi-gallery.ladi-gallery-right .ladi-gallery-control .ladi-gallery-control-box {
                display: inline-grid;
                top: 0;
                transition: top 150ms ease-in-out;
            }
            .ladi-gallery .ladi-gallery-control .ladi-gallery-control-box .ladi-gallery-control-item {
                background-size: cover;
                background-repeat: no-repeat;
                background-position: center center;
                float: left;
                position: relative;
                cursor: pointer;
                filter: invert(15%);
            }
            .ladi-gallery .ladi-gallery-control .ladi-gallery-control-box .ladi-gallery-control-item.play-video:after {
                content: "";
                position: absolute;
                top: 0;
                left: 0;
                right: 0;
                bottom: 0;
                margin: auto;
                width: 30px;
                height: 30px;
                background: url(https://w.ladicdn.com/source/ladipage-play.svg) no-repeat center center;
                background-size: contain;
                pointer-events: none;
                cursor: pointer;
            }
            .ladi-gallery .ladi-gallery-control .ladi-gallery-control-box .ladi-gallery-control-item:hover {
                filter: none;
            }
            .ladi-gallery .ladi-gallery-control .ladi-gallery-control-box .ladi-gallery-control-item.selected {
                filter: none;
            }
            .ladi-gallery .ladi-gallery-control .ladi-gallery-control-box .ladi-gallery-control-item:last-child {
                margin-right: 0 !important;
                margin-bottom: 0 !important;
            }
            .ladi-table {
                position: absolute;
                width: 100%;
                height: 100%;
                overflow: auto;
            }
            .ladi-table table {
                width: 100%;
            }
            .ladi-table table td {
                vertical-align: middle;
            }
            .ladi-table tbody td {
                word-break: break-word;
            }
            .ladi-table table td img {
                cursor: pointer;
                width: 100%;
            }
            .ladi-box {
                position: absolute;
                width: 100%;
                height: 100%;
                overflow: hidden;
            }
            .ladi-tabs {
                position: absolute;
                width: 100%;
                height: 100%;
            }
            .ladi-tabs .ladi-tabs-background {
                height: 100%;
                width: 100%;
                pointer-events: none;
            }
            .ladi-tabs > .ladi-element[data-index] {
                display: none;
            }
            .ladi-tabs > .ladi-element.selected[data-index] {
                display: block;
            }
            .ladi-frame {
                position: absolute;
                width: 100%;
                height: 100%;
                overflow: hidden;
            }
            .ladi-frame .ladi-frame-background {
                height: 100%;
                width: 100%;
                pointer-events: none;
                transition: inherit;
            }
            .ladi-banner {
                position: absolute;
                width: 100%;
                height: 100%;
                overflow: hidden;
            }
            .ladi-banner .ladi-banner-background {
                height: 100%;
                width: 100%;
                pointer-events: none;
            }
            #SECTION_POPUP .ladi-container {
                z-index: 90000070;
            }
            #SECTION_POPUP .ladi-container > .ladi-element {
                z-index: 90000070;
                position: fixed;
                display: none;
            }
            #SECTION_POPUP .ladi-container > .ladi-element[data-fixed-close="true"] {
                position: relative !important;
            }
            #SECTION_POPUP .ladi-container > .ladi-element.hide-visibility {
                display: block !important;
                visibility: hidden !important;
            }
            #SECTION_POPUP .popup-close {
                position: absolute;
                right: 0;
                top: 0;
                z-index: 9000000080;
                cursor: pointer;
            }
            .ladi-popup {
                position: absolute;
                width: 100%;
                height: 100%;
            }
            .ladi-popup .ladi-popup-background {
                height: 100%;
                width: 100%;
                pointer-events: none;
            }
            .ladi-countdown {
                position: absolute;
                width: 100%;
                height: 100%;
            }
            .ladi-countdown .ladi-countdown-background {
                position: absolute;
                width: 100%;
                height: 100%;
                top: 0;
                left: 0;
                background-size: inherit;
                background-attachment: inherit;
                background-origin: inherit;
                display: table;
                pointer-events: none;
            }
            .ladi-countdown .ladi-countdown-text {
                position: absolute;
                width: 100%;
                height: 100%;
                text-decoration: inherit;
                display: table;
                pointer-events: none;
            }
            .ladi-countdown .ladi-countdown-text span {
                display: table-cell;
                vertical-align: middle;
            }
            .ladi-countdown > .ladi-element {
                text-decoration: inherit;
                background-size: inherit;
                background-attachment: inherit;
                background-origin: inherit;
                position: relative;
                display: inline-block;
            }
            .ladi-countdown > .ladi-element:last-child {
                margin-right: 0 !important;
            }
            .ladi-button {
                position: absolute;
                width: 100%;
                height: 100%;
                overflow: hidden;
            }
            .ladi-button:active {
                transform: translateY(2px);
                transition: transform 0.2s linear;
            }
            .ladi-button .ladi-button-background {
                height: 100%;
                width: 100%;
                pointer-events: none;
                transition: inherit;
            }
            .ladi-button > .ladi-button-headline,
            .ladi-button > .ladi-button-shape {
                width: 100% !important;
                height: 100% !important;
                top: 0 !important;
                left: 0 !important;
                display: table;
                user-select: none;
                -webkit-user-select: none;
                -moz-user-select: none;
                -ms-user-select: none;
            }
            .ladi-button > .ladi-button-shape .ladi-shape {
                margin: auto;
                top: 0;
                bottom: 0;
            }
            .ladi-button > .ladi-button-headline .ladi-headline {
                display: table-cell;
                vertical-align: middle;
            }
            .ladi-collection {
                position: absolute;
                width: 100%;
                height: 100%;
            }
            .ladi-collection.carousel {
                overflow: hidden;
            }
            .ladi-collection .ladi-collection-content {
                position: absolute;
                width: 100%;
                height: 100%;
                left: 0;
                transition: left 350ms ease-in-out;
            }
            .ladi-collection .ladi-collection-content .ladi-collection-item {
                display: block;
                position: relative;
                float: left;
            }
            .ladi-collection .ladi-collection-content .ladi-collection-page {
                float: left;
            }
            .ladi-collection .ladi-collection-arrow {
                position: absolute;
                top: calc(50% - (33px) / 2);
                cursor: pointer;
                z-index: 90000040;
            }
            .ladi-collection .ladi-collection-arrow-left {
                left: 5px;
                transform: rotateY(180deg);
                -webkit-transform: rotateY(180deg);
            }
            .ladi-collection .ladi-collection-arrow-right {
                right: 5px;
            }
            .ladi-collection .ladi-collection-button-next {
                position: absolute;
                bottom: -40px;
                right: 0;
                left: 0;
                margin: auto;
                cursor: pointer;
                z-index: 90000040;
                transform: rotate(90deg);
                -webkit-transform: rotate(90deg);
            }
            .ladi-form {
                position: absolute;
                width: 100%;
                height: 100%;
            }
            .ladi-form > .ladi-element {
                text-transform: inherit;
                text-decoration: inherit;
                text-align: inherit;
                letter-spacing: inherit;
                color: inherit;
                background-size: inherit;
                background-attachment: inherit;
                background-origin: inherit;
            }
            .ladi-form .ladi-button > .ladi-button-headline {
                color: initial;
                font-size: initial;
                font-weight: initial;
                text-transform: initial;
                text-decoration: initial;
                font-style: initial;
                text-align: initial;
                letter-spacing: initial;
                line-height: initial;
            }
            .ladi-form > .ladi-element .ladi-form-item-container {
                text-transform: inherit;
                text-decoration: inherit;
                text-align: inherit;
                letter-spacing: inherit;
                color: inherit;
                background-size: inherit;
                background-attachment: inherit;
                background-origin: inherit;
            }
            .ladi-form > [data-quantity="true"] .ladi-form-item-container {
                overflow: hidden;
            }
            .ladi-form > .ladi-element .ladi-form-item-container .ladi-form-item {
                text-transform: inherit;
                text-decoration: inherit;
                text-align: inherit;
                letter-spacing: inherit;
                color: inherit;
            }
            .ladi-form > .ladi-element .ladi-form-item-container .ladi-form-item-background {
                background-size: inherit;
                background-attachment: inherit;
                background-origin: inherit;
            }
            .ladi-form > .ladi-element .ladi-form-item-container .ladi-form-item .ladi-form-control-select {
                -webkit-appearance: none;
                -moz-appearance: none;
                appearance: none;
                background-size: 9px 6px !important;
                background-position: right 0.5rem center;
                background-repeat: no-repeat;
            }
            .ladi-form > .ladi-element .ladi-form-item-container .ladi-form-item .ladi-form-control-select-2 {
                width: calc(100% / 2 - 5px);
                max-width: calc(100% / 2 - 5px);
                min-width: calc(100% / 2 - 5px);
            }
            .ladi-form > .ladi-element .ladi-form-item-container .ladi-form-item .ladi-form-control-select-2:nth-child(3) {
                margin-left: 7.5px;
            }
            .ladi-form > .ladi-element .ladi-form-item-container .ladi-form-item .ladi-form-control-select-3 {
                width: calc(100% / 3 - 5px);
                max-width: calc(100% / 3 - 5px);
                min-width: calc(100% / 3 - 5px);
            }
            .ladi-form > .ladi-element .ladi-form-item-container .ladi-form-item .ladi-form-control-select-3:nth-child(3) {
                margin-left: 7.5px;
            }
            .ladi-form > .ladi-element .ladi-form-item-container .ladi-form-item .ladi-form-control-select-3:nth-child(4) {
                margin-left: 7.5px;
            }
            .ladi-form > .ladi-element .ladi-form-item-container .ladi-form-item .ladi-form-control-select option {
                color: initial;
            }
            .ladi-form > .ladi-element .ladi-form-item-container .ladi-form-item .ladi-form-control:not(.ladi-form-control-select) {
                text-transform: inherit;
                text-decoration: inherit;
                text-align: inherit;
                letter-spacing: inherit;
                color: inherit;
                background-size: inherit;
                background-attachment: inherit;
                background-origin: inherit;
            }
            .ladi-form > .ladi-element .ladi-form-item-container .ladi-form-item .ladi-form-control-select {
                text-transform: inherit;
                text-align: inherit;
                letter-spacing: inherit;
                color: inherit;
                background-size: inherit;
                background-attachment: inherit;
                background-origin: inherit;
            }
            .ladi-form > .ladi-element .ladi-form-item-container .ladi-form-item .ladi-form-control-select:not([data-selected=""]) {
                text-decoration: inherit;
            }
            .ladi-form > .ladi-element .ladi-form-item-container .ladi-form-item .ladi-form-checkbox-item {
                text-transform: inherit;
                text-decoration: inherit;
                text-align: inherit;
                letter-spacing: inherit;
                color: inherit;
                background-size: inherit;
                background-attachment: inherit;
                background-origin: inherit;
                vertical-align: middle;
            }
            .ladi-form > .ladi-element .ladi-form-item-container .ladi-form-item .ladi-form-checkbox-item span {
                user-select: none;
                -webkit-user-select: none;
                -moz-user-select: none;
                -ms-user-select: none;
            }
            .ladi-form > .ladi-element .ladi-form-item-container .ladi-form-item .ladi-form-checkbox-item span[data-checked="true"] {
                text-transform: inherit;
                text-decoration: inherit;
                text-align: inherit;
                letter-spacing: inherit;
                color: inherit;
                background-size: inherit;
                background-attachment: inherit;
                background-origin: inherit;
            }
            .ladi-form > .ladi-element .ladi-form-item-container .ladi-form-item .ladi-form-checkbox-item span[data-checked="false"] {
                text-transform: inherit;
                text-align: inherit;
                letter-spacing: inherit;
                color: inherit;
                background-size: inherit;
                background-attachment: inherit;
                background-origin: inherit;
            }
            .ladi-form .ladi-form-item-container {
                position: absolute;
                width: 100%;
                height: 100%;
            }
            .ladi-form .ladi-form-item-title-value {
                font-weight: 700;
                word-break: break-word;
            }
            .ladi-form .ladi-form-label-container {
                position: relative;
                width: 100%;
            }
            .ladi-form .ladi-form-label-container .ladi-form-label-item {
                display: inline-block;
                cursor: pointer;
                position: relative;
                border-radius: 0 !important;
                user-select: none;
                -webkit-user-select: none;
                -moz-user-select: none;
                -ms-user-select: none;
            }
            .ladi-form .ladi-form-label-container .ladi-form-label-item.image {
                background-size: cover;
                background-repeat: no-repeat;
                background-position: center;
            }
            .ladi-form .ladi-form-label-container .ladi-form-label-item.no-value {
                display: none !important;
            }
            .ladi-form .ladi-form-label-container .ladi-form-label-item.text.disabled {
                opacity: 0.35;
            }
            .ladi-form .ladi-form-label-container .ladi-form-label-item.image.disabled {
                opacity: 0.2;
            }
            .ladi-form .ladi-form-label-container .ladi-form-label-item.color.disabled {
                opacity: 0.15;
            }
            .ladi-form .ladi-form-label-container .ladi-form-label-item.selected:before {
                content: "";
                width: 0;
                height: 0;
                bottom: -1px;
                right: -1px;
                position: absolute;
                border-width: 0 0 15px 15px;
                border-color: transparent;
                border-style: solid;
            }
            .ladi-form .ladi-form-label-container .ladi-form-label-item.selected:after {
                content: "";
                background-image: url("data:image/svg+xml;utf8,%3Csvg xmlns='http://www.w3.org/2000/svg' enable-background='new 0 0 12 12' viewBox='0 0 12 12' x='0' fill='%23fff' y='0'%3E%3Cg%3E%3Cpath d='m5.2 10.9c-.2 0-.5-.1-.7-.2l-4.2-3.7c-.4-.4-.5-1-.1-1.4s1-.5 1.4-.1l3.4 3 5.1-7c .3-.4 1-.5 1.4-.2s.5 1 .2 1.4l-5.7 7.9c-.2.2-.4.4-.7.4 0-.1 0-.1-.1-.1z'%3E%3C/path%3E%3C/g%3E%3C/svg%3E");
                background-repeat: no-repeat;
                background-position: bottom right;
                width: 7px;
                height: 7px;
                bottom: 0;
                right: 0;
                position: absolute;
            }
            .ladi-form .ladi-form-item {
                width: 100%;
                height: 100%;
                position: absolute;
            }
            .ladi-form .ladi-form-item-background {
                position: absolute;
                width: 100%;
                height: 100%;
                top: 0;
                left: 0;
                pointer-events: none;
            }
            .ladi-form .ladi-form-item.ladi-form-checkbox {
                height: auto;
            }
            .ladi-form .ladi-form-item .ladi-form-control {
                background-color: transparent;
                min-width: 100%;
                min-height: 100%;
                max-width: 100%;
                max-height: 100%;
                width: 100%;
                height: 100%;
                padding: 0 5px;
                color: inherit;
                font-size: inherit;
                border: none;
            }
            .ladi-form .ladi-form-item.ladi-form-checkbox {
                padding: 10px 5px;
            }
            .ladi-form .ladi-form-item.ladi-form-checkbox.ladi-form-checkbox-vertical .ladi-form-checkbox-item {
                margin-top: 0 !important;
                margin-left: 0 !important;
                margin-right: 0 !important;
                display: table;
                border: none;
            }
            .ladi-form .ladi-form-item.ladi-form-checkbox.ladi-form-checkbox-horizontal .ladi-form-checkbox-item {
                margin-top: 0 !important;
                margin-left: 0 !important;
                margin-right: 10px !important;
                display: inline-block;
                border: none;
                position: relative;
            }
            .ladi-form .ladi-form-item.ladi-form-checkbox .ladi-form-checkbox-item input {
                vertical-align: middle;
                width: 13px;
                height: 13px;
                display: table-cell;
                margin-right: 5px;
            }
            .ladi-form .ladi-form-item.ladi-form-checkbox .ladi-form-checkbox-item span {
                display: table-cell;
                cursor: default;
                vertical-align: middle;
                word-break: break-word;
            }
            .ladi-form .ladi-form-item.ladi-form-checkbox.ladi-form-checkbox-horizontal .ladi-form-checkbox-item input {
                position: absolute;
                top: 4px;
            }
            .ladi-form .ladi-form-item.ladi-form-checkbox.ladi-form-checkbox-horizontal .ladi-form-checkbox-item span {
                padding-left: 18px;
            }
            .ladi-form .ladi-form-item textarea.ladi-form-control {
                resize: none;
                padding: 5px;
            }
            .ladi-form .ladi-button {
                cursor: pointer;
            }
            .ladi-form .ladi-button .ladi-headline {
                cursor: pointer;
                user-select: none;
            }
            .ladi-combobox {
                position: absolute;
                width: 100%;
                height: 100%;
            }
            .ladi-combobox .ladi-combobox-item-container {
                position: absolute;
                width: 100%;
                height: 100%;
                text-transform: inherit;
                text-decoration: inherit;
                text-align: inherit;
                letter-spacing: inherit;
                color: inherit;
                background-size: inherit;
                background-attachment: inherit;
                background-origin: inherit;
            }
            .ladi-combobox .ladi-combobox-item-container .ladi-combobox-item-background {
                position: absolute;
                width: 100%;
                height: 100%;
                top: 0;
                left: 0;
                pointer-events: none;
                background-size: inherit;
                background-attachment: inherit;
                background-origin: inherit;
            }
            .ladi-combobox .ladi-combobox-item-container .ladi-combobox-item {
                width: 100%;
                height: 100%;
                position: absolute;
                text-transform: inherit;
                text-decoration: inherit;
                text-align: inherit;
                letter-spacing: inherit;
                color: inherit;
            }
            .ladi-combobox .ladi-combobox-item-container .ladi-combobox-item .ladi-combobox-control option {
                color: initial;
            }
            .ladi-combobox .ladi-combobox-item-container .ladi-combobox-item .ladi-combobox-control {
                background-color: transparent;
                min-width: 100%;
                min-height: 100%;
                max-width: 100%;
                max-height: 100%;
                width: 100%;
                height: 100%;
                padding: 0 5px;
                font-size: inherit;
                border: none;
                text-transform: inherit;
                text-align: inherit;
                letter-spacing: inherit;
                color: inherit;
                background-attachment: inherit;
                background-origin: inherit;
                -webkit-appearance: none;
                -moz-appearance: none;
                appearance: none;
                background-size: 9px 6px !important;
                background-position: right 0.5rem center;
                background-repeat: no-repeat;
            }
            .ladi-combobox .ladi-combobox-item-container .ladi-combobox-item .ladi-combobox-control:not([data-selected=""]) {
                text-decoration: inherit;
            }
            .ladi-cart {
                position: absolute;
                width: 100%;
                font-size: 12px;
            }
            .ladi-cart .ladi-cart-row {
                position: relative;
                display: inline-table;
                width: 100%;
            }
            .ladi-cart .ladi-cart-row:after {
                content: "";
                position: absolute;
                left: 0;
                bottom: 0;
                height: 1px;
                width: 100%;
                background: #dcdcdc;
            }
            .ladi-cart .ladi-cart-no-product {
                text-align: center;
                font-size: 16px;
                vertical-align: middle;
            }
            .ladi-cart .ladi-cart-image {
                width: 16%;
                vertical-align: middle;
                position: relative;
                text-align: center;
            }
            .ladi-cart .ladi-cart-image img {
                max-width: 100%;
            }
            .ladi-cart .ladi-cart-title {
                vertical-align: middle;
                padding: 0 5px;
                word-break: break-all;
            }
            .ladi-cart .ladi-cart-title .ladi-cart-title-name {
                display: block;
                margin-bottom: 5px;
                word-break: break-word;
            }
            .ladi-cart .ladi-cart-title .ladi-cart-title-variant {
                font-weight: 700;
                display: block;
                word-break: break-word;
            }
            .ladi-cart .ladi-cart-image .ladi-cart-image-quantity {
                position: absolute;
                top: -3px;
                right: -5px;
                background: rgba(150, 149, 149, 0.9);
                width: 20px;
                height: 20px;
                border-radius: 50%;
                text-align: center;
                color: #fff;
                line-height: 20px;
            }
            .ladi-cart .ladi-cart-quantity {
                width: 70px;
                vertical-align: middle;
                text-align: center;
            }
            .ladi-cart .ladi-cart-quantity-content {
                display: -webkit-inline-flex;
                display: inline-flex;
            }
            .ladi-cart .ladi-cart-quantity input {
                width: 24px;
                text-align: center;
                height: 22px;
                pointer-events: none;
                -moz-appearance: textfield;
                border-left: none;
                border-right: none;
                border-top: 1px solid #dcdcdc;
                border-bottom: 1px solid #dcdcdc;
                border-radius: 0;
            }
            .ladi-cart .ladi-cart-quantity input::-webkit-inner-spin-button,
            .ladi-cart .ladi-cart-quantity input::-webkit-outer-spin-button {
                -webkit-appearance: none;
                margin: 0;
            }
            .ladi-cart .ladi-cart-quantity .button {
                border: 1px solid #dcdcdc;
                cursor: pointer;
                text-align: center;
                width: 21px;
                height: 22px;
                position: relative;
                user-select: none;
                -webkit-user-select: none;
                -moz-user-select: none;
                -ms-user-select: none;
            }
            .ladi-cart .ladi-cart-quantity .button:active {
                transform: translateY(2px);
                transition: transform 0.2s linear;
            }
            .ladi-cart .ladi-cart-quantity .button span {
                font-size: 18px;
                position: relative;
                left: 0.5px;
            }
            .ladi-cart .ladi-cart-quantity .button:first-child span {
                top: -1.2px;
            }
            .ladi-cart .ladi-cart-price {
                width: 100px;
                vertical-align: middle;
                text-align: right;
                padding: 0 10px 0 5px;
            }
            .ladi-cart .ladi-cart-row.has-promotion .ladi-cart-price span {
                text-decoration: line-through;
                display: block;
                margin-bottom: 3px;
            }
            .ladi-cart .ladi-cart-row.has-promotion .ladi-cart-price span.price-compare {
                text-decoration: none;
                color: #e85d04;
                font-weight: 700;
                margin-bottom: 0;
            }
            .ladi-cart .ladi-cart-row.has-promotion .ladi-cart-title span.promotion-name {
                margin-top: 5px;
                display: block;
                word-break: break-word;
            }
            .ladi-cart .ladi-cart-action {
                width: 28px;
                vertical-align: middle;
                text-align: center;
            }
            .ladi-cart .ladi-cart-action .button {
                border: 1px solid #dcdcdc;
                display: table;
                cursor: pointer;
                text-align: center;
                width: 25px;
                height: 22px;
                user-select: none;
                -webkit-user-select: none;
                -moz-user-select: none;
                -ms-user-select: none;
            }
            .ladi-cart .ladi-cart-action .button:active {
                transform: translateY(2px);
                transition: transform 0.2s linear;
            }
            .ladi-cart .ladi-cart-action .button span {
                font-size: 13px;
                position: relative;
                top: 0.5px;
                display: table-cell;
                vertical-align: middle;
            }
            .ladi-video {
                position: absolute;
                width: 100%;
                height: 100%;
                cursor: pointer;
                overflow: hidden;
            }
            .ladi-video .ladi-video-background {
                position: absolute;
                width: 100%;
                height: 100%;
                top: 0;
                left: 0;
                pointer-events: none;
            }
            .ladi-group {
                position: absolute;
                width: 100%;
                height: 100%;
            }
            .ladi-button-group {
                position: absolute;
                width: 100%;
                height: 100%;
            }
            .ladi-button-group > .ladi-element {
                transition: inherit;
            }
            .ladi-button-group > .ladi-element > .ladi-button {
                transition: inherit;
            }
            .ladi-shape {
                position: absolute;
                width: 100%;
                height: 100%;
                pointer-events: none;
            }
            .ladi-html-code {
                position: absolute;
                width: 100%;
                height: 100%;
            }
            .ladi-image {
                position: absolute;
                width: 100%;
                height: 100%;
                overflow: hidden;
                pointer-events: none;
            }
            .ladi-image .ladi-image-background {
                background-repeat: no-repeat;
                background-position: left top;
                background-size: cover;
                background-attachment: scroll;
                background-origin: content-box;
                position: absolute;
                margin: 0 auto;
                width: 100%;
                height: 100%;
                pointer-events: none;
            }
            .ladi-headline {
                width: 100%;
                display: inline-block;
                background-size: cover;
                background-position: center center;
            }
            .ladi-headline a {
                text-decoration: underline;
            }
            .ladi-paragraph {
                width: 100%;
                display: inline-block;
            }
            .ladi-paragraph a {
                text-decoration: underline;
            }
            .ladi-list-paragraph {
                width: 100%;
                display: inline-block;
            }
            .ladi-list-paragraph a {
                text-decoration: underline;
            }
            .ladi-list-paragraph ul li {
                position: relative;
                counter-increment: linum;
            }
            .ladi-list-paragraph ul li:before {
                position: absolute;
                background-repeat: no-repeat;
                background-size: 100% 100%;
                left: 0;
            }
            .ladi-list-paragraph ul li:last-child {
                padding-bottom: 0 !important;
            }
            .ladi-line {
                position: relative;
            }
            .ladi-line .ladi-line-container {
                border-bottom: 0 !important;
                border-right: 0 !important;
                width: 100%;
                height: 100%;
            }
            a[data-action] {
                user-select: none;
                -webkit-user-select: none;
                -moz-user-select: none;
                -ms-user-select: none;
                cursor: pointer;
            }
            a:visited {
                color: inherit;
            }
            a:link {
                color: inherit;
            }
            .button-unmute {
                cursor: pointer;
                position: absolute;
                width: 100%;
                height: 100%;
                top: 0;
                left: 0;
                right: 0;
                bottom: 0;
                margin: auto;
            }
            .button-unmute div {
                background-image: url("data:image/svg+xml;utf8, %3Csvg%20xmlns%3D%22http%3A%2F%2Fwww.w3.org%2F2000%2Fsvg%22%20viewBox%3D%220%200%2036%2036%22%20width%3D%22100%25%22%20height%3D%22100%25%22%20fill%3D%22%23fff%22%3E%3Cpath%20d%3D%22m%2021.48%2C17.98%20c%200%2C-1.77%20-1.02%2C-3.29%20-2.5%2C-4.03%20v%202.21%20l%202.45%2C2.45%20c%20.03%2C-0.2%20.05%2C-0.41%20.05%2C-0.63%20z%20m%202.5%2C0%20c%200%2C.94%20-0.2%2C1.82%20-0.54%2C2.64%20l%201.51%2C1.51%20c%20.66%2C-1.24%201.03%2C-2.65%201.03%2C-4.15%200%2C-4.28%20-2.99%2C-7.86%20-7%2C-8.76%20v%202.05%20c%202.89%2C.86%205%2C3.54%205%2C6.71%20z%20M%209.25%2C8.98%20l%20-1.27%2C1.26%204.72%2C4.73%20H%207.98%20v%206%20H%2011.98%20l%205%2C5%20v%20-6.73%20l%204.25%2C4.25%20c%20-0.67%2C.52%20-1.42%2C.93%20-2.25%2C1.18%20v%202.06%20c%201.38%2C-0.31%202.63%2C-0.95%203.69%2C-1.81%20l%202.04%2C2.05%201.27%2C-1.27%20-9%2C-9%20-7.72%2C-7.72%20z%20m%207.72%2C.99%20-2.09%2C2.08%202.09%2C2.09%20V%209.98%20z%22%3E%3C%2Fpath%3E%3C%2Fsvg%3E");
                width: 60px;
                height: 60px;
                position: absolute;
                top: 0;
                left: 0;
                bottom: 0;
                right: 0;
                margin: auto;
                background-color: rgba(0, 0, 0, 0.5);
                border-radius: 100%;
                background-size: 90%;
                background-repeat: no-repeat;
                background-position: center center;
            }
            [data-opacity="0"] {
                opacity: 0;
            }
            [data-hidden="true"] {
                display: none;
            }
            [data-action="true"] {
                cursor: pointer;
            }
            .ladi-hidden {
                display: none;
            }
            .backdrop-popup {
                display: none;
                position: fixed;
                top: 0;
                left: 0;
                right: 0;
                bottom: 0;
                z-index: 90000060;
            }
            .backdrop-dropbox {
                display: none;
                position: fixed;
                top: 0;
                left: 0;
                right: 0;
                bottom: 0;
                z-index: 90000040;
            }
            .lightbox-screen {
                display: none;
                position: fixed;
                width: 100%;
                height: 100%;
                top: 0;
                left: 0;
                bottom: 0;
                right: 0;
                margin: auto;
                z-index: 9000000080;
                background: rgba(0, 0, 0, 0.5);
            }
            .lightbox-screen .lightbox-close {
                position: absolute;
                z-index: 9000000090;
                cursor: pointer;
            }
            .lightbox-screen .lightbox-hidden {
                display: none;
            }
            .ladi-animation-hidden {
                visibility: hidden !important;
            }
            .ladi-lazyload {
                background-image: none !important;
            }
            .ladi-list-paragraph ul li.ladi-lazyload:before {
                background-image: none !important;
            }
            .ladi-cart-number {
                position: absolute;
                top: -2px;
                right: -7px;
                background: #f36e36;
                text-align: center;
                width: 18px;
                height: 18px;
                line-height: 18px;
                font-size: 12px;
                font-weight: 700;
                color: #fff;
                border-radius: 100%;
            }
            .ladi-form-quantity {
                display: -webkit-inline-flex;
                display: inline-flex;
                border-color: inherit;
            }
            .ladi-form > .ladi-element .ladi-form-item-container .ladi-form-item.ladi-form-quantity .ladi-form-control {
                text-align: center;
                pointer-events: none;
                -moz-appearance: textfield;
                width: calc(100% - 45px);
                padding: 0;
                min-width: 24px;
                border-left: none;
                border-right: none;
                border-top: 1px hidden;
                border-bottom: 1px hidden;
                border-color: inherit;
            }
            .ladi-form > .ladi-element .ladi-form-item-container .ladi-form-item.ladi-form-quantity input::-webkit-inner-spin-button,
            .ladi-form > .ladi-element .ladi-form-item-container .ladi-form-item.ladi-form-quantity input::-webkit-outer-spin-button {
                -webkit-appearance: none;
                margin: 0;
            }
            .ladi-form-quantity .button {
                display: table;
                cursor: pointer;
                text-align: center;
                width: 30px;
                height: 100%;
                position: relative;
                user-select: none;
                -webkit-user-select: none;
                -moz-user-select: none;
                -ms-user-select: none;
            }
            .ladi-form-quantity .button span {
                font-size: 18px;
                position: relative;
                left: 0.5px;
                display: table-cell;
                vertical-align: middle;
            }
            .ladi-form-quantity .button:first-child span {
                top: -1.2px;
            }
            .ladi-form-quantity input {
                pointer-events: none;
            }
            .ladi-form [data-variant="true"] select option[disabled] {
                background: #fff;
                color: #b8b8b8 !important;
            }
            .ladi-story-page-progress-bar {
                width: 100%;
                height: 25px;
                position: fixed;
                top: 0;
                left: 0;
            }
            .ladi-story-page-progress-bar-item {
                height: 100%;
                width: 100%;
                display: block;
                float: left;
                margin: 0 5px;
                position: relative;
                cursor: pointer;
            }
            .ladi-story-page-progress-bar-item:before {
                content: "";
                position: absolute;
                background: rgba(255, 255, 255, 0.4);
                border-radius: 10px;
                width: 100%;
                height: 4px;
                margin: auto;
                top: 0;
                bottom: 0;
                left: 0;
                right: 0;
            }
            .ladi-story-page-progress-bar-item.active:before {
                background: #fff;
            }
            .ladi-story-page-progress-bar-item span {
                background: #fff;
                border-radius: 10px;
                height: 4px;
                display: block;
                margin: auto 0;
                top: 0;
                bottom: 0;
                position: absolute;
                transition: width 0.3s linear;
                width: 0%;
            }
            .ladi-carousel .ladi-carousel-arrow,
            .ladi-collection .ladi-collection-arrow,
            .ladi-collection .ladi-collection-button-next,
            .ladi-gallery .ladi-gallery-control .ladi-gallery-control-arrow,
            .ladi-gallery .ladi-gallery-view .ladi-gallery-view-arrow,
            .ladi-section .ladi-section-arrow-down {
                width: 33px;
                height: 33px;
                background-repeat: no-repeat;
                background-position: center center;
                background-image: url("data:image/svg+xml;utf8, %3Csvg%20width%3D%2224%22%20height%3D%2224%22%20viewBox%3D%220%200%2024%2024%22%20xmlns%3D%22http%3A%2F%2Fwww.w3.org%2F2000%2Fsvg%22%20fill%3D%22%23000%22%3E%3Cpath%20fill-rule%3D%22evenodd%22%20clip-rule%3D%22evenodd%22%20d%3D%22M7.00015%200.585938L18.4144%2012.0002L7.00015%2023.4144L5.58594%2022.0002L15.5859%2012.0002L5.58594%202.00015L7.00015%200.585938Z%22%3E%3C%2Fpath%3E%3C%2Fsvg%3E");
            }
            #SECTION_POPUP .popup-close,
            .ladi-section .ladi-section-close,
            .lightbox-screen .lightbox-close {
                width: 16px;
                height: 16px;
                margin: 10px;
                background-repeat: no-repeat;
                background-position: center center;
                background-image: url("data:image/svg+xml;utf8, %3Csvg%20width%3D%2224%22%20height%3D%2224%22%20viewBox%3D%220%200%2024%2024%22%20xmlns%3D%22http%3A%2F%2Fwww.w3.org%2F2000%2Fsvg%22%20fill%3D%22%23000%22%3E%3Cpath%20fill-rule%3D%22evenodd%22%20clip-rule%3D%22evenodd%22%20d%3D%22M23.4144%202.00015L2.00015%2023.4144L0.585938%2022.0002L22.0002%200.585938L23.4144%202.00015Z%22%3E%3C%2Fpath%3E%3Cpath%20fill-rule%3D%22evenodd%22%20clip-rule%3D%22evenodd%22%20d%3D%22M2.00015%200.585938L23.4144%2022.0002L22.0002%2023.4144L0.585938%202.00015L2.00015%200.585938Z%22%3E%3C%2Fpath%3E%3C%2Fsvg%3E");
            }
            #BODY_BACKGROUND {
                position: fixed;
                pointer-events: none;
                top: 0;
                left: 0;
                right: 0;
                margin: 0 auto;
                height: 100vh !important;
            }
            .ladi-html strong {
                font-weight: 700;
            }
            .ladi-html em {
                font-style: italic;
            }
            .ladi-html a {
                text-decoration: underline;
            }
            .ladi-html img {
                max-width: 100%;
            }
            .ladi-html .ladi-headline p,
            .ladi-html .ladi-paragraph p {
                margin: revert;
            }
            @media (min-width: 768px) {
                .ladi-fullwidth {
                    width: 100vw !important;
                    left: calc(-50vw + 50%) !important;
                    box-sizing: border-box !important;
                    transform: none !important;
                }
                .ladi-fullwidth .ladi-gallery-view-item {
                    transition-duration: 1.5s;
                }
            }
            @media (max-width: 767px) {
                .ladi-element.ladi-auto-scroll {
                    overflow-x: auto;
                    overflow-y: hidden;
                    width: 100% !important;
                    left: 0 !important;
                    -webkit-overflow-scrolling: touch;
                }
                .ladi-section.ladi-auto-scroll {
                    overflow-x: auto;
                    overflow-y: hidden;
                    -webkit-overflow-scrolling: touch;
                }
                .ladi-carousel .ladi-carousel-content {
                    transition: left 0.3s ease-in-out;
                }
                .ladi-gallery .ladi-gallery-view > .ladi-gallery-view-item {
                    transition: transform 0.3s ease-in-out;
                }
                .ladi-html img {
                    height: auto !important;
                }
            }
            .ladi-notify-transition {
                transition: top 0.5s ease-in-out, bottom 0.5s ease-in-out, opacity 0.5s ease-in-out;
            }
            .ladi-notify {
                padding: 5px;
                box-shadow: 0 0 1px rgba(64, 64, 64, 0.3), 0 8px 50px rgba(64, 64, 64, 0.05);
                border-radius: 40px;
                line-height: 1.6;
                width: 100%;
                height: 100%;
                font-size: 13px;
            }
            .ladi-notify .ladi-notify-image img {
                float: left;
                margin-right: 13px;
                border-radius: 50%;
                width: 53px;
                height: 53px;
                pointer-events: none;
            }
            .ladi-notify .ladi-notify-title {
                font-size: 100%;
                height: 17px;
                overflow: hidden;
                font-weight: 700;
                overflow-wrap: break-word;
                text-overflow: ellipsis;
                white-space: nowrap;
                line-height: 1;
            }
            .ladi-notify .ladi-notify-content {
                font-size: 92.308%;
                height: 17px;
                overflow: hidden;
                overflow-wrap: break-word;
                text-overflow: ellipsis;
                white-space: nowrap;
                line-height: 1;
                padding-top: 2px;
            }
            .ladi-notify .ladi-notify-time {
                line-height: 1.6;
                font-size: 84.615%;
                display: inline-block;
                overflow-wrap: break-word;
                text-overflow: ellipsis;
                white-space: nowrap;
                max-width: calc(100% - 155px);
                overflow: hidden;
            }
            .ladi-notify .ladi-notify-copyright {
                font-size: 76.9231%;
                margin-left: 2px;
                position: relative;
                padding: 0 5px;
                cursor: pointer;
                opacity: 0.6;
                display: inline-block;
                top: -4px;
            }
            .ladi-notify .ladi-notify-copyright svg {
                vertical-align: middle;
            }
            .ladi-notify .ladi-notify-copyright svg:not(:root) {
                overflow: hidden;
            }
            .ladi-notify .ladi-notify-copyright div {
                text-decoration: none;
                color: rgba(64, 64, 64, 1);
                display: inline;
            }
            .ladi-notify .ladi-notify-copyright strong {
                font-weight: 700;
            }
            .builder-container .ladi-notify {
                transition: unset;
            }
            .ladi-spin-lucky {
                width: 100%;
                height: 100%;
                border-radius: 100%;
                box-shadow: 0 0 7px 0 rgba(64, 64, 64, 0.6), 0 8px 50px rgba(64, 64, 64, 0.3);
                background-repeat: no-repeat;
                background-size: cover;
            }
            .ladi-spin-lucky .ladi-spin-lucky-start {
                position: absolute;
                top: 0;
                left: 0;
                right: 0;
                bottom: 0;
                margin: auto;
                width: 20%;
                height: 20%;
                cursor: pointer;
                background-size: contain;
                background-position: center center;
                background-repeat: no-repeat;
                transition: transform 0.3s ease-in-out;
                -webkit-transition: transform 0.3s ease-in-out;
            }
            .ladi-spin-lucky .ladi-spin-lucky-start:hover {
                transform: scale(1.1);
            }
            .ladi-spin-lucky .ladi-spin-lucky-screen {
                width: 100%;
                height: 100%;
                border-radius: 100%;
                transition: transform 7s cubic-bezier(0.25, 0.1, 0, 1);
                -webkit-transition: transform 7s cubic-bezier(0.25, 0.1, 0, 1);
                text-decoration-line: inherit;
                -webkit-text-decoration-line: inherit;
                text-transform: inherit;
            }
            .ladi-spin-lucky .ladi-spin-lucky-screen:before {
                background-size: cover;
                background-position: center center;
                background-repeat: no-repeat;
                content: "";
                position: absolute;
                width: 100%;
                height: 100%;
                top: 0;
                left: 0;
                pointer-events: none;
            }
            .ladi-spin-lucky .ladi-spin-lucky-label {
                position: absolute;
                top: 50%;
                left: 50%;
                overflow: hidden;
                width: 42%;
                padding-left: 12%;
                transform-origin: 0 0;
                -webkit-transform-origin: 0 0;
                text-decoration-line: inherit;
                -webkit-text-decoration-line: inherit;
                text-transform: inherit;
                line-height: 1.6;
                text-shadow: rgba(0, 0, 0, 0.5) 1px 0 2px;
            }
        </style>
        <style id="style_page" type="text/css">
            @media (min-width: 768px) {
                .ladi-section .ladi-container {
                    width: 960px;
                }
            }
            @media (max-width: 767px) {
                .ladi-section .ladi-container {
                    width: 420px;
                }
            }
            body {
                font-family: "Roboto-Regular.ttf";
            }
        </style>
        <style id="style_element" type="text/css">
            @media (min-width: 768px) {
                #SECTION_POPUP {
                    height: 0px;
                }
                #SECTION_POPUP .ladi-section-arrow-down {
                    background-image: url("data:image/svg+xml;utf8, %3Csvg%20width%3D%2224%22%20height%3D%2224%22%20viewBox%3D%220%200%2024%2024%22%20xmlns%3D%22http%3A%2F%2Fwww.w3.org%2F2000%2Fsvg%22%20fill%3D%22%23000%22%3E%3Cpath%20fill-rule%3D%22evenodd%22%20clip-rule%3D%22evenodd%22%20d%3D%22M2.00015%205.58594L12.0002%2015.5859L22.0002%205.58594L23.4144%207.00015L12.0002%2018.4144L0.585938%207.00015L2.00015%205.58594Z%22%3E%3C%2Fpath%3E%3C%2Fsvg%3E");
                }
                #SECTION1 {
                    height: 935px;
                }
                #SECTION1 > .ladi-section-background {
                    background-size: cover;
                    background-attachment: scroll;
                    background-origin: content-box;
                    background-image: url("https://w.ladicdn.com/s1440x935/5c7362c6c417ab07e5196b05/llll-20201001040225.jpg");
                    background-position: center top;
                    background-repeat: repeat;
                }
                #SECTION1 .ladi-section-arrow-down {
                    background-image: url("data:image/svg+xml;utf8, %3Csvg%20width%3D%2224%22%20height%3D%2224%22%20viewBox%3D%220%200%2024%2024%22%20xmlns%3D%22http%3A%2F%2Fwww.w3.org%2F2000%2Fsvg%22%20fill%3D%22%23000%22%3E%3Cpath%20fill-rule%3D%22evenodd%22%20clip-rule%3D%22evenodd%22%20d%3D%22M2.00015%205.58594L12.0002%2015.5859L22.0002%205.58594L23.4144%207.00015L12.0002%2018.4144L0.585938%207.00015L2.00015%205.58594Z%22%3E%3C%2Fpath%3E%3C%2Fsvg%3E");
                }
                #IMAGE37 {
                    width: 144px;
                    height: 126px;
                    top: 130px;
                    left: 10px;
                }
                #IMAGE37 > .ladi-image > .ladi-image-background {
                    width: 144px;
                    height: 126px;
                    top: 0px;
                    left: 0px;
                    background-image: url("https://w.ladicdn.com/s450x450/5c7362c6c417ab07e5196b05/rter-20201001034624.png");
                }
                #IMAGE37.ladi-animation > .ladi-image {
                    animation-name: pulse;
                    -webkit-animation-name: pulse;
                    animation-delay: 1s;
                    -webkit-animation-delay: 1s;
                    animation-duration: 3s;
                    -webkit-animation-duration: 3s;
                    animation-iteration-count: infinite;
                    -webkit-animation-iteration-count: infinite;
                }
                #IMAGE38 {
                    width: 120px;
                    height: 69px;
                    top: 230px;
                    left: 860px;
                }
                #IMAGE38 > .ladi-image > .ladi-image-background {
                    width: 120px;
                    height: 69px;
                    top: 0px;
                    left: 0px;
                    background-image: url("https://w.ladicdn.com/s450x400/5c7362c6c417ab07e5196b05/drrert4-20201001034624.png");
                }
                #IMAGE38.ladi-animation > .ladi-image {
                    animation-name: pulse;
                    -webkit-animation-name: pulse;
                    animation-delay: 1s;
                    -webkit-animation-delay: 1s;
                    animation-duration: 3s;
                    -webkit-animation-duration: 3s;
                    animation-iteration-count: infinite;
                    -webkit-animation-iteration-count: infinite;
                }
                #HEADLINE51 {
                    width: 780px;
                    top: 273px;
                    left: 90px;
                }
                #HEADLINE51 > .ladi-headline {
                    color: rgb(0, 0, 0);
                    font-size: 24px;
                    font-weight: bold;
                    text-align: center;
                    line-height: 1.6;
                }
                #HEADLINE52 {
                    width: 780px;
                    top: 333px;
                    left: 90px;
                }
                #HEADLINE52 > .ladi-headline {
                    color: rgb(0, 0, 0);
                    font-size: 18px;
                    text-align: center;
                    line-height: 1.6;
                }
                #HEADLINE53 {
                    width: 780px;
                    top: 483px;
                    left: 90px;
                }
                #HEADLINE53 > .ladi-headline {
                    color: rgb(0, 0, 0);
                    font-size: 18px;
                    text-align: center;
                    line-height: 1.6;
                }
                #SHAPE54 {
                    width: 19.8022px;
                    height: 26.6666px;
                    top: 8px;
                    left: 10.6666px;
                }
                #SHAPE54 svg:last-child {
                    fill: rgba(255, 255, 255, 1);
                }
                #SHAPE55 {
                    width: 93.3333px;
                    height: 115.213px;
                    top: 15.1667px;
                    left: 23.3333px;
                }
                #SHAPE55 svg:last-child {
                    fill: rgba(99, 160, 81, 1);
                }
                #IMAGE40 {
                    width: 140px;
                    height: 140px;
                    top: 0px;
                    left: 0px;
                }
                #IMAGE40 > .ladi-image > .ladi-image-background {
                    width: 140px;
                    height: 140px;
                    top: 0px;
                    left: 0px;
                    background-image: url("https://w.ladicdn.com/s450x450/5c7362c6c417ab07e5196b05/aeae-20201001034624.png");
                }
                #IMAGE40.ladi-animation > .ladi-image {
                    animation-name: fadeIn;
                    -webkit-animation-name: fadeIn;
                    animation-delay: 0s;
                    -webkit-animation-delay: 0s;
                    animation-duration: 1s;
                    -webkit-animation-duration: 1s;
                    animation-iteration-count: infinite;
                    -webkit-animation-iteration-count: infinite;
                }
                #SHAPE56 {
                    width: 40px;
                    height: 40px;
                    top: 0px;
                    left: 0px;
                }
                #SHAPE56 svg:last-child {
                    fill: rgba(99, 160, 81, 1);
                }
                #GROUP57 {
                    width: 40px;
                    height: 40px;
                    top: 409px;
                    left: 357px;
                }
                #HEADLINE58 {
                    width: 370px;
                    top: 411px;
                    left: 407px;
                }
                #HEADLINE58 > .ladi-headline {
                    color: rgb(0, 0, 0);
                    font-size: 22px;
                    font-weight: bold;
                    text-align: left;
                    line-height: 1.6;
                }
                #GROUP60 {
                    width: 140px;
                    height: 140px;
                    top: 90px;
                    left: 410px;
                }
                #IMAGE63 {
                    width: 1333.33px;
                    height: 207.634px;
                    top: 9.88732px;
                    left: 1670px;
                }
                #IMAGE63 > .ladi-image > .ladi-image-background {
                    width: 1333.33px;
                    height: 749.998px;
                    top: -61px;
                    left: 0px;
                    background-image: url("https://w.ladicdn.com/s1650x1050/5da6cb07a973800e7e31908d/bg-02-20201111025257.png");
                }
                #IMAGE64 {
                    width: 1333.33px;
                    height: 220.817px;
                    top: 13.1831px;
                    left: 760px;
                }
                #IMAGE64 > .ladi-image > .ladi-image-background {
                    width: 1333.33px;
                    height: 749.998px;
                    top: -79.9981px;
                    left: 0px;
                    background-image: url("https://w.ladicdn.com/s1650x1050/5da6cb07a973800e7e31908d/bg-02-20201111025257.png");
                }
                #IMAGE65 {
                    width: 1333.33px;
                    height: 214.225px;
                    top: 0px;
                    left: 0px;
                }
                #IMAGE65 > .ladi-image > .ladi-image-background {
                    width: 1333.33px;
                    height: 749.998px;
                    top: -60px;
                    left: 0px;
                    background-image: url("https://w.ladicdn.com/s1650x1050/5da6cb07a973800e7e31908d/bg-02-20201111025257.png");
                }
                #GROUP62 {
                    width: 3003.33px;
                    height: 234px;
                    top: 650px;
                    left: -970px;
                }
                #GROUP62.ladi-animation > .ladi-group {
                    animation-name: shake;
                    -webkit-animation-name: shake;
                    animation-delay: 0s;
                    -webkit-animation-delay: 0s;
                    animation-duration: 35s;
                    -webkit-animation-duration: 35s;
                    animation-iteration-count: infinite;
                    -webkit-animation-iteration-count: infinite;
                }
            }
            @media (max-width: 767px) {
                #SECTION_POPUP {
                    height: 0px;
                }
                #SECTION_POPUP .ladi-section-arrow-down {
                    background-image: url("data:image/svg+xml;utf8, %3Csvg%20width%3D%2224%22%20height%3D%2224%22%20viewBox%3D%220%200%2024%2024%22%20xmlns%3D%22http%3A%2F%2Fwww.w3.org%2F2000%2Fsvg%22%20fill%3D%22%23000%22%3E%3Cpath%20fill-rule%3D%22evenodd%22%20clip-rule%3D%22evenodd%22%20d%3D%22M2.00015%205.58594L12.0002%2015.5859L22.0002%205.58594L23.4144%207.00015L12.0002%2018.4144L0.585938%207.00015L2.00015%205.58594Z%22%3E%3C%2Fpath%3E%3C%2Fsvg%3E");
                }
                #SECTION1 {
                    height: 890.136px;
                }
                #SECTION1 > .ladi-section-background {
                    background-size: cover;
                    background-attachment: scroll;
                    background-origin: content-box;
                    background-image: url("https://w.ladicdn.com/s768x890/5c7362c6c417ab07e5196b05/bb-20201002041858.jpg");
                    background-position: center top;
                    background-repeat: repeat;
                }
                #SECTION1 .ladi-section-arrow-down {
                    background-image: url("data:image/svg+xml;utf8, %3Csvg%20width%3D%2224%22%20height%3D%2224%22%20viewBox%3D%220%200%2024%2024%22%20xmlns%3D%22http%3A%2F%2Fwww.w3.org%2F2000%2Fsvg%22%20fill%3D%22%23000%22%3E%3Cpath%20fill-rule%3D%22evenodd%22%20clip-rule%3D%22evenodd%22%20d%3D%22M2.00015%205.58594L12.0002%2015.5859L22.0002%205.58594L23.4144%207.00015L12.0002%2018.4144L0.585938%207.00015L2.00015%205.58594Z%22%3E%3C%2Fpath%3E%3C%2Fsvg%3E");
                }
                #IMAGE37 {
                    width: 93.0852px;
                    height: 81.4497px;
                    top: 140px;
                    left: 20px;
                }
                #IMAGE37 > .ladi-image > .ladi-image-background {
                    width: 93.0852px;
                    height: 81.4497px;
                    top: 0px;
                    left: 0px;
                    background-image: url("https://w.ladicdn.com/s400x400/5c7362c6c417ab07e5196b05/rter-20201001034624.png");
                }
                #IMAGE37.ladi-animation > .ladi-image {
                    animation-name: pulse;
                    -webkit-animation-name: pulse;
                    animation-delay: 1s;
                    -webkit-animation-delay: 1s;
                    animation-duration: 3s;
                    -webkit-animation-duration: 3s;
                    animation-iteration-count: infinite;
                    -webkit-animation-iteration-count: infinite;
                }
                #IMAGE38 {
                    width: 77.571px;
                    height: 44.6034px;
                    top: 370px;
                    left: 330px;
                }
                #IMAGE38 > .ladi-image > .ladi-image-background {
                    width: 77.571px;
                    height: 44.6034px;
                    top: 0px;
                    left: 0px;
                    background-image: url("https://w.ladicdn.com/s400x350/5c7362c6c417ab07e5196b05/drrert4-20201001034624.png");
                }
                #IMAGE38.ladi-animation > .ladi-image {
                    animation-name: pulse;
                    -webkit-animation-name: pulse;
                    animation-delay: 1s;
                    -webkit-animation-delay: 1s;
                    animation-duration: 3s;
                    -webkit-animation-duration: 3s;
                    animation-iteration-count: infinite;
                    -webkit-animation-iteration-count: infinite;
                }
                #HEADLINE51 {
                    width: 400px;
                    top: 250px;
                    left: 10px;
                }
                #HEADLINE51 > .ladi-headline {
                    color: rgb(0, 0, 0);
                    font-size: 25px;
                    font-weight: bold;
                    text-align: center;
                    line-height: 1.4;
                }
                #HEADLINE52 {
                    width: 400px;
                    top: 340px;
                    left: 10px;
                }
                #HEADLINE52 > .ladi-headline {
                    color: rgb(0, 0, 0);
                    font-size: 18px;
                    text-align: center;
                    line-height: 1.4;
                }
                #HEADLINE53 {
                    width: 400px;
                    top: 530px;
                    left: 10px;
                }
                #HEADLINE53 > .ladi-headline {
                    color: rgb(0, 0, 0);
                    font-size: 18px;
                    text-align: center;
                    line-height: 1.4;
                }
                #SHAPE54 {
                    width: 19.8022px;
                    height: 26.6666px;
                    top: 8px;
                    left: 10.6666px;
                }
                #SHAPE54 svg:last-child {
                    fill: rgba(255, 255, 255, 1);
                }
                #SHAPE55 {
                    width: 93.3333px;
                    height: 115.213px;
                    top: 15.1667px;
                    left: 23.3333px;
                }
                #SHAPE55 svg:last-child {
                    fill: rgba(99, 160, 81, 1);
                }
                #IMAGE40 {
                    width: 140px;
                    height: 140px;
                    top: 0px;
                    left: 0px;
                }
                #IMAGE40 > .ladi-image > .ladi-image-background {
                    width: 140px;
                    height: 140px;
                    top: 0px;
                    left: 0px;
                    background-image: url("https://w.ladicdn.com/s450x450/5c7362c6c417ab07e5196b05/aeae-20201001034624.png");
                }
                #IMAGE40.ladi-animation > .ladi-image {
                    animation-name: fadeIn;
                    -webkit-animation-name: fadeIn;
                    animation-delay: 0s;
                    -webkit-animation-delay: 0s;
                    animation-duration: 1s;
                    -webkit-animation-duration: 1s;
                    animation-iteration-count: infinite;
                    -webkit-animation-iteration-count: infinite;
                }
                #SHAPE56 {
                    width: 40px;
                    height: 40px;
                    top: 0px;
                    left: 0px;
                }
                #SHAPE56 svg:last-child {
                    fill: rgba(99, 160, 81, 1);
                }
                #GROUP57 {
                    width: 40px;
                    height: 40px;
                    top: 451px;
                    left: 104px;
                }
                #HEADLINE58 {
                    width: 240px;
                    top: 457px;
                    left: 158px;
                }
                #HEADLINE58 > .ladi-headline {
                    color: rgb(0, 0, 0);
                    font-size: 18px;
                    font-weight: bold;
                    text-align: left;
                    line-height: 1.6;
                }
                #GROUP60 {
                    width: 140px;
                    height: 140px;
                    top: 70px;
                    left: 140px;
                }
                #IMAGE63 {
                    width: 884.276px;
                    height: 97.6059px;
                    top: 2.45719px;
                    left: 1062.23px;
                }
                #IMAGE63 > .ladi-image > .ladi-image-background {
                    width: 884.276px;
                    height: 497.406px;
                    top: -40.4558px;
                    left: 0px;
                    background-image: url("https://w.ladicdn.com/s1200x800/5da6cb07a973800e7e31908d/bg-02-20201111025257.png");
                }
                #IMAGE64 {
                    width: 884.276px;
                    height: 103.803px;
                    top: 6.19719px;
                    left: 504.038px;
                }
                #IMAGE64 > .ladi-image > .ladi-image-background {
                    width: 884.276px;
                    height: 497.406px;
                    top: -53.0556px;
                    left: 0px;
                    background-image: url("https://w.ladicdn.com/s1200x800/5da6cb07a973800e7e31908d/bg-02-20201111025257.png");
                }
                #IMAGE65 {
                    width: 884.276px;
                    height: 100.704px;
                    top: 0px;
                    left: 0px;
                }
                #IMAGE65 > .ladi-image > .ladi-image-background {
                    width: 884.276px;
                    height: 497.404px;
                    top: -39.7924px;
                    left: 0px;
                    background-image: url("https://w.ladicdn.com/s1200x800/5da6cb07a973800e7e31908d/bg-02-20201111025257.png");
                }
                #GROUP62 {
                    width: 1946.51px;
                    height: 110px;
                    top: 695px;
                    left: -748px;
                }
            }
        </style>
</head>
<body>
<audio class="audio-for-speech" src=""></audio>
        <span class="translate-button-mtz hidden_translate gray"></span>
        <div class="ladi-wraper">
            <div id="SECTION1" class="ladi-section">
                <div class="ladi-section-background"></div>
                <div class="ladi-container">
                    <div id="IMAGE37" class="ladi-element ladi-animation">
                        <div class="ladi-image"><div class="ladi-image-background"></div></div>
                    </div>
                    <div id="IMAGE38" class="ladi-element ladi-animation">
                        <div class="ladi-image"><div class="ladi-image-background"></div></div>
                    </div>
                    <div id="HEADLINE51" class="ladi-element">
                        <h3 class="ladi-headline"><?php echo $_SESSION["name"]; ?>, Đơn hàng của bạn đang được xử lý!</h3>
                    </div>
                    <div id="HEADLINE52" class="ladi-element"><h3 class="ladi-headline">Hãy chú ý đến cuộc gọi đến, chuyên gia tư vấn sức khỏe của chúng tôi sẽ liên hệ ngay với bạn.</h3></div>
                    <div id="HEADLINE53" class="ladi-element"><h3 class="ladi-headline">Vui lòng kiểm tra kỹ thông tin đăng ký của bạn để nhân viên tư vấn có thể liên hệ với bạn.</h3></div>
                    <div id="GROUP60" class="ladi-element">
                        <div class="ladi-group">
                            <div id="IMAGE40" class="ladi-element ladi-animation">
                                <div class="ladi-image"><div class="ladi-image-background"></div></div>
                            </div>
                            <div id="SHAPE55" class="ladi-element">
                                <div class="ladi-shape">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="100%" height="100%" preserveAspectRatio="none" viewBox="0 0 1536 1896.0833" class="" fill="rgba(99, 160, 81, 1.0)">
                                        <path
                                            d="M1171 813l-422 422q-19 19-45 19t-45-19L365 941q-19-19-19-45t19-45l102-102q19-19 45-19t45 19l147 147 275-275q19-19 45-19t45 19l102 102q19 19 19 45t-19 45zm141 83q0-148-73-273t-198-198-273-73-273 73-198 198-73 273 73 273 198 198 273 73 273-73 198-198 73-273zm224 0q0 209-103 385.5T1153.5 1561 768 1664t-385.5-103T103 1281.5 0 896t103-385.5T382.5 231 768 128t385.5 103T1433 510.5 1536 896z"
                                        ></path>
                                    </svg>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div id="GROUP57" class="ladi-element">
                        <div class="ladi-group">
                            <div id="SHAPE56" class="ladi-element">
                                <div class="ladi-shape">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="100%" height="100%" preserveAspectRatio="none" viewBox="0 0 29.77 29.77" class="" fill="rgba(99, 160, 81, 1.0)">
                                        <circle cx="14.89" cy="14.89" r="14.89"></circle>
                                    </svg>
                                </div>
                            </div>
                            <div id="SHAPE54" class="ladi-element">
                                <div class="ladi-shape">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="100%" height="100%" preserveAspectRatio="none" viewBox="0 0 1408 1896.0833" class="" fill="rgba(255, 255, 255, 1)">
                                        <path
                                            d="M1408 1240q0 27-10 70.5t-21 68.5q-21 50-122 106-94 51-186 51-27 0-52.5-3.5T959 1520t-47.5-14.5T856 1485t-49-18q-98-35-175-83-128-79-264.5-215.5T152 904q-48-77-83-175-3-9-18-49t-20.5-55.5T16 577 3.5 519.5 0 467q0-92 51-186 56-101 106-122 25-11 68.5-21t70.5-10q14 0 21 3 18 6 53 76 11 19 30 54t35 63.5 31 53.5q3 4 17.5 25t21.5 35.5 7 28.5q0 20-28.5 50t-62 55-62 53-28.5 46q0 9 5 22.5t8.5 20.5 14 24 11.5 19q76 137 174 235t235 174q2 1 19 11.5t24 14 20.5 8.5 22.5 5q18 0 46-28.5t53-62 55-62 50-28.5q14 0 28.5 7t35.5 21.5 25 17.5q25 15 53.5 31t63.5 35 54 30q70 35 76 53 3 7 3 21z"
                                        ></path>
                                    </svg>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div id="HEADLINE58" class="ladi-element">
                        <h3 class="ladi-headline"><?php echo $_SESSION["phone"]; ?></h3>
                    </div>
                    <div id="GROUP62" class="ladi-element ladi-animation">
                        <div class="ladi-group">
                            <div id="IMAGE63" class="ladi-element">
                                <div class="ladi-image"><div class="ladi-image-background"></div></div>
                            </div>
                            <div id="IMAGE64" class="ladi-element">
                                <div class="ladi-image"><div class="ladi-image-background"></div></div>
                            </div>
                            <div id="IMAGE65" class="ladi-element">
                                <div class="ladi-image"><div class="ladi-image-background"></div></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div id="SECTION_POPUP" class="ladi-section">
                <div class="ladi-section-background ladi-lazyload"></div>
                <div class="ladi-container"></div>
            </div>
        </div>
        <div id="backdrop-popup" class="backdrop-popup"></div>
        <div id="backdrop-dropbox" class="backdrop-dropbox"></div>
        <div id="lightbox-screen" class="lightbox-screen"></div>
</body>
</html>