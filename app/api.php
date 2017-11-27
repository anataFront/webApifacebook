<?php


  $nosotros = file_get_contents("https://graph.facebook.com/v2.11/159339007434866?fields=name%2Cabout%2Cdescription%2Clink%2Cemails%2Cphone%2Clocation&access_token=1593609980853196%7Cy1yr7JOR8cEdFMOvCt8-P0SG1BY");
  $nosotros = json_decode($nosotros);
  $about = $nosotros;
  $descripcion = $about->description;
  $phone = $about->phone;
  $link = $about->link;
  $email = $about->emails[0];
  $location = $about->location->street;
  $lat = $about->location->latitude;
  $long = $about->location->longitude;

  $portadas = file_get_contents("https://graph.facebook.com/v2.11/338446309524134?fields=photos.limit(3)%7Bimages%7D&access_token=1593609980853196%7Cy1yr7JOR8cEdFMOvCt8-P0SG1BY");
  $portadas = json_decode($portadas);
  $port = $portadas->photos->data;

  $posts = file_get_contents("https://graph.facebook.com/v2.11/911296465572446?fields=photos%7Bimages%7D&access_token=1593609980853196%7Cy1yr7JOR8cEdFMOvCt8-P0SG1BY");
  $posts = json_decode($posts);
  $articulos = $posts->photos->data;

  $events = file_get_contents("https://graph.facebook.com/v2.11/1477144892320931?fields=photos.limit(10)%7Bimages%7D&access_token=1593609980853196%7Cy1yr7JOR8cEdFMOvCt8-P0SG1BY");
  $events = json_decode($events);
  $eventos = $events->photos->data;

  $activations = file_get_contents("https://graph.facebook.com/v2.11/914358638599562?fields=photos.limit(10)%7Bimages%7D&access_token=1593609980853196%7Cy1yr7JOR8cEdFMOvCt8-P0SG1BY");
  $activations = json_decode($activations);
  $activations = $activations->photos->data;

  $conventions = file_get_contents("https://graph.facebook.com/v2.11/1477135685655185?fields=photos.limit(10)%7Bimages%7D&access_token=1593609980853196%7Cy1yr7JOR8cEdFMOvCt8-P0SG1BY");
  $conventions = json_decode($conventions);
  $conventions = $conventions->photos->data;

  $mkt = file_get_contents("https://graph.facebook.com/v2.11/1474937855874968?fields=photos.limit(10)%7Bimages%7D&access_token=1593609980853196%7Cy1yr7JOR8cEdFMOvCt8-P0SG1BY");
  $mkt = json_decode($mkt);
  $mkt = $mkt->photos->data;

  

 ?>
