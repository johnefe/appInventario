<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Reporte de artículos</title>
    <style>



        @media print {
        *,
        *::before,
        *::after {
            text-shadow: none !important;
            box-shadow: none !important; }
        a,
        a:visited {
            text-decoration: underline; }
        abbr[title]::after {
            content: " (" attr(title) ")"; }
        pre {
            white-space: pre-wrap !important; }
        pre,
        blockquote {
            border: 1px solid #999;
            page-break-inside: avoid; }
        thead {
            display: table-header-group; }
        tr,
        img {
            page-break-inside: avoid; }
        p,
        h2,
        h3 {
            orphans: 3;
            widows: 3; }
        h2,
        h3 {
            page-break-after: avoid; }
        .navbar {
            display: none; }
        .badge {
            border: 1px solid #000; }
        .table {
            border-collapse: collapse !important; }
            .table td,
            .table th {
            background-color: #fff !important; }
        .table-bordered th,
        .table-bordered td {
            border: 1px solid #ddd !important; } }

        html {
        box-sizing: border-box;
        font-family: sans-serif;
        line-height: 1.15;
        -webkit-text-size-adjust: 100%;
        -ms-text-size-adjust: 100%;
        -ms-overflow-style: scrollbar;
        -webkit-tap-highlight-color: transparent; }

        *,
        *::before,
        *::after {
        box-sizing: inherit; }

        @-ms-viewport {
        width: device-width; }

        article, aside, dialog, figcaption, figure, footer, header, hgroup, main, nav, section {
        display: block; }

        body {
        margin: 0;
        font-family: -apple-system, BlinkMacSystemFont, "Segoe UI", Roboto, "Helvetica Neue", Arial, sans-serif;
        font-size: 0.875rem;
        font-weight: normal;
        line-height: 1.5;
        color: #151b1e;
        background-color: #e4e5e6; }

        [tabindex="-1"]:focus {
        outline: none !important; }

        hr {
        box-sizing: content-box;
        height: 0;
        overflow: visible; }

        h1, h2, h3, h4, h5, h6 {
        margin-top: 0;
        margin-bottom: .5rem; }

        p {
        margin-top: 0;
        margin-bottom: 1rem; }

        abbr[title],
        abbr[data-original-title] {
        text-decoration: underline;
        -webkit-text-decoration: underline dotted;
                text-decoration: underline dotted;
        cursor: help;
        border-bottom: 0; }

        address {
        margin-bottom: 1rem;
        font-style: normal;
        line-height: inherit; }

        ol,
        ul,
        dl {
        margin-top: 0;
        margin-bottom: 1rem; }

        ol ol,
        ul ul,
        ol ul,
        ul ol {
        margin-bottom: 0; }

        dt {
        font-weight: bold; }

        dd {
        margin-bottom: .5rem;
        margin-left: 0; }

        blockquote {
        margin: 0 0 1rem; }

        dfn {
        font-style: italic; }

        b,
        strong {
        font-weight: bolder; }

        small {
        font-size: 80%; }

        sub,
        sup {
        position: relative;
        font-size: 75%;
        line-height: 0;
        vertical-align: baseline; }

        sub {
        bottom: -.25em; }

        sup {
        top: -.5em; }

        a {
        color: #20a8d8;
        text-decoration: none;
        background-color: transparent;
        -webkit-text-decoration-skip: objects; }
        a:hover {
            color: #167495;
            text-decoration: underline; }

        a:not([href]):not([tabindex]) {
        color: inherit;
        text-decoration: none; }
        a:not([href]):not([tabindex]):focus, a:not([href]):not([tabindex]):hover {
            color: inherit;
            text-decoration: none; }
        a:not([href]):not([tabindex]):focus {
            outline: 0; }

        pre,
        code,
        kbd,
        samp {
        font-family: monospace, monospace;
        font-size: 1em; }

        pre {
        margin-top: 0;
        margin-bottom: 1rem;
        overflow: auto; }

        figure {
        margin: 0 0 1rem; }

        img {
        vertical-align: middle;
        border-style: none; }

        svg:not(:root) {
        overflow: hidden; }

        a,
        area,
        button,
        [role="button"],
        input,
        label,
        select,
        summary,
        textarea {
        -ms-touch-action: manipulation;
            touch-action: manipulation; }

        table {
        border-collapse: collapse; }

        caption {
        padding-top: 0.75rem;
        padding-bottom: 0.75rem;
        color: #536c79;
        text-align: left;
        caption-side: bottom; }

        th {
        text-align: left; }

        label {
        display: inline-block;
        margin-bottom: .5rem; }

        button:focus {
        outline: 1px dotted;
        outline: 5px auto -webkit-focus-ring-color; }

        input,
        button,
        select,
        optgroup,
        textarea {
        margin: 0;
        font-family: inherit;
        font-size: inherit;
        line-height: inherit; }

        button,
        input {
        overflow: visible; }

        button,
        select {
        text-transform: none; }

        button,
        html [type="button"],
        [type="reset"],
        [type="submit"] {
        -webkit-appearance: button; }

        button::-moz-focus-inner,
        [type="button"]::-moz-focus-inner,
        [type="reset"]::-moz-focus-inner,
        [type="submit"]::-moz-focus-inner {
        padding: 0;
        border-style: none; }

        input[type="radio"],
        input[type="checkbox"] {
        box-sizing: border-box;
        padding: 0; }

        input[type="date"],
        input[type="time"],
        input[type="datetime-local"],
        input[type="month"] {
        -webkit-appearance: listbox; }

        textarea {
        overflow: auto;
        resize: vertical; }

        fieldset {
        min-width: 0;
        padding: 0;
        margin: 0;
        border: 0; }

        legend {
        display: block;
        width: 100%;
        max-width: 100%;
        padding: 0;
        margin-bottom: .5rem;
        font-size: 1.5rem;
        line-height: inherit;
        color: inherit;
        white-space: normal; }

        progress {
        vertical-align: baseline; }

        [type="number"]::-webkit-inner-spin-button,
        [type="number"]::-webkit-outer-spin-button {
        height: auto; }

        [type="search"] {
        outline-offset: -2px;
        -webkit-appearance: none; }

        [type="search"]::-webkit-search-cancel-button,
        [type="search"]::-webkit-search-decoration {
        -webkit-appearance: none; }

        ::-webkit-file-upload-button {
        font: inherit;
        -webkit-appearance: button; }

        output {
        display: inline-block; }

        summary {
        display: list-item; }

        template {
        display: none; }

        [hidden] {
        display: none !important; }

        h1, h2, h3, h4, h5, h6,
        .h1, .h2, .h3, .h4, .h5, .h6 {
        margin-bottom: 0.5rem;
        font-family: inherit;
        font-weight: 500;
        line-height: 1.1;
        color: inherit; }

        h1, .h1 {
        font-size: 2.5rem; }

        h2, .h2 {
        font-size: 2rem; }

        h3, .h3 {
        font-size: 1.75rem; }

        h4, .h4 {
        font-size: 1.5rem; }

        h5, .h5 {
        font-size: 1.25rem; }

        h6, .h6 {
        font-size: 1rem; }

        .lead {
        font-size: 1.25rem;
        font-weight: 300; }

        .display-1 {
        font-size: 6rem;
        font-weight: 300;
        line-height: 1.1; }

        .display-2 {
        font-size: 5.5rem;
        font-weight: 300;
        line-height: 1.1; }

        .display-3 {
        font-size: 4.5rem;
        font-weight: 300;
        line-height: 1.1; }

        .display-4 {
        font-size: 3.5rem;
        font-weight: 300;
        line-height: 1.1; }

        hr {
        margin-top: 1rem;
        margin-bottom: 1rem;
        border: 0;
        border-top: 1px solid rgba(0, 0, 0, 0.1); }

        small,
        .small {
        font-size: 80%;
        font-weight: normal; }

        mark,
        .mark {
        padding: 0.2em;
        background-color: #fcf8e3; }

        .list-unstyled {
        padding-left: 0;
        list-style: none; }

        .list-inline {
        padding-left: 0;
        list-style: none; }

        .list-inline-item {
        display: inline-block; }
        .list-inline-item:not(:last-child) {
            margin-right: 5px; }

        .initialism {
        font-size: 90%;
        text-transform: uppercase; }

        .blockquote {
        margin-bottom: 1rem;
        font-size: 1.09375rem; }

        .blockquote-footer {
        display: block;
        font-size: 80%;
        color: #536c79; }
        .blockquote-footer::before {
            content: "\2014 \00A0"; }

        .img-fluid {
        max-width: 100%;
        height: auto; }

        .img-thumbnail {
        padding: 0.25rem;
        background-color: #e4e5e6;
        border: 1px solid #ddd;
        transition: all 0.2s ease-in-out;
        max-width: 100%;
        height: auto; }

        .figure {
        display: inline-block; }

        .figure-img {
        margin-bottom: 0.5rem;
        line-height: 1; }

        .figure-caption {
        font-size: 90%;
        color: #536c79; }

        code,
        kbd,
        pre,
        samp {
        font-family: Menlo, Monaco, Consolas, "Liberation Mono", "Courier New", monospace; }

        code {
        padding: 0.2rem 0.4rem;
        font-size: 90%;
        color: #bd4147;
        background-color: #f0f3f5; }
        a > code {
            padding: 0;
            color: inherit;
            background-color: inherit; }

        kbd {
        padding: 0.2rem 0.4rem;
        font-size: 90%;
        color: #fff;
        background-color: #151b1e; }
        kbd kbd {
            padding: 0;
            font-size: 100%;
            font-weight: bold; }

        pre {
        display: block;
        margin-top: 0;
        margin-bottom: 1rem;
        font-size: 90%;
        color: #151b1e; }
        pre code {
            padding: 0;
            font-size: inherit;
            color: inherit;
            background-color: transparent;
            border-radius: 0; }

        .pre-scrollable {
        max-height: 340px;
        overflow-y: scroll; }

        .container {
        margin-right: auto;
        margin-left: auto;
        padding-right: 15px;
        padding-left: 15px;
        width: 100%; }
        @media (min-width: 576px) {
            .container {
            max-width: 540px; } }
        @media (min-width: 768px) {
            .container {
            max-width: 720px; } }
        @media (min-width: 992px) {
            .container {
            max-width: 960px; } }
        @media (min-width: 1200px) {
            .container {
            max-width: 1140px; } }

        .container-fluid {
        width: 100%;
        margin-right: auto;
        margin-left: auto;
        padding-right: 15px;
        padding-left: 15px;
        width: 100%; }

        .row {
        display: -ms-flexbox;
        display: flex;
        -ms-flex-wrap: wrap;
            flex-wrap: wrap;
        margin-right: -15px;
        margin-left: -15px; }

        .no-gutters {
        margin-right: 0;
        margin-left: 0; }
        .no-gutters > .col,
        .no-gutters > [class*="col-"] {
            padding-right: 0;
            padding-left: 0; }

        .col-1, .col-2, .col-3, .col-4, .col-5, .col-6, .col-7, .col-8, .col-9, .col-10, .col-11, .col-12, .col,
        .col-auto, .col-sm-1, .col-sm-2, .col-sm-3, .col-sm-4, .col-sm-5, .col-sm-6, .col-sm-7, .col-sm-8, .col-sm-9, .col-sm-10, .col-sm-11, .col-sm-12, .col-sm,
        .col-sm-auto, .col-md-1, .col-md-2, .col-md-3, .col-md-4, .col-md-5, .col-md-6, .col-md-7, .col-md-8, .col-md-9, .col-md-10, .col-md-11, .col-md-12, .col-md,
        .col-md-auto, .col-lg-1, .col-lg-2, .col-lg-3, .col-lg-4, .col-lg-5, .col-lg-6, .col-lg-7, .col-lg-8, .col-lg-9, .col-lg-10, .col-lg-11, .col-lg-12, .col-lg,
        .col-lg-auto, .col-xl-1, .col-xl-2, .col-xl-3, .col-xl-4, .col-xl-5, .col-xl-6, .col-xl-7, .col-xl-8, .col-xl-9, .col-xl-10, .col-xl-11, .col-xl-12, .col-xl,
        .col-xl-auto {
        position: relative;
        width: 100%;
        min-height: 1px;
        padding-right: 15px;
        padding-left: 15px; }

        .col {
        -ms-flex-preferred-size: 0;
            flex-basis: 0;
        -ms-flex-positive: 1;
            flex-grow: 1;
        max-width: 100%; }

        .col-auto {
        -ms-flex: 0 0 auto;
            flex: 0 0 auto;
        width: auto;
        max-width: none; }

        .col-1 {
        -ms-flex: 0 0 8.33333%;
            flex: 0 0 8.33333%;
        max-width: 8.33333%; }

        .col-2 {
        -ms-flex: 0 0 16.66667%;
            flex: 0 0 16.66667%;
        max-width: 16.66667%; }

        .col-3 {
        -ms-flex: 0 0 25%;
            flex: 0 0 25%;
        max-width: 25%; }

        .col-4 {
        -ms-flex: 0 0 33.33333%;
            flex: 0 0 33.33333%;
        max-width: 33.33333%; }

        .col-5 {
        -ms-flex: 0 0 41.66667%;
            flex: 0 0 41.66667%;
        max-width: 41.66667%; }

        .col-6 {
        -ms-flex: 0 0 50%;
            flex: 0 0 50%;
        max-width: 50%; }

        .col-7 {
        -ms-flex: 0 0 58.33333%;
            flex: 0 0 58.33333%;
        max-width: 58.33333%; }

        .col-8 {
        -ms-flex: 0 0 66.66667%;
            flex: 0 0 66.66667%;
        max-width: 66.66667%; }

        .col-9 {
        -ms-flex: 0 0 75%;
            flex: 0 0 75%;
        max-width: 75%; }

        .col-10 {
        -ms-flex: 0 0 83.33333%;
            flex: 0 0 83.33333%;
        max-width: 83.33333%; }

        .col-11 {
        -ms-flex: 0 0 91.66667%;
            flex: 0 0 91.66667%;
        max-width: 91.66667%; }

        .col-12 {
        -ms-flex: 0 0 100%;
            flex: 0 0 100%;
        max-width: 100%; }

        .order-1 {
        -ms-flex-order: 1;
            order: 1; }

        .order-2 {
        -ms-flex-order: 2;
            order: 2; }

        .order-3 {
        -ms-flex-order: 3;
            order: 3; }

        .order-4 {
        -ms-flex-order: 4;
            order: 4; }

        .order-5 {
        -ms-flex-order: 5;
            order: 5; }

        .order-6 {
        -ms-flex-order: 6;
            order: 6; }

        .order-7 {
        -ms-flex-order: 7;
            order: 7; }

        .order-8 {
        -ms-flex-order: 8;
            order: 8; }

        .order-9 {
        -ms-flex-order: 9;
            order: 9; }

        .order-10 {
        -ms-flex-order: 10;
            order: 10; }

        .order-11 {
        -ms-flex-order: 11;
            order: 11; }

        .order-12 {
        -ms-flex-order: 12;
            order: 12; }

        @media (min-width: 576px) {
        .col-sm {
            -ms-flex-preferred-size: 0;
                flex-basis: 0;
            -ms-flex-positive: 1;
                flex-grow: 1;
            max-width: 100%; }
        .col-sm-auto {
            -ms-flex: 0 0 auto;
                flex: 0 0 auto;
            width: auto;
            max-width: none; }
        .col-sm-1 {
            -ms-flex: 0 0 8.33333%;
                flex: 0 0 8.33333%;
            max-width: 8.33333%; }
        .col-sm-2 {
            -ms-flex: 0 0 16.66667%;
                flex: 0 0 16.66667%;
            max-width: 16.66667%; }
        .col-sm-3 {
            -ms-flex: 0 0 25%;
                flex: 0 0 25%;
            max-width: 25%; }
        .col-sm-4 {
            -ms-flex: 0 0 33.33333%;
                flex: 0 0 33.33333%;
            max-width: 33.33333%; }
        .col-sm-5 {
            -ms-flex: 0 0 41.66667%;
                flex: 0 0 41.66667%;
            max-width: 41.66667%; }
        .col-sm-6 {
            -ms-flex: 0 0 50%;
                flex: 0 0 50%;
            max-width: 50%; }
        .col-sm-7 {
            -ms-flex: 0 0 58.33333%;
                flex: 0 0 58.33333%;
            max-width: 58.33333%; }
        .col-sm-8 {
            -ms-flex: 0 0 66.66667%;
                flex: 0 0 66.66667%;
            max-width: 66.66667%; }
        .col-sm-9 {
            -ms-flex: 0 0 75%;
                flex: 0 0 75%;
            max-width: 75%; }
        .col-sm-10 {
            -ms-flex: 0 0 83.33333%;
                flex: 0 0 83.33333%;
            max-width: 83.33333%; }
        .col-sm-11 {
            -ms-flex: 0 0 91.66667%;
                flex: 0 0 91.66667%;
            max-width: 91.66667%; }
        .col-sm-12 {
            -ms-flex: 0 0 100%;
                flex: 0 0 100%;
            max-width: 100%; }
        .order-sm-1 {
            -ms-flex-order: 1;
                order: 1; }
        .order-sm-2 {
            -ms-flex-order: 2;
                order: 2; }
        .order-sm-3 {
            -ms-flex-order: 3;
                order: 3; }
        .order-sm-4 {
            -ms-flex-order: 4;
                order: 4; }
        .order-sm-5 {
            -ms-flex-order: 5;
                order: 5; }
        .order-sm-6 {
            -ms-flex-order: 6;
                order: 6; }
        .order-sm-7 {
            -ms-flex-order: 7;
                order: 7; }
        .order-sm-8 {
            -ms-flex-order: 8;
                order: 8; }
        .order-sm-9 {
            -ms-flex-order: 9;
                order: 9; }
        .order-sm-10 {
            -ms-flex-order: 10;
                order: 10; }
        .order-sm-11 {
            -ms-flex-order: 11;
                order: 11; }
        .order-sm-12 {
            -ms-flex-order: 12;
                order: 12; } }

        @media (min-width: 768px) {
        .col-md {
            -ms-flex-preferred-size: 0;
                flex-basis: 0;
            -ms-flex-positive: 1;
                flex-grow: 1;
            max-width: 100%; }
        .col-md-auto {
            -ms-flex: 0 0 auto;
                flex: 0 0 auto;
            width: auto;
            max-width: none; }
        .col-md-1 {
            -ms-flex: 0 0 8.33333%;
                flex: 0 0 8.33333%;
            max-width: 8.33333%; }
        .col-md-2 {
            -ms-flex: 0 0 16.66667%;
                flex: 0 0 16.66667%;
            max-width: 16.66667%; }
        .col-md-3 {
            -ms-flex: 0 0 25%;
                flex: 0 0 25%;
            max-width: 25%; }
        .col-md-4 {
            -ms-flex: 0 0 33.33333%;
                flex: 0 0 33.33333%;
            max-width: 33.33333%; }
        .col-md-5 {
            -ms-flex: 0 0 41.66667%;
                flex: 0 0 41.66667%;
            max-width: 41.66667%; }
        .col-md-6 {
            -ms-flex: 0 0 50%;
                flex: 0 0 50%;
            max-width: 50%; }
        .col-md-7 {
            -ms-flex: 0 0 58.33333%;
                flex: 0 0 58.33333%;
            max-width: 58.33333%; }
        .col-md-8 {
            -ms-flex: 0 0 66.66667%;
                flex: 0 0 66.66667%;
            max-width: 66.66667%; }
        .col-md-9 {
            -ms-flex: 0 0 75%;
                flex: 0 0 75%;
            max-width: 75%; }
        .col-md-10 {
            -ms-flex: 0 0 83.33333%;
                flex: 0 0 83.33333%;
            max-width: 83.33333%; }
        .col-md-11 {
            -ms-flex: 0 0 91.66667%;
                flex: 0 0 91.66667%;
            max-width: 91.66667%; }
        .col-md-12 {
            -ms-flex: 0 0 100%;
                flex: 0 0 100%;
            max-width: 100%; }
        .order-md-1 {
            -ms-flex-order: 1;
                order: 1; }
        .order-md-2 {
            -ms-flex-order: 2;
                order: 2; }
        .order-md-3 {
            -ms-flex-order: 3;
                order: 3; }
        .order-md-4 {
            -ms-flex-order: 4;
                order: 4; }
        .order-md-5 {
            -ms-flex-order: 5;
                order: 5; }
        .order-md-6 {
            -ms-flex-order: 6;
                order: 6; }
        .order-md-7 {
            -ms-flex-order: 7;
                order: 7; }
        .order-md-8 {
            -ms-flex-order: 8;
                order: 8; }
        .order-md-9 {
            -ms-flex-order: 9;
                order: 9; }
        .order-md-10 {
            -ms-flex-order: 10;
                order: 10; }
        .order-md-11 {
            -ms-flex-order: 11;
                order: 11; }
        .order-md-12 {
            -ms-flex-order: 12;
                order: 12; } }

        @media (min-width: 992px) {
        .col-lg {
            -ms-flex-preferred-size: 0;
                flex-basis: 0;
            -ms-flex-positive: 1;
                flex-grow: 1;
            max-width: 100%; }
        .col-lg-auto {
            -ms-flex: 0 0 auto;
                flex: 0 0 auto;
            width: auto;
            max-width: none; }
        .col-lg-1 {
            -ms-flex: 0 0 8.33333%;
                flex: 0 0 8.33333%;
            max-width: 8.33333%; }
        .col-lg-2 {
            -ms-flex: 0 0 16.66667%;
                flex: 0 0 16.66667%;
            max-width: 16.66667%; }
        .col-lg-3 {
            -ms-flex: 0 0 25%;
                flex: 0 0 25%;
            max-width: 25%; }
        .col-lg-4 {
            -ms-flex: 0 0 33.33333%;
                flex: 0 0 33.33333%;
            max-width: 33.33333%; }
        .col-lg-5 {
            -ms-flex: 0 0 41.66667%;
                flex: 0 0 41.66667%;
            max-width: 41.66667%; }
        .col-lg-6 {
            -ms-flex: 0 0 50%;
                flex: 0 0 50%;
            max-width: 50%; }
        .col-lg-7 {
            -ms-flex: 0 0 58.33333%;
                flex: 0 0 58.33333%;
            max-width: 58.33333%; }
        .col-lg-8 {
            -ms-flex: 0 0 66.66667%;
                flex: 0 0 66.66667%;
            max-width: 66.66667%; }
        .col-lg-9 {
            -ms-flex: 0 0 75%;
                flex: 0 0 75%;
            max-width: 75%; }
        .col-lg-10 {
            -ms-flex: 0 0 83.33333%;
                flex: 0 0 83.33333%;
            max-width: 83.33333%; }
        .col-lg-11 {
            -ms-flex: 0 0 91.66667%;
                flex: 0 0 91.66667%;
            max-width: 91.66667%; }
        .col-lg-12 {
            -ms-flex: 0 0 100%;
                flex: 0 0 100%;
            max-width: 100%; }
        .order-lg-1 {
            -ms-flex-order: 1;
                order: 1; }
        .order-lg-2 {
            -ms-flex-order: 2;
                order: 2; }
        .order-lg-3 {
            -ms-flex-order: 3;
                order: 3; }
        .order-lg-4 {
            -ms-flex-order: 4;
                order: 4; }
        .order-lg-5 {
            -ms-flex-order: 5;
                order: 5; }
        .order-lg-6 {
            -ms-flex-order: 6;
                order: 6; }
        .order-lg-7 {
            -ms-flex-order: 7;
                order: 7; }
        .order-lg-8 {
            -ms-flex-order: 8;
                order: 8; }
        .order-lg-9 {
            -ms-flex-order: 9;
                order: 9; }
        .order-lg-10 {
            -ms-flex-order: 10;
                order: 10; }
        .order-lg-11 {
            -ms-flex-order: 11;
                order: 11; }
        .order-lg-12 {
            -ms-flex-order: 12;
                order: 12; } }

        @media (min-width: 1200px) {
        .col-xl {
            -ms-flex-preferred-size: 0;
                flex-basis: 0;
            -ms-flex-positive: 1;
                flex-grow: 1;
            max-width: 100%; }
        .col-xl-auto {
            -ms-flex: 0 0 auto;
                flex: 0 0 auto;
            width: auto;
            max-width: none; }
        .col-xl-1 {
            -ms-flex: 0 0 8.33333%;
                flex: 0 0 8.33333%;
            max-width: 8.33333%; }
        .col-xl-2 {
            -ms-flex: 0 0 16.66667%;
                flex: 0 0 16.66667%;
            max-width: 16.66667%; }
        .col-xl-3 {
            -ms-flex: 0 0 25%;
                flex: 0 0 25%;
            max-width: 25%; }
        .col-xl-4 {
            -ms-flex: 0 0 33.33333%;
                flex: 0 0 33.33333%;
            max-width: 33.33333%; }
        .col-xl-5 {
            -ms-flex: 0 0 41.66667%;
                flex: 0 0 41.66667%;
            max-width: 41.66667%; }
        .col-xl-6 {
            -ms-flex: 0 0 50%;
                flex: 0 0 50%;
            max-width: 50%; }
        .col-xl-7 {
            -ms-flex: 0 0 58.33333%;
                flex: 0 0 58.33333%;
            max-width: 58.33333%; }
        .col-xl-8 {
            -ms-flex: 0 0 66.66667%;
                flex: 0 0 66.66667%;
            max-width: 66.66667%; }
        .col-xl-9 {
            -ms-flex: 0 0 75%;
                flex: 0 0 75%;
            max-width: 75%; }
        .col-xl-10 {
            -ms-flex: 0 0 83.33333%;
                flex: 0 0 83.33333%;
            max-width: 83.33333%; }
        .col-xl-11 {
            -ms-flex: 0 0 91.66667%;
                flex: 0 0 91.66667%;
            max-width: 91.66667%; }
        .col-xl-12 {
            -ms-flex: 0 0 100%;
                flex: 0 0 100%;
            max-width: 100%; }
        .order-xl-1 {
            -ms-flex-order: 1;
                order: 1; }
        .order-xl-2 {
            -ms-flex-order: 2;
                order: 2; }
        .order-xl-3 {
            -ms-flex-order: 3;
                order: 3; }
        .order-xl-4 {
            -ms-flex-order: 4;
                order: 4; }
        .order-xl-5 {
            -ms-flex-order: 5;
                order: 5; }
        .order-xl-6 {
            -ms-flex-order: 6;
                order: 6; }
        .order-xl-7 {
            -ms-flex-order: 7;
                order: 7; }
        .order-xl-8 {
            -ms-flex-order: 8;
                order: 8; }
        .order-xl-9 {
            -ms-flex-order: 9;
                order: 9; }
        .order-xl-10 {
            -ms-flex-order: 10;
                order: 10; }
        .order-xl-11 {
            -ms-flex-order: 11;
                order: 11; }
        .order-xl-12 {
            -ms-flex-order: 12;
                order: 12; } }

        .table {
        width: 100%;
        max-width: 100%;
        margin-bottom: 1rem;
        background-color: transparent; }
        .table th,
        .table td {
            padding: 0.75rem;
            vertical-align: top;
            border-top: 1px solid #c2cfd6; }
        .table thead th {
            vertical-align: bottom;
            border-bottom: 2px solid #c2cfd6; }
        .table tbody + tbody {
            border-top: 2px solid #c2cfd6; }
        .table .table {
            background-color: #e4e5e6; }

        .table-sm th,
        .table-sm td {
        padding: 0.3rem; }

        .table-bordered {
        border: 1px solid #c2cfd6; }
        .table-bordered th,
        .table-bordered td {
            border: 1px solid #c2cfd6; }
        .table-bordered thead th,
        .table-bordered thead td {
            border-bottom-width: 2px; }

        .table-striped tbody tr:nth-of-type(odd) {
        background-color: rgba(0, 0, 0, 0.05); }

        .table-hover tbody tr:hover {
        background-color: rgba(0, 0, 0, 0.075); }

        .table-primary,
        .table-primary > th,
        .table-primary > td {
        background-color: #c1e7f4; }

        .table-hover .table-primary:hover {
        background-color: #abdff0; }
        .table-hover .table-primary:hover > td,
        .table-hover .table-primary:hover > th {
            background-color: #abdff0; }

        .table-secondary,
        .table-secondary > th,
        .table-secondary > td {
        background-color: #e6ebee; }

        .table-hover .table-secondary:hover {
        background-color: #d7dfe4; }
        .table-hover .table-secondary:hover > td,
        .table-hover .table-secondary:hover > th {
            background-color: #d7dfe4; }

        .table-success,
        .table-success > th,
        .table-success > td {
        background-color: #cdedd8; }

        .table-hover .table-success:hover {
        background-color: #bae6c9; }
        .table-hover .table-success:hover > td,
        .table-hover .table-success:hover > th {
            background-color: #bae6c9; }

        .table-info,
        .table-info > th,
        .table-info > td {
        background-color: #d3eef6; }

        .table-hover .table-info:hover {
        background-color: #bee6f2; }
        .table-hover .table-info:hover > td,
        .table-hover .table-info:hover > th {
            background-color: #bee6f2; }

        .table-warning,
        .table-warning > th,
        .table-warning > td {
        background-color: #ffeeba; }

        .table-hover .table-warning:hover {
        background-color: #ffe8a1; }
        .table-hover .table-warning:hover > td,
        .table-hover .table-warning:hover > th {
            background-color: #ffe8a1; }

        .table-danger,
        .table-danger > th,
        .table-danger > td {
        background-color: #fdd6d6; }

        .table-hover .table-danger:hover {
        background-color: #fcbebe; }
        .table-hover .table-danger:hover > td,
        .table-hover .table-danger:hover > th {
            background-color: #fcbebe; }

        .table-light,
        .table-light > th,
        .table-light > td {
        background-color: #fbfcfc; }

        .table-hover .table-light:hover {
        background-color: #ecf1f1; }
        .table-hover .table-light:hover > td,
        .table-hover .table-light:hover > th {
            background-color: #ecf1f1; }

        .table-dark,
        .table-dark > th,
        .table-dark > td {
        background-color: #c3c7c9; }

        .table-hover .table-dark:hover {
        background-color: #b6babd; }
        .table-hover .table-dark:hover > td,
        .table-hover .table-dark:hover > th {
            background-color: #b6babd; }

        .table-active,
        .table-active > th,
        .table-active > td {
        background-color: rgba(0, 0, 0, 0.075); }

        .table-hover .table-active:hover {
        background-color: rgba(0, 0, 0, 0.075); }
        .table-hover .table-active:hover > td,
        .table-hover .table-active:hover > th {
            background-color: rgba(0, 0, 0, 0.075); }

        .thead-inverse th {
        color: #e4e5e6;
        background-color: #151b1e; }

        .thead-default th {
        color: #3e515b;
        background-color: #c2cfd6; }

        .table-inverse {
        color: #e4e5e6;
        background-color: #151b1e; }
        .table-inverse th,
        .table-inverse td,
        .table-inverse thead th {
            border-color: #252f35; }
        .table-inverse.table-bordered {
            border: 0; }
        .table-inverse.table-striped tbody tr:nth-of-type(odd) {
            background-color: rgba(255, 255, 255, 0.05); }
        .table-inverse.table-hover tbody tr:hover {
            background-color: rgba(255, 255, 255, 0.075); }

        @media (max-width: 991px) {
        .table-responsive {
            display: block;
            width: 100%;
            overflow-x: auto;
            -ms-overflow-style: -ms-autohiding-scrollbar; }
            .table-responsive.table-bordered {
            border: 0; } }

        .form-control {
        display: block;
        width: 100%;
        padding: 0.5rem 0.75rem;
        font-size: 0.875rem;
        line-height: 1.25;
        color: #3e515b;
        background-color: #fff;
        background-image: none;
        background-clip: padding-box;
        border: 1px solid #c2cfd6;
        border-radius: 0;
        transition: border-color ease-in-out 0.15s, box-shadow ease-in-out 0.15s; }
        .form-control::-ms-expand {
            background-color: transparent;
            border: 0; }
        .form-control:focus {
            color: #3e515b;
            background-color: #fff;
            border-color: #8ad4ee;
            outline: none; }
        .form-control::-webkit-input-placeholder {
            color: #536c79;
            opacity: 1; }
        .form-control:-ms-input-placeholder {
            color: #536c79;
            opacity: 1; }
        .form-control::-ms-input-placeholder {
            color: #536c79;
            opacity: 1; }
        .form-control::placeholder {
            color: #536c79;
            opacity: 1; }
        .form-control:disabled, .form-control[readonly] {
            background-color: #c2cfd6;
            opacity: 1; }

        select.form-control:not([size]):not([multiple]) {
        height: calc(2.09375rem + 2px); }

        select.form-control:focus::-ms-value {
        color: #3e515b;
        background-color: #fff; }

        .form-control-file,
        .form-control-range {
        display: block; }

        .col-form-label {
        padding-top: calc(0.5rem - 1px * 2);
        padding-bottom: calc(0.5rem - 1px * 2);
        margin-bottom: 0; }

        .col-form-label-lg {
        padding-top: calc(0.5rem - 1px * 2);
        padding-bottom: calc(0.5rem - 1px * 2);
        font-size: 1.25rem; }

        .col-form-label-sm {
        padding-top: calc(0.25rem - 1px * 2);
        padding-bottom: calc(0.25rem - 1px * 2);
        font-size: 0.875rem; }

        .col-form-legend {
        padding-top: 0.5rem;
        padding-bottom: 0.5rem;
        margin-bottom: 0;
        font-size: 0.875rem; }

        .form-control-plaintext {
        padding-top: 0.5rem;
        padding-bottom: 0.5rem;
        margin-bottom: 0;
        line-height: 1.25;
        border: solid transparent;
        border-width: 1px 0; }
        .form-control-plaintext.form-control-sm, .input-group-sm > .form-control-plaintext.form-control,
        .input-group-sm > .form-control-plaintext.input-group-addon,
        .input-group-sm > .input-group-btn > .form-control-plaintext.btn, .form-control-plaintext.form-control-lg, .input-group-lg > .form-control-plaintext.form-control,
        .input-group-lg > .form-control-plaintext.input-group-addon,
        .input-group-lg > .input-group-btn > .form-control-plaintext.btn {
            padding-right: 0;
            padding-left: 0; }

        .form-control-sm, .input-group-sm > .form-control,
        .input-group-sm > .input-group-addon,
        .input-group-sm > .input-group-btn > .btn {
        padding: 0.25rem 0.5rem;
        font-size: 0.875rem;
        line-height: 1.5; }

        select.form-control-sm:not([size]):not([multiple]), .input-group-sm > select.form-control:not([size]):not([multiple]),
        .input-group-sm > select.input-group-addon:not([size]):not([multiple]),
        .input-group-sm > .input-group-btn > select.btn:not([size]):not([multiple]) {
        height: calc(1.8125rem + 2px); }

        .form-control-lg, .input-group-lg > .form-control,
        .input-group-lg > .input-group-addon,
        .input-group-lg > .input-group-btn > .btn {
        padding: 0.5rem 1rem;
        font-size: 1.25rem;
        line-height: 1.5; }

        select.form-control-lg:not([size]):not([multiple]), .input-group-lg > select.form-control:not([size]):not([multiple]),
        .input-group-lg > select.input-group-addon:not([size]):not([multiple]),
        .input-group-lg > .input-group-btn > select.btn:not([size]):not([multiple]) {
        height: calc(2.3125rem + 2px); }

        .form-group {
        margin-bottom: 1rem; }

        .form-text {
        display: block;
        margin-top: 0.25rem; }

        .form-row {
        display: -ms-flexbox;
        display: flex;
        -ms-flex-wrap: wrap;
            flex-wrap: wrap;
        margin-right: -5px;
        margin-left: -5px; }
        .form-row > .col,
        .form-row > [class*="col-"] {
            padding-right: 5px;
            padding-left: 5px; }

        .form-check {
        position: relative;
        display: block;
        margin-bottom: 0.5rem; }
        .form-check.disabled .form-check-label {
            color: #536c79; }

        .form-check-label {
        padding-left: 1.25rem;
        margin-bottom: 0; }

        .form-check-input {
        position: absolute;
        margin-top: 0.25rem;
        margin-left: -1.25rem; }
        .form-check-input:only-child {
            position: static; }

        .form-check-inline {
        display: inline-block; }
        .form-check-inline .form-check-label {
            vertical-align: middle; }
        .form-check-inline + .form-check-inline {
            margin-left: 0.75rem; }

        .invalid-feedback {
        display: none;
        margin-top: .25rem;
        font-size: .875rem;
        color: #f86c6b; }

        .invalid-tooltip {
        position: absolute;
        top: 100%;
        z-index: 5;
        display: none;
        width: 250px;
        padding: .5rem;
        margin-top: .1rem;
        font-size: .875rem;
        line-height: 1;
        color: #fff;
        background-color: rgba(248, 108, 107, 0.8);
        border-radius: .2rem; }

        .was-validated .form-control:valid, .form-control.is-valid, .was-validated
        .custom-select:valid,
        .custom-select.is-valid {
        border-color: #4dbd74; }
        .was-validated .form-control:valid:focus, .form-control.is-valid:focus, .was-validated
        .custom-select:valid:focus,
        .custom-select.is-valid:focus {
            box-shadow: 0 0 0 0.2rem rgba(77, 189, 116, 0.25); }
        .was-validated .form-control:valid ~ .invalid-feedback,
        .was-validated .form-control:valid ~ .invalid-tooltip, .form-control.is-valid ~ .invalid-feedback,
        .form-control.is-valid ~ .invalid-tooltip, .was-validated
        .custom-select:valid ~ .invalid-feedback,
        .was-validated
        .custom-select:valid ~ .invalid-tooltip,
        .custom-select.is-valid ~ .invalid-feedback,
        .custom-select.is-valid ~ .invalid-tooltip {
            display: block; }

        .was-validated .form-check-input:valid + .form-check-label, .form-check-input.is-valid + .form-check-label {
        color: #4dbd74; }

        .was-validated .custom-control-input:valid ~ .custom-control-indicator, .custom-control-input.is-valid ~ .custom-control-indicator {
        background-color: rgba(77, 189, 116, 0.25); }

        .was-validated .custom-control-input:valid ~ .custom-control-description, .custom-control-input.is-valid ~ .custom-control-description {
        color: #4dbd74; }

        .was-validated .custom-file-input:valid ~ .custom-file-control, .custom-file-input.is-valid ~ .custom-file-control {
        border-color: #4dbd74; }
        .was-validated .custom-file-input:valid ~ .custom-file-control::before, .custom-file-input.is-valid ~ .custom-file-control::before {
            border-color: inherit; }

        .was-validated .custom-file-input:valid:focus, .custom-file-input.is-valid:focus {
        box-shadow: 0 0 0 0.2rem rgba(77, 189, 116, 0.25); }

        .was-validated .form-control:invalid, .form-control.is-invalid, .was-validated
        .custom-select:invalid,
        .custom-select.is-invalid {
        border-color: #f86c6b; }
        .was-validated .form-control:invalid:focus, .form-control.is-invalid:focus, .was-validated
        .custom-select:invalid:focus,
        .custom-select.is-invalid:focus {
            box-shadow: 0 0 0 0.2rem rgba(248, 108, 107, 0.25); }
        .was-validated .form-control:invalid ~ .invalid-feedback,
        .was-validated .form-control:invalid ~ .invalid-tooltip, .form-control.is-invalid ~ .invalid-feedback,
        .form-control.is-invalid ~ .invalid-tooltip, .was-validated
        .custom-select:invalid ~ .invalid-feedback,
        .was-validated
        .custom-select:invalid ~ .invalid-tooltip,
        .custom-select.is-invalid ~ .invalid-feedback,
        .custom-select.is-invalid ~ .invalid-tooltip {
            display: block; }

        .was-validated .form-check-input:invalid + .form-check-label, .form-check-input.is-invalid + .form-check-label {
        color: #f86c6b; }

        .was-validated .custom-control-input:invalid ~ .custom-control-indicator, .custom-control-input.is-invalid ~ .custom-control-indicator {
        background-color: rgba(248, 108, 107, 0.25); }

        .was-validated .custom-control-input:invalid ~ .custom-control-description, .custom-control-input.is-invalid ~ .custom-control-description {
        color: #f86c6b; }

        .was-validated .custom-file-input:invalid ~ .custom-file-control, .custom-file-input.is-invalid ~ .custom-file-control {
        border-color: #f86c6b; }
        .was-validated .custom-file-input:invalid ~ .custom-file-control::before, .custom-file-input.is-invalid ~ .custom-file-control::before {
            border-color: inherit; }

        .was-validated .custom-file-input:invalid:focus, .custom-file-input.is-invalid:focus {
        box-shadow: 0 0 0 0.2rem rgba(248, 108, 107, 0.25); }

        .form-inline {
        display: -ms-flexbox;
        display: flex;
        -ms-flex-flow: row wrap;
            flex-flow: row wrap;
        -ms-flex-align: center;
            align-items: center; }
        .form-inline .form-check {
            width: 100%; }
        @media (min-width: 576px) {
            .form-inline label {
            display: -ms-flexbox;
            display: flex;
            -ms-flex-align: center;
                align-items: center;
            -ms-flex-pack: center;
                justify-content: center;
            margin-bottom: 0; }
            .form-inline .form-group {
            display: -ms-flexbox;
            display: flex;
            -ms-flex: 0 0 auto;
                flex: 0 0 auto;
            -ms-flex-flow: row wrap;
                flex-flow: row wrap;
            -ms-flex-align: center;
                align-items: center;
            margin-bottom: 0; }
            .form-inline .form-control {
            display: inline-block;
            width: auto;
            vertical-align: middle; }
            .form-inline .form-control-plaintext {
            display: inline-block; }
            .form-inline .input-group {
            width: auto; }
            .form-inline .form-control-label {
            margin-bottom: 0;
            vertical-align: middle; }
            .form-inline .form-check {
            display: -ms-flexbox;
            display: flex;
            -ms-flex-align: center;
                align-items: center;
            -ms-flex-pack: center;
                justify-content: center;
            width: auto;
            margin-top: 0;
            margin-bottom: 0; }
            .form-inline .form-check-label {
            padding-left: 0; }
            .form-inline .form-check-input {
            position: relative;
            margin-top: 0;
            margin-right: 0.25rem;
            margin-left: 0; }
            .form-inline .custom-control {
            display: -ms-flexbox;
            display: flex;
            -ms-flex-align: center;
                align-items: center;
            -ms-flex-pack: center;
                justify-content: center;
            padding-left: 0; }
            .form-inline .custom-control-indicator {
            position: static;
            display: inline-block;
            margin-right: 0.25rem;
            vertical-align: text-bottom; }
            .form-inline .has-feedback .form-control-feedback {
            top: 0; } }

        .btn {
        display: inline-block;
        font-weight: normal;
        text-align: center;
        white-space: nowrap;
        vertical-align: middle;
        -webkit-user-select: none;
            -moz-user-select: none;
            -ms-user-select: none;
                user-select: none;
        border: 1px solid transparent;
        padding: 0.5rem 0.75rem;
        font-size: 0.875rem;
        line-height: 1.25;
        transition: all 0.15s ease-in-out; }
        .btn:focus, .btn:hover {
            text-decoration: none; }
        .btn:focus, .btn.focus {
            outline: 0;
            box-shadow: 0 0 0 3px rgba(32, 168, 216, 0.25); }
        .btn.disabled, .btn:disabled {
            opacity: .65; }
        .btn:active, .btn.active {
            background-image: none; }

        a.btn.disabled,
        fieldset[disabled] a.btn {
        pointer-events: none; }

        .btn-primary {
        color: #fff;
        background-color: #20a8d8;
        border-color: #20a8d8; }
        .btn-primary:hover {
            color: #fff;
            background-color: #1b8eb7;
            border-color: #1985ac; }
        .btn-primary:focus, .btn-primary.focus {
            box-shadow: 0 0 0 3px rgba(32, 168, 216, 0.5); }
        .btn-primary.disabled, .btn-primary:disabled {
            background-color: #20a8d8;
            border-color: #20a8d8; }
        .btn-primary:active, .btn-primary.active,
        .show > .btn-primary.dropdown-toggle {
            background-color: #1b8eb7;
            background-image: none;
            border-color: #1985ac; }

        .btn-secondary {
        color: #111;
        background-color: #a4b7c1;
        border-color: #a4b7c1; }
        .btn-secondary:hover {
            color: #111;
            background-color: #8da5b2;
            border-color: #869fac; }
        .btn-secondary:focus, .btn-secondary.focus {
            box-shadow: 0 0 0 3px rgba(164, 183, 193, 0.5); }
        .btn-secondary.disabled, .btn-secondary:disabled {
            background-color: #a4b7c1;
            border-color: #a4b7c1; }
        .btn-secondary:active, .btn-secondary.active,
        .show > .btn-secondary.dropdown-toggle {
            background-color: #8da5b2;
            background-image: none;
            border-color: #869fac; }

        .btn-success {
        color: #fff;
        background-color: #4dbd74;
        border-color: #4dbd74; }
        .btn-success:hover {
            color: #fff;
            background-color: #3ea662;
            border-color: #3a9d5d; }
        .btn-success:focus, .btn-success.focus {
            box-shadow: 0 0 0 3px rgba(77, 189, 116, 0.5); }
        .btn-success.disabled, .btn-success:disabled {
            background-color: #4dbd74;
            border-color: #4dbd74; }
        .btn-success:active, .btn-success.active,
        .show > .btn-success.dropdown-toggle {
            background-color: #3ea662;
            background-image: none;
            border-color: #3a9d5d; }

        .btn-info {
        color: #111;
        background-color: #63c2de;
        border-color: #63c2de; }
        .btn-info:hover {
            color: #111;
            background-color: #43b6d7;
            border-color: #39b2d5; }
        .btn-info:focus, .btn-info.focus {
            box-shadow: 0 0 0 3px rgba(99, 194, 222, 0.5); }
        .btn-info.disabled, .btn-info:disabled {
            background-color: #63c2de;
            border-color: #63c2de; }
        .btn-info:active, .btn-info.active,
        .show > .btn-info.dropdown-toggle {
            background-color: #43b6d7;
            background-image: none;
            border-color: #39b2d5; }

        .btn-warning {
        color: #111;
        background-color: #ffc107;
        border-color: #ffc107; }
        .btn-warning:hover {
            color: #111;
            background-color: #e0a800;
            border-color: #d39e00; }
        .btn-warning:focus, .btn-warning.focus {
            box-shadow: 0 0 0 3px rgba(255, 193, 7, 0.5); }
        .btn-warning.disabled, .btn-warning:disabled {
            background-color: #ffc107;
            border-color: #ffc107; }
        .btn-warning:active, .btn-warning.active,
        .show > .btn-warning.dropdown-toggle {
            background-color: #e0a800;
            background-image: none;
            border-color: #d39e00; }

        .btn-danger {
        color: #fff;
        background-color: #f86c6b;
        border-color: #f86c6b; }
        .btn-danger:hover {
            color: #fff;
            background-color: #f64846;
            border-color: #f63c3a; }
        .btn-danger:focus, .btn-danger.focus {
            box-shadow: 0 0 0 3px rgba(248, 108, 107, 0.5); }
        .btn-danger.disabled, .btn-danger:disabled {
            background-color: #f86c6b;
            border-color: #f86c6b; }
        .btn-danger:active, .btn-danger.active,
        .show > .btn-danger.dropdown-toggle {
            background-color: #f64846;
            background-image: none;
            border-color: #f63c3a; }

        .btn-light {
        color: #111;
        background-color: #f0f3f5;
        border-color: #f0f3f5; }
        .btn-light:hover {
            color: #111;
            background-color: #d9e1e6;
            border-color: #d1dbe1; }
        .btn-light:focus, .btn-light.focus {
            box-shadow: 0 0 0 3px rgba(240, 243, 245, 0.5); }
        .btn-light.disabled, .btn-light:disabled {
            background-color: #f0f3f5;
            border-color: #f0f3f5; }
        .btn-light:active, .btn-light.active,
        .show > .btn-light.dropdown-toggle {
            background-color: #d9e1e6;
            background-image: none;
            border-color: #d1dbe1; }

        .btn-dark {
        color: #fff;
        background-color: #29363d;
        border-color: #29363d; }
        .btn-dark:hover {
            color: #fff;
            background-color: #1a2226;
            border-color: #151b1f; }
        .btn-dark:focus, .btn-dark.focus {
            box-shadow: 0 0 0 3px rgba(41, 54, 61, 0.5); }
        .btn-dark.disabled, .btn-dark:disabled {
            background-color: #29363d;
            border-color: #29363d; }
        .btn-dark:active, .btn-dark.active,
        .show > .btn-dark.dropdown-toggle {
            background-color: #1a2226;
            background-image: none;
            border-color: #151b1f; }

        .btn-outline-primary {
        color: #20a8d8;
        background-color: transparent;
        background-image: none;
        border-color: #20a8d8; }
        .btn-outline-primary:hover {
            color: #fff;
            background-color: #20a8d8;
            border-color: #20a8d8; }
        .btn-outline-primary:focus, .btn-outline-primary.focus {
            box-shadow: 0 0 0 3px rgba(32, 168, 216, 0.5); }
        .btn-outline-primary.disabled, .btn-outline-primary:disabled {
            color: #20a8d8;
            background-color: transparent; }
        .btn-outline-primary:active, .btn-outline-primary.active,
        .show > .btn-outline-primary.dropdown-toggle {
            color: #fff;
            background-color: #20a8d8;
            border-color: #20a8d8; }

        .btn-outline-secondary {
        color: #a4b7c1;
        background-color: transparent;
        background-image: none;
        border-color: #a4b7c1; }
        .btn-outline-secondary:hover {
            color: #fff;
            background-color: #a4b7c1;
            border-color: #a4b7c1; }
        .btn-outline-secondary:focus, .btn-outline-secondary.focus {
            box-shadow: 0 0 0 3px rgba(164, 183, 193, 0.5); }
        .btn-outline-secondary.disabled, .btn-outline-secondary:disabled {
            color: #a4b7c1;
            background-color: transparent; }
        .btn-outline-secondary:active, .btn-outline-secondary.active,
        .show > .btn-outline-secondary.dropdown-toggle {
            color: #fff;
            background-color: #a4b7c1;
            border-color: #a4b7c1; }

        .btn-outline-success {
        color: #4dbd74;
        background-color: transparent;
        background-image: none;
        border-color: #4dbd74; }
        .btn-outline-success:hover {
            color: #fff;
            background-color: #4dbd74;
            border-color: #4dbd74; }
        .btn-outline-success:focus, .btn-outline-success.focus {
            box-shadow: 0 0 0 3px rgba(77, 189, 116, 0.5); }
        .btn-outline-success.disabled, .btn-outline-success:disabled {
            color: #4dbd74;
            background-color: transparent; }
        .btn-outline-success:active, .btn-outline-success.active,
        .show > .btn-outline-success.dropdown-toggle {
            color: #fff;
            background-color: #4dbd74;
            border-color: #4dbd74; }

        .btn-outline-info {
        color: #63c2de;
        background-color: transparent;
        background-image: none;
        border-color: #63c2de; }
        .btn-outline-info:hover {
            color: #fff;
            background-color: #63c2de;
            border-color: #63c2de; }
        .btn-outline-info:focus, .btn-outline-info.focus {
            box-shadow: 0 0 0 3px rgba(99, 194, 222, 0.5); }
        .btn-outline-info.disabled, .btn-outline-info:disabled {
            color: #63c2de;
            background-color: transparent; }
        .btn-outline-info:active, .btn-outline-info.active,
        .show > .btn-outline-info.dropdown-toggle {
            color: #fff;
            background-color: #63c2de;
            border-color: #63c2de; }

        .btn-outline-warning {
        color: #ffc107;
        background-color: transparent;
        background-image: none;
        border-color: #ffc107; }
        .btn-outline-warning:hover {
            color: #fff;
            background-color: #ffc107;
            border-color: #ffc107; }
        .btn-outline-warning:focus, .btn-outline-warning.focus {
            box-shadow: 0 0 0 3px rgba(255, 193, 7, 0.5); }
        .btn-outline-warning.disabled, .btn-outline-warning:disabled {
            color: #ffc107;
            background-color: transparent; }
        .btn-outline-warning:active, .btn-outline-warning.active,
        .show > .btn-outline-warning.dropdown-toggle {
            color: #fff;
            background-color: #ffc107;
            border-color: #ffc107; }

        .btn-outline-danger {
        color: #f86c6b;
        background-color: transparent;
        background-image: none;
        border-color: #f86c6b; }
        .btn-outline-danger:hover {
            color: #fff;
            background-color: #f86c6b;
            border-color: #f86c6b; }
        .btn-outline-danger:focus, .btn-outline-danger.focus {
            box-shadow: 0 0 0 3px rgba(248, 108, 107, 0.5); }
        .btn-outline-danger.disabled, .btn-outline-danger:disabled {
            color: #f86c6b;
            background-color: transparent; }
        .btn-outline-danger:active, .btn-outline-danger.active,
        .show > .btn-outline-danger.dropdown-toggle {
            color: #fff;
            background-color: #f86c6b;
            border-color: #f86c6b; }

        .btn-outline-light {
        color: #f0f3f5;
        background-color: transparent;
        background-image: none;
        border-color: #f0f3f5; }
        .btn-outline-light:hover {
            color: #fff;
            background-color: #f0f3f5;
            border-color: #f0f3f5; }
        .btn-outline-light:focus, .btn-outline-light.focus {
            box-shadow: 0 0 0 3px rgba(240, 243, 245, 0.5); }
        .btn-outline-light.disabled, .btn-outline-light:disabled {
            color: #f0f3f5;
            background-color: transparent; }
        .btn-outline-light:active, .btn-outline-light.active,
        .show > .btn-outline-light.dropdown-toggle {
            color: #fff;
            background-color: #f0f3f5;
            border-color: #f0f3f5; }

        .btn-outline-dark {
        color: #29363d;
        background-color: transparent;
        background-image: none;
        border-color: #29363d; }
        .btn-outline-dark:hover {
            color: #fff;
            background-color: #29363d;
            border-color: #29363d; }
        .btn-outline-dark:focus, .btn-outline-dark.focus {
            box-shadow: 0 0 0 3px rgba(41, 54, 61, 0.5); }
        .btn-outline-dark.disabled, .btn-outline-dark:disabled {
            color: #29363d;
            background-color: transparent; }
        .btn-outline-dark:active, .btn-outline-dark.active,
        .show > .btn-outline-dark.dropdown-toggle {
            color: #fff;
            background-color: #29363d;
            border-color: #29363d; }

        .btn-link {
        font-weight: normal;
        color: #20a8d8;
        border-radius: 0; }
        .btn-link, .btn-link:active, .btn-link.active, .btn-link:disabled {
            background-color: transparent; }
        .btn-link, .btn-link:focus, .btn-link:active {
            border-color: transparent;
            box-shadow: none; }
        .btn-link:hover {
            border-color: transparent; }
        .btn-link:focus, .btn-link:hover {
            color: #167495;
            text-decoration: underline;
            background-color: transparent; }
        .btn-link:disabled {
            color: #536c79; }
            .btn-link:disabled:focus, .btn-link:disabled:hover {
            text-decoration: none; }

        .btn-lg, .btn-group-lg > .btn {
        padding: 0.5rem 1rem;
        font-size: 1.25rem;
        line-height: 1.5; }

        .btn-sm, .btn-group-sm > .btn {
        padding: 0.25rem 0.5rem;
        font-size: 0.875rem;
        line-height: 1.5; }

        .btn-block {
        display: block;
        width: 100%; }

        .btn-block + .btn-block {
        margin-top: 0.5rem; }

        input[type="submit"].btn-block,
        input[type="reset"].btn-block,
        input[type="button"].btn-block {
        width: 100%; }

        .fade {
        opacity: 0;
        transition: opacity 0.15s linear; }
        .fade.show {
            opacity: 1; }

        .collapse {
        display: none; }
        .collapse.show {
            display: block; }

        tr.collapse.show {
        display: table-row; }

        tbody.collapse.show {
        display: table-row-group; }

        .collapsing {
        position: relative;
        height: 0;
        overflow: hidden;
        transition: height 0.35s ease; }

        .dropup,
        .dropdown {
        position: relative; }

        .dropdown-toggle::after {
        display: inline-block;
        width: 0;
        height: 0;
        margin-left: 0.255em;
        vertical-align: 0.255em;
        content: "";
        border-top: 0.3em solid;
        border-right: 0.3em solid transparent;
        border-left: 0.3em solid transparent; }

        .dropdown-toggle:empty::after {
        margin-left: 0; }

        .dropup .dropdown-menu {
        margin-top: 0;
        margin-bottom: 0.125rem; }

        .dropup .dropdown-toggle::after {
        border-top: 0;
        border-bottom: 0.3em solid; }

        .dropdown-menu {
        position: absolute;
        top: 100%;
        left: 0;
        z-index: 1000;
        display: none;
        float: left;
        min-width: 10rem;
        padding: 0 0;
        margin: 0.125rem 0 0;
        font-size: 0.875rem;
        color: #151b1e;
        text-align: left;
        list-style: none;
        background-color: #fff;
        background-clip: padding-box;
        border: 1px solid #c2cfd6; }

        .dropdown-divider {
        height: 0;
        margin: 0.5rem 0;
        overflow: hidden;
        border-top: 1px solid #f0f3f5; }

        .dropdown-item {
        display: block;
        width: 100%;
        padding: 0.25rem 1.5rem;
        clear: both;
        font-weight: normal;
        color: #151b1e;
        text-align: inherit;
        white-space: nowrap;
        background: none;
        border: 0; }
        .dropdown-item:focus, .dropdown-item:hover {
            color: #0b0e0f;
            text-decoration: none;
            background-color: #f0f3f5; }
        .dropdown-item.active, .dropdown-item:active {
            color: #fff;
            text-decoration: none;
            background-color: #20a8d8; }
        .dropdown-item.disabled, .dropdown-item:disabled {
            color: #536c79;
            background-color: transparent; }

        .show > a {
        outline: 0; }

        .dropdown-menu.show {
        display: block; }

        .dropdown-header {
        display: block;
        padding: 0 1.5rem;
        margin-bottom: 0;
        font-size: 0.875rem;
        color: #536c79;
        white-space: nowrap; }

        .btn-group,
        .btn-group-vertical {
        position: relative;
        display: -ms-inline-flexbox;
        display: inline-flex;
        vertical-align: middle; }
        .btn-group > .btn,
        .btn-group-vertical > .btn {
            position: relative;
            -ms-flex: 0 1 auto;
                flex: 0 1 auto;
            margin-bottom: 0; }
            .btn-group > .btn:hover,
            .btn-group-vertical > .btn:hover {
            z-index: 2; }
            .btn-group > .btn:focus, .btn-group > .btn:active, .btn-group > .btn.active,
            .btn-group-vertical > .btn:focus,
            .btn-group-vertical > .btn:active,
            .btn-group-vertical > .btn.active {
            z-index: 2; }
        .btn-group .btn + .btn,
        .btn-group .btn + .btn-group,
        .btn-group .btn-group + .btn,
        .btn-group .btn-group + .btn-group,
        .btn-group-vertical .btn + .btn,
        .btn-group-vertical .btn + .btn-group,
        .btn-group-vertical .btn-group + .btn,
        .btn-group-vertical .btn-group + .btn-group {
            margin-left: -1px; }

        .btn-toolbar {
        display: -ms-flexbox;
        display: flex;
        -ms-flex-wrap: wrap;
            flex-wrap: wrap;
        -ms-flex-pack: start;
            justify-content: flex-start; }
        .btn-toolbar .input-group {
            width: auto; }

        .btn-group > .btn:not(:first-child):not(:last-child):not(.dropdown-toggle) {
        border-radius: 0; }

        .btn-group > .btn:first-child {
        margin-left: 0; }

        .btn-group > .btn-group {
        float: left; }

        .btn-group > .btn-group:not(:first-child):not(:last-child) > .btn {
        border-radius: 0; }

        .btn + .dropdown-toggle-split {
        padding-right: 0.5625rem;
        padding-left: 0.5625rem; }
        .btn + .dropdown-toggle-split::after {
            margin-left: 0; }

        .btn-sm + .dropdown-toggle-split, .btn-group-sm > .btn + .dropdown-toggle-split {
        padding-right: 0.375rem;
        padding-left: 0.375rem; }

        .btn-lg + .dropdown-toggle-split, .btn-group-lg > .btn + .dropdown-toggle-split {
        padding-right: 0.75rem;
        padding-left: 0.75rem; }

        .btn-group-vertical {
        display: -ms-inline-flexbox;
        display: inline-flex;
        -ms-flex-direction: column;
            flex-direction: column;
        -ms-flex-align: start;
            align-items: flex-start;
        -ms-flex-pack: center;
            justify-content: center; }
        .btn-group-vertical .btn,
        .btn-group-vertical .btn-group {
            width: 100%; }
        .btn-group-vertical > .btn + .btn,
        .btn-group-vertical > .btn + .btn-group,
        .btn-group-vertical > .btn-group + .btn,
        .btn-group-vertical > .btn-group + .btn-group {
            margin-top: -1px;
            margin-left: 0; }

        .btn-group-vertical > .btn:not(:first-child):not(:last-child) {
        border-radius: 0; }

        .btn-group-vertical > .btn-group:not(:first-child):not(:last-child) > .btn {
        border-radius: 0; }

        [data-toggle="buttons"] > .btn input[type="radio"],
        [data-toggle="buttons"] > .btn input[type="checkbox"],
        [data-toggle="buttons"] > .btn-group > .btn input[type="radio"],
        [data-toggle="buttons"] > .btn-group > .btn input[type="checkbox"] {
        position: absolute;
        clip: rect(0, 0, 0, 0);
        pointer-events: none; }

        .input-group {
        position: relative;
        display: -ms-flexbox;
        display: flex;
        width: 100%; }
        .input-group .form-control {
            position: relative;
            z-index: 2;
            -ms-flex: 1 1 auto;
                flex: 1 1 auto;
            width: 1%;
            margin-bottom: 0; }
            .input-group .form-control:focus, .input-group .form-control:active, .input-group .form-control:hover {
            z-index: 3; }

        .input-group-addon,
        .input-group-btn,
        .input-group .form-control {
        display: -ms-flexbox;
        display: flex;
        -ms-flex-align: center;
            align-items: center; }

        .input-group-addon,
        .input-group-btn {
        white-space: nowrap;
        vertical-align: middle; }

        .input-group-addon {
        padding: 0.5rem 0.75rem;
        margin-bottom: 0;
        font-size: 0.875rem;
        font-weight: normal;
        line-height: 1.25;
        color: #3e515b;
        text-align: center;
        background-color: #f0f3f5;
        border: 1px solid #c2cfd6; }
        .input-group-addon.form-control-sm,
        .input-group-sm > .input-group-addon,
        .input-group-sm > .input-group-btn > .input-group-addon.btn {
            padding: 0.25rem 0.5rem;
            font-size: 0.875rem; }
        .input-group-addon.form-control-lg,
        .input-group-lg > .input-group-addon,
        .input-group-lg > .input-group-btn > .input-group-addon.btn {
            padding: 0.5rem 1rem;
            font-size: 1.25rem; }
        .input-group-addon input[type="radio"],
        .input-group-addon input[type="checkbox"] {
            margin-top: 0; }

        .input-group-addon:not(:last-child) {
        border-right: 0; }

        .form-control + .input-group-addon:not(:first-child) {
        border-left: 0; }

        .input-group-btn {
        position: relative;
        font-size: 0;
        white-space: nowrap; }
        .input-group-btn > .btn {
            position: relative; }
            .input-group-btn > .btn + .btn {
            margin-left: -1px; }
            .input-group-btn > .btn:focus, .input-group-btn > .btn:active, .input-group-btn > .btn:hover {
            z-index: 3; }
        .input-group-btn:not(:last-child) > .btn,
        .input-group-btn:not(:last-child) > .btn-group {
            margin-right: -1px; }
        .input-group-btn:not(:first-child) > .btn,
        .input-group-btn:not(:first-child) > .btn-group {
            z-index: 2;
            margin-left: -1px; }
            .input-group-btn:not(:first-child) > .btn:focus, .input-group-btn:not(:first-child) > .btn:active, .input-group-btn:not(:first-child) > .btn:hover,
            .input-group-btn:not(:first-child) > .btn-group:focus,
            .input-group-btn:not(:first-child) > .btn-group:active,
            .input-group-btn:not(:first-child) > .btn-group:hover {
            z-index: 3; }

        .custom-control {
        position: relative;
        display: -ms-inline-flexbox;
        display: inline-flex;
        min-height: 1.5rem;
        padding-left: 1.5rem;
        margin-right: 1rem; }

        .custom-control-input {
        position: absolute;
        z-index: -1;
        opacity: 0; }
        .custom-control-input:checked ~ .custom-control-indicator {
            color: #fff;
            background-color: #20a8d8; }
        .custom-control-input:focus ~ .custom-control-indicator {
            box-shadow: 0 0 0 1px #e4e5e6, 0 0 0 3px #20a8d8; }
        .custom-control-input:active ~ .custom-control-indicator {
            color: #fff;
            background-color: #b6e4f4; }
        .custom-control-input:disabled ~ .custom-control-indicator {
            background-color: #c2cfd6; }
        .custom-control-input:disabled ~ .custom-control-description {
            color: #536c79; }

        .custom-control-indicator {
        position: absolute;
        top: 0.25rem;
        left: 0;
        display: block;
        width: 1rem;
        height: 1rem;
        pointer-events: none;
        -webkit-user-select: none;
            -moz-user-select: none;
            -ms-user-select: none;
                user-select: none;
        background-color: #ddd;
        background-repeat: no-repeat;
        background-position: center center;
        background-size: 50% 50%; }

        .custom-checkbox .custom-control-input:checked ~ .custom-control-indicator {
        background-image: url("data:image/svg+xml;charset=utf8,%3Csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 8 8'%3E%3Cpath fill='%23fff' d='M6.564.75l-3.59 3.612-1.538-1.55L0 4.26 2.974 7.25 8 2.193z'/%3E%3C/svg%3E"); }

        .custom-checkbox .custom-control-input:indeterminate ~ .custom-control-indicator {
        background-color: #20a8d8;
        background-image: url("data:image/svg+xml;charset=utf8,%3Csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 4 4'%3E%3Cpath stroke='%23fff' d='M0 2h4'/%3E%3C/svg%3E"); }

        .custom-radio .custom-control-indicator {
        border-radius: 50%; }

        .custom-radio .custom-control-input:checked ~ .custom-control-indicator {
        background-image: url("data:image/svg+xml;charset=utf8,%3Csvg xmlns='http://www.w3.org/2000/svg' viewBox='-4 -4 8 8'%3E%3Ccircle r='3' fill='%23fff'/%3E%3C/svg%3E"); }

        .custom-controls-stacked {
        display: -ms-flexbox;
        display: flex;
        -ms-flex-direction: column;
            flex-direction: column; }
        .custom-controls-stacked .custom-control {
            margin-bottom: 0.25rem; }
            .custom-controls-stacked .custom-control + .custom-control {
            margin-left: 0; }

        .custom-select {
        display: inline-block;
        max-width: 100%;
        height: calc(2.09375rem + 2px);
        padding: 0.375rem 1.75rem 0.375rem 0.75rem;
        line-height: 1.25;
        color: #3e515b;
        vertical-align: middle;
        background: #fff url("data:image/svg+xml;charset=utf8,%3Csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 4 5'%3E%3Cpath fill='%23333' d='M2 0L0 2h4zm0 5L0 3h4z'/%3E%3C/svg%3E") no-repeat right 0.75rem center;
        background-size: 8px 10px;
        border: 1px solid #c2cfd6;
        border-radius: 0;
        -webkit-appearance: none;
            -moz-appearance: none;
                appearance: none; }
        .custom-select:focus {
            border-color: #8ad4ee;
            outline: none; }
            .custom-select:focus::-ms-value {
            color: #3e515b;
            background-color: #fff; }
        .custom-select:disabled {
            color: #536c79;
            background-color: #c2cfd6; }
        .custom-select::-ms-expand {
            opacity: 0; }

        .custom-select-sm {
        height: calc(1.8125rem + 2px);
        padding-top: 0.375rem;
        padding-bottom: 0.375rem;
        font-size: 75%; }

        .custom-file {
        position: relative;
        display: inline-block;
        max-width: 100%;
        height: 2.5rem;
        margin-bottom: 0; }

        .custom-file-input {
        min-width: 14rem;
        max-width: 100%;
        height: 2.5rem;
        margin: 0;
        opacity: 0; }

        .custom-file-control {
        position: absolute;
        top: 0;
        right: 0;
        left: 0;
        z-index: 5;
        height: 2.5rem;
        padding: 0.5rem 1rem;
        line-height: 1.5;
        color: #3e515b;
        pointer-events: none;
        -webkit-user-select: none;
            -moz-user-select: none;
            -ms-user-select: none;
                user-select: none;
        background-color: #fff;
        border: 1px solid #c2cfd6; }
        .custom-file-control:lang(en):empty::after {
            content: "Choose file..."; }
        .custom-file-control::before {
            position: absolute;
            top: -1px;
            right: -1px;
            bottom: -1px;
            z-index: 6;
            display: block;
            height: 2.5rem;
            padding: 0.5rem 1rem;
            line-height: 1.5;
            color: #3e515b;
            background-color: #c2cfd6;
            border: 1px solid #c2cfd6; }
        .custom-file-control:lang(en)::before {
            content: "Browse"; }

        .nav {
        display: -ms-flexbox;
        display: flex;
        -ms-flex-wrap: wrap;
            flex-wrap: wrap;
        padding-left: 0;
        margin-bottom: 0;
        list-style: none; }

        .nav-link, .navbar .dropdown-toggle {
        display: block;
        padding: 0.5rem 1rem; }
        .nav-link:focus, .navbar .dropdown-toggle:focus, .nav-link:hover, .navbar .dropdown-toggle:hover {
            text-decoration: none; }
        .nav-link.disabled, .navbar .disabled.dropdown-toggle {
            color: #536c79; }

        .nav-tabs {
        border-bottom: 1px solid #ddd; }
        .nav-tabs .nav-item {
            margin-bottom: -1px; }
        .nav-tabs .nav-link, .nav-tabs .navbar .dropdown-toggle, .navbar .nav-tabs .dropdown-toggle {
            border: 1px solid transparent; }
            .nav-tabs .nav-link:focus, .nav-tabs .navbar .dropdown-toggle:focus, .navbar .nav-tabs .dropdown-toggle:focus, .nav-tabs .nav-link:hover, .nav-tabs .navbar .dropdown-toggle:hover, .navbar .nav-tabs .dropdown-toggle:hover {
            border-color: #c2cfd6 #c2cfd6 #ddd; }
            .nav-tabs .nav-link.disabled, .nav-tabs .navbar .disabled.dropdown-toggle, .navbar .nav-tabs .disabled.dropdown-toggle {
            color: #536c79;
            background-color: transparent;
            border-color: transparent; }
        .nav-tabs .nav-link.active, .nav-tabs .navbar .active.dropdown-toggle, .navbar .nav-tabs .active.dropdown-toggle,
        .nav-tabs .nav-item.show .nav-link,
        .nav-tabs .nav-item.show .navbar .dropdown-toggle, .navbar
        .nav-tabs .nav-item.show .dropdown-toggle {
            color: #3e515b;
            background-color: #e4e5e6;
            border-color: #ddd #ddd #e4e5e6; }
        .nav-tabs .dropdown-menu {
            margin-top: -1px; }

        .nav-pills .nav-link.active, .nav-pills .navbar .active.dropdown-toggle, .navbar .nav-pills .active.dropdown-toggle,
        .show > .nav-pills .nav-link,
        .show > .nav-pills .navbar .dropdown-toggle, .navbar
        .show > .nav-pills .dropdown-toggle {
        color: #fff;
        background-color: #20a8d8; }

        .nav-fill .nav-item {
        -ms-flex: 1 1 auto;
            flex: 1 1 auto;
        text-align: center; }

        .nav-justified .nav-item {
        -ms-flex-preferred-size: 0;
            flex-basis: 0;
        -ms-flex-positive: 1;
            flex-grow: 1;
        text-align: center; }

        .tab-content > .tab-pane {
        display: none; }

        .tab-content > .active {
        display: block; }

        .navbar {
        position: relative;
        display: -ms-flexbox;
        display: flex;
        -ms-flex-wrap: wrap;
            flex-wrap: wrap;
        -ms-flex-align: center;
            align-items: center;
        -ms-flex-pack: justify;
            justify-content: space-between;
        padding: 0.5rem 1rem; }
        .navbar > .container,
        .navbar > .container-fluid {
            display: -ms-flexbox;
            display: flex;
            -ms-flex-wrap: wrap;
                flex-wrap: wrap;
            -ms-flex-align: center;
                align-items: center;
            -ms-flex-pack: justify;
                justify-content: space-between; }

        .navbar-brand {
        display: inline-block;
        padding-top: 0.21875rem;
        padding-bottom: 0.21875rem;
        margin-right: 1rem;
        font-size: 1.25rem;
        line-height: inherit;
        white-space: nowrap; }
        .navbar-brand:focus, .navbar-brand:hover {
            text-decoration: none; }

        .navbar-nav {
        display: -ms-flexbox;
        display: flex;
        -ms-flex-direction: column;
            flex-direction: column;
        padding-left: 0;
        margin-bottom: 0;
        list-style: none; }
        .navbar-nav .nav-link, .navbar-nav .navbar .dropdown-toggle, .navbar .navbar-nav .dropdown-toggle {
            padding-right: 0;
            padding-left: 0; }
        .navbar-nav .dropdown-menu {
            position: static;
            float: none; }

        .navbar-text {
        display: inline-block;
        padding-top: 0.5rem;
        padding-bottom: 0.5rem; }

        .navbar-collapse {
        -ms-flex-preferred-size: 100%;
            flex-basis: 100%;
        -ms-flex-align: center;
            align-items: center; }

        .navbar-toggler {
        padding: 0.25rem 0.75rem;
        font-size: 1.25rem;
        line-height: 1;
        background: transparent;
        border: 1px solid transparent; }
        .navbar-toggler:focus, .navbar-toggler:hover {
            text-decoration: none; }

        .navbar-toggler-icon {
        display: inline-block;
        width: 1.5em;
        height: 1.5em;
        vertical-align: middle;
        content: "";
        background: no-repeat center center;
        background-size: 100% 100%; }

        @media (max-width: 575px) {
        .navbar-expand-sm > .container,
        .navbar-expand-sm > .container-fluid {
            padding-right: 0;
            padding-left: 0; } }

        @media (min-width: 576px) {
        .navbar-expand-sm {
            -ms-flex-direction: row;
                flex-direction: row;
            -ms-flex-wrap: nowrap;
                flex-wrap: nowrap;
            -ms-flex-pack: start;
                justify-content: flex-start; }
            .navbar-expand-sm .navbar-nav {
            -ms-flex-direction: row;
                flex-direction: row; }
            .navbar-expand-sm .navbar-nav .dropdown-menu {
                position: absolute; }
            .navbar-expand-sm .navbar-nav .dropdown-menu-right {
                right: 0;
                left: auto; }
            .navbar-expand-sm .navbar-nav .nav-link, .navbar-expand-sm .navbar-nav .navbar .dropdown-toggle, .navbar .navbar-expand-sm .navbar-nav .dropdown-toggle {
                padding-right: .5rem;
                padding-left: .5rem; }
            .navbar-expand-sm > .container,
            .navbar-expand-sm > .container-fluid {
            -ms-flex-wrap: nowrap;
                flex-wrap: nowrap; }
            .navbar-expand-sm .navbar-collapse {
            display: -ms-flexbox !important;
            display: flex !important; }
            .navbar-expand-sm .navbar-toggler {
            display: none; } }

        @media (max-width: 767px) {
        .navbar-expand-md > .container,
        .navbar-expand-md > .container-fluid {
            padding-right: 0;
            padding-left: 0; } }

        @media (min-width: 768px) {
        .navbar-expand-md {
            -ms-flex-direction: row;
                flex-direction: row;
            -ms-flex-wrap: nowrap;
                flex-wrap: nowrap;
            -ms-flex-pack: start;
                justify-content: flex-start; }
            .navbar-expand-md .navbar-nav {
            -ms-flex-direction: row;
                flex-direction: row; }
            .navbar-expand-md .navbar-nav .dropdown-menu {
                position: absolute; }
            .navbar-expand-md .navbar-nav .dropdown-menu-right {
                right: 0;
                left: auto; }
            .navbar-expand-md .navbar-nav .nav-link, .navbar-expand-md .navbar-nav .navbar .dropdown-toggle, .navbar .navbar-expand-md .navbar-nav .dropdown-toggle {
                padding-right: .5rem;
                padding-left: .5rem; }
            .navbar-expand-md > .container,
            .navbar-expand-md > .container-fluid {
            -ms-flex-wrap: nowrap;
                flex-wrap: nowrap; }
            .navbar-expand-md .navbar-collapse {
            display: -ms-flexbox !important;
            display: flex !important; }
            .navbar-expand-md .navbar-toggler {
            display: none; } }

        @media (max-width: 991px) {
        .navbar-expand-lg > .container,
        .navbar-expand-lg > .container-fluid {
            padding-right: 0;
            padding-left: 0; } }

        @media (min-width: 992px) {
        .navbar-expand-lg {
            -ms-flex-direction: row;
                flex-direction: row;
            -ms-flex-wrap: nowrap;
                flex-wrap: nowrap;
            -ms-flex-pack: start;
                justify-content: flex-start; }
            .navbar-expand-lg .navbar-nav {
            -ms-flex-direction: row;
                flex-direction: row; }
            .navbar-expand-lg .navbar-nav .dropdown-menu {
                position: absolute; }
            .navbar-expand-lg .navbar-nav .dropdown-menu-right {
                right: 0;
                left: auto; }
            .navbar-expand-lg .navbar-nav .nav-link, .navbar-expand-lg .navbar-nav .navbar .dropdown-toggle, .navbar .navbar-expand-lg .navbar-nav .dropdown-toggle {
                padding-right: .5rem;
                padding-left: .5rem; }
            .navbar-expand-lg > .container,
            .navbar-expand-lg > .container-fluid {
            -ms-flex-wrap: nowrap;
                flex-wrap: nowrap; }
            .navbar-expand-lg .navbar-collapse {
            display: -ms-flexbox !important;
            display: flex !important; }
            .navbar-expand-lg .navbar-toggler {
            display: none; } }

        @media (max-width: 1199px) {
        .navbar-expand-xl > .container,
        .navbar-expand-xl > .container-fluid {
            padding-right: 0;
            padding-left: 0; } }

        @media (min-width: 1200px) {
        .navbar-expand-xl {
            -ms-flex-direction: row;
                flex-direction: row;
            -ms-flex-wrap: nowrap;
                flex-wrap: nowrap;
            -ms-flex-pack: start;
                justify-content: flex-start; }
            .navbar-expand-xl .navbar-nav {
            -ms-flex-direction: row;
                flex-direction: row; }
            .navbar-expand-xl .navbar-nav .dropdown-menu {
                position: absolute; }
            .navbar-expand-xl .navbar-nav .dropdown-menu-right {
                right: 0;
                left: auto; }
            .navbar-expand-xl .navbar-nav .nav-link, .navbar-expand-xl .navbar-nav .navbar .dropdown-toggle, .navbar .navbar-expand-xl .navbar-nav .dropdown-toggle {
                padding-right: .5rem;
                padding-left: .5rem; }
            .navbar-expand-xl > .container,
            .navbar-expand-xl > .container-fluid {
            -ms-flex-wrap: nowrap;
                flex-wrap: nowrap; }
            .navbar-expand-xl .navbar-collapse {
            display: -ms-flexbox !important;
            display: flex !important; }
            .navbar-expand-xl .navbar-toggler {
            display: none; } }

        .navbar-expand {
        -ms-flex-direction: row;
            flex-direction: row;
        -ms-flex-wrap: nowrap;
            flex-wrap: nowrap;
        -ms-flex-pack: start;
            justify-content: flex-start; }
        .navbar-expand > .container,
        .navbar-expand > .container-fluid {
            padding-right: 0;
            padding-left: 0; }
        .navbar-expand .navbar-nav {
            -ms-flex-direction: row;
                flex-direction: row; }
            .navbar-expand .navbar-nav .dropdown-menu {
            position: absolute; }
            .navbar-expand .navbar-nav .dropdown-menu-right {
            right: 0;
            left: auto; }
            .navbar-expand .navbar-nav .nav-link, .navbar-expand .navbar-nav .navbar .dropdown-toggle, .navbar .navbar-expand .navbar-nav .dropdown-toggle {
            padding-right: .5rem;
            padding-left: .5rem; }
        .navbar-expand > .container,
        .navbar-expand > .container-fluid {
            -ms-flex-wrap: nowrap;
                flex-wrap: nowrap; }
        .navbar-expand .navbar-collapse {
            display: -ms-flexbox !important;
            display: flex !important; }
        .navbar-expand .navbar-toggler {
            display: none; }

        .navbar-light .navbar-brand {
        color: rgba(0, 0, 0, 0.9); }
        .navbar-light .navbar-brand:focus, .navbar-light .navbar-brand:hover {
            color: rgba(0, 0, 0, 0.9); }

        .navbar-light .navbar-nav .nav-link, .navbar-light .navbar-nav .navbar .dropdown-toggle, .navbar .navbar-light .navbar-nav .dropdown-toggle {
        color: rgba(0, 0, 0, 0.5); }
        .navbar-light .navbar-nav .nav-link:focus, .navbar-light .navbar-nav .navbar .dropdown-toggle:focus, .navbar .navbar-light .navbar-nav .dropdown-toggle:focus, .navbar-light .navbar-nav .nav-link:hover, .navbar-light .navbar-nav .navbar .dropdown-toggle:hover, .navbar .navbar-light .navbar-nav .dropdown-toggle:hover {
            color: rgba(0, 0, 0, 0.7); }
        .navbar-light .navbar-nav .nav-link.disabled, .navbar-light .navbar-nav .navbar .disabled.dropdown-toggle, .navbar .navbar-light .navbar-nav .disabled.dropdown-toggle {
            color: rgba(0, 0, 0, 0.3); }

        .navbar-light .navbar-nav .show > .nav-link, .navbar-light .navbar-nav .navbar .show > .dropdown-toggle, .navbar .navbar-light .navbar-nav .show > .dropdown-toggle,
        .navbar-light .navbar-nav .active > .nav-link,
        .navbar-light .navbar-nav .navbar .active > .dropdown-toggle, .navbar
        .navbar-light .navbar-nav .active > .dropdown-toggle,
        .navbar-light .navbar-nav .nav-link.show,
        .navbar-light .navbar-nav .navbar .show.dropdown-toggle, .navbar
        .navbar-light .navbar-nav .show.dropdown-toggle,
        .navbar-light .navbar-nav .nav-link.active,
        .navbar-light .navbar-nav .navbar .active.dropdown-toggle, .navbar
        .navbar-light .navbar-nav .active.dropdown-toggle {
        color: rgba(0, 0, 0, 0.9); }

        .navbar-light .navbar-toggler {
        color: rgba(0, 0, 0, 0.5);
        border-color: rgba(0, 0, 0, 0.1); }

        .navbar-light .navbar-toggler-icon {
        background-image: url("data:image/svg+xml;charset=utf8,%3Csvg viewBox='0 0 30 30' xmlns='http://www.w3.org/2000/svg'%3E%3Cpath stroke='rgba(0, 0, 0, 0.5)' stroke-width='2' stroke-linecap='round' stroke-miterlimit='10' d='M4 7h22M4 15h22M4 23h22'/%3E%3C/svg%3E"); }

        .navbar-light .navbar-text {
        color: rgba(0, 0, 0, 0.5); }

        .navbar-dark .navbar-brand {
        color: white; }
        .navbar-dark .navbar-brand:focus, .navbar-dark .navbar-brand:hover {
            color: white; }

        .navbar-dark .navbar-nav .nav-link, .navbar-dark .navbar-nav .navbar .dropdown-toggle, .navbar .navbar-dark .navbar-nav .dropdown-toggle {
        color: rgba(255, 255, 255, 0.5); }
        .navbar-dark .navbar-nav .nav-link:focus, .navbar-dark .navbar-nav .navbar .dropdown-toggle:focus, .navbar .navbar-dark .navbar-nav .dropdown-toggle:focus, .navbar-dark .navbar-nav .nav-link:hover, .navbar-dark .navbar-nav .navbar .dropdown-toggle:hover, .navbar .navbar-dark .navbar-nav .dropdown-toggle:hover {
            color: rgba(255, 255, 255, 0.75); }
        .navbar-dark .navbar-nav .nav-link.disabled, .navbar-dark .navbar-nav .navbar .disabled.dropdown-toggle, .navbar .navbar-dark .navbar-nav .disabled.dropdown-toggle {
            color: rgba(255, 255, 255, 0.25); }

        .navbar-dark .navbar-nav .show > .nav-link, .navbar-dark .navbar-nav .navbar .show > .dropdown-toggle, .navbar .navbar-dark .navbar-nav .show > .dropdown-toggle,
        .navbar-dark .navbar-nav .active > .nav-link,
        .navbar-dark .navbar-nav .navbar .active > .dropdown-toggle, .navbar
        .navbar-dark .navbar-nav .active > .dropdown-toggle,
        .navbar-dark .navbar-nav .nav-link.show,
        .navbar-dark .navbar-nav .navbar .show.dropdown-toggle, .navbar
        .navbar-dark .navbar-nav .show.dropdown-toggle,
        .navbar-dark .navbar-nav .nav-link.active,
        .navbar-dark .navbar-nav .navbar .active.dropdown-toggle, .navbar
        .navbar-dark .navbar-nav .active.dropdown-toggle {
        color: white; }

        .navbar-dark .navbar-toggler {
        color: rgba(255, 255, 255, 0.5);
        border-color: rgba(255, 255, 255, 0.1); }

        .navbar-dark .navbar-toggler-icon {
        background-image: url("data:image/svg+xml;charset=utf8,%3Csvg viewBox='0 0 30 30' xmlns='http://www.w3.org/2000/svg'%3E%3Cpath stroke='rgba(255, 255, 255, 0.5)' stroke-width='2' stroke-linecap='round' stroke-miterlimit='10' d='M4 7h22M4 15h22M4 23h22'/%3E%3C/svg%3E"); }

        .navbar-dark .navbar-text {
        color: rgba(255, 255, 255, 0.5); }

        .card {
        position: relative;
        display: -ms-flexbox;
        display: flex;
        -ms-flex-direction: column;
            flex-direction: column;
        min-width: 0;
        word-wrap: break-word;
        background-color: #fff;
        background-clip: border-box;
        border: 1px solid #c2cfd6; }

        .card-body, .card-block {
        -ms-flex: 1 1 auto;
            flex: 1 1 auto;
        padding: 1.25rem; }

        .card-title {
        margin-bottom: 0.75rem; }

        .card-subtitle {
        margin-top: -0.375rem;
        margin-bottom: 0; }

        .card-text:last-child {
        margin-bottom: 0; }

        .card-link:hover {
        text-decoration: none; }

        .card-link + .card-link {
        margin-left: 1.25rem; }

        .card-header {
        padding: 0.75rem 1.25rem;
        margin-bottom: 0;
        background-color: #f0f3f5;
        border-bottom: 1px solid #c2cfd6; }

        .card-footer {
        padding: 0.75rem 1.25rem;
        background-color: #f0f3f5;
        border-top: 1px solid #c2cfd6; }

        .card-header-tabs {
        margin-right: -0.625rem;
        margin-bottom: -0.75rem;
        margin-left: -0.625rem;
        border-bottom: 0; }

        .card-header-pills {
        margin-right: -0.625rem;
        margin-left: -0.625rem; }

        .card-img-overlay {
        position: absolute;
        top: 0;
        right: 0;
        bottom: 0;
        left: 0;
        padding: 1.25rem; }

        .card-img {
        width: 100%; }

        .card-img-top {
        width: 100%; }

        .card-img-bottom {
        width: 100%; }

        @media (min-width: 576px) {
        .card-deck {
            display: -ms-flexbox;
            display: flex;
            -ms-flex-flow: row wrap;
                flex-flow: row wrap;
            margin-right: -15px;
            margin-left: -15px; }
            .card-deck .card {
            display: -ms-flexbox;
            display: flex;
            -ms-flex: 1 0 0%;
                flex: 1 0 0%;
            -ms-flex-direction: column;
                flex-direction: column;
            margin-right: 15px;
            margin-left: 15px; } }

        @media (min-width: 576px) {
        .card-group {
            display: -ms-flexbox;
            display: flex;
            -ms-flex-flow: row wrap;
                flex-flow: row wrap; }
            .card-group .card {
            -ms-flex: 1 0 0%;
                flex: 1 0 0%; }
            .card-group .card + .card {
                margin-left: 0;
                border-left: 0; } }

        .card-columns .card {
        margin-bottom: 0.75rem; }

        @media (min-width: 576px) {
        .card-columns {
            -webkit-column-count: 3;
                    column-count: 3;
            -webkit-column-gap: 1.25rem;
                    column-gap: 1.25rem; }
            .card-columns .card {
            display: inline-block;
            width: 100%; } }

        .breadcrumb {
        padding: 0.75rem 1rem;
        margin-bottom: 1rem;
        list-style: none;
        background-color: #fff; }
        .breadcrumb::after {
            display: block;
            clear: both;
            content: ""; }

        .breadcrumb-item {
        float: left; }
        .breadcrumb-item + .breadcrumb-item::before {
            display: inline-block;
            padding-right: 0.5rem;
            padding-left: 0.5rem;
            color: #536c79;
            content: "/"; }
        .breadcrumb-item + .breadcrumb-item:hover::before {
            text-decoration: underline; }
        .breadcrumb-item + .breadcrumb-item:hover::before {
            text-decoration: none; }
        .breadcrumb-item.active {
            color: #536c79; }

        .pagination {
        display: -ms-flexbox;
        display: flex;
        padding-left: 0;
        list-style: none; }

        .page-item:first-child .page-link, .pagination-datatables li:first-child .page-link, .pagination li:first-child .page-link, .page-item:first-child .pagination-datatables li a, .pagination-datatables li .page-item:first-child a, .pagination-datatables li:first-child a, .page-item:first-child .pagination li a, .pagination li .page-item:first-child a, .pagination li:first-child a {
        margin-left: 0; }

        .page-item.active .page-link, .pagination-datatables li.active .page-link, .pagination li.active .page-link, .page-item.active .pagination-datatables li a, .pagination-datatables li .page-item.active a, .pagination-datatables li.active a, .page-item.active .pagination li a, .pagination li .page-item.active a, .pagination li.active a {
        z-index: 2;
        color: #fff;
        background-color: #20a8d8;
        border-color: #20a8d8; }

        .page-item.disabled .page-link, .pagination-datatables li.disabled .page-link, .pagination li.disabled .page-link, .page-item.disabled .pagination-datatables li a, .pagination-datatables li .page-item.disabled a, .pagination-datatables li.disabled a, .page-item.disabled .pagination li a, .pagination li .page-item.disabled a, .pagination li.disabled a {
        color: #536c79;
        pointer-events: none;
        background-color: #fff;
        border-color: #ddd; }

        .page-link, .pagination-datatables li a, .pagination li a {
        position: relative;
        display: block;
        padding: 0.5rem 0.75rem;
        margin-left: -1px;
        line-height: 1.25;
        color: #20a8d8;
        background-color: #fff;
        border: 1px solid #ddd; }
        .page-link:focus, .pagination-datatables li a:focus, .pagination li a:focus, .page-link:hover, .pagination-datatables li a:hover, .pagination li a:hover {
            color: #167495;
            text-decoration: none;
            background-color: #c2cfd6;
            border-color: #ddd; }

        .pagination-lg .page-link, .pagination-lg .pagination-datatables li a, .pagination-datatables li .pagination-lg a, .pagination-lg .pagination li a, .pagination li .pagination-lg a {
        padding: 0.75rem 1.5rem;
        font-size: 1.25rem;
        line-height: 1.5; }

        .pagination-sm .page-link, .pagination-sm .pagination-datatables li a, .pagination-datatables li .pagination-sm a, .pagination-sm .pagination li a, .pagination li .pagination-sm a {
        padding: 0.25rem 0.5rem;
        font-size: 0.875rem;
        line-height: 1.5; }

        .badge {
        display: inline-block;
        padding: 0.25em 0.4em;
        font-size: 75%;
        font-weight: bold;
        line-height: 1;
        color: #fff;
        text-align: center;
        white-space: nowrap;
        vertical-align: baseline; }
        .badge:empty {
            display: none; }

        .btn .badge {
        position: relative;
        top: -1px; }

        .badge-pill {
        padding-right: 0.6em;
        padding-left: 0.6em; }

        .badge-primary {
        color: #fff;
        background-color: #20a8d8; }
        .badge-primary[href]:focus, .badge-primary[href]:hover {
            color: #fff;
            text-decoration: none;
            background-color: #1985ac; }

        .badge-secondary {
        color: #111;
        background-color: #a4b7c1; }
        .badge-secondary[href]:focus, .badge-secondary[href]:hover {
            color: #111;
            text-decoration: none;
            background-color: #869fac; }

        .badge-success {
        color: #fff;
        background-color: #4dbd74; }
        .badge-success[href]:focus, .badge-success[href]:hover {
            color: #fff;
            text-decoration: none;
            background-color: #3a9d5d; }

        .badge-info {
        color: #111;
        background-color: #63c2de; }
        .badge-info[href]:focus, .badge-info[href]:hover {
            color: #111;
            text-decoration: none;
            background-color: #39b2d5; }

        .badge-warning {
        color: #111;
        background-color: #ffc107; }
        .badge-warning[href]:focus, .badge-warning[href]:hover {
            color: #111;
            text-decoration: none;
            background-color: #d39e00; }

        .badge-danger {
        color: #fff;
        background-color: #f86c6b; }
        .badge-danger[href]:focus, .badge-danger[href]:hover {
            color: #fff;
            text-decoration: none;
            background-color: #f63c3a; }

        .badge-light {
        color: #111;
        background-color: #f0f3f5; }
        .badge-light[href]:focus, .badge-light[href]:hover {
            color: #111;
            text-decoration: none;
            background-color: #d1dbe1; }

        .badge-dark {
        color: #fff;
        background-color: #29363d; }
        .badge-dark[href]:focus, .badge-dark[href]:hover {
            color: #fff;
            text-decoration: none;
            background-color: #151b1f; }

        .jumbotron {
        padding: 2rem 1rem;
        margin-bottom: 2rem;
        background-color: #c2cfd6; }
        @media (min-width: 576px) {
            .jumbotron {
            padding: 4rem 2rem; } }

        .jumbotron-fluid {
        padding-right: 0;
        padding-left: 0; }

        .alert {
        padding: 0.75rem 1.25rem;
        margin-bottom: 1rem;
        border: 1px solid transparent; }

        .alert-heading {
        color: inherit; }

        .alert-link {
        font-weight: bold; }

        .alert-dismissible .close {
        position: relative;
        top: -0.75rem;
        right: -1.25rem;
        padding: 0.75rem 1.25rem;
        color: inherit; }

        .alert-primary {
        color: #115770;
        background-color: #d2eef7;
        border-color: #c1e7f4; }
        .alert-primary hr {
            border-top-color: #abdff0; }
        .alert-primary .alert-link {
            color: #0a3544; }

        .alert-secondary {
        color: #555f64;
        background-color: #edf1f3;
        border-color: #e6ebee; }
        .alert-secondary hr {
            border-top-color: #d7dfe4; }
        .alert-secondary .alert-link {
            color: #3e4548; }

        .alert-success {
        color: #28623c;
        background-color: #dbf2e3;
        border-color: #cdedd8; }
        .alert-success hr {
            border-top-color: #bae6c9; }
        .alert-success .alert-link {
            color: #193e26; }

        .alert-info {
        color: #336573;
        background-color: #e0f3f8;
        border-color: #d3eef6; }
        .alert-info hr {
            border-top-color: #bee6f2; }
        .alert-info .alert-link {
            color: #234650; }

        .alert-warning {
        color: #856404;
        background-color: #fff3cd;
        border-color: #ffeeba; }
        .alert-warning hr {
            border-top-color: #ffe8a1; }
        .alert-warning .alert-link {
            color: #533f03; }

        .alert-danger {
        color: #813838;
        background-color: #fee2e1;
        border-color: #fdd6d6; }
        .alert-danger hr {
            border-top-color: #fcbebe; }
        .alert-danger .alert-link {
            color: #5d2929; }

        .alert-light {
        color: #7d7e7f;
        background-color: #fcfdfd;
        border-color: #fbfcfc; }
        .alert-light hr {
            border-top-color: #ecf1f1; }
        .alert-light .alert-link {
            color: #646565; }

        .alert-dark {
        color: #151c20;
        background-color: #d4d7d8;
        border-color: #c3c7c9; }
        .alert-dark hr {
            border-top-color: #b6babd; }
        .alert-dark .alert-link {
            color: #010101; }

        @-webkit-keyframes progress-bar-stripes {
        from {
            background-position: 1rem 0; }
        to {
            background-position: 0 0; } }

        @keyframes progress-bar-stripes {
        from {
            background-position: 1rem 0; }
        to {
            background-position: 0 0; } }

        .progress {
        display: -ms-flexbox;
        display: flex;
        overflow: hidden;
        font-size: 0.75rem;
        line-height: 1rem;
        text-align: center;
        background-color: #f0f3f5; }

        .progress-bar {
        height: 1rem;
        line-height: 1rem;
        color: #fff;
        background-color: #20a8d8;
        transition: width 0.6s ease; }

        .progress-bar-striped {
        background-image: linear-gradient(45deg, rgba(255, 255, 255, 0.15) 25%, transparent 25%, transparent 50%, rgba(255, 255, 255, 0.15) 50%, rgba(255, 255, 255, 0.15) 75%, transparent 75%, transparent);
        background-size: 1rem 1rem; }

        .progress-bar-animated {
        -webkit-animation: progress-bar-stripes 1s linear infinite;
                animation: progress-bar-stripes 1s linear infinite; }

        .media {
        display: -ms-flexbox;
        display: flex;
        -ms-flex-align: start;
            align-items: flex-start; }

        .media-body {
        -ms-flex: 1;
            flex: 1; }

        .list-group {
        display: -ms-flexbox;
        display: flex;
        -ms-flex-direction: column;
            flex-direction: column;
        padding-left: 0;
        margin-bottom: 0; }

        .list-group-item-action {
        width: 100%;
        color: #3e515b;
        text-align: inherit; }
        .list-group-item-action:focus, .list-group-item-action:hover {
            color: #3e515b;
            text-decoration: none;
            background-color: #f0f3f5; }
        .list-group-item-action:active {
            color: #151b1e;
            background-color: #c2cfd6; }

        .list-group-item {
        position: relative;
        display: block;
        padding: 0.75rem 1.25rem;
        margin-bottom: -1px;
        background-color: #fff;
        border: 1px solid rgba(0, 0, 0, 0.125); }
        .list-group-item:last-child {
            margin-bottom: 0; }
        .list-group-item:focus, .list-group-item:hover {
            text-decoration: none; }
        .list-group-item.disabled, .list-group-item:disabled {
            color: #536c79;
            background-color: #fff; }
        .list-group-item.active {
            z-index: 2;
            color: #fff;
            background-color: #20a8d8;
            border-color: #20a8d8; }

        .list-group-flush .list-group-item {
        border-right: 0;
        border-left: 0;
        border-radius: 0; }

        .list-group-flush:first-child .list-group-item:first-child {
        border-top: 0; }

        .list-group-flush:last-child .list-group-item:last-child {
        border-bottom: 0; }

        .list-group-item-primary {
        color: #115770;
        background-color: #c1e7f4; }

        a.list-group-item-primary,
        button.list-group-item-primary {
        color: #115770; }
        a.list-group-item-primary:focus, a.list-group-item-primary:hover,
        button.list-group-item-primary:focus,
        button.list-group-item-primary:hover {
            color: #115770;
            background-color: #abdff0; }
        a.list-group-item-primary.active,
        button.list-group-item-primary.active {
            color: #fff;
            background-color: #115770;
            border-color: #115770; }

        .list-group-item-secondary {
        color: #555f64;
        background-color: #e6ebee; }

        a.list-group-item-secondary,
        button.list-group-item-secondary {
        color: #555f64; }
        a.list-group-item-secondary:focus, a.list-group-item-secondary:hover,
        button.list-group-item-secondary:focus,
        button.list-group-item-secondary:hover {
            color: #555f64;
            background-color: #d7dfe4; }
        a.list-group-item-secondary.active,
        button.list-group-item-secondary.active {
            color: #fff;
            background-color: #555f64;
            border-color: #555f64; }

        .list-group-item-success {
        color: #28623c;
        background-color: #cdedd8; }

        a.list-group-item-success,
        button.list-group-item-success {
        color: #28623c; }
        a.list-group-item-success:focus, a.list-group-item-success:hover,
        button.list-group-item-success:focus,
        button.list-group-item-success:hover {
            color: #28623c;
            background-color: #bae6c9; }
        a.list-group-item-success.active,
        button.list-group-item-success.active {
            color: #fff;
            background-color: #28623c;
            border-color: #28623c; }

        .list-group-item-info {
        color: #336573;
        background-color: #d3eef6; }

        a.list-group-item-info,
        button.list-group-item-info {
        color: #336573; }
        a.list-group-item-info:focus, a.list-group-item-info:hover,
        button.list-group-item-info:focus,
        button.list-group-item-info:hover {
            color: #336573;
            background-color: #bee6f2; }
        a.list-group-item-info.active,
        button.list-group-item-info.active {
            color: #fff;
            background-color: #336573;
            border-color: #336573; }

        .list-group-item-warning {
        color: #856404;
        background-color: #ffeeba; }

        a.list-group-item-warning,
        button.list-group-item-warning {
        color: #856404; }
        a.list-group-item-warning:focus, a.list-group-item-warning:hover,
        button.list-group-item-warning:focus,
        button.list-group-item-warning:hover {
            color: #856404;
            background-color: #ffe8a1; }
        a.list-group-item-warning.active,
        button.list-group-item-warning.active {
            color: #fff;
            background-color: #856404;
            border-color: #856404; }

        .list-group-item-danger {
        color: #813838;
        background-color: #fdd6d6; }

        a.list-group-item-danger,
        button.list-group-item-danger {
        color: #813838; }
        a.list-group-item-danger:focus, a.list-group-item-danger:hover,
        button.list-group-item-danger:focus,
        button.list-group-item-danger:hover {
            color: #813838;
            background-color: #fcbebe; }
        a.list-group-item-danger.active,
        button.list-group-item-danger.active {
            color: #fff;
            background-color: #813838;
            border-color: #813838; }

        .list-group-item-light {
        color: #7d7e7f;
        background-color: #fbfcfc; }

        a.list-group-item-light,
        button.list-group-item-light {
        color: #7d7e7f; }
        a.list-group-item-light:focus, a.list-group-item-light:hover,
        button.list-group-item-light:focus,
        button.list-group-item-light:hover {
            color: #7d7e7f;
            background-color: #ecf1f1; }
        a.list-group-item-light.active,
        button.list-group-item-light.active {
            color: #fff;
            background-color: #7d7e7f;
            border-color: #7d7e7f; }

        .list-group-item-dark {
        color: #151c20;
        background-color: #c3c7c9; }

        a.list-group-item-dark,
        button.list-group-item-dark {
        color: #151c20; }
        a.list-group-item-dark:focus, a.list-group-item-dark:hover,
        button.list-group-item-dark:focus,
        button.list-group-item-dark:hover {
            color: #151c20;
            background-color: #b6babd; }
        a.list-group-item-dark.active,
        button.list-group-item-dark.active {
            color: #fff;
            background-color: #151c20;
            border-color: #151c20; }

        .close {
        float: right;
        font-size: 1.3125rem;
        font-weight: bold;
        line-height: 1;
        color: #000;
        text-shadow: 0 1px 0 #fff;
        opacity: .5; }
        .close:focus, .close:hover {
            color: #000;
            text-decoration: none;
            opacity: .75; }

        button.close {
        padding: 0;
        background: transparent;
        border: 0;
        -webkit-appearance: none; }

        .modal-open {
        overflow: hidden; }

        .modal {
        position: fixed;
        top: 0;
        right: 0;
        bottom: 0;
        left: 0;
        z-index: 1050;
        display: none;
        overflow: hidden;
        outline: 0; }
        .modal.fade .modal-dialog {
            transition: -webkit-transform 0.3s ease-out;
            transition: transform 0.3s ease-out;
            transition: transform 0.3s ease-out, -webkit-transform 0.3s ease-out;
            -webkit-transform: translate(0, -25%);
                    transform: translate(0, -25%); }
        .modal.show .modal-dialog {
            -webkit-transform: translate(0, 0);
                    transform: translate(0, 0); }

        .modal-open .modal {
        overflow-x: hidden;
        overflow-y: auto; }

        .modal-dialog {
        position: relative;
        width: auto;
        margin: 10px; }

        .modal-content {
        position: relative;
        display: -ms-flexbox;
        display: flex;
        -ms-flex-direction: column;
            flex-direction: column;
        background-color: #fff;
        background-clip: padding-box;
        border: 1px solid rgba(0, 0, 0, 0.2);
        outline: 0; }

        .modal-backdrop {
        position: fixed;
        top: 0;
        right: 0;
        bottom: 0;
        left: 0;
        z-index: 1040;
        background-color: #000; }
        .modal-backdrop.fade {
            opacity: 0; }
        .modal-backdrop.show {
            opacity: 0.5; }

        .modal-header {
        display: -ms-flexbox;
        display: flex;
        -ms-flex-align: center;
            align-items: center;
        -ms-flex-pack: justify;
            justify-content: space-between;
        padding: 15px;
        border-bottom: 1px solid #c2cfd6; }

        .modal-title {
        margin-bottom: 0;
        line-height: 1.5; }

        .modal-body {
        position: relative;
        -ms-flex: 1 1 auto;
            flex: 1 1 auto;
        padding: 15px; }

        .modal-footer {
        display: -ms-flexbox;
        display: flex;
        -ms-flex-align: center;
            align-items: center;
        -ms-flex-pack: end;
            justify-content: flex-end;
        padding: 15px;
        border-top: 1px solid #c2cfd6; }
        .modal-footer > :not(:first-child) {
            margin-left: .25rem; }
        .modal-footer > :not(:last-child) {
            margin-right: .25rem; }

        .modal-scrollbar-measure {
        position: absolute;
        top: -9999px;
        width: 50px;
        height: 50px;
        overflow: scroll; }

        @media (min-width: 576px) {
        .modal-dialog {
            max-width: 500px;
            margin: 30px auto; }
        .modal-sm {
            max-width: 300px; } }

        @media (min-width: 992px) {
        .modal-lg {
            max-width: 800px; } }

        .tooltip {
        position: absolute;
        z-index: 1070;
        display: block;
        margin: 0;
        font-family: -apple-system, BlinkMacSystemFont, "Segoe UI", Roboto, "Helvetica Neue", Arial, sans-serif;
        font-style: normal;
        font-weight: normal;
        line-height: 1.5;
        text-align: left;
        text-align: start;
        text-decoration: none;
        text-shadow: none;
        text-transform: none;
        letter-spacing: normal;
        word-break: normal;
        word-spacing: normal;
        white-space: normal;
        line-break: auto;
        font-size: 0.875rem;
        word-wrap: break-word;
        opacity: 0; }
        .tooltip.show {
            opacity: 0.9; }
        .tooltip .arrow {
            position: absolute;
            display: block;
            width: 5px;
            height: 5px; }
        .tooltip.bs-tooltip-top, .tooltip.bs-tooltip-auto[x-placement^="top"] {
            padding: 5px 0; }
            .tooltip.bs-tooltip-top .arrow, .tooltip.bs-tooltip-auto[x-placement^="top"] .arrow {
            bottom: 0; }
            .tooltip.bs-tooltip-top .arrow::before, .tooltip.bs-tooltip-auto[x-placement^="top"] .arrow::before {
            margin-left: -3px;
            content: "";
            border-width: 5px 5px 0;
            border-top-color: #000; }
        .tooltip.bs-tooltip-right, .tooltip.bs-tooltip-auto[x-placement^="right"] {
            padding: 0 5px; }
            .tooltip.bs-tooltip-right .arrow, .tooltip.bs-tooltip-auto[x-placement^="right"] .arrow {
            left: 0; }
            .tooltip.bs-tooltip-right .arrow::before, .tooltip.bs-tooltip-auto[x-placement^="right"] .arrow::before {
            margin-top: -3px;
            content: "";
            border-width: 5px 5px 5px 0;
            border-right-color: #000; }
        .tooltip.bs-tooltip-bottom, .tooltip.bs-tooltip-auto[x-placement^="bottom"] {
            padding: 5px 0; }
            .tooltip.bs-tooltip-bottom .arrow, .tooltip.bs-tooltip-auto[x-placement^="bottom"] .arrow {
            top: 0; }
            .tooltip.bs-tooltip-bottom .arrow::before, .tooltip.bs-tooltip-auto[x-placement^="bottom"] .arrow::before {
            margin-left: -3px;
            content: "";
            border-width: 0 5px 5px;
            border-bottom-color: #000; }
        .tooltip.bs-tooltip-left, .tooltip.bs-tooltip-auto[x-placement^="left"] {
            padding: 0 5px; }
            .tooltip.bs-tooltip-left .arrow, .tooltip.bs-tooltip-auto[x-placement^="left"] .arrow {
            right: 0; }
            .tooltip.bs-tooltip-left .arrow::before, .tooltip.bs-tooltip-auto[x-placement^="left"] .arrow::before {
            right: 0;
            margin-top: -3px;
            content: "";
            border-width: 5px 0 5px 5px;
            border-left-color: #000; }
        .tooltip .arrow::before {
            position: absolute;
            border-color: transparent;
            border-style: solid; }

        .tooltip-inner {
        max-width: 200px;
        padding: 3px 8px;
        color: #fff;
        text-align: center;
        background-color: #000; }

        .popover {
        position: absolute;
        top: 0;
        left: 0;
        z-index: 1060;
        display: block;
        max-width: 276px;
        padding: 1px;
        font-family: -apple-system, BlinkMacSystemFont, "Segoe UI", Roboto, "Helvetica Neue", Arial, sans-serif;
        font-style: normal;
        font-weight: normal;
        line-height: 1.5;
        text-align: left;
        text-align: start;
        text-decoration: none;
        text-shadow: none;
        text-transform: none;
        letter-spacing: normal;
        word-break: normal;
        word-spacing: normal;
        white-space: normal;
        line-break: auto;
        font-size: 0.875rem;
        word-wrap: break-word;
        background-color: #fff;
        background-clip: padding-box;
        border: 1px solid rgba(0, 0, 0, 0.2); }
        .popover .arrow {
            position: absolute;
            display: block;
            width: 10px;
            height: 5px; }
        .popover .arrow::before,
        .popover .arrow::after {
            position: absolute;
            display: block;
            border-color: transparent;
            border-style: solid; }
        .popover .arrow::before {
            content: "";
            border-width: 11px; }
        .popover .arrow::after {
            content: "";
            border-width: 11px; }
        .popover.bs-popover-top, .popover.bs-popover-auto[x-placement^="top"] {
            margin-bottom: 10px; }
            .popover.bs-popover-top .arrow, .popover.bs-popover-auto[x-placement^="top"] .arrow {
            bottom: 0; }
            .popover.bs-popover-top .arrow::before, .popover.bs-popover-auto[x-placement^="top"] .arrow::before,
            .popover.bs-popover-top .arrow::after, .popover.bs-popover-auto[x-placement^="top"] .arrow::after {
            border-bottom-width: 0; }
            .popover.bs-popover-top .arrow::before, .popover.bs-popover-auto[x-placement^="top"] .arrow::before {
            bottom: -11px;
            margin-left: -6px;
            border-top-color: rgba(0, 0, 0, 0.25); }
            .popover.bs-popover-top .arrow::after, .popover.bs-popover-auto[x-placement^="top"] .arrow::after {
            bottom: -10px;
            margin-left: -6px;
            border-top-color: #fff; }
        .popover.bs-popover-right, .popover.bs-popover-auto[x-placement^="right"] {
            margin-left: 10px; }
            .popover.bs-popover-right .arrow, .popover.bs-popover-auto[x-placement^="right"] .arrow {
            left: 0; }
            .popover.bs-popover-right .arrow::before, .popover.bs-popover-auto[x-placement^="right"] .arrow::before,
            .popover.bs-popover-right .arrow::after, .popover.bs-popover-auto[x-placement^="right"] .arrow::after {
            margin-top: -8px;
            border-left-width: 0; }
            .popover.bs-popover-right .arrow::before, .popover.bs-popover-auto[x-placement^="right"] .arrow::before {
            left: -11px;
            border-right-color: rgba(0, 0, 0, 0.25); }
            .popover.bs-popover-right .arrow::after, .popover.bs-popover-auto[x-placement^="right"] .arrow::after {
            left: -10px;
            border-right-color: #fff; }
        .popover.bs-popover-bottom, .popover.bs-popover-auto[x-placement^="bottom"] {
            margin-top: 10px; }
            .popover.bs-popover-bottom .arrow, .popover.bs-popover-auto[x-placement^="bottom"] .arrow {
            top: 0; }
            .popover.bs-popover-bottom .arrow::before, .popover.bs-popover-auto[x-placement^="bottom"] .arrow::before,
            .popover.bs-popover-bottom .arrow::after, .popover.bs-popover-auto[x-placement^="bottom"] .arrow::after {
            margin-left: -7px;
            border-top-width: 0; }
            .popover.bs-popover-bottom .arrow::before, .popover.bs-popover-auto[x-placement^="bottom"] .arrow::before {
            top: -11px;
            border-bottom-color: rgba(0, 0, 0, 0.25); }
            .popover.bs-popover-bottom .arrow::after, .popover.bs-popover-auto[x-placement^="bottom"] .arrow::after {
            top: -10px;
            border-bottom-color: #fff; }
            .popover.bs-popover-bottom .popover-header::before, .popover.bs-popover-auto[x-placement^="bottom"] .popover-header::before {
            position: absolute;
            top: 0;
            left: 50%;
            display: block;
            width: 20px;
            margin-left: -10px;
            content: "";
            border-bottom: 1px solid #f7f7f7; }
        .popover.bs-popover-left, .popover.bs-popover-auto[x-placement^="left"] {
            margin-right: 10px; }
            .popover.bs-popover-left .arrow, .popover.bs-popover-auto[x-placement^="left"] .arrow {
            right: 0; }
            .popover.bs-popover-left .arrow::before, .popover.bs-popover-auto[x-placement^="left"] .arrow::before,
            .popover.bs-popover-left .arrow::after, .popover.bs-popover-auto[x-placement^="left"] .arrow::after {
            margin-top: -8px;
            border-right-width: 0; }
            .popover.bs-popover-left .arrow::before, .popover.bs-popover-auto[x-placement^="left"] .arrow::before {
            right: -11px;
            border-left-color: rgba(0, 0, 0, 0.25); }
            .popover.bs-popover-left .arrow::after, .popover.bs-popover-auto[x-placement^="left"] .arrow::after {
            right: -10px;
            border-left-color: #fff; }

        .popover-header {
        padding: 8px 14px;
        margin-bottom: 0;
        font-size: 0.875rem;
        color: inherit;
        background-color: #f7f7f7;
        border-bottom: 1px solid #ebebeb; }
        .popover-header:empty {
            display: none; }

        .popover-body {
        padding: 9px 14px;
        color: #151b1e; }

        .carousel {
        position: relative; }

        .carousel-inner {
        position: relative;
        width: 100%;
        overflow: hidden; }

        .carousel-item {
        position: relative;
        display: none;
        -ms-flex-align: center;
            align-items: center;
        width: 100%;
        transition: -webkit-transform 0.6s ease;
        transition: transform 0.6s ease;
        transition: transform 0.6s ease, -webkit-transform 0.6s ease;
        -webkit-backface-visibility: hidden;
                backface-visibility: hidden;
        -webkit-perspective: 1000px;
                perspective: 1000px; }

        .carousel-item.active,
        .carousel-item-next,
        .carousel-item-prev {
        display: block; }

        .carousel-item-next,
        .carousel-item-prev {
        position: absolute;
        top: 0; }

        .carousel-item-next.carousel-item-left,
        .carousel-item-prev.carousel-item-right {
        -webkit-transform: translateX(0);
                transform: translateX(0); }
        @supports ((-webkit-transform-style: preserve-3d) or (transform-style: preserve-3d)) {
            .carousel-item-next.carousel-item-left,
            .carousel-item-prev.carousel-item-right {
            -webkit-transform: translate3d(0, 0, 0);
                    transform: translate3d(0, 0, 0); } }

        .carousel-item-next,
        .active.carousel-item-right {
        -webkit-transform: translateX(100%);
                transform: translateX(100%); }
        @supports ((-webkit-transform-style: preserve-3d) or (transform-style: preserve-3d)) {
            .carousel-item-next,
            .active.carousel-item-right {
            -webkit-transform: translate3d(100%, 0, 0);
                    transform: translate3d(100%, 0, 0); } }

        .carousel-item-prev,
        .active.carousel-item-left {
        -webkit-transform: translateX(-100%);
                transform: translateX(-100%); }
        @supports ((-webkit-transform-style: preserve-3d) or (transform-style: preserve-3d)) {
            .carousel-item-prev,
            .active.carousel-item-left {
            -webkit-transform: translate3d(-100%, 0, 0);
                    transform: translate3d(-100%, 0, 0); } }

        .carousel-control-prev,
        .carousel-control-next {
        position: absolute;
        top: 0;
        bottom: 0;
        display: -ms-flexbox;
        display: flex;
        -ms-flex-align: center;
            align-items: center;
        -ms-flex-pack: center;
            justify-content: center;
        width: 15%;
        color: #fff;
        text-align: center;
        opacity: 0.5; }
        .carousel-control-prev:focus, .carousel-control-prev:hover,
        .carousel-control-next:focus,
        .carousel-control-next:hover {
            color: #fff;
            text-decoration: none;
            outline: 0;
            opacity: .9; }

        .carousel-control-prev {
        left: 0; }

        .carousel-control-next {
        right: 0; }

        .carousel-control-prev-icon,
        .carousel-control-next-icon {
        display: inline-block;
        width: 20px;
        height: 20px;
        background: transparent no-repeat center center;
        background-size: 100% 100%; }

        .carousel-control-prev-icon {
        background-image: url("data:image/svg+xml;charset=utf8,%3Csvg xmlns='http://www.w3.org/2000/svg' fill='%23fff' viewBox='0 0 8 8'%3E%3Cpath d='M4 0l-4 4 4 4 1.5-1.5-2.5-2.5 2.5-2.5-1.5-1.5z'/%3E%3C/svg%3E"); }

        .carousel-control-next-icon {
        background-image: url("data:image/svg+xml;charset=utf8,%3Csvg xmlns='http://www.w3.org/2000/svg' fill='%23fff' viewBox='0 0 8 8'%3E%3Cpath d='M1.5 0l-1.5 1.5 2.5 2.5-2.5 2.5 1.5 1.5 4-4-4-4z'/%3E%3C/svg%3E"); }

        .carousel-indicators {
        position: absolute;
        right: 0;
        bottom: 10px;
        left: 0;
        z-index: 15;
        display: -ms-flexbox;
        display: flex;
        -ms-flex-pack: center;
            justify-content: center;
        padding-left: 0;
        margin-right: 15%;
        margin-left: 15%;
        list-style: none; }
        .carousel-indicators li {
            position: relative;
            -ms-flex: 0 1 auto;
                flex: 0 1 auto;
            width: 30px;
            height: 3px;
            margin-right: 3px;
            margin-left: 3px;
            text-indent: -999px;
            background-color: rgba(255, 255, 255, 0.5); }
            .carousel-indicators li::before {
            position: absolute;
            top: -10px;
            left: 0;
            display: inline-block;
            width: 100%;
            height: 10px;
            content: ""; }
            .carousel-indicators li::after {
            position: absolute;
            bottom: -10px;
            left: 0;
            display: inline-block;
            width: 100%;
            height: 10px;
            content: ""; }
        .carousel-indicators .active {
            background-color: #fff; }

        .carousel-caption {
        position: absolute;
        right: 15%;
        bottom: 20px;
        left: 15%;
        z-index: 10;
        padding-top: 20px;
        padding-bottom: 20px;
        color: #fff;
        text-align: center; }

        .align-baseline {
        vertical-align: baseline !important; }

        .align-top {
        vertical-align: top !important; }

        .align-middle {
        vertical-align: middle !important; }

        .align-bottom {
        vertical-align: bottom !important; }

        .align-text-bottom {
        vertical-align: text-bottom !important; }

        .align-text-top {
        vertical-align: text-top !important; }

        .bg-primary {
        background-color: #20a8d8 !important; }

        a.bg-primary:focus, a.bg-primary:hover {
        background-color: #1985ac !important; }

        .bg-secondary {
        background-color: #a4b7c1 !important; }

        a.bg-secondary:focus, a.bg-secondary:hover {
        background-color: #869fac !important; }

        .bg-success {
        background-color: #4dbd74 !important; }

        a.bg-success:focus, a.bg-success:hover {
        background-color: #3a9d5d !important; }

        .bg-info {
        background-color: #63c2de !important; }

        a.bg-info:focus, a.bg-info:hover {
        background-color: #39b2d5 !important; }

        .bg-warning {
        background-color: #ffc107 !important; }

        a.bg-warning:focus, a.bg-warning:hover {
        background-color: #d39e00 !important; }

        .bg-danger {
        background-color: #f86c6b !important; }

        a.bg-danger:focus, a.bg-danger:hover {
        background-color: #f63c3a !important; }

        .bg-light {
        background-color: #f0f3f5 !important; }

        a.bg-light:focus, a.bg-light:hover {
        background-color: #d1dbe1 !important; }

        .bg-dark {
        background-color: #29363d !important; }

        a.bg-dark:focus, a.bg-dark:hover {
        background-color: #151b1f !important; }

        .bg-white {
        background-color: #fff !important; }

        .bg-transparent {
        background-color: transparent !important; }

        .border {
        border: 1px solid #c2cfd6 !important; }

        .border-0 {
        border: 0 !important; }

        .border-top-0 {
        border-top: 0 !important; }

        .border-right-0 {
        border-right: 0 !important; }

        .border-bottom-0 {
        border-bottom: 0 !important; }

        .border-left-0 {
        border-left: 0 !important; }

        .border-primary {
        border-color: #20a8d8 !important; }

        .border-secondary {
        border-color: #a4b7c1 !important; }

        .border-success {
        border-color: #4dbd74 !important; }

        .border-info {
        border-color: #63c2de !important; }

        .border-warning {
        border-color: #ffc107 !important; }

        .border-danger {
        border-color: #f86c6b !important; }

        .border-light {
        border-color: #f0f3f5 !important; }

        .border-dark {
        border-color: #29363d !important; }

        .border-white {
        border-color: #fff !important; }

        .rounded {
        border-radius: 0.25rem !important; }

        .rounded-top {
        border-top-left-radius: 0.25rem !important;
        border-top-right-radius: 0.25rem !important; }

        .rounded-right {
        border-top-right-radius: 0.25rem !important;
        border-bottom-right-radius: 0.25rem !important; }

        .rounded-bottom {
        border-bottom-right-radius: 0.25rem !important;
        border-bottom-left-radius: 0.25rem !important; }

        .rounded-left {
        border-top-left-radius: 0.25rem !important;
        border-bottom-left-radius: 0.25rem !important; }

        .rounded-circle {
        border-radius: 50%; }

        .rounded-0 {
        border-radius: 0; }

        .clearfix::after {
        display: block;
        clear: both;
        content: ""; }

        .d-none {
        display: none !important; }

        .d-inline {
        display: inline !important; }

        .d-inline-block {
        display: inline-block !important; }

        .d-block {
        display: block !important; }

        .d-table {
        display: table !important; }

        .d-table-cell {
        display: table-cell !important; }

        .d-flex {
        display: -ms-flexbox !important;
        display: flex !important; }

        .d-inline-flex {
        display: -ms-inline-flexbox !important;
        display: inline-flex !important; }

        @media (min-width: 576px) {
        .d-sm-none {
            display: none !important; }
        .d-sm-inline {
            display: inline !important; }
        .d-sm-inline-block {
            display: inline-block !important; }
        .d-sm-block {
            display: block !important; }
        .d-sm-table {
            display: table !important; }
        .d-sm-table-cell {
            display: table-cell !important; }
        .d-sm-flex {
            display: -ms-flexbox !important;
            display: flex !important; }
        .d-sm-inline-flex {
            display: -ms-inline-flexbox !important;
            display: inline-flex !important; } }

        @media (min-width: 768px) {
        .d-md-none {
            display: none !important; }
        .d-md-inline {
            display: inline !important; }
        .d-md-inline-block {
            display: inline-block !important; }
        .d-md-block {
            display: block !important; }
        .d-md-table {
            display: table !important; }
        .d-md-table-cell {
            display: table-cell !important; }
        .d-md-flex {
            display: -ms-flexbox !important;
            display: flex !important; }
        .d-md-inline-flex {
            display: -ms-inline-flexbox !important;
            display: inline-flex !important; } }

        @media (min-width: 992px) {
        .d-lg-none {
            display: none !important; }
        .d-lg-inline {
            display: inline !important; }
        .d-lg-inline-block {
            display: inline-block !important; }
        .d-lg-block {
            display: block !important; }
        .d-lg-table {
            display: table !important; }
        .d-lg-table-cell {
            display: table-cell !important; }
        .d-lg-flex {
            display: -ms-flexbox !important;
            display: flex !important; }
        .d-lg-inline-flex {
            display: -ms-inline-flexbox !important;
            display: inline-flex !important; } }

        @media (min-width: 1200px) {
        .d-xl-none {
            display: none !important; }
        .d-xl-inline {
            display: inline !important; }
        .d-xl-inline-block {
            display: inline-block !important; }
        .d-xl-block {
            display: block !important; }
        .d-xl-table {
            display: table !important; }
        .d-xl-table-cell {
            display: table-cell !important; }
        .d-xl-flex {
            display: -ms-flexbox !important;
            display: flex !important; }
        .d-xl-inline-flex {
            display: -ms-inline-flexbox !important;
            display: inline-flex !important; } }

        .d-print-block {
        display: none !important; }
        @media print {
            .d-print-block {
            display: block !important; } }

        .d-print-inline {
        display: none !important; }
        @media print {
            .d-print-inline {
            display: inline !important; } }

        .d-print-inline-block {
        display: none !important; }
        @media print {
            .d-print-inline-block {
            display: inline-block !important; } }

        @media print {
        .d-print-none {
            display: none !important; } }

        .embed-responsive {
        position: relative;
        display: block;
        width: 100%;
        padding: 0;
        overflow: hidden; }
        .embed-responsive::before {
            display: block;
            content: ""; }
        .embed-responsive .embed-responsive-item,
        .embed-responsive iframe,
        .embed-responsive embed,
        .embed-responsive object,
        .embed-responsive video {
            position: absolute;
            top: 0;
            bottom: 0;
            left: 0;
            width: 100%;
            height: 100%;
            border: 0; }

        .embed-responsive-21by9::before {
        padding-top: 42.85714%; }

        .embed-responsive-16by9::before {
        padding-top: 56.25%; }

        .embed-responsive-4by3::before {
        padding-top: 75%; }

        .embed-responsive-1by1::before {
        padding-top: 100%; }

        .flex-row {
        -ms-flex-direction: row !important;
            flex-direction: row !important; }

        .flex-column {
        -ms-flex-direction: column !important;
            flex-direction: column !important; }

        .flex-row-reverse {
        -ms-flex-direction: row-reverse !important;
            flex-direction: row-reverse !important; }

        .flex-column-reverse {
        -ms-flex-direction: column-reverse !important;
            flex-direction: column-reverse !important; }

        .flex-wrap {
        -ms-flex-wrap: wrap !important;
            flex-wrap: wrap !important; }

        .flex-nowrap {
        -ms-flex-wrap: nowrap !important;
            flex-wrap: nowrap !important; }

        .flex-wrap-reverse {
        -ms-flex-wrap: wrap-reverse !important;
            flex-wrap: wrap-reverse !important; }

        .justify-content-start {
        -ms-flex-pack: start !important;
            justify-content: flex-start !important; }

        .justify-content-end {
        -ms-flex-pack: end !important;
            justify-content: flex-end !important; }

        .justify-content-center {
        -ms-flex-pack: center !important;
            justify-content: center !important; }

        .justify-content-between {
        -ms-flex-pack: justify !important;
            justify-content: space-between !important; }

        .justify-content-around {
        -ms-flex-pack: distribute !important;
            justify-content: space-around !important; }

        .align-items-start {
        -ms-flex-align: start !important;
            align-items: flex-start !important; }

        .align-items-end {
        -ms-flex-align: end !important;
            align-items: flex-end !important; }

        .align-items-center {
        -ms-flex-align: center !important;
            align-items: center !important; }

        .align-items-baseline {
        -ms-flex-align: baseline !important;
            align-items: baseline !important; }

        .align-items-stretch {
        -ms-flex-align: stretch !important;
            align-items: stretch !important; }

        .align-content-start {
        -ms-flex-line-pack: start !important;
            align-content: flex-start !important; }

        .align-content-end {
        -ms-flex-line-pack: end !important;
            align-content: flex-end !important; }

        .align-content-center {
        -ms-flex-line-pack: center !important;
            align-content: center !important; }

        .align-content-between {
        -ms-flex-line-pack: justify !important;
            align-content: space-between !important; }

        .align-content-around {
        -ms-flex-line-pack: distribute !important;
            align-content: space-around !important; }

        .align-content-stretch {
        -ms-flex-line-pack: stretch !important;
            align-content: stretch !important; }

        .align-self-auto {
        -ms-flex-item-align: auto !important;
            align-self: auto !important; }

        .align-self-start {
        -ms-flex-item-align: start !important;
            align-self: flex-start !important; }

        .align-self-end {
        -ms-flex-item-align: end !important;
            align-self: flex-end !important; }

        .align-self-center {
        -ms-flex-item-align: center !important;
            align-self: center !important; }

        .align-self-baseline {
        -ms-flex-item-align: baseline !important;
            align-self: baseline !important; }

        .align-self-stretch {
        -ms-flex-item-align: stretch !important;
            align-self: stretch !important; }

        @media (min-width: 576px) {
        .flex-sm-row {
            -ms-flex-direction: row !important;
                flex-direction: row !important; }
        .flex-sm-column {
            -ms-flex-direction: column !important;
                flex-direction: column !important; }
        .flex-sm-row-reverse {
            -ms-flex-direction: row-reverse !important;
                flex-direction: row-reverse !important; }
        .flex-sm-column-reverse {
            -ms-flex-direction: column-reverse !important;
                flex-direction: column-reverse !important; }
        .flex-sm-wrap {
            -ms-flex-wrap: wrap !important;
                flex-wrap: wrap !important; }
        .flex-sm-nowrap {
            -ms-flex-wrap: nowrap !important;
                flex-wrap: nowrap !important; }
        .flex-sm-wrap-reverse {
            -ms-flex-wrap: wrap-reverse !important;
                flex-wrap: wrap-reverse !important; }
        .justify-content-sm-start {
            -ms-flex-pack: start !important;
                justify-content: flex-start !important; }
        .justify-content-sm-end {
            -ms-flex-pack: end !important;
                justify-content: flex-end !important; }
        .justify-content-sm-center {
            -ms-flex-pack: center !important;
                justify-content: center !important; }
        .justify-content-sm-between {
            -ms-flex-pack: justify !important;
                justify-content: space-between !important; }
        .justify-content-sm-around {
            -ms-flex-pack: distribute !important;
                justify-content: space-around !important; }
        .align-items-sm-start {
            -ms-flex-align: start !important;
                align-items: flex-start !important; }
        .align-items-sm-end {
            -ms-flex-align: end !important;
                align-items: flex-end !important; }
        .align-items-sm-center {
            -ms-flex-align: center !important;
                align-items: center !important; }
        .align-items-sm-baseline {
            -ms-flex-align: baseline !important;
                align-items: baseline !important; }
        .align-items-sm-stretch {
            -ms-flex-align: stretch !important;
                align-items: stretch !important; }
        .align-content-sm-start {
            -ms-flex-line-pack: start !important;
                align-content: flex-start !important; }
        .align-content-sm-end {
            -ms-flex-line-pack: end !important;
                align-content: flex-end !important; }
        .align-content-sm-center {
            -ms-flex-line-pack: center !important;
                align-content: center !important; }
        .align-content-sm-between {
            -ms-flex-line-pack: justify !important;
                align-content: space-between !important; }
        .align-content-sm-around {
            -ms-flex-line-pack: distribute !important;
                align-content: space-around !important; }
        .align-content-sm-stretch {
            -ms-flex-line-pack: stretch !important;
                align-content: stretch !important; }
        .align-self-sm-auto {
            -ms-flex-item-align: auto !important;
                align-self: auto !important; }
        .align-self-sm-start {
            -ms-flex-item-align: start !important;
                align-self: flex-start !important; }
        .align-self-sm-end {
            -ms-flex-item-align: end !important;
                align-self: flex-end !important; }
        .align-self-sm-center {
            -ms-flex-item-align: center !important;
                align-self: center !important; }
        .align-self-sm-baseline {
            -ms-flex-item-align: baseline !important;
                align-self: baseline !important; }
        .align-self-sm-stretch {
            -ms-flex-item-align: stretch !important;
                align-self: stretch !important; } }

        @media (min-width: 768px) {
        .flex-md-row {
            -ms-flex-direction: row !important;
                flex-direction: row !important; }
        .flex-md-column {
            -ms-flex-direction: column !important;
                flex-direction: column !important; }
        .flex-md-row-reverse {
            -ms-flex-direction: row-reverse !important;
                flex-direction: row-reverse !important; }
        .flex-md-column-reverse {
            -ms-flex-direction: column-reverse !important;
                flex-direction: column-reverse !important; }
        .flex-md-wrap {
            -ms-flex-wrap: wrap !important;
                flex-wrap: wrap !important; }
        .flex-md-nowrap {
            -ms-flex-wrap: nowrap !important;
                flex-wrap: nowrap !important; }
        .flex-md-wrap-reverse {
            -ms-flex-wrap: wrap-reverse !important;
                flex-wrap: wrap-reverse !important; }
        .justify-content-md-start {
            -ms-flex-pack: start !important;
                justify-content: flex-start !important; }
        .justify-content-md-end {
            -ms-flex-pack: end !important;
                justify-content: flex-end !important; }
        .justify-content-md-center {
            -ms-flex-pack: center !important;
                justify-content: center !important; }
        .justify-content-md-between {
            -ms-flex-pack: justify !important;
                justify-content: space-between !important; }
        .justify-content-md-around {
            -ms-flex-pack: distribute !important;
                justify-content: space-around !important; }
        .align-items-md-start {
            -ms-flex-align: start !important;
                align-items: flex-start !important; }
        .align-items-md-end {
            -ms-flex-align: end !important;
                align-items: flex-end !important; }
        .align-items-md-center {
            -ms-flex-align: center !important;
                align-items: center !important; }
        .align-items-md-baseline {
            -ms-flex-align: baseline !important;
                align-items: baseline !important; }
        .align-items-md-stretch {
            -ms-flex-align: stretch !important;
                align-items: stretch !important; }
        .align-content-md-start {
            -ms-flex-line-pack: start !important;
                align-content: flex-start !important; }
        .align-content-md-end {
            -ms-flex-line-pack: end !important;
                align-content: flex-end !important; }
        .align-content-md-center {
            -ms-flex-line-pack: center !important;
                align-content: center !important; }
        .align-content-md-between {
            -ms-flex-line-pack: justify !important;
                align-content: space-between !important; }
        .align-content-md-around {
            -ms-flex-line-pack: distribute !important;
                align-content: space-around !important; }
        .align-content-md-stretch {
            -ms-flex-line-pack: stretch !important;
                align-content: stretch !important; }
        .align-self-md-auto {
            -ms-flex-item-align: auto !important;
                align-self: auto !important; }
        .align-self-md-start {
            -ms-flex-item-align: start !important;
                align-self: flex-start !important; }
        .align-self-md-end {
            -ms-flex-item-align: end !important;
                align-self: flex-end !important; }
        .align-self-md-center {
            -ms-flex-item-align: center !important;
                align-self: center !important; }
        .align-self-md-baseline {
            -ms-flex-item-align: baseline !important;
                align-self: baseline !important; }
        .align-self-md-stretch {
            -ms-flex-item-align: stretch !important;
                align-self: stretch !important; } }

        @media (min-width: 992px) {
        .flex-lg-row {
            -ms-flex-direction: row !important;
                flex-direction: row !important; }
        .flex-lg-column {
            -ms-flex-direction: column !important;
                flex-direction: column !important; }
        .flex-lg-row-reverse {
            -ms-flex-direction: row-reverse !important;
                flex-direction: row-reverse !important; }
        .flex-lg-column-reverse {
            -ms-flex-direction: column-reverse !important;
                flex-direction: column-reverse !important; }
        .flex-lg-wrap {
            -ms-flex-wrap: wrap !important;
                flex-wrap: wrap !important; }
        .flex-lg-nowrap {
            -ms-flex-wrap: nowrap !important;
                flex-wrap: nowrap !important; }
        .flex-lg-wrap-reverse {
            -ms-flex-wrap: wrap-reverse !important;
                flex-wrap: wrap-reverse !important; }
        .justify-content-lg-start {
            -ms-flex-pack: start !important;
                justify-content: flex-start !important; }
        .justify-content-lg-end {
            -ms-flex-pack: end !important;
                justify-content: flex-end !important; }
        .justify-content-lg-center {
            -ms-flex-pack: center !important;
                justify-content: center !important; }
        .justify-content-lg-between {
            -ms-flex-pack: justify !important;
                justify-content: space-between !important; }
        .justify-content-lg-around {
            -ms-flex-pack: distribute !important;
                justify-content: space-around !important; }
        .align-items-lg-start {
            -ms-flex-align: start !important;
                align-items: flex-start !important; }
        .align-items-lg-end {
            -ms-flex-align: end !important;
                align-items: flex-end !important; }
        .align-items-lg-center {
            -ms-flex-align: center !important;
                align-items: center !important; }
        .align-items-lg-baseline {
            -ms-flex-align: baseline !important;
                align-items: baseline !important; }
        .align-items-lg-stretch {
            -ms-flex-align: stretch !important;
                align-items: stretch !important; }
        .align-content-lg-start {
            -ms-flex-line-pack: start !important;
                align-content: flex-start !important; }
        .align-content-lg-end {
            -ms-flex-line-pack: end !important;
                align-content: flex-end !important; }
        .align-content-lg-center {
            -ms-flex-line-pack: center !important;
                align-content: center !important; }
        .align-content-lg-between {
            -ms-flex-line-pack: justify !important;
                align-content: space-between !important; }
        .align-content-lg-around {
            -ms-flex-line-pack: distribute !important;
                align-content: space-around !important; }
        .align-content-lg-stretch {
            -ms-flex-line-pack: stretch !important;
                align-content: stretch !important; }
        .align-self-lg-auto {
            -ms-flex-item-align: auto !important;
                align-self: auto !important; }
        .align-self-lg-start {
            -ms-flex-item-align: start !important;
                align-self: flex-start !important; }
        .align-self-lg-end {
            -ms-flex-item-align: end !important;
                align-self: flex-end !important; }
        .align-self-lg-center {
            -ms-flex-item-align: center !important;
                align-self: center !important; }
        .align-self-lg-baseline {
            -ms-flex-item-align: baseline !important;
                align-self: baseline !important; }
        .align-self-lg-stretch {
            -ms-flex-item-align: stretch !important;
                align-self: stretch !important; } }

        @media (min-width: 1200px) {
        .flex-xl-row {
            -ms-flex-direction: row !important;
                flex-direction: row !important; }
        .flex-xl-column {
            -ms-flex-direction: column !important;
                flex-direction: column !important; }
        .flex-xl-row-reverse {
            -ms-flex-direction: row-reverse !important;
                flex-direction: row-reverse !important; }
        .flex-xl-column-reverse {
            -ms-flex-direction: column-reverse !important;
                flex-direction: column-reverse !important; }
        .flex-xl-wrap {
            -ms-flex-wrap: wrap !important;
                flex-wrap: wrap !important; }
        .flex-xl-nowrap {
            -ms-flex-wrap: nowrap !important;
                flex-wrap: nowrap !important; }
        .flex-xl-wrap-reverse {
            -ms-flex-wrap: wrap-reverse !important;
                flex-wrap: wrap-reverse !important; }
        .justify-content-xl-start {
            -ms-flex-pack: start !important;
                justify-content: flex-start !important; }
        .justify-content-xl-end {
            -ms-flex-pack: end !important;
                justify-content: flex-end !important; }
        .justify-content-xl-center {
            -ms-flex-pack: center !important;
                justify-content: center !important; }
        .justify-content-xl-between {
            -ms-flex-pack: justify !important;
                justify-content: space-between !important; }
        .justify-content-xl-around {
            -ms-flex-pack: distribute !important;
                justify-content: space-around !important; }
        .align-items-xl-start {
            -ms-flex-align: start !important;
                align-items: flex-start !important; }
        .align-items-xl-end {
            -ms-flex-align: end !important;
                align-items: flex-end !important; }
        .align-items-xl-center {
            -ms-flex-align: center !important;
                align-items: center !important; }
        .align-items-xl-baseline {
            -ms-flex-align: baseline !important;
                align-items: baseline !important; }
        .align-items-xl-stretch {
            -ms-flex-align: stretch !important;
                align-items: stretch !important; }
        .align-content-xl-start {
            -ms-flex-line-pack: start !important;
                align-content: flex-start !important; }
        .align-content-xl-end {
            -ms-flex-line-pack: end !important;
                align-content: flex-end !important; }
        .align-content-xl-center {
            -ms-flex-line-pack: center !important;
                align-content: center !important; }
        .align-content-xl-between {
            -ms-flex-line-pack: justify !important;
                align-content: space-between !important; }
        .align-content-xl-around {
            -ms-flex-line-pack: distribute !important;
                align-content: space-around !important; }
        .align-content-xl-stretch {
            -ms-flex-line-pack: stretch !important;
                align-content: stretch !important; }
        .align-self-xl-auto {
            -ms-flex-item-align: auto !important;
                align-self: auto !important; }
        .align-self-xl-start {
            -ms-flex-item-align: start !important;
                align-self: flex-start !important; }
        .align-self-xl-end {
            -ms-flex-item-align: end !important;
                align-self: flex-end !important; }
        .align-self-xl-center {
            -ms-flex-item-align: center !important;
                align-self: center !important; }
        .align-self-xl-baseline {
            -ms-flex-item-align: baseline !important;
                align-self: baseline !important; }
        .align-self-xl-stretch {
            -ms-flex-item-align: stretch !important;
                align-self: stretch !important; } }

        .float-left {
        float: left !important; }

        .float-right {
        float: right !important; }

        .float-none {
        float: none !important; }

        @media (min-width: 576px) {
        .float-sm-left {
            float: left !important; }
        .float-sm-right {
            float: right !important; }
        .float-sm-none {
            float: none !important; } }

        @media (min-width: 768px) {
        .float-md-left {
            float: left !important; }
        .float-md-right {
            float: right !important; }
        .float-md-none {
            float: none !important; } }

        @media (min-width: 992px) {
        .float-lg-left {
            float: left !important; }
        .float-lg-right {
            float: right !important; }
        .float-lg-none {
            float: none !important; } }

        @media (min-width: 1200px) {
        .float-xl-left {
            float: left !important; }
        .float-xl-right {
            float: right !important; }
        .float-xl-none {
            float: none !important; } }

        .fixed-top {
        position: fixed;
        top: 0;
        right: 0;
        left: 0;
        z-index: 1030; }

        .fixed-bottom {
        position: fixed;
        right: 0;
        bottom: 0;
        left: 0;
        z-index: 1030; }

        @supports ((position: -webkit-sticky) or (position: sticky)) {
        .sticky-top {
            position: -webkit-sticky;
            position: sticky;
            top: 0;
            z-index: 1020; } }

        .sr-only {
        position: absolute;
        width: 1px;
        height: 1px;
        padding: 0;
        overflow: hidden;
        clip: rect(0, 0, 0, 0);
        white-space: nowrap;
        -webkit-clip-path: inset(50%);
                clip-path: inset(50%);
        border: 0; }

        .sr-only-focusable:active, .sr-only-focusable:focus {
        position: static;
        width: auto;
        height: auto;
        overflow: visible;
        clip: auto;
        white-space: normal;
        -webkit-clip-path: none;
                clip-path: none; }

        .w-25 {
        width: 25% !important; }

        .w-50 {
        width: 50% !important; }

        .w-75 {
        width: 75% !important; }

        .w-100 {
        width: 100% !important; }

        .h-25 {
        height: 25% !important; }

        .h-50 {
        height: 50% !important; }

        .h-75 {
        height: 75% !important; }

        .h-100 {
        height: 100% !important; }

        .mw-100 {
        max-width: 100% !important; }

        .mh-100 {
        max-height: 100% !important; }

        .m-0 {
        margin: 0 !important; }

        .mt-0 {
        margin-top: 0 !important; }

        .mr-0 {
        margin-right: 0 !important; }

        .mb-0 {
        margin-bottom: 0 !important; }

        .ml-0 {
        margin-left: 0 !important; }

        .mx-0 {
        margin-right: 0 !important;
        margin-left: 0 !important; }

        .my-0 {
        margin-top: 0 !important;
        margin-bottom: 0 !important; }

        .m-1 {
        margin: 0.25rem !important; }

        .mt-1 {
        margin-top: 0.25rem !important; }

        .mr-1 {
        margin-right: 0.25rem !important; }

        .mb-1 {
        margin-bottom: 0.25rem !important; }

        .ml-1 {
        margin-left: 0.25rem !important; }

        .mx-1 {
        margin-right: 0.25rem !important;
        margin-left: 0.25rem !important; }

        .my-1 {
        margin-top: 0.25rem !important;
        margin-bottom: 0.25rem !important; }

        .m-2 {
        margin: 0.5rem !important; }

        .mt-2 {
        margin-top: 0.5rem !important; }

        .mr-2 {
        margin-right: 0.5rem !important; }

        .mb-2 {
        margin-bottom: 0.5rem !important; }

        .ml-2 {
        margin-left: 0.5rem !important; }

        .mx-2 {
        margin-right: 0.5rem !important;
        margin-left: 0.5rem !important; }

        .my-2 {
        margin-top: 0.5rem !important;
        margin-bottom: 0.5rem !important; }

        .m-3 {
        margin: 1rem !important; }

        .mt-3 {
        margin-top: 1rem !important; }

        .mr-3 {
        margin-right: 1rem !important; }

        .mb-3 {
        margin-bottom: 1rem !important; }

        .ml-3 {
        margin-left: 1rem !important; }

        .mx-3 {
        margin-right: 1rem !important;
        margin-left: 1rem !important; }

        .my-3 {
        margin-top: 1rem !important;
        margin-bottom: 1rem !important; }

        .m-4 {
        margin: 1.5rem !important; }

        .mt-4 {
        margin-top: 1.5rem !important; }

        .mr-4 {
        margin-right: 1.5rem !important; }

        .mb-4 {
        margin-bottom: 1.5rem !important; }

        .ml-4 {
        margin-left: 1.5rem !important; }

        .mx-4 {
        margin-right: 1.5rem !important;
        margin-left: 1.5rem !important; }

        .my-4 {
        margin-top: 1.5rem !important;
        margin-bottom: 1.5rem !important; }

        .m-5 {
        margin: 3rem !important; }

        .mt-5 {
        margin-top: 3rem !important; }

        .mr-5 {
        margin-right: 3rem !important; }

        .mb-5 {
        margin-bottom: 3rem !important; }

        .ml-5 {
        margin-left: 3rem !important; }

        .mx-5 {
        margin-right: 3rem !important;
        margin-left: 3rem !important; }

        .my-5 {
        margin-top: 3rem !important;
        margin-bottom: 3rem !important; }

        .p-0 {
        padding: 0 !important; }

        .pt-0 {
        padding-top: 0 !important; }

        .pr-0 {
        padding-right: 0 !important; }

        .pb-0 {
        padding-bottom: 0 !important; }

        .pl-0 {
        padding-left: 0 !important; }

        .px-0 {
        padding-right: 0 !important;
        padding-left: 0 !important; }

        .py-0 {
        padding-top: 0 !important;
        padding-bottom: 0 !important; }

        .p-1 {
        padding: 0.25rem !important; }

        .pt-1 {
        padding-top: 0.25rem !important; }

        .pr-1 {
        padding-right: 0.25rem !important; }

        .pb-1 {
        padding-bottom: 0.25rem !important; }

        .pl-1 {
        padding-left: 0.25rem !important; }

        .px-1 {
        padding-right: 0.25rem !important;
        padding-left: 0.25rem !important; }

        .py-1 {
        padding-top: 0.25rem !important;
        padding-bottom: 0.25rem !important; }

        .p-2 {
        padding: 0.5rem !important; }

        .pt-2 {
        padding-top: 0.5rem !important; }

        .pr-2 {
        padding-right: 0.5rem !important; }

        .pb-2 {
        padding-bottom: 0.5rem !important; }

        .pl-2 {
        padding-left: 0.5rem !important; }

        .px-2 {
        padding-right: 0.5rem !important;
        padding-left: 0.5rem !important; }

        .py-2 {
        padding-top: 0.5rem !important;
        padding-bottom: 0.5rem !important; }

        .p-3 {
        padding: 1rem !important; }

        .pt-3 {
        padding-top: 1rem !important; }

        .pr-3 {
        padding-right: 1rem !important; }

        .pb-3 {
        padding-bottom: 1rem !important; }

        .pl-3 {
        padding-left: 1rem !important; }

        .px-3 {
        padding-right: 1rem !important;
        padding-left: 1rem !important; }

        .py-3 {
        padding-top: 1rem !important;
        padding-bottom: 1rem !important; }

        .p-4 {
        padding: 1.5rem !important; }

        .pt-4 {
        padding-top: 1.5rem !important; }

        .pr-4 {
        padding-right: 1.5rem !important; }

        .pb-4 {
        padding-bottom: 1.5rem !important; }

        .pl-4 {
        padding-left: 1.5rem !important; }

        .px-4 {
        padding-right: 1.5rem !important;
        padding-left: 1.5rem !important; }

        .py-4 {
        padding-top: 1.5rem !important;
        padding-bottom: 1.5rem !important; }

        .p-5 {
        padding: 3rem !important; }

        .pt-5 {
        padding-top: 3rem !important; }

        .pr-5 {
        padding-right: 3rem !important; }

        .pb-5 {
        padding-bottom: 3rem !important; }

        .pl-5 {
        padding-left: 3rem !important; }

        .px-5 {
        padding-right: 3rem !important;
        padding-left: 3rem !important; }

        .py-5 {
        padding-top: 3rem !important;
        padding-bottom: 3rem !important; }

        .m-auto {
        margin: auto !important; }

        .mt-auto {
        margin-top: auto !important; }

        .mr-auto {
        margin-right: auto !important; }

        .mb-auto {
        margin-bottom: auto !important; }

        .ml-auto {
        margin-left: auto !important; }

        .mx-auto {
        margin-right: auto !important;
        margin-left: auto !important; }

        .my-auto {
        margin-top: auto !important;
        margin-bottom: auto !important; }

        @media (min-width: 576px) {
        .m-sm-0 {
            margin: 0 !important; }
        .mt-sm-0 {
            margin-top: 0 !important; }
        .mr-sm-0 {
            margin-right: 0 !important; }
        .mb-sm-0 {
            margin-bottom: 0 !important; }
        .ml-sm-0 {
            margin-left: 0 !important; }
        .mx-sm-0 {
            margin-right: 0 !important;
            margin-left: 0 !important; }
        .my-sm-0 {
            margin-top: 0 !important;
            margin-bottom: 0 !important; }
        .m-sm-1 {
            margin: 0.25rem !important; }
        .mt-sm-1 {
            margin-top: 0.25rem !important; }
        .mr-sm-1 {
            margin-right: 0.25rem !important; }
        .mb-sm-1 {
            margin-bottom: 0.25rem !important; }
        .ml-sm-1 {
            margin-left: 0.25rem !important; }
        .mx-sm-1 {
            margin-right: 0.25rem !important;
            margin-left: 0.25rem !important; }
        .my-sm-1 {
            margin-top: 0.25rem !important;
            margin-bottom: 0.25rem !important; }
        .m-sm-2 {
            margin: 0.5rem !important; }
        .mt-sm-2 {
            margin-top: 0.5rem !important; }
        .mr-sm-2 {
            margin-right: 0.5rem !important; }
        .mb-sm-2 {
            margin-bottom: 0.5rem !important; }
        .ml-sm-2 {
            margin-left: 0.5rem !important; }
        .mx-sm-2 {
            margin-right: 0.5rem !important;
            margin-left: 0.5rem !important; }
        .my-sm-2 {
            margin-top: 0.5rem !important;
            margin-bottom: 0.5rem !important; }
        .m-sm-3 {
            margin: 1rem !important; }
        .mt-sm-3 {
            margin-top: 1rem !important; }
        .mr-sm-3 {
            margin-right: 1rem !important; }
        .mb-sm-3 {
            margin-bottom: 1rem !important; }
        .ml-sm-3 {
            margin-left: 1rem !important; }
        .mx-sm-3 {
            margin-right: 1rem !important;
            margin-left: 1rem !important; }
        .my-sm-3 {
            margin-top: 1rem !important;
            margin-bottom: 1rem !important; }
        .m-sm-4 {
            margin: 1.5rem !important; }
        .mt-sm-4 {
            margin-top: 1.5rem !important; }
        .mr-sm-4 {
            margin-right: 1.5rem !important; }
        .mb-sm-4 {
            margin-bottom: 1.5rem !important; }
        .ml-sm-4 {
            margin-left: 1.5rem !important; }
        .mx-sm-4 {
            margin-right: 1.5rem !important;
            margin-left: 1.5rem !important; }
        .my-sm-4 {
            margin-top: 1.5rem !important;
            margin-bottom: 1.5rem !important; }
        .m-sm-5 {
            margin: 3rem !important; }
        .mt-sm-5 {
            margin-top: 3rem !important; }
        .mr-sm-5 {
            margin-right: 3rem !important; }
        .mb-sm-5 {
            margin-bottom: 3rem !important; }
        .ml-sm-5 {
            margin-left: 3rem !important; }
        .mx-sm-5 {
            margin-right: 3rem !important;
            margin-left: 3rem !important; }
        .my-sm-5 {
            margin-top: 3rem !important;
            margin-bottom: 3rem !important; }
        .p-sm-0 {
            padding: 0 !important; }
        .pt-sm-0 {
            padding-top: 0 !important; }
        .pr-sm-0 {
            padding-right: 0 !important; }
        .pb-sm-0 {
            padding-bottom: 0 !important; }
        .pl-sm-0 {
            padding-left: 0 !important; }
        .px-sm-0 {
            padding-right: 0 !important;
            padding-left: 0 !important; }
        .py-sm-0 {
            padding-top: 0 !important;
            padding-bottom: 0 !important; }
        .p-sm-1 {
            padding: 0.25rem !important; }
        .pt-sm-1 {
            padding-top: 0.25rem !important; }
        .pr-sm-1 {
            padding-right: 0.25rem !important; }
        .pb-sm-1 {
            padding-bottom: 0.25rem !important; }
        .pl-sm-1 {
            padding-left: 0.25rem !important; }
        .px-sm-1 {
            padding-right: 0.25rem !important;
            padding-left: 0.25rem !important; }
        .py-sm-1 {
            padding-top: 0.25rem !important;
            padding-bottom: 0.25rem !important; }
        .p-sm-2 {
            padding: 0.5rem !important; }
        .pt-sm-2 {
            padding-top: 0.5rem !important; }
        .pr-sm-2 {
            padding-right: 0.5rem !important; }
        .pb-sm-2 {
            padding-bottom: 0.5rem !important; }
        .pl-sm-2 {
            padding-left: 0.5rem !important; }
        .px-sm-2 {
            padding-right: 0.5rem !important;
            padding-left: 0.5rem !important; }
        .py-sm-2 {
            padding-top: 0.5rem !important;
            padding-bottom: 0.5rem !important; }
        .p-sm-3 {
            padding: 1rem !important; }
        .pt-sm-3 {
            padding-top: 1rem !important; }
        .pr-sm-3 {
            padding-right: 1rem !important; }
        .pb-sm-3 {
            padding-bottom: 1rem !important; }
        .pl-sm-3 {
            padding-left: 1rem !important; }
        .px-sm-3 {
            padding-right: 1rem !important;
            padding-left: 1rem !important; }
        .py-sm-3 {
            padding-top: 1rem !important;
            padding-bottom: 1rem !important; }
        .p-sm-4 {
            padding: 1.5rem !important; }
        .pt-sm-4 {
            padding-top: 1.5rem !important; }
        .pr-sm-4 {
            padding-right: 1.5rem !important; }
        .pb-sm-4 {
            padding-bottom: 1.5rem !important; }
        .pl-sm-4 {
            padding-left: 1.5rem !important; }
        .px-sm-4 {
            padding-right: 1.5rem !important;
            padding-left: 1.5rem !important; }
        .py-sm-4 {
            padding-top: 1.5rem !important;
            padding-bottom: 1.5rem !important; }
        .p-sm-5 {
            padding: 3rem !important; }
        .pt-sm-5 {
            padding-top: 3rem !important; }
        .pr-sm-5 {
            padding-right: 3rem !important; }
        .pb-sm-5 {
            padding-bottom: 3rem !important; }
        .pl-sm-5 {
            padding-left: 3rem !important; }
        .px-sm-5 {
            padding-right: 3rem !important;
            padding-left: 3rem !important; }
        .py-sm-5 {
            padding-top: 3rem !important;
            padding-bottom: 3rem !important; }
        .m-sm-auto {
            margin: auto !important; }
        .mt-sm-auto {
            margin-top: auto !important; }
        .mr-sm-auto {
            margin-right: auto !important; }
        .mb-sm-auto {
            margin-bottom: auto !important; }
        .ml-sm-auto {
            margin-left: auto !important; }
        .mx-sm-auto {
            margin-right: auto !important;
            margin-left: auto !important; }
        .my-sm-auto {
            margin-top: auto !important;
            margin-bottom: auto !important; } }

        @media (min-width: 768px) {
        .m-md-0 {
            margin: 0 !important; }
        .mt-md-0 {
            margin-top: 0 !important; }
        .mr-md-0 {
            margin-right: 0 !important; }
        .mb-md-0 {
            margin-bottom: 0 !important; }
        .ml-md-0 {
            margin-left: 0 !important; }
        .mx-md-0 {
            margin-right: 0 !important;
            margin-left: 0 !important; }
        .my-md-0 {
            margin-top: 0 !important;
            margin-bottom: 0 !important; }
        .m-md-1 {
            margin: 0.25rem !important; }
        .mt-md-1 {
            margin-top: 0.25rem !important; }
        .mr-md-1 {
            margin-right: 0.25rem !important; }
        .mb-md-1 {
            margin-bottom: 0.25rem !important; }
        .ml-md-1 {
            margin-left: 0.25rem !important; }
        .mx-md-1 {
            margin-right: 0.25rem !important;
            margin-left: 0.25rem !important; }
        .my-md-1 {
            margin-top: 0.25rem !important;
            margin-bottom: 0.25rem !important; }
        .m-md-2 {
            margin: 0.5rem !important; }
        .mt-md-2 {
            margin-top: 0.5rem !important; }
        .mr-md-2 {
            margin-right: 0.5rem !important; }
        .mb-md-2 {
            margin-bottom: 0.5rem !important; }
        .ml-md-2 {
            margin-left: 0.5rem !important; }
        .mx-md-2 {
            margin-right: 0.5rem !important;
            margin-left: 0.5rem !important; }
        .my-md-2 {
            margin-top: 0.5rem !important;
            margin-bottom: 0.5rem !important; }
        .m-md-3 {
            margin: 1rem !important; }
        .mt-md-3 {
            margin-top: 1rem !important; }
        .mr-md-3 {
            margin-right: 1rem !important; }
        .mb-md-3 {
            margin-bottom: 1rem !important; }
        .ml-md-3 {
            margin-left: 1rem !important; }
        .mx-md-3 {
            margin-right: 1rem !important;
            margin-left: 1rem !important; }
        .my-md-3 {
            margin-top: 1rem !important;
            margin-bottom: 1rem !important; }
        .m-md-4 {
            margin: 1.5rem !important; }
        .mt-md-4 {
            margin-top: 1.5rem !important; }
        .mr-md-4 {
            margin-right: 1.5rem !important; }
        .mb-md-4 {
            margin-bottom: 1.5rem !important; }
        .ml-md-4 {
            margin-left: 1.5rem !important; }
        .mx-md-4 {
            margin-right: 1.5rem !important;
            margin-left: 1.5rem !important; }
        .my-md-4 {
            margin-top: 1.5rem !important;
            margin-bottom: 1.5rem !important; }
        .m-md-5 {
            margin: 3rem !important; }
        .mt-md-5 {
            margin-top: 3rem !important; }
        .mr-md-5 {
            margin-right: 3rem !important; }
        .mb-md-5 {
            margin-bottom: 3rem !important; }
        .ml-md-5 {
            margin-left: 3rem !important; }
        .mx-md-5 {
            margin-right: 3rem !important;
            margin-left: 3rem !important; }
        .my-md-5 {
            margin-top: 3rem !important;
            margin-bottom: 3rem !important; }
        .p-md-0 {
            padding: 0 !important; }
        .pt-md-0 {
            padding-top: 0 !important; }
        .pr-md-0 {
            padding-right: 0 !important; }
        .pb-md-0 {
            padding-bottom: 0 !important; }
        .pl-md-0 {
            padding-left: 0 !important; }
        .px-md-0 {
            padding-right: 0 !important;
            padding-left: 0 !important; }
        .py-md-0 {
            padding-top: 0 !important;
            padding-bottom: 0 !important; }
        .p-md-1 {
            padding: 0.25rem !important; }
        .pt-md-1 {
            padding-top: 0.25rem !important; }
        .pr-md-1 {
            padding-right: 0.25rem !important; }
        .pb-md-1 {
            padding-bottom: 0.25rem !important; }
        .pl-md-1 {
            padding-left: 0.25rem !important; }
        .px-md-1 {
            padding-right: 0.25rem !important;
            padding-left: 0.25rem !important; }
        .py-md-1 {
            padding-top: 0.25rem !important;
            padding-bottom: 0.25rem !important; }
        .p-md-2 {
            padding: 0.5rem !important; }
        .pt-md-2 {
            padding-top: 0.5rem !important; }
        .pr-md-2 {
            padding-right: 0.5rem !important; }
        .pb-md-2 {
            padding-bottom: 0.5rem !important; }
        .pl-md-2 {
            padding-left: 0.5rem !important; }
        .px-md-2 {
            padding-right: 0.5rem !important;
            padding-left: 0.5rem !important; }
        .py-md-2 {
            padding-top: 0.5rem !important;
            padding-bottom: 0.5rem !important; }
        .p-md-3 {
            padding: 1rem !important; }
        .pt-md-3 {
            padding-top: 1rem !important; }
        .pr-md-3 {
            padding-right: 1rem !important; }
        .pb-md-3 {
            padding-bottom: 1rem !important; }
        .pl-md-3 {
            padding-left: 1rem !important; }
        .px-md-3 {
            padding-right: 1rem !important;
            padding-left: 1rem !important; }
        .py-md-3 {
            padding-top: 1rem !important;
            padding-bottom: 1rem !important; }
        .p-md-4 {
            padding: 1.5rem !important; }
        .pt-md-4 {
            padding-top: 1.5rem !important; }
        .pr-md-4 {
            padding-right: 1.5rem !important; }
        .pb-md-4 {
            padding-bottom: 1.5rem !important; }
        .pl-md-4 {
            padding-left: 1.5rem !important; }
        .px-md-4 {
            padding-right: 1.5rem !important;
            padding-left: 1.5rem !important; }
        .py-md-4 {
            padding-top: 1.5rem !important;
            padding-bottom: 1.5rem !important; }
        .p-md-5 {
            padding: 3rem !important; }
        .pt-md-5 {
            padding-top: 3rem !important; }
        .pr-md-5 {
            padding-right: 3rem !important; }
        .pb-md-5 {
            padding-bottom: 3rem !important; }
        .pl-md-5 {
            padding-left: 3rem !important; }
        .px-md-5 {
            padding-right: 3rem !important;
            padding-left: 3rem !important; }
        .py-md-5 {
            padding-top: 3rem !important;
            padding-bottom: 3rem !important; }
        .m-md-auto {
            margin: auto !important; }
        .mt-md-auto {
            margin-top: auto !important; }
        .mr-md-auto {
            margin-right: auto !important; }
        .mb-md-auto {
            margin-bottom: auto !important; }
        .ml-md-auto {
            margin-left: auto !important; }
        .mx-md-auto {
            margin-right: auto !important;
            margin-left: auto !important; }
        .my-md-auto {
            margin-top: auto !important;
            margin-bottom: auto !important; } }

        @media (min-width: 992px) {
        .m-lg-0 {
            margin: 0 !important; }
        .mt-lg-0 {
            margin-top: 0 !important; }
        .mr-lg-0 {
            margin-right: 0 !important; }
        .mb-lg-0 {
            margin-bottom: 0 !important; }
        .ml-lg-0 {
            margin-left: 0 !important; }
        .mx-lg-0 {
            margin-right: 0 !important;
            margin-left: 0 !important; }
        .my-lg-0 {
            margin-top: 0 !important;
            margin-bottom: 0 !important; }
        .m-lg-1 {
            margin: 0.25rem !important; }
        .mt-lg-1 {
            margin-top: 0.25rem !important; }
        .mr-lg-1 {
            margin-right: 0.25rem !important; }
        .mb-lg-1 {
            margin-bottom: 0.25rem !important; }
        .ml-lg-1 {
            margin-left: 0.25rem !important; }
        .mx-lg-1 {
            margin-right: 0.25rem !important;
            margin-left: 0.25rem !important; }
        .my-lg-1 {
            margin-top: 0.25rem !important;
            margin-bottom: 0.25rem !important; }
        .m-lg-2 {
            margin: 0.5rem !important; }
        .mt-lg-2 {
            margin-top: 0.5rem !important; }
        .mr-lg-2 {
            margin-right: 0.5rem !important; }
        .mb-lg-2 {
            margin-bottom: 0.5rem !important; }
        .ml-lg-2 {
            margin-left: 0.5rem !important; }
        .mx-lg-2 {
            margin-right: 0.5rem !important;
            margin-left: 0.5rem !important; }
        .my-lg-2 {
            margin-top: 0.5rem !important;
            margin-bottom: 0.5rem !important; }
        .m-lg-3 {
            margin: 1rem !important; }
        .mt-lg-3 {
            margin-top: 1rem !important; }
        .mr-lg-3 {
            margin-right: 1rem !important; }
        .mb-lg-3 {
            margin-bottom: 1rem !important; }
        .ml-lg-3 {
            margin-left: 1rem !important; }
        .mx-lg-3 {
            margin-right: 1rem !important;
            margin-left: 1rem !important; }
        .my-lg-3 {
            margin-top: 1rem !important;
            margin-bottom: 1rem !important; }
        .m-lg-4 {
            margin: 1.5rem !important; }
        .mt-lg-4 {
            margin-top: 1.5rem !important; }
        .mr-lg-4 {
            margin-right: 1.5rem !important; }
        .mb-lg-4 {
            margin-bottom: 1.5rem !important; }
        .ml-lg-4 {
            margin-left: 1.5rem !important; }
        .mx-lg-4 {
            margin-right: 1.5rem !important;
            margin-left: 1.5rem !important; }
        .my-lg-4 {
            margin-top: 1.5rem !important;
            margin-bottom: 1.5rem !important; }
        .m-lg-5 {
            margin: 3rem !important; }
        .mt-lg-5 {
            margin-top: 3rem !important; }
        .mr-lg-5 {
            margin-right: 3rem !important; }
        .mb-lg-5 {
            margin-bottom: 3rem !important; }
        .ml-lg-5 {
            margin-left: 3rem !important; }
        .mx-lg-5 {
            margin-right: 3rem !important;
            margin-left: 3rem !important; }
        .my-lg-5 {
            margin-top: 3rem !important;
            margin-bottom: 3rem !important; }
        .p-lg-0 {
            padding: 0 !important; }
        .pt-lg-0 {
            padding-top: 0 !important; }
        .pr-lg-0 {
            padding-right: 0 !important; }
        .pb-lg-0 {
            padding-bottom: 0 !important; }
        .pl-lg-0 {
            padding-left: 0 !important; }
        .px-lg-0 {
            padding-right: 0 !important;
            padding-left: 0 !important; }
        .py-lg-0 {
            padding-top: 0 !important;
            padding-bottom: 0 !important; }
        .p-lg-1 {
            padding: 0.25rem !important; }
        .pt-lg-1 {
            padding-top: 0.25rem !important; }
        .pr-lg-1 {
            padding-right: 0.25rem !important; }
        .pb-lg-1 {
            padding-bottom: 0.25rem !important; }
        .pl-lg-1 {
            padding-left: 0.25rem !important; }
        .px-lg-1 {
            padding-right: 0.25rem !important;
            padding-left: 0.25rem !important; }
        .py-lg-1 {
            padding-top: 0.25rem !important;
            padding-bottom: 0.25rem !important; }
        .p-lg-2 {
            padding: 0.5rem !important; }
        .pt-lg-2 {
            padding-top: 0.5rem !important; }
        .pr-lg-2 {
            padding-right: 0.5rem !important; }
        .pb-lg-2 {
            padding-bottom: 0.5rem !important; }
        .pl-lg-2 {
            padding-left: 0.5rem !important; }
        .px-lg-2 {
            padding-right: 0.5rem !important;
            padding-left: 0.5rem !important; }
        .py-lg-2 {
            padding-top: 0.5rem !important;
            padding-bottom: 0.5rem !important; }
        .p-lg-3 {
            padding: 1rem !important; }
        .pt-lg-3 {
            padding-top: 1rem !important; }
        .pr-lg-3 {
            padding-right: 1rem !important; }
        .pb-lg-3 {
            padding-bottom: 1rem !important; }
        .pl-lg-3 {
            padding-left: 1rem !important; }
        .px-lg-3 {
            padding-right: 1rem !important;
            padding-left: 1rem !important; }
        .py-lg-3 {
            padding-top: 1rem !important;
            padding-bottom: 1rem !important; }
        .p-lg-4 {
            padding: 1.5rem !important; }
        .pt-lg-4 {
            padding-top: 1.5rem !important; }
        .pr-lg-4 {
            padding-right: 1.5rem !important; }
        .pb-lg-4 {
            padding-bottom: 1.5rem !important; }
        .pl-lg-4 {
            padding-left: 1.5rem !important; }
        .px-lg-4 {
            padding-right: 1.5rem !important;
            padding-left: 1.5rem !important; }
        .py-lg-4 {
            padding-top: 1.5rem !important;
            padding-bottom: 1.5rem !important; }
        .p-lg-5 {
            padding: 3rem !important; }
        .pt-lg-5 {
            padding-top: 3rem !important; }
        .pr-lg-5 {
            padding-right: 3rem !important; }
        .pb-lg-5 {
            padding-bottom: 3rem !important; }
        .pl-lg-5 {
            padding-left: 3rem !important; }
        .px-lg-5 {
            padding-right: 3rem !important;
            padding-left: 3rem !important; }
        .py-lg-5 {
            padding-top: 3rem !important;
            padding-bottom: 3rem !important; }
        .m-lg-auto {
            margin: auto !important; }
        .mt-lg-auto {
            margin-top: auto !important; }
        .mr-lg-auto {
            margin-right: auto !important; }
        .mb-lg-auto {
            margin-bottom: auto !important; }
        .ml-lg-auto {
            margin-left: auto !important; }
        .mx-lg-auto {
            margin-right: auto !important;
            margin-left: auto !important; }
        .my-lg-auto {
            margin-top: auto !important;
            margin-bottom: auto !important; } }

        @media (min-width: 1200px) {
        .m-xl-0 {
            margin: 0 !important; }
        .mt-xl-0 {
            margin-top: 0 !important; }
        .mr-xl-0 {
            margin-right: 0 !important; }
        .mb-xl-0 {
            margin-bottom: 0 !important; }
        .ml-xl-0 {
            margin-left: 0 !important; }
        .mx-xl-0 {
            margin-right: 0 !important;
            margin-left: 0 !important; }
        .my-xl-0 {
            margin-top: 0 !important;
            margin-bottom: 0 !important; }
        .m-xl-1 {
            margin: 0.25rem !important; }
        .mt-xl-1 {
            margin-top: 0.25rem !important; }
        .mr-xl-1 {
            margin-right: 0.25rem !important; }
        .mb-xl-1 {
            margin-bottom: 0.25rem !important; }
        .ml-xl-1 {
            margin-left: 0.25rem !important; }
        .mx-xl-1 {
            margin-right: 0.25rem !important;
            margin-left: 0.25rem !important; }
        .my-xl-1 {
            margin-top: 0.25rem !important;
            margin-bottom: 0.25rem !important; }
        .m-xl-2 {
            margin: 0.5rem !important; }
        .mt-xl-2 {
            margin-top: 0.5rem !important; }
        .mr-xl-2 {
            margin-right: 0.5rem !important; }
        .mb-xl-2 {
            margin-bottom: 0.5rem !important; }
        .ml-xl-2 {
            margin-left: 0.5rem !important; }
        .mx-xl-2 {
            margin-right: 0.5rem !important;
            margin-left: 0.5rem !important; }
        .my-xl-2 {
            margin-top: 0.5rem !important;
            margin-bottom: 0.5rem !important; }
        .m-xl-3 {
            margin: 1rem !important; }
        .mt-xl-3 {
            margin-top: 1rem !important; }
        .mr-xl-3 {
            margin-right: 1rem !important; }
        .mb-xl-3 {
            margin-bottom: 1rem !important; }
        .ml-xl-3 {
            margin-left: 1rem !important; }
        .mx-xl-3 {
            margin-right: 1rem !important;
            margin-left: 1rem !important; }
        .my-xl-3 {
            margin-top: 1rem !important;
            margin-bottom: 1rem !important; }
        .m-xl-4 {
            margin: 1.5rem !important; }
        .mt-xl-4 {
            margin-top: 1.5rem !important; }
        .mr-xl-4 {
            margin-right: 1.5rem !important; }
        .mb-xl-4 {
            margin-bottom: 1.5rem !important; }
        .ml-xl-4 {
            margin-left: 1.5rem !important; }
        .mx-xl-4 {
            margin-right: 1.5rem !important;
            margin-left: 1.5rem !important; }
        .my-xl-4 {
            margin-top: 1.5rem !important;
            margin-bottom: 1.5rem !important; }
        .m-xl-5 {
            margin: 3rem !important; }
        .mt-xl-5 {
            margin-top: 3rem !important; }
        .mr-xl-5 {
            margin-right: 3rem !important; }
        .mb-xl-5 {
            margin-bottom: 3rem !important; }
        .ml-xl-5 {
            margin-left: 3rem !important; }
        .mx-xl-5 {
            margin-right: 3rem !important;
            margin-left: 3rem !important; }
        .my-xl-5 {
            margin-top: 3rem !important;
            margin-bottom: 3rem !important; }
        .p-xl-0 {
            padding: 0 !important; }
        .pt-xl-0 {
            padding-top: 0 !important; }
        .pr-xl-0 {
            padding-right: 0 !important; }
        .pb-xl-0 {
            padding-bottom: 0 !important; }
        .pl-xl-0 {
            padding-left: 0 !important; }
        .px-xl-0 {
            padding-right: 0 !important;
            padding-left: 0 !important; }
        .py-xl-0 {
            padding-top: 0 !important;
            padding-bottom: 0 !important; }
        .p-xl-1 {
            padding: 0.25rem !important; }
        .pt-xl-1 {
            padding-top: 0.25rem !important; }
        .pr-xl-1 {
            padding-right: 0.25rem !important; }
        .pb-xl-1 {
            padding-bottom: 0.25rem !important; }
        .pl-xl-1 {
            padding-left: 0.25rem !important; }
        .px-xl-1 {
            padding-right: 0.25rem !important;
            padding-left: 0.25rem !important; }
        .py-xl-1 {
            padding-top: 0.25rem !important;
            padding-bottom: 0.25rem !important; }
        .p-xl-2 {
            padding: 0.5rem !important; }
        .pt-xl-2 {
            padding-top: 0.5rem !important; }
        .pr-xl-2 {
            padding-right: 0.5rem !important; }
        .pb-xl-2 {
            padding-bottom: 0.5rem !important; }
        .pl-xl-2 {
            padding-left: 0.5rem !important; }
        .px-xl-2 {
            padding-right: 0.5rem !important;
            padding-left: 0.5rem !important; }
        .py-xl-2 {
            padding-top: 0.5rem !important;
            padding-bottom: 0.5rem !important; }
        .p-xl-3 {
            padding: 1rem !important; }
        .pt-xl-3 {
            padding-top: 1rem !important; }
        .pr-xl-3 {
            padding-right: 1rem !important; }
        .pb-xl-3 {
            padding-bottom: 1rem !important; }
        .pl-xl-3 {
            padding-left: 1rem !important; }
        .px-xl-3 {
            padding-right: 1rem !important;
            padding-left: 1rem !important; }
        .py-xl-3 {
            padding-top: 1rem !important;
            padding-bottom: 1rem !important; }
        .p-xl-4 {
            padding: 1.5rem !important; }
        .pt-xl-4 {
            padding-top: 1.5rem !important; }
        .pr-xl-4 {
            padding-right: 1.5rem !important; }
        .pb-xl-4 {
            padding-bottom: 1.5rem !important; }
        .pl-xl-4 {
            padding-left: 1.5rem !important; }
        .px-xl-4 {
            padding-right: 1.5rem !important;
            padding-left: 1.5rem !important; }
        .py-xl-4 {
            padding-top: 1.5rem !important;
            padding-bottom: 1.5rem !important; }
        .p-xl-5 {
            padding: 3rem !important; }
        .pt-xl-5 {
            padding-top: 3rem !important; }
        .pr-xl-5 {
            padding-right: 3rem !important; }
        .pb-xl-5 {
            padding-bottom: 3rem !important; }
        .pl-xl-5 {
            padding-left: 3rem !important; }
        .px-xl-5 {
            padding-right: 3rem !important;
            padding-left: 3rem !important; }
        .py-xl-5 {
            padding-top: 3rem !important;
            padding-bottom: 3rem !important; }
        .m-xl-auto {
            margin: auto !important; }
        .mt-xl-auto {
            margin-top: auto !important; }
        .mr-xl-auto {
            margin-right: auto !important; }
        .mb-xl-auto {
            margin-bottom: auto !important; }
        .ml-xl-auto {
            margin-left: auto !important; }
        .mx-xl-auto {
            margin-right: auto !important;
            margin-left: auto !important; }
        .my-xl-auto {
            margin-top: auto !important;
            margin-bottom: auto !important; } }

        .text-justify {
        text-align: justify !important; }

        .text-nowrap {
        white-space: nowrap !important; }

        .text-truncate {
        overflow: hidden;
        text-overflow: ellipsis;
        white-space: nowrap; }

        .text-left {
        text-align: left !important; }

        .text-right {
        text-align: right !important; }

        .text-center {
        text-align: center !important; }

        @media (min-width: 576px) {
        .text-sm-left {
            text-align: left !important; }
        .text-sm-right {
            text-align: right !important; }
        .text-sm-center {
            text-align: center !important; } }

        @media (min-width: 768px) {
        .text-md-left {
            text-align: left !important; }
        .text-md-right {
            text-align: right !important; }
        .text-md-center {
            text-align: center !important; } }

        @media (min-width: 992px) {
        .text-lg-left {
            text-align: left !important; }
        .text-lg-right {
            text-align: right !important; }
        .text-lg-center {
            text-align: center !important; } }

        @media (min-width: 1200px) {
        .text-xl-left {
            text-align: left !important; }
        .text-xl-right {
            text-align: right !important; }
        .text-xl-center {
            text-align: center !important; } }

        .text-lowercase {
        text-transform: lowercase !important; }

        .text-uppercase {
        text-transform: uppercase !important; }

        .text-capitalize {
        text-transform: capitalize !important; }

        .font-weight-normal {
        font-weight: normal; }

        .font-weight-bold {
        font-weight: bold; }

        .font-italic {
        font-style: italic; }

        .text-white {
        color: #fff !important; }

        .text-primary {
        color: #20a8d8 !important; }

        a.text-primary:focus, a.text-primary:hover {
        color: #1985ac !important; }

        .text-secondary {
        color: #a4b7c1 !important; }

        a.text-secondary:focus, a.text-secondary:hover {
        color: #869fac !important; }

        .text-success {
        color: #4dbd74 !important; }

        a.text-success:focus, a.text-success:hover {
        color: #3a9d5d !important; }

        .text-info {
        color: #63c2de !important; }

        a.text-info:focus, a.text-info:hover {
        color: #39b2d5 !important; }

        .text-warning {
        color: #ffc107 !important; }

        a.text-warning:focus, a.text-warning:hover {
        color: #d39e00 !important; }

        .text-danger {
        color: #f86c6b !important; }

        a.text-danger:focus, a.text-danger:hover {
        color: #f63c3a !important; }

        .text-light {
        color: #f0f3f5 !important; }

        a.text-light:focus, a.text-light:hover {
        color: #d1dbe1 !important; }

        .text-dark {
        color: #29363d !important; }

        a.text-dark:focus, a.text-dark:hover {
        color: #151b1f !important; }

        .text-muted {
        color: #536c79 !important; }

        .text-hide {
        font: 0/0 a;
        color: transparent;
        text-shadow: none;
        background-color: transparent;
        border: 0; }

        .visible {
        visibility: visible !important; }

        .invisible {
        visibility: hidden !important; }

        body {
        -moz-osx-font-smoothing: grayscale;
        -webkit-font-smoothing: antialiased; }

        .font-xs {
        font-size: .75rem !important; }

        .font-sm {
        font-size: .85rem !important; }

        .font-lg {
        font-size: 1rem !important; }

        .font-xl {
        font-size: 1.25rem !important; }

        .font-2xl {
        font-size: 1.5rem !important; }

        .font-3xl {
        font-size: 1.75rem !important; }

        .font-4xl {
        font-size: 2rem !important; }

        .font-5xl {
        font-size: 2.5rem !important; }

        .animated {
        -webkit-animation-duration: 1s;
                animation-duration: 1s; }

        .animated.infinite {
        -webkit-animation-iteration-count: infinite;
                animation-iteration-count: infinite; }

        .animated.hinge {
        -webkit-animation-duration: 2s;
                animation-duration: 2s; }

        @-webkit-keyframes fadeIn {
        from {
            opacity: 0; }
        to {
            opacity: 1; } }

        @keyframes fadeIn {
        from {
            opacity: 0; }
        to {
            opacity: 1; } }

        .fadeIn {
        -webkit-animation-name: fadeIn;
                animation-name: fadeIn; }

        .aside-menu {
        z-index: 1019;
        width: 250px;
        color: #29363d;
        background: #fff;
        border-left: 1px solid #c2cfd6; }
        .aside-menu .nav-tabs {
            border-color: #c2cfd6; }
            .aside-menu .nav-tabs .nav-link, .aside-menu .nav-tabs .navbar .dropdown-toggle, .navbar .aside-menu .nav-tabs .dropdown-toggle {
            padding: 0.75rem 1rem;
            color: #151b1e;
            border-top: 0; }
            .aside-menu .nav-tabs .nav-link.active, .aside-menu .nav-tabs .navbar .active.dropdown-toggle, .navbar .aside-menu .nav-tabs .active.dropdown-toggle {
                color: #20a8d8;
                border-right-color: #c2cfd6;
                border-left-color: #c2cfd6; }
            .aside-menu .nav-tabs .nav-item:first-child .nav-link, .aside-menu .nav-tabs .nav-item:first-child .navbar .dropdown-toggle, .navbar .aside-menu .nav-tabs .nav-item:first-child .dropdown-toggle {
            border-left: 0; }
        .aside-menu .tab-content {
            position: relative;
            overflow-x: hidden;
            overflow-y: auto;
            border: 0;
            border-top: 1px solid #c2cfd6;
            -ms-overflow-style: -ms-autohiding-scrollbar; }
            .aside-menu .tab-content::-webkit-scrollbar {
            width: 10px;
            margin-left: -10px;
            -webkit-appearance: none; }
            .aside-menu .tab-content::-webkit-scrollbar-track {
            background-color: white;
            border-right: 1px solid #f2f2f2;
            border-left: 1px solid #f2f2f2; }
            .aside-menu .tab-content::-webkit-scrollbar-thumb {
            height: 50px;
            background-color: #e6e6e6;
            background-clip: content-box;
            border-color: transparent;
            border-style: solid;
            border-width: 1px 2px; }
            .aside-menu .tab-content .tab-pane {
            padding: 0; }

        .img-avatar {
        border-radius: 0em; }

        .avatar {
        position: relative;
        display: inline-block;
        width: 36px; }
        .avatar .img-avatar {
            width: 36px;
            height: 36px; }
        .avatar .avatar-status {
            position: absolute;
            right: 0;
            bottom: 0;
            display: block;
            width: 10px;
            height: 10px;
            border: 1px solid #fff;
            border-radius: 50em; }

        .avatar.avatar-xs {
        position: relative;
        display: inline-block;
        width: 20px; }
        .avatar.avatar-xs .img-avatar {
            width: 20px;
            height: 20px; }
        .avatar.avatar-xs .avatar-status {
            position: absolute;
            right: 0;
            bottom: 0;
            display: block;
            width: 8px;
            height: 8px;
            border: 1px solid #fff;
            border-radius: 50em; }

        .avatar.avatar-sm {
        position: relative;
        display: inline-block;
        width: 24px; }
        .avatar.avatar-sm .img-avatar {
            width: 24px;
            height: 24px; }
        .avatar.avatar-sm .avatar-status {
            position: absolute;
            right: 0;
            bottom: 0;
            display: block;
            width: 8px;
            height: 8px;
            border: 1px solid #fff;
            border-radius: 50em; }

        .avatar.avatar-lg {
        position: relative;
        display: inline-block;
        width: 72px; }
        .avatar.avatar-lg .img-avatar {
            width: 72px;
            height: 72px; }
        .avatar.avatar-lg .avatar-status {
            position: absolute;
            right: 0;
            bottom: 0;
            display: block;
            width: 12px;
            height: 12px;
            border: 1px solid #fff;
            border-radius: 50em; }

        .avatars-stack .avatar.avatar-xs {
        margin-right: -10px; }

        .avatars-stack .avatar {
        margin-right: -15px;
        transition: margin-left 0.25s, margin-right 0.25s; }
        .avatars-stack .avatar:hover {
            margin-right: 0 !important; }

        .badge-pill {
        border-radius: 10rem; }

        .breadcrumb-menu {
        position: absolute;
        top: 0;
        right: 1rem; }
        .breadcrumb-menu::before {
            display: none; }
        .breadcrumb-menu .btn {
            padding-top: 0.75rem;
            padding-bottom: 0.75rem; }
        .breadcrumb-menu .btn {
            color: #536c79; }
            .breadcrumb-menu .btn:hover, .breadcrumb-menu .btn.active {
            color: #151b1e;
            background: transparent; }
        .breadcrumb-menu .open .btn {
            color: #151b1e;
            background: transparent; }
        .breadcrumb-menu .dropdown-menu {
            min-width: 180px;
            line-height: 1.5; }

        .breadcrumb {
        position: relative;
        margin: 0 0 1.5rem 0;
        border-bottom: 1px solid #c2cfd6; }

        button {
        cursor: pointer; }

        .btn .badge {
        position: absolute;
        top: 2px;
        right: 6px;
        font-size: 9px; }

        .btn-transparent {
        color: #fff;
        background-color: transparent;
        border-color: transparent; }

        .btn [class^="icon-"], .btn [class*=" icon-"] {
        display: inline-block;
        margin-top: -2px;
        vertical-align: middle; }

        .btn-facebook,
        .btn-twitter,
        .btn-linkedin,
        .btn-flickr,
        .btn-tumblr,
        .btn-xing,
        .btn-github,
        .btn-html5,
        .btn-openid,
        .btn-stack-overflow,
        .btn-youtube,
        .btn-css3,
        .btn-dribbble,
        .btn-google-plus,
        .btn-instagram,
        .btn-pinterest,
        .btn-vk,
        .btn-yahoo,
        .btn-behance,
        .btn-dropbox,
        .btn-reddit,
        .btn-spotify,
        .btn-vine,
        .btn-foursquare,
        .btn-vimeo {
        position: relative;
        overflow: hidden;
        color: #fff !important;
        text-align: center;
        padding: 0.5rem 0.75rem;
        font-size: 0.875rem;
        line-height: 1.5;
        border: 0; }
        .btn-facebook::before,
        .btn-twitter::before,
        .btn-linkedin::before,
        .btn-flickr::before,
        .btn-tumblr::before,
        .btn-xing::before,
        .btn-github::before,
        .btn-html5::before,
        .btn-openid::before,
        .btn-stack-overflow::before,
        .btn-youtube::before,
        .btn-css3::before,
        .btn-dribbble::before,
        .btn-google-plus::before,
        .btn-instagram::before,
        .btn-pinterest::before,
        .btn-vk::before,
        .btn-yahoo::before,
        .btn-behance::before,
        .btn-dropbox::before,
        .btn-reddit::before,
        .btn-spotify::before,
        .btn-vine::before,
        .btn-foursquare::before,
        .btn-vimeo::before {
            position: absolute;
            top: 0;
            left: 0;
            display: block;
            font-family: "FontAwesome";
            font-style: normal;
            font-weight: normal;
            -moz-osx-font-smoothing: grayscale;
            -webkit-font-smoothing: antialiased; }
        .btn-facebook:hover,
        .btn-twitter:hover,
        .btn-linkedin:hover,
        .btn-flickr:hover,
        .btn-tumblr:hover,
        .btn-xing:hover,
        .btn-github:hover,
        .btn-html5:hover,
        .btn-openid:hover,
        .btn-stack-overflow:hover,
        .btn-youtube:hover,
        .btn-css3:hover,
        .btn-dribbble:hover,
        .btn-google-plus:hover,
        .btn-instagram:hover,
        .btn-pinterest:hover,
        .btn-vk:hover,
        .btn-yahoo:hover,
        .btn-behance:hover,
        .btn-dropbox:hover,
        .btn-reddit:hover,
        .btn-spotify:hover,
        .btn-vine:hover,
        .btn-foursquare:hover,
        .btn-vimeo:hover {
            color: #fff; }
        .btn-facebook.icon span,
        .btn-twitter.icon span,
        .btn-linkedin.icon span,
        .btn-flickr.icon span,
        .btn-tumblr.icon span,
        .btn-xing.icon span,
        .btn-github.icon span,
        .btn-html5.icon span,
        .btn-openid.icon span,
        .btn-stack-overflow.icon span,
        .btn-youtube.icon span,
        .btn-css3.icon span,
        .btn-dribbble.icon span,
        .btn-google-plus.icon span,
        .btn-instagram.icon span,
        .btn-pinterest.icon span,
        .btn-vk.icon span,
        .btn-yahoo.icon span,
        .btn-behance.icon span,
        .btn-dropbox.icon span,
        .btn-reddit.icon span,
        .btn-spotify.icon span,
        .btn-vine.icon span,
        .btn-foursquare.icon span,
        .btn-vimeo.icon span {
            display: none; }
        .btn-facebook.text::before,
        .btn-twitter.text::before,
        .btn-linkedin.text::before,
        .btn-flickr.text::before,
        .btn-tumblr.text::before,
        .btn-xing.text::before,
        .btn-github.text::before,
        .btn-html5.text::before,
        .btn-openid.text::before,
        .btn-stack-overflow.text::before,
        .btn-youtube.text::before,
        .btn-css3.text::before,
        .btn-dribbble.text::before,
        .btn-google-plus.text::before,
        .btn-instagram.text::before,
        .btn-pinterest.text::before,
        .btn-vk.text::before,
        .btn-yahoo.text::before,
        .btn-behance.text::before,
        .btn-dropbox.text::before,
        .btn-reddit.text::before,
        .btn-spotify.text::before,
        .btn-vine.text::before,
        .btn-foursquare.text::before,
        .btn-vimeo.text::before {
            display: none; }
        .btn-facebook.text span,
        .btn-twitter.text span,
        .btn-linkedin.text span,
        .btn-flickr.text span,
        .btn-tumblr.text span,
        .btn-xing.text span,
        .btn-github.text span,
        .btn-html5.text span,
        .btn-openid.text span,
        .btn-stack-overflow.text span,
        .btn-youtube.text span,
        .btn-css3.text span,
        .btn-dribbble.text span,
        .btn-google-plus.text span,
        .btn-instagram.text span,
        .btn-pinterest.text span,
        .btn-vk.text span,
        .btn-yahoo.text span,
        .btn-behance.text span,
        .btn-dropbox.text span,
        .btn-reddit.text span,
        .btn-spotify.text span,
        .btn-vine.text span,
        .btn-foursquare.text span,
        .btn-vimeo.text span {
            margin-left: 0 !important; }
        .btn-facebook::before,
        .btn-twitter::before,
        .btn-linkedin::before,
        .btn-flickr::before,
        .btn-tumblr::before,
        .btn-xing::before,
        .btn-github::before,
        .btn-html5::before,
        .btn-openid::before,
        .btn-stack-overflow::before,
        .btn-youtube::before,
        .btn-css3::before,
        .btn-dribbble::before,
        .btn-google-plus::before,
        .btn-instagram::before,
        .btn-pinterest::before,
        .btn-vk::before,
        .btn-yahoo::before,
        .btn-behance::before,
        .btn-dropbox::before,
        .btn-reddit::before,
        .btn-spotify::before,
        .btn-vine::before,
        .btn-foursquare::before,
        .btn-vimeo::before {
            width: 2.3125rem;
            height: 2.3125rem;
            padding: 0.5rem 0;
            font-size: 0.875rem;
            line-height: 1.5; }
        .btn-facebook span,
        .btn-twitter span,
        .btn-linkedin span,
        .btn-flickr span,
        .btn-tumblr span,
        .btn-xing span,
        .btn-github span,
        .btn-html5 span,
        .btn-openid span,
        .btn-stack-overflow span,
        .btn-youtube span,
        .btn-css3 span,
        .btn-dribbble span,
        .btn-google-plus span,
        .btn-instagram span,
        .btn-pinterest span,
        .btn-vk span,
        .btn-yahoo span,
        .btn-behance span,
        .btn-dropbox span,
        .btn-reddit span,
        .btn-spotify span,
        .btn-vine span,
        .btn-foursquare span,
        .btn-vimeo span {
            margin-left: 2.3125rem; }
        .btn-facebook.icon,
        .btn-twitter.icon,
        .btn-linkedin.icon,
        .btn-flickr.icon,
        .btn-tumblr.icon,
        .btn-xing.icon,
        .btn-github.icon,
        .btn-html5.icon,
        .btn-openid.icon,
        .btn-stack-overflow.icon,
        .btn-youtube.icon,
        .btn-css3.icon,
        .btn-dribbble.icon,
        .btn-google-plus.icon,
        .btn-instagram.icon,
        .btn-pinterest.icon,
        .btn-vk.icon,
        .btn-yahoo.icon,
        .btn-behance.icon,
        .btn-dropbox.icon,
        .btn-reddit.icon,
        .btn-spotify.icon,
        .btn-vine.icon,
        .btn-foursquare.icon,
        .btn-vimeo.icon {
            width: 2.3125rem;
            height: 2.3125rem; }
        .btn-facebook.btn-lg, .btn-group-lg > .btn-facebook.btn,
        .btn-twitter.btn-lg,
        .btn-group-lg > .btn-twitter.btn,
        .btn-linkedin.btn-lg,
        .btn-group-lg > .btn-linkedin.btn,
        .btn-flickr.btn-lg,
        .btn-group-lg > .btn-flickr.btn,
        .btn-tumblr.btn-lg,
        .btn-group-lg > .btn-tumblr.btn,
        .btn-xing.btn-lg,
        .btn-group-lg > .btn-xing.btn,
        .btn-github.btn-lg,
        .btn-group-lg > .btn-github.btn,
        .btn-html5.btn-lg,
        .btn-group-lg > .btn-html5.btn,
        .btn-openid.btn-lg,
        .btn-group-lg > .btn-openid.btn,
        .btn-stack-overflow.btn-lg,
        .btn-group-lg > .btn-stack-overflow.btn,
        .btn-youtube.btn-lg,
        .btn-group-lg > .btn-youtube.btn,
        .btn-css3.btn-lg,
        .btn-group-lg > .btn-css3.btn,
        .btn-dribbble.btn-lg,
        .btn-group-lg > .btn-dribbble.btn,
        .btn-google-plus.btn-lg,
        .btn-group-lg > .btn-google-plus.btn,
        .btn-instagram.btn-lg,
        .btn-group-lg > .btn-instagram.btn,
        .btn-pinterest.btn-lg,
        .btn-group-lg > .btn-pinterest.btn,
        .btn-vk.btn-lg,
        .btn-group-lg > .btn-vk.btn,
        .btn-yahoo.btn-lg,
        .btn-group-lg > .btn-yahoo.btn,
        .btn-behance.btn-lg,
        .btn-group-lg > .btn-behance.btn,
        .btn-dropbox.btn-lg,
        .btn-group-lg > .btn-dropbox.btn,
        .btn-reddit.btn-lg,
        .btn-group-lg > .btn-reddit.btn,
        .btn-spotify.btn-lg,
        .btn-group-lg > .btn-spotify.btn,
        .btn-vine.btn-lg,
        .btn-group-lg > .btn-vine.btn,
        .btn-foursquare.btn-lg,
        .btn-group-lg > .btn-foursquare.btn,
        .btn-vimeo.btn-lg,
        .btn-group-lg > .btn-vimeo.btn {
            padding: 0.5rem 1rem;
            font-size: 1.25rem;
            line-height: 1.5;
            border: 0; }
            .btn-facebook.btn-lg::before, .btn-group-lg > .btn-facebook.btn::before,
            .btn-twitter.btn-lg::before,
            .btn-group-lg > .btn-twitter.btn::before,
            .btn-linkedin.btn-lg::before,
            .btn-group-lg > .btn-linkedin.btn::before,
            .btn-flickr.btn-lg::before,
            .btn-group-lg > .btn-flickr.btn::before,
            .btn-tumblr.btn-lg::before,
            .btn-group-lg > .btn-tumblr.btn::before,
            .btn-xing.btn-lg::before,
            .btn-group-lg > .btn-xing.btn::before,
            .btn-github.btn-lg::before,
            .btn-group-lg > .btn-github.btn::before,
            .btn-html5.btn-lg::before,
            .btn-group-lg > .btn-html5.btn::before,
            .btn-openid.btn-lg::before,
            .btn-group-lg > .btn-openid.btn::before,
            .btn-stack-overflow.btn-lg::before,
            .btn-group-lg > .btn-stack-overflow.btn::before,
            .btn-youtube.btn-lg::before,
            .btn-group-lg > .btn-youtube.btn::before,
            .btn-css3.btn-lg::before,
            .btn-group-lg > .btn-css3.btn::before,
            .btn-dribbble.btn-lg::before,
            .btn-group-lg > .btn-dribbble.btn::before,
            .btn-google-plus.btn-lg::before,
            .btn-group-lg > .btn-google-plus.btn::before,
            .btn-instagram.btn-lg::before,
            .btn-group-lg > .btn-instagram.btn::before,
            .btn-pinterest.btn-lg::before,
            .btn-group-lg > .btn-pinterest.btn::before,
            .btn-vk.btn-lg::before,
            .btn-group-lg > .btn-vk.btn::before,
            .btn-yahoo.btn-lg::before,
            .btn-group-lg > .btn-yahoo.btn::before,
            .btn-behance.btn-lg::before,
            .btn-group-lg > .btn-behance.btn::before,
            .btn-dropbox.btn-lg::before,
            .btn-group-lg > .btn-dropbox.btn::before,
            .btn-reddit.btn-lg::before,
            .btn-group-lg > .btn-reddit.btn::before,
            .btn-spotify.btn-lg::before,
            .btn-group-lg > .btn-spotify.btn::before,
            .btn-vine.btn-lg::before,
            .btn-group-lg > .btn-vine.btn::before,
            .btn-foursquare.btn-lg::before,
            .btn-group-lg > .btn-foursquare.btn::before,
            .btn-vimeo.btn-lg::before,
            .btn-group-lg > .btn-vimeo.btn::before {
            width: 2.875rem;
            height: 2.875rem;
            padding: 0.5rem 0;
            font-size: 1.25rem;
            line-height: 1.5; }
            .btn-facebook.btn-lg span, .btn-group-lg > .btn-facebook.btn span,
            .btn-twitter.btn-lg span, .btn-group-lg > .btn-twitter.btn span,
            .btn-linkedin.btn-lg span, .btn-group-lg > .btn-linkedin.btn span,
            .btn-flickr.btn-lg span, .btn-group-lg > .btn-flickr.btn span,
            .btn-tumblr.btn-lg span, .btn-group-lg > .btn-tumblr.btn span,
            .btn-xing.btn-lg span, .btn-group-lg > .btn-xing.btn span,
            .btn-github.btn-lg span, .btn-group-lg > .btn-github.btn span,
            .btn-html5.btn-lg span, .btn-group-lg > .btn-html5.btn span,
            .btn-openid.btn-lg span, .btn-group-lg > .btn-openid.btn span,
            .btn-stack-overflow.btn-lg span, .btn-group-lg > .btn-stack-overflow.btn span,
            .btn-youtube.btn-lg span, .btn-group-lg > .btn-youtube.btn span,
            .btn-css3.btn-lg span, .btn-group-lg > .btn-css3.btn span,
            .btn-dribbble.btn-lg span, .btn-group-lg > .btn-dribbble.btn span,
            .btn-google-plus.btn-lg span, .btn-group-lg > .btn-google-plus.btn span,
            .btn-instagram.btn-lg span, .btn-group-lg > .btn-instagram.btn span,
            .btn-pinterest.btn-lg span, .btn-group-lg > .btn-pinterest.btn span,
            .btn-vk.btn-lg span, .btn-group-lg > .btn-vk.btn span,
            .btn-yahoo.btn-lg span, .btn-group-lg > .btn-yahoo.btn span,
            .btn-behance.btn-lg span, .btn-group-lg > .btn-behance.btn span,
            .btn-dropbox.btn-lg span, .btn-group-lg > .btn-dropbox.btn span,
            .btn-reddit.btn-lg span, .btn-group-lg > .btn-reddit.btn span,
            .btn-spotify.btn-lg span, .btn-group-lg > .btn-spotify.btn span,
            .btn-vine.btn-lg span, .btn-group-lg > .btn-vine.btn span,
            .btn-foursquare.btn-lg span, .btn-group-lg > .btn-foursquare.btn span,
            .btn-vimeo.btn-lg span, .btn-group-lg > .btn-vimeo.btn span {
            margin-left: 2.875rem; }
            .btn-facebook.btn-lg.icon, .btn-group-lg > .btn-facebook.icon.btn,
            .btn-twitter.btn-lg.icon,
            .btn-group-lg > .btn-twitter.icon.btn,
            .btn-linkedin.btn-lg.icon,
            .btn-group-lg > .btn-linkedin.icon.btn,
            .btn-flickr.btn-lg.icon,
            .btn-group-lg > .btn-flickr.icon.btn,
            .btn-tumblr.btn-lg.icon,
            .btn-group-lg > .btn-tumblr.icon.btn,
            .btn-xing.btn-lg.icon,
            .btn-group-lg > .btn-xing.icon.btn,
            .btn-github.btn-lg.icon,
            .btn-group-lg > .btn-github.icon.btn,
            .btn-html5.btn-lg.icon,
            .btn-group-lg > .btn-html5.icon.btn,
            .btn-openid.btn-lg.icon,
            .btn-group-lg > .btn-openid.icon.btn,
            .btn-stack-overflow.btn-lg.icon,
            .btn-group-lg > .btn-stack-overflow.icon.btn,
            .btn-youtube.btn-lg.icon,
            .btn-group-lg > .btn-youtube.icon.btn,
            .btn-css3.btn-lg.icon,
            .btn-group-lg > .btn-css3.icon.btn,
            .btn-dribbble.btn-lg.icon,
            .btn-group-lg > .btn-dribbble.icon.btn,
            .btn-google-plus.btn-lg.icon,
            .btn-group-lg > .btn-google-plus.icon.btn,
            .btn-instagram.btn-lg.icon,
            .btn-group-lg > .btn-instagram.icon.btn,
            .btn-pinterest.btn-lg.icon,
            .btn-group-lg > .btn-pinterest.icon.btn,
            .btn-vk.btn-lg.icon,
            .btn-group-lg > .btn-vk.icon.btn,
            .btn-yahoo.btn-lg.icon,
            .btn-group-lg > .btn-yahoo.icon.btn,
            .btn-behance.btn-lg.icon,
            .btn-group-lg > .btn-behance.icon.btn,
            .btn-dropbox.btn-lg.icon,
            .btn-group-lg > .btn-dropbox.icon.btn,
            .btn-reddit.btn-lg.icon,
            .btn-group-lg > .btn-reddit.icon.btn,
            .btn-spotify.btn-lg.icon,
            .btn-group-lg > .btn-spotify.icon.btn,
            .btn-vine.btn-lg.icon,
            .btn-group-lg > .btn-vine.icon.btn,
            .btn-foursquare.btn-lg.icon,
            .btn-group-lg > .btn-foursquare.icon.btn,
            .btn-vimeo.btn-lg.icon,
            .btn-group-lg > .btn-vimeo.icon.btn {
            width: 2.875rem;
            height: 2.875rem; }
        .btn-facebook.btn-sm, .btn-group-sm > .btn-facebook.btn,
        .btn-twitter.btn-sm,
        .btn-group-sm > .btn-twitter.btn,
        .btn-linkedin.btn-sm,
        .btn-group-sm > .btn-linkedin.btn,
        .btn-flickr.btn-sm,
        .btn-group-sm > .btn-flickr.btn,
        .btn-tumblr.btn-sm,
        .btn-group-sm > .btn-tumblr.btn,
        .btn-xing.btn-sm,
        .btn-group-sm > .btn-xing.btn,
        .btn-github.btn-sm,
        .btn-group-sm > .btn-github.btn,
        .btn-html5.btn-sm,
        .btn-group-sm > .btn-html5.btn,
        .btn-openid.btn-sm,
        .btn-group-sm > .btn-openid.btn,
        .btn-stack-overflow.btn-sm,
        .btn-group-sm > .btn-stack-overflow.btn,
        .btn-youtube.btn-sm,
        .btn-group-sm > .btn-youtube.btn,
        .btn-css3.btn-sm,
        .btn-group-sm > .btn-css3.btn,
        .btn-dribbble.btn-sm,
        .btn-group-sm > .btn-dribbble.btn,
        .btn-google-plus.btn-sm,
        .btn-group-sm > .btn-google-plus.btn,
        .btn-instagram.btn-sm,
        .btn-group-sm > .btn-instagram.btn,
        .btn-pinterest.btn-sm,
        .btn-group-sm > .btn-pinterest.btn,
        .btn-vk.btn-sm,
        .btn-group-sm > .btn-vk.btn,
        .btn-yahoo.btn-sm,
        .btn-group-sm > .btn-yahoo.btn,
        .btn-behance.btn-sm,
        .btn-group-sm > .btn-behance.btn,
        .btn-dropbox.btn-sm,
        .btn-group-sm > .btn-dropbox.btn,
        .btn-reddit.btn-sm,
        .btn-group-sm > .btn-reddit.btn,
        .btn-spotify.btn-sm,
        .btn-group-sm > .btn-spotify.btn,
        .btn-vine.btn-sm,
        .btn-group-sm > .btn-vine.btn,
        .btn-foursquare.btn-sm,
        .btn-group-sm > .btn-foursquare.btn,
        .btn-vimeo.btn-sm,
        .btn-group-sm > .btn-vimeo.btn {
            padding: 0.25rem 0.5rem;
            font-size: 0.875rem;
            line-height: 1.5;
            border: 0; }
            .btn-facebook.btn-sm::before, .btn-group-sm > .btn-facebook.btn::before,
            .btn-twitter.btn-sm::before,
            .btn-group-sm > .btn-twitter.btn::before,
            .btn-linkedin.btn-sm::before,
            .btn-group-sm > .btn-linkedin.btn::before,
            .btn-flickr.btn-sm::before,
            .btn-group-sm > .btn-flickr.btn::before,
            .btn-tumblr.btn-sm::before,
            .btn-group-sm > .btn-tumblr.btn::before,
            .btn-xing.btn-sm::before,
            .btn-group-sm > .btn-xing.btn::before,
            .btn-github.btn-sm::before,
            .btn-group-sm > .btn-github.btn::before,
            .btn-html5.btn-sm::before,
            .btn-group-sm > .btn-html5.btn::before,
            .btn-openid.btn-sm::before,
            .btn-group-sm > .btn-openid.btn::before,
            .btn-stack-overflow.btn-sm::before,
            .btn-group-sm > .btn-stack-overflow.btn::before,
            .btn-youtube.btn-sm::before,
            .btn-group-sm > .btn-youtube.btn::before,
            .btn-css3.btn-sm::before,
            .btn-group-sm > .btn-css3.btn::before,
            .btn-dribbble.btn-sm::before,
            .btn-group-sm > .btn-dribbble.btn::before,
            .btn-google-plus.btn-sm::before,
            .btn-group-sm > .btn-google-plus.btn::before,
            .btn-instagram.btn-sm::before,
            .btn-group-sm > .btn-instagram.btn::before,
            .btn-pinterest.btn-sm::before,
            .btn-group-sm > .btn-pinterest.btn::before,
            .btn-vk.btn-sm::before,
            .btn-group-sm > .btn-vk.btn::before,
            .btn-yahoo.btn-sm::before,
            .btn-group-sm > .btn-yahoo.btn::before,
            .btn-behance.btn-sm::before,
            .btn-group-sm > .btn-behance.btn::before,
            .btn-dropbox.btn-sm::before,
            .btn-group-sm > .btn-dropbox.btn::before,
            .btn-reddit.btn-sm::before,
            .btn-group-sm > .btn-reddit.btn::before,
            .btn-spotify.btn-sm::before,
            .btn-group-sm > .btn-spotify.btn::before,
            .btn-vine.btn-sm::before,
            .btn-group-sm > .btn-vine.btn::before,
            .btn-foursquare.btn-sm::before,
            .btn-group-sm > .btn-foursquare.btn::before,
            .btn-vimeo.btn-sm::before,
            .btn-group-sm > .btn-vimeo.btn::before {
            width: 1.8125rem;
            height: 1.8125rem;
            padding: 0.25rem 0;
            font-size: 0.875rem;
            line-height: 1.5; }
            .btn-facebook.btn-sm span, .btn-group-sm > .btn-facebook.btn span,
            .btn-twitter.btn-sm span, .btn-group-sm > .btn-twitter.btn span,
            .btn-linkedin.btn-sm span, .btn-group-sm > .btn-linkedin.btn span,
            .btn-flickr.btn-sm span, .btn-group-sm > .btn-flickr.btn span,
            .btn-tumblr.btn-sm span, .btn-group-sm > .btn-tumblr.btn span,
            .btn-xing.btn-sm span, .btn-group-sm > .btn-xing.btn span,
            .btn-github.btn-sm span, .btn-group-sm > .btn-github.btn span,
            .btn-html5.btn-sm span, .btn-group-sm > .btn-html5.btn span,
            .btn-openid.btn-sm span, .btn-group-sm > .btn-openid.btn span,
            .btn-stack-overflow.btn-sm span, .btn-group-sm > .btn-stack-overflow.btn span,
            .btn-youtube.btn-sm span, .btn-group-sm > .btn-youtube.btn span,
            .btn-css3.btn-sm span, .btn-group-sm > .btn-css3.btn span,
            .btn-dribbble.btn-sm span, .btn-group-sm > .btn-dribbble.btn span,
            .btn-google-plus.btn-sm span, .btn-group-sm > .btn-google-plus.btn span,
            .btn-instagram.btn-sm span, .btn-group-sm > .btn-instagram.btn span,
            .btn-pinterest.btn-sm span, .btn-group-sm > .btn-pinterest.btn span,
            .btn-vk.btn-sm span, .btn-group-sm > .btn-vk.btn span,
            .btn-yahoo.btn-sm span, .btn-group-sm > .btn-yahoo.btn span,
            .btn-behance.btn-sm span, .btn-group-sm > .btn-behance.btn span,
            .btn-dropbox.btn-sm span, .btn-group-sm > .btn-dropbox.btn span,
            .btn-reddit.btn-sm span, .btn-group-sm > .btn-reddit.btn span,
            .btn-spotify.btn-sm span, .btn-group-sm > .btn-spotify.btn span,
            .btn-vine.btn-sm span, .btn-group-sm > .btn-vine.btn span,
            .btn-foursquare.btn-sm span, .btn-group-sm > .btn-foursquare.btn span,
            .btn-vimeo.btn-sm span, .btn-group-sm > .btn-vimeo.btn span {
            margin-left: 1.8125rem; }
            .btn-facebook.btn-sm.icon, .btn-group-sm > .btn-facebook.icon.btn,
            .btn-twitter.btn-sm.icon,
            .btn-group-sm > .btn-twitter.icon.btn,
            .btn-linkedin.btn-sm.icon,
            .btn-group-sm > .btn-linkedin.icon.btn,
            .btn-flickr.btn-sm.icon,
            .btn-group-sm > .btn-flickr.icon.btn,
            .btn-tumblr.btn-sm.icon,
            .btn-group-sm > .btn-tumblr.icon.btn,
            .btn-xing.btn-sm.icon,
            .btn-group-sm > .btn-xing.icon.btn,
            .btn-github.btn-sm.icon,
            .btn-group-sm > .btn-github.icon.btn,
            .btn-html5.btn-sm.icon,
            .btn-group-sm > .btn-html5.icon.btn,
            .btn-openid.btn-sm.icon,
            .btn-group-sm > .btn-openid.icon.btn,
            .btn-stack-overflow.btn-sm.icon,
            .btn-group-sm > .btn-stack-overflow.icon.btn,
            .btn-youtube.btn-sm.icon,
            .btn-group-sm > .btn-youtube.icon.btn,
            .btn-css3.btn-sm.icon,
            .btn-group-sm > .btn-css3.icon.btn,
            .btn-dribbble.btn-sm.icon,
            .btn-group-sm > .btn-dribbble.icon.btn,
            .btn-google-plus.btn-sm.icon,
            .btn-group-sm > .btn-google-plus.icon.btn,
            .btn-instagram.btn-sm.icon,
            .btn-group-sm > .btn-instagram.icon.btn,
            .btn-pinterest.btn-sm.icon,
            .btn-group-sm > .btn-pinterest.icon.btn,
            .btn-vk.btn-sm.icon,
            .btn-group-sm > .btn-vk.icon.btn,
            .btn-yahoo.btn-sm.icon,
            .btn-group-sm > .btn-yahoo.icon.btn,
            .btn-behance.btn-sm.icon,
            .btn-group-sm > .btn-behance.icon.btn,
            .btn-dropbox.btn-sm.icon,
            .btn-group-sm > .btn-dropbox.icon.btn,
            .btn-reddit.btn-sm.icon,
            .btn-group-sm > .btn-reddit.icon.btn,
            .btn-spotify.btn-sm.icon,
            .btn-group-sm > .btn-spotify.icon.btn,
            .btn-vine.btn-sm.icon,
            .btn-group-sm > .btn-vine.icon.btn,
            .btn-foursquare.btn-sm.icon,
            .btn-group-sm > .btn-foursquare.icon.btn,
            .btn-vimeo.btn-sm.icon,
            .btn-group-sm > .btn-vimeo.icon.btn {
            width: 1.8125rem;
            height: 1.8125rem; }

        .btn-facebook {
        background: #3b5998; }
        .btn-facebook::before {
            content: "\f09a";
            background: #344e86; }
        .btn-facebook:hover {
            background: #344e86; }
            .btn-facebook:hover::before {
            background: #2d4373; }

        .btn-twitter {
        background: #00aced; }
        .btn-twitter::before {
            content: "\f099";
            background: #0099d4; }
        .btn-twitter:hover {
            background: #0099d4; }
            .btn-twitter:hover::before {
            background: #0087ba; }

        .btn-linkedin {
        background: #4875b4; }
        .btn-linkedin::before {
            content: "\f0e1";
            background: #4169a2; }
        .btn-linkedin:hover {
            background: #4169a2; }
            .btn-linkedin:hover::before {
            background: #395d90; }

        .btn-flickr {
        background: #ff0084; }
        .btn-flickr::before {
            content: "\f16e";
            background: #e60077; }
        .btn-flickr:hover {
            background: #e60077; }
            .btn-flickr:hover::before {
            background: #cc006a; }

        .btn-tumblr {
        background: #32506d; }
        .btn-tumblr::before {
            content: "\f173";
            background: #2a435c; }
        .btn-tumblr:hover {
            background: #2a435c; }
            .btn-tumblr:hover::before {
            background: #22364a; }

        .btn-xing {
        background: #026466; }
        .btn-xing::before {
            content: "\f168";
            background: #024b4d; }
        .btn-xing:hover {
            background: #024b4d; }
            .btn-xing:hover::before {
            background: #013334; }

        .btn-github {
        background: #4183c4; }
        .btn-github::before {
            content: "\f09b";
            background: #3876b4; }
        .btn-github:hover {
            background: #3876b4; }
            .btn-github:hover::before {
            background: #3269a0; }

        .btn-html5 {
        background: #e34f26; }
        .btn-html5::before {
            content: "\f13b";
            background: #d4431b; }
        .btn-html5:hover {
            background: #d4431b; }
            .btn-html5:hover::before {
            background: #be3c18; }

        .btn-openid {
        background: #f78c40; }
        .btn-openid::before {
            content: "\f19b";
            background: #f67d28; }
        .btn-openid:hover {
            background: #f67d28; }
            .btn-openid:hover::before {
            background: #f56f0f; }

        .btn-stack-overflow {
        background: #fe7a15; }
        .btn-stack-overflow::before {
            content: "\f16c";
            background: #f86c01; }
        .btn-stack-overflow:hover {
            background: #f86c01; }
            .btn-stack-overflow:hover::before {
            background: #df6101; }

        .btn-css3 {
        background: #0170ba; }
        .btn-css3::before {
            content: "\f13c";
            background: #0161a1; }
        .btn-css3:hover {
            background: #0161a1; }
            .btn-css3:hover::before {
            background: #015187; }

        .btn-youtube {
        background: #b00; }
        .btn-youtube::before {
            content: "\f167";
            background: #a20000; }
        .btn-youtube:hover {
            background: #a20000; }
            .btn-youtube:hover::before {
            background: #880000; }

        .btn-dribbble {
        background: #ea4c89; }
        .btn-dribbble::before {
            content: "\f17d";
            background: #e7357a; }
        .btn-dribbble:hover {
            background: #e7357a; }
            .btn-dribbble:hover::before {
            background: #e51e6b; }

        .btn-google-plus {
        background: #d34836; }
        .btn-google-plus::before {
            content: "\f0d5";
            background: #c43d2b; }
        .btn-google-plus:hover {
            background: #c43d2b; }
            .btn-google-plus:hover::before {
            background: #b03626; }

        .btn-instagram {
        background: #517fa4; }
        .btn-instagram::before {
            content: "\f16d";
            background: #497293; }
        .btn-instagram:hover {
            background: #497293; }
            .btn-instagram:hover::before {
            background: #406582; }

        .btn-pinterest {
        background: #cb2027; }
        .btn-pinterest::before {
            content: "\f0d2";
            background: #b51d23; }
        .btn-pinterest:hover {
            background: #b51d23; }
            .btn-pinterest:hover::before {
            background: #9f191f; }

        .btn-vk {
        background: #45668e; }
        .btn-vk::before {
            content: "\f189";
            background: #3d5a7d; }
        .btn-vk:hover {
            background: #3d5a7d; }
            .btn-vk:hover::before {
            background: #344d6c; }

        .btn-yahoo {
        background: #400191; }
        .btn-yahoo::before {
            content: "\f19e";
            background: #350178; }
        .btn-yahoo:hover {
            background: #350178; }
            .btn-yahoo:hover::before {
            background: #2a015e; }

        .btn-behance {
        background: #1769ff; }
        .btn-behance::before {
            content: "\f1b4";
            background: #0059fd; }
        .btn-behance:hover {
            background: #0059fd; }
            .btn-behance:hover::before {
            background: #0050e3; }

        .btn-dropbox {
        background: #007ee5; }
        .btn-dropbox::before {
            content: "\f16b";
            background: #0070cc; }
        .btn-dropbox:hover {
            background: #0070cc; }
            .btn-dropbox:hover::before {
            background: #0062b2; }

        .btn-reddit {
        background: #ff4500; }
        .btn-reddit::before {
            content: "\f1a1";
            background: #e63e00; }
        .btn-reddit:hover {
            background: #e63e00; }
            .btn-reddit:hover::before {
            background: #cc3700; }

        .btn-spotify {
        background: #7ab800; }
        .btn-spotify::before {
            content: "\f1bc";
            background: #699f00; }
        .btn-spotify:hover {
            background: #699f00; }
            .btn-spotify:hover::before {
            background: #588500; }

        .btn-vine {
        background: #00bf8f; }
        .btn-vine::before {
            content: "\f1ca";
            background: #00a67c; }
        .btn-vine:hover {
            background: #00a67c; }
            .btn-vine:hover::before {
            background: #008c69; }

        .btn-foursquare {
        background: #1073af; }
        .btn-foursquare::before {
            content: "\f180";
            background: #0e6498; }
        .btn-foursquare:hover {
            background: #0e6498; }
            .btn-foursquare:hover::before {
            background: #0c5480; }

        .btn-vimeo {
        background: #aad450; }
        .btn-vimeo::before {
            content: "\f194";
            background: #a0cf3c; }
        .btn-vimeo:hover {
            background: #a0cf3c; }
            .btn-vimeo:hover::before {
            background: #93c130; }

        .callout {
        position: relative;
        padding: 0 1rem;
        margin: 1rem 0;
        border: 0 solid #c2cfd6;
        border-left-width: .25rem; }
        .callout .chart-wrapper {
            position: absolute;
            top: 10px;
            left: 50%;
            float: right;
            width: 50%; }

        .callout-bordered {
        border: 1px solid #c2cfd6;
        border-left-width: .25rem; }

        .callout code {
        border-radius: .25rem; }

        .callout h4 {
        margin-top: 0;
        margin-bottom: .25rem; }

        .callout p:last-child {
        margin-bottom: 0; }

        .callout + .callout {
        margin-top: -0.25rem; }

        .callout-default {
        border-left-color: #536c79; }
        .callout-default h4 {
            color: #536c79; }

        .callout-primary {
        border-left-color: #20a8d8; }
        .callout-primary h4 {
            color: #20a8d8; }

        .callout-secondary {
        border-left-color: #a4b7c1; }
        .callout-secondary h4 {
            color: #a4b7c1; }

        .callout-success {
        border-left-color: #4dbd74; }
        .callout-success h4 {
            color: #4dbd74; }

        .callout-info {
        border-left-color: #63c2de; }
        .callout-info h4 {
            color: #63c2de; }

        .callout-warning {
        border-left-color: #ffc107; }
        .callout-warning h4 {
            color: #ffc107; }

        .callout-danger {
        border-left-color: #f86c6b; }
        .callout-danger h4 {
            color: #f86c6b; }

        .callout-light {
        border-left-color: #f0f3f5; }
        .callout-light h4 {
            color: #f0f3f5; }

        .callout-dark {
        border-left-color: #29363d; }
        .callout-dark h4 {
            color: #29363d; }

        .card {
        margin-bottom: 1.5rem; }
        .card.bg-primary {
            border-color: #187da0; }
            .card.bg-primary .card-header {
            background-color: #1e9ecb;
            border-color: #187da0; }
        .card.bg-secondary {
            border-color: #7e99a7; }
            .card.bg-secondary .card-header {
            background-color: #9bb0bb;
            border-color: #7e99a7; }
        .card.bg-success {
            border-color: #379457; }
            .card.bg-success .card-header {
            background-color: #44b76c;
            border-color: #379457; }
        .card.bg-info {
            border-color: #2eadd3; }
            .card.bg-info .card-header {
            background-color: #56bddb;
            border-color: #2eadd3; }
        .card.bg-warning {
            border-color: #c69500; }
            .card.bg-warning .card-header {
            background-color: #f7b900;
            border-color: #c69500; }
        .card.bg-danger {
            border-color: #f5302e; }
            .card.bg-danger .card-header {
            background-color: #f75d5c;
            border-color: #f5302e; }
        .card.bg-light {
            border-color: #cad4dc; }
            .card.bg-light .card-header {
            background-color: #e7ecef;
            border-color: #cad4dc; }
        .card.bg-dark {
            border-color: #0f1417; }
            .card.bg-dark .card-header {
            background-color: #232e34;
            border-color: #0f1417; }

        .text-white .text-muted {
        color: rgba(255, 255, 255, 0.6) !important; }

        .card-header .icon-bg {
        display: inline-body;
        padding: 0.75rem 1.25rem !important;
        margin-top: -0.75rem;
        margin-right: 1.25rem;
        margin-bottom: -0.75rem;
        margin-left: -1.25rem;
        line-height: inherit;
        color: #151b1e;
        vertical-align: bottom;
        background: transparent;
        border-right: 1px solid #c2cfd6; }

        .card-header .nav.nav-tabs {
        margin-top: -0.75rem;
        margin-bottom: -0.75rem;
        border-bottom: 0; }
        .card-header .nav.nav-tabs .nav-item {
            border-top: 0; }
        .card-header .nav.nav-tabs .nav-link, .card-header .nav.nav-tabs .navbar .dropdown-toggle, .navbar .card-header .nav.nav-tabs .dropdown-toggle {
            padding: 0.75rem 0.625rem;
            color: #536c79;
            border-top: 0; }
            .card-header .nav.nav-tabs .nav-link.active, .card-header .nav.nav-tabs .navbar .active.dropdown-toggle, .navbar .card-header .nav.nav-tabs .active.dropdown-toggle {
            color: #151b1e;
            background: #fff; }

        .card-header.card-header-inverse {
        color: #fff; }

        .card-header .btn {
        margin-top: -0.5rem; }

        .card-header .btn-sm, .card-header .btn-group-sm > .btn {
        margin-top: -0.25rem; }

        .card-header .btn-lg, .card-header .btn-group-lg > .btn {
        margin-top: -0.5rem; }

        .card-footer ul {
        display: table;
        width: 100%;
        padding: 0;
        margin: 0;
        table-layout: fixed; }
        .card-footer ul li {
            display: table-cell;
            padding: 0 1.25rem;
            text-align: center; }

        [class*="card-outline-"] .card-body, [class*="card-outline-"] .card-block {
        background: #fff !important; }

        [class*="card-outline-"].card-outline-top {
        border-top-width: 2px;
        border-right-color: #c2cfd6;
        border-bottom-color: #c2cfd6;
        border-left-color: #c2cfd6; }

        .card-accent-primary {
        border-top-width: 2px;
        border-top-color: #20a8d8; }

        .card-accent-secondary {
        border-top-width: 2px;
        border-top-color: #a4b7c1; }

        .card-accent-success {
        border-top-width: 2px;
        border-top-color: #4dbd74; }

        .card-accent-info {
        border-top-width: 2px;
        border-top-color: #63c2de; }

        .card-accent-warning {
        border-top-width: 2px;
        border-top-color: #ffc107; }

        .card-accent-danger {
        border-top-width: 2px;
        border-top-color: #f86c6b; }

        .card-accent-light {
        border-top-width: 2px;
        border-top-color: #f0f3f5; }

        .card-accent-dark {
        border-top-width: 2px;
        border-top-color: #29363d; }

        .card-header > i {
        margin-right: 0.5rem; }

        .card-header .card-actions {
        position: absolute;
        top: 0;
        right: 0; }
        .card-header .card-actions a, .card-header .card-actions button {
            display: block;
            float: left;
            width: 50px;
            padding: 0.75rem 0;
            margin: 0 !important;
            color: #151b1e;
            text-align: center;
            background: transparent;
            border: 0;
            border-left: 1px solid #c2cfd6;
            box-shadow: 0; }
            .card-header .card-actions a:hover, .card-header .card-actions button:hover {
            text-decoration: none; }
            .card-header .card-actions a [class^="icon-"], .card-header .card-actions a [class*=" icon-"], .card-header .card-actions button [class^="icon-"], .card-header .card-actions button [class*=" icon-"] {
            display: inline-body;
            vertical-align: middle; }
            .card-header .card-actions a i, .card-header .card-actions button i {
            display: inline-body;
            transition: .4s; }
            .card-header .card-actions a .r180, .card-header .card-actions button .r180 {
            -webkit-transform: rotate(180deg);
                    transform: rotate(180deg); }
        .card-header .card-actions .input-group {
            width: 230px;
            margin: 6px; }
            .card-header .card-actions .input-group .input-group-addon {
            background: #fff; }
            .card-header .card-actions .input-group input {
            border-left: 0; }

        .card-full {
        margin-top: -1rem;
        margin-right: -15px;
        margin-left: -15px;
        border: 0;
        border-bottom: 1px solid #c2cfd6; }

        @media (min-width: 576px) {
        .card-columns.cols-2 {
            -webkit-column-count: 2;
                    column-count: 2; } }

        .card.drag, .card .drag {
        cursor: move; }

        .card-placeholder {
        background: rgba(0, 0, 0, 0.025);
        border: 1px dashed #a4b7c1; }

        .chart-wrapper canvas {
        width: 100% !important; }

        base-chart.chart {
        display: block !important; }

        .dropdown-item {
        position: relative;
        padding: 10px 20px;
        border-bottom: 1px solid #c2cfd6; }
        .dropdown-item:last-child {
            border-bottom: 0; }
        .dropdown-item i {
            display: inline-block;
            width: 20px;
            margin-right: 10px;
            margin-left: -10px;
            color: #c2cfd6;
            text-align: center; }
        .dropdown-item .badge {
            position: absolute;
            right: 10px;
            margin-top: 2px; }

        .dropdown-header {
        padding: 8px 20px;
        background: #f0f3f5;
        border-bottom: 1px solid #c2cfd6; }
        .dropdown-header .btn {
            margin-top: -7px;
            color: #536c79; }
            .dropdown-header .btn:hover {
            color: #151b1e; }
            .dropdown-header .btn.pull-right {
            margin-right: -20px; }

        .dropdown-menu-lg {
        width: 250px; }

        .app-header .navbar-nav .dropdown-menu {
        position: absolute; }

        .app-header .navbar-nav .dropdown-menu-right {
        right: 0;
        left: auto; }

        .app-header .navbar-nav .dropdown-menu-left {
        right: auto;
        left: 0; }

        .app-footer {
        display: -ms-flexbox;
        display: flex;
        -ms-flex-wrap: wrap;
            flex-wrap: wrap;
        -ms-flex-align: center;
            align-items: center;
        padding: 0 1rem;
        color: #151b1e;
        background: #f0f3f5;
        border-top: 1px solid #c2cfd6; }

        .row.row-equal {
        padding-right: 7.5px;
        padding-left: 7.5px;
        margin-right: -15px;
        margin-left: -15px; }
        .row.row-equal [class*="col-"] {
            padding-right: 7.5px;
            padding-left: 7.5px; }

        .main .container-fluid {
        padding: 0 30px; }

        .input-group-addon,
        .input-group-btn {
        min-width: 40px;
        white-space: nowrap;
        vertical-align: middle; }

        #loading-bar,
        #loading-bar-spinner {
        -webkit-pointer-events: none;
        pointer-events: none;
        transition: 350ms linear all; }

        #loading-bar.ng-enter,
        #loading-bar.ng-leave.ng-leave-active,
        #loading-bar-spinner.ng-enter,
        #loading-bar-spinner.ng-leave.ng-leave-active {
        opacity: 0; }

        #loading-bar.ng-enter.ng-enter-active,
        #loading-bar.ng-leave,
        #loading-bar-spinner.ng-enter.ng-enter-active,
        #loading-bar-spinner.ng-leave {
        opacity: 1; }

        #loading-bar .bar {
        position: fixed;
        top: 0;
        left: 0;
        z-index: 20002;
        width: 100%;
        height: 2px;
        background: #20a8d8;
        border-top-right-radius: 1px;
        border-bottom-right-radius: 1px;
        transition: width 350ms; }

        #loading-bar .peg {
        position: absolute;
        top: 0;
        right: 0;
        width: 70px;
        height: 2px;
        border-radius: 100%;
        -ms-box-shadow: #29d 1px 0 6px 1px;
        box-shadow: #29d 1px 0 6px 1px;
        opacity: .45; }

        #loading-bar-spinner {
        position: fixed;
        top: 10px;
        left: 10px;
        z-index: 10002;
        display: block; }

        #loading-bar-spinner .spinner-icon {
        width: 14px;
        height: 14px;
        border: solid 2px transparent;
        border-top-color: #29d;
        border-left-color: #29d;
        border-radius: 50%;
        -webkit-animation: loading-bar-spinner 400ms linear infinite;
        animation: loading-bar-spinner 400ms linear infinite; }

        @-webkit-keyframes loading-bar-spinner {
        0% {
            -webkit-transform: rotate(0deg);
            transform: rotate(0deg); }
        100% {
            -webkit-transform: rotate(360deg);
            transform: rotate(360deg); } }

        @keyframes loading-bar-spinner {
        0% {
            -webkit-transform: rotate(0deg);
                    transform: rotate(0deg);
            transform: rotate(0deg); }
        100% {
            -webkit-transform: rotate(360deg);
                    transform: rotate(360deg);
            transform: rotate(360deg); } }

        .pace {
        -webkit-pointer-events: none;
        pointer-events: none;
        -moz-user-select: none;
        -webkit-user-select: none;
        -ms-user-select: none;
            user-select: none; }

        .pace-inactive {
        display: none; }

        .pace .pace-progress {
        position: fixed;
        top: 0;
        right: 100%;
        z-index: 2000;
        width: 100%;
        height: 2px;
        background: #20a8d8; }

        .modal-primary .modal-content {
        border-color: #20a8d8; }

        .modal-primary .modal-header {
        color: #fff;
        background-color: #20a8d8; }

        .modal-secondary .modal-content {
        border-color: #a4b7c1; }

        .modal-secondary .modal-header {
        color: #fff;
        background-color: #a4b7c1; }

        .modal-success .modal-content {
        border-color: #4dbd74; }

        .modal-success .modal-header {
        color: #fff;
        background-color: #4dbd74; }

        .modal-info .modal-content {
        border-color: #63c2de; }

        .modal-info .modal-header {
        color: #fff;
        background-color: #63c2de; }

        .modal-warning .modal-content {
        border-color: #ffc107; }

        .modal-warning .modal-header {
        color: #fff;
        background-color: #ffc107; }

        .modal-danger .modal-content {
        border-color: #f86c6b; }

        .modal-danger .modal-header {
        color: #fff;
        background-color: #f86c6b; }

        .modal-light .modal-content {
        border-color: #f0f3f5; }

        .modal-light .modal-header {
        color: #fff;
        background-color: #f0f3f5; }

        .modal-dark .modal-content {
        border-color: #29363d; }

        .modal-dark .modal-header {
        color: #fff;
        background-color: #29363d; }

        .nav-tabs .nav-link, .nav-tabs .navbar .dropdown-toggle, .navbar .nav-tabs .dropdown-toggle {
        color: #536c79; }
        .nav-tabs .nav-link.active, .nav-tabs .navbar .active.dropdown-toggle, .navbar .nav-tabs .active.dropdown-toggle {
            color: #29363d;
            background: #fff;
            border-color: #c2cfd6;
            border-bottom-color: #fff; }
            .nav-tabs .nav-link.active:focus, .nav-tabs .navbar .active.dropdown-toggle:focus, .navbar .nav-tabs .active.dropdown-toggle:focus {
            background: #fff;
            border-color: #c2cfd6;
            border-bottom-color: #fff; }

        .tab-content {
        margin-top: -1px;
        background: #fff;
        border: 1px solid #c2cfd6; }
        .tab-content .tab-pane {
            padding: 1rem; }

        .card-block .tab-content {
        margin-top: 0;
        border: 0; }

        .app-header.navbar {
        position: relative;
        -ms-flex-direction: row;
            flex-direction: row;
        height: 55px;
        padding: 0;
        margin: 0;
        background-color: #fff;
        border-bottom: 1px solid #c2cfd6; }
        .app-header.navbar .navbar-brand {
            display: inline-block;
            width: 155px;
            height: 55px;
            padding: 0.5rem 1rem;
            margin-right: 0;
            background-color: #fff;
            /* background-image: url("../img/logo.png"); */
            background-repeat: no-repeat;
            background-position: center center;
            background-size: 70px auto;
            border-bottom: 1px solid #c2cfd6; }
        .app-header.navbar .navbar-toggler {
            min-width: 50px;
            padding: 0.25rem 0; }
            .app-header.navbar .navbar-toggler:hover .navbar-toggler-icon {
            background-image: url("data:image/svg+xml;charset=utf8,%3Csvg viewBox='0 0 30 30' xmlns='http://www.w3.org/2000/svg'%3E%3Cpath stroke='%2329363d' stroke-width='2.25' stroke-linecap='round' stroke-miterlimit='10' d='M4 7h22M4 15h22M4 23h22'/%3E%3C/svg%3E"); }
        .app-header.navbar .navbar-toggler-icon {
            height: 23px;
            background-image: url("data:image/svg+xml;charset=utf8,%3Csvg viewBox='0 0 30 30' xmlns='http://www.w3.org/2000/svg'%3E%3Cpath stroke='%23536c79' stroke-width='2.25' stroke-linecap='round' stroke-miterlimit='10' d='M4 7h22M4 15h22M4 23h22'/%3E%3C/svg%3E"); }
        .app-header.navbar .navbar-nav {
            -ms-flex-direction: row;
                flex-direction: row;
            -ms-flex-align: center;
                align-items: center; }
        .app-header.navbar .nav-item {
            position: relative;
            min-width: 50px;
            margin: 0 !important;
            text-align: center; }
            .app-header.navbar .nav-item button {
            margin: 0 auto; }
            .app-header.navbar .nav-item .nav-link, .app-header.navbar .nav-item .dropdown-toggle {
            padding-top: 0;
            padding-bottom: 0;
            background: 0;
            border: 0; }
            .app-header.navbar .nav-item .nav-link .badge, .app-header.navbar .nav-item .dropdown-toggle .badge {
                position: absolute;
                top: 50%;
                left: 50%;
                margin-top: -16px;
                margin-left: 0; }
            .app-header.navbar .nav-item .nav-link > .img-avatar, .app-header.navbar .nav-item .dropdown-toggle > .img-avatar {
                height: 35px;
                margin: 0 10px; }
        .app-header.navbar .dropdown-menu {
            padding-bottom: 0;
            line-height: 1.5; }
        .app-header.navbar .dropdown-item {
            min-width: 180px; }

        .navbar-brand {
        color: #29363d; }
        .navbar-brand:focus, .navbar-brand:hover {
            color: #29363d; }

        .navbar-nav .nav-link, .navbar-nav .navbar .dropdown-toggle, .navbar .navbar-nav .dropdown-toggle {
        color: #536c79; }
        .navbar-nav .nav-link:focus, .navbar-nav .navbar .dropdown-toggle:focus, .navbar .navbar-nav .dropdown-toggle:focus, .navbar-nav .nav-link:hover, .navbar-nav .navbar .dropdown-toggle:hover, .navbar .navbar-nav .dropdown-toggle:hover {
            color: #29363d; }

        .navbar-nav .open > .nav-link, .navbar-nav .navbar .open > .dropdown-toggle, .navbar .navbar-nav .open > .dropdown-toggle, .navbar-nav .open > .nav-link:focus, .navbar-nav .navbar .open > .dropdown-toggle:focus, .navbar .navbar-nav .open > .dropdown-toggle:focus, .navbar-nav .open > .nav-link:hover, .navbar-nav .navbar .open > .dropdown-toggle:hover, .navbar .navbar-nav .open > .dropdown-toggle:hover,
        .navbar-nav .active > .nav-link,
        .navbar-nav .navbar .active > .dropdown-toggle, .navbar
        .navbar-nav .active > .dropdown-toggle,
        .navbar-nav .active > .nav-link:focus,
        .navbar-nav .navbar .active > .dropdown-toggle:focus, .navbar
        .navbar-nav .active > .dropdown-toggle:focus,
        .navbar-nav .active > .nav-link:hover,
        .navbar-nav .navbar .active > .dropdown-toggle:hover, .navbar
        .navbar-nav .active > .dropdown-toggle:hover,
        .navbar-nav .nav-link.open,
        .navbar-nav .navbar .open.dropdown-toggle, .navbar
        .navbar-nav .open.dropdown-toggle,
        .navbar-nav .nav-link.open:focus,
        .navbar-nav .navbar .open.dropdown-toggle:focus, .navbar
        .navbar-nav .open.dropdown-toggle:focus,
        .navbar-nav .nav-link.open:hover,
        .navbar-nav .navbar .open.dropdown-toggle:hover, .navbar
        .navbar-nav .open.dropdown-toggle:hover,
        .navbar-nav .nav-link.active,
        .navbar-nav .navbar .active.dropdown-toggle, .navbar
        .navbar-nav .active.dropdown-toggle,
        .navbar-nav .nav-link.active:focus,
        .navbar-nav .navbar .active.dropdown-toggle:focus, .navbar
        .navbar-nav .active.dropdown-toggle:focus,
        .navbar-nav .nav-link.active:hover,
        .navbar-nav .navbar .active.dropdown-toggle:hover, .navbar
        .navbar-nav .active.dropdown-toggle:hover {
        color: #29363d; }

        .navbar-divider {
        background-color: rgba(0, 0, 0, 0.075); }

        @media (min-width: 992px) {
        .brand-minimized .app-header.navbar .navbar-brand {
            width: 50px;
            background-color: #fff;
            background-image: url("../img/logo-symbol.png");
            background-size: 24px;
            border-bottom: 1px solid #c2cfd6; } }

        .progress-xs {
        height: 4px; }

        .progress-sm {
        height: 8px; }

        .progress-white {
        background-color: rgba(255, 255, 255, 0.2) !important; }
        .progress-white .progress-bar {
            background-color: #fff; }

        .sidebar {
        display: -ms-flexbox;
        display: flex;
        -ms-flex-direction: column;
            flex-direction: column;
        padding: 0;
        color: #fff;
        background: #29363d; }
        .sidebar .sidebar-close {
            position: absolute;
            right: 0;
            display: none;
            padding: 0 1rem;
            font-size: 24px;
            font-weight: 800;
            line-height: 55px;
            color: #fff;
            background: 0;
            border: 0;
            opacity: .8; }
            .sidebar .sidebar-close:hover {
            opacity: 1; }
        .sidebar .sidebar-header {
            -ms-flex: 0 0 auto;
                flex: 0 0 auto;
            padding: 0.75rem 1rem;
            text-align: center;
            background: rgba(0, 0, 0, 0.2); }
        .sidebar .sidebar-form .form-control {
            color: #fff;
            background: #151b1f;
            border: 0; }
            .sidebar .sidebar-form .form-control::-webkit-input-placeholder {
            color: rgba(255, 255, 255, 0.7); }
            .sidebar .sidebar-form .form-control:-ms-input-placeholder {
            color: rgba(255, 255, 255, 0.7); }
            .sidebar .sidebar-form .form-control::-ms-input-placeholder {
            color: rgba(255, 255, 255, 0.7); }
            .sidebar .sidebar-form .form-control::placeholder {
            color: rgba(255, 255, 255, 0.7); }
        .sidebar .sidebar-nav {
            position: relative;
            -ms-flex: 1;
                flex: 1;
            overflow-x: hidden;
            overflow-y: auto;
            -ms-overflow-style: -ms-autohiding-scrollbar;
            width: 200px; }
            .sidebar .sidebar-nav::-webkit-scrollbar {
            position: absolute;
            width: 10px;
            margin-left: -10px;
            -webkit-appearance: none; }
            .sidebar .sidebar-nav::-webkit-scrollbar-track {
            background-color: #33444c;
            border-right: 1px solid #1f292e;
            border-left: 1px solid #1f292e; }
            .sidebar .sidebar-nav::-webkit-scrollbar-thumb {
            height: 50px;
            background-color: #151b1f;
            background-clip: content-box;
            border-color: transparent;
            border-style: solid;
            border-width: 1px 2px; }
        .sidebar .nav {
            width: 200px;
            -ms-flex-direction: column;
                flex-direction: column;
            min-height: 100%; }
        .sidebar .nav-title {
            padding: 0.75rem 1rem;
            font-size: 11px;
            font-weight: 600;
            color: #c2cfd6;
            text-transform: uppercase; }
        .sidebar .nav-divider, .sidebar .divider {
            height: 10px; }
        .sidebar .nav-item {
            position: relative;
            margin: 0;
            transition: background .3s ease-in-out; }
        .sidebar .nav-dropdown-items {
            max-height: 0;
            padding: 0;
            margin: 0;
            overflow-y: hidden;
            transition: max-height .3s ease-in-out; }
            .sidebar .nav-dropdown-items .nav-item {
            padding: 0;
            list-style: none; }
        .sidebar .nav-link, .sidebar .navbar .dropdown-toggle, .navbar .sidebar .dropdown-toggle {
            display: block;
            padding: 0.75rem 1rem;
            color: #fff;
            text-decoration: none;
            background: transparent; }
            .sidebar .nav-link i, .sidebar .navbar .dropdown-toggle i, .navbar .sidebar .dropdown-toggle i {
            display: inline-block;
            width: 20px;
            margin: 0 0.5rem 0 0;
            font-size: 14px;
            color: #536c79;
            text-align: center; }
            .sidebar .nav-link .badge, .sidebar .navbar .dropdown-toggle .badge, .navbar .sidebar .dropdown-toggle .badge {
            float: right;
            margin-top: 2px; }
            .sidebar .nav-link.active, .sidebar .navbar .active.dropdown-toggle, .navbar .sidebar .active.dropdown-toggle {
            color: #fff;
            background: #33444c; }
            .sidebar .nav-link.active i, .sidebar .navbar .active.dropdown-toggle i, .navbar .sidebar .active.dropdown-toggle i {
                color: #20a8d8; }
            .sidebar .nav-link:hover, .sidebar .navbar .dropdown-toggle:hover, .navbar .sidebar .dropdown-toggle:hover {
            color: #fff;
            background: #20a8d8; }
            .sidebar .nav-link:hover i, .sidebar .navbar .dropdown-toggle:hover i, .navbar .sidebar .dropdown-toggle:hover i {
                color: #fff; }
            .sidebar .nav-link:hover.nav-dropdown-toggle::before, .sidebar .navbar .dropdown-toggle:hover.nav-dropdown-toggle::before, .navbar .sidebar .dropdown-toggle:hover.nav-dropdown-toggle::before {
                background-image: url("data:image/svg+xml;charset=utf8,%3Csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 11 14'%3E%3Cpath fill='%23fff' d='M9.148 2.352l-4.148 4.148 4.148 4.148q0.148 0.148 0.148 0.352t-0.148 0.352l-1.297 1.297q-0.148 0.148-0.352 0.148t-0.352-0.148l-5.797-5.797q-0.148-0.148-0.148-0.352t0.148-0.352l5.797-5.797q0.148-0.148 0.352-0.148t0.352 0.148l1.297 1.297q0.148 0.148 0.148 0.352t-0.148 0.352z'/%3E%3C/svg%3E"); }
            .sidebar .nav-link.nav-link-primary, .sidebar .navbar .nav-link-primary.dropdown-toggle, .navbar .sidebar .nav-link-primary.dropdown-toggle {
            background: #20a8d8; }
            .sidebar .nav-link.nav-link-primary i, .sidebar .navbar .nav-link-primary.dropdown-toggle i, .navbar .sidebar .nav-link-primary.dropdown-toggle i {
                color: rgba(255, 255, 255, 0.7); }
            .sidebar .nav-link.nav-link-primary:hover, .sidebar .navbar .nav-link-primary.dropdown-toggle:hover, .navbar .sidebar .nav-link-primary.dropdown-toggle:hover {
                background: #1d97c2 !important; }
                .sidebar .nav-link.nav-link-primary:hover i, .sidebar .navbar .nav-link-primary.dropdown-toggle:hover i, .navbar .sidebar .nav-link-primary.dropdown-toggle:hover i {
                color: #fff; }
            .sidebar .nav-link.nav-link-secondary, .sidebar .navbar .nav-link-secondary.dropdown-toggle, .navbar .sidebar .nav-link-secondary.dropdown-toggle {
            background: #a4b7c1; }
            .sidebar .nav-link.nav-link-secondary i, .sidebar .navbar .nav-link-secondary.dropdown-toggle i, .navbar .sidebar .nav-link-secondary.dropdown-toggle i {
                color: rgba(255, 255, 255, 0.7); }
            .sidebar .nav-link.nav-link-secondary:hover, .sidebar .navbar .nav-link-secondary.dropdown-toggle:hover, .navbar .sidebar .nav-link-secondary.dropdown-toggle:hover {
                background: #95abb7 !important; }
                .sidebar .nav-link.nav-link-secondary:hover i, .sidebar .navbar .nav-link-secondary.dropdown-toggle:hover i, .navbar .sidebar .nav-link-secondary.dropdown-toggle:hover i {
                color: #fff; }
            .sidebar .nav-link.nav-link-success, .sidebar .navbar .nav-link-success.dropdown-toggle, .navbar .sidebar .nav-link-success.dropdown-toggle {
            background: #4dbd74; }
            .sidebar .nav-link.nav-link-success i, .sidebar .navbar .nav-link-success.dropdown-toggle i, .navbar .sidebar .nav-link-success.dropdown-toggle i {
                color: rgba(255, 255, 255, 0.7); }
            .sidebar .nav-link.nav-link-success:hover, .sidebar .navbar .nav-link-success.dropdown-toggle:hover, .navbar .sidebar .nav-link-success.dropdown-toggle:hover {
                background: #41af67 !important; }
                .sidebar .nav-link.nav-link-success:hover i, .sidebar .navbar .nav-link-success.dropdown-toggle:hover i, .navbar .sidebar .nav-link-success.dropdown-toggle:hover i {
                color: #fff; }
            .sidebar .nav-link.nav-link-info, .sidebar .navbar .nav-link-info.dropdown-toggle, .navbar .sidebar .nav-link-info.dropdown-toggle {
            background: #63c2de; }
            .sidebar .nav-link.nav-link-info i, .sidebar .navbar .nav-link-info.dropdown-toggle i, .navbar .sidebar .nav-link-info.dropdown-toggle i {
                color: rgba(255, 255, 255, 0.7); }
            .sidebar .nav-link.nav-link-info:hover, .sidebar .navbar .nav-link-info.dropdown-toggle:hover, .navbar .sidebar .nav-link-info.dropdown-toggle:hover {
                background: #4ebada !important; }
                .sidebar .nav-link.nav-link-info:hover i, .sidebar .navbar .nav-link-info.dropdown-toggle:hover i, .navbar .sidebar .nav-link-info.dropdown-toggle:hover i {
                color: #fff; }
            .sidebar .nav-link.nav-link-warning, .sidebar .navbar .nav-link-warning.dropdown-toggle, .navbar .sidebar .nav-link-warning.dropdown-toggle {
            background: #ffc107; }
            .sidebar .nav-link.nav-link-warning i, .sidebar .navbar .nav-link-warning.dropdown-toggle i, .navbar .sidebar .nav-link-warning.dropdown-toggle i {
                color: rgba(255, 255, 255, 0.7); }
            .sidebar .nav-link.nav-link-warning:hover, .sidebar .navbar .nav-link-warning.dropdown-toggle:hover, .navbar .sidebar .nav-link-warning.dropdown-toggle:hover {
                background: #edb100 !important; }
                .sidebar .nav-link.nav-link-warning:hover i, .sidebar .navbar .nav-link-warning.dropdown-toggle:hover i, .navbar .sidebar .nav-link-warning.dropdown-toggle:hover i {
                color: #fff; }
            .sidebar .nav-link.nav-link-danger, .sidebar .navbar .nav-link-danger.dropdown-toggle, .navbar .sidebar .nav-link-danger.dropdown-toggle {
            background: #f86c6b; }
            .sidebar .nav-link.nav-link-danger i, .sidebar .navbar .nav-link-danger.dropdown-toggle i, .navbar .sidebar .nav-link-danger.dropdown-toggle i {
                color: rgba(255, 255, 255, 0.7); }
            .sidebar .nav-link.nav-link-danger:hover, .sidebar .navbar .nav-link-danger.dropdown-toggle:hover, .navbar .sidebar .nav-link-danger.dropdown-toggle:hover {
                background: #f75453 !important; }
                .sidebar .nav-link.nav-link-danger:hover i, .sidebar .navbar .nav-link-danger.dropdown-toggle:hover i, .navbar .sidebar .nav-link-danger.dropdown-toggle:hover i {
                color: #fff; }
            .sidebar .nav-link.nav-link-light, .sidebar .navbar .nav-link-light.dropdown-toggle, .navbar .sidebar .nav-link-light.dropdown-toggle {
            background: #f0f3f5; }
            .sidebar .nav-link.nav-link-light i, .sidebar .navbar .nav-link-light.dropdown-toggle i, .navbar .sidebar .nav-link-light.dropdown-toggle i {
                color: rgba(255, 255, 255, 0.7); }
            .sidebar .nav-link.nav-link-light:hover, .sidebar .navbar .nav-link-light.dropdown-toggle:hover, .navbar .sidebar .nav-link-light.dropdown-toggle:hover {
                background: #e1e7eb !important; }
                .sidebar .nav-link.nav-link-light:hover i, .sidebar .navbar .nav-link-light.dropdown-toggle:hover i, .navbar .sidebar .nav-link-light.dropdown-toggle:hover i {
                color: #fff; }
            .sidebar .nav-link.nav-link-dark, .sidebar .navbar .nav-link-dark.dropdown-toggle, .navbar .sidebar .nav-link-dark.dropdown-toggle {
            background: #29363d; }
            .sidebar .nav-link.nav-link-dark i, .sidebar .navbar .nav-link-dark.dropdown-toggle i, .navbar .sidebar .nav-link-dark.dropdown-toggle i {
                color: rgba(255, 255, 255, 0.7); }
            .sidebar .nav-link.nav-link-dark:hover, .sidebar .navbar .nav-link-dark.dropdown-toggle:hover, .navbar .sidebar .nav-link-dark.dropdown-toggle:hover {
                background: #1f292e !important; }
                .sidebar .nav-link.nav-link-dark:hover i, .sidebar .navbar .nav-link-dark.dropdown-toggle:hover i, .navbar .sidebar .nav-link-dark.dropdown-toggle:hover i {
                color: #fff; }
        .sidebar .nav-dropdown-toggle {
            position: relative; }
            .sidebar .nav-dropdown-toggle::before {
            position: absolute;
            top: 50%;
            right: 1rem;
            display: block;
            width: 8px;
            height: 8px;
            padding: 0;
            margin-top: -4px;
            content: "";
            background-image: url("data:image/svg+xml;charset=utf8,%3Csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 11 14'%3E%3Cpath fill='%23536c79' d='M9.148 2.352l-4.148 4.148 4.148 4.148q0.148 0.148 0.148 0.352t-0.148 0.352l-1.297 1.297q-0.148 0.148-0.352 0.148t-0.352-0.148l-5.797-5.797q-0.148-0.148-0.148-0.352t0.148-0.352l5.797-5.797q0.148-0.148 0.352-0.148t0.352 0.148l1.297 1.297q0.148 0.148 0.148 0.352t-0.148 0.352z'/%3E%3C/svg%3E");
            background-repeat: no-repeat;
            background-position: center;
            transition: -webkit-transform .3s;
            transition: transform .3s;
            transition: transform .3s, -webkit-transform .3s; }
        .sidebar .nav-dropdown.open {
            background: rgba(0, 0, 0, 0.2); }
            .sidebar .nav-dropdown.open > .nav-dropdown-items {
            max-height: 1000px; }
            .sidebar .nav-dropdown.open .nav-link, .sidebar .nav-dropdown.open .navbar .dropdown-toggle, .navbar .sidebar .nav-dropdown.open .dropdown-toggle {
            color: #fff;
            border-left: 0 !important; }
            .sidebar .nav-dropdown.open > .nav-link.nav-dropdown-toggle::before, .sidebar .navbar .nav-dropdown.open > .nav-dropdown-toggle.dropdown-toggle::before, .navbar .sidebar .nav-dropdown.open > .nav-dropdown-toggle.dropdown-toggle::before {
            -webkit-transform: rotate(-90deg);
                    transform: rotate(-90deg); }
            .sidebar .nav-dropdown.open .nav-dropdown.open {
            border-left: 0; }
        .sidebar .nav-label {
            display: block;
            padding: 0.09375rem 1rem;
            color: #c2cfd6; }
            .sidebar .nav-label:hover {
            color: #fff;
            text-decoration: none; }
            .sidebar .nav-label i {
            width: 20px;
            margin: -3px 0.5rem 0 0;
            font-size: 10px;
            color: #536c79;
            text-align: center;
            vertical-align: middle; }
        .sidebar .progress {
            background-color: #485f6b !important; }
        .sidebar .sidebar-footer {
            -ms-flex: 0 0 auto;
                flex: 0 0 auto;
            padding: 0.75rem 1rem;
            background: rgba(0, 0, 0, 0.2); }
        .sidebar .sidebar-minimizer {
            position: relative;
            -ms-flex: 0 0 50px;
                flex: 0 0 50px;
            background-color: rgba(0, 0, 0, 0.2);
            border: 0; }
            .sidebar .sidebar-minimizer::before {
            position: absolute;
            top: 0;
            right: 0;
            width: 50px;
            height: 50px;
            content: "";
            background-image: url("data:image/svg+xml;charset=utf8,%3Csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 11 14'%3E%3Cpath fill='%23536c79' d='M9.148 2.352l-4.148 4.148 4.148 4.148q0.148 0.148 0.148 0.352t-0.148 0.352l-1.297 1.297q-0.148 0.148-0.352 0.148t-0.352-0.148l-5.797-5.797q-0.148-0.148-0.148-0.352t0.148-0.352l5.797-5.797q0.148-0.148 0.352-0.148t0.352 0.148l1.297 1.297q0.148 0.148 0.148 0.352t-0.148 0.352z'/%3E%3C/svg%3E");
            background-repeat: no-repeat;
            background-position: center;
            background-size: 12.5px;
            transition: .3s; }
            .sidebar .sidebar-minimizer:focus, .sidebar .sidebar-minimizer.focus {
            outline: 0; }
            .sidebar .sidebar-minimizer:hover {
            background-color: rgba(0, 0, 0, 0.3); }
            .sidebar .sidebar-minimizer:hover::before {
                background-image: url("data:image/svg+xml;charset=utf8,%3Csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 11 14'%3E%3Cpath fill='%23fff' d='M9.148 2.352l-4.148 4.148 4.148 4.148q0.148 0.148 0.148 0.352t-0.148 0.352l-1.297 1.297q-0.148 0.148-0.352 0.148t-0.352-0.148l-5.797-5.797q-0.148-0.148-0.148-0.352t0.148-0.352l5.797-5.797q0.148-0.148 0.352-0.148t0.352 0.148l1.297 1.297q0.148 0.148 0.148 0.352t-0.148 0.352z'/%3E%3C/svg%3E"); }

        @media (min-width: 992px) {
        .sidebar-compact .sidebar .sidebar-nav {
            width: 150px; }
        .sidebar-compact .sidebar .nav {
            width: 150px; }
            .sidebar-compact .sidebar .nav .nav-title {
            text-align: center; }
            .sidebar-compact .sidebar .nav .nav-item {
            width: 150px;
            border-left: 0 !important; }
            .sidebar-compact .sidebar .nav .nav-item .nav-link, .sidebar-compact .sidebar .nav .nav-item .navbar .dropdown-toggle, .navbar .sidebar-compact .sidebar .nav .nav-item .dropdown-toggle {
                text-align: center; }
                .sidebar-compact .sidebar .nav .nav-item .nav-link i, .sidebar-compact .sidebar .nav .nav-item .navbar .dropdown-toggle i, .navbar .sidebar-compact .sidebar .nav .nav-item .dropdown-toggle i {
                display: block;
                width: 100%;
                margin: 0.25rem 0;
                font-size: 24px; }
                .sidebar-compact .sidebar .nav .nav-item .nav-link .badge, .sidebar-compact .sidebar .nav .nav-item .navbar .dropdown-toggle .badge, .navbar .sidebar-compact .sidebar .nav .nav-item .dropdown-toggle .badge {
                position: absolute;
                top: 18px;
                right: 10px; }
                .sidebar-compact .sidebar .nav .nav-item .nav-link.nav-dropdown-toggle::before, .sidebar-compact .sidebar .nav .nav-item .navbar .nav-dropdown-toggle.dropdown-toggle::before, .navbar .sidebar-compact .sidebar .nav .nav-item .nav-dropdown-toggle.dropdown-toggle::before {
                top: 30px; }
        .sidebar-minimized .hidden-cn {
            display: none; }
        .sidebar-minimized .sidebar {
            z-index: 1019; }
            .sidebar-minimized .sidebar .sidebar-nav {
            overflow: visible;
            width: 50px; }
            .sidebar-minimized .sidebar .nav {
            width: 50px; }
            .sidebar-minimized .sidebar .nav-divider, .sidebar-minimized .sidebar .divider,
            .sidebar-minimized .sidebar .nav-title,
            .sidebar-minimized .sidebar .sidebar-footer,
            .sidebar-minimized .sidebar .sidebar-form,
            .sidebar-minimized .sidebar .sidebar-header {
            display: none; }
            .sidebar-minimized .sidebar .sidebar-minimizer::before {
            width: 100%;
            -webkit-transform: rotate(-180deg);
                    transform: rotate(-180deg); }
            .sidebar-minimized .sidebar .nav-item {
            width: 50px;
            overflow: hidden;
            border-left: 0 !important; }
            .sidebar-minimized .sidebar .nav-item:hover {
                width: 250px;
                overflow: visible; }
                .sidebar-minimized .sidebar .nav-item:hover > .nav-link, .sidebar-minimized .sidebar .navbar .nav-item:hover > .dropdown-toggle, .navbar .sidebar-minimized .sidebar .nav-item:hover > .dropdown-toggle {
                background: #20a8d8; }
                .sidebar-minimized .sidebar .nav-item:hover > .nav-link i, .sidebar-minimized .sidebar .navbar .nav-item:hover > .dropdown-toggle i, .navbar .sidebar-minimized .sidebar .nav-item:hover > .dropdown-toggle i {
                    color: #fff; }
            .sidebar-minimized .sidebar .nav-link, .sidebar-minimized .sidebar .navbar .dropdown-toggle, .navbar .sidebar-minimized .sidebar .dropdown-toggle {
            position: relative;
            padding-left: 0;
            margin: 0;
            white-space: nowrap;
            border-left: 0 !important; }
            .sidebar-minimized .sidebar .nav-link i, .sidebar-minimized .sidebar .navbar .dropdown-toggle i, .navbar .sidebar-minimized .sidebar .dropdown-toggle i {
                display: block;
                float: left;
                width: 50px;
                font-size: 18px; }
            .sidebar-minimized .sidebar .nav-link .badge, .sidebar-minimized .sidebar .navbar .dropdown-toggle .badge, .navbar .sidebar-minimized .sidebar .dropdown-toggle .badge {
                position: absolute;
                right: 15px;
                display: none; }
            .sidebar-minimized .sidebar .nav-link:hover, .sidebar-minimized .sidebar .navbar .dropdown-toggle:hover, .navbar .sidebar-minimized .sidebar .dropdown-toggle:hover {
                width: 250px;
                background: #20a8d8; }
                .sidebar-minimized .sidebar .nav-link:hover .badge, .sidebar-minimized .sidebar .navbar .dropdown-toggle:hover .badge, .navbar .sidebar-minimized .sidebar .dropdown-toggle:hover .badge {
                display: inline; }
            .sidebar-minimized .sidebar .nav-link.nav-dropdown-toggle::before, .sidebar-minimized .sidebar .navbar .nav-dropdown-toggle.dropdown-toggle::before, .navbar .sidebar-minimized .sidebar .nav-dropdown-toggle.dropdown-toggle::before {
                display: none; }
            .sidebar-minimized .sidebar .nav-dropdown-items .nav-item {
            width: 200px; }
            .sidebar-minimized .sidebar .nav-dropdown-items .nav-item .nav-link, .sidebar-minimized .sidebar .nav-dropdown-items .nav-item .navbar .dropdown-toggle, .navbar .sidebar-minimized .sidebar .nav-dropdown-items .nav-item .dropdown-toggle {
                width: 200px; }
            .sidebar-minimized .sidebar .nav > .nav-dropdown > .nav-dropdown-items {
            display: none;
            max-height: 1000px;
            background: #29363d; }
            .sidebar-minimized .sidebar .nav > .nav-dropdown:hover {
            background: #20a8d8; }
            .sidebar-minimized .sidebar .nav > .nav-dropdown:hover > .nav-dropdown-items {
                position: absolute;
                left: 50px;
                display: inline; } }

        .switch.switch-default {
        position: relative;
        display: inline-block;
        vertical-align: top;
        width: 40px;
        height: 24px;
        background-color: transparent;
        cursor: pointer; }
        .switch.switch-default .switch-input {
            position: absolute;
            top: 0;
            left: 0;
            opacity: 0; }
        .switch.switch-default .switch-label {
            position: relative;
            display: block;
            height: inherit;
            font-size: 10px;
            font-weight: 600;
            text-transform: uppercase;
            background-color: #fff;
            border: 1px solid #c2cfd6;
            border-radius: 2px;
            transition: opacity background .15s ease-out; }
        .switch.switch-default .switch-input:checked ~ .switch-label::before {
            opacity: 0; }
        .switch.switch-default .switch-input:checked ~ .switch-label::after {
            opacity: 1; }
        .switch.switch-default .switch-handle {
            position: absolute;
            top: 2px;
            left: 2px;
            width: 20px;
            height: 20px;
            background: #fff;
            border: 1px solid #c2cfd6;
            border-radius: 1px;
            transition: left .15s ease-out; }
        .switch.switch-default .switch-input:checked ~ .switch-handle {
            left: 18px; }
        .switch.switch-default.switch-lg {
            width: 48px;
            height: 28px; }
            .switch.switch-default.switch-lg .switch-label {
            font-size: 12px; }
            .switch.switch-default.switch-lg .switch-handle {
            width: 24px;
            height: 24px; }
            .switch.switch-default.switch-lg .switch-input:checked ~ .switch-handle {
            left: 22px; }
        .switch.switch-default.switch-sm {
            width: 32px;
            height: 20px; }
            .switch.switch-default.switch-sm .switch-label {
            font-size: 8px; }
            .switch.switch-default.switch-sm .switch-handle {
            width: 16px;
            height: 16px; }
            .switch.switch-default.switch-sm .switch-input:checked ~ .switch-handle {
            left: 14px; }
        .switch.switch-default.switch-xs {
            width: 24px;
            height: 16px; }
            .switch.switch-default.switch-xs .switch-label {
            font-size: 7px; }
            .switch.switch-default.switch-xs .switch-handle {
            width: 12px;
            height: 12px; }
            .switch.switch-default.switch-xs .switch-input:checked ~ .switch-handle {
            left: 10px; }

        .switch.switch-text {
        position: relative;
        display: inline-block;
        vertical-align: top;
        width: 48px;
        height: 24px;
        background-color: transparent;
        cursor: pointer; }
        .switch.switch-text .switch-input {
            position: absolute;
            top: 0;
            left: 0;
            opacity: 0; }
        .switch.switch-text .switch-label {
            position: relative;
            display: block;
            height: inherit;
            font-size: 10px;
            font-weight: 600;
            text-transform: uppercase;
            background-color: #fff;
            border: 1px solid #c2cfd6;
            border-radius: 2px;
            transition: opacity background .15s ease-out; }
        .switch.switch-text .switch-label::before,
        .switch.switch-text .switch-label::after {
            position: absolute;
            top: 50%;
            width: 50%;
            margin-top: -.5em;
            line-height: 1;
            text-align: center;
            transition: inherit; }
        .switch.switch-text .switch-label::before {
            right: 1px;
            color: #c2cfd6;
            content: attr(data-off); }
        .switch.switch-text .switch-label::after {
            left: 1px;
            color: #fff;
            content: attr(data-on);
            opacity: 0; }
        .switch.switch-text .switch-input:checked ~ .switch-label::before {
            opacity: 0; }
        .switch.switch-text .switch-input:checked ~ .switch-label::after {
            opacity: 1; }
        .switch.switch-text .switch-handle {
            position: absolute;
            top: 2px;
            left: 2px;
            width: 20px;
            height: 20px;
            background: #fff;
            border: 1px solid #c2cfd6;
            border-radius: 1px;
            transition: left .15s ease-out; }
        .switch.switch-text .switch-input:checked ~ .switch-handle {
            left: 26px; }
        .switch.switch-text.switch-lg {
            width: 56px;
            height: 28px; }
            .switch.switch-text.switch-lg .switch-label {
            font-size: 12px; }
            .switch.switch-text.switch-lg .switch-handle {
            width: 24px;
            height: 24px; }
            .switch.switch-text.switch-lg .switch-input:checked ~ .switch-handle {
            left: 30px; }
        .switch.switch-text.switch-sm {
            width: 40px;
            height: 20px; }
            .switch.switch-text.switch-sm .switch-label {
            font-size: 8px; }
            .switch.switch-text.switch-sm .switch-handle {
            width: 16px;
            height: 16px; }
            .switch.switch-text.switch-sm .switch-input:checked ~ .switch-handle {
            left: 22px; }
        .switch.switch-text.switch-xs {
            width: 32px;
            height: 16px; }
            .switch.switch-text.switch-xs .switch-label {
            font-size: 7px; }
            .switch.switch-text.switch-xs .switch-handle {
            width: 12px;
            height: 12px; }
            .switch.switch-text.switch-xs .switch-input:checked ~ .switch-handle {
            left: 18px; }

        .switch.switch-icon {
        position: relative;
        display: inline-block;
        vertical-align: top;
        width: 48px;
        height: 24px;
        background-color: transparent;
        cursor: pointer; }
        .switch.switch-icon .switch-input {
            position: absolute;
            top: 0;
            left: 0;
            opacity: 0; }
        .switch.switch-icon .switch-label {
            position: relative;
            display: block;
            height: inherit;
            font-family: FontAwesome;
            font-size: 10px;
            font-weight: 600;
            text-transform: uppercase;
            background-color: #fff;
            border: 1px solid #c2cfd6;
            border-radius: 2px;
            transition: opacity background .15s ease-out; }
        .switch.switch-icon .switch-label::before,
        .switch.switch-icon .switch-label::after {
            position: absolute;
            top: 50%;
            width: 50%;
            margin-top: -.5em;
            line-height: 1;
            text-align: center;
            transition: inherit; }
        .switch.switch-icon .switch-label::before {
            right: 1px;
            color: #c2cfd6;
            content: attr(data-off); }
        .switch.switch-icon .switch-label::after {
            left: 1px;
            color: #fff;
            content: attr(data-on);
            opacity: 0; }
        .switch.switch-icon .switch-input:checked ~ .switch-label::before {
            opacity: 0; }
        .switch.switch-icon .switch-input:checked ~ .switch-label::after {
            opacity: 1; }
        .switch.switch-icon .switch-handle {
            position: absolute;
            top: 2px;
            left: 2px;
            width: 20px;
            height: 20px;
            background: #fff;
            border: 1px solid #c2cfd6;
            border-radius: 1px;
            transition: left .15s ease-out; }
        .switch.switch-icon .switch-input:checked ~ .switch-handle {
            left: 26px; }
        .switch.switch-icon.switch-lg {
            width: 56px;
            height: 28px; }
            .switch.switch-icon.switch-lg .switch-label {
            font-size: 12px; }
            .switch.switch-icon.switch-lg .switch-handle {
            width: 24px;
            height: 24px; }
            .switch.switch-icon.switch-lg .switch-input:checked ~ .switch-handle {
            left: 30px; }
        .switch.switch-icon.switch-sm {
            width: 40px;
            height: 20px; }
            .switch.switch-icon.switch-sm .switch-label {
            font-size: 8px; }
            .switch.switch-icon.switch-sm .switch-handle {
            width: 16px;
            height: 16px; }
            .switch.switch-icon.switch-sm .switch-input:checked ~ .switch-handle {
            left: 22px; }
        .switch.switch-icon.switch-xs {
            width: 32px;
            height: 16px; }
            .switch.switch-icon.switch-xs .switch-label {
            font-size: 7px; }
            .switch.switch-icon.switch-xs .switch-handle {
            width: 12px;
            height: 12px; }
            .switch.switch-icon.switch-xs .switch-input:checked ~ .switch-handle {
            left: 18px; }

        .switch.switch-3d {
        position: relative;
        display: inline-block;
        vertical-align: top;
        width: 40px;
        height: 24px;
        background-color: transparent;
        cursor: pointer; }
        .switch.switch-3d .switch-input {
            position: absolute;
            top: 0;
            left: 0;
            opacity: 0; }
        .switch.switch-3d .switch-label {
            position: relative;
            display: block;
            height: inherit;
            font-size: 10px;
            font-weight: 600;
            text-transform: uppercase;
            background-color: #f0f3f5;
            border: 1px solid #c2cfd6;
            border-radius: 2px;
            transition: opacity background .15s ease-out; }
        .switch.switch-3d .switch-input:checked ~ .switch-label::before {
            opacity: 0; }
        .switch.switch-3d .switch-input:checked ~ .switch-label::after {
            opacity: 1; }
        .switch.switch-3d .switch-handle {
            position: absolute;
            top: 0;
            left: 0;
            width: 24px;
            height: 24px;
            background: #fff;
            border: 1px solid #c2cfd6;
            border-radius: 1px;
            transition: left .15s ease-out;
            border: 0;
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.3); }
        .switch.switch-3d .switch-input:checked ~ .switch-handle {
            left: 16px; }
        .switch.switch-3d.switch-lg {
            width: 48px;
            height: 28px; }
            .switch.switch-3d.switch-lg .switch-label {
            font-size: 12px; }
            .switch.switch-3d.switch-lg .switch-handle {
            width: 28px;
            height: 28px; }
            .switch.switch-3d.switch-lg .switch-input:checked ~ .switch-handle {
            left: 20px; }
        .switch.switch-3d.switch-sm {
            width: 32px;
            height: 20px; }
            .switch.switch-3d.switch-sm .switch-label {
            font-size: 8px; }
            .switch.switch-3d.switch-sm .switch-handle {
            width: 20px;
            height: 20px; }
            .switch.switch-3d.switch-sm .switch-input:checked ~ .switch-handle {
            left: 12px; }
        .switch.switch-3d.switch-xs {
            width: 24px;
            height: 16px; }
            .switch.switch-3d.switch-xs .switch-label {
            font-size: 7px; }
            .switch.switch-3d.switch-xs .switch-handle {
            width: 16px;
            height: 16px; }
            .switch.switch-3d.switch-xs .switch-input:checked ~ .switch-handle {
            left: 8px; }

        .switch-pill .switch-label, .switch.switch-3d .switch-label,
        .switch-pill .switch-handle, .switch.switch-3d .switch-handle {
        border-radius: 50em !important; }

        .switch-pill .switch-label::before, .switch.switch-3d .switch-label::before {
        right: 2px !important; }

        .switch-pill .switch-label::after, .switch.switch-3d .switch-label::after {
        left: 2px !important; }

        .switch-primary > .switch-input:checked ~ .switch-label {
        background: #20a8d8 !important;
        border-color: #1985ac; }

        .switch-primary > .switch-input:checked ~ .switch-handle {
        border-color: #1985ac; }

        .switch-primary-outline > .switch-input:checked ~ .switch-label {
        background: #fff !important;
        border-color: #20a8d8; }
        .switch-primary-outline > .switch-input:checked ~ .switch-label::after {
            color: #20a8d8; }

        .switch-primary-outline > .switch-input:checked ~ .switch-handle {
        border-color: #20a8d8; }

        .switch-primary-outline-alt > .switch-input:checked ~ .switch-label {
        background: #fff !important;
        border-color: #20a8d8; }
        .switch-primary-outline-alt > .switch-input:checked ~ .switch-label::after {
            color: #20a8d8; }

        .switch-primary-outline-alt > .switch-input:checked ~ .switch-handle {
        background: #20a8d8 !important;
        border-color: #20a8d8; }

        .switch-secondary > .switch-input:checked ~ .switch-label {
        background: #a4b7c1 !important;
        border-color: #869fac; }

        .switch-secondary > .switch-input:checked ~ .switch-handle {
        border-color: #869fac; }

        .switch-secondary-outline > .switch-input:checked ~ .switch-label {
        background: #fff !important;
        border-color: #a4b7c1; }
        .switch-secondary-outline > .switch-input:checked ~ .switch-label::after {
            color: #a4b7c1; }

        .switch-secondary-outline > .switch-input:checked ~ .switch-handle {
        border-color: #a4b7c1; }

        .switch-secondary-outline-alt > .switch-input:checked ~ .switch-label {
        background: #fff !important;
        border-color: #a4b7c1; }
        .switch-secondary-outline-alt > .switch-input:checked ~ .switch-label::after {
            color: #a4b7c1; }

        .switch-secondary-outline-alt > .switch-input:checked ~ .switch-handle {
        background: #a4b7c1 !important;
        border-color: #a4b7c1; }

        .switch-success > .switch-input:checked ~ .switch-label {
        background: #4dbd74 !important;
        border-color: #3a9d5d; }

        .switch-success > .switch-input:checked ~ .switch-handle {
        border-color: #3a9d5d; }

        .switch-success-outline > .switch-input:checked ~ .switch-label {
        background: #fff !important;
        border-color: #4dbd74; }
        .switch-success-outline > .switch-input:checked ~ .switch-label::after {
            color: #4dbd74; }

        .switch-success-outline > .switch-input:checked ~ .switch-handle {
        border-color: #4dbd74; }

        .switch-success-outline-alt > .switch-input:checked ~ .switch-label {
        background: #fff !important;
        border-color: #4dbd74; }
        .switch-success-outline-alt > .switch-input:checked ~ .switch-label::after {
            color: #4dbd74; }

        .switch-success-outline-alt > .switch-input:checked ~ .switch-handle {
        background: #4dbd74 !important;
        border-color: #4dbd74; }

        .switch-info > .switch-input:checked ~ .switch-label {
        background: #63c2de !important;
        border-color: #39b2d5; }

        .switch-info > .switch-input:checked ~ .switch-handle {
        border-color: #39b2d5; }

        .switch-info-outline > .switch-input:checked ~ .switch-label {
        background: #fff !important;
        border-color: #63c2de; }
        .switch-info-outline > .switch-input:checked ~ .switch-label::after {
            color: #63c2de; }

        .switch-info-outline > .switch-input:checked ~ .switch-handle {
        border-color: #63c2de; }

        .switch-info-outline-alt > .switch-input:checked ~ .switch-label {
        background: #fff !important;
        border-color: #63c2de; }
        .switch-info-outline-alt > .switch-input:checked ~ .switch-label::after {
            color: #63c2de; }

        .switch-info-outline-alt > .switch-input:checked ~ .switch-handle {
        background: #63c2de !important;
        border-color: #63c2de; }

        .switch-warning > .switch-input:checked ~ .switch-label {
        background: #ffc107 !important;
        border-color: #d39e00; }

        .switch-warning > .switch-input:checked ~ .switch-handle {
        border-color: #d39e00; }

        .switch-warning-outline > .switch-input:checked ~ .switch-label {
        background: #fff !important;
        border-color: #ffc107; }
        .switch-warning-outline > .switch-input:checked ~ .switch-label::after {
            color: #ffc107; }

        .switch-warning-outline > .switch-input:checked ~ .switch-handle {
        border-color: #ffc107; }

        .switch-warning-outline-alt > .switch-input:checked ~ .switch-label {
        background: #fff !important;
        border-color: #ffc107; }
        .switch-warning-outline-alt > .switch-input:checked ~ .switch-label::after {
            color: #ffc107; }

        .switch-warning-outline-alt > .switch-input:checked ~ .switch-handle {
        background: #ffc107 !important;
        border-color: #ffc107; }

        .switch-danger > .switch-input:checked ~ .switch-label {
        background: #f86c6b !important;
        border-color: #f63c3a; }

        .switch-danger > .switch-input:checked ~ .switch-handle {
        border-color: #f63c3a; }

        .switch-danger-outline > .switch-input:checked ~ .switch-label {
        background: #fff !important;
        border-color: #f86c6b; }
        .switch-danger-outline > .switch-input:checked ~ .switch-label::after {
            color: #f86c6b; }

        .switch-danger-outline > .switch-input:checked ~ .switch-handle {
        border-color: #f86c6b; }

        .switch-danger-outline-alt > .switch-input:checked ~ .switch-label {
        background: #fff !important;
        border-color: #f86c6b; }
        .switch-danger-outline-alt > .switch-input:checked ~ .switch-label::after {
            color: #f86c6b; }

        .switch-danger-outline-alt > .switch-input:checked ~ .switch-handle {
        background: #f86c6b !important;
        border-color: #f86c6b; }

        .switch-light > .switch-input:checked ~ .switch-label {
        background: #f0f3f5 !important;
        border-color: #d1dbe1; }

        .switch-light > .switch-input:checked ~ .switch-handle {
        border-color: #d1dbe1; }

        .switch-light-outline > .switch-input:checked ~ .switch-label {
        background: #fff !important;
        border-color: #f0f3f5; }
        .switch-light-outline > .switch-input:checked ~ .switch-label::after {
            color: #f0f3f5; }

        .switch-light-outline > .switch-input:checked ~ .switch-handle {
        border-color: #f0f3f5; }

        .switch-light-outline-alt > .switch-input:checked ~ .switch-label {
        background: #fff !important;
        border-color: #f0f3f5; }
        .switch-light-outline-alt > .switch-input:checked ~ .switch-label::after {
            color: #f0f3f5; }

        .switch-light-outline-alt > .switch-input:checked ~ .switch-handle {
        background: #f0f3f5 !important;
        border-color: #f0f3f5; }

        .switch-dark > .switch-input:checked ~ .switch-label {
        background: #29363d !important;
        border-color: #151b1f; }

        .switch-dark > .switch-input:checked ~ .switch-handle {
        border-color: #151b1f; }

        .switch-dark-outline > .switch-input:checked ~ .switch-label {
        background: #fff !important;
        border-color: #29363d; }
        .switch-dark-outline > .switch-input:checked ~ .switch-label::after {
            color: #29363d; }

        .switch-dark-outline > .switch-input:checked ~ .switch-handle {
        border-color: #29363d; }

        .switch-dark-outline-alt > .switch-input:checked ~ .switch-label {
        background: #fff !important;
        border-color: #29363d; }
        .switch-dark-outline-alt > .switch-input:checked ~ .switch-label::after {
            color: #29363d; }

        .switch-dark-outline-alt > .switch-input:checked ~ .switch-handle {
        background: #29363d !important;
        border-color: #29363d; }

        .table-outline {
        border: 1px solid #c2cfd6; }
        .table-outline td {
            vertical-align: middle; }

        .table-align-middle td {
        vertical-align: middle; }

        .table-clear td {
        border: 0; }

        .social-box {
        min-height: 160px;
        margin-bottom: 1.5rem;
        text-align: center;
        background: #fff;
        border: 1px solid #c2cfd6; }
        .social-box i {
            display: block;
            margin: -1px -1px 0;
            font-size: 40px;
            line-height: 90px;
            background: #c2cfd6; }
        .social-box .chart-wrapper {
            height: 90px;
            margin: -90px 0 0; }
            .social-box .chart-wrapper canvas {
            width: 100% !important;
            height: 90px !important; }
        .social-box ul {
            padding: 10px 0;
            list-style: none; }
            .social-box ul li {
            display: block;
            float: left;
            width: 50%; }
            .social-box ul li:first-child {
                border-right: 1px solid #c2cfd6; }
            .social-box ul li strong {
                display: block;
                font-size: 20px; }
            .social-box ul li span {
                font-size: 10px;
                font-weight: 500;
                color: #c2cfd6;
                text-transform: uppercase; }
        .social-box.facebook i {
            color: #fff;
            background: #3b5998; }
        .social-box.twitter i {
            color: #fff;
            background: #00aced; }
        .social-box.linkedin i {
            color: #fff;
            background: #4875b4; }
        .social-box.google-plus i {
            color: #fff;
            background: #d34836; }

        .horizontal-bars {
        padding: 0;
        margin: 0;
        list-style: none; }
        .horizontal-bars li {
            position: relative;
            height: 40px;
            line-height: 40px;
            vertical-align: middle; }
            .horizontal-bars li .title {
            width: 100px;
            font-size: 12px;
            font-weight: 600;
            color: #536c79;
            vertical-align: middle; }
            .horizontal-bars li .bars {
            position: absolute;
            top: 15px;
            width: 100%;
            padding-left: 100px; }
            .horizontal-bars li .bars .progress:first-child {
                margin-bottom: 2px; }
            .horizontal-bars li.legend {
            text-align: center; }
            .horizontal-bars li.legend .badge {
                display: inline-block;
                width: 8px;
                height: 8px;
                padding: 0; }
            .horizontal-bars li.divider {
            height: 40px; }
            .horizontal-bars li.divider i {
                margin: 0 !important; }
        .horizontal-bars.type-2 li {
            overflow: hidden; }
            .horizontal-bars.type-2 li i {
            display: inline-block;
            margin-right: 1rem;
            margin-left: 5px;
            font-size: 18px;
            line-height: 40px; }
            .horizontal-bars.type-2 li .title {
            display: inline-block;
            width: auto;
            margin-top: -9px;
            font-size: 0.875rem;
            font-weight: normal;
            line-height: 40px;
            color: #151b1e; }
            .horizontal-bars.type-2 li .value {
            float: right;
            font-weight: 600; }
            .horizontal-bars.type-2 li .bars {
            position: absolute;
            top: auto;
            bottom: 0;
            padding: 0; }

        .icons-list {
        padding: 0;
        margin: 0;
        list-style: none; }
        .icons-list li {
            position: relative;
            height: 40px;
            vertical-align: middle; }
            .icons-list li i {
            display: block;
            float: left;
            width: 35px !important;
            height: 35px !important;
            margin: 2px;
            line-height: 35px !important;
            text-align: center; }
            .icons-list li .desc {
            height: 40px;
            margin-left: 50px;
            border-bottom: 1px solid #c2cfd6; }
            .icons-list li .desc .title {
                padding: 2px 0 0;
                margin: 0; }
            .icons-list li .desc small {
                display: block;
                margin-top: -4px;
                color: #536c79; }
            .icons-list li .value {
            position: absolute;
            top: 2px;
            right: 45px;
            text-align: right; }
            .icons-list li .value strong {
                display: block;
                margin-top: -3px; }
            .icons-list li .actions {
            position: absolute;
            top: -4px;
            right: 10px;
            width: 40px;
            height: 40px;
            line-height: 40px;
            text-align: center; }
            .icons-list li .actions i {
                float: none;
                width: auto;
                height: auto;
                padding: 0;
                margin: 0;
                line-height: normal; }
            .icons-list li.divider {
            height: 40px; }
            .icons-list li.divider i {
                width: auto;
                height: auto;
                margin: 2px 0 0;
                font-size: 18px; }

        @media all and (-ms-high-contrast: none) {
        html {
            display: -ms-flexbox;
            display: flex;
            -ms-flex-direction: column;
                flex-direction: column; } }

        .app,
        app-dashboard,
        app-root {
        display: -ms-flexbox;
        display: flex;
        -ms-flex-direction: column;
            flex-direction: column;
        min-height: 100vh; }

        .app-header {
        -ms-flex: 0 0 55px;
            flex: 0 0 55px; }

        .app-footer {
        -ms-flex: 0 0 50px;
            flex: 0 0 50px; }

        .app-body {
        display: -ms-flexbox;
        display: flex;
        -ms-flex-direction: row;
            flex-direction: row;
        -ms-flex-positive: 1;
            flex-grow: 1;
        overflow-x: hidden; }
        .app-body .main {
            -ms-flex: 1;
                flex: 1;
            min-width: 0; }
        .app-body .sidebar {
            -ms-flex: 0 0 200px;
                flex: 0 0 200px;
            -ms-flex-order: -1;
                order: -1; }
        .app-body .aside-menu {
            -ms-flex: 0 0 250px;
                flex: 0 0 250px; }

        .header-fixed .app-header {
        position: fixed;
        z-index: 1020;
        width: 100%; }

        .header-fixed .app-body {
        margin-top: 55px; }

        .sidebar-hidden .sidebar {
        margin-left: -200px; }

        .sidebar-fixed .sidebar {
        position: fixed;
        z-index: 1019;
        width: 200px;
        height: calc(100vh - 55px); }

        .sidebar-fixed .main, .sidebar-fixed .app-footer {
        margin-left: 200px; }

        .sidebar-fixed.sidebar-hidden .main, .sidebar-fixed.sidebar-hidden .app-footer {
        margin-left: 0; }

        .sidebar-off-canvas .sidebar {
        position: fixed;
        z-index: 1019;
        height: calc(100vh - 55px); }

        @media (min-width: 992px) {
        .sidebar-compact .sidebar {
            -ms-flex: 0 0 150px;
                flex: 0 0 150px; }
        .sidebar-compact.sidebar-hidden .sidebar {
            margin-left: -150px; }
        .sidebar-compact.sidebar-fixed .main, .sidebar-compact.sidebar-fixed .app-footer {
            margin-left: 150px; }
        .sidebar-compact.sidebar-fixed .sidebar {
            width: 150px; }
        .sidebar-compact.sidebar-fixed.sidebar-hidden .main, .sidebar-compact.sidebar-fixed.sidebar-hidden .app-footer {
            margin-left: 0; }
        .sidebar-minimized .sidebar {
            -ms-flex: 0 0 50px;
                flex: 0 0 50px; }
        .sidebar-minimized.sidebar-hidden .sidebar {
            margin-left: -50px; }
        .sidebar-minimized.sidebar-fixed .main, .sidebar-minimized.sidebar-fixed .app-footer {
            margin-left: 50px; }
        .sidebar-minimized.sidebar-fixed .sidebar {
            width: 50px; }
        .sidebar-minimized.sidebar-fixed.sidebar-hidden .main, .sidebar-minimized.sidebar-fixed.sidebar-hidden .app-footer {
            margin-left: 0; } }

        .aside-menu-hidden .aside-menu {
        margin-right: -250px; }

        .aside-menu-fixed .aside-menu {
        position: fixed;
        right: 0;
        height: 100%; }
        .aside-menu-fixed .aside-menu .tab-content {
            height: calc(100vh - 2.375rem - 55px); }

        .aside-menu-fixed .main, .aside-menu-fixed .app-footer {
        margin-right: 250px; }

        .aside-menu-fixed.aside-menu-hidden .main, .aside-menu-fixed.aside-menu-hidden .app-footer {
        margin-right: 0; }

        .aside-menu-off-canvas .aside-menu {
        position: fixed;
        right: 0;
        z-index: 1019;
        height: 100%; }
        .aside-menu-off-canvas .aside-menu .tab-content {
            height: calc(100vh - 2.375rem - 55px); }

        .breadcrumb-fixed .main {
        padding-top: 3.875rem; }

        .breadcrumb-fixed .breadcrumb {
        position: fixed;
        top: 55px;
        right: 0;
        left: 0;
        z-index: 1018; }

        .breadcrumb-fixed .main:nth-child(2) .breadcrumb {
        right: 250px;
        left: 200px; }

        .breadcrumb-fixed .main:first-child .breadcrumb {
        right: 250px;
        left: 0; }

        .breadcrumb-fixed .main:last-child .breadcrumb {
        right: 0; }

        .breadcrumb-fixed.sidebar-minimized .main .breadcrumb {
        left: 50px; }

        .breadcrumb-fixed.sidebar-hidden .main .breadcrumb, .breadcrumb-fixed.sidebar-off-canvas .main .breadcrumb {
        left: 0; }

        .breadcrumb-fixed.aside-menu-hidden .main .breadcrumb, .breadcrumb-fixed.aside-menu-off-canvas .main .breadcrumb {
        right: 0; }

        .footer-fixed .app-footer {
        position: fixed;
        right: 0;
        bottom: 0;
        left: 0;
        z-index: 1020;
        height: 50px; }

        .footer-fixed .app-body {
        margin-bottom: 50px; }

        .app-header,
        .app-footer,
        .sidebar,
        .main,
        .aside-menu {
        transition: margin-left 0.25s, margin-right 0.25s, width 0.25s, flex 0.25s;
        transition: margin-left 0.25s, margin-right 0.25s, width 0.25s, flex 0.25s, -ms-flex 0.25s; }

        .sidebar-nav {
        transition: width 0.25s; }

        .breadcrumb {
        transition: left 0.25s, right 0.25s, width 0.25s; }

        @media (max-width: 991px) {
        .app-header.navbar {
            position: fixed !important;
            z-index: 1020;
            width: 100%;
            text-align: center;
            background-color: #fff;
            border-bottom: 1px solid #c2cfd6; }
            .app-header.navbar .navbar-toggler {
            color: #536c79; }
            .app-header.navbar .navbar-brand {
            position: absolute;
            left: 50%;
            margin-left: -77.5px; }
        .app-body {
            margin-top: 55px; }
        .breadcrumb-fixed .main:nth-child(2) .breadcrumb {
            right: auto;
            left: auto;
            width: 100%; }
        .sidebar,
        .sidebar-fixed .sidebar {
            position: fixed;
            z-index: 1019;
            width: 220px;
            margin-left: -220px; }
            .sidebar .sidebar-nav,
            .sidebar .nav,
            .sidebar-fixed .sidebar .sidebar-nav,
            .sidebar-fixed .sidebar .nav {
            width: 220px !important;
            height: calc(100vh - 55px); }
            .sidebar .sidebar-minimizer,
            .sidebar-fixed .sidebar .sidebar-minimizer {
            display: none; }
        .main, .app-footer {
            margin-left: 0 !important; }
        .sidebar-hidden .sidebar {
            margin-left: -220px; }
        .sidebar-mobile-show .sidebar {
            width: 220px;
            margin-left: 0; }
        .sidebar-mobile-show .main {
            margin-right: -220px !important;
            margin-left: 220px !important; } }

        hr.transparent {
        border-top: 1px solid transparent; }

        .bg-primary,
        .bg-success,
        .bg-info,
        .bg-warning,
        .bg-danger,
        .bg-inverse {
        color: #fff; }

        .b-a-0 {
        border: 0 !important; }

        .b-t-0 {
        border-top: 0 !important; }

        .b-r-0 {
        border-right: 0 !important; }

        .b-b-0 {
        border-bottom: 0 !important; }

        .b-l-0 {
        border-left: 0 !important; }

        .b-a-1 {
        border: 1px solid #c2cfd6 !important; }

        .b-t-1 {
        border-top: 1px solid #c2cfd6 !important; }

        .b-r-1 {
        border-right: 1px solid #c2cfd6 !important; }

        .b-b-1 {
        border-bottom: 1px solid #c2cfd6 !important; }

        .b-l-1 {
        border-left: 1px solid #c2cfd6 !important; }

        .b-a-2 {
        border: 2px solid #c2cfd6 !important; }

        .b-t-2 {
        border-top: 2px solid #c2cfd6 !important; }

        .b-r-2 {
        border-right: 2px solid #c2cfd6 !important; }

        .b-b-2 {
        border-bottom: 2px solid #c2cfd6 !important; }

        .b-l-2 {
        border-left: 2px solid #c2cfd6 !important; }

        @media (max-width: 575px) {
        .d-down-none {
            display: none !important; } }

        @media (max-width: 767px) {
        .d-sm-down-none {
            display: none !important; } }

        @media (max-width: 991px) {
        .d-md-down-none {
            display: none !important; } }

        @media (max-width: 1199px) {
        .d-lg-down-none {
            display: none !important; } }

        .d-xl-down-none {
        display: none !important; }

        .label-pill {
        border-radius: 1rem !important; }

        .open > a, .show > a {
        outline: 0; }

        .navbar .dropdown-toggle .img-avatar {
        height: 35px;
        margin: 0 10px; }

        *[dir="rtl"] {
        direction: rtl;
        unicode-bidi: embed; }
        *[dir="rtl"] ul {
            -webkit-padding-start: 0; }
        *[dir="rtl"] table tr th {
            text-align: right; }
        *[dir="rtl"] .breadcrumb-item {
            float: right; }
        *[dir="rtl"] .breadcrumb-menu {
            right: auto;
            left: 1rem; }
        *[dir="rtl"] .dropdown-item {
            text-align: right; }
            *[dir="rtl"] .dropdown-item i {
            margin-right: -10px;
            margin-left: 10px; }
            *[dir="rtl"] .dropdown-item .badge {
            right: auto;
            left: 10px; }
        *[dir="rtl"] .sidebar-hidden .sidebar {
            margin-right: -200px; }
        *[dir="rtl"] .sidebar-fixed .main, *[dir="rtl"] .sidebar-fixed .app-footer {
            margin-right: 200px; }
        *[dir="rtl"] .sidebar-fixed.sidebar-hidden .main, *[dir="rtl"] .sidebar-fixed.sidebar-hidden .app-footer {
            margin-right: 0; }
        *[dir="rtl"] .sidebar-minimized .sidebar {
            -ms-flex: 0 0 50px;
                flex: 0 0 50px; }
        *[dir="rtl"] .sidebar-minimized.sidebar-hidden .sidebar {
            margin-right: -50px;
            margin-left: 0; }
        *[dir="rtl"] .sidebar-minimized.sidebar-fixed .main, *[dir="rtl"] .sidebar-minimized.sidebar-fixed .app-footer {
            margin-right: 50px; }
        *[dir="rtl"] .sidebar-minimized.sidebar-fixed.sidebar-hidden .main, *[dir="rtl"] .sidebar-minimized.sidebar-fixed.sidebar-hidden .app-footer {
            margin-left: 0; }
        *[dir="rtl"] .aside-menu-hidden .aside-menu {
            margin-right: 0;
            margin-left: -250px; }
        *[dir="rtl"] .aside-menu-fixed .aside-menu {
            right: auto;
            left: 0; }
        *[dir="rtl"] .aside-menu-fixed .main, *[dir="rtl"] .aside-menu-fixed .app-footer {
            margin-left: 250px; }
        *[dir="rtl"] .aside-menu-fixed.aside-menu-hidden .main, *[dir="rtl"] .aside-menu-fixed.aside-menu-hidden .app-footer {
            margin-left: 0; }
        *[dir="rtl"] .aside-menu-off-canvas .aside-menu {
            position: fixed;
            right: 0;
            z-index: 1019;
            height: 100%; }
            *[dir="rtl"] .aside-menu-off-canvas .aside-menu .tab-content {
            height: calc(100vh - 2.375rem - 55px); }
        *[dir="rtl"] .sidebar .sidebar-nav .nav .nav-item .nav-link, *[dir="rtl"] .sidebar .sidebar-nav .nav .nav-item .navbar .dropdown-toggle, .navbar *[dir="rtl"] .sidebar .sidebar-nav .nav .nav-item .dropdown-toggle {
            direction: rtl; }
            *[dir="rtl"] .sidebar .sidebar-nav .nav .nav-item .nav-link i, *[dir="rtl"] .sidebar .sidebar-nav .nav .nav-item .navbar .dropdown-toggle i, .navbar *[dir="rtl"] .sidebar .sidebar-nav .nav .nav-item .dropdown-toggle i {
            margin: 0 0 0 0.5rem; }
            *[dir="rtl"] .sidebar .sidebar-nav .nav .nav-item .nav-link .badge, *[dir="rtl"] .sidebar .sidebar-nav .nav .nav-item .navbar .dropdown-toggle .badge, .navbar *[dir="rtl"] .sidebar .sidebar-nav .nav .nav-item .dropdown-toggle .badge {
            float: left;
            margin-top: 2px; }
            *[dir="rtl"] .sidebar .sidebar-nav .nav .nav-item .nav-link.nav-dropdown-toggle::before, *[dir="rtl"] .sidebar .sidebar-nav .nav .nav-item .navbar .nav-dropdown-toggle.dropdown-toggle::before, .navbar *[dir="rtl"] .sidebar .sidebar-nav .nav .nav-item .nav-dropdown-toggle.dropdown-toggle::before {
            position: absolute;
            right: auto !important;
            left: 1rem;
            -webkit-transform: rotate(180deg);
                    transform: rotate(180deg); }
        *[dir="rtl"] .sidebar .sidebar-nav .nav .nav-item.nav-dropdown.open > .nav-link.nav-dropdown-toggle::before, *[dir="rtl"] .sidebar .sidebar-nav .nav .navbar .nav-item.nav-dropdown.open > .nav-dropdown-toggle.dropdown-toggle::before, .navbar *[dir="rtl"] .sidebar .sidebar-nav .nav .nav-item.nav-dropdown.open > .nav-dropdown-toggle.dropdown-toggle::before {
            -webkit-transform: rotate(270deg);
                    transform: rotate(270deg); }
        *[dir="rtl"] .sidebar-minimized .sidebar .nav-link, *[dir="rtl"] .sidebar-minimized .sidebar .navbar .dropdown-toggle, .navbar *[dir="rtl"] .sidebar-minimized .sidebar .dropdown-toggle {
            padding-right: 0; }
            *[dir="rtl"] .sidebar-minimized .sidebar .nav-link i, *[dir="rtl"] .sidebar-minimized .sidebar .navbar .dropdown-toggle i, .navbar *[dir="rtl"] .sidebar-minimized .sidebar .dropdown-toggle i {
            float: right;
            padding: 0;
            margin: 0; }
            *[dir="rtl"] .sidebar-minimized .sidebar .nav-link .badge, *[dir="rtl"] .sidebar-minimized .sidebar .navbar .dropdown-toggle .badge, .navbar *[dir="rtl"] .sidebar-minimized .sidebar .dropdown-toggle .badge {
            right: auto;
            left: 15px; }
        *[dir="rtl"] .sidebar-minimized .sidebar .nav > .nav-dropdown:hover > .nav-dropdown-items {
            right: 50px;
            left: 0; }
        *[dir="rtl"] .horizontal-bars li .bars {
            padding-right: 100px;
            padding-left: 0; }
            *[dir="rtl"] .horizontal-bars li .bars .progress:first-child {
            margin-bottom: 2px; }
        *[dir="rtl"] .horizontal-bars.type-2 li i {
            margin-right: 5px;
            margin-left: 1rem; }
        *[dir="rtl"] .horizontal-bars.type-2 li .value {
            float: left;
            font-weight: 600; }
        *[dir="rtl"] .horizontal-bars.type-2 li .bars {
            padding: 0; }
        *[dir="rtl"] .icons-list li {
            position: relative;
            height: 40px;
            vertical-align: middle; }
            *[dir="rtl"] .icons-list li i {
            float: right; }
            *[dir="rtl"] .icons-list li .desc {
            margin-right: 50px;
            margin-left: 0; }
            *[dir="rtl"] .icons-list li .value {
            right: auto;
            left: 45px;
            text-align: left; }
            *[dir="rtl"] .icons-list li .value strong {
                display: block;
                margin-top: -3px; }
            *[dir="rtl"] .icons-list li .actions {
            right: auto;
            left: 10px; }
        *[dir="rtl"] .callout {
            border: 0 solid #c2cfd6;
            border-right-width: .25rem; }
            *[dir="rtl"] .callout.callout-primary {
            border-right-color: #20a8d8; }
            *[dir="rtl"] .callout.callout-secondary {
            border-right-color: #a4b7c1; }
            *[dir="rtl"] .callout.callout-success {
            border-right-color: #4dbd74; }
            *[dir="rtl"] .callout.callout-info {
            border-right-color: #63c2de; }
            *[dir="rtl"] .callout.callout-warning {
            border-right-color: #ffc107; }
            *[dir="rtl"] .callout.callout-danger {
            border-right-color: #f86c6b; }
            *[dir="rtl"] .callout.callout-light {
            border-right-color: #f0f3f5; }
            *[dir="rtl"] .callout.callout-dark {
            border-right-color: #29363d; }
            *[dir="rtl"] .callout .chart-wrapper {
            left: 0;
            float: left; }
        *[dir="rtl"] .callout-default {
            border-right-color: #536c79; }


            /*estilos inventario*/

        .back-inventario{

            background-image: url('../img/back3.jpg');


        }

    </style>

</head>
<body style="background:#fff;">
    <div style="background:#fff;" class="">
        <div class="row">
            <div>
                <div class="col-lg-12 text-center">
                    <h3 style="color:red;">Lista de Artículos</h3>
                </div>
                <div class="col-lg-12">
                    <p>Reporte generado el dia:{{now()}}</p>
                </div>
                <div class="col-lg-12">
                    <table class="table  table-active table-bordered table-striped table-sm">
                        <thead>
                            <tr>
                                <th>Código</th>
                                <th>Nombre</th>
                                <th>Categoría</th>
                                <th>Precio Venta</th>
                                <th>Stock</th>
                                <th>Descripción</th>
                                <th>Estado</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($articulos as $a)
                            <tr>
                                <td>{{$a->codigo}}</td>
                                <td>{{$a->nombre}}</td>
                                <td>{{$a->categoria->nombre}}</td>
                                <td>{{$a->precio_venta}}</td>
                                <td>{{$a->stock}}</td>
                                <td>{{$a->descripcion}}</td>
                                <td>{{$a->condicion?'Activo':'Desactivado'}}</td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>

                    <p><strong>Total de registros: </strong>{{$cont}}</p>
                </div>
            </div>
        </div>


    </div>
</body>
</html>
