{\rtf1\ansi\ansicpg1252\cocoartf1187\cocoasubrtf370
{\fonttbl\f0\fmodern\fcharset0 Courier;}
{\colortbl;\red255\green255\blue255;}
\margl1440\margr1440\vieww10800\viewh8400\viewkind0
\deftab720
\pard\pardeftab720

\f0\fs24 \cf0 <?php\
\
\
header('Content-type: application/json');\
\
// username sent from Form \
\pard\pardeftab720
\cf0 include("configuration.php");\
\pard\pardeftab720
\cf0 $username=mysql_real_escape_string($_POST['username']);\
$selectsql="SELECT * FROM user WHERE user_name='$username''";\
echo$row ['first_name'];\
\
?>\
}