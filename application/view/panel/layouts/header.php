<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>mvc panel</title>
    <link rel="stylesheet" href="<?php $this->asset('css/bootstrap.min.css'); ?>" media="all" type="text/css">
    <link rel="stylesheet" href="<?php $this->asset('css/style.css'); ?>">
</head>

<body>
    <section id="app">
        <nav class="navbar navbar-expand-lg navbar-dark  bg-red">
            <a class="navbar-brand" href="<?php $this->url('home') ?>">MVC tutorial panel</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
        </nav>

        <section class="container-fluid">
            <section class="row">
                <section class="col-md-2 p-0">
                    <section class="sidebar">
                        <?php $base_url = "http://localhost:8000/mvc/"; ?>
                        <section class="sidebar-link">
                            <a href="<?= $base_url ?>panel">panel</a>
                        </section>
                        <section class="sidebar-link">
                            <a href="<?= $base_url ?>category">category</a>
                        </section>
                        <section class="sidebar-link">
                            <a href="<?= $base_url ?>article">article</a>
                        </section>

                    </section>
                </section>
                <section class="col-md-10 pt-3">
