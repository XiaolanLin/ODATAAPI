{\rtf1\ansi\ansicpg1252\cocoartf1265
{\fonttbl\f0\fmodern\fcharset0 Courier;}
{\colortbl;\red255\green255\blue255;}
\margl1440\margr1440\vieww10800\viewh8400\viewkind0
\deftab720
\pard\pardeftab720

\f0\fs24 \cf0 <?php\
$mysql_hostname = "173.201.214.70";\
$mysql_user = \'93voya\'94;\
$mysql_password = \'93VOYAvoya2013@\'94;\
$mysql_database = "voya";\
$bd = mysql_connect($mysql_hostname, $mysql_user, $mysql_password) \
or die("Opps some thing went wrong");\
mysql_select_db($mysql_database, $bd) or die("Opps some thing went wrong");\
?>\
}