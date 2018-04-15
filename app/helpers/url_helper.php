<?php 
//Simple page reidrect
function redirect($page){
    header('location: ' . URLROOT . '/' . $page);
}