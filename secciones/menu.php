<!DOCTYPE html>
<html xml:lang="es" lang="es">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />
<style>
/* Clearfix */
.clear:before, .clear:after {
    content: " ";
    display: table;
}

.clear:after {
    clear: both;
}

.clear {
    *zoom: 1;
}

a#pull {
    display: none;
}
nav {
    height: 40px;
    width: 100%;
    background: #000;
    position: relative;
    border-bottom: solid 1px #DDD;
}

nav ul {
    padding: 0;
    margin: 0 auto;
    width: 600px;
    height: 40px;
}

nav li {
    display: inline;
    float: left;
}

nav a {
    color: #FFF;
    display: inline-block;
    width: 100px;
    text-align: center;
    line-height: 40px;
}

nav li a {
    border-right: 1px solid #576979;
    border-left: 1px solid #576979;
}

nav li:last-child a {
    border-right: 0;
}

nav a:hover, nav a:active {
    background-color: #fff;
}
@media only screen and (max-width : 500px) {
    nav {
        border-bottom: 0;
        height: auto;
    }

    nav ul {
        display: none;
        height: auto;
        width: 100%;
    }

    nav li {
        width: 50%;
        float: left;
        position: relative;
    }

    nav a {
        text-align: left;
        width: 100%;
        text-indent: 25px;
    }

    nav a#pull {
        display: block;
        background-color: #666;
        width: 100%;
        position: relative;
    }

    nav a#pull:after {
        content:"";
        background: url('nav-icon.png') no-repeat;
        width: 30px;
        height: 30px;
        display: inline-block;
        position: absolute;
        right: 15px;
        top: 10px;
    }
}

</style>
<script src="js/jquery.min.js"></script>
<script>
$(function() {
    var pull = $('#pull');
    menu = $('nav ul');
    menuHeight = menu.height();

    $(pull).on('click', function(e) {
        e.preventDefault();
        menu.slideToggle();
    });
});

$(window).resize(function(){
    var w = $(window).width();
    if(w > 320 && menu.is(':hidden')) {
        menu.removeAttr('style');
    }
});
</script>
</head>
<body>
<nav>
    <ul>
        <li><a href="index.php">Agregar</a></li>
        <li><a href="mostrar.php">Mostrar</a></li><br clear="all" />
    </ul>
    <a id="pull" href="#">Menu</a>
</nav>
</body>
</html>
