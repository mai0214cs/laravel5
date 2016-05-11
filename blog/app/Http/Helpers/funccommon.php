<?php
function ReturnImage($url){
    return file_exists(trim($url, '/'))?$url:'/image.gif';
}