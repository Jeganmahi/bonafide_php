<?php
require 'config.php';
include("session.php");
?>
<html dir="ltr" lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- Tell the browser to be responsive to screen width -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <link rel="stylesheet" href="//cdn.datatables.net/1.13.7/css/jquery.dataTables.min.css">
    <!-- Favicon icon -->
    <link rel="icon" type="image/png" sizes="16x16" href="assets/images/favicon.png">
    <link href="assets/libs/jquery-steps/jquery.steps.css" rel="stylesheet">
    <link href="assets/libs/jquery-steps/steps.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="assets/libs/bootstrap-datepicker/dist/css/bootstrap-datepicker.min.css">
    <link href="dist/css/style.min.css" rel="stylesheet">
    <link href="dist/css/style.min.css" rel="stylesheet">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css" rel="stylesheet">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/fontawesome.min.css" integrity="sha512-SgaqKKxJDQ/tAUAAXzvxZz33rmn7leYDYfBP+YoMRSENhf3zJyx3SBASt/OfeQwBHA1nxMis7mM3EV/oYT6Fdw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="//cdn.jsdelivr.net/npm/alertifyjs@1.13.1/build/css/alertify.min.css" />

    <title>SRMS</title>
    <!-- Custom CSS -->
    <link href="assets/libs/flot/css/float-chart.css" rel="stylesheet">
    <!-- Custom CSS -->
    <link href="dist/css/style.min.css" rel="stylesheet">
    <!-- for qr code generation-->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/qrious/4.0.2/qrious.min.js"></script>
    <!--for jquerry-->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@10"></script>


    <!-- pdf generation -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.68/pdfmake.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.68/vfs_fonts.js"></script>

    <!--script-- for pdf >-->
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
<![endif]-->
    <link rel="stylesheet" href="//cdn.jsdelivr.net/npm/alertifyjs@1.13.1/build/css/alertify.min.css" />

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css" rel="stylesheet">






    <style>
        :where(.css-1n7nwfa).ant-layout * {
            box-sizing: border-box;
        }

        :where(.css-1n7nwfa)[class^="ant-card"] {
            font-family: -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, 'Helvetica Neue', Arial, 'Noto Sans', sans-serif, 'Apple Color Emoji', 'Segoe UI Emoji', 'Segoe UI Symbol', 'Noto Color Emoji';
            font-size: 14px;
            box-sizing: border-box;
        }

        :where(.css-1n7nwfa).ant-card {
            box-sizing: border-box;
            margin: 0;
            padding: 0;
            color: rgba(0, 0, 0, 0.88);
            font-size: 14px;
            line-height: 1.5714285714285714;
            list-style: none;
            font-family: -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, 'Helvetica Neue', Arial, 'Noto Sans', sans-serif, 'Apple Color Emoji', 'Segoe UI Emoji', 'Segoe UI Symbol', 'Noto Color Emoji';
            position: relative;
            background: #ffffff;
            border-radius: 8px;
        }

        :where(.css-1n7nwfa).ant-card-bordered {
            border: 1px solid #f0f0f0;
        }

        :where(.css-1n7nwfa)[class^="ant-layout"] [class^="ant-layout"] {
            box-sizing: border-box;
        }

        :where(.css-1n7nwfa).ant-layout .ant-layout-content {
            flex: auto;
            min-height: 0;
        }

        :where(.css-1n7nwfa)[class^="ant-layout"] {
            font-family: -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, 'Helvetica Neue', Arial, 'Noto Sans', sans-serif, 'Apple Color Emoji', 'Segoe UI Emoji', 'Segoe UI Symbol', 'Noto Color Emoji';
            font-size: 14px;
            box-sizing: border-box;
        }

        :where(.css-1n7nwfa).ant-layout {
            display: flex;
            flex: auto;
            flex-direction: column;
            min-height: 0;
            background: #f5f5f5;
        }

        :where(.css-1n7nwfa).ant-layout {
            box-sizing: border-box;
        }

        :where(.css-1n7nwfa)[class^="ant-card"] [class^="ant-card"] {
            box-sizing: border-box;
        }

        :where(.css-1n7nwfa).ant-card .ant-card-body {
            padding: 24px;
            border-radius: 0 0 8px 8px;
        }

        :where(.css-1n7nwfa)[class^="ant-card"] [class^="ant-card"]::before,
        :where(.css-1n7nwfa)[class^="ant-card"] [class*=" ant-card"]::before,
        :where(.css-1n7nwfa)[class^="ant-card"] [class^="ant-card"]::after,
        :where(.css-1n7nwfa)[class^="ant-card"] [class*=" ant-card"]::after {
            box-sizing: border-box;
        }

        :where(.css-1n7nwfa).ant-card .ant-card-body::before {
            display: table;
            content: "";
        }

        :where(.css-1n7nwfa).ant-card .ant-card-body::after {
            display: table;
            clear: both;
            content: "";
        }

        :where(.css-1n7nwfa)[class^="ant-row"] {
            font-family: -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, 'Helvetica Neue', Arial, 'Noto Sans', sans-serif, 'Apple Color Emoji', 'Segoe UI Emoji', 'Segoe UI Symbol', 'Noto Color Emoji';
            font-size: 14px;
            box-sizing: border-box;
        }

        :where(.css-1n7nwfa).ant-row {
            display: flex;
            flex-flow: row wrap;
            min-width: 0;
        }

        :where(.css-1n7nwfa).ant-row-space-between {
            justify-content: space-between;
        }

        :where(.css-1n7nwfa)[class^="ant-row"]:before,
        :where(.css-1n7nwfa)[class*=" ant-row"]::before,
        :where(.css-1n7nwfa)[class^="ant-row"]:after,
        :where(.css-1n7nwfa)[class*=" ant-row"]::after {
            box-sizing: border-box;
        }

        :where(.css-1n7nwfa).ant-row:before,
        :where(.css-1n7nwfa).ant-row:after {
            display: flex;
        }

        :where(.css-1n7nwfa)[class^="ant-col"] {
            font-family: -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, 'Helvetica Neue', Arial, 'Noto Sans', sans-serif, 'Apple Color Emoji', 'Segoe UI Emoji', 'Segoe UI Symbol', 'Noto Color Emoji';
            font-size: 14px;
            box-sizing: border-box;
            display: inline-block;
        }

        :where(.css-1n7nwfa).ant-col {
            position: relative;
            max-width: 100%;
            min-height: 1px;
        }

        :where(.css-1n7nwfa)[class^="ant-col"]:before,
        :where(.css-1n7nwfa)[class*=" ant-col"]::before,
        :where(.css-1n7nwfa)[class^="ant-col"]:after,
        :where(.css-1n7nwfa)[class*=" ant-col"]::after {
            box-sizing: border-box;
        }

        :where(.css-1n7nwfa)[class^="ant-divider"] {
            font-family: -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, 'Helvetica Neue', Arial, 'Noto Sans', sans-serif, 'Apple Color Emoji', 'Segoe UI Emoji', 'Segoe UI Symbol', 'Noto Color Emoji';
            font-size: 14px;
            box-sizing: border-box;
        }

        :where(.css-1n7nwfa).ant-divider {
            box-sizing: border-box;
            margin: 0;
            padding: 0;
            color: rgba(0, 0, 0, 0.88);
            font-size: 14px;
            line-height: 1.5714285714285714;
            list-style: none;
            font-family: -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, 'Helvetica Neue', Arial, 'Noto Sans', sans-serif, 'Apple Color Emoji', 'Segoe UI Emoji', 'Segoe UI Symbol', 'Noto Color Emoji';
            border-block-start: 1px solid rgba(5, 5, 5, 0.06);
        }

        :where(.css-1n7nwfa).ant-divider-horizontal {
            display: flex;
            clear: both;
            width: 100%;
            min-width: 100%;
            margin: 24px 0;
        }

        :where(.css-1n7nwfa)[class^="ant-divider"]:before,
        :where(.css-1n7nwfa)[class*=" ant-divider"]::before,
        :where(.css-1n7nwfa)[class^="ant-divider"]:after,
        :where(.css-1n7nwfa)[class*=" ant-divider"]::after {
            box-sizing: border-box;
        }

        h4 {
            font-weight: 500;
            margin-bottom: .5em;
            margin-top: 0;
        }

        h4 {
            font-weight: 500;
            margin-bottom: .5em;
            margin-top: 0;
        }

        label {
            touch-action: manipulation;
        }

        :where(.css-1n7nwfa)[class^="ant-checkbox"] {
            font-family: -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, 'Helvetica Neue', Arial, 'Noto Sans', sans-serif, 'Apple Color Emoji', 'Segoe UI Emoji', 'Segoe UI Symbol', 'Noto Color Emoji';
            font-size: 14px;
            box-sizing: border-box;
        }

        :where(.css-1n7nwfa).ant-checkbox-wrapper {
            box-sizing: border-box;
            margin: 0;
            padding: 0;
            color: rgba(0, 0, 0, 0.88);
            font-size: 14px;
            line-height: 1.5714285714285714;
            list-style: none;
            font-family: -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, 'Helvetica Neue', Arial, 'Noto Sans', sans-serif, 'Apple Color Emoji', 'Segoe UI Emoji', 'Segoe UI Symbol', 'Noto Color Emoji';
            display: inline-flex;
            align-items: baseline;
            text-align: center !important;
            margin-left: 15%;
            cursor: pointer;
        }

        :where(.css-1n7nwfa)[class^="ant-checkbox"]:before,
        :where(.css-1n7nwfa)[class*=" ant-checkbox"]::before,
        :where(.css-1n7nwfa)[class^="ant-checkbox"]:after,
        :where(.css-1n7nwfa)[class*=" ant-checkbox"]::after {
            box-sizing: border-box;
        }

        :where(.css-1n7nwfa).ant-checkbox-wrapper:after {
            display: inline-block;
            width: 0;
            overflow: hidden;
            content: '\a0';
        }

        button {
            touch-action: manipulation;
        }

        button {
            color: inherit;
            font-family: inherit;
            font-size: inherit;
            line-height: inherit;
            margin: 0;
        }

        button {
            overflow: visible;
        }

        button {
            text-transform: none;
        }

        :where(.css-1n7nwfa)[class^="ant-btn"] {
            font-family: -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, 'Helvetica Neue', Arial, 'Noto Sans', sans-serif, 'Apple Color Emoji', 'Segoe UI Emoji', 'Segoe UI Symbol', 'Noto Color Emoji';
            font-size: 14px;
            box-sizing: border-box;
        }

        :where(.css-1n7nwfa).ant-btn {
            outline: none;
            position: relative;
            display: inline-block;
            font-weight: 400;
            white-space: nowrap;
            text-align: center;
            margin-left: 49%;
            background-image: none;
            background-color: transparent;
            border: 1px solid transparent;
            cursor: pointer;
            transition: all 0.2s cubic-bezier(0.645, 0.045, 0.355, 1);
            user-select: none;
            touch-action: manipulation;
            line-height: 1.5714285714285714;
            color: rgba(0, 0, 0, 0.88);
        }

        :where(.css-1n7nwfa).ant-btn {
            font-size: 14px;
            height: 32px;
            padding: 4px 15px;
            border-radius: 6px;
        }

        :where(.css-1n7nwfa).ant-btn-primary {
            color: #fff;
            background-color: #1677ff;
            box-shadow: 0 2px 0 rgba(5, 145, 255, 0.1);
        }

        button,
        [type="button"] {
            -webkit-appearance: button;
        }

        :where(.css-1n7nwfa).ant-btn-primary:disabled {
            cursor: not-allowed;
            border-color: #d9d9d9;
            color: rgba(0, 0, 0, 0.25);
            background-color: rgba(0, 0, 0, 0.04);
            box-shadow: none;
        }

        :where(.css-1n7nwfa)[class^="ant-btn"]:before,
        :where(.css-1n7nwfa)[class*=" ant-btn"]::before,
        :where(.css-1n7nwfa)[class^="ant-btn"]:after,
        :where(.css-1n7nwfa)[class*=" ant-btn"]::after {
            box-sizing: border-box;
        }

        span {
            -webkit-user-select: text !important;
            -khtml-user-select: text !important;
            -moz-user-select: text !important;
            -ms-user-select: text !important;
            user-select: text !important;
        }

        h3 {
            font-weight: 500;
            margin-bottom: .5em;
            margin-top: 0;
        }

        :where(.css-1n7nwfa)[class^="ant-select"] {
            font-family: -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, 'Helvetica Neue', Arial, 'Noto Sans', sans-serif, 'Apple Color Emoji', 'Segoe UI Emoji', 'Segoe UI Symbol', 'Noto Color Emoji';
            font-size: 14px;
            box-sizing: border-box;
        }

        :where(.css-1n7nwfa).ant-select {
            box-sizing: border-box;
            margin: 0;
            padding: 0;
            color: rgba(0, 0, 0, 0.88);
            font-size: 14px;
            line-height: 1.5714285714285714;
            list-style: none;
            font-family: -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, 'Helvetica Neue', Arial, 'Noto Sans', sans-serif, 'Apple Color Emoji', 'Segoe UI Emoji', 'Segoe UI Symbol', 'Noto Color Emoji';
            position: relative;
            display: inline-block;
            cursor: pointer;
        }

        :where(.css-1n7nwfa).ant-select-single {
            font-size: 14px;
        }

        :where(.css-1n7nwfa)[class^="ant-select"]:before,
        :where(.css-1n7nwfa)[class*=" ant-select"]::before,
        :where(.css-1n7nwfa)[class^="ant-select"]:after,
        :where(.css-1n7nwfa)[class*=" ant-select"]::after {
            box-sizing: border-box;
        }

        :where(.css-1n7nwfa).ant-checkbox {
            box-sizing: border-box;
            margin: 0;
            padding: 0;
            color: rgba(0, 0, 0, 0.88);
            font-size: 14px;
            line-height: 1;
            list-style: none;
            font-family: -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, 'Helvetica Neue', Arial, 'Noto Sans', sans-serif, 'Apple Color Emoji', 'Segoe UI Emoji', 'Segoe UI Symbol', 'Noto Color Emoji';
            top: 0.2em;
            position: relative;
            white-space: nowrap;
            cursor: pointer;
        }

        :where(.css-1n7nwfa)[class^="ant-checkbox"] [class^="ant-checkbox"] {
            box-sizing: border-box;
        }

        :where(.css-1n7nwfa)[class^="ant-checkbox"] [class^="ant-checkbox"]::before,
        :where(.css-1n7nwfa)[class^="ant-checkbox"] [class*=" ant-checkbox"]::before,
        :where(.css-1n7nwfa)[class^="ant-checkbox"] [class^="ant-checkbox"]::after,
        :where(.css-1n7nwfa)[class^="ant-checkbox"] [class*=" ant-checkbox"]::after {
            box-sizing: border-box;
        }

        :where(.css-1n7nwfa).ant-checkbox-wrapper:hover .ant-checkbox::after {
            visibility: visible;
        }

        :where(.css-1n7nwfa).ant-checkbox+span {
            padding-inline-start: 8px;
            padding-inline-end: 8px;
        }

        :where(.css-1n7nwfa).ant-btn>span {
            display: inline-block;

        }

        :where(.css-1n7nwfa) a {
            color: #1677ff;
            text-decoration: none;
            background-color: transparent;
            outline: none;
            cursor: pointer;
            transition: color 0.3s;
            -webkit-text-decoration-skip: objects;
        }

        a {
            touch-action: manipulation;
        }

        :where(.css-1n7nwfa) a:hover {
            color: #69b1ff;
        }

        :where(.css-1n7nwfa) a:active,
        :where(.css-1n7nwfa) a:hover {
            text-decoration: none;
            outline: 0;
        }

        hr {
            box-sizing: initial;
            height: 0;
            overflow: visible;
        }

        img {
            border-style: none;
            vertical-align: middle;
        }

        :where(.css-1n7nwfa)[class^="ant-select"] [class^="ant-select"] {
            box-sizing: border-box;
        }

        :where(.css-1n7nwfa).ant-select-single .ant-select-selector {
            box-sizing: border-box;
            margin: 0;
            padding: 0;
            color: rgba(0, 0, 0, 0.88);
            font-size: 14px;
            line-height: 1.5714285714285714;
            list-style: none;
            font-family: -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, 'Helvetica Neue', Arial, 'Noto Sans', sans-serif, 'Apple Color Emoji', 'Segoe UI Emoji', 'Segoe UI Symbol', 'Noto Color Emoji';
            display: flex;
            border-radius: 6px;
        }

        :where(.css-1n7nwfa).ant-select:not(.ant-select-customize-input) .ant-select-selector {
            position: relative;
            background-color: #ffffff;
            border: 1px solid #d9d9d9;
            transition: all 0.2s cubic-bezier(0.645, 0.045, 0.355, 1);
        }

        :where(.css-1n7nwfa).ant-select-single:not(.ant-select-customize-input) .ant-select-selector {
            width: 100%;
            height: 32px;
            padding: 0 11px;
            margin-top: 6px;
        }

        :where(.css-1n7nwfa)[class^="ant-select"] [class^="ant-select"]::before,
        :where(.css-1n7nwfa)[class^="ant-select"] [class*=" ant-select"]::before,
        :where(.css-1n7nwfa)[class^="ant-select"] [class^="ant-select"]::after,
        :where(.css-1n7nwfa)[class^="ant-select"] [class*=" ant-select"]::after {
            box-sizing: border-box;
        }

        :where(.css-1n7nwfa).ant-select-single .ant-select-selector::after,
        :where(.css-1n7nwfa).ant-select-single .ant-select-selector .ant-select-selection-item::after,
        :where(.css-1n7nwfa).ant-select-single .ant-select-selector .ant-select-selection-placeholder::after {
            display: inline-block;
            width: 0;
            visibility: hidden;
            content: "\a0";
        }

        :where(.css-1n7nwfa).ant-select-single:not(.ant-select-customize-input) .ant-select-selector::after {
            line-height: 30px;
        }

        :where(.css-1n7nwfa).ant-select:not(.ant-select-disabled):not(.ant-select-customize-input):not(.ant-pagination-size-changer):hover .ant-select-selector {
            border-color: #4096ff;
            border-inline-end-width: undefinedpx !important;
        }

        :where(.css-1n7nwfa).ant-select .ant-select-arrow {
            display: flex;
            align-items: center;
            color: rgba(0, 0, 0, 0.25);
            font-style: normal;
            line-height: 1;
            text-align: center;
            text-transform: none;
            vertical-align: -0.125em;
            text-rendering: optimizeLegibility;
            -webkit-font-smoothing: antialiased;
            -moz-osx-font-smoothing: grayscale;
            position: absolute;
            top: 50%;
            inset-inline-start: auto;
            inset-inline-end: 11px;
            height: 12px;
            margin-top: -6px;
            font-size: 12px;
            pointer-events: none;
        }


        :where(.css-1n7nwfa).ant-checkbox .ant-checkbox-input {
            position: absolute;
            inset: 0;
            z-index: 1;
            width: 100%;
            height: 100%;
            cursor: pointer;
            opacity: 0;
        }

        :where(.css-1n7nwfa).ant-checkbox .ant-checkbox-inner {
            box-sizing: border-box;
            position: relative;
            top: 0;
            inset-inline-start: 0;
            display: block;
            width: 16px;
            height: 16px;
            direction: ltr;
            background-color: #ffffff;
            border: 1px solid #d9d9d9;
            border-radius: 4px;
            border-collapse: separate;
            transition: all 0.3s;
        }

        :where(.css-1n7nwfa).ant-checkbox .ant-checkbox-inner::after {
            box-sizing: border-box;
            position: absolute;
            top: 50%;
            inset-inline-start: 21.5%;
            display: table;
            width: 5.7142857142857135px;
            height: 9.142857142857142px;
            border: 2px solid #fff;
            border-top: 0;
            border-inline-start: 0;
            transform: rotate(45deg) scale(0) translate(-50%, -50%);
            opacity: 0;
            content: "";
            transition: all 0.1s cubic-bezier(0.71, -0.46, 0.88, 0.6), opacity 0.1s;
        }

        :where(.css-1n7nwfa).ant-checkbox-wrapper:not(.ant-checkbox-wrapper-disabled):hover .ant-checkbox-inner,
        :where(.css-1n7nwfa).ant-checkbox:not(.ant-checkbox-disabled):hover .ant-checkbox-inner {
            border-color: #1677ff;

        }

        :where(.css-1n7nwfa).ant-select-single .ant-select-selector .ant-select-selection-search {
            position: absolute;
            top: 0;
            inset-inline-start: 11px;
            inset-inline-end: 11px;
            bottom: 0;
        }

        :where(.css-1n7nwfa).ant-select .ant-select-selection-item {
            flex: 1;
            font-weight: normal;
            overflow: hidden;
            white-space: nowrap;
            text-overflow: ellipsis;
        }

        :where(.css-1n7nwfa).ant-select-single .ant-select-selector .ant-select-selection-item {
            padding: 0;
            line-height: 30px;
            transition: all 0.3s;
        }

        :where(.css-1n7nwfa).ant-select-single .ant-select-selector .ant-select-selection-item {
            position: relative;
            user-select: none;
        }

        :where(.css-1n7nwfa).ant-select-single.ant-select-show-arrow .ant-select-selection-item {
            padding-inline-end: 18px;
        }

        .anticon {
            display: inline-block;
            color: inherit;
            font-style: normal;
            line-height: 0;
            text-align: center;
            text-transform: none;
            vertical-align: -0.125em;
            text-rendering: optimizeLegibility;
            -webkit-font-smoothing: antialiased;
            -moz-osx-font-smoothing: grayscale;
        }

        :where(.css-1n7nwfa).ant-select .ant-select-arrow>* {
            line-height: 1;
        }

        :where(.css-1n7nwfa).ant-select .ant-select-arrow .anticon {
            vertical-align: top;
            transition: transform 0.3s;
        }

        .anticon:before {
            display: none;
        }

        [type="search"] {
            -webkit-appearance: none;
            outline-offset: -2px;
        }

        :where(.css-1n7nwfa).ant-select-single .ant-select-selector .ant-select-selection-search-input {
            width: 100%;
        }

        :where(.css-1n7nwfa).ant-select:not(.ant-select-customize-input) .ant-select-selector input {
            cursor: pointer;
        }

        :where(.css-1n7nwfa).ant-select:not(.ant-select-customize-input) .ant-select-selector .ant-select-selection-search-input {
            margin: 0;
            padding: 0;
            background: transparent;
            border: none;
            outline: none;
            appearance: none;
        }

        :where(.css-1n7nwfa).ant-select-single:not(.ant-select-customize-input) .ant-select-selector .ant-select-selection-search-input {
            height: 30px;
        }

        .anticon>* {
            line-height: 1;
        }

        .anticon svg {
            display: inline-block;
        }

        :where(.css-1n7nwfa).ant-select .ant-select-arrow svg {
            display: inline-block;
        }

        :where(.css-1n7nwfa).ant-select .ant-select-arrow .anticon>svg {
            vertical-align: top;
        }


        /* These were inline style tags. Uses id+class to override almost everything */
        #style-aNVXw.style-aNVXw {
            text-align: left;
            margin-bottom: 40px;
        }

        #style-DUXyg.style-DUXyg {
            text-align: left;
            margin-bottom: 40px;
        }

        #style-wKfrt.style-wKfrt {
            text-align: center;
            margin-bottom: 50px;
        }

        #style-PrYLE.style-PrYLE {
            text-align: justify;
        }

        #style-hDTO4.style-hDTO4 {
            flex: 4 4 auto;
        }

        #style-7icRK.style-7icRK {
            text-align: left;
        }

        #style-FhLRf.style-FhLRf {
            flex: 4 4 auto;
        }

        #style-FZVbo.style-FZVbo {
            height: 140px;
            width: 120px;
            margin-left: 20%
        }

        #style-HCsIX.style-HCsIX {
            text-align: left;
        }

        #style-bOwqx.style-bOwqx {
            width: 60%;
        }

        #rc_select_0.style-rKNTn {
            opacity: 0;
        }

        #style-HUtJW.style-HUtJW {
            user-select: none;
        }

        #style-KQQ4p.style-KQQ4p {
            text-align: center;
        }

        #snipcss_display_selector.style-eNRJL {
            top: 0px;
            left: 0px;
            position: absolute;
            transform: translateX(1116px) translateY(903px) translateZ(0px);
        }

        #snipcss_goup_button.style-tJNkD {
            top: 0px;
            left: 0px;
            position: absolute;
            transform: translateX(138px) translateY(84px) translateZ(0px);
        }

        #snipcss_subselection_button.style-C94KB {
            top: 0px;
            left: 0px;
            position: absolute;
            transform: translateX(1000px) translateY(84px) translateZ(0px);
        }

        #snipcss_subselection_dropdown.style-tYcP2 {
            display: none;
            top: 0px;
            left: 0px;
            position: absolute;
            transform: translateX(1264px) translateY(216px) translateZ(0px);
        }

        #snipcss-kiwi.style-RK9dr {
            left: 1180px;
            top: 90px;
        }

        .center {
            display: block;
            margin-left: auto;
            margin-right: auto;
            width: 50%;
        }

        .d-none {
            display: none;
        }

        .d1-none {
            display: none;
        }

        th {
            text-align: center;
        }
    </style>
</head>

<body>
    <!-- ============================================================== -->
    <!-- Preloader - style you can find in spinners.css -->
    <!-- ============================================================== -->
    <div class="preloader">
        <div class="lds-ripple">
            <div class="lds-pos"></div>
            <div class="lds-pos"></div>
        </div>
    </div>
    <!-- ============================================================== -->
    <!-- Main wrapper - style you can find in pages.scss -->
    <!-- ============================================================== -->
    <div id="main-wrapper">
        <!-- ============================================================== -->
        <!-- Topbar header - style you can find in pages.scss -->
        <!-- ============================================================== -->
        <header class="topbar" data-navbarbg="skin5">
            <nav class="navbar top-navbar navbar-expand-md navbar-dark">
                <div class="navbar-header" data-logobg="skin5">
                    <!-- This is for the sidebar toggle which is visible on mobile only -->
                    <a class="nav-toggler waves-effect waves-light d-block d-md-none" href="javascript:void(0)"><i class="ti-menu ti-close"></i></a>
                    <!-- ============================================================== -->
                    <!-- Logo -->
                    <!-- ============================================================== -->
                    <a class="navbar-brand" href="main">
                        <!-- Logo icon -->

                        <!--End Logo icon -->
                        <!-- Logo text -->
                        <span class="logo-text">
                            <!-- dark Logo text -->
                            <img src="assets/images/srms.png" alt="homepage" class="light-logo" />

                        </span>
                        <!-- Logo icon -->
                        <!-- <b class="logo-icon"> -->
                        <!--You can put here icon as well // <i class="wi wi-sunset"></i> //-->
                        <!-- Dark Logo icon -->
                        <!-- <img src="assets/images/logo-text.png" alt="homepage" class="light-logo" /> -->

                        <!-- </b> -->
                        <!--End Logo icon -->
                    </a>
                    <!-- ============================================================== -->
                    <!-- End Logo -->
                    <!-- ============================================================== -->
                    <!-- ============================================================== -->
                    <!-- Toggle which is visible on mobile only -->
                    <!-- ============================================================== -->
                    <a class="topbartoggler d-block d-md-none waves-effect waves-light" href="javascript:void(0)" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"><i class="ti-more"></i></a>
                </div>
                <!-- ============================================================== -->
                <!-- End Logo -->
                <!-- ============================================================== -->
                <div class="navbar-collapse collapse" id="navbarSupportedContent" data-navbarbg="skin5">
                    <!-- ============================================================== -->
                    <!-- toggle and nav items -->
                    <!-- ============================================================== -->
                    <ul class="navbar-nav float-left mr-auto">
                        <li class="nav-item d-none d-md-block"><a class="nav-link sidebartoggler waves-effect waves-light" href="javascript:void(0)" data-sidebartype="mini-sidebar"><i class="mdi mdi-menu font-24"></i></a></li>
                        <!-- ============================================================== -->
                        <!-- create new -->
                        <!-- ============================================================== -->

                        <!-- ============================================================== -->
                        <!-- Search -->
                        <!-- ============================================================== -->

                    </ul>
                    <!-- ============================================================== -->
                    <!-- Right side toggle and nav items -->
                    <!-- ============================================================== -->
                    <ul class="navbar-nav float-right">
                        <!-- ============================================================== -->
                        <!-- Comment -->
                        <!-- ============================================================== -->

                        <!-- ============================================================== -->
                        <!-- End Comment -->
                        <!-- ============================================================== -->
                        <!-- ============================================================== -->
                        <!-- Messages -->
                        <!-- ============================================================== -->

                        <!-- ============================================================== -->
                        <!-- End Messages -->
                        <!-- ============================================================== -->

                        <!-- ============================================================== -->
                        <!-- User profile and search -->
                        <!-- ============================================================== -->
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle text-muted waves-effect waves-dark pro-pic" href="" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><img src="assets/images/users/1.jpg" alt="user" class="rounded-circle" width="31"></a>
                            <div class="dropdown-menu dropdown-menu-right user-dd animated">

                                <a class="dropdown-item" href="Logout.php"><i class="ti-power-off m-r-5 m-l-5"></i> Logout</a>
                                <div class="dropdown-divider"></div>

                            </div>
                        </li>
                        <!-- ============================================================== -->
                        <!-- User profile and search -->
                        <!-- ============================================================== -->
                    </ul>
                </div>
            </nav>
        </header>
        <!-- ============================================================== -->
        <!-- End Topbar header -->
        <!-- ============================================================== -->
        <!-- ============================================================== -->
        <!-- Left Sidebar - style you can find in sidebar.scss  -->
        <!-- ============================================================== -->
        <?php include("Aside.php"); ?>
        <!-- ============================================================== -->
        <!-- End Left Sidebar - style you can find in sidebar.scss  -->
        <!-- ============================================================== -->
        <!-- ============================================================== -->
        <!-- Page wrapper  -->
        <!-- ============================================================== -->
        <div class="page-wrapper">
            <!-- ============================================================== -->
            <!-- Bread crumb and right sidebar toggle -->
            <!-- ============================================================== -->
            <div class="page-breadcrumb">
                <div class="row">
                    <div class="col-12 d-flex no-block align-items-center">
                        <h4 class="page-title"></h4>
                        <div class="ml-auto text-right">
                            <nav aria-label="breadcrumb">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="#">Home</a></li>
                                    <li class="breadcrumb-item active" aria-current="page">Bonafide Information</li>
                                </ol>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
            <!-- ============================================================== -->
            <!-- End Bread crumb and right sidebar toggle -->
            <!-- ============================================================== -->
            <!-- ============================================================== -->
            <!-- Container fluid  -->
            <!-- ============================================================== -->
            <div class="container-fluid">
                <!-- ============================================================== -->
                <!-- Start Page Content -->
                <!-- ============================================================== -->


                <div class="card">
                    <div class="card-body wizard-content">
                        <h4 class="card-title">Bonafide Information</h4>
                        <h6 class="card-subtitle"></h6>
                        <div class="card">
                            <!-- Nav tabs -->
                            <ul class="nav nav-tabs mb-3" role="tablist">
                                <!-- <li class="nav-item"> <a class="nav-link active" data-toggle="tab" href="#acad" role="tab"><span class="hidden-sm-up"></span> <span class="hidden-xs-down"><i class="bi bi-book"></i><b> Prizes and Awards</b></span></a> </li> -->
                                <li class="nav-item"> <a class="nav-link" data-toggle="tab" href="#bonafide" role="tab"><span class="hidden-sm-up"></span> <span class="hidden-xs-down"><i class="bi-person"></i><b>Bonafide</b></span></a> </li>


                            </ul>
                            <!-- Tab panes -->
                            <div class="tab-content tabcontent-border">

                                <!-- ta1 -->

                                <div class="tab-pane" id="acad" role="tabpanel">
                                </div>


                                <!-- tab1 end -->
                                <!-- project starting-->
                                <div class="tab-pane active" id="project" role="tabpanel">


                                    <!-- Add porject -->

                                    <div class="modal fade" id="projectadd1" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                        <div class="modal-dialog modal-lg">
                                            <form id="bonafideapply">
                                                <div class="modal-content " style="width:100%;">
                                                    <?php

                                                    $query = "SELECT * FROM mic WHERE id='$s'";
                                                    $query_run = mysqli_query($db, $query);
                                                    $row = mysqli_fetch_assoc($query_run);
                                                    $quer = "SELECT MAX(uid) AS max_value FROM bonafide2;";
                                                    $quer_run = mysqli_query($db, $quer);
                                                    $ro = mysqli_fetch_assoc($quer_run);
                                                    $currentYear = date('Y');
                                                    $refno = $currentYear . "/" . "MKCE" . "/" . strtoupper($row['regno']) . "/" . $ro['max_value'] + 1;
                                                    $photo = $row['photo'];


                                                    ?>
                                                    <div class="modal-header">
                                                        <h5 class="modal-title" id="exampleModalLabel"> </h5>
                                                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                                    </div>
                                                    <div class="container p-4">
                                                        <div class="ant-card-body snipcss0-0-0-1 snipcss-CGE7r">
                                                            <div class="ant-row ant-row-space-between css-1n7nwfa snipcss0-1-1-2 snipcss0-0-0-1">
                                                                <div class="ant-col css-1n7nwfa snipcss0-2-2-3 snipcss0-1-1-2">
                                                                    <h6 class="snipcss0-3-3-4 snipcss0-2-2-3 style-aNVXw" id="style-aNVXw">
                                                                        Ref No: <?= $refno ?>
                                                                    </h6>
                                                                </div>
                                                                <div class="ant-col css-1n7nwfa snipcss0-2-2-5 snipcss0-1-1-4">
                                                                    <h6 class="snipcss0-3-5-6 snipcss0-2-4-5 style-DUXyg" id="style-DUXyg">
                                                                        Date : <span class="snipcss0-3-5-6 snipcss0-2-4-5 style-DUXyg"><?= date("26/02/2024"); ?></span>
                                                                    </h6>
                                                                </div>
                                                                <div class="ant-divider css-1n7nwfa ant-divider-horizontal snipcss0-2-2-7 snipcss0-1-1-6" role="separator">
                                                                </div>
                                                            </div>
                                                            <header class="snipcss0-1-1-8">
                                                                <h4 class="snipcss0-2-8-9 style-wKfrt" id="style-wKfrt">
                                                                    BONAFIDE CERTIFICATE
                                                                </h4>
                                                            </header>
                                                            <h5 class="snipcss0-2-10-11 style-PrYLE" id="style-PrYLE" style="line-height: 1.5;">
                                                                <?php
                                                                if (strtoupper($row['gender']) == "MALE") {
                                                                    $mark = "S";
                                                                } else {
                                                                    $mark = "D";
                                                                }

                                                                ?>
                                                                This is to certify that <?= strtoupper($row['fname']) ?> <?= strtoupper($row['lname']) ?> (Reg No : <?= $row['regno'] ?>, Aadhar No : <?= $row['aadhar'] ?>) <?= $mark ?>/O Mr. <?= strtoupper($row['fathername']) ?> is a bonafide student of our College, Studying in <div style="display: inline-block;" id="selectedsyear">__</div> Year <?= strtoupper($row['degree']) ?> <?= strtoupper($row['dept']) ?> during academic year <div style="display: inline-block;" id="selectedayear">20__ - 20__</div>.
                                                            </h5>
                                                            <br class="snipcss0-2-10-12">
                                                            <div class="ant-row ant-row-space-between css-1n7nwfa snipcss0-2-10-13">
                                                                <div class="ant-col css-1n7nwfa snipcss0-3-13-14 style-hDTO4" id="style-hDTO4">
                                                                    <h5 class="snipcss0-4-14-15 style-7icRK" id="style-7icRK" style="line-height: 1.5;">
                                                                        Date of Birth : <?= date('d/m/Y', strtotime($row['dob'])) ?>
                                                                        <br class="snipcss0-5-15-16">
                                                                        Boarding : <?= strtoupper($row['boarding']) ?>
                                                                        <br class="snipcss0-5-15-19">
                                                                    </h5>
                                                                </div>
                                                                <div class="ant-col css-1n7nwfa snipcss0-3-13-20 style-FhLRf" id="style-FhLRf">
                                                                    <img src="<?= $photo ?>" class="snipcss0-4-20-21 style-FZVbo" id="style-FZVbo">
                                                                </div>
                                                            </div>
                                                            <div style="display: inline-block;">
                                                                <select class="form-select" aria-label="Default select example" id="syear" required>
                                                                    <option value="" selected disabled>Select Year</option>
                                                                    <option value="I">I</option>
                                                                    <option value="II">II</option>
                                                                    <option value="III">III</option>
                                                                    <option value="IV">IV</option>
                                                                </select>
                                                            </div>
                                                            <div style="display: inline-block;">
                                                                <select class="form-select" aria-label="Default select example" id="ayear" required>
                                                                    <option value="" selected disabled>Select Academic Year</option>
                                                                    <option value="2023-2024">2023-2024</option>
                                                                    <option value="2024-2025">2024-2025</option>
                                                                    <option value="2025-2026">2025-2026</option>
                                                                    <option value="2026-2027">2026-2027</option>
                                                                    <option value="2027-2028">2027-2028</option>
                                                                    <option value="2028-2029">2028-2029</option>
                                                                    <option value="2029-2030">2029-2030</option>
                                                                    <option value="2030-2031">2030-2031</option>
                                                                    <option value="2031-2032">2031-2032</option>
                                                                    <option value="2032-2033">2032-2033</option>
                                                                    <option value="2033-2034">2033-2034</option>
                                                                    <option value="2034-2035">2034-2035</option>

                                                                </select>
                                                            </div>
                                                            <script>
                                                                // Get references to the select element and the div
                                                                var selectsyear = document.getElementById("syear");
                                                                var div1 = document.getElementById("selectedsyear");
                                                                var selectayear = document.getElementById("ayear");
                                                                var div2 = document.getElementById("selectedayear");

                                                                // Add an event listener to the select element
                                                                selectsyear.addEventListener("change", function() {
                                                                    // Get the selected value
                                                                    var selectedValue = selectsyear.value;

                                                                    // Update the div's content with the selected value
                                                                    div1.textContent = selectedValue;
                                                                });
                                                                selectayear.addEventListener("change", function() {
                                                                    // Get the selected value
                                                                    var selectedValue = selectayear.value;

                                                                    // Update the div's content with the selected value
                                                                    div2.textContent = selectedValue;
                                                                });
                                                            </script>
                                                            <br class="snipcss0-5-15-16">
                                                            <br class="snipcss0-5-15-16">

                                                            <h5 class="snipcss0-2-10-24 style-HCsIX" id="style-HCsIX">
                                                                This Certificate Applying for the Purpose of </h5>
                                                            <div class="ant-select css-1n7nwfa ant-select-single ant-select-show-arrow snipcss0-3-24-25 style-bOwqx" id="style-bOwqx">
                                                                <select class="form-select" aria-label="Default select example" id="certificateType" required>
                                                                    <option value="" selected disabled>Select The Type</option>
                                                                    <option value="LABOUR WELFARE">LABOUR WELFARE</option>
                                                                    <option value="CHIEF MINISTER SCHOLARSHIP">CHIEF MINISTER SCHOLARSHIP</option>
                                                                    <option value="PM SCHOLARSHIP">PM SCHOLARSHIP</option>
                                                                    <option value="ULAVAR PATHUKAPPU THITTAM">ULAVAR PATHUKAPPU THITTAM</option>
                                                                    <option value="FIRST GRADUATE APPLY PURPOSE">FIRST GRADUATE APPLY PURPOSE</option>
                                                                    <option value="NON FIRST GRADUATE APPLY PURPOSE">NON FIRST GRADUATE APPLY PURPOSE</option>
                                                                    <option value="NEET COUNSELING PURPOSE">NEET COUNSELING PURPOSE</option>
                                                                    <option value="PASSPORT APPLY PURPOSE">PASSPORT APPLY PURPOSE</option>
                                                                    <option value="PASSPORT RENEWAL PURPOSE">PASSPORT RENEWAL PURPOSE</option>
                                                                    <option value="CERTIFICATE CORRECTIONS">CERTIFICATE CORRECTIONS</option>
                                                                    <option value="BANK ACCOUNT OPENING">BANK ACCOUNT OPENING</option>
                                                                    <option value="INTERNSHIP - INDIVIDUAL">INTERNSHIP - INDIVIDUAL</option>
                                                                    <option value="INTERNSHIP - GROUP">INTERNSHIP - GROUP</option>
                                                                    <option value="BANK LOAN">BANK LOAN</option>
                                                                    <option value="GIRL CHILD PROTECTION">GIRL CHILD PROTECTION</option>
                                                                    <option value="SPORTS PARTICIPATION">SPORTS PARTICIPATION</option>
                                                                    <option value="PMSS BC MBC DNC SCHOLARSHIP">PMSS BC MBC DNC SCHOLARSHIP</option>
                                                                    <option value="MINORITIES - NATIONAL SCHOLARSHIP">MINORITIES - NATIONAL SCHOLARSHIP</option>
                                                                    <option value="TAMILNADU UNORGANIZED WORKERS WELFARE BOARD">TAMILNADU UNORGANIZED WORKERS WELFARE BOARD</option>
                                                                </select>
                                                            </div>
                                                            <br class="snipcss0-2-10-33">
                                                            <br class="snipcss0-2-10-34">
                                                            <label class="ant-checkbox-wrapper css-1n7nwfa snipcss0-2-10-35">

                                                            </label>
                                                            <br class="snipcss0-2-10-40">
                                                            <br class="snipcss0-2-10-41">
                                                            <button aria-errormessage="please approve" type="button" class="ant-btn css-1n7nwfa ant-btn-primary snipcss0-2-10-42 style-KQQ4p" disabled id="applyButton">
                                                                <span class="snipcss0-3-42-43">
                                                                    Apply
                                                                </span>
                                                            </button>

                                            </form>

                                            <script>
                                                document.addEventListener('DOMContentLoaded', function() {
                                                    // Get references to elements
                                                    var applyButton = document.getElementById("applyButton");
                                                    var syear = document.getElementById("syear");
                                                    var ayear = document.getElementById("ayear");
                                                    var certificateType = document.getElementById("certificateType");

                                                    // Add event listeners to trigger toggleButton on input
                                                    syear.addEventListener('input', toggleButton);
                                                    ayear.addEventListener('input', toggleButton);
                                                    certificateType.addEventListener('input', toggleButton);

                                                    // Add event listener to the form for submission
                                                    document.getElementById("yourFormId").addEventListener('submit', function(event) {
                                                        if (!syear.value || !ayear.value || !certificateType.value) {
                                                            // Prevent form submission
                                                            event.preventDefault();
                                                            // Show alert about missing information
                                                            alert('Please fill in all the required fields before submitting.');
                                                        }
                                                    });

                                                    // Add event listener to the applyButton
                                                    applyButton.addEventListener('click', function(event) {
                                                        if (!syear.value || !ayear.value || !certificateType.value) {
                                                            // Show alert if any required field is missing
                                                            alert('Please select values for all fields before applying.');
                                                            // Prevent the default button click behavior
                                                            event.preventDefault();
                                                        }
                                                    });

                                                    // Initial state check
                                                    toggleButton();

                                                    // Define the toggleButton function
                                                    function toggleButton() {
                                                        if (syear.value !== "" && ayear.value !== "" && certificateType.value !== "") {
                                                            applyButton.disabled = false;
                                                        } else {
                                                            applyButton.disabled = true;
                                                        }
                                                    }
                                                });
                                            </script>






                                        </div>

                                    </div>
                                </div>
                            </div>
                        </div>
                        <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

                        <script>
                            $(document).on('click', '#applyButton', function(e) {
                                e.preventDefault();
                                var certificateType = $('#certificateType').val();
                                var fname = "<?= strtoupper($row['fname']) ?>";
                                var lname = "<?= strtoupper($row['lname']) ?>";
                                var type = "Bonafide";
                                var refno = '<?= $refno ?>';
                                var regno = '<?= strtoupper($row['regno']) ?>';
                                var id = "jp";
                                var applydate = new Date().toLocaleDateString();
                                var aadhar = "<?= strtoupper($row['aadhar']) ?>";
                                var gender = "<?= strtoupper($row['gender']) ?>";
                                var fathername = "<?= strtoupper($row['fathername']) ?>";
                                var syear = $('#syear').val();
                                var ayear = $('#ayear').val();
                                var degree = "<?= strtoupper($row['degree']) ?>";
                                var dept = "<?= strtoupper($row['dept']) ?>";
                                var dob = '<?= $row['dob'] ?>';
                                var boarding = "<?= strtoupper($row['boarding']) ?>";
                                var photo = "<?= strtoupper($row['photo']) ?>";
                                console.log("asasdasda.........")
                                $.ajax({
                                    type: "POST",
                                    url: "code.php", // Replace with the actual PHP script URL
                                    data: {
                                        apply: true,
                                        certificateType: certificateType,
                                        fname: fname,
                                        lname: lname,
                                        type: type,
                                        refno: refno,
                                        regno: regno,
                                        id: id,
                                        applydate: applydate,
                                        aadhar: aadhar,
                                        gender: gender,
                                        fathername: fathername,
                                        syear: syear,
                                        ayear: ayear,
                                        degree: degree,
                                        dept: dept,
                                        dob: dob,
                                        boarding: boarding,
                                        photo: photo
                                    },
                                    success: function(response) {
                                        console.log(response)
                                        var jsonResponse = JSON.parse(response);

                                        if (jsonResponse.status === 200) {
                                            $('#errorMessage').addClass('d-none');
                                            $('#projectadd1').modal('hide');
                                            $('#syear').prop('selectedIndex', 0);
                                            $('#ayear').prop('selectedIndex', 0);
                                            $('#certificateType').prop('selectedIndex', 0);
                                            // Uncheck the checkbox
                                            $('#checkbox').prop('checked', false);

                                            // Reload the modal content (including the form)
                                            alertify.set('notifier', 'position', 'top-right');
                                            alertify.success(jsonResponse.message);

                                            reloadTable()
                                            // Destroy the existing table
                                            // $('#myTable0').load(location.href + " #myTable0");

                                            // Fetch new data from the endpoint

                                        } else if (jsonResponse.status === 422) {
                                            $('#errorMessage').removeClass('d-none');
                                            $('#errorMessage').text(jsonResponse.message);
                                        } else {
                                            alert('Error updating certificate type.');
                                        }
                                    }
                                });
                            });
                        </script>

                        <div class="row">
                            <div class="col-md-12">
                                <div class="card">
                                    <div class="card-header">
                                        <h4>

                                            <button type="button" style="float: right;" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#projectadd1">
                                                Apply
                                            </button>
                                        </h4>
                                    </div>
                                    <div class="card-body">
                                        <div class="table-responsive">
                                            <table id="myTable0" class="table table-bordered table-striped"></table>

                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- Button trigger modal -->
                            

                        <!-- Modal -->
                        <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                            <div class="modal-dialog">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
                                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                    </div>
                                    <div class="modal-body">
                                        ...
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                        <button type="button" class="btn btn-primary">Save changes</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- Add this modal section to your HTML -->
                        <div class="modal fade" id="rejectedInfoModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                            <div class="modal-dialog">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="exampleModalLabel">Rejected Reason</h5>
                                        <button type="button" class="btn-close" data-dismiss="modal" aria-label="Close"></button>
                                    </div>
                                    <div class="modal-body">
                                       
                                        <div id="rejectedReason"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <script>
    function printReasonToConsole(reason) { 
        console.log('Rejection Reason:', reason);
        $("#rejectedReason").text(reason);
    }
</script>
<script>
document.addEventListener('DOMContentLoaded', function() {
    reloadTable();
});
</script>


                       


                        <script>
                            $(document).on('click', '.deletebonafide', function(e) {
                                e.preventDefault();
                                console.log("hi");

                                Swal.fire({
                                    title: "Are you sure?",
                                    text: "You won't be able to revert this!",
                                    icon: "warning",
                                    showCancelButton: true,
                                    confirmButtonColor: "#3085d6",
                                    cancelButtonColor: "#d33",
                                    confirmButtonText: "Yes, delete it!"
                                }).then((result) => {
                                    if (result.isConfirmed) {
                                        var student_id = $(this).val();
                                        var row = $(this).closest('tr');
                                        var table = $('#myTable0').DataTable();
                                        var rowData = table.row(row).data();
                                        var rowId = rowData.id;

                                        $.ajax({
                                            type: "POST",
                                            url: "code.php", // Change this to the actual script for deleting data
                                            data: {
                                                'delete_bonafide': true,
                                                'student_id': student_id
                                            },
                                            success: function(response) {
                                                var res = JSON.parse(response);
                                                if (res.status == 200) {
                                                    table.row(row).remove();
                                                    updateSNoColumn(table);


                                                    // Draw the DataTable to reflect the changes
                                                    table.draw(false);

                                                    // Reload the table after successful deletion
                                                    Swal.fire({
                                                        title: "Deleted!",
                                                        text: "Your file has been deleted.",
                                                        icon: "success"
                                                    });
                                                } else {
                                                    Swal.fire({
                                                        title: "Error!",
                                                        text: res.message,
                                                        icon: "error"
                                                    });
                                                }
                                            },
                                            error: function(xhr, status, error) {
                                                console.error(xhr.responseText);
                                                Swal.fire({
                                                    title: "Error!",
                                                    text: "Error deleting record. Please try again.",
                                                    icon: "error"
                                                });
                                            }
                                        });
                                    }
                                });
                            });

                            function updateSNoColumn(table) {
                                table.rows().every(function(rowIdx, tableLoop, rowLoop) {
                                    var data = this.data();
                                    data[0] = rowLoop + 1; // Assuming S.No is in the first column
                                    this.data(data);
                                });
                            }
                        </script>
                       <script>
                            $(document).on('click', '.deletepcBtn', function(e) {
                                e.preventDefault();
                                var refno = $(this).val();
                                var whereValue = refno;

                                $.ajax({
                                    url: 'fetch.php',
                                    method: 'GET',
                                    data: {
                                        condition: whereValue
                                    }, // Pass the condition as a parameter
                                    dataType: 'json',
                                    success: function(data) {

                                        $("#refno1").text(data[0].refno);
                                        var inputDate = data[0].applydate;
                                        var dateParts = inputDate.split("-");
                                        console.log(data);
                                        var inputDate1 = data[0].dob;
                                        var dateParts1 = inputDate1.split("-");

                                        // Rearrange the parts in "dd/mm/yyyy" format
                                        var formattedDate1 = dateParts1[2] + "/" + dateParts1[1] + "/" + dateParts1[0];

                                        $("#dob").text(formattedDate1);
                                        // Rearrange the parts in "dd/mm/yyyy" format
                                        var formattedDate = dateParts[2] + "/" + dateParts[1] + "/" + dateParts[0];
                                        $("#applydate").text(formattedDate);
                                        $("#fname").text(data[0].fname);
                                        $("#lname").text(data[0].lname);
                                        $("#regno").text(data[0].regno);
                                        $("#aadhar").text(data[0].aadhar);
                                        if (data[0].gender == "MALE") {
                                            $("#mark").text("S");
                                        } else {
                                            $("#mark").text("D");
                                        }
                                        if (data[0].status == 0) {
                                            // Status is pending
                                            $("#status").text("Your bonafide request is Pending");

                                        } else if (data[0].status == 1) {
                                            // Status is accepted
                                            $("#status").text("Bonafide certificate");
                                        } else if (data[0].status == 10) {
                                            // Status is rejected
                                            $("#status").text("Your bonafide request is rejected");
                                            $("#reason").text("Rejected Reason: " + data[0].rejection_reason);
                                        }
                                        $("#syear1").text(data[0].syear);
                                        $("#ayear1").text(data[0].ayear);
                                        $("#degree").text(data[0].degree);
                                        $("#dept").text(data[0].dept);
                                        $("#boarding").text(data[0].boarding);
                                        $("#purpose").text(data[0].purpose);
                                        document.getElementById('profileImage').src = data[0].photo;

                                        $("#purpose").text(data[0].purpose);
                                    },
                                    error: function(xhr, status, error) {
                                        console.error('Error fetching data:', error);
                                    }
                                });

                            });
                        </script>

                        <div class="modal fade" id="print" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                            <div class="modal-dialog modal-lg">
                                <div class="modal-content" >
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="exampleModalLabel">bonafide details</h5>
                                        <button type="button" class="btn-close" data-dismiss="modal" aria-label="Close"></button>
                                    </div>
                                    <div class="container p-4">
                                        <div class="ant-card-body snipcss0-0-0-1 snipcss-CGE7r">
                                            <div class="ant-row ant-row-space-between css-1n7nwfa snipcss0-1-1-2 snipcss0-0-0-1">
                                                <div class="ant-col css-1n7nwfa snipcss0-2-2-3 snipcss0-1-1-2">
                                                    <h6 class="snipcss0-3-3-4 snipcss0-2-2-3 style-aNVXw" id="style-aNVXw">
                                                        Ref No: <span id="refno1"></span>
                                                    </h6>
                                                </div>
                                                <div class="ant-col css-1n7nwfa snipcss0-2-2-5 snipcss0-1-1-4">
                                                    <h6 class="snipcss0-3-5-6 snipcss0-2-4-5 style-DUXyg" id="style-DUXyg">
                                                        Date : <span class="snipcss0-3-5-6 snipcss0-2-4-5 style-DUXyg"><span id="applydate"></span></span>
                                                    </h6>
                                                </div>
                                                <div class="ant-divider css-1n7nwfa ant-divider-horizontal snipcss0-2-2-7 snipcss0-1-1-6" role="separator">
                                                </div>
                                            </div>
                                            <div class="text-center">
                                                <h4>
                                                    <span id="status"></span><br>
                                                </h4>
                                            </div>



                                            <h5 class="snipcss0-2-10-11 style-PrYLE" id="style-PrYLE" style="line-height: 1.5;">

                                                This is to certify that <span id="fname"></span> <span id="lname"></span> (Reg No : <span id="regno"></span>, Aadhar No : <span id="aadhar"></span>) <span id="mark"></span>/O Mr. <span id="fathername"></span> is a bonafide student of our College, Studying in <span id="syear1"></span> Year <span id="degree"></span> <span id="dept"></span> during academic year <span id="ayear1"></span>.
                                            </h5>
                                            <br class="snipcss0-2-10-12">
                                            <div class="ant-row ant-row-space-between css-1n7nwfa snipcss0-2-10-13">
                                                <div class="ant-col css-1n7nwfa snipcss0-3-13-14 style-hDTO4" id="style-hDTO4">
                                                    <h5 class="snipcss0-4-14-15 style-7icRK" id="style-7icRK" style="line-height: 1.5;">
                                                        Date of Birth : <span id="dob"></span>
                                                        <br class="snipcss0-5-15-16">
                                                        Boarding : <span id="boarding"></span>
                                                        <br class="snipcss0-5-15-19">
                                                    </h5>
                                                </div>
                                                <div class="ant-col css-1n7nwfa snipcss0-3-13-20 style-FhLRf" id="style-FhLRf">
                                                    <img src="<?= $photo ?>" class="snipcss0-4-20-21 style-FZVbo" id="style-FZVbo">
                                                </div>
                                            </div>

                                            <br class="snipcss0-5-15-16">


                                            <h5 class="snipcss0-2-10-24 style-HCsIX" id="style-HCsIX">
                                                This Certificate Applying for the Purpose of <span id="purpose"></span>.</h5>

                                            <br class="snipcss0-2-10-33">
                                        </div>

                                    </div>
                                </div>
                            </div>

                        </div>


                    </div>
                </div>


            </div>

        </div>
    </div>




    <!-- ============================================================== -->
    <!-- End PAge Content -->
    <!-- ============================================================== -->
    <!-- ============================================================== -->
    <!-- Right sidebar -->
    <!-- ============================================================== -->
    <!-- .right-sidebar -->
    <!-- ============================================================== -->
    <!-- End Right sidebar -->
    <!-- ============================================================== -->
    </div>
    </div>
    <?php include "./footer.html" ?>
    </div>
    <!-- ============================================================== -->
    <!-- End Container fluid  -->
    <!-- ============================================================== -->
    <!-- ============================================================== -->
    <!-- footer -->
    <!-- ============================================================== -->





    <!-- ============================================================== -->
    <!-- End footer -->
    <!-- ============================================================== -->

    <!-- ============================================================== -->
    <!-- End Page wrapper  -->
    <!-- ============================================================== -->

    <!-- ============================================================== -->
    <!-- End Wrapper -->
    <!-- ============================================================== -->
    <!-- ============================================================== -->
    <!-- All Jquery -->
    <!-- ============================================================== -->
    <script src="assets/libs/jquery/dist/jquery.min.js"></script>
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
    <!-- Bootstrap tether Core JavaScript -->
    <script src="assets/libs/popper.js/dist/umd/popper.min.js"></script>
    <script src="assets/libs/bootstrap/dist/js/bootstrap.min.js"></script>
    <!-- slimscrollbar scrollbar JavaScript -->
    <script src="assets/libs/perfect-scrollbar/dist/perfect-scrollbar.jquery.min.js"></script>
    <script src="assets/extra-libs/sparkline/sparkline.js"></script>
    <!--Wave Effects -->
    <script src="dist/js/waves.js"></script>
    <!--Menu sidebar -->
    <script src="dist/js/sidebarmenu.js"></script>
    <!--Custom JavaScript -->
    <script src="dist/js/custom.min.js"></script>
    <!-- this page js -->
    <script src="assets/libs/jquery-steps/build/jquery.steps.min.js"></script>
    <script src="assets/libs/jquery-validation/dist/jquery.validate.min.js"></script>
    <script src="assets/libs/bootstrap-datepicker/dist/js/bootstrap-datepicker.min.js"></script>


    

    <script src="//cdn.jsdelivr.net/npm/alertifyjs@1.13.1/build/alertify.min.js"></script>
    <script src="assets/extra-libs/multicheck/jquery.multicheck.js"></script>
    <script src="//cdn.datatables.net/1.13.7/js/jquery.dataTables.min.js"></script>
    <script>
        function generatePdfFun() {
                                        const urlParams = new URLSearchParams(window.location.search);
                                        const uid = event.target.value;
                                        console.log(uid);
                                        // Define the image URLs
                                        const imageUrlTopLeft = 'images/download.png'; // Relative path to your first image
                                        const imageUrlTopRight = 'images/profileiron-man-wallpaper-6.jpg'; // Relative path to your second image

                                        // Load the first image as a data URL
                                        const imageTopLeft = new Image();
                                        imageTopLeft.src = imageUrlTopLeft;
                                        imageTopLeft.onload = function() {
                                            const canvasTopLeft = document.createElement('canvas');
                                            canvasTopLeft.width = imageTopLeft.width;
                                            canvasTopLeft.height = imageTopLeft.height;
                                            const ctxTopLeft = canvasTopLeft.getContext('2d');
                                            ctxTopLeft.drawImage(imageTopLeft, 0, 0, imageTopLeft.width, imageTopLeft.height);

                                            // Convert the first image to a data URL
                                            const dataUrlTopLeft = canvasTopLeft.toDataURL('image/png');
                                            const fonts = {
                                                TimesNewRoman: {
                                                    normal: 'C:/xampp/htdocs/serv - Copy/times.ttf',
                                                    bold: 'C:/xampp/htdocs/serv - Copy/times.ttf', // Specify the path to the bold version of the font if available
                                                    italics: 'C:/xampp/htdocs/serv - Copy/times.ttf', // Specify the path to the italic version of the font if available
                                                    bolditalics: 'C:/xampp/htdocs/serv - Copy/times.ttf' // Specify the path to the bold italic version of the font if available
                                                }
                                            };

                                            // Load the second image as a data URL
                                            const imageTopRight = new Image();
                                            imageTopRight.src = imageUrlTopRight;
                                            imageTopRight.onload = function() {
                                                const canvasTopRight = document.createElement('canvas');
                                                canvasTopRight.width = imageTopRight.width;
                                                canvasTopRight.height = imageTopRight.height;
                                                const ctxTopRight = canvasTopRight.getContext('2d');
                                                ctxTopRight.drawImage(imageTopRight, 0, 0, imageTopRight.width, imageTopRight.height);

                                                // Convert the second image to a data URL
                                                const dataUrlTopRight = canvasTopRight.toDataURL('image/png');

                                                // Fetch the details from PHP using the UID
                                                fetch(`code.php?uid=${uid}`)
                                                    .then(response => {
                                                        if (!response.ok) {
                                                            throw new Error('Network response was not ok');
                                                        }
                                                        return response.json();
                                                    })
                                                    .then(data => {

                                                        const name = data.name;
                                                        const type = data.type;
                                                        const rollno = data.regno;
                                                        const reason = data.reason;
                                                        const degree = data.degree;
                                                        const aadhar = data.aadhar;
                                                        const dept = data.dept;
                                                        const date = data.date;
                                                        const ref = data.refno;
                                                        const fathername = data.fathername;
                                                        const dob = data.dob;
                                                        const boarding = data.boarding;
                                                        const purpose = data.purpose;
                                                        const photoUrl = data.photo; // Add the photo URL

                                                        // Load the photo image
                                                        const imagePhoto = new Image();
                                                        imagePhoto.src = photoUrl;
                                                        imagePhoto.onload = function() {
                                                            const canvasPhoto = document.createElement('canvas');
                                                            canvasPhoto.width = imagePhoto.width;
                                                            canvasPhoto.height = imagePhoto.height;
                                                            const ctxPhoto = canvasPhoto.getContext('2d');
                                                            ctxPhoto.drawImage(imagePhoto, 0, 0, imagePhoto.width, imagePhoto.height);

                                                            // Convert the photo image to a data URL
                                                            const dataUrlPhoto = canvasPhoto.toDataURL('image/png');

                                                            // Create a QR code with the details
                                                            const qrCode = new QRious({
                                                                value: `This is to certify that ${name} (Reg No : ${rollno}, Aadhar No : ${aadhar}) S/O Mr. ${fathername} is a bonafide student of our College, Studying in ${degree} during academic year III`,
                                                                size: 100
                                                            });

                                                            // Convert the QR code to a data URL
                                                            const dataUrlQRCode = qrCode.toDataURL();


                                                            // Generate PDF using pdfmake with images, fetched details, the QR code, and the photo
                                                            const pdfDefinition = {
                                                                pageSize: 'A4',
                                                                pageMargins: [40, 40, 40, 40],
                                                                background: function(currentPage, pageSize) {
                                                                    return {
                                                                        canvas: [{
                                                                            type: 'rect',
                                                                            x: 20, // Adjust the position to create margins
                                                                            y: 20, // Adjust the position to create margins
                                                                            w: pageSize.width - 40, // Adjust the width to create margins
                                                                            h: pageSize.height - 40, // Adjust the height to create margins
                                                                            lineWidth: 2, // Border width
                                                                            lineColor: '#8a4537' // Border color
                                                                        }]
                                                                    };
                                                                }, // Set margins to 0 to place the images at the corners
                                                                content: [{
                                                                        image: dataUrlTopLeft, // Specify the first image data URL
                                                                        width: 100, // Adjust the width as needed
                                                                        absolutePosition: {
                                                                            x: 40,
                                                                            y: 40
                                                                        } // Adjust the position (top left corner)
                                                                    },
                                                                    {
                                                                        image: dataUrlTopRight, // Specify the second image data URL
                                                                        width: 100, // Adjust the width as needed
                                                                        absolutePosition: {
                                                                            x: 450,
                                                                            y: 40
                                                                        } // Adjust the position (top right corner)
                                                                    },
                                                                    {
                                                                        text: '', // Add empty space for alignment
                                                                        fontSize: 12,
                                                                        margin: [0, 50], // Adjust vertical margin as needed
                                                                    },
                                                                    {
                                                                        text: `Dr. B.S.Murugan, M.Tech, Ph.D Principal`,
                                                                        fontSize: 10,
                                                                        bold: true,
                                                                        absolutePosition: {
                                                                            x: 30,
                                                                            y: 90
                                                                        }
                                                                    },
                                                                    {
                                                                        text: `Reference No: ` + ref,
                                                                        fontSize: 10,
                                                                        bold: true,
                                                                        absolutePosition: {
                                                                            x: 30,
                                                                            y: 120
                                                                        }
                                                                    },
                                                                    {
                                                                        text: `DATE: ` + date,
                                                                        fontSize: 10,
                                                                        bold: true,
                                                                        absolutePosition: {
                                                                            x: 450,
                                                                            y: 120
                                                                        }
                                                                    },
                                                                    {
                                                                        text: 'BONAFIDE CERTIFICATE',
                                                                        fontSize: 15,
                                                                        bold: true,
                                                                        color: '#1983e0',
                                                                        absolutePosition: {
                                                                            x: 200,
                                                                            y: 170
                                                                        }
                                                                    },

                                                                    {
                                                                        stack: [{
                                                                            text: `This is to certify that ${name} (Reg No : ${rollno}, Aadhar No : ${aadhar}) S/O Mr. ${fathername} is a bonafide student of our College, Studying in ${degree} during academic year III during the academic year 2023-2024`,
                                                                            fontSize: 15,

                                                                        }],
                                                                        absolutePosition: {
                                                                            x: 30,
                                                                            y: 220
                                                                        },
                                                                        marginRight: 40, // Adjust the left margin (40 units in this example)
                                                                    },
                                                                    {
                                                                        text: `Date of Birth : ` + dob,
                                                                        fontSize: 15,
                                                                        absolutePosition: {
                                                                            x: 30,
                                                                            y: 320
                                                                        }
                                                                    },
                                                                    {
                                                                        text: `Boarding : ` + boarding,
                                                                        fontSize: 15,
                                                                        absolutePosition: {
                                                                            x: 30,
                                                                            y: 340
                                                                        }
                                                                    },
                                                                    {
                                                                        text: `This certificate is issued for the purpose of ` + purpose,
                                                                        fontSize: 15,
                                                                        absolutePosition: {
                                                                            x: 30,
                                                                            y: 470
                                                                        }
                                                                    },
                                                                    {
                                                                        text: `PRINCIPAL`,
                                                                        fontSize: 12,
                                                                        absolutePosition: {
                                                                            x: 450,
                                                                            y: 570
                                                                        }
                                                                    },

                                                                    {
                                                                        image: dataUrlPhoto, // Specify the photo image data URL
                                                                        width: 100, // Adjust the width as needed
                                                                        absolutePosition: {
                                                                            x: 450,
                                                                            y: 320
                                                                        } // Adjust the position
                                                                    }
                                                                ]
                                                            };

                                                            pdfMake.createPdf(pdfDefinition).download('bonafide.pdf');
                                                        };
                                                    })
                                                    .catch(error => {
                                                        console.error('Error fetching data:', error);
                                                    });
                                            };
                                        };
                                    }
    </script>
    <script>
        // let request = new FormData();
        // request.append("reload",true)
        // fetch("endpoint.php",{
        //     method:"POST",
        //     body:request
        // }).then((res)=>(res.json())).then((data)=>{
        //     console.log(data);
        // })
        <?php
        $query = "select uid , fname ,type, purpose , applydate , status,rejection_reason from bonafide2";
        $query_run = mysqli_query($db, $query);
        ?>
        let tableData = <?php echo json_encode($query_run->fetch_all(MYSQLI_ASSOC)) ?>;
        populateDataTable(tableData)

        function populateDataTable(tableData) {
            let table = new DataTable('#myTable0', {
                "order":[[0,'des']],
                data: tableData,
                columns: [{
                        title: 'S.no',
                        data: 'uid',
                        render: function(data, type, row, meta) {
                            // Use meta.row to get the current row index, add 1 to start from 1
                            return meta.row + 1;
                        },
                    },
                    {
                        title: 'Name',
                        data: 'fname'
                    },
                    {
                        title: 'Type',
                        data: 'type'
                    },
                    {
                        title: 'Purpose',
                        data: 'purpose'
                    },
                    {
                        title: 'Applied on',
                        data: 'applydate'
                    },
                    {
                        title: 'status',
                        data: 'status',
                        render: function(data, type, row, meta) {
                            let btnClass;
                            let statusString;
                            console.log(row['status'])
                            if (row['status'] === "0") {
                                btnClass = "btn-warning";
                                statusString = "pending";
                            } else if (row['status'] === "1") {
                                btnClass = "btn-success";
                                statusString = "accepted";
                            } else {
                                btnClass = "btn-danger";
                                statusString = "rejected";
                            }
                            return `<button type="submit" class="acceptbonafide btn  ${btnClass}" value="${row['uid']}" disabled>${statusString}</button>`
                        }
                    },
                    {
                        title: 'Action',
                        data: 'uid',
                        render: function(data, type, row, meta) {
                            let showDltBtn = false;
                            let showDwnBtn = false;
                            let showInfBtn = false;
                            if (row['status'] == "0") {
                                showDltBtn = true
                            } else if (row["status"] == "1") {
                                showDwnBtn = true
                            } else {
                                showInfBtn = true
                            }

                            return `
                                ${showDwnBtn?
                                    `<button type="button" class="btn btn-success bi bi-download generatePdfButton"  onclick="generatePdfFun()"value=${row['uid']}></button>`
                                    :
                                    ''}
                                ${showDltBtn?
                                    ` <button type="submit" value=${row['uid']} class="deletebonafide btn btn-danger bi bi-x"></button>`
                                    :''
                                }
                                ${
                                    showInfBtn?
                                    `<button type="button" class="btn btn-secondary mdi mdi-information-variant rejectedInfoButton" data-toggle="modal" data-target="#rejectedInfoModal" onclick="printReasonToConsole('${row['rejection_reason']}')"></button>`:
                                    ""
                                }
                               <button type="button" name = "submit" class = "btn btn-primary bi bi-eye deletepcBtn" value=${row["uid"]}  data-toggle="modal" data-target="#print" ></button>
                            `
                        }
                    }

                ]
            });
        }

        async function reloadTable() {
            let reqbody = new FormData()
            reqbody.append('reload', true)
            let req = await fetch("endpoint.php", {
                method: "POST",
                body: reqbody
            })
            let data = await req.json()
            $('#myTable0').DataTable().destroy();
            populateDataTable(data)

        }
    </script>
<script>
document.addEventListener('DOMContentLoaded', function() {
    reloadTable();
});
</script>

</body>

</html>