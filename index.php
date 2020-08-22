<?php

Header("Expires: Thu, 19 Feb 1998 13:24:18 GMT");
Header("Last-Modified: ".gmdate("D, d M Y H:i:s")." GMT");
Header("Cache-Control: no-cache, must-revalidate");
Header("Cache-Control: post-check=0,pre-check=0");
Header("Cache-Control: max-age=0");
Header("Pragma: no-cache");

header("Cache-Control: no-store, no-cache, must-revalidate");
header("Expires: " . date("r"));

?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8"/>
    <title>Айтекс Промо. Отчет для клиентов</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" src="style.css">
</head>
<body>
    <div id="app"></div>
      
    <script crossorigin src="https://unpkg.com/react@16/umd/react.production.min.js"></script>
    <script crossorigin src="https://unpkg.com/react-dom@16/umd/react-dom.production.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/babel-standalone/6.25.0/babel.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.4.1.min.js" integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo=" crossorigin="anonymous"></script>
    
    <style>
    
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            transition: all 300ms;
            font-family: 'Roboto', sans-serif;
        }
        
        *::selection {
        	background-color: rgba(255, 190, 78, 0.4);
        }
        
        .main-wrapper {
            display: block;
            position: relative;
            width: 1300px;
            height: auto;
            min-height: 300px;
            border-radius: 10px;
            box-shadow: 0px 2px 15px rgba(0, 0, 0, 0.15);
            
            margin: 0 auto;
            margin-top: 26px;
            padding: 26px;
            margin-bottom: 40px;
            margin-top: 30px;
        }
        
        .main-wrapper--hidd {
        	transform: translateX(-80%);
        }
        
        header {
            display: flex;
            flex-direction: row;
            align-items: center;
            justify-content: flex-start;
            width: 100%;
            height: auto;
        }
        
        .header__title {
            display: block;
            position: relative;
            width: 800px;
            height: auto;
            border-bottom: 2px solid #78c6d0;
            padding-bottom: 20px;
            padding-left: 10px;
            margin-bottom: 26px;
        }
        
        .header__title h1 {
            line-height: 46px;
            margin-bottom: 6px;
        }
        
        .header__title h4 {
            padding-left: 20px;
        }
        
        .label-class,
        .label-classTwo {
            display: block;
            position: relative;
            width: 200px;
            height: 40px;
            background-color: #FFBE4E;
            margin-bottom: 26px;
            line-height: 39px;
            padding-left: 12px;
            font-size: 13px;
            border-top-left-radius: 5px;
            border-bottom-left-radius: 5px;
            font-style: italic;
            font-weight: 700;
        }
        
        .label-classTwo {
            background-color: #78c6d0;
        }
        
        .label-class:nth-of-type(1)::before {
            content: "Данные собраны со всех источников трафика";
            
            display: block;
            position: absolute;
            width: 360px;
            height: 30px;
            line-height: 29px;
            font-size: 13px;
            color: grey;
            top: 50%;
            margin-top: -15px;
            left: 100%;
            margin-left: 40px;
            font-weight: 200;
        }
        
        .label-class:nth-of-type(2)::before {
            content: "Данные собраны c источника трафика Директ";
            
            display: block;
            position: absolute;
            width: 360px;
            height: 30px;
            line-height: 29px;
            font-size: 13px;
            color: grey;
            top: 50%;
            margin-top: -15px;
            left: 100%;
            margin-left: 40px;
            font-weight: 200;
        }
        
        .label-class:nth-of-type(3)::before {
            content: "Данные собраны c источника трафика Директ";
            
            display: block;
            position: absolute;
            width: 360px;
            height: 30px;
            line-height: 29px;
            font-size: 13px;
            color: grey;
            top: 50%;
            margin-top: -15px;
            left: 100%;
            margin-left: 40px;
            font-weight: 200;
        }
        
        .label-class:nth-of-type(4)::before {
            content: "Данные собраны c источника трафика Директ";
            
            display: block;
            position: absolute;
            width: 360px;
            height: 30px;
            line-height: 29px;
            font-size: 13px;
            color: grey;
            top: 50%;
            margin-top: -15px;
            left: 100%;
            margin-left: 40px;
            font-weight: 200;
        }
        
        .label-class:nth-of-type(5)::before {
            content: "Данные собраны c источника трафика Директ";
            
            display: block;
            position: absolute;
            width: 360px;
            height: 30px;
            line-height: 29px;
            font-size: 13px;
            color: grey;
            top: 50%;
            margin-top: -15px;
            left: 100%;
            margin-left: 40px;
            font-weight: 200;
        }
        
        .label-class:nth-of-type(6)::before {
            content: "Данные собраны c источника трафика Директ";
            
            display: block;
            position: absolute;
            width: 360px;
            height: 30px;
            line-height: 29px;
            font-size: 13px;
            color: grey;
            top: 50%;
            margin-top: -15px;
            left: 100%;
            margin-left: 40px;
            font-weight: 200;
        }
        
        .label-class:nth-of-type(7)::before {
            content: "Данные собраны со всех источников трафика";
            
            display: block;
            position: absolute;
            width: 360px;
            height: 30px;
            line-height: 29px;
            font-size: 13px;
            color: grey;
            top: 50%;
            margin-top: -15px;
            left: 100%;
            margin-left: 40px;
            font-weight: 200;
        }
        
        .label-class:nth-of-type(8)::before {
            content: "Данные собраны c источника трафика Директ";
            
            display: block;
            position: absolute;
            width: 360px;
            height: 30px;
            line-height: 29px;
            font-size: 13px;
            color: grey;
            top: 50%;
            margin-top: -15px;
            left: 100%;
            margin-left: 40px;
            font-weight: 200;
        }
        
        .label-class::after {
            content: "";
            display: block;
            position: absolute;
            width: 0;
            height: 0;
            border-left: 24px solid #FFBE4E;
            border-top: 13px solid transparent;
            border-bottom: 13px solid transparent;
            
            top: 50%;
            margin-top: -13px;
            left: 100%;
        }
        
        .label-classTwo::after {
            content: "";
            display: block;
            position: absolute;
            width: 0;
            height: 0;
            border-left: 24px solid #78c6d0;
            border-top: 13px solid transparent;
            border-bottom: 13px solid transparent;
            
            top: 50%;
            margin-top: -13px;
            left: 100%;
        }
        
        .data-wrapper,
        .data-wrapper--forTarget,
        .dataWrapper__Direct,
        .dataWrapper__Auditory {
            display: block;
            position: relative;
            width: 90%;
            height: auto;
            min-height: 200px;
            border-left: 4px solid #E1E1E1;
            margin-bottom: 26px;
            margin-left: 14px;
            padding-top: 14px;
            padding-bottom: 14px;
        }
        
        .data-wrapper:nth-child(1) {
        	min-height: 300px;
        }
        
        .data-wrapper {
        	padding-bottom: 0.1px;
        }
        
        .data-wrapper--hidd { }
        
        .dataWrapper__Direct {
            display: flex;
            flex-direction: row;
            align-items: center;
            justify-content: flex-start;
            flex-wrap: wrap;
            padding-left: 14px;
        }
        
        .dataWrapper__Auditory {
            display: flex;
            flex-direction: row;
            align-content: flex-start;
            justify-content: space-between;
            flex-wrap: wrap;
        }
        
        .data-wrapper--forTarget {
            display: flex;
            flex-direction: row;
            align-items: flex-start;
            justify-content: flex-start;
        }
    
        .data-wrapper__canal,
        .data-wrapper__campaign {
            display: flex;
            flex-direction: row;
            align-items: center;
            justify-content: flex-start;
            position: relative;
            
            width: 940px;
            height: auto;
            border: 1px dashed #E1E1E1;
            border-radius: 5px;
            margin-left: 14px;
            
            margin-bottom: 14px;
            padding: 16px;
        }
        
        .data-wrapper__campaign {
        	flex-wrap: wrap;
        }
        
        .data-wrapper__canal--top {
        	margin-top: 40px;
        	background-color: white !important;
        }
        
        .data-wrapper__canal--top:nth-of-type(1)::before {
        	content: "больше всего переходов";
        	
        	display: block;
        	position: absolute;
        	width: 300px;
        	height: 16px;
        	font-size: 13px;
        	
        	color: grey;
        	top: 0;
        	left: 0%;
        	margin-left: 20px;
        	margin-top: -30px;
        	border-left: 16px solid #FFBE4E;
        	padding-left: 8px;
        }
        
        .data-wrapper__canal--top:nth-of-type(2)::before {
        	content: "больше всего конверсий с канала";
        	
        	display: block;
        	position: absolute;
        	width: 300px;
        	height: 16px;
        	font-size: 13px;
        	
        	color: grey;
        	top: 0;
        	left: 0%;
        	margin-left: 20px;
        	margin-top: -30px;
        	border-left: 16px solid #FFBE4E;
        	padding-left: 8px;
        }
        
        .data-wrapper__canal:last-child {
        	margin-bottom: 0px;
        }
        
        .data-wrapper__campaign:hover {
            cursor: pointer;
        }
        
        .data-wrapper__campaign article {
            display: block;
            position: absolute;
            width: 60px;
            height: 30px;
            border: 1px solid #FFBE4E;
            left: 100%;
            margin-left: -130px;
            border-radius: 5px;
            line-height: 28px;
            text-align: center;
            font-size: 12px;
        }
        
        .data-wrapper__campaign article::after {
            content: "отказы";
            
            display: block;
            position: absolute;
            width: 60px;
            height: 30px;
            line-height: 28px;
            font-size: 12px;
            left: 60px;
            top: 50%;
            margin-top: -15px;
        }
        
        .data-wrapper__canal:nth-of-type(1) {
            background-color: #f6f6f6;
        }
        
        .data-wrapper__campaign:nth-of-type(1) {
            /* background-color: #f6f6f6; */
        }
        
        
        
        .data-wrapper__canal:hover {
            cursor: pointer;
        }
        
        .data-wrapper__canal span {
            display: block;
            position: relative;
            width: 240px;
            height: 30px;
            line-height: 29px;
            border-right: 2px solid #78c6d0;
            font-size: 13px;
        }
        
        .data-wrapper__campaign span {
            display: block;
            position: relative;
            width: 400px;
            height: 30px;
            line-height: 29px;
            border-right: 2px solid #78c6d0;
            font-size: 13px;
            overflow: hidden;
        }
        
        .data-wrapper__canal hr:nth-of-type(2) {
            width: 420px;
        }
        
        .data-wrapper__canal hr {
            display: block;
            position: relative;
            width: 500px;
            height: 10px;
            background-color: #78c6d0;
            border: none;
            
            border-top-right-radius: 5px;
            border-bottom-right-radius: 5px;
        }
        
        .data-wrapper__campaign hr {
            display: block;
            position: relative;
            width: 340px;
            height: 10px;
            background-color: #78c6d0;
            border: none;
            
            border-top-right-radius: 5px;
            border-bottom-right-radius: 5px;
        }
        
        .data-wrapper__canal:nth-child(2) hr {
            width: 420px;
        }
        
        .data-wrapper__canal:nth-child(5) hr {
            width: 120px;
        }
        
        .data-wrapper__canal hr:hover {
            cursor: pointer;
        }
        
        .data-wrapper__canal:nth-of-type(6) {
            background-color: rgba(255, 190, 78, 0.1);
        }
        
        .data-wrapper__canal:nth-of-type(7) {
            margin-bottom: 0;
            background-color: rgba(255, 190, 78, 0.1);
        }
        
        .data-wrapper__campaign:last-of-type {
            /* margin-bottom: 0;
            background-color: rgba(255, 190, 78, 0.1); */
        }
        
        .data-wrapper__campaign:nth-of-type(6) {
            /* background-color: rgba(255, 190, 78, 0.1); */
        }
        
        .data-wrapper__canal p,
        .data-wrapper__campaign p {
            font-size: 13px;
            margin-left: 12px;
            margin-top: -16px;
        }
        
        .data-wrapper__canal i,
        .data-wrapper__campaign i {
            display: none;
            position: absolute;
            width: 14px;
            height: 14px;
            background-color: #FFBE4E;
            border-radius: 50%;
            left: 0;
            top: 50%;
            margin-top: -7px;
            margin-left: -24px;
        }
        
        .data-wrapper__canal:nth-of-type(1) i  {
            display: block;
        }
        
        .data-wrapper__campaign:nth-of-type(1) i {
            display: block;
        }
        
        .data-wrapper__metrics {
            display: block;
            position: absolute;
            width: 240px;
            height: auto;
            min-height: 100px;
            background-color: #f6f6f6;
            border-radius: 5px;
            border: 1px dashed #E1E1E1;
            left: 968px;
            top: 0;
            margin-top: 14px;   
        }
        
        .data-wrapper__metrics::before {
        	content: "Кликните по кампании слева, чтобы получить подробную информацию";
        	
        	display: block;
        	position: absolute;
        	width: 220px;
        	height: auto;
        	line-height: 16px;
        	font-size: 12px;
        	color: grey;
        	top: 0;
        	margin-top: -60px;
        	margin-left: -44px;
        	font-style: italic;
        	border-left: 2px solid #FFBE4E;
        	padding-top: 6px;
        	padding-bottom: 6px;
        	padding-left: 14px;
        }
        
        .data-wrapper__metrics span {
            display: block;
            position: relative;
            width: 100%;
            height: 40px;
            font-size: 13px;
            line-height: 38px;
            text-align: center;
            font-style: italic;
        }
        
        .data-wrapper__metrics p {
            display: block;
            position: relative;
            width: 100%;
            height: 40px;
            font-size: 13px;
            line-height: 38px;
            text-align: center;
            background-color: white;
        }
        
        .data-wrapper__leader,
        .data-wrapper__leader2 {
            display: block;
            position: absolute;
            width: 240px;
            height: 34px;
            line-height: 34px;
            font-size: 13px;
            font-style: italic;
            
            left: 100%;
            margin-left: -136px;
            top: 418px;
            font-weight: 700;
        }
        
        .data-wrapper__leader2 {
            top: 497px;
        }
        
        .data-wrapper__canal__hint {
            display: block !important;
            position: absolute !important;
            width: 20px !important;
            height: 20px !important;
            line-height: 15px !important;
            text-align: center !important;
            font-size: 10px !important;
            border-radius: 50% !important;
            background-color: transparent !important;
            
            left: 100% !important;
            margin-left: -31px !important;
            top: 0px !important;
            margin-top: 10px !important;
            
            background-image: url(http://images.vfl.ru/ii/1585301542/b361efd2/30015393.png);
            background-size: cover;
            background-position: center;
            background-repeat: no-repeat;
        }
        
        .data-wrapper__canal__hint:hover {
            cursor: pointer;
        }
        
        .data-wrapper__forHints {
            display: none;
            position: absolute;
            width: 240px;
            height: auto;
            min-height: 111px;
            box-shadow: 0px 2px 8px rgba(0, 0, 0, 0.15);
            border-radius: 5px;
            
            left: 668px;
            top: 0;
            margin-top: -49px;   
            background-color: white;
            padding: 20px;
            padding-top: 18px;
            
            font-size: 13px;
            line-height: 20px;
        }
        
        .data-wrapper__TargetColumn {
            display: flex;
            flex-direction: column;
            align-content: flex-start;
            justify-content: flex-start;
            flex-wrap: wrap;
            overflow: hidden;
            
            position: relative;
            width: 100%;
            height: 783px;
            min-height: 200px;
            border-top: 2px solid #FFBE4E;
            border-radius: 0px;
            margin-left: 14px;
        }
        
        .data-wrapper__TargetColumn article {
        	display: block;
        	position: relative;
        	width: 25%;
        	height: auto;
        }
        
        .data-wrapper__TargetColumn span,
        .data-wrapper__TargetColumn p {
            display: block;
            position: relative;
            width: 100%;
            height: 38px;
            text-align: center;
            line-height: 37px;
            text-align: center;
            font-size: 13px;
            overflow: hidden;
            border-right: 1px dashed #E1E1E1;
        }
        
        .data-wrapper__TargetColumn span {
        	height: auto;
        	line-height: 20px;
        	padding: 10px 22px;
        	padding-bottom: 11px;
        }
        
        .data-wrapper__TargetColumn p {
            background-color: #f6f6f6;
        }
        
        .data-wrapper__regionsLine,
        .data-wrapper__regionsLine--best {
            display: flex;
            flex-direction: row;
            align-items: center;
            justify-content: flex-start;
            
            width: 100%;
            height: auto;
            min-height: 40px;
        }
        
        .data-wrapper__regionsLine--best:last-child {
        	margin-bottom: 14px;
        }
        
        .data-wrapper__regionsLine:nth-of-type(2) span:nth-of-type(4),
        .data-wrapper__regionsLine:nth-of-type(3) span:nth-of-type(4),
        .data-wrapper__regionsLine:nth-of-type(4) span:nth-of-type(4) {
            /* color: #2fa72f; */
        }
        
        .data-wrapper__regionsLine:nth-of-type(9) span:nth-of-type(4),
        .data-wrapper__regionsLine:nth-of-type(10) span:nth-of-type(4) {
            /* color: #b12d2d; */
        }
        
        .data-wrapper__regionsLine span:nth-of-type(1),
        .data-wrapper__regionsLine--best span:nth-of-type(1) {
            width: 40%;
        }
        
        .data-wrapper__regionsLine--best span:nth-of-type(1) {
            font-style: italic;
            font-weight: 700;
        }
        
        .data-wrapper__regionsLine--best {
            background-color: rgba(255, 190, 78, 0.1);
        }
        
        .data-wrapper__regionsLine:nth-of-type(1) {
            background-color: #f6f6f6;
            font-style: italic;
            border-right: 1px dashed #E1E1E1;
            border-top-right-radius: 5px;
            font-weight: 700;
        }
        
        .data-wrapper__regionsLine:nth-of-type(1) span {
            border: none;
        }
        
        .data-wrapper__regionsLine span,
        .data-wrapper__regionsLine--best span {
            display: block;
            position: relative;
            width: 15%;
            height: auto;
            padding: 8px 20px;
            padding-bottom: 10px;
            line-height: 22px;
            text-align: center;
            font-size: 13px;
            border-right: 1px dashed #E1E1E1;
            border-bottom: 1px dashed #E1E1E1;
        }
        
        .data-wrapper__regionsLine--best span {
            width: 30%;
        }
        
        .data-wrapper__regionsLine--best span:nth-of-type(1),
        .data-wrapper__regionsLine span:nth-of-type(1) {
            text-align: left;
            padding-left: 16px;
        }
        
        .dataWrapper__RegLine {
            display: flex;
            flex-direction: row;
            align-items: center;
            justify-content: flex-start;
            
            position: relative;
            width: 100%;
            height: 100px;
            padding-left: 14px;
        }
        
        .dataWrapper__RegLine:last-child {
        	margin-bottom: 14px;
        }
        
        .dataWrapper__RegLine span {
            display: block;
            position: relative;
            width: 80px;
            height: 80px;
            
            background-size: cover;
            background-position: center;
            background-repeat: no-repeat;
            background-color: rgba(255, 190, 78, 0.1);
            border-radius: 10px;
            box-shadow: 0px 0px 2.5px grey;
        }
        
        .dataWrapper__RegLine:nth-child(1) span {
            background-image: url(http://images.vfl.ru/ii/1585818057/8ad80850/30079845.png);
            background-size: 75%;
        }
        
        .dataWrapper__RegLine:nth-child(2) span {
            background-image: url(http://images.vfl.ru/ii/1585818057/a5c4bc5e/30079843.png);
            background-size: 64%;
        }
        
        .dataWrapper__RegLine:nth-child(3) span,
        .dataWrapper__RegLine:nth-child(4) span {
            background-image: url(http://images.vfl.ru/ii/1585818057/a5c4bc5e/30079843.png);
            background-size: 64%;
        }
        
        .dataWrapper__RegLine__data {
            display: flex;
            flex-direction: row;
            align-items: center;
            justify-content: flex-start;
            width: 800px;
            height: 40px;
            background-color: #f6f6f6;
            border-radius: 20px;
            margin-left: 16px;
        }
        
        .dataWrapper__RegLine__data p:nth-child(1) {
            font-weight: 700;
            font-style: italic;
        }
        
        .dataWrapper__RegLine__data p {
            display: block;
            position: relative;
            width: 25%;
            text-align: center;
            font-size: 13px;
            line-height: 39px;
            height: 40px;
            border-right: 1px dashed #E1E1E1;
        }
        
        .dataWrapper__RegLine__data p:nth-child(4) {
             border-right: none;   
        }
        
        .dataWrapper__DirectBlock {
            display: block;
            position: relative;
            width: 250px;
            height: 280px;
            background-color: #f6f6f6;
            border-radius: 5px;
            margin-right: 14px;
        }
        
        .dataWrapper__DirectBlock span {
            display: block;
            position: relative;
            width: 60px;
            height: 60px;
            background-size: cover;
            background-position: center;
            background-repeat: no-repeat;
            margin: 0 auto;
            margin-top: 38px;
        }
        
        .dataWrapper__DirectBlock h2 {
            display: block;
            position: relative;
            width: 100%;
            height: 110px;
            line-height: 108px;
            text-align: center;
            font-size: 44px;
            font-weight: 200;
        }
        
        .dataWrapper__DirectBlock p {
            display: block;
            position: absolute;
            width: 100%;
            height: 40px;
            line-height: 38px;
            font-size: 14px;
            text-align: center;
            font-style: italic;
            
            top: 100%;
            margin-top: -44px;
        }
        
        .dataWrapper__DirectBlock:nth-child(1) span {
            background-image: url(http://images.vfl.ru/ii/1586162255/7d13672e/30116560.png);
            background-image: url(http://images.vfl.ru/ii/1586245516/88ae1be0/30126249.png);
        }
        
        .dataWrapper__DirectBlock:nth-child(2) span {
            background-image: url(http://images.vfl.ru/ii/1586162255/f1c6dd7f/30116559.png);
            background-image: url(http://images.vfl.ru/ii/1586245516/88ae1be0/30126249.png);
        }
        
        .dataWrapper__DirectBlock:nth-child(3) span {
            background-image: url(http://images.vfl.ru/ii/1586245516/88ae1be0/30126249.png);
        }
        
        .dataWrapper__DirectBlock:nth-child(4) span {
            background-image: url(http://images.vfl.ru/ii/1586245516/88ae1be0/30126249.png);
        }
        
        .dataWrapper__DirectCamps {
            display: block;
            position: relative;
            width: 100%;
            height: auto;
            min-height: 60px;
            background-color: #f6f6f6;
            margin-top: 14px;
            border-radius: 0px;
            overflow: hidden;
        }
        
        .dataWrapper__DirectCamps:nth-of-type(1) {
            border-top-right-radius: 20px;
        }
        
        .dataWrapper__DirectCamps:nth-of-type(2) {
            border-bottom-right-radius: 20px;
        }
        
        .dataWrapper__DirectCamps:nth-of-type(3) {
        	margin-top: 80px;
        	overflow: visible;
        }
        
        .dataWrapper__DirectCamps:nth-of-type(3):before {
        	content: "Конверсии по кампаниям";
        	
        	display: block;
        	position: absolute;
        	width: 300px;
        	height: 40px;
        	line-height: 40px;
        	font-size: 13px;
        	font-weight: 700;
        	font-style: italic;
        	top: 0;
        	margin-top: -60px;
        	color: grey;
        	margin-left: 24px;
        }
        
        .dataWrapper__DirectCamps__Line {
            display: flex;
            flex-direction: row;
            align-items: center;
            justify-content: flex-start;
            
            position: relative;
            width: 100%;
            height: auto;
            border-bottom: 1px dashed grey;
        }
        
        .dataWrapper__DirectCamps__Line:last-of-type {
            border-bottom: none;
        }
        
        .dataWrapper__DirectCamps__Line span {
            display: block;
            position: relative;
            width: 50%;
            height: auto;
            padding: 8px 20px;
            padding-bottom: 9px;
            line-height: 26px;
            font-size: 13px;
        }
        
        .dataWrapper__DirectCamps__Line:nth-child(1) {
            background-color: rgba(255, 190, 78, 0.1);
        }
        
        .dataWrapper__DirectCamps__Line:nth-child(1) span {
            font-weight: 700;
            font-style: italic;
        }
        
        .dataWrapper__DirectCamps__Line span:nth-child(1) {
            width: 40%;
            border-right: 1px dashed grey;
            padding-left: 16px;
        }
        
        .dataWrapper__DirectCamps__Line span:nth-child(2),
        .dataWrapper__DirectCamps__Line span:nth-child(3) {
            border-right: 1px dashed grey;
        }
        
        .dataWrapper__DirectCamps__Line span:nth-child(2),
        .dataWrapper__DirectCamps__Line span:nth-child(3),
        .dataWrapper__DirectCamps__Line span:nth-child(4) {
            width: 20%;
            text-align: center;
        } 
        
        .dataWrapper__Direct > i {
            display: block;
            position: relative;
            width: 50px;
            height: 50px;
            background-size: cover;
            background-position: center;
            background-repeat: no-repeat;
            background-image: url(http://images.vfl.ru/ii/1586162255/f1c6dd7f/30116559.png);
            margin: 0 auto;
            margin-top: 38px;
            margin-bottom: 25px;
        }
        
        .dataWrapper__Auditory__Col {
            display: block;
            position: relative;
            width: calc(25% - 15px);
            height: auto;
            border: 1px dashed #E1E1E1;
            border-radius: 5px;
            overflow: hidden;
            padding-bottom: 20px;
            background-color: #f6f6f6;
        }
        
        .dataWrapper__Auditory__Col:nth-of-type(1),
        .dataWrapper__Auditory__Col:nth-of-type(5) {
            margin-left: 14px;
        }
        
        .dataWrapper__Auditory hr {
            display: block;
            position: relative;
            width: 100%;
            height: 60px;
            border: none;
            background-size: 90%;
            background-repeat: no-repeat;
            background-position: center;
            background-image: url(http://images.vfl.ru/ii/1586259767/9b2025cd/30128935.png);
            margin-top: 26px;
            margin-bottom: 26px;
        }
        
        .dataWrapper__Auditory__Col:nth-of-type(5) {
            width: 40%;
            margin-top: 14px;
        }
        
        .dataWrapper__Auditory__Col:last-of-type {
            width: calc(60% - 30px);
            margin-top: 14px;
        }
        
        .dataWrapper__Auditory__Col span {
            display: block;
            position: relative;
            width: 100%;
            height: auto;
            padding: 8px 20px;
            padding-bottom: 10px;
            line-height: 22px;
            text-align: center;
            font-size: 13px;
            background-color: rgba(255, 190, 78, 0.1);
            border-bottom: 1px dashed #E1E1E1;
            font-weight: 700;
            font-style: italic;
        }
        
        .dataWrapper__Auditory__Col__Data {
            display: flex;
            flex-direction: row;
            align-items: center;
            justify-content: space-between;
            
            position: relative;
            width: 100%;
            height: auto;
            min-height: 20px;
            border-bottom: 1px dashed #E1E1E1;
            background-color: white;
        }
        
        .dataWrapper__Auditory__Col__Data:last-of-type {}
        
        .dataWrapper__Auditory__Col__Data p {
            display: block;
            position: relative;
            width: 50%;
            height: auto;
            padding: 8px 20px;
            padding-bottom: 9px;
            line-height: 18px;
            text-align: center;
            font-size: 11px;
        }
        
        .dataWrapper__Auditory__Col__Data p:nth-of-type(1) {
            border-right: 1px dashed #E1E1E1;
            width: 60%;
        }
        
        .dataWrapper__Auditory__Col__Data p:nth-of-type(2) {
            width: 40%;
        }
        
        .dataWrapper__Auditory__Col__DataTop {
            display: flex;
            flex-direction: row;
            align-items: center;
            justify-content: space-around;
            position: relative;
            width: calc(100% - 14px);
            height: auto;
            min-height: 100px;
            border-radius: 5px;
            margin-left: 14px;
        }
        
        .dataWrapper__Auditory__Col__DataTop__Cart {
            display: block;
            width: 300px;
            height: 360px;
            border-radius: 5px;
            
            background-size: contain;
            background-repeat: no-repeat;
            background-position: center;
            background-image: url(http://images.vfl.ru/ii/1586275574/d56ec7b9/30132369.png);
        }
        
        .dataWrapper__Auditory__Col__DataTop__Cart span {
            display: block;
            position: absolute;
            width: 310px;
            background-color: #78c6d0;
            border-top-left-radius: 20px;
            border-bottom-right-radius: 20px;
            height: auto;
            padding: 8px 20px;
            padding-bottom: 9px;
            line-height: 26px;
            font-size: 13px;
            padding-left: 18px;
            left: 100%;
            margin-left: -484px;
        }
        
        .dataWrapper__Auditory__Col__DataTop__Cart p {
            display: block;
            position: absolute;
            width: 330px;
            height: auto;
            padding: 14px 20px;
            line-height: 26px;
            font-size: 13px;
            background-color: #f6f6f6;
            border-top-left-radius: 20px;
            border-bottom-right-radius: 20px;
            
            left: 100%;
            margin-left: -454px;
            margin-top: 62px;
        }
        
        .footerBlock {
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: flex-start;
            
            width: 700px;
            height: auto;
            min-height: 100px;
            border-top: 4px solid #E1E1E1;
            
            margin: 0 auto;
            margin-top: 100px;
            padding-top: 16px;
        }
        
        .footerBlock p {
            display: block;
            position: relative;
            width: 400px;
            height: auto;
            padding: 8px 20px;
            padding-bottom: 9px;
            line-height: 26px;
            font-size: 13px;
            text-align: center;
            color: grey;
        }
        
        .footerBlock p:nth-of-type(2) {
            margin-bottom: 80px;
        }
        
        .footerBlock p a {
            color: black;
            text-decoration: none;
        }
        
        .footerBlock p a::after {
            content: "";
            
            display: block;
            position: absolute;
            width: 60px;
            height: 60px;
            border-radius: 50%;
            
            background-size: cover;
            background-repeat: no-repeat;
            background-position: center;
            background-image: url(http://images.vfl.ru/ii/1586349165/403ad228/30139995.png);
            
            top: 50%;
            left: 50%;
            margin-top: 48px;
            margin-left: -30px;
        }
        
        .dateBlock {
            display: flex;
            flex-direction: row;
            align-items: center;
            justify-content: flex-end;
            
            position: absolute;
            width: 240px;
            height: 40px;
            background-color: rgba(255, 190, 78, 0.1);
            
            top: 0;
            left: 100%;
            margin-left: -330px;
            margin-top: 30px;
            border-radius: 5px;
        }
        
        .dateBlock--select {
        	display: flex;
        	flex-direction: row;
        	align-items: center;
        	justify-content: space-around;
        	
        	position: absolute;
        	width: 800px;
        	height: 60px;
        	background-color: rgba(255, 190, 78, 0.1);
        	top: 0;
        	left: 50%;
        	margin-left: -400px;
        	margin-top: -110px;
        	border-radius: 30px;
        }
        
        .dateBlock--select span {
        	display: block;
        	position: absolute;
        	width: 20px;
        	height: 20px;
        	
        	border-radius: 50%;
        	left: 100%;
        	margin-left: 14px;
        	
        	background-size: cover;
        	background-position: center;
        	background-repeat: no-repeat;
        	background-image: url(http://caropka.ru/img/33.png);
        }
        
        .dateBlock--select span:nth-of-type(1) {
        	background-image: none;
        	width: 40px;
        	height: 40px;
        	border-radius: 50%;
        	background-color: #78c6d0;
        	
        	margin-left: 50px;
        	line-height: 40px;
			font-size: 10px;
			text-align: center;
			font-weight: 700;
        }
        
        .dateBlock--select span:hover {
        	cursor: pointer;
        }
        
        .dateBlock--select div {
        	display: flex;
        	flex-direction: row;
        	align-items: center;
        	justify-content: space-between;
        	
        	position: relative;
        	width: 300px;
        	height: 30px;
        }
        
        .dateBlock--select div:nth-of-type(1) {
        	padding-left: 24px;
        	padding-right: 8px;
        }
        
        .dateBlock--select div:nth-of-type(1)::after {
        	content: "";
        	
        	display: block;
        	position: absolute;
        	width: 40px;
        	height: 40px;
        	border-radius: 50%;
        	background-image: url(http://images.vfl.ru/ii/1589375207/61070967/30499691.png);
        	background-size: 80%;
        	background-position: center;
        	background-repeat: no-repeat;
        	
        	left: 100%;
        	margin-left: 31px;
        	top: 50%;
        	margin-top: -20px;
        }
        
        .dateBlock--select div:nth-of-type(2) {
        	padding-right: 24px;
        	padding-left: 8px;
        }
        
        .dateBlock--select div input {
        	display: block;
        	position: relative;
        	width: 33.3333%;
        	height: 100%;
        	background-color: transparent;
        	border: none;
        	outline: none;
        	text-align: center;
        	font-size: 13px;
        }
        
        .dateBlock--select div:nth-of-type(1) {
        	border-right: 1px dashed grey;
        }
        
        .dateBlock--select div:nth-of-type(2) {
        	border-left: 1px dashed grey;
        }
        
        .dateBlock--select::before {
        	content: "";
        	
        	display: block;
        	position: absolute;
        	width: 10px;
        	height: 10px;
        	border-radius: 50%;
        	background-color: black;
        	top: 50%;
        	margin-top: -5px;
        	left: 0;
        	margin-left: 30px;
        }
        
        .dateBlock--select::after {
        	content: "";
        	
        	display: block;
        	position: absolute;
        	width: 10px;
        	height: 10px;
        	border-radius: 50%;
        	background-color: black;
        	top: 50%;
        	margin-top: -5px;
        	left: 100%;
        	margin-left: -38px;
        }
        
        .dateBlock span {
            display: block;
            position: relative;
            width: 50%;
            height: 40px;
            line-height: 39px;
            font-size: 13px;
            text-align: center;
        }
        
        .dateBlock span:hover {
            cursor: pointer;
        }
        
        .dateBlock span:nth-of-type(1) {
            border-right: 1px solid #FFBE4E;
        }
        
        .dateBlock span:nth-of-type(3) {
            
            position: absolute;
            width: 40px;
            height: 40px;
            left: 100%;
            margin-left: 12px;
            background-size: 85%;
            top: 50%;
            margin-top: -21px;
            background-repeat: no-repeat;
            background-position: center;
            background-image: url(http://images.vfl.ru/ii/1586350828/a104f729/30140308.png);
            
        }
        
        .telegram-bot-btn {
        	display: block;
        	position: absolute;
        	width: 60px;
        	height: 60px;
        	border-radius: 50%;
        	box-shadow: 0px 0px 2.5px grey;
        	top: 0;
        	left: 100%;
        	margin-left: -100px;
        	margin-top: 104px;
        	
        	background-size: cover;
        	background-position: center;
        	background-repeat: no-repeat;
        	background-image: url(http://images.vfl.ru/ii/1589356795/0e0d6b27/30496700.png);
        }
        
        .telegram-bot-btn:hover {
        	cursor: pointer;
        }
        
        .telegram-bot-btn::before {
        	content: "Для быстрой статистики вы можете воспользоваться нашим Телеграм ботом";
        	
        	display: block;
        	position: absolute;
        	width: 280px;
        	height: auto;
        	line-height: 18px;
        	font-size: 13px;
        	left: 0;
        	margin-left: -300px;
        	text-align: right;
        	top: 0;
        	margin-top: 12px;
        	font-style: italic;
        }
        
        .telegram-bot-btn a {
        	display: block;
        	position: absolute;
        	width: 100%;
        	height: 100%;
        	top: 0;
        	left: 0;
        }
        
        .telegram-bot-btn p {
        	display: block;
        	position: absolute;
        	width: 100px;
        	height: 30px;
        	line-height: 30px;
        	font-size: 13px;
        	font-weight: 700;
        	top: 100%;
        	left: 50%;
        	margin-left: -50px;
        	margin-top: 4px;
        }
        
        .main-wrapper--down {
        	margin-top: 160px;
        }
        
        .data-wrapper__campaign__conv {
        	display: block !important;
        	position: relative !important;
        	width: 100% !important;
        	height: auto !important;
        	min-height: 60px !important;
        	background-color: red;
        }
        
        .insiderBlock {
        	display: block;
        	position: relative;
        	width: 600px;
        	height: 100px;
        	
        	border-top-right-radius: 50px;
        	border-bottom-right-radius: 50px;
        	margin-top: 24px;
        	margin-bottom: 24px;
        	background-color: #f6f6f6;
        	padding-top: 19px;
        	border-radius: 5px;
        }
        
        .insiderBlock span {
        	display: block;
        	position: absolute;
        	width: 180px;
        	height: 40px;
        	line-height: 39px;
        	border-radius: 5px;
        	background-color: #FFBE4E;
        	font-size: 11px;
        	text-align: center;
        	left: 100%;
        	margin-left: 30px;
        	top: 50%;
        	margin-top: -20px;
        	box-shadow: 0px 2px 15px rgba(0, 0, 0, 0.15);
        }
        
        .insiderBlock span:nth-of-type(2) {
        	margin-left: 226px;
        	background-color: #78c6d0;
        }
        
        .insiderBlock span:nth-of-type(2) a {
        	display: block;
        	position: absolute;
        	width: 100%;
        	height: 100%;
        	top: 0;
        	left: 0;
        }
        
        .insiderBlock span:hover {
        	cursor: pointer;
        }
        
        .insiderBlock p {
        	display: block;
        	position: relative;
        	width: 70%;
        	height: auto;
        	line-height: 20px;
        	font-size: 13px;
        	color: grey;
        	margin-left: 18px;
        }
        
        .insiderBlock::after {
        	content: "";
        	
        	display: block;
        	position: absolute;
        	width: 70px;
        	height: 70px;
        	border-radius: 50%;
        	
        	background-size: cover;
        	background-position: center;
        	background-repeat: no-repeat;
        	background-image: url(http://images.vfl.ru/ii/1586349165/403ad228/30139995.png);
        	
        	top: 50%;
        	margin-top: -35px;
        	left: 100%;
        	margin-left: -86px;
        }
        
        .data-wrapper__aboutWorks {
        	display: block;
        	position: relative;
        	width: 80%;
        	height: auto;
        	line-height: 24px;
        	font-size: 15px;
        	margin-left: 20px;
        	margin-bottom: 14px;
        	font-style: italic;
        }
        
        @media (max-width: 600px) {
        	
        	.main-wrapper {
        		background-color: red !important;
        	}
        	
        }
        
    </style>
     
    <script type="text/babel">
    
    // http://caropka.ru/reports/report-index.php?data=gazsnab66__38077270__2018-11-01__2018-12-10__2018-09-10__58588
    
    const headerClassNameLogo = 'header__logo';
    const headerClassNameTitles = 'header__title';
    const mainBlock = 'main-wrapper';
    const labelClass = 'label-class';
    const labelClassTwo = 'label-classTwo';
    const dataWrapper = 'data-wrapper';
    const dataWrapperWorks = 'data-wrapper__aboutWorks';
    const dataWrapperForTarget = 'data-wrapper--forTarget';
    const dataWrapperCanal = 'data-wrapper__canal data-wrapper__canal--script';
    const dataWrapperCanalTop = 'data-wrapper__canal data-wrapper__canal--top';
    const dataWrapperCampaign = 'data-wrapper__campaign';
    const dataWrapperCampaignConv = 'data-wrapper__campaign__conv';
    const dataWrapperMetrics = 'data-wrapper__metrics';
    const dataWrapperLeader = 'data-wrapper__leader';
    const dataWrapperLeader2 = 'data-wrapper__leader2';
    const dataWrapperCanalHint = 'data-wrapper__canal__hint';
    const dataWrapperForHints = 'data-wrapper__forHints';
    const dataWrapperTargetColumn = 'data-wrapper__TargetColumn';
    const dataWrapperRegionsLine = 'data-wrapper__regionsLine';
    const dataWrapperRegionsLineBest = 'data-wrapper__regionsLine--best';
    const dataWrapperRegLine = 'dataWrapper__RegLine';
    const dataWrapperRegLineData = 'dataWrapper__RegLine__data';
    const dataWrapperDirect = 'dataWrapper__Direct';
    const dataWrapperDirectBlock = 'dataWrapper__DirectBlock';
    const dataWrapperDirectCamps = 'dataWrapper__DirectCamps';
    const dataWrapperDirectCampsLine = 'dataWrapper__DirectCamps__Line';
    const dataWrapperAuditory = 'dataWrapper__Auditory';
    const dataWrapperAuditoryCol = 'dataWrapper__Auditory__Col';
    const dataWrapperAuditoryColData = 'dataWrapper__Auditory__Col__Data';
    const dataWrapperAuditoryColDataTop = 'dataWrapper__Auditory__Col__DataTop';
    const dataWrapperAuditoryColDataTopCart = 'dataWrapper__Auditory__Col__DataTop__Cart';
    const DateBlock = 'dateBlock';
    const DateBlockSelect = 'dateBlock--select';
    const telegramBot = 'telegram-bot-btn';
    const insiderBlock = 'insiderBlock';
    
    const test = '';

    // const from api
    
    /*

    $.get("...hubrep.php", {
        fork: "campsYms"
    }, cbOne);

    function cbOne(data) {
        
        //	
        
    }
    
    */

    const FooterBlock = 'footerBlock';

    const AllTrafficContent = '';

    const labels = {
        
        label1: 'Основ. данные Директ',
        label2: 'Рекламные кампании',
        label3: 'Таргетинг. Слова',
        label4: 'Ключевые регионы',
        label5: 'Трафик с устройств',
        label6: 'Общий трафик',
        label7: 'Данные по аудитории',
        label8: 'Таргетинг. Площадки',
        label9: 'Проделанные работы'
           
    }
    
    const headerInnerHeadline = 'Отчет по логину ' + document.location.href.split('log=')[1];
    const headerInnerHeadlineUnder = 'Сбор данных на основе статистики Метрики и Директа';
    const date1 = 'DATE1';
    const date2 = 'DATE2';

    // const

    const styleOne = {
        fontStyle: 'italic',
        fontWeight: '700'
    }
    
    class TelegramBot extends React.Component {
    	
    	constructor(props) {
    		
    		super(props);
    		this.state = {
    			
    			//
    			
    		}
    		
    	}
    	
    	render() {
    		
    		return(
    		
    			<div className={telegramBot}>
    			
    				<a href="https://tlgg.ru/itexpromobot"></a>
    				<p>@itexpromobot</p>
    			
    			</div>	
    			
    		);
    		
    	}
    	
    }

    class Header extends React.Component {
        render() {
            return(
            
                <header>
                    <div className={headerClassNameLogo}></div>
                    <div className={headerClassNameTitles}>
                        
                        <h1>{headerInnerHeadline}</h1>
                        <h4>{headerInnerHeadlineUnder}</h4>
                        
                    </div>
                </header>
            
            );
        }
    }

    class AllTraffic extends React.Component {
        
        constructor(props) {
            
            super(props);
            this.state = {
                
                organic: "Переходы с выдачи поисковых систем",
                paid: "Переходы с контекста, баннеров, таргета. Любые платные переходы",
                str: "Визиты, совершеные после ввода сайта в адресную строку",
                ptp: "Посещение страницы сайта после перехода с другой его страницы",
                referal: "Визиты по ссылкам на ваш сайт, размещенным на других ресурсах",
                
                allTraff: [],
                maxWidth: 0,
                ziroPageDepth: 0,
                ziroGoal: 0,
                ziroBounce: 0,
                ziroDur: 0,
                fisrtTrafficCanal: '',
                fisrtConvCanal: '',
                maxConv: 0
                
            };
            
            this.testFunc2 = this.testFunc2.bind(this);
            
        }
        
        testFunc2(e) {
        	
        	var campId = e.currentTarget.getAttribute('campid');
        	
        	//
        	
        	fetch("...hubrep.php?fork=allCanYms&log=" + document.location.href.split('log=')[1])
        	.then(res => res.json())
        	.then(
        	
        		(result) => {
        			
        			for ( var i = 0; i < result.data.length; i++ ) {
        				
        				// alert(result.data[i].dimensions[0].id);
        				
        				if ( result.data[i].dimensions[0].id == campId ) {
        					
        					this.setState({
        				
                				ziroPageDepth: +result.data[i].metrics[2].toFixed(1),
                				ziroGoal: +result.data[i].metrics[5].toFixed(0),
                				ziroBounce: +result.data[i].metrics[1].toFixed(1),
                				ziroDur: +result.data[i].metrics[3].toFixed(0)
        				
        					});
        					
        				}
        				
        			}
        			
        		}
        		
        	);
        	
        }
        
        componentWillMount() {
        	
        	var dateData = localStorage.getItem('reportDate');
        	
        	if ( dateData == null ) {
        	
        	fetch("...hubrep.php?fork=allCanYms&log=" + document.location.href.split('log=')[1])
        	.then(res => res.json())
        	.then(
        	
        		(result) => {
        			
        			this.setState({
        				
        				allTraff: result.data,
        				maxWidth: +result.data[0].metrics[0],
            			ziroPageDepth: +result.data[0].metrics[2].toFixed(1),
            			ziroGoal: +result.data[0].metrics[5].toFixed(0),
            			ziroBounce: +result.data[0].metrics[1].toFixed(1),
            			ziroDur: +result.data[0].metrics[3].toFixed(0),
            			fisrtTrafficCanal: result.data[0].dimensions[0].name,
            			maxClicks: result.data[0].metrics[0]
        				
        			});
        			
        		}
        		
        	);
        	
        	//
        	
        	fetch("...hubrep.php?fork=allCanYmsConv&log=" + document.location.href.split('log=')[1])
        	.then(res => res.json())
        	.then(
        	
        		(result) => {
        			
        			this.setState({
        				
            			fisrtConvCanal: result.data[0].dimensions[0].name,
            			maxConv: result.data[0].metrics[0]
        				
        			});
        			
        		}
        		
        	);
        	
        	}
        	
        	else {
        		
        	var dd1 = dateData.split('::')[0];
        	var dd2 = dateData.split('::')[1];
        	
        	// alert(dd1);
        	// alert(dd2);
        	
        	fetch("...hubrepDate.php?d1=" + dd1 + "&d2=" + dd2 + "&fork=allCanYms&log=" + document.location.href.split('log=')[1])
        	.then(res => res.json())
        	.then(
        	
        		(result) => {
        			
        			this.setState({
        				
        				allTraff: result.data,
        				maxWidth: +result.data[0].metrics[0],
            			ziroPageDepth: +result.data[0].metrics[2].toFixed(1),
            			ziroGoal: +result.data[0].metrics[5].toFixed(0),
            			ziroBounce: +result.data[0].metrics[1].toFixed(1),
            			ziroDur: +result.data[0].metrics[3].toFixed(0),
            			fisrtTrafficCanal: result.data[0].dimensions[0].name,
            			maxClicks: result.data[0].metrics[0]
        				
        			});
        			
        		}
        		
        	);
        	
        	//
        	
        	fetch("...hubrepDate.php?d1=" + dd1 + "&d2=" + dd2 + "&fork=allCanYmsConv&log=" + document.location.href.split('log=')[1])
        	.then(res => res.json())
        	.then(
        	
        		(result) => {
        			
        			this.setState({
        				
            			fisrtConvCanal: result.data[0].dimensions[0].name,
            			maxConv: result.data[0].metrics[0]
        				
        			});
        			
        		}
        		
        	);	
        		
        	}
        	
        }
        
        render() {
        	
        	const { allTraff } = this.state;
        	
            return(
            
                <section className={dataWrapper}>
                
                	{ allTraff.map(traffLine => (
                	
                		<div onClick={this.testFunc2} className={dataWrapperCanal} campid={traffLine.dimensions[0].id}>
                        	<i></i>
                        	<span>{traffLine.dimensions[0].name}</span>
                        	<hr style={{width: ( traffLine.metrics[0] / this.state.maxWidth ) * 460 + 30 + "px"}}/>
                        	<p>{traffLine.metrics[0]}</p>
                        	<i className={dataWrapperCanalHint}></i>
                    	</div>			
                		
                	)) }
                    
                    <article className={dataWrapperCanalTop}>
                        <i></i>
                        <span style={{borderColor: "#FFBE4E", fontWeight: "700", fontStyle: "italic"}}>{this.state.fisrtTrafficCanal}</span>
                        <hr style={{width: 460 + 30 + "px", backgroundColor: "#FFBE4E"}}/>
                        <p>{this.state.maxClicks}</p>
                    </article>
                    <article className={dataWrapperCanalTop}>
                        <i></i>
                        <span style={{borderColor: "#FFBE4E", fontWeight: "700", fontStyle: "italic"}}>{this.state.fisrtConvCanal}</span>
                        <hr style={{width: 460 + 30 + "px", backgroundColor: "#FFBE4E"}}/>
                        <p>{this.state.maxConv}</p>
                    </article>
                    
                    <div className={dataWrapperMetrics}>
                        
                        <span>Отказность трафика, проц</span>
                        <p style={{fontWeight: "700"}}>{this.state.ziroBounce}</p>
                        <span>Глубина просмотра, стр</span>
                        <p style={{fontWeight: "700"}}>{this.state.ziroPageDepth}</p>
                        <span>Время на сайте, мин</span>
                        <p style={{fontWeight: "700"}}>{this.state.ziroDur}</p>
                        <span>Число конверсий</span>
                        <p style={{fontWeight: "700"}}>{this.state.ziroGoal}</p>
                        
                    </div>
                    
                    <div className={dataWrapperForHints}>Основной канал трафика</div>
                    
                </section>
            
            );
        }
    }

    class Campaigns extends React.Component {
    	
    	constructor(props) {
    		
    		super(props);
    		this.state = {
    			
    			dataOne: [],
    			maxWidth: 0,
    			ziroPageDepth: 'Нажмите на кампанию',
    			ziroGoal: 'Нажмите на кампанию',
    			ziroCoast: 'Нажмите на кампанию',
    			ziroCpc: 'Нажмите на кампанию'
    			
    		}
    		
    		this.testFunc = this.testFunc.bind(this);
    		
    	}
    	
    	testFunc(e) {
    		
    	// alert(this.getAttribute('campId'));
    	// alert(e.currentTarget.getAttribute('campid'));
    		
    	var campId = e.currentTarget.getAttribute('campid');	
    	
    	var dateData = localStorage.getItem('reportDate');
        	
        if ( dateData == null ) {
    		
    	fetch("...hubrep.php?fork=campsYms&log=" + document.location.href.split('log=')[1])
    	.then(res => res.json())
    	.then(
        (result) => {
        	
        	// alert(result.data[0].dimensions[0].id);
        	
        	for ( var i = 0; i < result.data.length; i++ ) {
        		
        		if ( result.data[i].dimensions[0].id == campId ) {
        			
        			// alert(result.data[i].metrics[2]);
        			
        			this.setState({
        				
        				ziroPageDepth: +result.data[i].metrics[2].toFixed(1),
    					ziroGoal: +result.data[i].metrics[5]
        				
        			});
        			
        		}
        		
        	}
          
        });
        
        //
        
        fetch("...hubrep.php?fork=campsYmad&log=" + document.location.href.split('log=')[1])
    	.then(res => res.json())
    	.then(
        (result) => {
        	
        	// alert(result.data[0].dimensions[0].id);
        	
        	for ( var i = 0; i < result.data.length; i++ ) {
        		
        		if ( result.data[i].dimensions[0].id == campId ) {
        			
        			// alert(result.data[i].metrics[2]);
        			
        			this.setState({
        				
        				ziroCoast: +result.data[i].metrics[0].toFixed(2),
    					ziroCpc: +result.data[i].metrics[1].toFixed(2)
        				
        			});
        			
        		}
        		
        	}
          
        });
        
        }
        
        else {
        	
        var dd1 = dateData.split('::')[0];
        var dd2 = dateData.split('::')[1];	
    		
    	fetch("...hubrepDate.php?d1=" + dd1 + "&d2=" + dd2 + "&fork=campsYms&log=" + document.location.href.split('log=')[1])
    	.then(res => res.json())
    	.then(
        (result) => {
        	
        	// alert(result.data[0].dimensions[0].id);
        	
        	for ( var i = 0; i < result.data.length; i++ ) {
        		
        		if ( result.data[i].dimensions[0].id == campId ) {
        			
        			// alert(result.data[i].metrics[2]);
        			
        			this.setState({
        				
        				ziroPageDepth: +result.data[i].metrics[2].toFixed(1),
    					ziroGoal: +result.data[i].metrics[5]
        				
        			});
        			
        		}
        		
        	}
          
        });
        
        //
        
        fetch("...hubrepDate.php?d1=" + dd1 + "&d2=" + dd2 + "&fork=campsYmad&log=" + document.location.href.split('log=')[1])
    	.then(res => res.json())
    	.then(
        (result) => {
        	
        	// alert(result.data[0].dimensions[0].id);
        	
        	for ( var i = 0; i < result.data.length; i++ ) {
        		
        		if ( result.data[i].dimensions[0].id == campId ) {
        			
        			// alert(result.data[i].metrics[2]);
        			
        			this.setState({
        				
        				ziroCoast: +result.data[i].metrics[0].toFixed(2),
    					ziroCpc: +result.data[i].metrics[1].toFixed(2)
        				
        			});
        			
        		}
        		
        	}
          
        });
        
        }
    		
    	}
    	
    	componentWillMount() {
    		
    	//	
    	
    	var dateData = localStorage.getItem('reportDate');
        	
        if ( dateData == null ) {
    		
    	fetch("...hubrep.php?fork=campsYms&log=" + document.location.href.split('log=')[1])
    	.then(res => res.json())
    	.then(
        (result) => {
        	
          // alert(result);	
        	
          this.setState({
            dataOne: result.data,
            maxWidth: +result.data[0].metrics[0],
            // ziroPageDepth: +result.data[0].metrics[2].toFixed(1),
            // ziroGoal: +result.data[0].metrics[5].toFixed(0),
            clickSum: +result.totals[0],
            bounceSum: +result.totals[1].toFixed(1)
          });
          
        });
      
    	//
    	
    	fetch("...hubrep.php?fork=campsYmad&log=" + document.location.href.split('log=')[1])
    	.then(res => res.json())
    	.then(
        (result) => {
        	
          // alert(result.data[0].dimensions[0].id);	
        	
          this.setState({
            // ziroCoast: +result.data[0].metrics[0].toFixed(2),
    		// ziroCpc: +result.data[0].metrics[1].toFixed(2)
          });
          
        });
        
        }
        
        else {
        	
        var dd1 = dateData.split('::')[0];
        var dd2 = dateData.split('::')[1];	
        
        fetch("...hubrepDate.php?d1=" + dd1 + "&d2=" + dd2 + "&fork=campsYms&log=" + document.location.href.split('log=')[1])
    	.then(res => res.json())
    	.then(
        (result) => {
        	
          // alert(result);	
        	
          this.setState({
            dataOne: result.data,
            maxWidth: +result.data[0].metrics[0],
            // ziroPageDepth: +result.data[0].metrics[2].toFixed(1),
            // ziroGoal: +result.data[0].metrics[5].toFixed(0),
            clickSum: +result.totals[0],
            bounceSum: +result.totals[1].toFixed(1)
          });
          
        });
      
    	//
    	
    	fetch("...hubrepDate.php?d1=" + dd1 + "&d2=" + dd2 + "&fork=campsYmad&log=" + document.location.href.split('log=')[1])
    	.then(res => res.json())
    	.then(
        (result) => {
        	
          // alert(result.data[0].dimensions[0].id);	
        	
          this.setState({
            // ziroCoast: +result.data[0].metrics[0].toFixed(2),
    		// ziroCpc: +result.data[0].metrics[1].toFixed(2)
          });
          
        });
        	
        }
    		
		}
        
        render() {
        	
        	const { dataOne } = this.state;
        	
        	return(
        	
        		<section className={dataWrapper}>
        		
        			{ dataOne.map(line => (
        			
        				<div onClick={this.testFunc} className={dataWrapperCampaign} campid={line.dimensions[0].id}>
                        	<article>{line.metrics[1].toFixed(1)}%</article>
                        	<i></i>
                        	<span>{line.dimensions[0].name}</span>
                        	<hr style={{width: ( line.metrics[0] / this.state.maxWidth ) * 300 + 30 + "px"}}/>
                        	<p>{line.metrics[0].toFixed(0)}</p>
                        	
                    	</div>
        				
        			)) }
        			
        				<div onClick={this.testFunc} className={dataWrapperCampaign} style={{backgroundColor: "rgba(255, 190, 78, 0.1)"}}>
                        	<article>{this.state.bounceSum}%</article>
                        	<i></i>
                        	<span style={{borderRight: "2px solid #FFBE4E", fontStyle: "italic", fontWeight: "700"}}>Общее число кликов, средняя отказность</span>
                        	<hr style={{width: "300px", backgroundColor: "#FFBE4E"}}/>
                        	<p>{this.state.clickSum}</p>
                    	</div>
        			
        			<article className={dataWrapperMetrics}>
                        
                        <span>Глубина просмотра, стр</span>
                        <p style={{fontWeight: "700"}}>{this.state.ziroPageDepth}</p>
                        <span>Потрачено на кампанию, руб</span>
                        <p style={{fontWeight: "700"}}>{this.state.ziroCoast}</p>
                        <span>Цена взаимодействия, руб</span>
                        <p style={{fontWeight: "700"}}>{this.state.ziroCpc}</p>
                        <span>Конверсии</span>
                        <p style={{fontWeight: "700"}}>{this.state.ziroGoal}</p>
                        
                    </article>
        		
        		</section>
        		
        	);

        }
        
    }

    class Targets extends React.Component {
    	
    	constructor(props) {
    		
    		super(props);
    		this.state = {
    			
    			dataKeyOne: []
    			
    		}
    		
    	}
    	
    	componentWillMount() {
    		
    	//	
    	
    	var dateData = localStorage.getItem('reportDate');
        	
        if ( dateData == null ) {
    		
    	fetch("...hubrep.php?fork=keysYms&log=" + document.location.href.split('log=')[1])
    	.then(res => res.json())
    	.then(
        (result) => {
        	
          // alert(result.data[0].dimensions[0].id);	
        	
          this.setState({
          	
          	dataKeyOne: result.data
          	
          });
          
        });
        
        }
        
        else {
        	
        var dd1 = dateData.split('::')[0];
        var dd2 = dateData.split('::')[1];		
        	
        fetch("...hubrepDate.php?d1=" + dd1 + "&d2=" + dd2 + "&fork=keysYms&log=" + document.location.href.split('log=')[1])
    	.then(res => res.json())
    	.then(
        (result) => {
        	
          // alert(result.data[0].dimensions[0].id);	
        	
          this.setState({
          	
          	dataKeyOne: result.data
          	
          });
          
        });	
        	
        }
      
    	//	
    		
    	}
        
        render() {
        	
        	const { dataKeyOne } = this.state;
        	
            return(
            
                <section className={dataWrapperForTarget}>
                   
                   <div className={dataWrapperTargetColumn}>
                   
                		{ dataKeyOne.map(keyLine => (
                   
                			<article><span style={{fontWeight: "500", fontStyle: "italic"}}>{keyLine.dimensions[0].name.split(' -')[0]}</span>
                    		<p>{keyLine.metrics[0]} кликов</p></article>			
                   	
                	    )) }
                   
                   </div>
                    
                </section>
            
            );
        }
    }

    class TargetsSites extends React.Component {
        
        constructor(props) {
    		
    		super(props);
    		this.state = {
    			
    			dataKeyOne: []
    			
    		}
    		
    	}
    	
    	componentWillMount() {
    		
    	//	
    	
    	var dateData = localStorage.getItem('reportDate');
        	
        if ( dateData == null ) {
    		
    	fetch("...hubrep.php?fork=placesYms&log=" + document.location.href.split('log=')[1])
    	.then(res => res.json())
    	.then(
        (result) => {
        	
          // alert(result.data[0].dimensions[0].id);	
        	
          this.setState({
          	
          	dataKeyOne: result.data
          	
          });
          
        });
      
        }
        
        else {
        	
        var dd1 = dateData.split('::')[0];
        var dd2 = dateData.split('::')[1];	
        	
        fetch("...hubrepDate.php?d1=" + dd1 + "&d2=" + dd2 + "&fork=placesYms&log=" + document.location.href.split('log=')[1])
    	.then(res => res.json())
    	.then(
        (result) => {
        	
          // alert(result.data[0].dimensions[0].id);	
        	
          this.setState({
          	
          	dataKeyOne: result.data
          	
          });
          
        });	
        	
        }
    	 
    	//	
    		
    	}
        
        render() {
        	
        	const { dataKeyOne } = this.state;
        	
            return(
            
                <section className={dataWrapperForTarget}>
                   
                   <div className={dataWrapperTargetColumn}>
                   
                		{ dataKeyOne.map(keyLine => (
                   
                			<article><span style={{fontWeight: "500", fontStyle: "italic"}}>{keyLine.dimensions[0].name.split(' -')[0]}</span>
                    		<p>{keyLine.metrics[0]} кликов</p></article>			
                   	
                	    )) }
                   
                   </div>
                    
                </section>
            
            );
        }
    }

    class Regions extends React.Component {
        
        constructor(props) {
    		
    		super(props);
    		this.state = {
    			
    			dataKeyOne: [],
    			topClickName: '',
    			topClickCount: 0,
    			topGoalName: '',
    			topGoalCount: ''
    			
    		}
    		
    	}
    	
    	componentWillMount() {
    		
    	//	
    	
    	var dateData = localStorage.getItem('reportDate');
        	
        if ( dateData == null ) {
    		
    	fetch("...hubrep.php?fork=regYms&log=" + document.location.href.split('log=')[1])
    	.then(res => res.json())
    	.then(
        (result) => {
        	
          // alert(result.data[0].dimensions[0].id);	
        	
          this.setState({
          	
          	dataKeyOne: result.data,
          	topClickName: result.data[0].dimensions[0].name,
          	topClickCount: result.data[0].metrics[0]
          	
          });
          
        });
      
    	//	
    	
    	fetch("...hubrep.php?fork=regYmsConv&log=" + document.location.href.split('log=')[1])
    	.then(res => res.json())
    	.then(
        (result) => {
        	
          // alert(result.data[0].dimensions[0].id);	
        	
          this.setState({
          	
          	topGoalName: result.data[0].dimensions[0].name,
          	topGoalCount: result.data[0].metrics[0]
          	
          });
          
        });
        
        }
        
        else {
        	
        var dd1 = dateData.split('::')[0];
        var dd2 = dateData.split('::')[1];		
        	
        fetch("...hubrepDate.php?d1=" + dd1 + "&d2=" + dd2 + "&fork=regYms&log=" + document.location.href.split('log=')[1])
    	.then(res => res.json())
    	.then(
        (result) => {
        	
          // alert(result.data[0].dimensions[0].id);	
        	
          this.setState({
          	
          	dataKeyOne: result.data,
          	topClickName: result.data[0].dimensions[0].name,
          	topClickCount: result.data[0].metrics[0]
          	
          });
          
        });
      
    	//	
    	
    	fetch("...hubrepDate.php?d1=" + dd1 + "&d2=" + dd2 + "&fork=regYmsConv&log=" + document.location.href.split('log=')[1])
    	.then(res => res.json())
    	.then(
        (result) => {
        	
          // alert(result.data[0].dimensions[0].id);	
        	
          this.setState({
          	
          	topGoalName: result.data[0].dimensions[0].name,
          	topGoalCount: result.data[0].metrics[0]
          	
          });
          
        });	
        	
        }
    		
    	}
        
        render() {
        	
        	const { dataKeyOne } = this.state;
        	
            return(
            
                <section className={dataWrapper}>
                    
                    <div className={dataWrapperRegionsLine}>
                        <span>Регион</span>
                        <span>Переходы</span>
                        <span>Конверсии</span>
                        <span>Отказы, проц</span>
                        <span>Длительность</span>
                    </div>
                    
                    { dataKeyOne.map(function(regLine) {
                    	
                    	// #b12d2d - red
                    	// #2fa72f - green
                    	
                    	if ( regLine.metrics[1].toFixed(2) > 40 ) {
                    	
                    	return <div className={dataWrapperRegionsLine}>
                        	<span>{regLine.dimensions[0].name}</span>
                        	<span>{regLine.metrics[0]}</span>
                        	<span>{regLine.metrics[5].toFixed(0)}</span>
                        	<span style={{color: "#b12d2d"}}>{regLine.metrics[1].toFixed(2)}</span>
                        	<span>{(regLine.metrics[3] / 60).toFixed(2)}</span>
                    	</div>	
                    	
                    	}
                    	
                    	else if ( regLine.metrics[1].toFixed(2) <= 20 ) {
                    		
                    	return <div className={dataWrapperRegionsLine}>
                        	<span>{regLine.dimensions[0].name}</span>
                        	<span>{regLine.metrics[0]}</span>
                        	<span>{regLine.metrics[5].toFixed(0)}</span>
                        	<span style={{color: "#2fa72f"}}>{regLine.metrics[1].toFixed(2)}</span>
                        	<span>{(regLine.metrics[3] / 60).toFixed(2)}</span>
                    	</div>
                    		
                    	}
                    	
                    	else {
                    		
                    	return <div className={dataWrapperRegionsLine}>
                        	<span>{regLine.dimensions[0].name}</span>
                        	<span>{regLine.metrics[0]}</span>
                        	<span>{regLine.metrics[5].toFixed(0)}</span>
                        	<span>{regLine.metrics[1].toFixed(2)}</span>
                        	<span>{(regLine.metrics[3] / 60).toFixed(2)}</span>
                    	</div>	
                    		
                    	}
                    	
                    }) }
                    
                    <div className={dataWrapperRegionsLineBest}>
                        <span>Больше всего конверсий</span>
                        <span>{this.state.topGoalName}</span>
                        <span>{this.state.topGoalCount}</span>
                    </div>
                    <div className={dataWrapperRegionsLineBest}>
                        <span>Коэффициент конверсий</span>
                        <span>--</span>
                        <span>--</span>
                    </div>
                    <div className={dataWrapperRegionsLineBest}>
                        <span>Наибольший трафик</span>
                        <span>{this.state.topClickName}</span>
                        <span>{this.state.topClickCount}</span>
                    </div>
                    
                </section>
            
            );
        }
    }

    class Devices extends React.Component {
    	
    	constructor(props) {
    		
    		super(props);
    		this.state = {
    			
    			dataDev: []
    			
    		}
    		
    	}
    	
    	componentWillMount() {
    		
    	var dateData = localStorage.getItem('reportDate');
        	
        if ( dateData == null ) {	
    	
    	fetch("...hubrep.php?fork=devYms&log=" + document.location.href.split('log=')[1])
    	.then(res => res.json())
    	.then(
    	(result) => {
    		
    		this.setState({
    			
    			dataDev: result.data
    			
    		});
    		
    	});
    	
        }
        
        else {
        
        var dd1 = dateData.split('::')[0];
        var dd2 = dateData.split('::')[1];		
        	
        fetch("...hubrepDate.php?d1=" + dd1 + "&d2=" + dd2 + "&fork=devYms&log=" + document.location.href.split('log=')[1])
    	.then(res => res.json())
    	.then(
    	(result) => {
    		
    		this.setState({
    			
    			dataDev: result.data
    			
    		});
    		
    	});	
        	
        }
    	
    	}
        
        render() {
        	
        	const { dataDev } = this.state;
            
            return(
            
                <section className={dataWrapper}>
                
                	{ dataDev.map(devLine => (
                	
                		<div className={dataWrapperRegLine}>
                        <span></span>
                        <article className={dataWrapperRegLineData}>
                            <p>{devLine.dimensions[0].name}</p>
                            <p>{devLine.metrics[0]} клик</p>
                            <p>{devLine.metrics[5]} конверсия</p>
                            <p>{devLine.metrics[1].toFixed(2)}% отказы</p>
                        </article>
                    	</div>	
                		
                	)) }
                    
                </section>
                
            );
            
        }
        
    }

    class Direct extends React.Component {
        
        constructor(props) {
        	
        	super(props);
        	this.state = {
        		
        		ctr: '',
        		wctr: '',
        		pos: '',
        		pack: '',
        		camps: [],
        		keys: [],
        		goalsArr: [],
        		goalsArrDet: []
        		
        	}
        	
        	// this.showPage = this.showPage.bind(this);
        	
        }
        
        // showPage() {
        	
        	// alert(256);
        	
        	// this.setState({
        		
        		// mainBlock: "main-wrapper main-wrapper--hidd"
        		
        	// });
        	
        // }
        
        componentWillMount() {
        	
        	var dateData = localStorage.getItem('reportDate');
        	
        	if ( dateData == null ) {
        	
        	fetch("...hubrep.php?fork=allGoals&log=" + document.location.href.split('log=')[1])
        	.then(res => res.json())
        	.then((result) => {
        		
        		var goalsPack = [];
        		var locI = 0;
        		
        		for ( var i = 0; i < result.goals.length; i++ ) {
        			
        			// alert(result.goals[i].name);
        			
        			fetch("...hubrep.php?fork=singleGoal&log=" + document.location.href.split('log=')[1] + "&goalIden=" + result.goals[i].id)
        			.then(res1 => res1.json())
        			.then((result1) => {
        				
        				let elStr = '';
        				
        				// alert(JSON.stringify(result1));
        				// alert(result1.query.ids[0]);
        				
        				elStr = result1.query.ids[0] + '$$';
        				
        				for ( var ii = 0; ii < result1.data.length; ii++ ) {
        					
        					elStr += result1.data[ii].dimensions[0].name + '::' + result1.data[ii].metrics[0] + '$$';
        					
        				}
        				
        				// alert(elStr);
        				
        				goalsPack.push(elStr);
        				
        				if ( locI == ( result.goals.length - 1 ) ) {
        				
        					// alert(goalsPack);
        					
        					this.setState({
        			
        						goalsArrDet: goalsPack
        			
        					});
        				
        				}
        				
        				locI++;
        				
        			});
        			
        		}
        		
        		this.setState({
        			
        			goalsArr: result.goals
        			
        		});
        		
        	});
        	
        	fetch("...hubrep.php?fork=allDirect&log=" + document.location.href.split('log=')[1])
        	.then(res => res.text())
        	.then((result) => {
        		
        		this.setState({
        			
        			ctr: result.split(' ')[3].split('\t')[5],
        			wctr: result.split(' ')[3].split('\t')[6],
        			pos: result.split(' ')[3].split('\t')[7],
        			pack: result.split(' ')[3].split('\t')[8].split('T')[0]
        			
        		});
        		
        	});
        	
        	//
        	
        	fetch("...hubrep.php?fork=allDirectCamps&log=" + document.location.href.split('log=')[1])
        	.then(res => res.text())
        	.then((result) => {
        		
        		console.log(result.split('TrafficVolume')[1].split('Total rows')[0].trim().split('\n')[0]);
        		
        		this.setState({
        			
        			camps: result.split('TrafficVolume')[1].split('Total rows')[0].trim().split('\n')
        			
        		});
        		
        	});
        	
        	//
        	
        	var repId = (Math.random() * 1000000).toFixed(0);
        	
        	fetch("...hubrep.php?fork=allDirectKeys&repId=" + repId + "&log=" + document.location.href.split('log=')[1])
        	.then(res => res.text())
        	.then((result) => {
        		
        		//
        		
        	});
        	
        	var upThis = this;
        	
        	setTimeout(function() {
        		
        	fetch("...hubrep.php?fork=allDirectKeys&repId=" + repId + "&log=" + document.location.href.split('log=')[1])
        	.then(function(response) {  
    		
    			if (response.status === 200) {  
        			
        			 fetch("...hubrep.php?fork=allDirectKeys&repId=" + repId + "&log=" + document.location.href.split('log=')[1])
        			.then(res => res.text())
        			.then((result) => {
        				
        				var keysArr = result.split('Position')[1].split('Total rows')[0].trim().split('\n');
        		
        				upThis.setState({
        					
        					keys: keysArr
        					
        				});
        		
        			});
    				
    			}
    			
    			else {
    				
    				setTimeout(function() {
    					
    					fetch("...hubrep.php?fork=allDirectKeys&repId=" + repId + "&log=" + document.location.href.split('log=')[1])
        				.then(res => res.text())
        				.then((result) => {
        		
        					var keysArr = result.split('Position')[1].split('Total rows')[0].trim().split('\n');
        		
        					upThis.setState({
        					
        						keys: keysArr
        					
        					});
        		
        				});
    					
    				}, 2000);
    				
    			}
    		
        	});
        	
        	//
        		
        	}, 2000);
        	
        	}
        	
        	else {
        		
        	var dd1 = dateData.split('::')[0];
        	var dd2 = dateData.split('::')[1];	
        	
        	// alert(dd1);
        	// alert(dd2);
        		
        	fetch("...hubrepDate.php?fork=allGoals&log=" + document.location.href.split('log=')[1])
        	.then(res => res.json())
        	.then((result) => {
        		
        		var goalsPack = [];
        		var locI = 0;
        		
        		for ( var i = 0; i < result.goals.length; i++ ) {
        			
        			// alert(result.goals[i].name);
        			
        			fetch("...hubrepDate.php?d1=" + dd1 + "&d2=" + dd2 + "&fork=singleGoal&log=" + document.location.href.split('log=')[1] + "&goalIden=" + result.goals[i].id)
        			.then(res1 => res1.json())
        			.then((result1) => {
        				
        				let elStr = '';
        				
        				// alert(JSON.stringify(result1));
        				// alert(result1.query.ids[0]);
        				
        				elStr = result1.query.ids[0] + '$$';
        				
        				for ( var ii = 0; ii < result1.data.length; ii++ ) {
        					
        					elStr += result1.data[ii].dimensions[0].name + '::' + result1.data[ii].metrics[0] + '$$';
        					
        				}
        				
        				// alert(elStr);
        				
        				goalsPack.push(elStr);
        				
        				if ( locI == ( result.goals.length - 1 ) ) {
        				
        					// alert(goalsPack);
        					
        					this.setState({
        			
        						goalsArrDet: goalsPack
        			
        					});
        				
        				}
        				
        				locI++;
        				
        			});
        			
        		}
        		
        		this.setState({
        			
        			goalsArr: result.goals
        			
        		});
        		
        	});
        	
        	fetch("...hubrepDate.php?d1=" + dd1 + "&d2=" + dd2 + "&fork=allDirect&log=" + document.location.href.split('log=')[1])
        	.then(res => res.text())
        	.then((result) => {
        		
        		this.setState({
        			
        			ctr: result.split(' ')[3].split('\t')[5],
        			wctr: result.split(' ')[3].split('\t')[6],
        			pos: result.split(' ')[3].split('\t')[7],
        			pack: result.split(' ')[3].split('\t')[8].split('T')[0]
        			
        		});
        		
        	});
        	
        	//
        	
        	fetch("...hubrepDate.php?d1=" + dd1 + "&d2=" + dd2 + "&fork=allDirectCamps&log=" + document.location.href.split('log=')[1])
        	.then(res => res.text())
        	.then((result) => {
        		
        		console.log(result.split('TrafficVolume')[1].split('Total rows')[0].trim().split('\n')[0]);
        		
        		this.setState({
        			
        			camps: result.split('TrafficVolume')[1].split('Total rows')[0].trim().split('\n')
        			
        		});
        		
        	});
        	
        	//
        	
        	var repId = (Math.random() * 1000000).toFixed(0);
        	
        	fetch("...hubrepDate.php?d1=" + dd1 + "&d2=" + dd2 + "&fork=allDirectKeys&repId=" + repId + "&log=" + document.location.href.split('log=')[1])
        	.then(res => res.text())
        	.then((result) => {
        		
        		//
        		
        	});
        	
        	var upThis = this;
        	
        	setTimeout(function() {
        		
        	fetch("...hubrepDate.php?d1=" + dd1 + "&d2=" + dd2 + "&fork=allDirectKeys&repId=" + repId + "&log=" + document.location.href.split('log=')[1])
        	.then(function(response) {  
    		
    			if (response.status === 200) {  
        			
        			 fetch("...hubrepDate.php?d1=" + dd1 + "&d2=" + dd2 + "&fork=allDirectKeys&repId=" + repId + "&log=" + document.location.href.split('log=')[1])
        			.then(res => res.text())
        			.then((result) => {
        				
        				var keysArr = result.split('Position')[1].split('Total rows')[0].trim().split('\n');
        		
        				upThis.setState({
        					
        					keys: keysArr
        					
        				});
        		
        			});
    				
    			}
    			
    			else {
    				
    				setTimeout(function() {
    					
    					fetch("...hubrepDate.php?d1=" + dd1 + "&d2=" + dd2 + "&fork=allDirectKeys&repId=" + repId + "&log=" + document.location.href.split('log=')[1])
        				.then(res => res.text())
        				.then((result) => {
        		
        					var keysArr = result.split('Position')[1].split('Total rows')[0].trim().split('\n');
        		
        					upThis.setState({
        					
        						keys: keysArr
        					
        					});
        		
        				});
    					
    				}, 2000);
    				
    			}
    		
        	});
        	
        	//
        		
        	}, 2000);
        		
        	}
        	
        }
        
        render() {
        	
        	const { ctr, wctr, pos, pack, camps, keys, goalsArr, goalsArrDet } = this.state;
            
            return(
            
                <section className={dataWrapperDirect}>
                    
                    <div className={dataWrapperDirectBlock}>
                        
                        <span></span>
                        <h2>{ctr}%</h2>
                        <p>Показатель CTR</p>
                        
                    </div>
                    <div className={dataWrapperDirectBlock}>
                        
                        <span></span>
                        <h2>{wctr}%</h2>
                        <p>Взвешенный CTR</p>
                        
                    </div>
                    <div className={dataWrapperDirectBlock}>
                        
                        <span></span>
                        <h2>{pos} поз.</h2>
                        <p>Средняя позиция</p>
                        
                    </div>
                    <div className={dataWrapperDirectBlock}>
                        
                        <span></span>
                        <h2>{pack}</h2>
                        <p>Выкупаемый трафик</p>
                        
                    </div>
                    
                    <section className={dataWrapperDirectCamps}>
                        
                        <article className={dataWrapperDirectCampsLine}>
                            <span>Рекламная кампания</span>
                            <span>Выкупаемый трафик</span>
                            <span>Средняя позиция</span>
                            <span>CTR</span>
                        </article>
                        
                        { camps.map(campsLine => (
                        
                        	<article className={dataWrapperDirectCampsLine}>
                            	<span>{campsLine.split('\t')[0]}</span>
                            	<span>{campsLine.split('\t')[5]}</span>
                            	<span>{campsLine.split('\t')[4]}</span>
                            	<span>{campsLine.split('\t')[2]}</span>
                        	</article>	
                        	
                        )) }
                        
                    </section>
                    
                    <section style={{display: "none"}} className={dataWrapperDirectCamps}>
                        
                        <article className={dataWrapperDirectCampsLine}>
                            <span>Ключевое слово</span>
                            <span>Средняя позиция</span>
                            <span>CTR</span>
                        </article>
                        
                        { keys.map(keysLine => (
                        
                        	<article className={dataWrapperDirectCampsLine}>
                            	<span>{keysLine.split('\t')[0].split(' -')[0]}</span>
                            	<span>{keysLine.split('\t')[2].split(' -')[0]}</span>
                            	<span>{keysLine.split('\t')[1].split(' -')[0]}</span>
                        	</article>		
                        	
                        )) }
                        
                    </section>
                    
					{ goalsArr.map(function(goalsLine, ind) {
						
						var locElem = goalsArrDet[ind];
						
						if ( String(locElem).length > 9 ) {
							
							var locElemArr = locElem.split('$$');
							var locElemArrNew = [];
							
							for ( var o = 1; o < locElemArr.length - 1; o++ ) {
							
								locElemArrNew[o] = locElemArr[o];
								
							}  
							
							var iterCount = 0;
						
							// alert(String(locElem).length);
							
							return <section className={dataWrapperDirectCamps}>
                        
                        			<article className={dataWrapperDirectCampsLine}>
                            			<span>Рекламная кампания. Цель "{goalsLine.name}"</span>
                            			<span>Число достижений</span>
                            			<span>--</span>
                            			<span>--</span>
                        			</article>
                        			
                        			{ locElemArrNew.map(function(locElemArrDb) {
                        				
                        				iterCount += +(locElemArrDb.split('::')[1]);
                        				
                        				return <article className={dataWrapperDirectCampsLine}>
                        				
                            				<span>{ locElemArrDb.split('::')[0] }</span>
                            				<span>{ locElemArrDb.split('::')[1] }</span>
                            				<span>--</span>
                            				<span>--</span>
                        				
                        				</article>
                        				
                        			}) }
                        			
                        			<article style={{fontWeight: "700", fontStyle: "italic", backgroundColor: "rgba(255, 190, 78, 0.1)"}} className={dataWrapperDirectCampsLine}>
                        				
                            			<span>Всего конверсий</span>
                            			<span>{ iterCount }</span>
                            			<span>--</span>
                            			<span>--</span>
                        				
                        			</article>
                        
                    			   </section>
							
						}
						
					}) }
                    
                </section>
                
            );
            
        }
        
    }

    class Auditory extends React.Component {
        
        constructor(props) {
        	
        	super(props);
        	this.state = {
        		
        		audSex: [],
        		audAge: [],
        		audBrow: [],
        		audOs: [],
        		audDevModel: [],
        		audInterest: [],

        		audSexOne: '',
        		audAgeOne: '',
        		audBrowOne: '',
        		audOsOne: '',
        		audDevModelOne: '',
        		audInterestOne: '',
        		audInterestTwo: ''
        		
        	}
        	
        }
        
        componentWillMount() {
        	
        	var dateData = localStorage.getItem('reportDate');
        	
        	if ( dateData == null ) {
        	
        	fetch("...hubrep.php?fork=audSex&log=" + document.location.href.split('log=')[1])
        	.then(res => res.json())
        	.then(
        	
        		(result) => {
        			
        			var sex = '';
        			
        			if ( result.data[0].dimensions[0].name == 'мужской' ) { sex = 'мужчина' }
        			else if ( result.data[0].dimensions[0].name == 'женский' ) { sex = 'женщина' }
        			
        			this.setState({
        				
        				audSex: result.data,
        				audSexOne: sex
        				
        			});
        			
        		}	
        	
        	);
        	
        	//
        	
        	fetch("...hubrep.php?fork=audAge&log=" + document.location.href.split('log=')[1])
        	.then(res => res.json())
        	.then(
        	
        		(result) => {
        			
					var age = '';
					
					if ( result.data[0].dimensions[0].name == 'младше 18 лет' ) { age = 'до 18 лет' }
					else if ( result.data[0].dimensions[0].name == '18‑24 года' ) { age = '21 год' }
					else if ( result.data[0].dimensions[0].name == '25‑34 года' ) { age = '29 лет' }
					else if ( result.data[0].dimensions[0].name == '35‑44 года' ) { age = '39 лет' }
					else if ( result.data[0].dimensions[0].name == '45-54 года' ) { age = '49 лет' }
					else if ( result.data[0].dimensions[0].name == '55 лет и старше' ) { age = 'от 55 лет' }
        			
        			this.setState({
        				
        				audAge: result.data,
        				audAgeOne: age
        				
        			});
        			
        		}	
        	
        	);
        	
        	//
        	
        	fetch("...hubrep.php?fork=audBrow&log=" + document.location.href.split('log=')[1])
        	.then(res => res.json())
        	.then(
        	
        		(result) => {
        			
        			this.setState({
        				
        				audBrow: result.data,
        				audBrowOne: result.data[0].dimensions[0].name
        				
        			});
        			
        		}	
        	
        	);
        	
        	//
        	
        	fetch("...hubrep.php?fork=audOs&log=" + document.location.href.split('log=')[1])
        	.then(res => res.json())
        	.then(
        	
        		(result) => {
        			
        			this.setState({
        				
        				audOs: result.data,
        				audOsOne: result.data[0].dimensions[0].name
        				
        			});
        			
        		}	
        	
        	);
        	
        	//
        	
        	fetch("...hubrep.php?fork=audDevModel&log=" + document.location.href.split('log=')[1])
        	.then(res => res.json())
        	.then(
        	
        		(result) => {
        			
        			this.setState({
        				
        				audDevModel: result.data,
        				audDevModelOne: result.data[0].dimensions[0].name
        				
        			});
        			
        		}	
        	
        	);
        	
        	//
        	
        	fetch("...hubrep.php?fork=audInterest&log=" + document.location.href.split('log=')[1])
        	.then(res => res.json())
        	.then(
        	
        		(result) => {
        			
        			this.setState({
        				
        				audInterest: result.data,
                        audInterestOne: result.data[0].dimensions[0].name,
                        audInterestTwo: result.data[1].dimensions[0].name
        				
        			});
        			
        		}	
        	
        	);
        	
        	}
        	
        	else {
        		
        	var dd1 = dateData.split('::')[0];
        	var dd2 = dateData.split('::')[1];		
        		
        	fetch("...hubrepDate.php?d1=" + dd1 + "&d2=" + dd2 + "&fork=audSex&log=" + document.location.href.split('log=')[1])
        	.then(res => res.json())
        	.then(
        	
        		(result) => {
        			
        			var sex = '';
        			
        			if ( result.data[0].dimensions[0].name == 'мужской' ) { sex = 'мужчина' }
        			else if ( result.data[0].dimensions[0].name == 'женский' ) { sex = 'женщина' }
        			
        			this.setState({
        				
        				audSex: result.data,
        				audSexOne: sex
        				
        			});
        			
        		}	
        	
        	);
        	
        	//
        	
        	fetch("...hubrepDate.php?d1=" + dd1 + "&d2=" + dd2 + "&fork=audAge&log=" + document.location.href.split('log=')[1])
        	.then(res => res.json())
        	.then(
        	
        		(result) => {
        			
					var age = '';
					
					if ( result.data[0].dimensions[0].name == 'младше 18 лет' ) { age = 'до 18 лет' }
					else if ( result.data[0].dimensions[0].name == '18‑24 года' ) { age = '21 год' }
					else if ( result.data[0].dimensions[0].name == '25‑34 года' ) { age = '29 лет' }
					else if ( result.data[0].dimensions[0].name == '35‑44 года' ) { age = '39 лет' }
					else if ( result.data[0].dimensions[0].name == '45-54 года' ) { age = '49 лет' }
					else if ( result.data[0].dimensions[0].name == '55 лет и старше' ) { age = 'от 55 лет' }
        			
        			this.setState({
        				
        				audAge: result.data,
        				audAgeOne: age
        				
        			});
        			
        		}	
        	
        	);
        	
        	//
        	
        	fetch("...hubrepDate.php?d1=" + dd1 + "&d2=" + dd2 + "&fork=audBrow&log=" + document.location.href.split('log=')[1])
        	.then(res => res.json())
        	.then(
        	
        		(result) => {
        			
        			this.setState({
        				
        				audBrow: result.data,
        				audBrowOne: result.data[0].dimensions[0].name
        				
        			});
        			
        		}	
        	
        	);
        	
        	//
        	
        	fetch("...hubrepDate.php?d1=" + dd1 + "&d2=" + dd2 + "&fork=audOs&log=" + document.location.href.split('log=')[1])
        	.then(res => res.json())
        	.then(
        	
        		(result) => {
        			
        			this.setState({
        				
        				audOs: result.data,
        				audOsOne: result.data[0].dimensions[0].name
        				
        			});
        			
        		}	
        	
        	);
        	
        	//
        	
        	fetch("...hubrepDate.php?d1=" + dd1 + "&d2=" + dd2 + "&fork=audDevModel&log=" + document.location.href.split('log=')[1])
        	.then(res => res.json())
        	.then(
        	
        		(result) => {
        			
        			this.setState({
        				
        				audDevModel: result.data,
        				audDevModelOne: result.data[0].dimensions[0].name
        				
        			});
        			
        		}	
        	
        	);
        	
        	//
        	
        	fetch("...hubrepDate.php?d1=" + dd1 + "&d2=" + dd2 + "&fork=audInterest&log=" + document.location.href.split('log=')[1])
        	.then(res => res.json())
        	.then(
        	
        		(result) => {
        			
        			this.setState({
        				
        				audInterest: result.data,
                        audInterestOne: result.data[0].dimensions[0].name,
                        audInterestTwo: result.data[1].dimensions[0].name
        				
        			});
        			
        		}	
        	
        	);
        		
        	}
        	
        }
         
        render() {
        	
        	const { audSex, audAge, audBrow, audOs, audDevModel, audInterest, audSexOne, audAgeOne, audBrowOne, audOsOne, audDevModelOne, audInterestOne, audInterestTwo } = this.state;
            
            return(
            
                <section className={dataWrapperAuditory}>
                    
                    <section className={dataWrapperAuditoryCol}>
                        
                        <span>Пол, клики</span>
                        
                        { audSex.map(sexLine => (
                        
                        	<article className={dataWrapperAuditoryColData}>
                            
                            	<p>{sexLine.dimensions[0].name}</p>
                            	<p>{sexLine.metrics[0]}</p>
                            
                        	</article>
                        	
                        )) }
                        
                    </section>
                    <section className={dataWrapperAuditoryCol}>
                        
                        <span>Возраст, клики</span>
                        
                        { audAge.map(ageLine => (
                        
                        	<article className={dataWrapperAuditoryColData}>
                            
                            	<p>{ageLine.dimensions[0].name}</p>
                            	<p>{ageLine.metrics[0]}</p>
                            
                        	</article>
                        	
                        )) }
                        
                    </section>
                    <section className={dataWrapperAuditoryCol}>
                        
                        <span>Браузер, клики</span>
                        
                        { audBrow.map(browLine => (
                        
                        	<article className={dataWrapperAuditoryColData}>
                            
                            	<p>{browLine.dimensions[0].name}</p>
                            	<p>{browLine.metrics[0]}</p>
                            
                        	</article>
                        	
                        )) }
                        
                    </section>
                    <section className={dataWrapperAuditoryCol}>
                        
                        <span>ОС, клики</span>
                        
                        { audOs.map(osLine => (
                        
                        	<article className={dataWrapperAuditoryColData}>
                            
                            	<p>{osLine.dimensions[0].name}</p>
                            	<p>{osLine.metrics[0]}</p>
                            
                        	</article>
                        	
                        )) }
                        
                    </section>
                    <section className={dataWrapperAuditoryCol}>
                        
                        <span>Устройство, клики</span>
                        
                        { audDevModel.map(devModLine => (
                        
                        	<article className={dataWrapperAuditoryColData}>
                            
                            	<p>{devModLine.dimensions[0].name}</p>
                            	<p>{devModLine.metrics[0]}</p>
                            
                        	</article>
                        	
                        )) }
                        
                    </section>
                    <section className={dataWrapperAuditoryCol}>
                        
                        <span>Интересы, клики</span>
                    	
                    	{ audInterest.map(interestLine => (
                        
                        	<article className={dataWrapperAuditoryColData}>
                            
                            	<p>{interestLine.dimensions[0].name}</p>
                            	<p>{interestLine.metrics[0]}</p>
                            
                        	</article>
                        	
                        )) }
                        
                    </section>
                    
                    <hr/>
                    
                    <article className={dataWrapperAuditoryColDataTop}>
                        
                        <div className={dataWrapperAuditoryColDataTopCart}>
                            
                            <span>Ваш посетитель - { audSexOne }, { audAgeOne }</span>
                            <p>Он пользуется смартфоном { audDevModelOne }. Чаще всего заходит на ваш сайт, используя браузер { audBrowOne }, его основная операционная система { audOsOne }. Данные по ОС и браузеру не обязтаельно будут соотноситься с данными по устройству. Основные сферы интересов вашего посетителя "{ audInterestOne }" и "{ audInterestTwo }".</p>
                            
                        </div>
                        
                    </article>
                    
                </section>
                
            );
            
        }
        
    }
    
    class Works extends React.Component {
    	
    	constructor(props) {
    		
    		super(props);
    		this.state = {
    			
    			work: []
    			
    		}
    		
    	}
    	
    	componentWillMount() {
    	
    	// fetch("...hubrep.php?fork=devYms&log=" + document.location.href.split('log=')[1])
    	// .then(res => res.json())
    	// .then(
    	// (result) => {
    		
    		// this.setState({
    			
    			// dataDev: result.data
    			
    		// });
    		
    	// });
    	
    	}
        
        render() {
            
            return(
            
                <section className={dataWrapper}>
                
                	<p className={dataWrapperWorks}>Данный модуль находится в стадии разработки</p>
                
                </section>
                
            );
            
        }
        
    }

    class Footer extends React.Component {
        
        render() {
            
            return(
            
                <footer className={FooterBlock}>
                    
                    <p>Динамический HTML отчет от компании Айтекс<br/>Сервис предоставляется для использования клиентами. Использование третьими лицами запрещено</p>
                    <p>Наш сайт - www.itexpromo.ru<br/>(343)222-17-20<br/><a href="http://cstr.tilda.ws/">Быстрая установка целей Метрики</a></p>
                    
                </footer>
            
            );
            
        }
        
    }

    class MainBody extends React.Component {
    	
    	constructor(props) {
    		
    		super(props);
    		this.state = {
    			
    			dinClass: '',
    			showPage: '',
    			
    			y1: '',
    			m1: '',
    			d1: '',
    			y2: '',
    			m2: '',
    			d2: '',
    			dates1: 'Последние',
    			dates2: '30 дней'
    			
    		}
    		
    		this.showCalen = this.showCalen.bind(this);
    		this.hiddCalen = this.hiddCalen.bind(this);
    		this.shPage = this.shPage.bind(this);
    		
    		this.checkDateY1 = this.checkDateY1.bind(this);
    		this.checkDateM1 = this.checkDateM1.bind(this);
    		this.checkDateD1 = this.checkDateD1.bind(this);
    		this.checkDateY2 = this.checkDateY2.bind(this);
    		this.checkDateM2 = this.checkDateM2.bind(this);
    		this.checkDateD2 = this.checkDateD2.bind(this);
    		this.compDataArr = this.compDataArr.bind(this);
    		this.updDate = this.updDate.bind(this);
    		
    	}
    	
    	componentWillMount() {
    		
    		fetch("...hubrep.php?fork=logDataGet&log=" + document.location.href.split('log=')[1])
        	.then(res => res.text())
        	.then(
        	
        		(result) => {
        			
        			var d1 = result.split('::')[0];
        			var d2 = result.split('::')[1];
        			
        			// alert(result + ' - HELLOO');
        			
        			if ( result.length <= 22 ) {
        			
        				localStorage.setItem('reportDate', result);
        			
        			}
        			
        			else {
        				
        				localStorage.clear();
        				
        			}
        			
        			// alert(localStorage.getItem('reportDate'));
        			
        			var dateData = localStorage.getItem('reportDate');
    		
    				if ( dateData != null ) {
    			
    					var dd1 = dateData.split('::')[0];
        				var dd2 = dateData.split('::')[1];	
        		
        				this.setState({
        			
        					dates1: dd1,
        					dates2: dd2
        			
        				});
    			
    				}
        			
        		}	
        		
        	);
    		
    	}
    	
    	compDataArr() {
    		
    		// var dateData = localStorage.getItem('reportDate');
        	// if ( dateData == null ) {
    		
    	}
    	
    	checkDateY1(e) {
    		
    		var vary = e.target.value;
    		
    		this.setState({
    			
    			y1: vary
    			
    		});
    		
    		
    	}
    	
    	checkDateM1(e) {
    		
    		var vary = e.target.value;
    		
    		this.setState({
    			
    			m1: vary
    			
    		});
    		
    		
    	}
    	
    	checkDateD1(e) {
    		
    		var vary = e.target.value;
    		
    		this.setState({
    			
    			d1: vary
    			
    		});
    		
    		
    	}
    	
    	//
    	
    	checkDateY2(e) {
    		
    		var vary = e.target.value;
    		
    		this.setState({
    			
    			y2: vary
    			
    		});
    		
    		
    	}
    	
    	checkDateM2(e) {
    		
    		var vary = e.target.value;
    		
    		this.setState({
    			
    			m2: vary
    			
    		});
    		
    		
    	}
    	
    	checkDateD2(e) {
    		
    		var vary = e.target.value;
    		
    		this.setState({
    			
    			d2: vary
    			
    		});
    		
    		
    	}
    	
    	updDate() {
    		
    		var str1 = this.state.y1 + '-' + this.state.m1 + '-' + this.state.d1;
    		var str2 = this.state.y2 + '-' + this.state.m2 + '-' + this.state.d2;
    		
    		var str = str1 + '::' + str2;
    		
    		// localStorage.setItem('reportDate', str);
    		// alert(localStorage.getItem('reportDate'));
    		// localStorage.clear();
    		
    		fetch("...hubrep.php?fork=logData&log=" + document.location.href.split('log=')[1] + "&dateArr=" + str)
        	.then(res => res.text())
        	.then(
        	
        		(result) => {
        			
        			setTimeout(function() { document.location.href = document.location.href; }, 600);
        			
        			// var d1 = result.split('::')[0];
        			// var d2 = result.split('::')[1];
        			
        			// alert(d1);
        			// alert(d2);
        		}	
        		
        	);
    		
    		// setTimeout(function() { document.location.href = document.location.href; }, 600);
    		
    	}
    	
    	showCalen() {
        	
        	this.setState({
        		
        		dinClass: ' main-wrapper--down'
        		
        	});
        	
        }
        
        hiddCalen() {
        	
        	this.setState({
        		
        		dinClass: ''
        		
        	});
        	
        }
        
        shPage() {
        	
        	this.setState({
        		
        		showPage: ' data-wrapper--hidd'
        		
        	});
        	
        }
    	
        render() {
            return(
            
                <main className={mainBlock + this.state.dinClass + this.state.showPage}>
                    
                    <Header></Header>
                    <span className={labelClassTwo}>{labels.label1}</span>
                    <Direct></Direct>
                    <article className={insiderBlock}>
					
						<p>Нужно установить на сайт больше целей? Используйте наш инструмент, с ним вам не потребуются навыки программиста и вы сможете легко отслеживать отдачу</p>
						<span onClick={this.shPage}>ПОДРОБНЕЕ</span>
						<span>НА САЙТ<a href="http://cstr.tilda.ws/" target="_blank"></a></span>
					
					</article>
                    <span className={labelClass}>{labels.label2}</span>
                    <Campaigns></Campaigns>
                    <span className={labelClass}>{labels.label3}</span>
                    <Targets></Targets>
                    <span className={labelClass}>{labels.label8}</span>
                    <TargetsSites></TargetsSites>
                    <span className={labelClass}>{labels.label4}</span>
                    <Regions></Regions>
                    <span className={labelClass}>{labels.label5}</span>
                    <Devices></Devices>
                    <span className={labelClass}>{labels.label6}</span>
                    <AllTraffic></AllTraffic>
                    <span className={labelClass}>{labels.label7}</span>
                    <Auditory></Auditory>
                    <span className={labelClass}>{labels.label9}</span>
                    <Works></Works>
                    
                    <Footer></Footer>
                    
                    <article onClick={this.showCalen} className={DateBlock}>
                    
                    	<span>{this.state.dates1}</span>
                    	<span>{this.state.dates2}</span>
                    	<span></span>
                    
                	</article>
                    
                    <TelegramBot></TelegramBot>
                    
                    <div className={DateBlockSelect}>
                    
                    	<span onClick={this.updDate}>OK</span>
                    
                    	<div>
                    	
                    		<input onBlur={this.checkDateY1} type="text" placeholder="год" maxlength="4"/>
                    		<input onBlur={this.checkDateM1} type="text" placeholder="месяц" maxlength="2"/>
                    		<input onBlur={this.checkDateD1} type="text" placeholder="день" maxlength="2"/>
                    	
                    	</div>
                    	<div>
                    	
                    		<input onBlur={this.checkDateY2} type="text" placeholder="год" maxlength="4"/>
                    		<input onBlur={this.checkDateM2} type="text" placeholder="месяц" maxlength="2"/>
                    		<input onBlur={this.checkDateD2} type="text" placeholder="день" maxlength="2"/>
                    	
                    	</div>
                    	
                    	<span onClick={this.hiddCalen}></span>
                    
                    </div>
                
                </main>
            
            );
        }
    }

    ReactDOM.render(<MainBody></MainBody>, document.getElementById('app'));
    
    // support scripts

    (function(e) {
    	
    	setInterval(function() {
        
        // .data-wrapper__forHints
        
        $(".data-wrapper__canal--script:eq(0) > i").mouseover(function(e) {
            
            $(".data-wrapper__forHints").css("margin-top", '-49px');
            setTimeout(function() { $(".data-wrapper__forHints").css("opacity", '1'); }, 300);
            
        });
        
        $(".data-wrapper__canal--script:eq(1) > i").mouseover(function(e) {
            
            $(".data-wrapper__forHints").css("margin-top", '29px');
            setTimeout(function() { $(".data-wrapper__forHints").css("opacity", '1'); }, 300);
            
        });
        
        $(".data-wrapper__canal--script:eq(2) > i").mouseover(function(e) {
            
            $(".data-wrapper__forHints").css("margin-top", '107px');
            setTimeout(function() { $(".data-wrapper__forHints").css("opacity", '1'); }, 300);
            
        });
        
        $(".data-wrapper__canal--script:eq(3) > i").mouseover(function(e) {
            
            $(".data-wrapper__forHints").css("margin-top", '185px');
            setTimeout(function() { $(".data-wrapper__forHints").css("opacity", '1'); }, 300);
            
        });
        
        $(".data-wrapper__canal--script:eq(4) > i").mouseover(function(e) {
            
            $(".data-wrapper__forHints").css("margin-top", '263px');
            setTimeout(function() { $(".data-wrapper__forHints").css("opacity", '1'); }, 300);
            
        });
        
        $(".data-wrapper__canal--script:eq(5) > i").mouseover(function(e) {
            
            $(".data-wrapper__forHints").css("margin-top", '341px');
            setTimeout(function() { $(".data-wrapper__forHints").css("opacity", '1'); }, 300);
            
        });
        
        $(".data-wrapper__canal--script:eq(6) > i").mouseover(function(e) {
            
            $(".data-wrapper__forHints").css("margin-top", '419px');
            setTimeout(function() { $(".data-wrapper__forHints").css("opacity", '1'); }, 300);
            
        });
        
        $(".data-wrapper__canal--script").mouseout(function(e) {

            setTimeout(function() { $(".data-wrapper__forHints").css("opacity", '0'); }, 300);
            
        });
        
    	}, 500);
        
    })();

    // ux

    (function() {
    	
    	setInterval(function() {
        
        $(".data-wrapper__canal").click(function() {
            
            $(".data-wrapper__canal").css("background-color", "white");
            $(".data-wrapper__canal > i").css("display", "none");
            this.style.backgroundColor = '#f6f6f6';
            this.getElementsByTagName('i')[0].style.display = 'block';
            
        });
        
        $(".data-wrapper__campaign").click(function() {
            
            $(".data-wrapper__campaign").css("background-color", "white");
            
            document.getElementsByClassName('data-wrapper__campaign')[document.getElementsByClassName('data-wrapper__campaign').length - 1].style.backgroundColor = 'rgba(255, 190, 78, 0.1)';
            
            $(".data-wrapper__campaign > i").css("display", "none");
            this.style.backgroundColor = '#f6f6f6';
            this.getElementsByTagName('i')[0].style.display = 'block';
            
        });
        
    	}, 500);
        
    })();
   
    </script>
</body>
</html>
