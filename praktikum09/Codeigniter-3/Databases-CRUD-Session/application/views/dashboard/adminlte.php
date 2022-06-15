<?php
defined('BASEPATH') or exit('No direct script access allowed');
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Welcome to CodeIgniter</title>

    <style type="text/css">
        ::selection {
            background-color: #E13300;
            color: white;
        }

        ::-moz-selection {
            background-color: #E13300;
            color: white;
        }

        body {
            background-color: #fff;
            font: 13px/20px normal Helvetica, Arial, sans-serif;
            color: #4F5155;
        }

        a {
            color: #003399;
            background-color: transparent;
            font-weight: normal;
            text-decoration: none;
        }

        a:hover {
            color: #97310e;
        }

        .h1-ci {
            color: #444;
            background-color: transparent;
            border-bottom: 1px solid #D0D0D0;
            font-size: 19px;
            font-weight: normal;
            margin: 0 0 14px 0;
            padding: 14px 15px 10px 15px;
        }

        code {
            font-family: Consolas, Monaco, Courier New, Courier, monospace;
            font-size: 12px;
            background-color: #f9f9f9;
            border: 1px solid #D0D0D0;
            color: #002166;
            display: block;
            margin: 14px 0 14px 0;
            padding: 12px 10px 12px 10px;
        }

        #body {
            margin: 0 15px 0 15px;
            min-height: 96px;
        }

        p {
            margin: 0 0 10px;
            padding: 0;
        }

        p.footer {
            text-align: right;
            font-size: 11px;
            border-top: 1px solid #D0D0D0;
            line-height: 32px;
            padding: 0 10px 0 10px;
            margin: 20px 0 0 0;
        }

        #container {
            margin: 10px;
            border: 1px solid #D0D0D0;
            box-shadow: 0 0 8px #D0D0D0;
        }
    </style>
</head>

<body>

    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1><b>This is Dashboard</b></h1>
                    </div>
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="#">Home</a></li>
                            <li class="breadcrumb-item active">Blank Page</li>
                        </ol>
                    </div>
                </div>
            </div><!-- /.container-fluid -->
        </section>

        <!-- Main content -->
        <section class="content">

            <!-- Default box -->
            <div class="card card-primary card-outline">
                <div class="card-header">
                    <h3 class="card-title"><b>About</b></h3>
                </div>
                <div class="card-body">
                    <h1 class="h1-ci">Welcome to AdminLTE 3.1.0!</h1>
                    <div class="content-header">
                        <h1>Introduction</h1>
                    </div>
                    <div class="content pl-2">
                        <h2 id="quick-start">Quick start</h2>
                        <p>There are multiple ways to install AdminLTE.</p>
                        <h3 id="download--changelog">Download &amp; Changelog:</h3>
                        <p>Always Recommended to download from GitHub latest release <a href="https://github.com/ColorlibHQ/AdminLTE/releases/latest">AdminLTE 3</a> for bug free and latest features.<br />
                            Visit the <a href="https://github.com/ColorlibHQ/AdminLTE/releases">releases</a> page to view the changelog.<br />
                            Legacy Releases are <a href="https://github.com/ColorlibHQ/AdminLTE/releases/tag/v2.4.18">AdminLTE 2</a> / <a href="https://github.com/ColorlibHQ/AdminLTE/releases/tag/1.3.1">AdminLTE 1</a>.</p>
                        <h2 id="stable-release">Stable release</h2>
                        <h3 id="grab-from-jsdelivr-cdn">Grab from <a href="https://www.jsdelivr.com/package/npm/admin-lte">jsdelivr</a> CDN:</h3>
                        <p><em><strong>Important Note</strong>: You needed to add separately cdn links for plugins in your project.</em></p>
                        <div class="language-html highlighter-rouge">
                            <div class="highlight">
                                <pre class="highlight p-0"><code><span class="nt">&lt;script </span><span class="na">src=</span><span class="s">"https://cdn.jsdelivr.net/npm/<a href="/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="5f3e3b32363172332b3a1f6c716e">[email&#160;protected]</a>/dist/js/adminlte.min.js"</span><span class="nt">&gt;&lt;/script&gt;</span></code></pre>
                            </div>
                        </div>
                        <div class="language-html highlighter-rouge">
                            <div class="highlight">
                                <pre class="highlight p-0"><code><span class="nt">&lt;link</span> <span class="na">rel=</span><span class="s">"stylesheet"</span> <span class="na">href=</span><span class="s">"https://cdn.jsdelivr.net/npm/<a href="/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="c8a9aca5a1a6e5a4bcad88fbe6f9">[email&#160;protected]</a>/dist/css/adminlte.min.css"</span><span class="nt">&gt;</span></code></pre>
                            </div>
                        </div>
                        <h3 id="using-the-command-line">Using The Command Line:</h3>
                        <p><em><strong>Important Note</strong>: To install it via npm/Yarn, you need at least Node.js 10 or higher.</em></p>
                        <h4 id="via-npm">Via npm</h4>
                        <div class="language-bash highlighter-rouge">
                            <div class="highlight">
                                <pre class="highlight p-0"><code>npm <span class="nb">install </span><a href="/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="b1d0d5dcd8df9cddc5d4f1">[email&#160;protected]</a>^3.1 <span class="nt">--save</span></code></pre>
                            </div>
                        </div>
                        <h4 id="via-yarn">Via Yarn</h4>
                        <div class="language-bash highlighter-rouge">
                            <div class="highlight">
                                <pre class="highlight p-0"><code>yarn add <a href="/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="1f7e7b72767132736b7a5f">[email&#160;protected]</a>^3.1</code></pre>
                            </div>
                        </div>
                        <h4 id="via-composer">Via Composer</h4>
                        <div class="language-bash highlighter-rouge">
                            <div class="highlight">
                                <pre class="highlight p-0"><code>composer require <span class="s2">"almasaeed2010/adminlte=~3.1"</span></code></pre>
                            </div>
                        </div>
                        <h4 id="via-git">Via Git</h4>
                        <div class="language-bash highlighter-rouge">
                            <div class="highlight">
                                <pre class="highlight p-0"><code>git clone https://github.com/ColorlibHQ/AdminLTE.git</code></pre>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- /.card -->
        </section>
        <!-- /.content -->
    </div>
    <!-- /.content-wrapper -->

</body>