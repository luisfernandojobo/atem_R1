#!/bin/bash
echo "Descargando $1";
lynx -source $1 >/var/www/w1/atem_R1/yii/yiip/protected/views/xml_csv/imagenes1/img-$2.jpeg
