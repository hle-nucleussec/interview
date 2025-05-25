<?php

// Create 2 books and 2 magazines, add them to library and borrow one for each
$bookOne = new Book('title1', 'author1');
$bookTwo = new Book('title2', 'author2');

$magazineOne = new Magazine('name1', 'publisher1');
$magazineTwo = new Magazine('name2', 'publisher2');

$bookOne->add();
$bookTwo->add();

$bookOne->borrow();

$magazineOne->add();
$magazineTwo->add();

$magazineOne->borrow();

