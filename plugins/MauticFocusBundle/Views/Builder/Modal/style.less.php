<?php

/*
 * @copyright   2016 Mautic, Inc. All rights reserved
 * @author      Mautic, Inc
 *
 * @link        https://mautic.org
 *
 * @license     GNU/GPLv3 http://www.gnu.org/licenses/gpl-3.0.html
 */
?>

.mf-modal {
    position: fixed;
    opacity: 1;
    z-index: 2000;
    margin: auto;
    padding: 3em;
    width: 40em;
    max-width: 40em;
    text-align: center;

    .mf-content {
        .mf-headline {
            font-size: 1.7em;
            font-weight: bold;
            background-color: #fff;
            padding: 0.25em;
            margin: 0.75em 0;
            color: #b00;
            display: inline-block;
            text-transform: uppercase;
        }

        .mf-tagline {
            font-size: 1.25em;
            font-weight: normal;
            margin-bottom: 1em;
        }

        a.mf-link {
            display: block;
            max-width: 70%;
            padding: 10px;
            margin: auto;
            font-size: 1.2em;
        }

        label {
            font-size: 1em;
            display: block ;
            max-width: initial;
            margin-bottom: initial;
            text-align: left;
        }

        .mauticform-page-wrapper .mauticform-row:last-child {
            text-align: left;
        }
    }

    .mf-modal-close {
        position: absolute;
        top: 0;
        right: 1em;

        a {
            font-size: 1.6em;
            color: #ffffff;
            text-decoration: none;
        }

        a:hover {
            opacity: .8;
            text-decoration: none;
        }
    }

    .mauticform-input, .mauticform-row select {
        color: #757575;
        border: 1px solid #ababab;
        width: 100%;
        padding: 0.5em 0.75em;
        margin: 0.5em 0 1em;
        display: inline-block;
        border-radius: 4px;
        box-sizing: border-box;
    }

    .mauticform-button {
        height: 3em;
    }

    .mauticform-pagebreak {
        width: 75%;
        height: 35px;
        margin-bottom: 5px;
    }
}

.mf-responsive.mf-modal, .mf-responsive .mf-modal {
    width: 90%;
    padding: 10px;
}

<?php if (!empty($preview)): ?>
<?php echo $view->render('MauticFocusBundle:Builder\Modal:animations.less.php'); ?>
<?php echo $view->render('MauticFocusBundle:Builder\Modal:overlay.less.php'); ?>

.mf-modal, .mf-modal-overlay {
    position: absolute !important;
}

.mf-modal {
    z-index: 1023;
    left: 50%;
    &.mf-animate {
        .modalAnimate();
    }

    &.mf-modal-top {
        top: 10px;
        .modalTranslate(-50%, 0);

        &.mf-animate {
            .modalAnimateName(mf-modal-slide-down-top);
        }
    }

    &.mf-modal-middle {
        top: 50%;
        .modalTranslate(-50%, -50%);

        &.mf-animate {
            .modalAnimateName(mf-modal-slide-down-middle);
        }
    }

    &.mf-modal-bottom {
        bottom: 10px;
        .modalTranslate(-50%, 0);

        &.mf-animate {
            .modalAnimateName(mf-modal-slide-up-bottom);
        }
    }

}

.mf-modal-overlay {
    z-index: 1022;
}

<?php endif; ?>